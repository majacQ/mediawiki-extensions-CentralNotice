/**
 * CentralNotice Administrative UI - Common Functions
 */
window.mw.centralNotice.adminUi = {};

// Collapse and uncollapse detailed view for an individual log entry
window.toggleLogDisplay = function ( logId ) {
	var thisCollapsed = document.getElementById( 'cn-collapsed-' + logId );
	var thisUncollapsed = document.getElementById( 'cn-uncollapsed-' + logId );
	var thisDetails = document.getElementById( 'cn-log-details-' + logId );
	if ( thisCollapsed.style.display === 'none' ) {
		thisUncollapsed.style.display = 'none';
		thisCollapsed.style.display = 'block';
		thisDetails.style.display = 'none';
	} else {
		thisCollapsed.style.display = 'none';
		thisUncollapsed.style.display = 'block';
		thisDetails.style.display = 'table-row';
	}
};

// Collapse and uncollapse log filter interface
window.toggleFilterDisplay = function () {
	var thisCollapsed = document.getElementById( 'cn-collapsed-filter-arrow' );
	var thisUncollapsed = document.getElementById( 'cn-uncollapsed-filter-arrow' );
	var thisFilters = document.getElementById( 'cn-log-filters' );
	if ( thisCollapsed.style.display === 'none' ) {
		thisUncollapsed.style.display = 'none';
		thisCollapsed.style.display = 'inline-block';
		thisFilters.style.display = 'none';
	} else {
		thisCollapsed.style.display = 'none';
		thisUncollapsed.style.display = 'inline-block';
		thisFilters.style.display = 'block';
	}
};

// Switch among various log displays
window.switchLogs = function ( baseUrl, logType ) {
	encodeURIComponent( logType );
	window.location = baseUrl + '?log=' + logType;
};

// Insert banner close button
window.insertButton = function( buttonType ) {
	var buttonValue, sel;
	var bannerField = document.getElementById( 'templateBody' );
	if ( buttonType === 'close' ) {
		buttonValue = '<a href="#" title="'
			+ mediaWiki.msg( 'centralnotice-close-title' )
			+ '" onclick="hideBanner();return false;">'
			+ '<img border="0" src="' + mediaWiki.config.get( 'wgNoticeCloseButton' )
			+ '" alt="' + mediaWiki.msg( 'centralnotice-close-title' )
			+ '" /></a>';
	}
	if ( document.selection ) {
		// IE support
		bannerField.focus();
		sel = document.selection.createRange();
		sel.text = buttonValue;
	} else if ( bannerField.selectionStart || bannerField.selectionStart == '0' ) {
		// Mozilla support
		var startPos = bannerField.selectionStart;
		var endPos = bannerField.selectionEnd;
		bannerField.value = bannerField.value.substring(0, startPos)
			+ buttonValue
			+ bannerField.value.substring(endPos, bannerField.value.length);
	} else {
		bannerField.value += buttonValue;
	}
	bannerField.focus();
};

// Make sure the contents of the banner body are valid
window.validateBannerForm = function( form ) {
	var output = '';
	var pos = form.templateBody.value.indexOf( 'document.write' );
	if ( pos > -1 ) {
		output += mediaWiki.msg( 'centralnotice-documentwrite-error' ) + '\n';
	}
	if ( output ) {
		alert( output );
		return false;
	}
	return true;
};

window.addEventListener( 'message', receiveMessage, false );
function receiveMessage( event ) {
	var remoteData = JSON.parse( event.data );
	if ( remoteData.banner && remoteData.height ) {
		$( "#cn-banner-preview-" + remoteData.banner + " iframe" ).height( remoteData.height );
	}
}

jQuery(document).ready( function ( $ ) {
	var bucketCheck, buckets;

	// Render jquery.ui.datepicker on appropriate fields
	$( '.centralnotice-datepicker' ).each( function () {
		var altFormat = 'yymmdd000000';
		var altField = document.getElementById( this.id + '_timestamp' );
		// Remove the time, leaving only the date info
		$( this ).datepicker({
			'altField': altField,
			'altFormat': altFormat,
			'dateFormat': 'yy-mm-dd'
		});

		if ( altField.value ) {
			altField.value = altField.value.substr( 0, 8 ) + '000000';
			var defaultDate = $.datepicker.parseDate( altFormat, altField.value );
			$( this ).datepicker(
				'setDate', defaultDate
			);
		}
	});
	$( '.centralnotice-datepicker-limit_one_year' ).datepicker(
		'option',
		{
			'maxDate': '+1Y'
		}
	);

	// Do the fancy multiselector; but we have to wait for some arbitrary time until the
	// CSS has been applied... Yes, this is an egregious hack until I rewrite the mutliselector
	// to NOT suck -- e.g. make it dynamic... whoo...
	setTimeout( function() {
		$('select[multiple="multiple"]' ).multiselect({sortable: false, dividerLocation: 0.5});
	}, 250);

	// Reveal the geoMultiSelector when the geotargetted checkbox is checked
	if( !$( '#geotargeted' ).prop( 'checked' ) ) {
		$( '#geoMultiSelector' ).fadeOut( 'fast' );
	}
	$( '#geotargeted' ).click(function () {
		if ( this.checked ) {
			$( '#geoMultiSelector' ).fadeIn( 'fast' );
		} else {
			$( '#geoMultiSelector' ).fadeOut( 'fast' );
		}
	});

	// Reveal the landing page interface when the autolink checkbox is checked
	$( '#autolink' ).click(function () {
		if ( $( '#autolink' ).prop( 'checked' ) ) {
			$( '#autolinkInterface' ).fadeIn( 'fast' );
		} else {
			$( '#autolinkInterface' ).fadeOut( 'fast' );
		}
	});

	// Special:CentralNotice; keep data-sort-value attributes for
	// jquery.tablesorter in sync
	$( '.mw-cn-input-check-sort' ).on( 'change click blur', function () {
		$(this).parent( 'td' )
			.data( 'sortValue', Number( this.checked ) );
	} );

	// Bucketing! Disable bucket selectors if #buckets is not checked.
	bucketSelect = $( '#buckets' );
	buckets = $( 'select[id^="bucketSelector"]' );

    bucketSelect.change( function () {
        numBuckets = parseInt( this[this.selectedIndex].value );

        if ( numBuckets == 1 ) {
            buckets.prop( 'disabled', true );
        } else {
            buckets.prop( 'disabled', false );
            // Go through and modify all the options -- disabling inappropriate ones
            // and remapping the rings
            buckets.each( function() {
                var curBucket = parseInt( this[this.selectedIndex].value );
                $(this).val( curBucket % numBuckets );

                for ( var i = 0; i < this.options.length; i++ ) {
                    $(this.options[i]).prop( 'disabled', !(i < numBuckets) );
                }
            })
        }
	} );

	// Initial state
	bucketSelect.trigger( 'change' );
} );