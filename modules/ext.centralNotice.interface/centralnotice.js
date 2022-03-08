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

window.selectProjects = function ( selectAll ) {
	var selectBox = document.getElementById( 'projects[]' );
	var firstSelect = selectBox.options.length - 1;
	for ( var i = firstSelect; i >= 0; i-- ) {
		selectBox.options[i].selected = selectAll;
	}
};
window.selectLanguages = function( selectAll ) {
	var selectBox = document.getElementById( 'project_languages[]' );
	var firstSelect = selectBox.options.length - 1;
	for ( var i = firstSelect; i >= 0; i-- ) {
		selectBox.options[i].selected = selectAll;
	}
};
window.top10Languages = function() {
	var selectBox = document.getElementById( 'project_languages[]' );
	var top10 = ['en', 'de', 'fr', 'it', 'pt', 'ja', 'es', 'pl', 'ru', 'nl'];
	selectLanguages(false);
	for ( var i = 0; i < selectBox.options.length; i++ ) {
		var lang = selectBox.options[i].value;
		if ( top10.toString().indexOf( lang ) !== -1 ) {
			selectBox.options[i].selected = true;
		}
	}
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

jQuery(document).ready( function ( $ ) {

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

	// Reveal the geoMultiSelector when the geotargetted checkbox is checked
	$( '#geotargeted' ).click(function () {
		if ( $( '#geotargeted:checked' ).val() !== undefined ) {
			$( '#geoMultiSelector' ).fadeIn( 'fast' );
		} else {
			$( '#geoMultiSelector' ).fadeOut( 'fast' );
		}
	});

	// Reveal the landing page interface when the autolink checkbox is checked
	$( '#autolink' ).click(function () {
		if ( $( '#autolink:checked' ).val() !== undefined ) {
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

    // Bucketing! On load set disabled if required, then change state based on checkbox
    if ( $( '#buckets:checked' ).val() == undefined ) {
        $("select[id^='bucket']").each( function() { $(this).attr( 'disabled', 'true' ) });
    }
    $( '#buckets' ).click(function() {
        var els = $("select[id^='bucket']");
        if ( $( '#buckets:checked' ).val() !== undefined ) {
            els.each( function() { $(this).removeAttr( 'disabled' ) });
        } else {
            els.each( function() { $(this).attr( 'disabled', 'true' ) });
        }
    });
} );
