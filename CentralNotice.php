<?php
/**
 * CentralNotice extension
 * For more info see https://www.mediawiki.org/wiki/Extension:CentralNotice
 *
 * This file loads everything needed for the CentralNotice extension to function.
 *
 * @file
 * @ingroup Extensions
 * @license GNU General Public Licence 2.0 or later
 */

$wgExtensionCredits[ 'other' ][] = array(
	'path'           => __FILE__,
	'name'           => 'CentralNotice',
	'author'         => array(
		'Elliott Eggleston',
		'Tomasz Finc',
		'Andrew Russell Green',
		'Ryan Kaldari',
		'Trevor Parscal',
		'Matthew Walker',
		'Adam Roses Wight',
		'Brion Vibber',
	),
	'version'        => '2.5.1',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:CentralNotice',
	'descriptionmsg' => 'centralnotice-desc',
	'license-name' => 'GPL-2.0+',
);

$dir = __DIR__;

/* Configuration */

// $wgNoticeProject is used for targeting campaigns to specific wikis. It
// should be overridden on each wiki with the appropriate value.
// Actual user language (wgUserLanguage) is used for banner localisation.
$wgNoticeProject = 'wikipedia';

// List of available projects
$wgNoticeProjects = array(
	'wikipedia',
	'wiktionary',
	'wikiquote',
	'wikibooks',
	'wikidata',
	'wikinews',
	'wikisource',
	'wikiversity',
	'wikivoyage',
	'wikimedia',
	'commons',
	'meta',
	'wikispecies',
	'test',
);

// Enable the campaign hosting infrastructure on this wiki...
// Set to false for wikis that only use a sister site for the control.
$wgNoticeInfrastructure = true;

// The name of the database which hosts the centralized campaign data.  If false,
// we will default to using the primary database.
$wgCentralDBname = false;

// URL which is hit after a banner is loaded, for compatibility with analytics.
$wgCentralBannerRecorder = false;

// Sample rate for recording impressions to the above URL.
$wgCentralNoticeSampleRate = 1 / 100;

// Protocol and host name of the wiki that hosts the CentralNotice infrastructure,
// for example '//meta.wikimedia.org'. This is used for DNS prefetching.
$wgCentralHost = false;

// The script path on the wiki that hosts the CentralNotice infrastructure
// For example 'http://meta.wikimedia.org/w/index.php'
$wgCentralPagePath = false;

// The API path on the wiki that hosts the CentralNotice infrastructure
// For example 'http://meta.wikimedia.org/api.php'
// This must be set if you enable the selection of banners on the client and
// you don't have direct access to the infrastructure database (see
// $wgCentralDBname).  Note that when this is set, it will override your
// database settings.
$wgCentralNoticeApiUrl = false;

// URL for BannerLoader, for requests to fetch a banner that is already
// known (using the banner URL param). If false, it will default to
// Special:BannerLoader on the machine serving ResourceLoader requests.
$wgCentralSelectedBannerDispatcher = false;

// Enable the loader itself
// Allows to control the loader visibility, without destroying infrastructure
// for cached content
$wgCentralNoticeLoader = true;

// Flag for turning on fundraising specific features
$wgNoticeEnableFundraising = true;

// Base URL for default fundraiser landing page (without query string)
$wgNoticeFundraisingUrl = 'https://donate.wikimedia.org/wiki/Special:LandingCheck';

// Source for live counter information
$wgNoticeCounterSource = 'http://wikimediafoundation.org/wiki/Special:ContributionTotal?action=raw';
$wgNoticeDailyCounterSource = 'http://wikimediafoundation.org/wiki/Special:DailyTotal?action=raw';

// URL for a banner close button
$wgNoticeCloseButton = '//upload.wikimedia.org/wikipedia/foundation/2/20/CloseWindow19x19.png';

// URL prefix where banner screenshots are stored. False if this feature is disabled.
// meta.wikimedia.org CentralNotice banners are archived at 'http://fundraising-archive.wmflabs.org/banner/'
$wgNoticeBannerPreview = false;

// Domain to set global cookies for.
// Example: '.wikipedia.org'
$wgNoticeCookieDomain = '';

/**
 * @var string[] $wgNoticeCookieDurations How long to respect different types
 * of banner hiding cookies, in seconds. bannerController.js selects one of
 * these entries based on the  cookie's 'reason' element and adds that to the
 * cookie's 'created' element to determine when to stop hiding the banner.
 */
$wgNoticeCookieDurations = array(
	// The amount of time banners will be hidden by the close box.
	// Defaults to two weeks.
	'close' => 1209600,
	// Amount of time the banners will hide after a successful donation.
	// Defaults to one year.
	'donate' => 31536000
);

/**
 * @var string Timestamp after which old-format 'hide' cookies should be deleted
 */
$wgNoticeOldCookieEpoch = '20141109000000';

/**
 * @var string[] $wgNoticeHideUrls Locations of Special:HideBanner targets to hit
 * when a banner close button is pressed. The hides will then be specific to each
 * domain specified by $wgNoticeCookieDomain on that wiki.
 *
 * If CentralNotice is only enabled on a single wiki, or if cross-wiki hiding is
 * not desired, the leave this as array(). Page code will always hide a banner
 * by setting a cookie for that wiki's domain.
 */
$wgNoticeHideUrls = array();

// A string to use in a P3P privacy policy header set by Special:HideBanners.
// The header is needed to make IE keep third-party cookies in default privacy
// mode. If this is set to false, a default invalid policy containing the URL of
// Special:HideBanners/P3P will be used, and that subpage will contain a short
// explanation.
$wgCentralNoticeHideBannersP3P = false;

// Server-side banner cache timeout in seconds
$wgNoticeBannerMaxAge = 600;

// Whether to use the Translation extension for banner message translation
$wgNoticeUseTranslateExtension = false;

// Whether to disable variant languages and use an automatically converted version of banners
// fetched from their parent language (zh for zh-cn, for example) instead.
$wgNoticeUseLanguageConversion = false;

// When using the group review feature of translate; this will be the namespace ID for the banner
// staging area -- ie: banners here are world editable and will not be moved to the MW namespace
// until they are in @ref $wgNoticeTranslateDeployStates
$wgNoticeBannerNSID = 866;

define( 'NS_CN_BANNER', $wgNoticeBannerNSID );
define( 'NS_CN_BANNER_TALK', $wgNoticeBannerNSID + 1 );

// When a banner is protected; what group is assigned. This is used for banners in the CNBanner
// namespace to protect origin messages.
$wgNoticeProtectGroup = 'sysop';

// When using the group review feature of the translate extension, only message groups with these
// group review states will be deployed -- e.g. copy from the CNBanners namespace to the MW
// namespace. This requires that anyone who can assign this state much have site-edit permissions
$wgNoticeTranslateDeployStates = array(
	'published',
);

// These are countries that MaxMind will give out when information is a bit fuzzy. However,
// fundraising code doesn't like non ISO countries so we map them to the fictional point case 'XX'
$wgNoticeXXCountries = array( 'XX', 'EU', 'AP', 'A1', 'A2', 'O1' );

// String of space delimited domains that will be able to accept data via JS message event when
// calling Special:CNReporter
$wgNoticeReporterDomains = 'https://donate.wikimedia.org';

// Number of buckets that are provided to choose from -- this must be a power of two! It must not
// also be greater than 9 unless a schema change is performed. Right now this column is tinyint(1)
$wgNoticeNumberOfBuckets = 4;

// We can tell the controller to only assign buckets from 0 .. to this variable. This allows
// us to serve banners only to people who meet certain criteria (ie: banners place people in
// certain buckets after events happen.)
$wgNoticeNumberOfControllerBuckets = 2;

// How the legacy global bucket cookie for legacy global buckets will last, in days.
$wgNoticeBucketExpiry = 7;

// Extra time to keep per-campaign buckets after a campaign has ended, in days.
$wgCentralNoticePerCampaignBucketExtension = 30;

// When displaying a long list, display the complement "all except ~LIST" past a threshold,
// given as a proportion of the "all" list length.
$wgNoticeListComplementThreshold = 0.75;

/** @var $wgNoticeTabifyPages array Declare all pages that should be tabified as CN pages */
$wgNoticeTabifyPages = array(
	/* Left side 'namespace' tabs */
	'CentralNotice' => array(
		'type' => 'namespaces',
		'message' => 'centralnotice-notices',
	),
	'CentralNoticeBanners' => array(
		'type' => 'namespaces',
		'message' => 'centralnotice-templates',
	),

	/* Right side 'view' tabs */
	'BannerAllocation' => array(
		'type' => 'views',
		'message' => 'centralnotice-allocation',
	),
	'GlobalAllocation' => array(
		'type' => 'views',
		'message' => 'centralnotice-global-allocation',
	),
	'CentralNoticeLogs' => array(
		'type' => 'views',
		'message' => 'centralnotice-logs',
	),
);

// Available banner mixins, usually provided by separate extensions.
// See http://www.mediawiki.org/wiki/Extension:CentralNotice/Banner_mixins
$wgNoticeMixins = array();

/* Setup */
require_once $dir . '/CentralNotice.hooks.php';
require_once $dir . '/CentralNotice.modules.php';

// Register message files
$wgMessagesDirs['CentralNotice'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['CentralNotice'] = __DIR__ . "/CentralNotice.i18n.php";
$wgExtensionMessagesFiles[ 'CentralNoticeAliases' ] = $dir . '/CentralNotice.alias.php';
