<?php
/**
 * Internationalisation file for CentralNotice extension.
 *
 * @addtogroup Extensions
 */

$messages = array();

// Don't create a message named "centralnotice-template" or beginning with "centralnotice-template-" since those terms are reserved in CentralNotice

$messages['en'] = array(
	'centralnotice' => 'Central notice admin',
	'noticetemplate' => 'Central notice admin',
	'bannerallocation' => 'Central notice admin',
	'centralnotice-desc' => 'Adds a central sitenotice',
	'centralnotice-summary' => 'This module allows you to edit your currently setup central notices.
It can also be used to add or remove old notices.',
	'centralnotice-query' => 'Modify current campaigns',
	'centralnotice-notice-name' => 'Campaign name',
	'centralnotice-end-date' => 'End date',
	'centralnotice-enabled' => 'Enabled',
	'centralnotice-modify' => 'Submit',
	'centralnotice-save-banner' => 'Save banner',
	'centralnotice-preview' => 'Preview',
	'centralnotice-add-new' => 'Add a new campaign',
	'centralnotice-remove' => 'Remove',
	'centralnotice-translate-heading' => 'Translation for $1',
	'centralnotice-manage' => 'Manage campaigns',
	'centralnotice-manage-templates' => 'Manage banners',
	'centralnotice-add' => 'Add',
	'centralnotice-add-notice' => 'Add a campaign',
	'centralnotice-edit-notice' => 'Edit campaign',
	'centralnotice-add-template' => 'Add a banner',
	'centralnotice-show-notices' => 'Show campaigns',
	'centralnotice-list-templates' => 'List banners',
	'centralnotice-multiple_languages' => 'multiple ($1)',
	'centralnotice-language-listing' => '$1 - $2',
	'centralnotice-translations' => 'Translations',
	'centralnotice-translate-to' => 'Translate to',
	'centralnotice-translate' => 'Translate',
	'centralnotice-english' => 'English',
	'centralnotice-banner-name' => 'Banner name:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Banners',
	'centralnotice-weight' => 'Weight',
	'centralnotice-locked' => 'Locked',
	'centralnotice-notice' => 'Campaign',
	'centralnotice-notice-heading' => 'Campaign: $1',
	'centralnotice-notices' => 'Campaigns',
	'centralnotice-notice-exists' => 'Campaign already exists.
Not adding.',
	'centralnotice-no-language' => 'No language was selected for the campaign. Not adding.',
	'centralnotice-template-exists' => 'Banner already exists.
Not adding.',
	'centralnotice-notice-doesnt-exist' => 'Campaign does not exist.',
	'centralnotice-remove-notice-doesnt-exist' => 'Campaign does not exist.
Nothing to remove.',
	'centralnotice-banner-doesnt-exist' => 'Banner does not exist.',
	'centralnotice-template-still-bound' => 'Banner is still bound to a campaign.
Not removing.',
	'centralnotice-template-body' => 'Banner body:',
	'centralnotice-day' => 'Day',
	'centralnotice-year' => 'Year',
	'centralnotice-month' => 'Month',
	'centralnotice-hours' => 'Hour',
	'centralnotice-min' => 'Minute',
	'centralnotice-project-lang' => 'Project language',
	'centralnotice-select' => 'Select: $1',
	'centralnotice-top-ten-languages' => 'Top 10 languages',
	'centralnotice-project-name' => 'Project name',
	'centralnotice-start-date' => 'Start date',
	'centralnotice-start-time' => 'Start time (UTC)',
	'centralnotice-end-time' => 'End time (UTC)',
	'centralnotice-assigned-templates' => 'Assigned banners',
	'centralnotice-no-templates' => 'No banners found.
Add some!',
	'centralnotice-no-templates-assigned' => 'No banners assigned to campaign.
Add some!',
	'centralnotice-available-templates' => 'Available banners',
	'centralnotice-template-already-exists' => 'Banner is already tied to campaign.
Not adding.',
	'centralnotice-preview-template' => 'Preview banner',
	'centralnotice-change-lang' => 'Change translation language',
	'centralnotice-weights' => 'Weights',
	'centralnotice-notice-is-locked' => 'Campaign is locked.
Not removing.',
	'centralnotice-overlap' => 'Campaign overlaps within the time of another campaign.
Not adding.',
	'centralnotice-invalid-date-range' => 'Invalid date range.
Not updating.',
	'centralnotice-null-string' => 'Cannot add a null string.
Not adding.',
	'centralnotice-confirm-delete' => 'Are you sure you want to delete this item?
This action will be unrecoverable.',
	'centralnotice-no-notices-exist' => 'No campaigns exist.
Add one below.',
	'centralnotice-no-templates-translate' => 'There are not any banners to edit translations for.',
	'centralnotice-number-uses' => 'Uses',
	'centralnotice-settings' => 'Settings',
	'centralnotice-edit-template' => 'Edit banner',
	'centralnotice-edit-template-summary' => 'To create a localizable message, enclose a hyphenated string in three curly brackets, e.g. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Message',
	'centralnotice-message-not-set' => 'Message not set',
	'centralnotice-clone' => 'Clone',
	'centralnotice-clone-notice' => 'Create a copy of the banner',
	'centralnotice-clone-name' => 'Name:',
	'centralnotice-preview-all-template-translations' => 'Preview all available translations of banner',
	'centralnotice-insert' => 'Insert: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} button',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} button',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} button',
	'centralnotice-translate-button' => 'Help translate button',
	'centralnotice-donate-button' => 'Donate button',
	'centralnotice-expanded-banner' => 'Expanded banner',
	'centralnotice-collapsed-banner' => 'Collapsed banner',
	'centralnotice-banner-display' => 'Display to:',
	'centralnotice-banner-anonymous' => 'Anonymous users',
	'centralnotice-banner-logged-in' => 'Logged in users',
	'centralnotice-banner-type' => 'Banner type:',
	'centralnotice-banner-hidable' => 'Static/Hidable',
	'centralnotice-banner-collapsible' => 'Collapsible',
	'centralnotice-geotargeted' => 'Geotargeted',
	'centralnotice-countries' => 'Countries',
	'centralnotice-allocation' => 'Allocation',
	'centralnotice-view-allocation' => 'View banner allocation',
	'centralnotice-allocation-instructions' => 'Choose the environment you would like to view banner allocation for:',
	'centralnotice-project-language' => 'Project language',
	'centralnotice-country' => 'Country',
	'centralnotice-no-allocation' => 'No banners allocated.',
	'centralnotice-allocation-description' => 'Banner allocation for $1.$2 in $3:',
	'centralnotice-percentage' => 'Percentage',
	
	'right-centralnotice-admin' => 'Manage central notices',
	'right-centralnotice-translate' => 'Translate central notices',

	'action-centralnotice-admin' => 'manage central notices',
	'action-centralnotice-translate' => 'translate central notices',
	'centralnotice-preferred' => 'Preferred',
);

/** Message documentation (Message documentation)
 * @author Bennylin
 * @author Darth Kule
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Hamilton Abreu
 * @author Jon Harald Søby
 * @author Lloffiwr
 * @author Nike
 * @author Purodha
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'centralnotice' => 'Name of Special:CentralNotice in Special:SpecialPages and title of Special:CentralNotice page',
	'noticetemplate' => 'Title of Special:NoticeTemplate page, should be identical to centralnotice message. (Since the extension uses a secondary tab interface, the effective page title is actually centralnotice-manage-templates.)',
	'bannerallocation' => 'Title of Special:BannerAllocation page, should be identical to centralnotice message.  (Since the extension uses a secondary tab interface, the effective page title is actually centralnotice-view-allocation.)',
	'centralnotice-desc' => '{{desc}}',
	'centralnotice-summary' => 'Used in Special:CentralNotice',
	'centralnotice-end-date' => '{{Identical|End date}}',
	'centralnotice-enabled' => '{{Identical|Enabled}}',
	'centralnotice-modify' => '{{Identical|Submit}}',
	'centralnotice-save-banner' => 'Label for the submit button which saves a CentralNotice banner.',
	'centralnotice-preview' => '{{Identical|Preview}}',
	'centralnotice-remove' => '{{Identical|Remove}}',
	'centralnotice-translate-heading' => 'Fieldset label. $1 is a name of a template.',
	'centralnotice-add' => '{{Identical|Add}}',
	'centralnotice-multiple_languages' => '$1 is a number. More precisely, the number of languages a notice is available in. It is always greater than 3.',
	'centralnotice-language-listing' => 'A language listing for the language multi-select box. First parameter is the language code. Second parameter is the name of the language.',
	'centralnotice-translate' => '{{Identical|Translate}}',
	'centralnotice-notice-exists' => 'Error message displayed in Special:CentralNotice when trying to add a notice with the same name of another notice',
	'centralnotice-template-exists' => 'Error message displayed in Special:NoticeTemplate when trying to add a template with the same name of another template',
	'centralnotice-day' => '{{Identical|Day}}',
	'centralnotice-select' => '{{Identical|Select}}',
	'centralnotice-start-date' => 'Used in Special:CentralNotice.

{{Identical|Start date}}',
	'centralnotice-start-time' => 'Used in Special:CentralNotice. UTC is "[http://en.wikipedia.org/wiki/Coordinated_Universal_Time Coordinated Universal Time]',
	'centralnotice-end-time' => 'Used in Special:CentralNotice. UTC is "[http://en.wikipedia.org/wiki/Coordinated_Universal_Time Coordinated Universal Time]',
	'centralnotice-available-templates' => 'Used in Special:NoticeTemplate',
	'centralnotice-notice-is-locked' => 'Error message displayed in Special:CentralNotice when trying to delete a locked notice',
	'centralnotice-invalid-date-range' => '{{Identical|Date}}',
	'centralnotice-no-notices-exist' => 'Used in Special:CentralNotice when there are no notices',
	'centralnotice-number-uses' => 'Column header in table with sitenotice campaign information.

Translate as a plural noun.

Maximum length of the message is 5% of the total width of the table.',
	'centralnotice-settings' => '{{Identical|Settings}}',
	'centralnotice-message' => '{{Identical|Message}}',
	'centralnotice-clone-name' => '{{Identical|Name}}',
	'centralnotice-insert' => '{{Identical|Insert}}',
	'centralnotice-geotargeted' => 'Used to label a checkbox which activates geotargeting',
	'centralnotice-country' => '{{Identical|Country}}',
	'centralnotice-allocation-description' => 'A description of the environment whose allocation is being described. $1 is the language code for the site (en). $2 is the project name for the site (wikipedia). $3 is the country code (US).',
	'right-centralnotice-admin' => '{{doc-right}}',
	'right-centralnotice-translate' => '{{doc-right}}',
	'action-centralnotice-admin' => '{{doc-action}}',
	'action-centralnotice-translate' => '{{doc-action}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'centralnotice' => 'Bestuur sentrale kennisgewings',
	'noticetemplate' => 'Sjabloon vir sentrale kennisgewing',
	'centralnotice-desc' => "Voeg 'n sentrale stelselkennisgewing by",
	'centralnotice-query' => 'Verander huidige kennisgewings',
	'centralnotice-notice-name' => 'Kennisgewing-naam',
	'centralnotice-end-date' => 'Einddatum',
	'centralnotice-enabled' => 'Aktief',
	'centralnotice-modify' => 'Dien in',
	'centralnotice-preview' => 'Voorskou',
	'centralnotice-add-new' => "Voeg 'n nuwe sentrale kennisgewing by",
	'centralnotice-remove' => 'Verwyder',
	'centralnotice-translate-heading' => 'Vertaling vir $1',
	'centralnotice-manage' => 'Beheer sentrale kennisgewings',
	'centralnotice-add' => 'Byvoeg',
	'centralnotice-add-notice' => "Voeg 'n kennisgewing by",
	'centralnotice-add-template' => 'Voeg sjabloon by',
	'centralnotice-show-notices' => 'Wys kennisgewings',
	'centralnotice-list-templates' => 'Lys sjablone',
	'centralnotice-translations' => 'Vertalings',
	'centralnotice-translate-to' => 'Vertaal na',
	'centralnotice-translate' => 'Vertaal',
	'centralnotice-english' => 'Engels',
	'centralnotice-banner-name' => 'Sjabloonnaam',
	'centralnotice-templates' => 'Sjablone',
	'centralnotice-weight' => 'Gewig',
	'centralnotice-locked' => 'Gesluit',
	'centralnotice-notices' => 'Kennisgewings',
	'centralnotice-notice-exists' => 'Die kennisgewing bestaan reeds.
Hierdie word nie bygevoeg nie.',
	'centralnotice-template-exists' => 'Die sjabloon bestaan reeds.
Dit word nie bygevoeg nie.',
	'centralnotice-notice-doesnt-exist' => 'Die kennisgewing bestaan nie.
Daar is niks om te verwyder nie',
	'centralnotice-template-still-bound' => "Die sjabloon is nog aan 'n kennisgewing gekoppel.
Word nie verwyder nie.",
	'centralnotice-template-body' => 'Sjablooninhoud:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'Jaar',
	'centralnotice-month' => 'Maand',
	'centralnotice-hours' => 'Uur',
	'centralnotice-min' => 'Minuut',
	'centralnotice-project-lang' => 'Projektaal',
	'centralnotice-project-name' => 'Projeknaam',
	'centralnotice-start-date' => 'Begindatum',
	'centralnotice-start-time' => 'Begintyd (UTC)',
	'centralnotice-assigned-templates' => 'Aangewese sjablone',
	'centralnotice-no-templates' => "Daar is geen sjablone op die stelsel beskikbaar nie.
Voeg 'n paar by!",
	'centralnotice-no-templates-assigned' => "Daar is geen sjablone aan die kennisgewing toegewys nie.
Voeg 'n paar by!",
	'centralnotice-available-templates' => 'Beskikbare sjablone',
	'centralnotice-template-already-exists' => 'Die sjabloon is reeds aan \'n "campaign" gekoppel.
Word nie bygevoeg nie',
	'centralnotice-preview-template' => 'Voorskou sjabloon',
	'centralnotice-change-lang' => 'Verander taal vir vertaling',
	'centralnotice-weights' => 'Gewigte',
	'centralnotice-notice-is-locked' => 'Kennisgewing is gesluit.
Word nie verwyder nie',
	'centralnotice-overlap' => "Die kennisgewing oorvleuel met 'n ander kennisgewing.
Nie bygevoeg nie",
	'centralnotice-invalid-date-range' => 'Ongeldige datumreeks.
Word nie bygewerk nie',
	'centralnotice-null-string' => "Kan nie 'n leë teksveld bysit nie.
Word nie bygevoeg nie",
	'centralnotice-confirm-delete' => 'Is u seker u wil hierdie item verwyder?
Hierdie aksie kan nie teruggerol word nie.',
	'centralnotice-no-notices-exist' => 'Daar bestaan geen kennisgewings nie.
U kan een hieronder byvoeg',
	'centralnotice-no-templates-translate' => 'Daar is geen sjablone waarvoor vertalings gemaak kan word nie',
	'centralnotice-number-uses' => 'Kere gebruik',
	'centralnotice-edit-template' => 'Wysig sjabloon',
	'centralnotice-message' => 'Boodskap',
	'centralnotice-message-not-set' => 'Boodskap nie ingestel nie',
	'centralnotice-clone' => 'Kopieer',
	'centralnotice-clone-notice' => "Maak 'n kopie van die sjabloon",
	'centralnotice-preview-all-template-translations' => 'Voorskou al die beskikbare vertalings van die sjabloon',
	'right-centralnotice-admin' => 'Bestuur sentrale kennisgewings',
	'right-centralnotice-translate' => 'Vertaal sentrale kennisgewings',
	'action-centralnotice-admin' => 'bestuur sentrale kennisgewings',
	'action-centralnotice-translate' => 'vertaal sentrale kennisgewings',
	'centralnotice-preferred' => 'Voorkeur',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'centralnotice' => 'admin Qendrore njoftim',
	'noticetemplate' => 'njoftim Qendrore template',
	'centralnotice-desc' => 'Shton një sitenotice qendrore',
	'centralnotice-summary' => 'Ky modul ju lejon që të redaktoj setup aktualisht qendrore njoftimeve tuaj. Ajo mund të përdoret gjithashtu për të shtuar ose hequr njoftimeve të vjetër.',
	'centralnotice-query' => 'Njoftime Modifiko e tanishme',
	'centralnotice-notice-name' => 'Emri i Autorit',
	'centralnotice-end-date' => 'Data Fundi',
	'centralnotice-enabled' => 'Aktivizuar',
	'centralnotice-modify' => 'Submit',
	'centralnotice-preview' => 'Preview',
	'centralnotice-add-new' => 'Shto një njoftim të ri qendror',
	'centralnotice-remove' => 'Heq',
	'centralnotice-translate-heading' => 'Perkthime për $1',
	'centralnotice-manage' => 'njoftim Manage qendrore',
	'centralnotice-add' => 'Shtoj',
	'centralnotice-add-notice' => 'Shto një njoftim',
	'centralnotice-add-template' => 'Shto një template',
	'centralnotice-show-notices' => 'Shfaq njoftimet',
	'centralnotice-list-templates' => 'Lista e templates',
	'centralnotice-translations' => 'Përkthime',
	'centralnotice-translate-to' => 'Translate në',
	'centralnotice-translate' => 'Përkthej',
	'centralnotice-english' => 'Anglisht',
	'centralnotice-banner-name' => 'Emri Template',
	'centralnotice-templates' => 'Templates',
	'centralnotice-weight' => 'Peshë',
	'centralnotice-locked' => 'I bllokuar',
	'centralnotice-notices' => 'Njoftime',
	'centralnotice-notice-exists' => 'Njoftim ekziston. Jo duke shtuar',
	'centralnotice-template-exists' => 'Template ekziston. Jo duke shtuar',
	'centralnotice-notice-doesnt-exist' => 'Njoftim nuk ekziston. Asgjë për të hequr',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 * @author Elfalem
 */
$messages['am'] = array(
	'centralnotice-desc' => 'በሁሉም ገጾች ላይ የሚታይ መልዕክት ይጨምራል',
	'centralnotice-message' => 'መልእክት',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'centralnotice-desc' => 'Adibe una "sitenotice" central',
	'centralnotice-end-date' => 'Calendata final',
	'centralnotice-modify' => 'Ninviar',
	'centralnotice-preview' => 'Previsualizar',
	'centralnotice-start-date' => 'Calendata de prencipio',
	'centralnotice-invalid-date-range' => "Rango de datos no conforme.
No s'está adautando.",
	'centralnotice-message' => 'Mensache',
	'centralnotice-insert' => 'Insertar: $1',
);

/** Arabic (العربية)
 * @author Meno25
 * @author OsamaK
 * @author Ouda
 */
$messages['ar'] = array(
	'centralnotice' => 'مدير الإخطار المركزي',
	'noticetemplate' => 'قالب الإخطار المركزي',
	'centralnotice-desc' => 'يضيف إعلانا مركزيا للموقع',
	'centralnotice-summary' => 'هذه الوحدة تسمح لك بتعديل إعدادات الإخطار المركزي الحالية.
يمكن أن تستخدم أيضا لإضافة أو إزالة إخطارات قديمة.',
	'centralnotice-query' => 'تعديل الإخطارات الحالية',
	'centralnotice-notice-name' => 'اسم الإخطار',
	'centralnotice-end-date' => 'تاريخ الانتهاء',
	'centralnotice-enabled' => 'مُفعّل',
	'centralnotice-modify' => 'سلّم',
	'centralnotice-preview' => 'عاين',
	'centralnotice-add-new' => 'أضف إخطار جديد مركزي',
	'centralnotice-remove' => 'أزل',
	'centralnotice-translate-heading' => 'ترجمة $1',
	'centralnotice-manage' => 'أدر الإخطار المركزي',
	'centralnotice-add' => 'أضف',
	'centralnotice-add-notice' => 'إضافة إخطار',
	'centralnotice-add-template' => 'إضافة قالب',
	'centralnotice-show-notices' => 'إظهار الإخطارات',
	'centralnotice-list-templates' => 'اعرض القوالب',
	'centralnotice-translations' => 'الترجمات',
	'centralnotice-translate-to' => 'ترجم إلى',
	'centralnotice-translate' => 'ترجم',
	'centralnotice-english' => 'الإنجليزية',
	'centralnotice-banner-name' => 'اسم القالب',
	'centralnotice-templates' => 'القوالب',
	'centralnotice-weight' => 'الوزن',
	'centralnotice-locked' => 'مغلق',
	'centralnotice-notices' => 'الإخطارات',
	'centralnotice-notice-exists' => 'الإخطار موجود بالفعل.
لا إضافة',
	'centralnotice-template-exists' => 'القالب موجود فعلا
لا تضيفه',
	'centralnotice-notice-doesnt-exist' => 'الملاحظة غير موجودة.
لا شيء للإزالة',
	'centralnotice-template-still-bound' => 'القالب مازال مرتبطا بملاحظة.
لن تتم الإزالة.',
	'centralnotice-template-body' => 'جسم القالب:',
	'centralnotice-day' => 'اليوم',
	'centralnotice-year' => 'السنة',
	'centralnotice-month' => 'الشهر',
	'centralnotice-hours' => 'الساعة',
	'centralnotice-min' => 'الدقيقة',
	'centralnotice-project-lang' => 'لغة المشروع',
	'centralnotice-project-name' => 'اسم المشروع',
	'centralnotice-start-date' => 'تاريخ البدء',
	'centralnotice-start-time' => 'وقت البداية (UTC)',
	'centralnotice-assigned-templates' => 'القوالب المرتبطة',
	'centralnotice-no-templates' => 'لا قوالب موجود.
أضف بعضا منها!',
	'centralnotice-no-templates-assigned' => 'لا قوالب مرتبطة بالملاحظة.
أضف البعض!',
	'centralnotice-available-templates' => 'القوالب المتاحة',
	'centralnotice-template-already-exists' => 'القالب مربوط بالفعل بالحملة.
لن تتم الإضافة',
	'centralnotice-preview-template' => 'معاينة القالب',
	'centralnotice-change-lang' => 'تغيير لغة الترجمة',
	'centralnotice-weights' => 'الأوزان',
	'centralnotice-notice-is-locked' => 'الإخطار مغلق.
لا إزالة',
	'centralnotice-overlap' => 'الإخطار يتداخل مع وقت إخطار آخر.
لا إضافة',
	'centralnotice-invalid-date-range' => 'مدى تاريخ غير صحيح.
لا تحديث',
	'centralnotice-null-string' => 'لا يمكن إضافة نص مصفّر.
لا إضافة',
	'centralnotice-confirm-delete' => 'هل أنت متأكد من حذف هذا العنصر؟
هذا الإجراء لن يكون قابلا للاسترجاع',
	'centralnotice-no-notices-exist' => 'لا إخطارات موجودة.
أضف واحدا أسفله',
	'centralnotice-no-templates-translate' => 'لا يوجد أي قالب لتحرير ترجمته',
	'centralnotice-number-uses' => 'الاستخدامات',
	'centralnotice-edit-template' => 'حرّر قالبا',
	'centralnotice-message' => 'الرسالة',
	'centralnotice-message-not-set' => 'الرسالة غير مضبوطة',
	'centralnotice-clone' => 'استنساخ',
	'centralnotice-clone-notice' => 'أنشئ نسخة من القالب',
	'centralnotice-preview-all-template-translations' => 'عرض كل الترجمات المتوفرة للقالب',
	'right-centralnotice-admin' => 'أدر الإخطارات المركزية',
	'right-centralnotice-translate' => 'ترجم الإخطارات المركزية',
	'action-centralnotice-admin' => 'التحكم بالإعلانات المركزية',
	'action-centralnotice-translate' => 'ترجمة الإعلانات المركزية',
	'centralnotice-preferred' => 'مفضل',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'centralnotice-add' => 'ܐܘܣܦ',
	'centralnotice-add-template' => 'ܐܘܣܦ ܩܠܒܐ',
	'centralnotice-translate' => 'ܬܪܓܡ',
	'centralnotice-day' => 'ܝܘܡܐ',
	'centralnotice-year' => 'ܫܢܬܐ',
	'centralnotice-month' => 'ܝܪܚܐ',
	'centralnotice-hours' => 'ܫܥܬܐ',
	'centralnotice-min' => 'ܩܛܝܢܬܐ',
	'centralnotice-edit-template' => 'ܫܚܠܦ ܩܠܒܐ',
	'centralnotice-message' => 'ܐܓܪܬܐ',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'centralnotice' => 'مدير الاعلانات المركزية',
	'noticetemplate' => 'قالب الاعلانات المركزية',
	'centralnotice-desc' => 'بيحط اعلان مركزى للموقع',
	'centralnotice-summary' => 'الوحدة دى بتسمحلك بتعديل إعدادات الإخطار المركزى الحالية.
ممكن تستخدم كمان لإضافة أو إزالة إخطارات قديمة.',
	'centralnotice-query' => 'تعديل الاعلانات الموجودة دلوقتي',
	'centralnotice-notice-name' => 'اسم الاعلان',
	'centralnotice-end-date' => 'تاريخ الانتهاء',
	'centralnotice-enabled' => 'متشغل',
	'centralnotice-modify' => 'قدم',
	'centralnotice-preview' => 'اعمل بروفة',
	'centralnotice-add-new' => 'حط اعلان مركزى جديد',
	'centralnotice-remove' => 'شيل',
	'centralnotice-translate-heading' => 'الترجمة بتاعة $1',
	'centralnotice-manage' => 'ادارة الاعلانات المركزية',
	'centralnotice-add' => 'ضيف',
	'centralnotice-add-notice' => 'حط اعلان',
	'centralnotice-add-template' => 'ضيف قالب',
	'centralnotice-show-notices' => 'اظهر الاعلانات',
	'centralnotice-list-templates' => 'لستة القوالب',
	'centralnotice-translations' => 'الترجمات',
	'centralnotice-translate-to' => 'ترجم لـ',
	'centralnotice-translate' => 'ترجم',
	'centralnotice-english' => 'انجليزى',
	'centralnotice-banner-name' => 'اسم القالب',
	'centralnotice-templates' => 'قوالب',
	'centralnotice-weight' => 'الوزن',
	'centralnotice-locked' => 'مقفول',
	'centralnotice-notices' => 'اعلانات',
	'centralnotice-notice-exists' => 'الاعلان موجود من قبل كده.
مافيش اصافة',
	'centralnotice-template-exists' => 'القالب موجود من قبل كده
مافيش اضافة',
	'centralnotice-notice-doesnt-exist' => 'الاعلان مش موجود
مافيش حاجة عشان تتشال',
	'centralnotice-template-still-bound' => 'القالب لسة مربوط بالاعلان.
ماينفعش يتشال.',
	'centralnotice-template-body' => 'جسم القالب:',
	'centralnotice-day' => 'اليوم',
	'centralnotice-year' => 'السنه',
	'centralnotice-month' => 'الشهر',
	'centralnotice-hours' => 'الساعة',
	'centralnotice-min' => 'الدقيقة',
	'centralnotice-project-lang' => 'اللغة بتاعة المشروع',
	'centralnotice-project-name' => 'الاسم بتاع المشروع',
	'centralnotice-start-date' => 'تاريخ البدايه',
	'centralnotice-start-time' => 'وقت البداية (توقيت عالمى)',
	'centralnotice-assigned-templates' => 'قالب موجود',
	'centralnotice-no-templates' => 'مافيش قوالب.
ضيف بعض القوالب!',
	'centralnotice-no-templates-assigned' => ' مافيش قالب موجود.
ضيف  قوالب',
	'centralnotice-available-templates' => 'القوالب الموجودة',
	'centralnotice-template-already-exists' => 'قالب موجود
. مافيش  إضافة',
	'centralnotice-preview-template' => 'معاينة القالب',
	'centralnotice-change-lang' => 'تغيير لغة الترجمه',
	'centralnotice-weights' => 'الاوزان',
	'centralnotice-notice-is-locked' => 'الاعلان مقفول.
مافيش مسح.',
	'centralnotice-overlap' => 'الإخطار يتداخل مع وقت إخطار تانى.
مافيش إضافة',
	'centralnotice-invalid-date-range' => 'مدى تاريخ مش صحيح.
مافيش تحديث',
	'centralnotice-null-string' => 'مش ممكن إضافة نص مصفّر.
مافيش  إضافة',
	'centralnotice-confirm-delete' => 'انت متأكد انك عايز تلغى الحتة دي؟
الاجراء دا مش ح يترجع فيه',
	'centralnotice-no-notices-exist' => 'مافيش اخطارات موجودة.
ضيف واحد تحته',
	'centralnotice-no-templates-translate' => 'مافيش أى قالب لتحرير ترجمته',
	'centralnotice-number-uses' => 'الاستعمالات',
	'centralnotice-edit-template' => 'عدل فى القالب',
	'centralnotice-message' => 'الرسالة',
	'centralnotice-message-not-set' => 'الرسالة مش مظبوطة',
	'centralnotice-clone' => 'انسخ',
	'centralnotice-clone-notice' => 'اعمل نسخة من القالب',
	'centralnotice-preview-all-template-translations' => 'اعرض كل الترجمات الموجودة للقالب',
	'right-centralnotice-admin' => 'ادارة الاعلانات المركزيه',
	'right-centralnotice-translate' => 'ترجم الاعلانات المركزية',
	'action-centralnotice-admin' => 'ادارة الاعلانات المركزية',
	'action-centralnotice-translate' => 'ترجمة الاعلانات المركزية',
	'centralnotice-preferred' => ' مفضله',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'centralnotice-desc' => 'Añade una anuncia centralizada del sitiu (sitenotice)',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'noticetemplate' => 'تمپلت اعلان مرکزی',
	'centralnotice-desc' => 'یک مرکزی اخطار سایت هور کنت',
	'centralnotice-query' => 'عوض کتن نوکین اعلانات',
	'centralnotice-notice-name' => 'اعلان ءِ نام',
	'centralnotice-end-date' => 'وهد هلگ',
	'centralnotice-enabled' => 'فعال',
	'centralnotice-modify' => 'دیم دهگ',
	'centralnotice-preview' => 'پیشدارگ',
	'centralnotice-add' => 'هور کتن',
	'centralnotice-translations' => 'ترجمه هان',
	'centralnotice-translate-to' => 'ترجمه په',
	'centralnotice-translate' => 'ترجمه کتن',
	'centralnotice-english' => 'انگریزی',
	'centralnotice-weight' => 'وزن',
	'centralnotice-locked' => 'کبل',
	'centralnotice-notices' => 'اعلانات',
	'centralnotice-day' => 'روچ',
	'centralnotice-year' => 'سال',
	'centralnotice-month' => 'ماه',
	'centralnotice-hours' => 'ساعت',
	'centralnotice-min' => 'دقیقه',
	'centralnotice-start-time' => 'وهد بنگیج',
	'centralnotice-null-string' => 'هالیکن رشتگی نه تونیت هور بیت.
هوری نکنت',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 * @author Александр Сигачёв
 */
$messages['be-tarask'] = array(
	'centralnotice' => 'Кіраваньне цэнтралізаванымі паведамленьнямі',
	'noticetemplate' => 'Кіраваньне цэнтралізаванымі паведамленьнямі',
	'bannerallocation' => 'Кіраваньне цэнтралізаванымі паведамленьнямі',
	'centralnotice-desc' => 'Дадае цэнтралізаванае паведамленьне сайту',
	'centralnotice-summary' => 'Гэты модуль дазваляе Вам рэдагаваць Вашыя актуальныя цэнтралізаваныя паведамленьні.
Ён таксама можа выкарыстоўвацца для даданьня ці выдаленьня старых паведамленьняў.',
	'centralnotice-query' => 'Зьмяніць цяперашнюю кампанію',
	'centralnotice-notice-name' => 'Назва кампаніі',
	'centralnotice-end-date' => 'Дата заканчэньня',
	'centralnotice-enabled' => 'Уключана',
	'centralnotice-modify' => 'Захаваць',
	'centralnotice-save-banner' => 'Захаваць банэр',
	'centralnotice-preview' => 'Папярэдні прагляд',
	'centralnotice-add-new' => 'Дадаць новую кампанію',
	'centralnotice-remove' => 'Выдаліць',
	'centralnotice-translate-heading' => 'Пераклад для $1',
	'centralnotice-manage' => 'Кіраваньне кампаніямі',
	'centralnotice-manage-templates' => 'Кіраваньне паведамленьнямі',
	'centralnotice-add' => 'Дадаць',
	'centralnotice-add-notice' => 'Дадаць кампанію',
	'centralnotice-edit-notice' => 'Рэдагаваць кампанію',
	'centralnotice-add-template' => 'Дадаць паведамленьне',
	'centralnotice-show-notices' => 'Паказаць кампаніі',
	'centralnotice-list-templates' => 'Сьпіс паведамленьняў',
	'centralnotice-multiple_languages' => 'некалькі ($1)',
	'centralnotice-translations' => 'Пераклады',
	'centralnotice-translate-to' => 'Пераклад на',
	'centralnotice-translate' => 'Пераклад',
	'centralnotice-english' => 'Ангельская',
	'centralnotice-banner-name' => 'Назва паведамленьня:',
	'centralnotice-banner' => 'Паведамленьне',
	'centralnotice-banner-heading' => 'Банэр: $1',
	'centralnotice-templates' => 'Паведамленьні',
	'centralnotice-weight' => 'Вага',
	'centralnotice-locked' => 'Заблякаваны',
	'centralnotice-notice' => 'Кампанія',
	'centralnotice-notice-heading' => 'Кампанія: $1',
	'centralnotice-notices' => 'Кампаніі',
	'centralnotice-notice-exists' => 'Кампанія ўжо існуе.
Новая не дададзеная.',
	'centralnotice-no-language' => 'Для кампаніі ня выбраная мова. Не дададзеная.',
	'centralnotice-template-exists' => 'Паведамленьне ужо існуе.
Новае паведамленьне не дададзенае.',
	'centralnotice-notice-doesnt-exist' => 'Кампанія не існуе.',
	'centralnotice-remove-notice-doesnt-exist' => 'Кампанія не існуе.
Няма чаго выдаляць',
	'centralnotice-banner-doesnt-exist' => 'Паведамленьне не існуе.',
	'centralnotice-template-still-bound' => 'Паведамленьне па-ранейшаму зьвязанае з кампаніяй.
Не выдаляецца.',
	'centralnotice-template-body' => 'Зьмест паведамленьня:',
	'centralnotice-day' => 'Дзень',
	'centralnotice-year' => 'Год',
	'centralnotice-month' => 'Месяц',
	'centralnotice-hours' => 'Гадзіна',
	'centralnotice-min' => 'Хвіліна',
	'centralnotice-project-lang' => 'Мова праекту',
	'centralnotice-select' => 'Выбраць: $1',
	'centralnotice-top-ten-languages' => '10 моваў',
	'centralnotice-project-name' => 'Назва праекту',
	'centralnotice-start-date' => 'Дата пачатку',
	'centralnotice-start-time' => 'Час пачатку (UTC)',
	'centralnotice-end-time' => 'Час сканчэньня (UTC)',
	'centralnotice-assigned-templates' => 'Прызначаныя паведамленьні',
	'centralnotice-no-templates' => 'Паведамленьні ня знойдзеныя.
Дадайце якія-небудзь!',
	'centralnotice-no-templates-assigned' => 'Няма зьвязаных з кампаніяй паведамленьняў.
Дадайце якое-небудзь!',
	'centralnotice-available-templates' => 'Даступныя паведамленьні',
	'centralnotice-template-already-exists' => 'Паведамленьне ужо выкарыстоўваецца ў кампаніі.
Не дададзенае.',
	'centralnotice-preview-template' => 'Папярэдні прагляд паведамленьня',
	'centralnotice-change-lang' => 'Зьмяніць мову перакладу',
	'centralnotice-weights' => 'Вагі',
	'centralnotice-notice-is-locked' => 'Кампанія заблякаванае.
Не выдаляецца.',
	'centralnotice-overlap' => 'Час кампаніі перакрываецца часам іншай кампаніі.
Не дададзеная.',
	'centralnotice-invalid-date-range' => 'Няслушны дыяпазон датаў.
Не абнаўляецца',
	'centralnotice-null-string' => 'Немагчыма дадаць пусты радок.
Не дадаецца',
	'centralnotice-confirm-delete' => 'Вы ўпэўнены, што жадаеце выдаліць гэты элемэнт?
Гэта дзеяньне немагчыма будзе адмяніць.',
	'centralnotice-no-notices-exist' => 'Кампаніяў няма.
Дадайце адну ніжэй.',
	'centralnotice-no-templates-translate' => 'Няма паведамленьняў для рэдагаваньня перакладаў',
	'centralnotice-number-uses' => 'Выкарыстоўвае',
	'centralnotice-settings' => 'Устаноўкі',
	'centralnotice-edit-template' => 'Рэдагаваць паведамленьне',
	'centralnotice-edit-template-summary' => 'Каб стварыць лякалізуемае паведамленьне, атачыце дэфісны радок у тры фігурныя дужкі, напрыклад, {{{цытата-джымба}}}.',
	'centralnotice-message' => 'Паведамленьне',
	'centralnotice-message-not-set' => 'Паведамленьне не ўсталяванае',
	'centralnotice-clone' => 'Копія',
	'centralnotice-clone-notice' => 'Стварыць копію паведамленьня',
	'centralnotice-clone-name' => 'Назва:',
	'centralnotice-preview-all-template-translations' => 'Праглядзець усе даступныя пераклады паведамленьня',
	'centralnotice-insert' => 'Уставіць: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} кнопку',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} кнопку',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} кнопку',
	'centralnotice-translate-button' => 'Кнопка дапамогі ў перакладзе',
	'centralnotice-donate-button' => 'Кнопка ахвяраваньняў',
	'centralnotice-expanded-banner' => 'Разгорнуты банэр',
	'centralnotice-collapsed-banner' => 'Згорнуты банэр',
	'centralnotice-banner-display' => 'Паказваць у:',
	'centralnotice-banner-anonymous' => 'Ананімныя ўдзельнікі',
	'centralnotice-banner-logged-in' => 'Удзельнікі:',
	'centralnotice-banner-type' => 'Тып банэра:',
	'centralnotice-banner-hidable' => 'Фіксаваны / Хаваемы',
	'centralnotice-banner-collapsible' => 'Згортваемы',
	'centralnotice-geotargeted' => 'Геаграфічная прывязка',
	'centralnotice-countries' => 'Краіны',
	'centralnotice-allocation' => 'Прызначэньне',
	'centralnotice-view-allocation' => 'Паказаць разьмяшчэньне банэра',
	'centralnotice-allocation-instructions' => 'Выберыце рэжым, для якога Вы жадаеце праглядзець разьмяшчэньне банэра:',
	'centralnotice-project-language' => 'Мова праекту',
	'centralnotice-country' => 'Краіна',
	'centralnotice-no-allocation' => 'Няма разьмешчаных банэраў.',
	'centralnotice-allocation-description' => 'Разьмяшчэньне банэра для $1.$2 у $3:',
	'centralnotice-percentage' => 'Адсоткаў',
	'right-centralnotice-admin' => 'Кіраваньне цэнтральнымі паведамленьнямі',
	'right-centralnotice-translate' => 'пераклад цэнтралізаваных паведамленьняў',
	'action-centralnotice-admin' => 'кіраваньне цэнтралізаванымі паведамленьнямі',
	'action-centralnotice-translate' => 'пераклад цэнтральных паведамленьняў',
	'centralnotice-preferred' => 'Пажадана',
);

/** Bulgarian (Български)
 * @author Borislav
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'centralnotice' => 'Администратор на централизираните съобщения',
	'noticetemplate' => 'Шаблон за централизирани съобщения',
	'centralnotice-desc' => 'Добавя главнa сайтова бележка',
	'centralnotice-summary' => 'Този интерфейс позволява да редактирате текущо съществуващите централизирани съобщения.
Той може да се използва и за прибавяне на нови и премахване на стари съобщения.',
	'centralnotice-query' => 'Промяна на текущите съобщения',
	'centralnotice-notice-name' => 'Име на съобщението',
	'centralnotice-end-date' => 'Крайна дата',
	'centralnotice-enabled' => 'Включено',
	'centralnotice-modify' => 'Изпращане',
	'centralnotice-preview' => 'Преглеждане',
	'centralnotice-add-new' => 'Добавяне на ново централизирано съобщение',
	'centralnotice-remove' => 'Премахване',
	'centralnotice-translate-heading' => 'Превод за $1',
	'centralnotice-manage' => 'Управление на централизираното съобщение',
	'centralnotice-add' => 'Добавяне',
	'centralnotice-add-notice' => 'Добавяне на съобщение',
	'centralnotice-add-template' => 'Добавяне на шаблон',
	'centralnotice-show-notices' => 'Показване на съобщенията',
	'centralnotice-list-templates' => 'Списък на шаблоните',
	'centralnotice-translations' => 'Преводи',
	'centralnotice-translate-to' => 'Превеждане на',
	'centralnotice-translate' => 'Превеждане',
	'centralnotice-english' => 'Английски',
	'centralnotice-banner-name' => 'Име на шаблона',
	'centralnotice-templates' => 'Шаблони',
	'centralnotice-weight' => 'Тежест',
	'centralnotice-locked' => 'Заключено',
	'centralnotice-notices' => 'Съобщения',
	'centralnotice-template-body' => 'Тяло на шаблона:',
	'centralnotice-day' => 'Ден',
	'centralnotice-year' => 'Година',
	'centralnotice-month' => 'Месец',
	'centralnotice-hours' => 'Час',
	'centralnotice-min' => 'Минута',
	'centralnotice-project-lang' => 'Език на проекта',
	'centralnotice-project-name' => 'Име на проекта',
	'centralnotice-start-date' => 'Начална дата',
	'centralnotice-start-time' => 'начално време (UTC)',
	'centralnotice-available-templates' => 'Налични шаблони',
	'centralnotice-preview-template' => 'Преглед на шаблона',
	'centralnotice-no-templates-translate' => 'Няма шаблони, за които да се редактират преводите',
	'centralnotice-edit-template' => 'Редактиране на шаблон',
	'centralnotice-message' => 'Съобщение',
	'centralnotice-message-not-set' => 'Съобщението не е зададено',
	'centralnotice-clone' => 'Клониране',
	'centralnotice-clone-notice' => 'Създаване на копие на шаблона',
	'centralnotice-preview-all-template-translations' => 'Преглед на всички налични преводи на шаблона',
	'right-centralnotice-admin' => 'Управление на централизираните съобщения',
	'right-centralnotice-translate' => 'Превод на централизираните съобщения',
	'centralnotice-preferred' => 'Предпочитано',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'centralnotice' => 'কেন্দ্রীয় নোটিশ প্রশাসক',
	'noticetemplate' => 'কেন্দ্রীয় নোটিশ প্রশাসক',
	'centralnotice-desc' => 'একটি কেন্দ্রীয় সাইটনোটিশ যোগ করো',
	'centralnotice-summary' => 'এই মডিউলটি বর্তমান সেটআপ করা সাইট নোটিশ সম্পাদনা করার সুযোগ দিবে।
পুরাতন নোটিশ যোগ বা অপসারণের কাজেও এটি ব্যবহার করা যাবে।',
	'centralnotice-query' => 'বর্তমান নোটিশ পরিবর্তন',
	'centralnotice-notice-name' => 'নোটিশের নাম',
	'centralnotice-end-date' => 'শেষের তারিখ',
	'centralnotice-enabled' => 'সক্রিয়',
	'centralnotice-modify' => 'জমা দাও',
	'centralnotice-save-banner' => 'ব্যানার সংরক্ষণ',
	'centralnotice-preview' => 'প্রাকদর্শন',
	'centralnotice-add-new' => 'একটি নতুন কেন্দ্রীয় নোটিশ যোগ করো',
	'centralnotice-remove' => 'অপসারণ',
	'centralnotice-translate-heading' => '$1 এর জন্য অনুবাদ',
	'centralnotice-manage' => 'কেন্দ্রীয় নোটশ ব্যবস্থাপনা',
	'centralnotice-manage-templates' => 'ব্যানার ব্যবস্থাপনা',
	'centralnotice-add' => 'যোগ',
	'centralnotice-add-notice' => 'নোটিশ যোগ',
	'centralnotice-add-template' => 'টেম্পলেট যোগ',
	'centralnotice-show-notices' => 'নোটিশ দেখাও',
	'centralnotice-list-templates' => 'টেম্পলেটের তালিকা',
	'centralnotice-translations' => 'অনুবাদসমূহ',
	'centralnotice-translate-to' => 'যে ভাষায় অনুবাদ করা হচ্ছে তা হল',
	'centralnotice-translate' => 'অনুবাদ',
	'centralnotice-english' => 'ইংরেজি',
	'centralnotice-banner-name' => 'টেম্পলেটের নাম',
	'centralnotice-templates' => 'টেম্পলেট',
	'centralnotice-weight' => 'ওজন',
	'centralnotice-locked' => 'অবরুদ্ধ',
	'centralnotice-notices' => 'নোটিশ',
	'centralnotice-notice-exists' => 'সাইট নোটশ ইতিমধ্যে রয়েছে।
যোগ হয়নি',
	'centralnotice-template-exists' => 'টেম্পলেট ইতিমধ্যে রয়েছে।
যোগ হয়নি',
	'centralnotice-notice-doesnt-exist' => 'নোটিশ নেই।
অপসারণ করার মত কিছু নেই',
	'centralnotice-template-body' => 'টেম্পলেট বডি:',
	'centralnotice-day' => 'দিন',
	'centralnotice-year' => 'বছর',
	'centralnotice-month' => 'মাস',
	'centralnotice-hours' => 'ঘন্টা',
	'centralnotice-min' => 'মিনিট',
	'centralnotice-project-lang' => 'প্রকল্পের ভাষা',
	'centralnotice-project-name' => 'প্রকল্পের নাম',
	'centralnotice-start-date' => 'শুরুর তারিখ',
	'centralnotice-start-time' => 'শুরুর সময় (UTC)',
	'centralnotice-assigned-templates' => 'নিয়োজিত টেম্পলেট',
	'centralnotice-no-templates' => 'কোনো টেম্পলেট পাওয়া যায়নি।
যোগ করুন!',
	'centralnotice-no-templates-assigned' => 'নোটিশে কোনো টেম্পলেট নিয়োগ হয় নাই।
যোগ করুন!',
	'centralnotice-available-templates' => 'বিদ্যমান টেম্পলেট',
	'centralnotice-preview-template' => 'টেম্পলেট প্রাকদর্শন',
	'centralnotice-change-lang' => 'অনুবাদের ভাষা পরিবর্তন',
	'centralnotice-weights' => 'ওজন',
	'centralnotice-notice-is-locked' => 'নোটিশটি অবরুদ্ধ।
অপসারণ হয়নি',
	'centralnotice-overlap' => 'অন্য নোটিশের সময়ের মধ্যে অধিক্রমন (ওভারল্যাপ) করে।
যোগ হয়নি',
	'centralnotice-invalid-date-range' => 'ভুল তারিখ পরিসীমা।
হালনাগাদ হয়নি',
	'centralnotice-null-string' => 'খালি স্ট্রিং যোগ করা যাবে না।
যোগ হয়নি',
	'centralnotice-confirm-delete' => 'আপনি কি নিশ্চিত ভাবে এই আইটেমটি মুছে ফেলতে চান?
এই কাজটির পুনরুদ্ধার সম্ভব হবে না।',
	'centralnotice-no-notices-exist' => 'কোনো নোটিশ নেই।
নিচে একটি যোগ করুন।',
	'centralnotice-no-templates-translate' => 'অনুবাদ সম্পাদনার জন্য কোনো টেম্পলেট নেই',
	'centralnotice-number-uses' => 'ব্যবহার',
	'centralnotice-edit-template' => 'টেম্পলেট সম্পাদনা',
	'centralnotice-message' => 'বার্তা',
	'centralnotice-message-not-set' => 'বার্তা সেট হয়নি',
	'centralnotice-clone' => 'হুবুহু অনুলিপি',
	'centralnotice-clone-notice' => 'টেম্পলেটের অনুলিপি তৈরি করো',
	'centralnotice-preview-all-template-translations' => 'টেম্পলেটের বিদ্যমান সকল অনুবাদের প্রাকদর্শন দেখাও',
	'centralnotice-banner-anonymous' => 'বেনামী ব্যবহারকারী',
	'centralnotice-banner-collapsible' => 'ভাঁজযোগ্য',
	'centralnotice-countries' => 'দেশ',
	'right-centralnotice-admin' => 'কেন্দ্রীয় নোটিশ ব্যবস্থাপনা',
	'right-centralnotice-translate' => 'কেন্দ্রীয় নোটিশ অনুবাদ করুন',
	'action-centralnotice-admin' => 'কেন্দ্রীয় নোটিশ ব্যবস্থাপনা করুন',
	'action-centralnotice-translate' => 'কেন্দ্রীয় নোটিশ অনুবাদ করুন',
	'centralnotice-preferred' => 'পছন্দনীয়',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'centralnotice' => 'Melestradurezh an alioù kreiz',
	'noticetemplate' => 'Melestradurezh an alioù kreiz',
	'bannerallocation' => 'Melestradurezh an alioù kreiz',
	'centralnotice-desc' => "Ouzhpennañ a ra ur c'hemenn kreiz e laez ar pajennoù (sitenotice).",
	'centralnotice-summary' => "Talvezout a ra ar vodulenn-mañ da zegas kemmoù en arventennoù ar pennkemennoù.
Implijet e c'hall bezañ evit ouzhpennañ kemennoù pe tennañ kuit re gozh ivez .",
	'centralnotice-query' => 'Kemmañ ar menegoù red',
	'centralnotice-notice-name' => 'Anv ar meneg',
	'centralnotice-end-date' => 'Deiziad termen',
	'centralnotice-enabled' => 'Gweredekaet',
	'centralnotice-modify' => 'Kas',
	'centralnotice-save-banner' => 'Enrollañ ar giton',
	'centralnotice-preview' => 'Rakwelet',
	'centralnotice-add-new' => 'Ouzhpennañ un ali kreiz nevez',
	'centralnotice-remove' => 'Dilemel',
	'centralnotice-translate-heading' => 'Troidigezh eus $1',
	'centralnotice-manage' => 'Merañ an alioù kreiz',
	'centralnotice-manage-templates' => 'Merañ ar gitonoù',
	'centralnotice-add' => 'Ouzhpennañ',
	'centralnotice-add-notice' => "Ouhzpennañ ur c'hemenn",
	'centralnotice-edit-notice' => "Kemmañ ar c'houlzad",
	'centralnotice-add-template' => 'Ouzhpennañ ur patrom',
	'centralnotice-show-notices' => 'Diskouez ar menegoù',
	'centralnotice-list-templates' => 'Rollañ ar patromoù',
	'centralnotice-multiple_languages' => 'lies ($1)',
	'centralnotice-translations' => 'Troidigezhioù',
	'centralnotice-translate-to' => 'Treiñ e',
	'centralnotice-translate' => 'Treiñ',
	'centralnotice-english' => 'Saozneg',
	'centralnotice-banner-name' => 'Anv ar banniel :',
	'centralnotice-banner' => 'Giton',
	'centralnotice-banner-heading' => 'Banniel : $1',
	'centralnotice-templates' => 'Patromoù',
	'centralnotice-weight' => 'Pouez',
	'centralnotice-locked' => 'Prennet',
	'centralnotice-notice' => 'Koulzad',
	'centralnotice-notice-heading' => 'Koulzad : $1',
	'centralnotice-notices' => 'Kemennoù',
	'centralnotice-notice-exists' => "Bez ez eus dija eus an ali-se.
N'eo ket bet ouzhpennet neuze",
	'centralnotice-no-language' => "Yezh ebet a zo bet dibabet evit ar c'houlzad. N'eo ket bet ouzhpennet.",
	'centralnotice-template-exists' => "Bez' ez eus ar patrom-mañ c'hoazh.
N'eo ket bet ouzhpennet.",
	'centralnotice-notice-doesnt-exist' => "N'eus ket eus ar c'houlzad-mañ",
	'centralnotice-remove-notice-doesnt-exist' => "N'eus ket seus an ali-mañ.
N'eus netra da zilemel",
	'centralnotice-banner-doesnt-exist' => "N'eus ket eus ar giton-mañ",
	'centralnotice-template-still-bound' => "Liammet eo c'hoazh ar patrom gant un ali.
N'eo ket bet dilammet.",
	'centralnotice-template-body' => 'Korf ar patrom :',
	'centralnotice-day' => 'Deiz',
	'centralnotice-year' => 'Bloaz',
	'centralnotice-month' => 'Miz',
	'centralnotice-hours' => 'Eur',
	'centralnotice-min' => 'Munutenn',
	'centralnotice-project-lang' => 'Yezh ar raktres',
	'centralnotice-select' => 'Diuzit : $1',
	'centralnotice-top-ten-languages' => 'An 10 yezh implijetañ',
	'centralnotice-project-name' => 'Anv ar raktres',
	'centralnotice-start-date' => 'Deiziad kregiñ',
	'centralnotice-start-time' => 'Eur kregiñ (UTC)',
	'centralnotice-end-time' => 'Deiziad fin (UTC)',
	'centralnotice-assigned-templates' => 'Patromoù deverket',
	'centralnotice-no-templates' => "N'eus bet kavet patrom ebet.
Ouzhpennit un nebeud re !",
	'centralnotice-no-templates-assigned' => "N'eus patrom ebet deverket gant an ali.
Ouzhpennit unan !",
	'centralnotice-available-templates' => 'Patromoù zo da gaout',
	'centralnotice-template-already-exists' => "Liammet eo c'hoazh ar patrom gant ur c'houlzad.
N'eo ket bet ouzhpennet.",
	'centralnotice-preview-template' => 'Rakwelet ar patrom',
	'centralnotice-change-lang' => 'Cheñch yezh an droidigezh',
	'centralnotice-weights' => 'Pouezioù',
	'centralnotice-notice-is-locked' => "Prenet eo an ali.
N'eo ket bet dilammet.",
	'centralnotice-overlap' => "Goleiñ a ra ar c'hemenn ur c'hemenn all, evit darn pe da vat.
N'eo ket bet ouhzpennet",
	'centralnotice-invalid-date-range' => "Frapad deiziadoù direizh.
N'eo ket bet hizivaet",
	'centralnotice-null-string' => "Ne c'haller ket ouzhpennañ un neudennad c'houllo.
N'eo ket bet ouzhpennet",
	'centralnotice-confirm-delete' => "Ha sur oc'h ho peus c'hoant dilemmel an elfenn-mañ ?
Ne vo ket tu adtapout anezhi.",
	'centralnotice-no-notices-exist' => "N'eus ali ebet.
Ouzhpennit unan da heul.",
	'centralnotice-no-templates-translate' => "N'eus patrom ebet da dreiñ",
	'centralnotice-number-uses' => 'Implijoù',
	'centralnotice-settings' => 'Arventennoù',
	'centralnotice-edit-template' => 'Kemmañ ar patrom',
	'centralnotice-edit-template-summary' => "Da grouiñ ur gemennadenn da vezañ lec'helaet, enklozañ un neudennad gant ur varrennig-stagañ etre teir briataenn, da skouer {{{jimbo-quote}}}.",
	'centralnotice-message' => 'Kemennadenn',
	'centralnotice-message-not-set' => "N'eo ket bet savet ar gemennadenn",
	'centralnotice-clone' => 'Eilañ',
	'centralnotice-clone-notice' => 'Krouiñ un eiladenn eus ar patrom',
	'centralnotice-clone-name' => 'Anv :',
	'centralnotice-preview-all-template-translations' => 'Rakwellit an holl droidigezhioù a zo evit ar patrom-mañ',
	'centralnotice-insert' => "Ensoc'hañ : $1",
	'centralnotice-hide-button' => 'Bouton {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Bouton {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Bouton {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Bouton sikour evit an droidigezh',
	'centralnotice-donate-button' => 'Bouton donezonadur',
	'centralnotice-expanded-banner' => 'Banniel astennet',
	'centralnotice-collapsed-banner' => 'Banniel berraet',
	'centralnotice-banner-display' => 'Diskwel da :',
	'centralnotice-banner-anonymous' => 'Implijerien dizanv',
	'centralnotice-banner-logged-in' => 'Implijerien kevreet',
	'centralnotice-banner-type' => 'Doare banniel :',
	'centralnotice-banner-hidable' => 'Statek/Masklus',
	'centralnotice-banner-collapsible' => 'Digreskus',
	'centralnotice-geotargeted' => "Geolec'hiet",
	'centralnotice-countries' => 'Broioù',
	'centralnotice-allocation' => 'Skorenn',
	'centralnotice-view-allocation' => 'Gwelout skorenn ar giton',
	'centralnotice-allocation-instructions' => "Dibabit an endro e-lec'h m'ho pefe c'hoant da welet skorenn ar giton evit :",
	'centralnotice-project-language' => 'Yezh ar raktres',
	'centralnotice-country' => 'Bro',
	'centralnotice-no-allocation' => 'Giton skorennet ebet.',
	'centralnotice-allocation-description' => 'Skorenn giton evit $1.$2 e $3:',
	'centralnotice-percentage' => 'Dregantad',
	'right-centralnotice-admin' => 'Merañ an alioù kreiz',
	'right-centralnotice-translate' => 'Treiñ an alioù kreiz',
	'action-centralnotice-admin' => 'merañ an alioù kreiz',
	'action-centralnotice-translate' => 'treiñ an alioù kreiz',
	'centralnotice-preferred' => "Kavet gwelloc'h",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'centralnotice' => 'Uređivanje središnjeg obavještenja',
	'noticetemplate' => 'Uređivanje središnjeg obavještenja',
	'bannerallocation' => 'Uređivanje središnjeg obavještenja',
	'centralnotice-desc' => 'Dodaje središnju obavijest na stranici',
	'centralnotice-summary' => 'Ovaj modul omogućava uređivanje Vaših trenutno postavljenih središnjih obavještenja.
Također se može koristiti i za dodavanje ili uklanjanje starih obavještenja.',
	'centralnotice-query' => 'Izmjena trenutnog obavještenja',
	'centralnotice-notice-name' => 'Naziv obavještenja',
	'centralnotice-end-date' => 'Krajnji datum',
	'centralnotice-enabled' => 'Omogućeno',
	'centralnotice-modify' => 'Pošalji',
	'centralnotice-save-banner' => 'Spremi obavještenje',
	'centralnotice-preview' => 'Izgled',
	'centralnotice-add-new' => 'Dodavanje novog središnjeg obavještenja',
	'centralnotice-remove' => 'Ukloni',
	'centralnotice-translate-heading' => 'Prijevod za $1',
	'centralnotice-manage' => 'Uređivanje središnje obavijesti',
	'centralnotice-manage-templates' => 'Upravljaj obavještenjima',
	'centralnotice-add' => 'Dodaj',
	'centralnotice-add-notice' => 'Dodaj obavještenje',
	'centralnotice-edit-notice' => 'Uredi kampanju',
	'centralnotice-add-template' => 'Dodaj šablon',
	'centralnotice-show-notices' => 'Prikaži obavještenja',
	'centralnotice-list-templates' => 'Spisak šablona',
	'centralnotice-multiple_languages' => 'više ($1)',
	'centralnotice-translations' => 'Prijevodi',
	'centralnotice-translate-to' => 'Prevedi na',
	'centralnotice-translate' => 'Prijevod',
	'centralnotice-english' => 'engleski jezik',
	'centralnotice-banner-name' => 'Naslov banera:',
	'centralnotice-banner' => 'Baner',
	'centralnotice-banner-heading' => 'Obavještenje: $1',
	'centralnotice-templates' => 'Šabloni',
	'centralnotice-weight' => 'Težina',
	'centralnotice-locked' => 'Zaključano',
	'centralnotice-notice' => 'Kampanja',
	'centralnotice-notice-heading' => 'Kampanja: $1',
	'centralnotice-notices' => 'Obavještenja',
	'centralnotice-notice-exists' => 'Obavještenje već postoji.
Ne može se dodati',
	'centralnotice-no-language' => 'Nije odabran jezik za kampanju. Ništa se ne dodaje.',
	'centralnotice-template-exists' => 'Šablon već postoji.
Ne dodaje se',
	'centralnotice-notice-doesnt-exist' => 'Kampanja ne postoji.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanja ne postoji.
Ništa se ne uklanja',
	'centralnotice-banner-doesnt-exist' => 'Obavještenje ne postoji.',
	'centralnotice-template-still-bound' => 'Šablon je još uvijek povezan sa obavještenje.
Ne uklanja se',
	'centralnotice-template-body' => 'Tijelo šablona:',
	'centralnotice-day' => 'dan',
	'centralnotice-year' => 'godina',
	'centralnotice-month' => 'mjesec',
	'centralnotice-hours' => 'sat',
	'centralnotice-min' => 'minut',
	'centralnotice-project-lang' => 'Jezik projekta',
	'centralnotice-select' => 'Odaberi: $1',
	'centralnotice-top-ten-languages' => 'Najboljih 10 jezika',
	'centralnotice-project-name' => 'Naslov projekta',
	'centralnotice-start-date' => 'Početni datum',
	'centralnotice-start-time' => 'Početno vrijeme (UTC)',
	'centralnotice-end-time' => 'Vrijeme završetka (UTC)',
	'centralnotice-assigned-templates' => 'Dodijeljeni šabloni',
	'centralnotice-no-templates' => 'Nisu pronađeni šabloni.
Dodajte neki!',
	'centralnotice-no-templates-assigned' => 'Nijedan šablon nije pridružen obavještenju.
Dodajte neki!',
	'centralnotice-available-templates' => 'Dostupni šabloni',
	'centralnotice-template-already-exists' => 'Šablon je već povezan sa kampanjom.
Ne dodaje se',
	'centralnotice-preview-template' => 'Izgled šablona',
	'centralnotice-change-lang' => 'Promjena jezika prijevoda',
	'centralnotice-weights' => 'Težina',
	'centralnotice-notice-is-locked' => 'Obavještenje je zaključano.
Ne može se ukloniti',
	'centralnotice-overlap' => 'Obavještenje se preklapa u toku vremena sa drugim obavještenjem.
Ne može se dodati',
	'centralnotice-invalid-date-range' => 'Pogrešan vremenski period.
Ne može se ažurirati',
	'centralnotice-null-string' => 'Ne može se dodati prazan string.
Obavještenje nije dodano',
	'centralnotice-confirm-delete' => 'Da li ste sigurni da želite obrisati ovu stavku?
Ta akcija se ne može vratiti.',
	'centralnotice-no-notices-exist' => 'Ne postoji obavijest.
Dodaj jednu ispod',
	'centralnotice-no-templates-translate' => 'Nema ni jednog šablona za uređivanje prijevoda',
	'centralnotice-number-uses' => 'Upotreba',
	'centralnotice-settings' => 'Postavke',
	'centralnotice-edit-template' => 'Uredi šablon',
	'centralnotice-edit-template-summary' => 'Da napravite poruku koja se može lokalizirati, stavite pojam u tri zatvorene uglaste zagrade, npr. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Poruka',
	'centralnotice-message-not-set' => 'Poruka nije postavljena',
	'centralnotice-clone' => 'Klon',
	'centralnotice-clone-notice' => 'Pravi kopiju šablona',
	'centralnotice-clone-name' => 'Ime:',
	'centralnotice-preview-all-template-translations' => 'Pregled svih dostupnih prijevoda za šablon',
	'centralnotice-insert' => 'Ubaci: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} dugme',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} dugme',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} dugme',
	'centralnotice-translate-button' => 'Dugme za pomoć pri prevođenju',
	'centralnotice-donate-button' => 'Dugme za donacije',
	'centralnotice-expanded-banner' => 'Prošireno obavještenje',
	'centralnotice-collapsed-banner' => 'Smanjeno obavještenje',
	'centralnotice-banner-display' => 'Prikazati za:',
	'centralnotice-banner-anonymous' => 'Anonimni korisnici',
	'centralnotice-banner-logged-in' => 'Prijavljeni korisnici',
	'centralnotice-banner-type' => 'Tip banera:',
	'centralnotice-banner-hidable' => 'Statično/Dinamično',
	'centralnotice-banner-collapsible' => 'Moguće sakriti',
	'centralnotice-geotargeted' => 'Geociljano',
	'centralnotice-countries' => 'Države',
	'centralnotice-allocation' => 'Raspoređivanje',
	'centralnotice-view-allocation' => 'Pogledaj dodjelu obavještenja',
	'centralnotice-allocation-instructions' => 'Odaberi okruženje za koje želite vidjeti dodjelu obavještenja:',
	'centralnotice-project-language' => 'Jezik projekta',
	'centralnotice-country' => 'Država',
	'centralnotice-no-allocation' => 'Nema dodijeljenih obavještenja.',
	'centralnotice-allocation-description' => 'Dodjela obavještenja za $1.$2 u $3:',
	'centralnotice-percentage' => 'Postotak',
	'right-centralnotice-admin' => 'Uređivanje središnjeg obavještenja',
	'right-centralnotice-translate' => 'Prevođenje središnjeg obavještenja',
	'action-centralnotice-admin' => 'uređujete središnje obavještenje',
	'action-centralnotice-translate' => 'Prevođenje središnjeg obavještenja',
	'centralnotice-preferred' => 'Preferirano',
);

/** Catalan (Català)
 * @author Aleator
 * @author Loupeter
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Ssola
 * @author Vriullop
 */
$messages['ca'] = array(
	'centralnotice' => "Administrador d'avisos centrals",
	'noticetemplate' => "Plantilla d'avís central",
	'centralnotice-desc' => "Afegeix un lloc central d'avisos",
	'centralnotice-summary' => "Aquesta extensió us permet editar el vostre lloc central d'avisos.
També pot ser usat per afegir o eliminar avisos.",
	'centralnotice-query' => 'Modifica avisos actuals',
	'centralnotice-notice-name' => "Nom de l'avís",
	'centralnotice-end-date' => 'Data de finalització',
	'centralnotice-enabled' => 'Activat',
	'centralnotice-modify' => 'Tramet',
	'centralnotice-preview' => 'Previsualitza',
	'centralnotice-add-new' => "Afegeix una nova central d'avisos",
	'centralnotice-remove' => 'Elimina',
	'centralnotice-translate-heading' => 'Traducció de $1',
	'centralnotice-manage' => "Gestiona la central d'avisos",
	'centralnotice-add' => 'Afegeix',
	'centralnotice-add-notice' => 'Afegeix un avís',
	'centralnotice-add-template' => 'Afegeix una plantilla',
	'centralnotice-show-notices' => 'Mostra avisos',
	'centralnotice-list-templates' => 'Llista les plantilles',
	'centralnotice-translations' => 'Traduccions',
	'centralnotice-translate-to' => 'Tradueix a',
	'centralnotice-translate' => 'Tradueix',
	'centralnotice-english' => 'Anglès',
	'centralnotice-banner-name' => 'Nom del bàner:',
	'centralnotice-templates' => 'Plantilles',
	'centralnotice-weight' => 'Pes',
	'centralnotice-locked' => 'Bloquejat',
	'centralnotice-notices' => 'Avisos',
	'centralnotice-notice-exists' => "L'avís ja existeix.
No s'afegirà",
	'centralnotice-template-exists' => "La plantilla ja existeix.
No s'afegirà.",
	'centralnotice-notice-doesnt-exist' => "L'avís no existeix.",
	'centralnotice-template-still-bound' => "La plantilla encara s'usa en un avís.
No s'ha pogut eliminar.",
	'centralnotice-template-body' => 'Cos de la plantilla:',
	'centralnotice-day' => 'Dia',
	'centralnotice-year' => 'Any',
	'centralnotice-month' => 'Mes',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Llengua del projecte',
	'centralnotice-project-name' => 'Nom del projecte',
	'centralnotice-start-date' => 'Data inicial',
	'centralnotice-start-time' => "Hora d'inici (UTC)",
	'centralnotice-assigned-templates' => 'Plantilles assignades',
	'centralnotice-no-templates' => 'No hi ha plantilles.
Afegiu-ne!',
	'centralnotice-no-templates-assigned' => "No hi ha plantilles assignades a l'avís.
Afegiu-ne!",
	'centralnotice-available-templates' => 'Plantilles disponibles',
	'centralnotice-template-already-exists' => "La plantilla ja s'està usant a la campanya.
No s'afegirà",
	'centralnotice-preview-template' => 'Previsualitza la plantilla',
	'centralnotice-change-lang' => 'Canvia la llengua de la traducció',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => "L'avís està bloquejat.
No s'ha eliminat",
	'centralnotice-overlap' => "L'avís se superposa en el temps amb un altre avís.
No s'ha afegit",
	'centralnotice-invalid-date-range' => 'Interval de dates invàlid.
No actualitzat',
	'centralnotice-null-string' => "No s'ha pogut afegir una cadena nul·la.",
	'centralnotice-confirm-delete' => 'Estau segur que voleu eliminar aquest ítem?
Aquesta acció serà irreversible.',
	'centralnotice-no-notices-exist' => 'No hi ha cap avís.
Afegiu-ne un a continuació.',
	'centralnotice-no-templates-translate' => 'No hi ha cap plantilla per modificar les traduccions per',
	'centralnotice-number-uses' => 'Usos',
	'centralnotice-edit-template' => 'Modifica la plantilla',
	'centralnotice-message' => 'Missatge',
	'centralnotice-message-not-set' => 'Missatge no fixat',
	'centralnotice-clone' => 'Duplica',
	'centralnotice-clone-notice' => 'Crea una còpia de la plantilla',
	'centralnotice-preview-all-template-translations' => 'Previsualitza totes les traduccions disponibles de plantilles',
	'right-centralnotice-admin' => 'Gestionau els avisos centrals',
	'right-centralnotice-translate' => 'Traduïu els avisos centrals',
	'action-centralnotice-admin' => 'Gestionau els avisos centrals',
	'action-centralnotice-translate' => 'Traduïu els avisos centrals',
	'centralnotice-preferred' => 'Preferit',
);

/** Sorani (کوردی) */
$messages['ckb'] = array(
	'centralnotice-modify' => 'ناردن',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Mormegil
 */
$messages['cs'] = array(
	'centralnotice' => 'Správa centralizovaných oznámení',
	'noticetemplate' => 'Správa centralizovaných oznámení',
	'centralnotice-desc' => 'Přidává centrální zprávu do záhlaví',
	'centralnotice-summary' => 'Pomocí tohoto modulu můžete upravovat momentálně nastavená centralizovaná oznámení.
Také zde můžete přidávat nová či odstraňovat stará.',
	'centralnotice-query' => 'Změnit současná oznámení',
	'centralnotice-notice-name' => 'Název oznámení',
	'centralnotice-end-date' => 'Datum konce',
	'centralnotice-enabled' => 'Zapnuto',
	'centralnotice-modify' => 'Odeslat',
	'centralnotice-save-banner' => 'Uložit banner',
	'centralnotice-preview' => 'Náhled',
	'centralnotice-add-new' => 'Přidat nové centrální oznámení',
	'centralnotice-remove' => 'Odstranit',
	'centralnotice-translate-heading' => 'Překlad šablony „$1“',
	'centralnotice-manage' => 'Spravovat centralizovaná oznámení',
	'centralnotice-manage-templates' => 'Správa bannerů',
	'centralnotice-add' => 'Přidat',
	'centralnotice-add-notice' => 'Přidat oznámení',
	'centralnotice-edit-notice' => 'Upravit kampaň',
	'centralnotice-add-template' => 'Přidat šablonu',
	'centralnotice-show-notices' => 'Zobrazit oznámení',
	'centralnotice-list-templates' => 'Seznam šablon',
	'centralnotice-multiple_languages' => 'více ($1)',
	'centralnotice-translations' => 'Překlady',
	'centralnotice-translate-to' => 'Přeložit do jazyka',
	'centralnotice-translate' => 'Přeložit',
	'centralnotice-english' => 'Anglicky',
	'centralnotice-banner-name' => 'Název banneru:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Šablony',
	'centralnotice-weight' => 'Váha',
	'centralnotice-locked' => 'Uzamčeno',
	'centralnotice-notice' => 'Kampaň',
	'centralnotice-notice-heading' => 'Kampaň: $1',
	'centralnotice-notices' => 'Oznámení',
	'centralnotice-notice-exists' => 'Oznámení už existuje. Nepřidáno.',
	'centralnotice-no-language' => 'Pro kampaň nebyl vybrán žádný jazyk. Oznámení nebylo přidáno.',
	'centralnotice-template-exists' => 'Šablona už existuje. Nepřidána.',
	'centralnotice-notice-doesnt-exist' => 'Kampaň neexistuje.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampaň neexistuje.
Není co odstranit.',
	'centralnotice-banner-doesnt-exist' => 'Banner neexistuje.',
	'centralnotice-template-still-bound' => 'Šablona je stále navázána na oznámení. Nebude odstraněna.',
	'centralnotice-template-body' => 'Tělo šablony:',
	'centralnotice-day' => 'Den',
	'centralnotice-year' => 'Rok',
	'centralnotice-month' => 'Měsíc',
	'centralnotice-hours' => 'Hodiny',
	'centralnotice-min' => 'Minuty',
	'centralnotice-project-lang' => 'Jazyk projektu',
	'centralnotice-select' => 'Vybrat: $1',
	'centralnotice-top-ten-languages' => '10 největších jazyků',
	'centralnotice-project-name' => 'Název projektu',
	'centralnotice-start-date' => 'Datum začátku',
	'centralnotice-start-time' => 'Čas začátku (UTC)',
	'centralnotice-end-time' => 'Čas konce (UTC)',
	'centralnotice-assigned-templates' => 'Přiřazené šablony',
	'centralnotice-no-templates' => 'Nenalezena ani jedna šablona. Vytvořte nějakou!',
	'centralnotice-no-templates-assigned' => 'K oznámení nebyly přiřazeny žádné šablony. Přidejte nějaké!',
	'centralnotice-available-templates' => 'Dostupné šablony',
	'centralnotice-template-already-exists' => 'Šablona už byla s kampaní svázána.
Nebude přidána.',
	'centralnotice-preview-template' => 'Náhled šablony',
	'centralnotice-change-lang' => 'Změnit překládaný jazyk',
	'centralnotice-weights' => 'Váhy',
	'centralnotice-notice-is-locked' => 'Oznámení je uzamčeno. Nebude odstraněno.',
	'centralnotice-overlap' => 'Čas zobrazení oznámení se překrývá s časem zobrazení jiného oznámení.
Nebylo přidáno.',
	'centralnotice-invalid-date-range' => 'Neplatný rozsah dat. Nebude změněno.',
	'centralnotice-null-string' => 'Nelze přidat prázdný řetězec. Nebude přidáno.',
	'centralnotice-confirm-delete' => 'Jste si jisti, že chcete tuto položku smazat? Tuto operaci nebude možno vrátit.',
	'centralnotice-no-notices-exist' => 'Neexistují žádná oznámení.
Níže můžete vytvořit nové.',
	'centralnotice-no-templates-translate' => 'Nejsou žádné šablony, které by šlo přeložit',
	'centralnotice-number-uses' => 'Použití',
	'centralnotice-settings' => 'Nastavení',
	'centralnotice-edit-template' => 'Upravit šablonu',
	'centralnotice-edit-template-summary' => 'Lokalizovatelnou zprávu vytvoříte uzavřením identifikátoru se spojovníky do složených závorek, např. {{{citát-jimbo}}}.',
	'centralnotice-message' => 'Zpráva',
	'centralnotice-message-not-set' => 'Zpráva nebyla nastavena',
	'centralnotice-clone' => 'Naklonovat',
	'centralnotice-clone-notice' => 'Vytvořit kopii šablony',
	'centralnotice-clone-name' => 'Název:',
	'centralnotice-preview-all-template-translations' => 'Náhled všech dostupných překladů šablony',
	'centralnotice-insert' => 'Vložit: $1',
	'centralnotice-hide-button' => 'Tlačítko „{{int:centralnotice-shared-hide}}“',
	'centralnotice-collapse-button' => 'Tlačítko „{{int:centralnotice-shared-collapse}}“',
	'centralnotice-expand-button' => 'Tlačítko „{{int:centralnotice-shared-expand}}“',
	'centralnotice-translate-button' => 'Tlačítko „Pomozte s překladem“',
	'centralnotice-donate-button' => 'Tlačítko „Přispějte“',
	'centralnotice-expanded-banner' => 'Rozbalený banner',
	'centralnotice-collapsed-banner' => 'Sbalený banner',
	'centralnotice-banner-display' => 'Zobrazovat:',
	'centralnotice-banner-anonymous' => 'Anonymním uživatelům',
	'centralnotice-banner-logged-in' => 'Přihlášeným uživatelům',
	'centralnotice-banner-type' => 'Typ banneru:',
	'centralnotice-banner-hidable' => 'Statický/skrývatelný',
	'centralnotice-banner-collapsible' => 'Sbalitelný',
	'centralnotice-geotargeted' => 'Zeměpisně cílené',
	'centralnotice-countries' => 'Země',
	'right-centralnotice-admin' => 'Správa centralizovaných oznámení',
	'right-centralnotice-translate' => 'Překlad centralizovaných oznámení',
	'action-centralnotice-admin' => 'spravovat centralizovaná oznámení',
	'action-centralnotice-translate' => 'překládat centralizovaná oznámení',
	'centralnotice-preferred' => 'Preferováno',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 * @author Xxglennxx
 */
$messages['cy'] = array(
	'centralnotice' => "Gweinyddu'r hysbysiad canolog",
	'noticetemplate' => 'Nodyn ar gyfer hysbysiad canolog',
	'centralnotice-desc' => 'Yn ychwanegu hysbysiad canolog',
	'centralnotice-summary' => "Mae'r teclyn hwn yn eich galluogi i olygu'r hysbysiadau canolog sydd wedi eu gosod ar hyn o bryd.
Gall hefyd gael ei ddefnyddio i ychwanegu hen hysbysiadau neu eu tynnu i ffwrdd.",
	'centralnotice-query' => 'Addasu hysbysiadau cyfredol',
	'centralnotice-notice-name' => "Enw'r hysbysiad",
	'centralnotice-end-date' => 'Dyddiad y daw i ben',
	'centralnotice-enabled' => 'Wedi ei alluogi',
	'centralnotice-modify' => 'Gosoder',
	'centralnotice-preview' => 'Rhagolwg',
	'centralnotice-add-new' => 'Ychwanegu hysbysiad canolog newydd',
	'centralnotice-remove' => 'Diddymu',
	'centralnotice-translate-heading' => 'Cyfieithiad ar gyfer $1',
	'centralnotice-manage' => 'Gweinyddu hysbysiad canolog',
	'centralnotice-add' => 'Ychwanegu',
	'centralnotice-add-notice' => 'Ychwanegu hysbysiad',
	'centralnotice-add-template' => 'Ychwanegu nodyn',
	'centralnotice-show-notices' => 'Dangos yr hysbysiadau',
	'centralnotice-list-templates' => "Rhestru'r nodiadau",
	'centralnotice-translations' => 'Cyfieithiadau',
	'centralnotice-translate-to' => "Cyfieithu i'r",
	'centralnotice-translate' => 'Cyfieithu',
	'centralnotice-english' => 'Saesneg',
	'centralnotice-banner-name' => "Enw'r faner:",
	'centralnotice-templates' => 'Nodiadau',
	'centralnotice-weight' => 'Pwys',
	'centralnotice-locked' => 'Ar glo',
	'centralnotice-notices' => 'Hysbysiadau',
	'centralnotice-notice-exists' => "Mae'r hysbysiad eisoes ar gael.
Ni chaiff ei ychwanegu",
	'centralnotice-template-exists' => "Mae'r faner yn bodoli'n barod.
Ddim yn ychwanegu",
	'centralnotice-notice-doesnt-exist' => "Nid yw'r ymgyrch i gael.",
	'centralnotice-template-still-bound' => "Mae'r faner yn dal i fod ynghlwm wrth ymgyrch.
Ddim yn tynnu i ffwrdd.",
	'centralnotice-template-body' => 'Testun y faner:',
	'centralnotice-day' => 'Dydd',
	'centralnotice-year' => 'Blwyddyn',
	'centralnotice-month' => 'Mis',
	'centralnotice-hours' => 'Awr',
	'centralnotice-min' => 'Munud',
	'centralnotice-project-lang' => 'Iaith y prosiect',
	'centralnotice-project-name' => "Enw'r prosiect",
	'centralnotice-start-date' => 'Dyddiad cychwyn',
	'centralnotice-start-time' => 'Amser cychwyn (UTC)',
	'centralnotice-no-templates' => 'Ni chanfuwyd unrhyw faner. 
Ychwanegwch rai!',
	'centralnotice-weights' => 'Pwysau',
	'centralnotice-notice-is-locked' => "Mae'r hysbysiad wedi ei gloi.
Ni chaiff ei dynnu i ffwrdd",
	'centralnotice-no-notices-exist' => 'Does dim hysbysiadau i gael.
Gallwch ychwanegu un isod.',
	'centralnotice-edit-template' => "Golygu'r nodyn",
	'centralnotice-message' => 'Neges',
	'centralnotice-clone-name' => 'Enw:',
	'centralnotice-banner-anonymous' => 'Defnyddwyr anhysbys',
	'right-centralnotice-admin' => 'Gweinyddu hysbysiadau canolog',
	'right-centralnotice-translate' => 'Cyfieithu hysbysiadau canolog',
	'action-centralnotice-admin' => 'gweinyddu hysbysiadau canolog',
	'action-centralnotice-translate' => 'cyfieithu hysbysiadau canolog',
);

/** Danish (Dansk)
 * @author Byrial
 * @author Masz
 * @author Sarrus
 */
$messages['da'] = array(
	'centralnotice-end-date' => 'Slutdato',
	'centralnotice-preview' => 'Forhåndsvisning',
	'centralnotice-add' => 'Tilføj',
	'centralnotice-english' => 'Engelsk',
	'centralnotice-banner-name' => 'Bannernavn:',
	'centralnotice-templates' => 'Skabeloner',
	'centralnotice-locked' => 'Låst',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'År',
	'centralnotice-month' => 'Måned',
	'centralnotice-hours' => 'Time',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Projektsprog',
	'centralnotice-project-name' => 'Projektnavn',
	'centralnotice-start-date' => 'Startdato',
	'centralnotice-start-time' => 'Starttid (UTC)',
	'right-centralnotice-admin' => 'Administrere centrale meddelelser',
	'action-centralnotice-admin' => 'administrere centrale beskeder',
	'action-centralnotice-translate' => 'oversætte centrale beskeder',
);

/** German (Deutsch)
 * @author Kghbln
 * @author McDutchie
 * @author Metalhead64
 * @author Purodha
 * @author Raimond Spekking
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de'] = array(
	'centralnotice' => 'Verwaltung zentraler Meldungen',
	'noticetemplate' => 'Verwaltung zentraler Meldungen',
	'bannerallocation' => 'Verwaltung zentraler Meldungen',
	'centralnotice-desc' => 'Ermöglicht es, zentrale Meldungen für das Wiki zu erstellen',
	'centralnotice-summary' => 'Diese Erweiterung erlaubt die Konfiguration zentraler Meldungen.
Sie kann auch zur Erstellung neuer und Löschung alter Meldungen verwendet werden.',
	'centralnotice-query' => 'Aktuelle Meldung ändern',
	'centralnotice-notice-name' => 'Name der Notiz',
	'centralnotice-end-date' => 'Enddatum',
	'centralnotice-enabled' => 'Aktiviert',
	'centralnotice-modify' => 'OK',
	'centralnotice-save-banner' => 'Vorlage speichern',
	'centralnotice-preview' => 'Vorschau',
	'centralnotice-add-new' => 'Füge eine neue zentrale Meldung hinzu',
	'centralnotice-remove' => 'Entfernen',
	'centralnotice-translate-heading' => 'Übersetzung von „$1“',
	'centralnotice-manage' => 'Zentrale Meldungen verwalten',
	'centralnotice-manage-templates' => 'Vorlagen verwalten',
	'centralnotice-add' => 'Hinzufügen',
	'centralnotice-add-notice' => 'Hinzufügen einer Meldung',
	'centralnotice-edit-notice' => 'Meldung bearbeiten',
	'centralnotice-add-template' => 'Hinzufügen einer Vorlage',
	'centralnotice-show-notices' => 'Zeige Meldungen',
	'centralnotice-list-templates' => 'Vorlagen auflisten',
	'centralnotice-multiple_languages' => 'mehrere ($1)',
	'centralnotice-translations' => 'Übersetzungen',
	'centralnotice-translate-to' => 'Übersetzen in',
	'centralnotice-translate' => 'Übersetzen',
	'centralnotice-english' => 'Englisch',
	'centralnotice-banner-name' => 'Name der Vorlage:',
	'centralnotice-banner' => 'Vorlage',
	'centralnotice-banner-heading' => 'Vorlage: $1',
	'centralnotice-templates' => 'Vorlagen',
	'centralnotice-weight' => 'Gewicht',
	'centralnotice-locked' => 'Gesperrt',
	'centralnotice-notice' => 'Meldung',
	'centralnotice-notice-heading' => 'Meldung: $1',
	'centralnotice-notices' => 'Meldungen',
	'centralnotice-notice-exists' => 'Meldung ist bereits vorhanden.
Sie wird daher nicht hinzugefügt.',
	'centralnotice-no-language' => 'Für die Meldung wurde keine Sprache ausgewählt. Sie wird daher nicht hinzugefügt.',
	'centralnotice-template-exists' => 'Vorlage ist bereits vorhanden.
Sie wird daher nicht hinzugefügt.',
	'centralnotice-notice-doesnt-exist' => 'Meldung ist nicht vorhanden.',
	'centralnotice-remove-notice-doesnt-exist' => 'Die Meldung ist nicht vorhanden. 
Entfernen nicht möglich.',
	'centralnotice-banner-doesnt-exist' => 'Die Vorlage ist nicht vorhanden.',
	'centralnotice-template-still-bound' => 'Vorlage ist noch an eine Meldung gebunden.
Entfernung nicht möglich.',
	'centralnotice-template-body' => 'Vorlagentext:',
	'centralnotice-day' => 'Tag',
	'centralnotice-year' => 'Jahr',
	'centralnotice-month' => 'Monat',
	'centralnotice-hours' => 'Stunde',
	'centralnotice-min' => 'Minute',
	'centralnotice-project-lang' => 'Projektsprache',
	'centralnotice-select' => 'Auswählen: $1',
	'centralnotice-top-ten-languages' => 'Top-10-Sprachen',
	'centralnotice-project-name' => 'Projektname',
	'centralnotice-start-date' => 'Startdatum',
	'centralnotice-start-time' => 'Startzeitpunkt (UTC)',
	'centralnotice-end-time' => 'Endzeitpunkt (UTC)',
	'centralnotice-assigned-templates' => 'Zugewiesene Vorlagen',
	'centralnotice-no-templates' => 'Es sind keine Vorlagen gefunden worden.
Füge eine hinzu.',
	'centralnotice-no-templates-assigned' => 'Es sind keine Vorlagen an Meldungen zugewiesen.
Füge eine hinzu.',
	'centralnotice-available-templates' => 'Verfügbare Vorlagen',
	'centralnotice-template-already-exists' => 'Vorlage ist bereits mit der Meldung verbunden.
Sie wird daher nicht hinzugefügt.',
	'centralnotice-preview-template' => 'Vorschau Vorlage',
	'centralnotice-change-lang' => 'Übersetzungssprache ändern',
	'centralnotice-weights' => 'Gewicht',
	'centralnotice-notice-is-locked' => 'Meldung ist gesperrt.
Sie wird daher nicht entfernt.',
	'centralnotice-overlap' => 'Die Meldung überschneidet sich mit dem Zeitraum einer anderen Meldung.
Sie wird daher nicht hinzugefügt.',
	'centralnotice-invalid-date-range' => 'Ungültiger Zeitraum.
Er wird daher nicht aktualisiert.',
	'centralnotice-null-string' => 'Es kann keine leere Meldung hinzugefügt werden.
Sie wird daher nicht hinzugefügt.',
	'centralnotice-confirm-delete' => 'Bist du sicher, dass du den Eintrag löschen möchtest?
Die Aktion kann nicht rückgängig gemacht werden.',
	'centralnotice-no-notices-exist' => 'Es sind keine Meldungen vorhanden.
Füge eine hinzu.',
	'centralnotice-no-templates-translate' => 'Es gibt keine Vorlagen, für die Übersetzungen zu bearbeiten wären',
	'centralnotice-number-uses' => 'Nutzungen',
	'centralnotice-settings' => 'Einstellungen',
	'centralnotice-edit-template' => 'Vorlage bearbeiten',
	'centralnotice-edit-template-summary' => 'Um eine zu übersetzende Nachricht zu erstellen, füge einen von drei geschweiften Klammern und mit Bindestrich umgebenen Text ein, z. B. {{{jimbo-zitat}}}.',
	'centralnotice-message' => 'Nachricht',
	'centralnotice-message-not-set' => 'Nachricht nicht gesetzt',
	'centralnotice-clone' => 'Kopie',
	'centralnotice-clone-notice' => 'Erstelle eine Kopie der Vorlage',
	'centralnotice-clone-name' => 'Name:',
	'centralnotice-preview-all-template-translations' => 'Vorschau aller verfügbaren Übersetzungen einer Vorlage',
	'centralnotice-insert' => 'Einfügen: $1',
	'centralnotice-hide-button' => 'Button {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Button {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Button {{int:centralnotice-shared-collapse}}',
	'centralnotice-translate-button' => 'Übersetzungshilfen-Button',
	'centralnotice-donate-button' => 'Spendenbutton',
	'centralnotice-expanded-banner' => 'Ausgeklappte Vorlage',
	'centralnotice-collapsed-banner' => 'Eingeklappte Vorlage',
	'centralnotice-banner-display' => 'Anzeigen für:',
	'centralnotice-banner-anonymous' => 'Unangemeldete Benutzer',
	'centralnotice-banner-logged-in' => 'Angemeldete Benutzer',
	'centralnotice-banner-type' => 'Bannertyp:',
	'centralnotice-banner-hidable' => 'Statisch/Ausblendbar',
	'centralnotice-banner-collapsible' => 'Einklappbar',
	'centralnotice-geotargeted' => 'Geo-anvisiert',
	'centralnotice-countries' => 'Länder',
	'centralnotice-allocation' => 'Anordnung',
	'centralnotice-view-allocation' => 'Anordnung der Vorlagen ansehen',
	'centralnotice-allocation-instructions' => 'Die Ausgabeumgebung für die Ansicht der Vorlagenanordnung auswählen:',
	'centralnotice-project-language' => 'Projektsprache',
	'centralnotice-country' => 'Land',
	'centralnotice-no-allocation' => 'Es wurden keine Vorlagen angeordnet.',
	'centralnotice-allocation-description' => 'Vorlagenanordnung für $1.$2 in $3:',
	'centralnotice-percentage' => 'Prozentsatz',
	'right-centralnotice-admin' => 'Zentrale Meldungen verwalten',
	'right-centralnotice-translate' => 'Zentrale Meldungen übersetzen',
	'action-centralnotice-admin' => 'zentrale Meldungen verwalten',
	'action-centralnotice-translate' => 'Zentrale Seitennotiz übersetzen',
	'centralnotice-preferred' => 'Bevorzugt',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Imre
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'centralnotice-confirm-delete' => 'Sind Sie sicher, dass Sie den Eintrag löschen möchten?
Die Aktion kann nicht rückgängig gemacht werden.',
	'centralnotice-edit-template-summary' => 'Um eine zu übersetzende Nachricht zu erstellen, fügen Sie einen von drei geschweiften Klammern und mit Bindestrich umgebenen Text ein, z. B. {{{jimbo-zitat}}}.',
);

/** Zazaki (Zazaki)
 * @author Xoser
 */
$messages['diq'] = array(
	'centralnotice' => 'Noticeyê adminê merkezî',
	'noticetemplate' => 'Templatê adminê merkezî',
	'centralnotice-desc' => 'Yew sitenoticeyê merkezî de keno',
	'centralnotice-summary' => 'Ena panel ti ra yardim keno ke ti eşkeno îkazanê merkezî bivurne.
Ena panel eyni zeman de eşkeno îkazanê kihanî de biko ya zi wedaro.',
	'centralnotice-query' => 'Îkazê peniyî bivurne',
	'centralnotice-notice-name' => 'Nameyê îkazî',
	'centralnotice-end-date' => 'Tarixê qediyayîşî',
	'centralnotice-enabled' => 'A biya',
	'centralnotice-modify' => 'Qeyd bike',
	'centralnotice-preview' => 'Verqeyd',
	'centralnotice-add-new' => 'Yew îkazê merkezi ye newî de bike',
	'centralnotice-remove' => 'Biwedar',
	'centralnotice-translate-heading' => 'Qe $1 çarnayîşî',
	'centralnotice-manage' => 'Yew îkazê merkezî îdare bike',
	'centralnotice-add' => 'De bike',
	'centralnotice-add-notice' => 'Yew îkazê de bike',
	'centralnotice-add-template' => 'Yew template de bike',
	'centralnotice-show-notices' => 'Îkazan bimucne',
	'centralnotice-list-templates' => 'Templeteyan liste bike',
	'centralnotice-translations' => 'Çarnayişan',
	'centralnotice-translate-to' => 'Ci ra çarnayîş bike',
	'centralnotice-translate' => 'Çarnayiş',
	'centralnotice-english' => 'Ingilizkî',
	'centralnotice-banner-name' => 'Nameyê templateyî',
	'centralnotice-templates' => 'Templetan',
	'centralnotice-weight' => 'Ebat',
	'centralnotice-locked' => 'Kafilnaye',
	'centralnotice-notices' => 'Îkazan',
	'centralnotice-notice-exists' => 'Îkazê verînî hama esto.
De nikeno',
	'centralnotice-template-exists' => 'Templateyanê verînî hama esto.
De nikeno',
	'centralnotice-notice-doesnt-exist' => 'Îkazê verînî hama niesto.
De nikeno',
	'centralnotice-template-still-bound' => 'Templateyê verînî hama gani bihebito.
Niwedarneno',
	'centralnotice-template-body' => 'Bedenê templateyî:',
	'centralnotice-day' => 'Roc',
	'centralnotice-year' => 'Serre',
	'centralnotice-month' => 'Aşme',
	'centralnotice-hours' => 'Seet',
	'centralnotice-min' => 'Dekika',
	'centralnotice-project-lang' => 'Ziwanê proceyî',
	'centralnotice-project-name' => 'Nameyê proceyî',
	'centralnotice-start-date' => 'Wextê başli kerdişî',
	'centralnotice-start-time' => 'Seetê başli kerdişî  (UTC)',
	'centralnotice-assigned-templates' => 'Templatan ke assign biyo',
	'centralnotice-no-templates' => 'Templateyan nidiyo
Tay de bike!',
	'centralnotice-no-templates-assigned' => 'Qe îkazî, templateyan assign nibiyo.
Tay de bike!',
	'centralnotice-available-templates' => 'Templatan ke esto',
	'centralnotice-template-already-exists' => 'Template hama hebitiyeno.
De nikeno',
	'centralnotice-preview-template' => 'Template verqeyd bike',
	'centralnotice-change-lang' => 'Ziwanê translasyonî bivurne',
	'centralnotice-weights' => 'Ebatan',
	'centralnotice-notice-is-locked' => 'îkaz kefiniyo.
Niwedarano',
	'centralnotice-overlap' => 'Zerrê wextê îkazanî de overlapanê rê dikat bike.
De nikeno',
	'centralnotice-invalid-date-range' => 'Menzilê wextî raşt niyo.
Rocaniye nikeno',
	'centralnotice-null-string' => 'Yew stringê nullyî nieşkeno de bike.
De nikeno',
	'centralnotice-confirm-delete' => 'Ti raştî wazeno ena item biwedare?
Ena hereket reyna nieşkeno biyar.',
	'centralnotice-no-notices-exist' => 'Yew  îkaz zi çin o.
Yew de bike',
	'centralnotice-no-templates-translate' => 'Hin templeteyan çino ke ti biçarne',
	'centralnotice-number-uses' => 'Ça de kar keno',
	'centralnotice-edit-template' => 'Template bivurne',
	'centralnotice-edit-template-summary' => 'Seba mesajanê lokali viraştişi, yew tire u hire paranatezi de bikefilne, mesela {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Mesaj',
	'centralnotice-message-not-set' => 'Mesaj nişiravt',
	'centralnotice-clone' => 'Kopye bike',
	'centralnotice-clone-notice' => 'Ye kopyayê templateyî viraze',
	'centralnotice-preview-all-template-translations' => 'Çarnayîşê template yê hemî bivîne',
	'right-centralnotice-admin' => 'Îkazanê merkezî îdare bike',
	'right-centralnotice-translate' => 'Çarnayîşê merkezî îdare bike',
	'action-centralnotice-admin' => 'îkazanê merkezî îdare bike',
	'action-centralnotice-translate' => 'çarnayîşê merkezî îdare bike',
	'centralnotice-preferred' => 'Tercih biyo',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'centralnotice' => 'Administrěrowanje centralnych powěźeńkow',
	'noticetemplate' => 'Pśedłoga za centralne powěźeńki',
	'centralnotice-desc' => 'Pśidawa centralnu powěźeńku do głowy boka',
	'centralnotice-summary' => 'Toś ten modul zmóžnja wobźěłowanje tuchylu nastajenych centralnych powěźeńkow.
Dajo se teke wužywaś, aby se pśidali nowe powěźeńki abo wótpórali stare powěźeńki.',
	'centralnotice-query' => 'Centralne powěźeńki změniś',
	'centralnotice-notice-name' => 'Mě powěźeńki',
	'centralnotice-end-date' => 'Kóńcny datum',
	'centralnotice-enabled' => 'Zmóžnjony',
	'centralnotice-modify' => 'Wótpósłaś',
	'centralnotice-save-banner' => 'Chórgoj składowaś',
	'centralnotice-preview' => 'Pśeglěd',
	'centralnotice-add-new' => 'Nowu centralnu powěźeńku pśidaś',
	'centralnotice-remove' => 'Wótwónoźeś',
	'centralnotice-translate-heading' => 'Pśełožk za $1',
	'centralnotice-manage' => 'Centralne powěźeńki zastojaś',
	'centralnotice-manage-templates' => 'Chórgoje zrědowaś',
	'centralnotice-add' => 'Pśidaś',
	'centralnotice-add-notice' => 'Powěźeńku pśidaś',
	'centralnotice-edit-notice' => 'Kampanju wobźěłaś',
	'centralnotice-add-template' => 'Pśedłogu pśidaś',
	'centralnotice-show-notices' => 'Powěźeńki pokazaś',
	'centralnotice-list-templates' => 'Pśedłogi nalistowaś',
	'centralnotice-multiple_languages' => 'někotare ($1)',
	'centralnotice-translations' => 'Pśełožki',
	'centralnotice-translate-to' => 'Pśełoźiś do',
	'centralnotice-translate' => 'Pśełožiś',
	'centralnotice-english' => 'Engelšćina',
	'centralnotice-banner-name' => 'Mě pśedłogi',
	'centralnotice-banner' => 'Chórgoj',
	'centralnotice-banner-heading' => 'Chórgoj: $1',
	'centralnotice-templates' => 'Pśedłogi',
	'centralnotice-weight' => 'Wažnosć',
	'centralnotice-locked' => 'Zastajony',
	'centralnotice-notice' => 'Kampanja',
	'centralnotice-notice-heading' => 'Kampanja: $1',
	'centralnotice-notices' => 'Powěźeńki',
	'centralnotice-notice-exists' => 'Powěźeńka južo eksistěrujo.
Žedno pśidaśe',
	'centralnotice-no-language' => 'Za kampanju njejo se žedna rěč wubrała. Pśidawa se nic.',
	'centralnotice-template-exists' => 'Pśedłoga južo eksistěrujo.
Žedno pśidaśe',
	'centralnotice-notice-doesnt-exist' => 'Kampanja njeeksistěrujo.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanja njeeksistěrujo.
Njejo nic za wótpóranje.',
	'centralnotice-template-still-bound' => 'Pśedłoga jo hyšći z powěźeńku zwězana.
Žedno wótpóranje.',
	'centralnotice-template-body' => 'Tekst pśedłogi:',
	'centralnotice-day' => 'Źeń',
	'centralnotice-year' => 'Lěto',
	'centralnotice-month' => 'Mjasec',
	'centralnotice-hours' => 'Góźina',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Projektowa rěc',
	'centralnotice-select' => 'Wubraś: $1',
	'centralnotice-top-ten-languages' => 'Nejlěpšych 10 rěcow',
	'centralnotice-project-name' => 'Projektowe mě',
	'centralnotice-start-date' => 'Startowy datum',
	'centralnotice-start-time' => 'Startowy cas (UTC)',
	'centralnotice-assigned-templates' => 'Pśipokazane pśedłogi',
	'centralnotice-no-templates' => 'Žedne pśedłogi namakane.
Pśidaj někotare!',
	'centralnotice-no-templates-assigned' => 'Žedne pśedłogi powěźeńce pśipokazane.
Pśidaj jadnu!',
	'centralnotice-available-templates' => 'K dispoziciji stojece pśedłogi',
	'centralnotice-template-already-exists' => 'Pśedłoga jo južo z kampanju zwězana.
Žedno pśidaśe',
	'centralnotice-preview-template' => 'Pśeglěd pśedłogi',
	'centralnotice-change-lang' => 'Pśełožkowu rěc změniś',
	'centralnotice-weights' => 'Wagi',
	'centralnotice-notice-is-locked' => 'Powěźeńka jo zastajona.
Žedno wótpóranje',
	'centralnotice-overlap' => 'Powěźeńka prěcy se z casom drugeje powěźeńki.
Žedno pśidaśe',
	'centralnotice-invalid-date-range' => 'Njepłaśiwy cas.
Žedna aktualizacija',
	'centralnotice-null-string' => 'Prozny tekst njedajo se pśidaś.
Žedno pśidaśe',
	'centralnotice-confirm-delete' => 'Coš napšawdu toś ten zapisk wulašowaś?
Toś ta akcija njedajo se anulěrowaś.',
	'centralnotice-no-notices-exist' => 'Njeeksistěruju žedne powěźeńki.
Pśidaj jadnu.',
	'centralnotice-no-templates-translate' => 'Njejsu pśedłogi, za kótarež deje se pśełožki wobźěłaś',
	'centralnotice-number-uses' => 'Wužyśa',
	'centralnotice-edit-template' => 'Pśedłogu wobźěłaś',
	'centralnotice-edit-template-summary' => 'Aby lokalizěrujobnu powěźeńku napórał, wobdaj znamuškowy rěd z wězawku z wuzgibnjonymi spinkami, na pś. {{{citat-jimbo}}}.',
	'centralnotice-message' => 'Powěźeńka',
	'centralnotice-message-not-set' => 'Powěźeńka njestajona',
	'centralnotice-clone' => 'Klonowaś',
	'centralnotice-clone-notice' => 'Kopiju pśedłogi napóraś',
	'centralnotice-clone-name' => 'Mě:',
	'centralnotice-preview-all-template-translations' => 'Pśeglěd wšych k dispoziciji stojecych pśełožkow pśedłogi',
	'centralnotice-insert' => 'Zasunuś: $1',
	'centralnotice-hide-button' => 'Tłocašk {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Tłocašk {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Tłocašk {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Tłocašk pśełožowańskeje pomocy',
	'centralnotice-donate-button' => 'Pósćiwański tłocašk',
	'centralnotice-expanded-banner' => 'Wótcynjona chórgoj',
	'centralnotice-collapsed-banner' => 'Złožona chórgoj',
	'centralnotice-banner-display' => 'Zwobrazniś za:',
	'centralnotice-banner-anonymous' => 'Anonymne wužywarje',
	'centralnotice-banner-logged-in' => 'Pśizjawjone wužywarje',
	'centralnotice-banner-type' => 'Chórgojowy typ:',
	'centralnotice-banner-hidable' => 'Statiski/Chowajobny',
	'centralnotice-banner-collapsible' => 'Fałdujobny',
	'right-centralnotice-admin' => 'Centralne powěźeńki zastojaś',
	'right-centralnotice-translate' => 'Centralne powěźeńki pśełožiś',
	'action-centralnotice-admin' => 'Centralne powěźeńki zastojaś',
	'action-centralnotice-translate' => 'Centralne powěźeńki pśełožiś',
	'centralnotice-preferred' => 'Preferěrowane',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'centralnotice-preview' => 'Kpɔe do ŋgɔ',
);

/** Greek (Ελληνικά)
 * @author Badseed
 * @author Crazymadlover
 * @author K sal 15
 * @author Lou
 * @author Omnipaedista
 * @author ZaDiak
 * @author Απεργός
 */
$messages['el'] = array(
	'centralnotice' => 'Διαχειριστής κεντρικών ειδοποιήσεων',
	'noticetemplate' => 'Πρότυπο κεντρικής ανακοίνωσης',
	'centralnotice-desc' => 'Προσθέτει μια κεντρική ανακοίνωση',
	'centralnotice-summary' => 'Αυτή η επέκταση σας επιτρέπει να επεξεργαστείτε τις τώρα εγκατεστημένες κεντρικές ειδοποιήσεις σας.
Μπορεί επίσης να χρησιμοποιηθεί για να προσθέσει ή να αφαιρέσει παλιές ειδοποιήσεις.',
	'centralnotice-query' => 'Τροποποίηση τρεχουσών ειδοποιήσεων',
	'centralnotice-notice-name' => 'Όνομα σημείωσης',
	'centralnotice-end-date' => 'Ημερομηνία λήξης',
	'centralnotice-enabled' => 'Ενεργοποιημένο',
	'centralnotice-modify' => 'Καταχώρηση',
	'centralnotice-preview' => 'Προεπισκόπηση',
	'centralnotice-add-new' => 'Προσθήκη νέας κεντρικής ανακοίνωσης',
	'centralnotice-remove' => 'Αφαίρεση',
	'centralnotice-translate-heading' => 'Μετάφραση για το $1',
	'centralnotice-manage' => 'Διαχείριση κεντρικής ειδοποίησης',
	'centralnotice-add' => 'Προσθήκη',
	'centralnotice-add-notice' => 'Προσθήκη ανακοίνωσης',
	'centralnotice-add-template' => 'Προσθήκη προτύπου',
	'centralnotice-show-notices' => 'Εμφάνιση ανακοινώσεων',
	'centralnotice-list-templates' => 'Κατάλογος προτύπων',
	'centralnotice-translations' => 'Μεταφράσεις',
	'centralnotice-translate-to' => 'Μετάφραση σε',
	'centralnotice-translate' => 'Μετάφραση',
	'centralnotice-english' => 'Αγγλικά',
	'centralnotice-banner-name' => 'Όνομα προτύπου',
	'centralnotice-banner' => 'Διαφημιστικό',
	'centralnotice-templates' => 'Πρότυπα',
	'centralnotice-weight' => 'Βάρος',
	'centralnotice-locked' => 'Κλειδωμένο',
	'centralnotice-notice' => 'Εκστρατεία',
	'centralnotice-notices' => 'Ανακοινώσεις',
	'centralnotice-notice-exists' => 'Η σημείωση υπάρχει ήδη.
Δεν προστίθεται',
	'centralnotice-template-exists' => 'Το πρότυπο υπάρχει ήδη.
Δεν προστέθηκε',
	'centralnotice-notice-doesnt-exist' => 'Η σημείωση δεν υπάρχει.
Τίποτα να αφαιρεθεί',
	'centralnotice-template-still-bound' => 'Το πρότυπο είναι ακόμη συνδεδεμένο με ένα σημείωμα.
Δεν έχει αφαιρεθεί.',
	'centralnotice-template-body' => 'Δομή προτύπου:',
	'centralnotice-day' => 'Ημέρα',
	'centralnotice-year' => 'Χρόνος',
	'centralnotice-month' => 'Μήνας',
	'centralnotice-hours' => 'Ώρα',
	'centralnotice-min' => 'Λεπτό',
	'centralnotice-project-lang' => 'Γλώσσα εγχειρήματος',
	'centralnotice-project-name' => 'Όνομα εγχειρήματος',
	'centralnotice-start-date' => 'Αρχική ημερομηνία',
	'centralnotice-start-time' => 'Χρόνος εκκίνησης (UTC)',
	'centralnotice-assigned-templates' => 'Απονομημένα πρότυπα',
	'centralnotice-no-templates' => 'Δεν βρέθηκαν πρότυπα.
Προσθέστε μερικά!',
	'centralnotice-no-templates-assigned' => 'Κανένα πρότυπο δεν έχει ανατεθεί σε σημείωση.
Προσθέστε κάποια!',
	'centralnotice-available-templates' => 'Διαθέσιμα πρότυπα',
	'centralnotice-template-already-exists' => 'Το πρότυπο είναι ακόμη συνδεδεμένο με μία καμπάνια.
Δεν έχει προστεθεί',
	'centralnotice-preview-template' => 'Πρότυπο προεπισκόπησης',
	'centralnotice-change-lang' => 'Αλλαγή της γλώσσας μετάφρασης',
	'centralnotice-weights' => 'Βάρη',
	'centralnotice-notice-is-locked' => 'Η σημείωση είναι κλειδωμένη.
Δεν θα αφαιρεθεί',
	'centralnotice-overlap' => 'Το σημείωμα επικαλύπτεται με τον χρόνο ενός άλλου σημειώματος.
Δεν έχει προστεθεί',
	'centralnotice-invalid-date-range' => 'Άκυρο εύρος ημερομηνιών.
Δεν είναι ενημερωμένο',
	'centralnotice-null-string' => 'Αδύνατη η προσθήκη κενού ορμαθού.
Δεν έχει προστεθεί',
	'centralnotice-confirm-delete' => 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το αντικείμενο;
Αυτή η ενέργεια θα είναι μη αναστρέψιμη.',
	'centralnotice-no-notices-exist' => 'Δεν υπάρχουν σημειώσεις.
Προσθέστε μια παρακάτω.',
	'centralnotice-no-templates-translate' => 'Δεν υπάρχουν πολλά πρότυπα για να γίνει επεξεργασία των μεταφράσεων',
	'centralnotice-number-uses' => 'Χρήσεις',
	'centralnotice-edit-template' => 'Επεξεργασία προτύπου',
	'centralnotice-message' => 'Μήνυμα',
	'centralnotice-message-not-set' => 'Μη ρυθμισμένο μήνυμα',
	'centralnotice-clone' => 'Κλώνος',
	'centralnotice-clone-notice' => 'Δημιουργία ενός αντίγραφου του προτύπου',
	'centralnotice-preview-all-template-translations' => 'Προεπισκόπηση όλων των διαθέσιμων μεταφράσεων του προτύπου',
	'right-centralnotice-admin' => 'Διαχείριση κεντρικών ειδοποιήσεων',
	'right-centralnotice-translate' => 'Μετάφραση κεντρικών ειδοποιήσεων',
	'action-centralnotice-admin' => 'διαχείριση κεντρικών ειδοποιήσεων',
	'action-centralnotice-translate' => 'μετάφραση κεντρικών ειδοποιήσεων',
	'centralnotice-preferred' => 'Προτιμώμενα',
);

/** Esperanto (Esperanto)
 * @author Michawiki
 * @author Yekrats
 */
$messages['eo'] = array(
	'centralnotice' => 'Administranto de centrala notico',
	'noticetemplate' => 'Ŝablono por centrala notico',
	'centralnotice-desc' => 'Aldonas centralan noticon por la vikio',
	'centralnotice-summary' => 'Ĉi tiu modulo permesas al vi redakti viajn aktualajn centralajn noticojn.
Ĝi ankaŭ estas uzable por aldoni aŭ forigi malfreŝajn noticojn.',
	'centralnotice-query' => 'Modifi nunajn noticojn',
	'centralnotice-notice-name' => 'Notica nomo',
	'centralnotice-end-date' => 'Fina dato',
	'centralnotice-enabled' => 'Ŝaltita',
	'centralnotice-modify' => 'Enigi',
	'centralnotice-save-banner' => 'Konservi rubandon',
	'centralnotice-preview' => 'Antaŭrigardo',
	'centralnotice-add-new' => 'Aldoni novan centralan noticon',
	'centralnotice-remove' => 'Forigi',
	'centralnotice-translate-heading' => 'Traduko por $1',
	'centralnotice-manage' => 'Administri centralan noticon',
	'centralnotice-manage-templates' => 'Administri rubandojn',
	'centralnotice-add' => 'Aldoni',
	'centralnotice-add-notice' => 'Aldoni noticon',
	'centralnotice-edit-notice' => 'Redakti kampanjon',
	'centralnotice-add-template' => 'Aldoni ŝablonon',
	'centralnotice-show-notices' => 'Montri noticojn',
	'centralnotice-list-templates' => 'Rigardi ŝablonojn',
	'centralnotice-translations' => 'Tradukoj',
	'centralnotice-translate-to' => 'Traduki al',
	'centralnotice-translate' => 'Traduki',
	'centralnotice-english' => 'Angla',
	'centralnotice-banner-name' => 'Ŝablona nomo',
	'centralnotice-banner' => 'Paĝrubando',
	'centralnotice-banner-heading' => 'Rubando: $1',
	'centralnotice-templates' => 'Ŝablonoj',
	'centralnotice-weight' => 'Graveco',
	'centralnotice-locked' => 'Ŝlosita',
	'centralnotice-notice' => 'Kampanjo',
	'centralnotice-notice-heading' => 'Kampanjo: $1',
	'centralnotice-notices' => 'Noticoj',
	'centralnotice-notice-exists' => 'Notico jam ekzistas.
Ne aldonante',
	'centralnotice-template-exists' => 'Ŝablono jam ekzistas.
Ne aldonante',
	'centralnotice-notice-doesnt-exist' => 'Kampanjo ne ekzistas.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanjo ne ekzistas.
Nenio por forigi.',
	'centralnotice-template-still-bound' => 'Ŝablono ankoraŭ estas ligita al notico.
Ne forigante.',
	'centralnotice-template-body' => 'Ŝablona korpo:',
	'centralnotice-day' => 'Tago',
	'centralnotice-year' => 'Jaro',
	'centralnotice-month' => 'Monato',
	'centralnotice-hours' => 'Horo',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Projekta lingvo',
	'centralnotice-select' => 'Elekti: $1',
	'centralnotice-top-ten-languages' => '10 plej gravaj lingvoj',
	'centralnotice-project-name' => 'Projekta nomo',
	'centralnotice-start-date' => 'Komenca dato',
	'centralnotice-start-time' => 'Komenca tempo (UTC)',
	'centralnotice-assigned-templates' => 'Asignitaj ŝablonoj',
	'centralnotice-no-templates' => 'Neniuj ŝablonoj estis trovitaj.
Aldonu iujn!',
	'centralnotice-no-templates-assigned' => 'Neniuj ŝablonoj estas asignitaj al notico.
Aldonu iujn!',
	'centralnotice-available-templates' => 'Utileblaj ŝablonoj',
	'centralnotice-template-already-exists' => 'La ŝablono jam estas ligita al kampanjo.
Ne aldonante',
	'centralnotice-preview-template' => 'Antaŭrigardi ŝablonon',
	'centralnotice-change-lang' => 'Ŝanĝi traduklingvon',
	'centralnotice-weights' => 'Pezoj',
	'centralnotice-notice-is-locked' => 'Notico estas ŝlosita.
Ne forigante',
	'centralnotice-overlap' => 'Notico kolizias inter la tempo de alia notico.
Ne aldonante',
	'centralnotice-invalid-date-range' => 'Nevalida data intervalo.
Ne ĝisdatigante',
	'centralnotice-null-string' => 'Ne povas aldoni nulan signoĉenon.
Ne aldonante.',
	'centralnotice-confirm-delete' => 'Ĉu vi certas ke vi volas forigi ĉi tiun aĵon?
Ĉi tiu ago ne estos malfarebla.',
	'centralnotice-no-notices-exist' => 'Neniuj noticoj ekzistas.
Afiŝu noticon suben',
	'centralnotice-no-templates-translate' => 'Ne estas iuj ŝablonoj por redakti tradukojn por',
	'centralnotice-number-uses' => 'Uzoj',
	'centralnotice-edit-template' => 'Redakti ŝablonojn',
	'centralnotice-message' => 'Mesaĝo',
	'centralnotice-message-not-set' => 'Mesaĝo ne estis ŝaltita',
	'centralnotice-clone' => 'Kloni',
	'centralnotice-clone-notice' => 'Krei duplikaton de la ŝablono',
	'centralnotice-clone-name' => 'Nomo:',
	'centralnotice-preview-all-template-translations' => 'Antaŭvidi ĉiujn haveblajn tradukojn de ŝablono',
	'centralnotice-insert' => 'Enmeti: $1',
	'centralnotice-hide-button' => 'butono {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'butono {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'butono {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Butono de helpo al la tradukado',
	'centralnotice-donate-button' => 'Donaca butono',
	'centralnotice-expanded-banner' => 'Etendita rubando',
	'centralnotice-collapsed-banner' => 'Maletendita rubando',
	'centralnotice-banner-type' => 'Rubanda tipo:',
	'centralnotice-banner-hidable' => 'Statika/Kaŝebla',
	'centralnotice-banner-collapsible' => 'Maletendebla',
	'right-centralnotice-admin' => 'Administri centralajn noticojn',
	'right-centralnotice-translate' => 'Traduki centralajn noticojn',
	'action-centralnotice-admin' => 'administri centralajn noticojn',
	'action-centralnotice-translate' => 'traduki centralajn noticojn',
	'centralnotice-preferred' => 'Preferata',
);

/** Spanish (Español)
 * @author Crazymadlover
 * @author Danke7
 * @author Dferg
 * @author Imre
 * @author Locos epraix
 * @author McDutchie
 * @author Muro de Aguas
 * @author Remember the dot
 * @author Sanbec
 */
$messages['es'] = array(
	'centralnotice' => 'Sistema de administración de avisos centralizados',
	'noticetemplate' => 'Plantilla del aviso central',
	'centralnotice-desc' => 'Añade un mensaje central',
	'centralnotice-summary' => 'Este módulo te permite editar los parámetros actuales de los avisos centrales.
También puede usarse para añadir o borrar avisos antiguos.',
	'centralnotice-query' => 'Modificar avisos actuales',
	'centralnotice-notice-name' => 'Nombre del aviso',
	'centralnotice-end-date' => 'Fecha de fin',
	'centralnotice-enabled' => 'Habilitado',
	'centralnotice-modify' => 'Enviar',
	'centralnotice-save-banner' => 'Grabar banner',
	'centralnotice-preview' => 'Previsualizar',
	'centralnotice-add-new' => 'Añadir un nuevo aviso central',
	'centralnotice-remove' => 'Quitar',
	'centralnotice-translate-heading' => 'Traducción para $1',
	'centralnotice-manage' => 'Gestionar aviso central',
	'centralnotice-manage-templates' => 'Gestionar banners',
	'centralnotice-add' => 'Añadir',
	'centralnotice-add-notice' => 'Añadir un aviso',
	'centralnotice-edit-notice' => 'Editar campaña',
	'centralnotice-add-template' => 'Añadir una plantilla',
	'centralnotice-show-notices' => 'Mostrar avisos',
	'centralnotice-list-templates' => 'Listar plantillas',
	'centralnotice-multiple_languages' => 'múltiples ($1)',
	'centralnotice-translations' => 'Traducciones',
	'centralnotice-translate-to' => 'Traducir al',
	'centralnotice-translate' => 'Traducir',
	'centralnotice-english' => 'Inglés',
	'centralnotice-banner-name' => 'Nombre del banner:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Plantillas',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Bloqueado',
	'centralnotice-notice' => 'Campaña',
	'centralnotice-notice-heading' => 'Campaña: $1',
	'centralnotice-notices' => 'Avisos',
	'centralnotice-notice-exists' => 'El aviso ya existe.
No se ha añadido',
	'centralnotice-no-language' => 'No se ha seleccionado ninguna lengua para la campaña. No añadido.',
	'centralnotice-template-exists' => 'La plantilla ya exixte.
No se ha añadido',
	'centralnotice-notice-doesnt-exist' => 'La campaña no existe.',
	'centralnotice-remove-notice-doesnt-exist' => 'La campaña no existe.
Nada que remover.',
	'centralnotice-template-still-bound' => 'La plantilla todavía está enlazada a un aviso.
No se borrará.',
	'centralnotice-template-body' => 'Cuerpo de la plantilla:',
	'centralnotice-day' => 'Día',
	'centralnotice-year' => 'Año',
	'centralnotice-month' => 'Mes',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Idioma del proyecto',
	'centralnotice-select' => 'Seleccionar: $1',
	'centralnotice-top-ten-languages' => 'Idiomas top 10',
	'centralnotice-project-name' => 'Nombre del proyecto',
	'centralnotice-start-date' => 'Fecha de inicio',
	'centralnotice-start-time' => 'Hora de inicio (UTC)',
	'centralnotice-assigned-templates' => 'Plantillas asignadas',
	'centralnotice-no-templates' => 'No hay plantillas.
¡Añade alguna!',
	'centralnotice-no-templates-assigned' => 'No hay plantillas asignadas a avisos.
¡Añade alguna!',
	'centralnotice-available-templates' => 'Plantillas disponibles',
	'centralnotice-template-already-exists' => 'La plantilla ya está atada a una campaña.
No se añade',
	'centralnotice-preview-template' => 'Previsualizar plantilla',
	'centralnotice-change-lang' => 'Cambiar idioma de traducción',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => 'El aviso está cerrado con llave.
No se borrará',
	'centralnotice-overlap' => 'El aviso se solapa con el tiempo de otro.
No se añade',
	'centralnotice-invalid-date-range' => 'Rango de fechas no válido.
No se actualizará.',
	'centralnotice-null-string' => 'No se puede añadir una cadena vacía.
No se añadirá',
	'centralnotice-confirm-delete' => '¿Estás seguro de querer borrar este elemento?
Esta acción no se podrá deshacer.',
	'centralnotice-no-notices-exist' => 'No hay avisos.
Añade uno debajo',
	'centralnotice-no-templates-translate' => 'No hay plantillas de las que editar traducciones',
	'centralnotice-number-uses' => 'Usos',
	'centralnotice-settings' => 'Ajustes',
	'centralnotice-edit-template' => 'Editar plantilla',
	'centralnotice-edit-template-summary' => 'Para crear un mensaje localizable, encierre una cadena con guión dentro de tres llaves, por ejemplo {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Mensaje',
	'centralnotice-message-not-set' => 'No se ha establecido un mensaje',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => 'Crear una copia de la plantilla',
	'centralnotice-clone-name' => 'Nombre:',
	'centralnotice-preview-all-template-translations' => 'Previsualizar todas las traducciones disponibles de la plantilla',
	'centralnotice-insert' => 'Insertar: $1',
	'centralnotice-hide-button' => 'Ocultar botón',
	'centralnotice-collapse-button' => 'Colapsar botón',
	'centralnotice-expand-button' => 'Expandir botón',
	'centralnotice-translate-button' => 'Botón de ayuda a la traducción',
	'centralnotice-donate-button' => 'Botón de donación',
	'centralnotice-expanded-banner' => 'Banner expandido',
	'centralnotice-collapsed-banner' => 'Banner colapsado',
	'centralnotice-banner-display' => 'Mostrar a:',
	'centralnotice-banner-anonymous' => 'Usuarios anónimos',
	'centralnotice-banner-logged-in' => 'Usuarios registrados',
	'centralnotice-banner-type' => 'Tipo de banner:',
	'centralnotice-banner-hidable' => 'Estático/Ocultable',
	'centralnotice-banner-collapsible' => 'Colapsable',
	'right-centralnotice-admin' => 'Gestionar avisos centrales',
	'right-centralnotice-translate' => 'Traducir avisos centrales',
	'action-centralnotice-admin' => 'gestionar avisos centrales',
	'action-centralnotice-translate' => 'traducir avisos centrales',
	'centralnotice-preferred' => 'Preferido',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'centralnotice' => 'Keskuse teadete haldamine',
	'noticetemplate' => 'Keskuse teadete haldamine',
	'centralnotice-desc' => 'Lisab keskse võrgukohateatesüsteemi.',
	'centralnotice-summary' => 'See komponent võimaldab muuta praegu üles seatud keskuse teateid.
Samuti saab sellega teateid lisada või vanu teateid eemaldada.',
	'centralnotice-notice-name' => 'Teate nimi',
	'centralnotice-end-date' => 'Lõpukuupäev',
	'centralnotice-enabled' => 'Kasutusel',
	'centralnotice-modify' => 'Sobib',
	'centralnotice-preview' => 'Eelvaade',
	'centralnotice-add-new' => 'Lisa uus keskuse teade',
	'centralnotice-remove' => 'Eemalda',
	'centralnotice-translate-heading' => 'Malli $1 tõlge',
	'centralnotice-manage' => 'Keskuse teate muutmine',
	'centralnotice-add' => 'Lisa',
	'centralnotice-add-notice' => 'Lisa teade',
	'centralnotice-add-template' => 'Lisa mall',
	'centralnotice-show-notices' => 'Näita teateid',
	'centralnotice-list-templates' => 'Mallide list',
	'centralnotice-translations' => 'Tõlked',
	'centralnotice-translate-to' => 'Tõlgi',
	'centralnotice-translate' => 'Tõlgi',
	'centralnotice-english' => 'Inglise',
	'centralnotice-banner-name' => 'Malli nimi:',
	'centralnotice-templates' => 'Mallid',
	'centralnotice-weight' => 'Kaal',
	'centralnotice-locked' => 'Lukustatud',
	'centralnotice-notices' => 'Teated',
	'centralnotice-notice-exists' => 'Teade on juba olemas.

Ei lisatud',
	'centralnotice-template-exists' => 'Mall on juba olemas.

Ei lisatud.',
	'centralnotice-notice-doesnt-exist' => 'Teadet pole.',
	'centralnotice-template-still-bound' => 'Mall on ikka teatega seotud.
Ei eemaldata',
	'centralnotice-template-body' => 'Malli sisu:',
	'centralnotice-day' => 'Päev',
	'centralnotice-year' => 'Aasta',
	'centralnotice-month' => 'Kuu',
	'centralnotice-hours' => 'Tund',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Projekti keel',
	'centralnotice-project-name' => 'Projekti nimi',
	'centralnotice-start-date' => 'Alguskuupäev',
	'centralnotice-start-time' => 'Alguskellaaeg (UTC)',
	'centralnotice-assigned-templates' => 'Vastavad mallid',
	'centralnotice-no-templates' => 'Malle ei leitud.

Lisa mõni!',
	'centralnotice-no-templates-assigned' => 'Teatega pole vastavusse seatud ühtegi malli.
Lisa mõni!',
	'centralnotice-available-templates' => 'Saadaolevad mallid',
	'centralnotice-template-already-exists' => 'Mall on juba kampaaniaga seotud.
Ei lisata',
	'centralnotice-preview-template' => 'Malli eelvaade',
	'centralnotice-change-lang' => 'Tõlkekeele vahetamine',
	'centralnotice-weights' => 'Raskused',
	'centralnotice-notice-is-locked' => 'Teade on lukustatud.
Ei eemaldata',
	'centralnotice-confirm-delete' => 'Soovid sa tõepoolest seda üksust kustutada.
See toiming pole tagasipööratav.',
	'centralnotice-no-notices-exist' => 'Ühtegi teadet pole.
Lisa allpool üks.',
	'centralnotice-no-templates-translate' => 'Pole ühtegi malli, mille tõlget muuta',
	'centralnotice-number-uses' => 'Kasutusi',
	'centralnotice-edit-template' => 'Malli muutmine',
	'centralnotice-message' => 'Sõnum',
	'centralnotice-message-not-set' => 'Sõnumit ei ole seatud',
	'centralnotice-clone' => 'Kloon',
	'centralnotice-clone-notice' => 'Loo mallist koopia',
	'centralnotice-preview-all-template-translations' => 'Malli kõigi kättesaadavate tõlgete eelvaated',
	'right-centralnotice-admin' => 'Keskuse teateid hallata',
	'right-centralnotice-translate' => 'Tõlkida keskuse teateid',
	'action-centralnotice-admin' => 'keskuse teateid hallata',
	'action-centralnotice-translate' => 'keskuse teateid tõlkida',
	'centralnotice-preferred' => 'Eelistatud',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Kobazulo
 * @author Pi
 * @author Theklan
 */
$messages['eu'] = array(
	'centralnotice-query' => 'Oraingo oharrak aldatu',
	'centralnotice-notice-name' => 'Oharraren izena',
	'centralnotice-end-date' => 'Bukaera data',
	'centralnotice-enabled' => 'Gaitua',
	'centralnotice-modify' => 'Bidali',
	'centralnotice-preview' => 'Aurrikusi',
	'centralnotice-add-new' => 'Mezu orokor berri bat gehitu',
	'centralnotice-remove' => 'Ezabatu',
	'centralnotice-translate-heading' => '$1(r)entzat itzulpena',
	'centralnotice-manage' => 'Ohar nagusia kudeatu',
	'centralnotice-add' => 'Gehitu',
	'centralnotice-add-notice' => 'Gehitu ohar bat',
	'centralnotice-add-template' => 'Txantiloi bat gehitu',
	'centralnotice-show-notices' => 'Oharrak erakutsi',
	'centralnotice-list-templates' => 'Txantiloiak zerrendatu',
	'centralnotice-translations' => 'Itzulpenak',
	'centralnotice-translate-to' => 'Hona itzuli',
	'centralnotice-translate' => 'Itzuli',
	'centralnotice-english' => 'Ingelesa',
	'centralnotice-banner-name' => 'Txantiloi izena',
	'centralnotice-templates' => 'Txantiloiak',
	'centralnotice-weight' => 'Pisua',
	'centralnotice-locked' => 'Babesturik',
	'centralnotice-notice' => 'Kanpaina',
	'centralnotice-notices' => 'Berriak',
	'centralnotice-notice-exists' => 'Berria badago dagoeneko.
Ez da gehituko',
	'centralnotice-template-body' => 'Txantiloi gorputza:',
	'centralnotice-day' => 'Egun',
	'centralnotice-year' => 'Urte',
	'centralnotice-month' => 'Hilabete',
	'centralnotice-hours' => 'Ordu',
	'centralnotice-min' => 'Minutu',
	'centralnotice-project-lang' => 'Proiektuaren hizkuntza',
	'centralnotice-project-name' => 'Proiektuaren izena',
	'centralnotice-start-date' => 'Hasiera data',
	'centralnotice-start-time' => 'Hasiera ordua (UTC)',
	'centralnotice-assigned-templates' => 'Ezarritako txantiloiak',
	'centralnotice-preview-template' => 'Txantiloia aurreikusi',
	'centralnotice-change-lang' => 'Aldatu itzulpen hizkuntza',
	'centralnotice-edit-template' => 'Txantiloia aldatu',
	'centralnotice-message' => 'Mezua',
	'centralnotice-clone-notice' => 'Txantiloia honen kopia sortu',
	'centralnotice-clone-name' => 'Izena',
);

/** Persian (فارسی)
 * @author Bersam
 * @author Ebraminio
 * @author Huji
 * @author Komeil 4life
 * @author Sahim
 * @author Wayiran
 */
$messages['fa'] = array(
	'centralnotice' => 'مدیر اعلان متمرکز',
	'noticetemplate' => 'الگوی اعلان متمرکز',
	'centralnotice-desc' => 'یک اعلان متمرکز می‌افزاید',
	'centralnotice-summary' => 'این ابزار به شما اجازه می‌دهد که اعلانات متمرکز خود را ویرایش کنید.
از آن می‌توان برای افزودن یا برداشتن اعلان‌های قبلی نیز استفاده کرد.',
	'centralnotice-query' => 'تغییر اعلان‌های اخیر',
	'centralnotice-notice-name' => 'نام اعلان',
	'centralnotice-end-date' => 'تاریخ پایان',
	'centralnotice-enabled' => 'فعال',
	'centralnotice-modify' => 'ارسال',
	'centralnotice-save-banner' => 'پرچم ذخیره',
	'centralnotice-preview' => 'پیش‌نمایش',
	'centralnotice-add-new' => 'افزودن یک اعلان متمرکز جدید',
	'centralnotice-remove' => 'حذف',
	'centralnotice-translate-heading' => 'ترجمه از $1',
	'centralnotice-manage' => 'مدیریت اعلان متمرکز',
	'centralnotice-manage-templates' => 'پرچم‌های مدیریت',
	'centralnotice-add' => 'اضافه کردن',
	'centralnotice-add-notice' => 'اضافه کردن خبر',
	'centralnotice-edit-notice' => 'ویرایش کمپین',
	'centralnotice-add-template' => 'اضافه کردن الگو',
	'centralnotice-show-notices' => 'نمایش اعلان‌ها',
	'centralnotice-list-templates' => 'فهرست الگوها',
	'centralnotice-multiple_languages' => 'چندگانه ($1)',
	'centralnotice-translations' => 'ترجمه‌ها',
	'centralnotice-translate-to' => 'ترجمه به',
	'centralnotice-translate' => 'ترجمه کردن',
	'centralnotice-english' => 'انگلیسی',
	'centralnotice-banner-name' => 'نام پرچم:',
	'centralnotice-banner' => 'پرچم',
	'centralnotice-banner-heading' => 'پرچم: $1',
	'centralnotice-templates' => 'الگوها',
	'centralnotice-weight' => 'وزن',
	'centralnotice-locked' => 'قفل شده',
	'centralnotice-notice' => 'کمپین',
	'centralnotice-notice-heading' => 'کمپین: $1',
	'centralnotice-notices' => 'اعلانات',
	'centralnotice-notice-exists' => 'اعلان از قبل وجود دارد.
افزوده نشد',
	'centralnotice-no-language' => 'هیچ زبانی برای کمپین انتخاب نشده است. اضاقه نشده است.',
	'centralnotice-template-exists' => 'الگو از قبل وجود دارد.
افزوده نشد',
	'centralnotice-notice-doesnt-exist' => 'کمپین وجود ندارد.',
	'centralnotice-remove-notice-doesnt-exist' => 'کمپین وجود ندارد.
چیزی برای حذف نیست.',
	'centralnotice-template-still-bound' => 'الگو هنوز در اتصال با یک اعلان است.
حذف نشد',
	'centralnotice-template-body' => 'بدنه قالب:',
	'centralnotice-day' => 'روز',
	'centralnotice-year' => 'سال',
	'centralnotice-month' => 'ماه',
	'centralnotice-hours' => 'ساعت',
	'centralnotice-min' => 'دقیقه',
	'centralnotice-project-lang' => 'زبان پروژه',
	'centralnotice-select' => 'انتخاب: $1',
	'centralnotice-top-ten-languages' => '۱۰ زبان برتر',
	'centralnotice-project-name' => 'نام پروژه',
	'centralnotice-start-date' => 'تاریخ آغاز',
	'centralnotice-start-time' => 'زمان آغاز',
	'centralnotice-assigned-templates' => 'الگوهای متصل شده',
	'centralnotice-no-templates' => 'هیچ الگویی پیدا نشد.
چندتا بسازید.',
	'centralnotice-no-templates-assigned' => 'الگویی به این اعلان متصل نیست.
اضافه کنید!',
	'centralnotice-available-templates' => 'الگوهای موجود',
	'centralnotice-template-already-exists' => 'الگو از قبل به اعلان گره خورده است.
افزوده نشد',
	'centralnotice-preview-template' => 'الگو نمایش',
	'centralnotice-change-lang' => 'تغییر زبان ترجمه',
	'centralnotice-weights' => 'وزن‌ها',
	'centralnotice-notice-is-locked' => 'اعلان قفل شده‌است.
افزوده نشد',
	'centralnotice-overlap' => 'اعلان با زمان یک اعلان دیگر تداخل دارد.
افزوده نشد',
	'centralnotice-invalid-date-range' => 'بازهٔ زمانی غیر مجاز.
به روز نشد',
	'centralnotice-null-string' => 'رشتهٔ خالی را نمی‌توان افزود.
افزوده نشد',
	'centralnotice-confirm-delete' => 'آیا مطمئن هستید که می‌خواهید این گزینه را حذف کنید؟
این عمل غیر قابل بازگشت خواهد بود.',
	'centralnotice-no-notices-exist' => 'اعلانی وجود ندارد.
یکی اضافه کنید',
	'centralnotice-no-templates-translate' => 'الگویی وجود ندارد که ترجمه‌اش را ویرایش کنید',
	'centralnotice-number-uses' => 'کاربردها',
	'centralnotice-settings' => 'تنظیمات',
	'centralnotice-edit-template' => 'الگو ویرایش',
	'centralnotice-edit-template-summary' => 'برای ساختن یک پیغام قابل محلی‌سازی، یک رشتهٔ قابل شکستن را در سه کروشه قرار دهید. مانند {{{jimbo-quote}}}.',
	'centralnotice-message' => 'پیام',
	'centralnotice-message-not-set' => 'پیغام تنظیم نشده',
	'centralnotice-clone' => 'کلون',
	'centralnotice-clone-notice' => 'ایجاد یک کپی از الگو',
	'centralnotice-clone-name' => 'نام:',
	'centralnotice-preview-all-template-translations' => 'پیش‌نمایش تمام ترجمه‌های موجود از الگو',
	'centralnotice-insert' => 'درج: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} دکمه',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} دکمه',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} دکمه',
	'centralnotice-translate-button' => 'راهنمای ترجمهٔ دکمه',
	'centralnotice-donate-button' => 'دکمهٔ کمک مالی',
	'centralnotice-expanded-banner' => 'پرچم گسترده‌شده:',
	'centralnotice-collapsed-banner' => 'پرچم متلاشی‌شده',
	'centralnotice-banner-display' => 'نمایش به:',
	'centralnotice-banner-anonymous' => 'کاربران ناشناس',
	'centralnotice-banner-logged-in' => 'کاربران واردشده',
	'centralnotice-banner-type' => 'نوع پرچم:',
	'centralnotice-banner-hidable' => 'ایستا/نهفتنی',
	'centralnotice-banner-collapsible' => 'متلاشی‌پذیر',
	'right-centralnotice-admin' => 'مدیریت اعلان‌های متمرکز',
	'right-centralnotice-translate' => 'ترجمهٔ اعلان‌های متمرکز',
	'action-centralnotice-admin' => 'مدیریت اعلان‌های متمرکز',
	'action-centralnotice-translate' => 'ترجمهٔ اعلان‌های متمرکز',
	'centralnotice-preferred' => 'ترجیح داده شده',
);

/** Finnish (Suomi)
 * @author Centerlink
 * @author Crt
 * @author Nike
 * @author Tarmo
 */
$messages['fi'] = array(
	'centralnotice' => 'Keskitettyjen tiedotteiden ylläpito',
	'noticetemplate' => 'Keskitetyn tiedotteen malline',
	'centralnotice-desc' => 'Mahdollistaa keskitetyn sivustotiedotteen lisäämisen.',
	'centralnotice-summary' => 'Tämä moduuli antaa sinun muokata tällä hetkellä käytössä olevia keskitettyjä tiedotteita.
Voit myös lisätä tai poistaa vanhoja tiedotteita.',
	'centralnotice-query' => 'Muokkaa nykyisiä tiedotteita',
	'centralnotice-notice-name' => 'Tiedotteen nimi',
	'centralnotice-end-date' => 'Lopetuspäivä',
	'centralnotice-enabled' => 'Käytössä',
	'centralnotice-modify' => 'Lähetä',
	'centralnotice-preview' => 'Esikatselu',
	'centralnotice-add-new' => 'Lisää uusi keskitetty tiedote',
	'centralnotice-remove' => 'Poista',
	'centralnotice-translate-heading' => 'Käännös mallineelle $1',
	'centralnotice-manage' => 'Hallinnoi keskitettyä tiedotetta',
	'centralnotice-add' => 'Lisää',
	'centralnotice-add-notice' => 'Lisää tiedote',
	'centralnotice-add-template' => 'Lisää malline',
	'centralnotice-show-notices' => 'Näytä tiedotteet',
	'centralnotice-list-templates' => 'Luettele mallineet',
	'centralnotice-translations' => 'Käännökset',
	'centralnotice-translate-to' => 'Käännös:',
	'centralnotice-translate' => 'Käännä',
	'centralnotice-english' => 'Englanniksi',
	'centralnotice-banner-name' => 'Mallineen nimi',
	'centralnotice-templates' => 'Mallineet',
	'centralnotice-weight' => 'Paino',
	'centralnotice-locked' => 'Lukittu',
	'centralnotice-notices' => 'Tiedotteet',
	'centralnotice-notice-exists' => 'Tiedote on jo olemassa.
Ei lisätä',
	'centralnotice-template-exists' => 'Malline on jo olemassa.
Ei lisätä',
	'centralnotice-notice-doesnt-exist' => 'Tiedotetta ei ole.
Ei mitään poistettavaa',
	'centralnotice-template-still-bound' => 'Malline on vielä kytkettynä tiedotteeseen.
Ei poisteta',
	'centralnotice-template-body' => 'Mallineen runko:',
	'centralnotice-day' => 'Päivä',
	'centralnotice-year' => 'Vuosi',
	'centralnotice-month' => 'Kuukausi',
	'centralnotice-hours' => 'Tunti',
	'centralnotice-min' => 'Minuutti',
	'centralnotice-project-lang' => 'Projektin kieli',
	'centralnotice-project-name' => 'Projektin nimi',
	'centralnotice-start-date' => 'Alkamispäivä',
	'centralnotice-start-time' => 'Alkamisaika (UTC)',
	'centralnotice-assigned-templates' => 'Kytketyt mallineet',
	'centralnotice-no-templates' => 'Ei löydy mallineita.
Lisää niitä.',
	'centralnotice-no-templates-assigned' => 'Ei tiedotteeseen kytkettyjä mallineita.
Lisää niitä!',
	'centralnotice-available-templates' => 'Käytettävät mallineet',
	'centralnotice-template-already-exists' => 'Malline on jo kytketty kampanjaan.
Ei lisätä',
	'centralnotice-preview-template' => 'Esikatsele malline',
	'centralnotice-change-lang' => 'Vaihda käännöskieli',
	'centralnotice-weights' => 'Painot',
	'centralnotice-notice-is-locked' => 'Tiedote on lukittu.
Ei poisteta',
	'centralnotice-overlap' => 'Tiedote ulottuu ajallisesti toisen tiedotteen päälle.
Ei lisätä',
	'centralnotice-invalid-date-range' => 'Epäkelpo aikaväli.
Ei muuteta',
	'centralnotice-null-string' => 'Tyhjää merkkijonoa ei voida lisätä.
Ei lisätä',
	'centralnotice-confirm-delete' => 'Haluatko varmasti poistaa tämän?
Tätä tekoa ei voi perua.',
	'centralnotice-no-notices-exist' => 'Ei tiedotteita.
Lisää alapuolella sellainen',
	'centralnotice-no-templates-translate' => 'Ei mallineita, joiden käännöksiä voisi muokata',
	'centralnotice-number-uses' => 'Käyttää',
	'centralnotice-edit-template' => 'Muokkaa mallinetta',
	'centralnotice-edit-template-summary' => 'Käännettävän viestin luomiseksi sisällytä tavutettu merkkijono kolmen aaltosulkeen sisään, esim. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Viesti',
	'centralnotice-message-not-set' => 'Viestiä ei ole asetettu',
	'centralnotice-clone' => 'Kahdenna',
	'centralnotice-clone-notice' => 'Tee kopio mallineesta',
	'centralnotice-preview-all-template-translations' => 'Esikatsele kaikkia saatavilla olevia mallineen käännöksiä',
	'right-centralnotice-admin' => 'Hallinnoida keskitettyjä tiedotteita',
	'right-centralnotice-translate' => 'Kääntää keskitettyjä tiedotteita',
	'action-centralnotice-admin' => 'hallinnoida keskitettyjä tiedotteita',
	'action-centralnotice-translate' => 'kääntää keskitettyjä tiedotteita',
	'centralnotice-preferred' => 'Suositeltu',
);

/** French (Français)
 * @author Crochet.david
 * @author Grondin
 * @author IAlex
 * @author Jean-Frédéric
 * @author McDutchie
 * @author Meithal
 * @author Peter17
 * @author PieRRoMaN
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 */
$messages['fr'] = array(
	'centralnotice' => 'Administration des avis centraux',
	'noticetemplate' => 'Administration des avis centraux',
	'bannerallocation' => 'Administration des avis centraux',
	'centralnotice-desc' => 'Ajoute un avis central du site',
	'centralnotice-summary' => 'Ce module vous permet de modifier vos paramètres d’avis centraux.
Il peut aussi être utilisé pour ajouter des avis ou en enlever les plus anciens.',
	'centralnotice-query' => 'Modifier les avis actuels',
	'centralnotice-notice-name' => 'Nom de l’avis',
	'centralnotice-end-date' => 'Date de fin',
	'centralnotice-enabled' => 'Activé',
	'centralnotice-modify' => 'Soumettre',
	'centralnotice-save-banner' => 'Enregistrer la bannière',
	'centralnotice-preview' => 'Prévisualiser',
	'centralnotice-add-new' => 'Ajouter un nouvel avis central',
	'centralnotice-remove' => 'Supprimer',
	'centralnotice-translate-heading' => 'Traduction de l’avis « $1 »',
	'centralnotice-manage' => 'Gérer les avis centraux',
	'centralnotice-manage-templates' => 'Gérer les bannières',
	'centralnotice-add' => 'Ajouter',
	'centralnotice-add-notice' => 'Ajouter un avis',
	'centralnotice-edit-notice' => 'Modifier la campagne',
	'centralnotice-add-template' => 'Ajouter un modèle',
	'centralnotice-show-notices' => 'Afficher les avis',
	'centralnotice-list-templates' => 'Lister les modèles',
	'centralnotice-multiple_languages' => 'multiple ($1)',
	'centralnotice-translations' => 'Traductions',
	'centralnotice-translate-to' => 'Traduire en',
	'centralnotice-translate' => 'Traduire',
	'centralnotice-english' => 'anglais',
	'centralnotice-banner-name' => 'Nom de la bannière :',
	'centralnotice-banner' => 'Bannière',
	'centralnotice-banner-heading' => 'Bannière : $1',
	'centralnotice-templates' => 'Modèles',
	'centralnotice-weight' => 'Poids',
	'centralnotice-locked' => 'Verrouillé',
	'centralnotice-notice' => 'Campagne',
	'centralnotice-notice-heading' => 'Campagne : $1',
	'centralnotice-notices' => 'Avis',
	'centralnotice-notice-exists' => 'L’avis existe déjà.
Il n’a pas été ajouté.',
	'centralnotice-no-language' => 'Aucune langue n’a été sélectionnée pour la campagne. Non ajoutée.',
	'centralnotice-template-exists' => 'Le modèle existe déjà.
Il n’a pas été ajouté.',
	'centralnotice-notice-doesnt-exist' => 'La campagne n’existe pas.',
	'centralnotice-remove-notice-doesnt-exist' => 'La campagne n’existe pas.
Rien à supprimer.',
	'centralnotice-banner-doesnt-exist' => "La bannière n'existe pas.",
	'centralnotice-template-still-bound' => 'Le modèle est encore lié à un avis.
Il n’a pas été supprimé.',
	'centralnotice-template-body' => 'Corps du modèle :',
	'centralnotice-day' => 'Jour',
	'centralnotice-year' => 'Année',
	'centralnotice-month' => 'Mois',
	'centralnotice-hours' => 'Heure',
	'centralnotice-min' => 'Minute',
	'centralnotice-project-lang' => 'Langue du projet',
	'centralnotice-select' => 'Sélectionnez : $1',
	'centralnotice-top-ten-languages' => 'Les 10 langues les plus utilisées',
	'centralnotice-project-name' => 'Nom du projet',
	'centralnotice-start-date' => 'Date de début',
	'centralnotice-start-time' => 'Heure de début (UTC)',
	'centralnotice-end-time' => 'Date de fin (UTC)',
	'centralnotice-assigned-templates' => 'Modèles assignés',
	'centralnotice-no-templates' => 'Aucun modèle trouvé.
Ajoutez-en !',
	'centralnotice-no-templates-assigned' => 'Aucun modèle assigné à l’avis.
Ajoutez-en !',
	'centralnotice-available-templates' => 'Modèles disponibles',
	'centralnotice-template-already-exists' => 'Le modèle est déjà attaché à une campagne.
Il n’a pas été ajouté.',
	'centralnotice-preview-template' => 'Prévisualiser le modèle',
	'centralnotice-change-lang' => 'Modifier la langue de traduction',
	'centralnotice-weights' => 'Poids',
	'centralnotice-notice-is-locked' => 'L’avis est verrouillé.
Il n’a pas été supprimé.',
	'centralnotice-overlap' => 'L’avis couvre tout ou partie de la durée d’un autre avis.
Il n’a pas été ajouté.',
	'centralnotice-invalid-date-range' => 'Intervalle de dates incorrect pour l’avis.
Il n’a pas été mis à jour.',
	'centralnotice-null-string' => 'Impossible d’ajouter un avis vide.
Il n’a pas été ajouté.',
	'centralnotice-confirm-delete' => 'Êtes-vous sûr{{GENDER:||e|}} de vouloir supprimer cet élément ?
Cette action ne pourra pas être récupérée.',
	'centralnotice-no-notices-exist' => 'Aucun avis n’existe.
Ajoutez-en ci-dessous.',
	'centralnotice-no-templates-translate' => 'Il n’y a aucun modèle à traduire',
	'centralnotice-number-uses' => 'Utilisations',
	'centralnotice-settings' => 'Paramètres',
	'centralnotice-edit-template' => 'Modifier le modèle',
	'centralnotice-edit-template-summary' => 'Pour créer un message localisable, entourez une chaîne à trait d’union de trois accolades, par exemple {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Message',
	'centralnotice-message-not-set' => 'Message non renseigné',
	'centralnotice-clone' => 'Dupliquer',
	'centralnotice-clone-notice' => 'Créer une copie du modèle',
	'centralnotice-clone-name' => 'Nom :',
	'centralnotice-preview-all-template-translations' => 'Prévisualiser toutes les traductions disponibles du modèle',
	'centralnotice-insert' => 'Insérer : $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} le bouton',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} le bouton',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} le bouton',
	'centralnotice-translate-button' => "Bouton d'aide à la traduction",
	'centralnotice-donate-button' => 'Bouton de donation',
	'centralnotice-expanded-banner' => 'Bannière étendue',
	'centralnotice-collapsed-banner' => 'Bannière réduite',
	'centralnotice-banner-display' => 'Afficher aux :',
	'centralnotice-banner-anonymous' => 'Utilisateurs anonymes',
	'centralnotice-banner-logged-in' => 'Utilisateurs identifiés',
	'centralnotice-banner-type' => 'Type de bannière :',
	'centralnotice-banner-hidable' => 'Statique/masquable',
	'centralnotice-banner-collapsible' => 'Réductible',
	'centralnotice-geotargeted' => 'Géolocalisé',
	'centralnotice-countries' => 'Pays',
	'centralnotice-allocation' => 'Allocation',
	'right-centralnotice-admin' => 'Gérer les avis centraux',
	'right-centralnotice-translate' => 'Traduire les avis centraux',
	'action-centralnotice-admin' => 'gérer les avis centraux',
	'action-centralnotice-translate' => 'traduire les avis centraux',
	'centralnotice-preferred' => 'Préféré',
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'centralnotice' => 'Administracion des avis centrâls',
	'noticetemplate' => 'Administracion des avis centrâls',
	'centralnotice-desc' => 'Apond un avis centrâl du seto.',
	'centralnotice-summary' => 'Ceti modulo vos pèrmèt de changiér voutros paramètres d’avis centrâls.
Pôt asse-ben étre utilisâ por apondre des avis ou ben nen enlevar los ples vielys.',
	'centralnotice-query' => 'Changiér los avis d’ora',
	'centralnotice-notice-name' => 'Nom de l’avis',
	'centralnotice-end-date' => 'Dâta de fin',
	'centralnotice-enabled' => 'Activâ',
	'centralnotice-modify' => 'Sometre',
	'centralnotice-save-banner' => 'Encartar lo modèlo',
	'centralnotice-preview' => 'Prèvisualisacion',
	'centralnotice-add-new' => 'Apondre un novél avis',
	'centralnotice-remove' => 'Enlevar',
	'centralnotice-translate-heading' => 'Traduccion de « $1 »',
	'centralnotice-manage' => 'Administrar los avis',
	'centralnotice-manage-templates' => 'Administrar los modèlos',
	'centralnotice-add' => 'Apondre',
	'centralnotice-add-notice' => 'Apondre un avis',
	'centralnotice-edit-notice' => 'Changiér l’avis',
	'centralnotice-add-template' => 'Apondre un modèlo',
	'centralnotice-show-notices' => 'Fâre vêre los avis',
	'centralnotice-list-templates' => 'Listar los modèlos',
	'centralnotice-translations' => 'Traduccions',
	'centralnotice-translate-to' => 'Traduire en',
	'centralnotice-translate' => 'Traduire',
	'centralnotice-english' => 'Anglès',
	'centralnotice-banner-name' => 'Nom du modèlo :',
	'centralnotice-banner' => 'Modèlo',
	'centralnotice-banner-heading' => 'Modèlo : $1',
	'centralnotice-templates' => 'Modèlos',
	'centralnotice-weight' => 'Pêds',
	'centralnotice-locked' => 'Vèrrolyê',
	'centralnotice-notice' => 'Avis',
	'centralnotice-notice-heading' => 'Avis : $1',
	'centralnotice-notices' => 'Avis',
	'centralnotice-notice-exists' => 'L’avis ègziste ja.
Il at pas étâ apondu.',
	'centralnotice-template-exists' => 'Lo modèlo ègziste ja.
Il at pas étâ apondu.',
	'centralnotice-notice-doesnt-exist' => 'L’avis ègziste pas.',
	'centralnotice-remove-notice-doesnt-exist' => 'L’avis ègziste pas.
Y at ren a enlevar.',
	'centralnotice-template-still-bound' => 'Lo modèlo est adés liyê a un avis.
Il at pas étâ enlevâ.',
	'centralnotice-template-body' => 'Côrp du modèlo :',
	'centralnotice-day' => 'Jorn',
	'centralnotice-year' => 'An',
	'centralnotice-month' => 'Mês',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Menuta',
	'centralnotice-project-lang' => 'Lengoua du projèt',
	'centralnotice-select' => 'Chouèsésséd : $1',
	'centralnotice-top-ten-languages' => 'Les 10 lengoues les ples utilisâs',
	'centralnotice-project-name' => 'Nom du projèt',
	'centralnotice-start-date' => 'Dâta de comencement',
	'centralnotice-start-time' => 'Hora de comencement (UTC)',
	'centralnotice-assigned-templates' => 'Modèlos assignês',
	'centralnotice-no-templates' => 'Gins de modèlo trovâ.
Apondéd-nen !',
	'centralnotice-no-templates-assigned' => 'Gins de modèlo assignê a l’avis.
Apondéd-nen !',
	'centralnotice-available-templates' => 'Modèlos disponiblos',
	'centralnotice-template-already-exists' => 'Lo modèlo est ja atachiê a un avis.
Il at pas étâ apondu.',
	'centralnotice-preview-template' => 'Prèvisualisacion du modèlo',
	'centralnotice-change-lang' => 'Changiér la lengoua de traduccion',
	'centralnotice-weights' => 'Pêds',
	'centralnotice-notice-is-locked' => 'L’avis est vèrrolyê.
Il at pas étâ enlevâ.',
	'centralnotice-overlap' => 'L’avis côvre tot ou ben partia du temps d’un ôtro avis.
Il at pas étâ apondu.',
	'centralnotice-invalid-date-range' => 'Entèrvalo de dâtes fôx por l’avis.
Il at pas étâ betâ a jorn.',
	'centralnotice-null-string' => 'Empossiblo d’apondre un avis vouedo.
Il at pas étâ apondu.',
	'centralnotice-confirm-delete' => 'Éte-vos de sûr de volêr enlevar ceti èlèment ?
Cela accion porrat pas étre rècupèrâ.',
	'centralnotice-no-notices-exist' => 'Nion avis ègziste.
Apondéd-nen ce-desot.',
	'centralnotice-no-templates-translate' => 'Y at gins de modèlo a traduire.',
	'centralnotice-number-uses' => 'Usâjos',
	'centralnotice-edit-template' => 'Changiér lo modèlo',
	'centralnotice-edit-template-summary' => 'Por fâre un mèssâjo localisâblo, entremâd una chêna a trèt d’union de três colâdes, per ègzemplo {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Mèssâjo',
	'centralnotice-message-not-set' => 'Mèssâjo pas rensègnê',
	'centralnotice-clone' => 'Copiyér',
	'centralnotice-clone-notice' => 'Fâre una copia du modèlo',
	'centralnotice-clone-name' => 'Nom :',
	'centralnotice-preview-all-template-translations' => 'Prèvisualisar totes les traduccions disponibles du modèlo',
	'centralnotice-insert' => 'Entrebetar : $1',
	'centralnotice-hide-button' => 'Boton {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Boton {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Boton {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Boton d’éde a la traduccion',
	'centralnotice-donate-button' => 'Boton de donacion',
	'centralnotice-expanded-banner' => 'Modèlo ètendu',
	'centralnotice-collapsed-banner' => 'Modèlo rèduit',
	'centralnotice-banner-type' => 'Tipo de modèlo :',
	'centralnotice-banner-hidable' => 'Statico / cachâblo',
	'centralnotice-banner-collapsible' => 'Rèductiblo',
	'right-centralnotice-admin' => 'Administrar los avis centrâls',
	'right-centralnotice-translate' => 'Traduire los avis centrâls',
	'action-centralnotice-admin' => 'administrar los avis centrâls',
	'action-centralnotice-translate' => 'traduire los avis centrâls',
	'centralnotice-preferred' => 'Prèferâ',
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'noticetemplate' => 'Teimpléad fógra lárnach',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'centralnotice' => 'Administración do aviso central',
	'noticetemplate' => 'Administración do aviso central',
	'bannerallocation' => 'Administración do aviso central',
	'centralnotice-desc' => 'Engade un aviso central',
	'centralnotice-summary' => 'Este módulo permite editar os parámetros dos seus avisos centrais actuais.
Tamén pode ser usado para engadir ou eliminar avisos vellos.',
	'centralnotice-query' => 'Modificar os avisos actuais',
	'centralnotice-notice-name' => 'Nome do aviso',
	'centralnotice-end-date' => 'Data da fin',
	'centralnotice-enabled' => 'Permitido',
	'centralnotice-modify' => 'Enviar',
	'centralnotice-save-banner' => 'Gardar o cartel',
	'centralnotice-preview' => 'Vista previa',
	'centralnotice-add-new' => 'Engadir un novo aviso central',
	'centralnotice-remove' => 'Eliminar',
	'centralnotice-translate-heading' => 'Traducións de "$1"',
	'centralnotice-manage' => 'Xestionar o aviso central',
	'centralnotice-manage-templates' => 'Xestionar os carteis',
	'centralnotice-add' => 'Engadir',
	'centralnotice-add-notice' => 'Engadir un aviso',
	'centralnotice-edit-notice' => 'Editar o aviso',
	'centralnotice-add-template' => 'Engadir un modelo',
	'centralnotice-show-notices' => 'Amosar os avisos',
	'centralnotice-list-templates' => 'Listar os modelos',
	'centralnotice-multiple_languages' => 'múltiple ($1)',
	'centralnotice-translations' => 'Traducións',
	'centralnotice-translate-to' => 'Traducir ao',
	'centralnotice-translate' => 'Traducir',
	'centralnotice-english' => 'inglés',
	'centralnotice-banner-name' => 'Nome do modelo:',
	'centralnotice-banner' => 'Cartel',
	'centralnotice-banner-heading' => 'Cartel: $1',
	'centralnotice-templates' => 'Modelos',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Bloqueado',
	'centralnotice-notice' => 'Aviso',
	'centralnotice-notice-heading' => 'Aviso: $1',
	'centralnotice-notices' => 'Avisos',
	'centralnotice-notice-exists' => 'O aviso xa existe.
Non se engade',
	'centralnotice-no-language' => 'Non se seleccionou ningunha lingua para o aviso. Non se engade.',
	'centralnotice-template-exists' => 'O modelo xa existe.
Non se engade',
	'centralnotice-notice-doesnt-exist' => 'O aviso non existe.',
	'centralnotice-remove-notice-doesnt-exist' => 'O aviso non existe.
Non hai nada que eliminar.',
	'centralnotice-banner-doesnt-exist' => 'O cartel non existe.',
	'centralnotice-template-still-bound' => 'O modelo aínda está ligado a un aviso.
Non se elimina.',
	'centralnotice-template-body' => 'Corpo do modelo:',
	'centralnotice-day' => 'Día',
	'centralnotice-year' => 'Ano',
	'centralnotice-month' => 'Mes',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Lingua do proxecto',
	'centralnotice-select' => 'Seleccionar: $1',
	'centralnotice-top-ten-languages' => 'As 10 linguas máis empregadas',
	'centralnotice-project-name' => 'Nome do proxecto',
	'centralnotice-start-date' => 'Data de inicio',
	'centralnotice-start-time' => 'Hora de inicio (UTC)',
	'centralnotice-end-time' => 'Hora de fin (UTC)',
	'centralnotice-assigned-templates' => 'Modelos asignados',
	'centralnotice-no-templates' => 'Non se atopou ningún modelo.
Engada algún!',
	'centralnotice-no-templates-assigned' => 'Non hai modelos asignados a avisos.
Engada algún!',
	'centralnotice-available-templates' => 'Modelos dispoñibles',
	'centralnotice-template-already-exists' => 'O modelo xa está atado á campaña.
Non se engade',
	'centralnotice-preview-template' => 'Vista previa do modelo',
	'centralnotice-change-lang' => 'Cambiar a lingua de tradución',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => 'O aviso está bloqueado.
Non se eliminará',
	'centralnotice-overlap' => 'O aviso superponse no tempo no que aparecerá outro.
Non se engade',
	'centralnotice-invalid-date-range' => 'Rango de datos inválido.
Non se actualizará',
	'centralnotice-null-string' => 'Non se pode engadir unha corda.
Non se engade',
	'centralnotice-confirm-delete' => 'Está seguro de que quere eliminar este elemento?
Esta acción non poderá ser recuperada',
	'centralnotice-no-notices-exist' => 'Non existe ningún aviso.
Engada algún embaixo',
	'centralnotice-no-templates-translate' => 'Non hai modelos que traducir',
	'centralnotice-number-uses' => 'Usos',
	'centralnotice-settings' => 'Configuracións',
	'centralnotice-edit-template' => 'Editar o modelo',
	'centralnotice-edit-template-summary' => 'Para crear unha mensaxe que se poida traducir, coloque a cadea entre tres corchetes; por exemplo, {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Mensaxe',
	'centralnotice-message-not-set' => 'Mensaxe sen fixar',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => 'Crear unha copia do modelo',
	'centralnotice-clone-name' => 'Nome:',
	'centralnotice-preview-all-template-translations' => 'Mostrar a vista previa de todas as traducións dispoñibles do modelo',
	'centralnotice-insert' => 'Inserir: $1',
	'centralnotice-hide-button' => 'Botón "{{int:centralnotice-shared-hide}}"',
	'centralnotice-collapse-button' => 'Botón "{{int:centralnotice-shared-collapse}}"',
	'centralnotice-expand-button' => 'Botón "{{int:centralnotice-shared-expand}}"',
	'centralnotice-translate-button' => 'Botón de axudar coas traducións',
	'centralnotice-donate-button' => 'Botón de doar',
	'centralnotice-expanded-banner' => 'Cartel expandido',
	'centralnotice-collapsed-banner' => 'Cartel de contraer',
	'centralnotice-banner-display' => 'Mostrar aos:',
	'centralnotice-banner-anonymous' => 'Usuarios anónimos',
	'centralnotice-banner-logged-in' => 'Usuarios rexistrados',
	'centralnotice-banner-type' => 'Tipo de cartel:',
	'centralnotice-banner-hidable' => 'Estático/Agochable',
	'centralnotice-banner-collapsible' => 'Contraíble',
	'centralnotice-geotargeted' => 'Localizado xeograficamente',
	'centralnotice-countries' => 'Países',
	'centralnotice-allocation' => 'Asignación',
	'centralnotice-view-allocation' => 'Ollar a asignación do modelo',
	'centralnotice-allocation-instructions' => 'Escolla o entorno onde desexa mostrar a asignación do modelo:',
	'centralnotice-project-language' => 'Lingua do proxecto',
	'centralnotice-country' => 'País',
	'centralnotice-no-allocation' => 'Non hai asignación de modelos.',
	'centralnotice-allocation-description' => 'Asignación de modelos de $1.$2 en $3:',
	'centralnotice-percentage' => 'Porcentaxe',
	'right-centralnotice-admin' => 'Xestionar os avisos centrais',
	'right-centralnotice-translate' => 'Traducir os avisos centrais',
	'action-centralnotice-admin' => 'xestionar os avisos centrais',
	'action-centralnotice-translate' => 'traducir os avisos centrais',
	'centralnotice-preferred' => 'Preferido',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'centralnotice-query' => 'Μετατροπία τρεχόντων σημειωμάτων',
	'centralnotice-modify' => 'Ὑποβάλλειν',
	'centralnotice-preview' => 'Προθεωρεῖν',
	'centralnotice-remove' => 'Άφαιρεῖν',
	'centralnotice-manage' => 'Διαχειρίζεσθαι κεντρικὸν σημείωμα',
	'centralnotice-add' => 'Προστιθέναι',
	'centralnotice-translate' => 'Μεταγλωττίζειν',
	'centralnotice-english' => 'Ἀγγλιστί',
	'centralnotice-weight' => 'Βάρος',
	'centralnotice-locked' => 'Κεκλῃσμένη',
	'centralnotice-notices' => 'Ἀναγγελίαι',
	'centralnotice-template-body' => 'Σῶμα προτύπου:',
	'centralnotice-preview-template' => 'Προθεωρεῖν πρότυπον',
	'centralnotice-weights' => 'Βάρη',
	'centralnotice-number-uses' => 'Χρήσεις',
	'centralnotice-message' => 'Μήνυμα',
	'centralnotice-clone' => 'Κλών',
	'centralnotice-preferred' => 'Προκρινομένη',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'centralnotice' => 'Adminischtrierig vu dr zentrale Mäldige',
	'noticetemplate' => 'Verwaltig vu dr zentrale Mäldige',
	'bannerallocation' => 'Verwaltig vu dr zäntrale Mäldig',
	'centralnotice-desc' => "Fiegt e zentrali ''sitenotice'' zue",
	'centralnotice-summary' => 'Die Erwyterig erlaubt d Konfiguration vu zentrale Mäldige.
Si cha au zum Aalege vu neije un dr Leschig vu alte Mäldige brucht wäre.',
	'centralnotice-query' => 'Aktuälli Mäldig ändere',
	'centralnotice-notice-name' => 'Name vu dr Notiz',
	'centralnotice-end-date' => 'Änddatum',
	'centralnotice-enabled' => 'Aktiviert',
	'centralnotice-modify' => 'In Ornig',
	'centralnotice-save-banner' => 'Banner spychere',
	'centralnotice-preview' => 'Vorschau',
	'centralnotice-add-new' => 'Fieg e neiji zentrali Mäldig zue',
	'centralnotice-remove' => 'Useneh',
	'centralnotice-translate-heading' => 'Ibersetzig vu „$1“',
	'centralnotice-manage' => 'Zentrali Mäldige verwalte',
	'centralnotice-manage-templates' => 'Banner verwalte',
	'centralnotice-add' => 'Zuefiege',
	'centralnotice-add-notice' => 'Zuefiege vun ere Mäldig',
	'centralnotice-edit-notice' => 'Kampagne bearbeite',
	'centralnotice-add-template' => 'Zuefiege vun ere Vorlag',
	'centralnotice-show-notices' => 'Zeig Mäldige',
	'centralnotice-list-templates' => 'Vorlage uflischte',
	'centralnotice-multiple_languages' => 'mehreri ($1)',
	'centralnotice-translations' => 'Ibersetzige',
	'centralnotice-translate-to' => 'Ibersetze in',
	'centralnotice-translate' => 'Ibersetze',
	'centralnotice-english' => 'Änglisch',
	'centralnotice-banner-name' => 'Bannername:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Vorlage',
	'centralnotice-weight' => 'Gwicht',
	'centralnotice-locked' => 'Gsperrt',
	'centralnotice-notice' => 'Kampagne',
	'centralnotice-notice-heading' => 'Kampagne: $1',
	'centralnotice-notices' => 'Mäldige',
	'centralnotice-notice-exists' => 'Mäldig git s scho.
Nyt zuegfiegt.',
	'centralnotice-no-language' => 'Fir d Kampagne isch kei Sproch uusgwehlt wore. Si wird wäge däm nit zuegfiegt.',
	'centralnotice-template-exists' => 'Vorlag git s scho.
Nyt zuegfiegt.',
	'centralnotice-notice-doesnt-exist' => 'Kampagne isch nit vorhande.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampagne isch nit vorhande.
Useneh isch nit megli.',
	'centralnotice-banner-doesnt-exist' => 'Des Banner git s nit.',
	'centralnotice-template-still-bound' => 'Vorlag isch no an e Mäldig bunde.
Useneh nit megli.',
	'centralnotice-template-body' => 'Vorlagetäxt:',
	'centralnotice-day' => 'Tag',
	'centralnotice-year' => 'Johr',
	'centralnotice-month' => 'Monet',
	'centralnotice-hours' => 'Stund',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Projäktsproch',
	'centralnotice-select' => 'Uuswehle: $1',
	'centralnotice-top-ten-languages' => 'Top-10-Sproche',
	'centralnotice-project-name' => 'Projäktname',
	'centralnotice-start-date' => 'Startdatum',
	'centralnotice-start-time' => 'Startzyt (UTC)',
	'centralnotice-end-time' => 'Ändzytpunkt (UTC)',
	'centralnotice-assigned-templates' => 'Zuegwiseni Vorlage',
	'centralnotice-no-templates' => 'S sin kei Vorlage im Syschtem vorhande.',
	'centralnotice-no-templates-assigned' => 'S sin kei Vorlage zuegwise zue Mäldige.
Fieg eini zue.',
	'centralnotice-available-templates' => 'Verfiegbari Vorlage',
	'centralnotice-template-already-exists' => 'Vorlage isch scho an d Kampagne bunde.
Nit zuegfiegt.',
	'centralnotice-preview-template' => 'Vorschau-Vorlag',
	'centralnotice-change-lang' => 'Ibersetzigssproch ändere',
	'centralnotice-weights' => 'Gwicht',
	'centralnotice-notice-is-locked' => 'Mäldig isch gsperrt.
Useneh nit megli.',
	'centralnotice-overlap' => 'D Mäldig iberschnyydet si mit em Zytruum vun ere andere Mäldig.
Nit zuegfiegt.',
	'centralnotice-invalid-date-range' => 'Uugiltige Zytruum.
Nit aktualisiert.',
	'centralnotice-null-string' => 'S cha kei Nullstring zuegfiegt wäre.
Nyt zuegfiegt.',
	'centralnotice-confirm-delete' => 'Bisch sicher, ass Du dr Yytrag wit lesche?
D Aktion cha nit ruckgängig gmacht wäre.',
	'centralnotice-no-notices-exist' => 'S sin kei Mäldige vorhande.
Fieg eini zue.',
	'centralnotice-no-templates-translate' => 'S git kei Vorlage, wu Ibersetzige derfir z bearbeite wäre',
	'centralnotice-number-uses' => 'Nutzige',
	'centralnotice-settings' => 'Yystellige',
	'centralnotice-edit-template' => 'Vorlag bearbeite',
	'centralnotice-edit-template-summary' => 'Go ne lokalisierbari Nochricht aalege, lueg ass es e Bindestrich het in drej gschwerifte Chlammere, z. B. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Nochricht',
	'centralnotice-message-not-set' => 'Nochricht nit gsetzt',
	'centralnotice-clone' => 'Klon aalege',
	'centralnotice-clone-notice' => 'Leg e Kopii vu dr Vorlag aa',
	'centralnotice-clone-name' => 'Name:',
	'centralnotice-preview-all-template-translations' => 'Vorschau vu allene verfiegbare Ibersetzige vun ere Vorlag',
	'centralnotice-insert' => 'Yyfiege: $1',
	'centralnotice-hide-button' => 'Chnopf {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Chnopf "{{int:centralnotice-shared-collapse}}"',
	'centralnotice-expand-button' => 'Chnopf {{int:centralnotice-shared-collapse}}',
	'centralnotice-translate-button' => 'Ibersetzigshilfe-Chnopf',
	'centralnotice-donate-button' => 'Spändechnopf',
	'centralnotice-expanded-banner' => 'Uusklappt Banner',
	'centralnotice-collapsed-banner' => 'Yyklappt Banner',
	'centralnotice-banner-display' => 'Aazeige fir:',
	'centralnotice-banner-anonymous' => 'Nit aagmäldeti Benutzer',
	'centralnotice-banner-logged-in' => 'Aagmäldeti Benutzer',
	'centralnotice-banner-type' => 'Bannertyp:',
	'centralnotice-banner-hidable' => 'Statisch/Uusbländbar',
	'centralnotice-banner-collapsible' => 'Yyklappbar',
	'centralnotice-geotargeted' => 'Geo-aavisiert',
	'centralnotice-countries' => 'Länder',
	'centralnotice-allocation' => 'Zuewysig',
	'centralnotice-view-allocation' => 'Aaornig vu dr Banner aaluege',
	'centralnotice-allocation-instructions' => 'D Umgäbig uuswehle, wu d Verteilig vu dr Banner witt aaluege:',
	'centralnotice-project-language' => 'Projäktsproch',
	'centralnotice-country' => 'Land',
	'centralnotice-no-allocation' => 'Kei Banner aagordnet.',
	'centralnotice-allocation-description' => 'Banneraaornig fir $1.$2 in $3:',
	'centralnotice-percentage' => 'Prozäntsatz',
	'right-centralnotice-admin' => 'Zentrali Mäldige verwalte',
	'right-centralnotice-translate' => 'Zentrali Mäldige ibersetze',
	'action-centralnotice-admin' => 'Zentrali Sytenotize verwalte',
	'action-centralnotice-translate' => 'Zentrali Sytenotize ibersetze',
	'centralnotice-preferred' => 'Bevorzugt',
);

/** Hebrew (עברית)
 * @author Rotem Liss
 * @author Rotemliss
 */
$messages['he'] = array(
	'centralnotice' => 'ניהול ההודעה המרכזית',
	'noticetemplate' => 'תבנית ההודעה המרכזית',
	'centralnotice-desc' => 'הוספת הודעה בראש הדף משרת מרכזי',
	'centralnotice-summary' => 'מודול זה מאפשר את עריכת ההודעות המרכזיות המותקנות כעת.
ניתן גם להשתמש בו כדי להוסיף או להסיר הודעות ישנות.',
	'centralnotice-query' => 'שינוי ההודעות הקיימות',
	'centralnotice-notice-name' => 'שם ההודעה',
	'centralnotice-end-date' => 'תאריך סיום',
	'centralnotice-enabled' => 'מופעלת',
	'centralnotice-modify' => 'שליחה',
	'centralnotice-preview' => 'תצוגה מקדימה',
	'centralnotice-add-new' => 'הוספת הודעה מרכזית חדשה',
	'centralnotice-remove' => 'הסרה',
	'centralnotice-translate-heading' => 'תרגום של $1',
	'centralnotice-manage' => 'ניהול ההודעה המרכזית',
	'centralnotice-add' => 'הוספה',
	'centralnotice-add-notice' => 'הוספת הודעה',
	'centralnotice-add-template' => 'הוספת תבנית',
	'centralnotice-show-notices' => 'הצגת הודעות',
	'centralnotice-list-templates' => 'רשימת תבניות',
	'centralnotice-translations' => 'תרגומים',
	'centralnotice-translate-to' => 'תרגום ל',
	'centralnotice-translate' => 'תרגום',
	'centralnotice-english' => 'אנגלית',
	'centralnotice-banner-name' => 'שם ההודעה',
	'centralnotice-templates' => 'תבניות',
	'centralnotice-weight' => 'משקל',
	'centralnotice-locked' => 'נעול',
	'centralnotice-notices' => 'הודעות',
	'centralnotice-notice-exists' => 'ההודעה כבר קיימת.
התוספת לא תבוצע',
	'centralnotice-template-exists' => 'התבנית כבר קיימת.
התוספת לא תבוצע',
	'centralnotice-notice-doesnt-exist' => 'ההודעה אינה קיימת.
אין מה להסיר',
	'centralnotice-template-still-bound' => 'התבנית עדיין מקושרת להודעה.
ההסרה לא תבוצע.',
	'centralnotice-template-body' => 'גוף ההודעה:',
	'centralnotice-day' => 'יום',
	'centralnotice-year' => 'שנה',
	'centralnotice-month' => 'חודש',
	'centralnotice-hours' => 'שעה',
	'centralnotice-min' => 'דקה',
	'centralnotice-project-lang' => 'שפת המיזם',
	'centralnotice-project-name' => 'שם המיזם',
	'centralnotice-start-date' => 'תאריך ההתחלה',
	'centralnotice-start-time' => 'שעת ההתחלה (UTC)',
	'centralnotice-assigned-templates' => 'תבניות מקושרות',
	'centralnotice-no-templates' => 'לא נמצאו תבניות.
הוסיפו כמה!',
	'centralnotice-no-templates-assigned' => 'אין תבניות המקושרות להודעה.
הוסיפו כמה!',
	'centralnotice-available-templates' => 'תבניות זמינות',
	'centralnotice-template-already-exists' => 'התבנית כבר קשורה להודעה.
התוספת לא תבוצע',
	'centralnotice-preview-template' => 'תצוגה מקדימה של התבנית',
	'centralnotice-change-lang' => 'שינוי שפת התרגום',
	'centralnotice-weights' => 'משקלים',
	'centralnotice-notice-is-locked' => 'ההודעה נעולה.
היא לא תוסר',
	'centralnotice-overlap' => 'ההודעה מתנגשת עם הזמן של הודעה אחרת.
התוספת לא תבוצע',
	'centralnotice-invalid-date-range' => 'טווח תאריכים בלתי תקין.
העדכון לא יבוצע',
	'centralnotice-null-string' => 'לא ניתן להוסיף מחרוזת ריקה.
התוספת לא תבוצע',
	'centralnotice-confirm-delete' => 'האם אתם בטוחים שברצונכם למחוק פריט זה?
אין אפשרות לבטל פעולה זו.',
	'centralnotice-no-notices-exist' => 'אין עדיין הודעות.
הוסיפו אחת למטה',
	'centralnotice-no-templates-translate' => 'אין תבניות כדי לערוך את התרגומים שלהן',
	'centralnotice-number-uses' => 'משתמשת ב',
	'centralnotice-edit-template' => 'עריכת התבנית',
	'centralnotice-message' => 'הודעה',
	'centralnotice-message-not-set' => 'לא הוגדרה הודעה',
	'centralnotice-clone' => 'שכפול',
	'centralnotice-clone-notice' => 'יצירת עותק של התבנית',
	'centralnotice-preview-all-template-translations' => 'תצוגה מקדימה של כל התרגומים בתבנית',
	'right-centralnotice-admin' => 'ניהול הודעת מרכזיות',
	'right-centralnotice-translate' => 'תרגום הודעות מרכזיות',
	'action-centralnotice-admin' => 'לנהל הודעות מרכזיות',
	'action-centralnotice-translate' => 'לתרגם הודעות מרכזיות',
	'centralnotice-preferred' => 'מועדפת',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'centralnotice-desc' => 'सेंट्रल साईटनोटिस बढ़ायें',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 * @author Ex13
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'centralnotice' => 'Administracija središnjih obavijesti',
	'noticetemplate' => 'Administracija središnjih obavijesti',
	'bannerallocation' => 'Administracija središnjih obavijesti',
	'centralnotice-desc' => 'Dodaje središnju obavijest za projekt',
	'centralnotice-summary' => 'Ova stranica vam omogućava uređivanje trenutačno postavljenih središnjih obavijesti.
Može biti korištena i za dodavanje ili uklanjanje zastarjelih obavijesti.',
	'centralnotice-query' => 'Promijeni trenutačne obavijesti',
	'centralnotice-notice-name' => 'Naziv obavijesti',
	'centralnotice-end-date' => 'Završni datum',
	'centralnotice-enabled' => 'Omogućeno',
	'centralnotice-modify' => 'Postavi',
	'centralnotice-save-banner' => 'Spremi poruku',
	'centralnotice-preview' => 'Pregledaj',
	'centralnotice-add-new' => 'Dodaj novu središnju obavijest',
	'centralnotice-remove' => 'Ukloni',
	'centralnotice-translate-heading' => 'Prijevod za $1',
	'centralnotice-manage' => 'Uredi središnje obavijesti',
	'centralnotice-manage-templates' => 'Upravljanje porukama',
	'centralnotice-add' => 'Dodaj',
	'centralnotice-add-notice' => 'Dodaj obavijest',
	'centralnotice-edit-notice' => 'Uredi poruku',
	'centralnotice-add-template' => 'Dodaj predložak',
	'centralnotice-show-notices' => 'Pokaži obavijesti',
	'centralnotice-list-templates' => 'Popis predložaka',
	'centralnotice-multiple_languages' => 'više ($1)',
	'centralnotice-translations' => 'Prijevodi',
	'centralnotice-translate-to' => 'Prevedi na',
	'centralnotice-translate' => 'Prevedi',
	'centralnotice-english' => 'Engleski',
	'centralnotice-banner-name' => 'Naziv poruke:',
	'centralnotice-banner' => 'Poruka',
	'centralnotice-banner-heading' => 'Poruka: $1',
	'centralnotice-templates' => 'Predlošci',
	'centralnotice-weight' => 'Težina',
	'centralnotice-locked' => 'Zaključano',
	'centralnotice-notice' => 'Promidžba',
	'centralnotice-notice-heading' => 'Promidžba: $1',
	'centralnotice-notices' => 'Obavijesti',
	'centralnotice-notice-exists' => 'Obavijest već postoji.
Nije dodano',
	'centralnotice-no-language' => 'Nije odabran jezik za kampanju. Ništa se ne dodaje.',
	'centralnotice-template-exists' => 'Predložak već postoji.
Nije dodano',
	'centralnotice-notice-doesnt-exist' => 'Obavijest ne postoji.',
	'centralnotice-remove-notice-doesnt-exist' => 'Obavijest ne postoji.
Ništa se ne uklanja.',
	'centralnotice-banner-doesnt-exist' => 'Obavijest ne postoji.',
	'centralnotice-template-still-bound' => 'Predložak je još uvijek vezan uz obavijest.
Nije uklonjeno.',
	'centralnotice-template-body' => 'Sadržaj predloška:',
	'centralnotice-day' => 'Dan',
	'centralnotice-year' => 'Godina',
	'centralnotice-month' => 'Mjesec',
	'centralnotice-hours' => 'Sat',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Jezik projekta',
	'centralnotice-select' => 'Odaberi: $1',
	'centralnotice-top-ten-languages' => 'Najboljih 10 jezika',
	'centralnotice-project-name' => 'Naziv projekta',
	'centralnotice-start-date' => 'Početni datum',
	'centralnotice-start-time' => 'Početno vrijeme (UTC)',
	'centralnotice-end-time' => 'Vrijeme završetka (UTC)',
	'centralnotice-assigned-templates' => 'Dodijeljeni predlošci',
	'centralnotice-no-templates' => 'Nije pronađen ni jedan predložak.
Dodaj jedan!',
	'centralnotice-no-templates-assigned' => 'Nijedan predložak nije dodijeljen obavijesti.
Dodaj jedan!',
	'centralnotice-available-templates' => 'Dostupni predlošci',
	'centralnotice-template-already-exists' => 'Predložak je već vezan uz kampanju.
Nije dodano',
	'centralnotice-preview-template' => 'Pregledaj predložak',
	'centralnotice-change-lang' => 'Promijeni jezik prijevoda',
	'centralnotice-weights' => 'Težine',
	'centralnotice-notice-is-locked' => 'Obavijest je zaključana.
Nije uklonjeno',
	'centralnotice-overlap' => 'Obavijest se u vremenu preklapa s drugom obaviješću.
Nije dodana',
	'centralnotice-invalid-date-range' => 'Nevaljan opseg datuma.
Nije ažurirano',
	'centralnotice-null-string' => 'Nulta vrijednost se ne može dodati.
Nije dodano',
	'centralnotice-confirm-delete' => 'Jeste li sigurni da želite ovo obrisati?
Ova akcija se neće moći poništiti.',
	'centralnotice-no-notices-exist' => 'Ne postoji ni jedna obavijest.
Dodajte jednu ispod',
	'centralnotice-no-templates-translate' => 'Ne postoje predlošci za prevođenje',
	'centralnotice-number-uses' => 'Koristi',
	'centralnotice-settings' => 'Postavke',
	'centralnotice-edit-template' => 'Uredi predložak',
	'centralnotice-edit-template-summary' => 'Da napravite poruku koja se može prevesti/lokalizirati, stavite pojam u tri zatvorene vitičaste zagrade, npr. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Poruka',
	'centralnotice-message-not-set' => 'Poruka nije postavljena',
	'centralnotice-clone' => 'Kopija',
	'centralnotice-clone-notice' => 'Stvori kopiju predloška',
	'centralnotice-clone-name' => 'Ime:',
	'centralnotice-preview-all-template-translations' => 'Vidi sve dostupne prijevode predloška',
	'centralnotice-insert' => 'Umetni: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} gumb',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} gumb',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} gumb',
	'centralnotice-translate-button' => 'Gumb za pomoć pri prevođenju',
	'centralnotice-donate-button' => 'Gumb za donacije',
	'centralnotice-expanded-banner' => 'Proširena obavijest',
	'centralnotice-collapsed-banner' => 'Smanjena obavijest',
	'centralnotice-banner-display' => 'Prikazati za:',
	'centralnotice-banner-anonymous' => 'Anonimne suradnike',
	'centralnotice-banner-logged-in' => 'Prijavljene suradnike',
	'centralnotice-banner-type' => 'Tip obavijesti:',
	'centralnotice-banner-hidable' => 'Statični/Dinamični',
	'centralnotice-banner-collapsible' => 'Moguće sakriti',
	'centralnotice-geotargeted' => 'Geociljano',
	'centralnotice-countries' => 'Države',
	'centralnotice-allocation' => 'Dodjela',
	'right-centralnotice-admin' => 'Uređivanje središnjih obavijesti',
	'right-centralnotice-translate' => 'Prevođenje središnjih obavijesti',
	'action-centralnotice-admin' => 'uređivanje središnjih obavijesti',
	'action-centralnotice-translate' => 'prevođenje središnjih obavijesti',
	'centralnotice-preferred' => 'Željeno',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'centralnotice' => 'Administrator centralnych powěsćow',
	'noticetemplate' => 'Předłoha za centralnu powěsć',
	'centralnotice-desc' => 'Přidawa centralnu bóčnu zdźělenku',
	'centralnotice-summary' => 'Tutón modul ći dowola, zo by swoje aktualnu konfiguraciju centralnych powěsćow wobdźěłał.
Hodźi so tež za přidaće abo wotstronjenje starych powěsćow wužiwać.',
	'centralnotice-query' => 'Aktualne zdźělenki změnić',
	'centralnotice-notice-name' => 'Mjeno powěsće',
	'centralnotice-end-date' => 'Kónčny datum',
	'centralnotice-enabled' => 'Zmóžnjeny',
	'centralnotice-modify' => 'Wotpósłać',
	'centralnotice-save-banner' => 'Chorhoj składować',
	'centralnotice-preview' => 'Přehlad',
	'centralnotice-add-new' => 'Nowu centralnu zdźělenku přidać',
	'centralnotice-remove' => 'Wotstronić',
	'centralnotice-translate-heading' => 'Přełožk za $1',
	'centralnotice-manage' => 'Centralne powěsće zrjadować',
	'centralnotice-manage-templates' => 'Chorhoje zrjadować',
	'centralnotice-add' => 'Přidać',
	'centralnotice-add-notice' => 'Powěsć přidać',
	'centralnotice-edit-notice' => 'Kampanju wobdźěłać',
	'centralnotice-add-template' => 'Předłohu přidać',
	'centralnotice-show-notices' => 'Zdźělenki pokazać',
	'centralnotice-list-templates' => 'Předłohi nalistować',
	'centralnotice-multiple_languages' => 'wjacore ($1)',
	'centralnotice-translations' => 'Přełožki',
	'centralnotice-translate-to' => 'Přełožić do',
	'centralnotice-translate' => 'Přełožić',
	'centralnotice-english' => 'Jendźelšćina',
	'centralnotice-banner-name' => 'Mjeno předłohi',
	'centralnotice-banner' => 'Chorhoj',
	'centralnotice-banner-heading' => 'Chorhoj: $1',
	'centralnotice-templates' => 'Předłohi',
	'centralnotice-weight' => 'Waha',
	'centralnotice-locked' => 'Zawrjeny',
	'centralnotice-notice' => 'Kampanja',
	'centralnotice-notice-heading' => 'Kampanja: $1',
	'centralnotice-notices' => 'Powěsće',
	'centralnotice-notice-exists' => 'Powěsć hižo eksistuje.
Njepřidawa so.',
	'centralnotice-no-language' => 'Za kampanju njeje so rěč wubrała. Přidawa so ničo.',
	'centralnotice-template-exists' => 'Předłoha hižo eksistuje.
Njepřidawa so.',
	'centralnotice-notice-doesnt-exist' => 'Kampanja njeeksistuje.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanja njeeksistuje.
Njewotstroni so ničo.',
	'centralnotice-template-still-bound' => 'Předłoha je hišće na powěsć zwjazana.
Njewotstronja so.',
	'centralnotice-template-body' => 'Tekst předłohi:',
	'centralnotice-day' => 'Dźeń',
	'centralnotice-year' => 'Lěto',
	'centralnotice-month' => 'Měsac',
	'centralnotice-hours' => 'Hodźina',
	'centralnotice-min' => 'Mjeńšina',
	'centralnotice-project-lang' => 'Projektowa rěč',
	'centralnotice-select' => 'Wubrać: $1',
	'centralnotice-top-ten-languages' => 'Najlěpšich 10 rěčow',
	'centralnotice-project-name' => 'Projektowe mjeno',
	'centralnotice-start-date' => 'Startowy datum',
	'centralnotice-start-time' => 'Startowy čas (UTC)',
	'centralnotice-assigned-templates' => 'Připokazane předłohi',
	'centralnotice-no-templates' => 'Žane předłohi namakane.
Přidaj někajke!',
	'centralnotice-no-templates-assigned' => 'Žane předłohi k powěsći připokazane.
Přidaj někajke!',
	'centralnotice-available-templates' => 'K dispozciji stejace předłohi',
	'centralnotice-template-already-exists' => 'Předłoha je hižo z kampanju zwjazana.
Njepřidawa so',
	'centralnotice-preview-template' => 'Přehlad předłohi',
	'centralnotice-change-lang' => 'Přełožowansku rěč změnić',
	'centralnotice-weights' => 'Wahi',
	'centralnotice-notice-is-locked' => 'Powěsć je zawrjena.
Njewotstronja so',
	'centralnotice-overlap' => 'Zdźělenka padnje do časa druheje zdźělenki.
Njepřidawa so',
	'centralnotice-invalid-date-range' => 'Njepłaćiwa doba.
Njeaktualizuje so',
	'centralnotice-null-string' => 'Njeda so prózdny znamjěskowy slěd přidać.
Njepřidawa so',
	'centralnotice-confirm-delete' => 'Chceš tutón zapisk woprawdźe wušmórnyć?
Tuta akcija njeda so cofnyć.',
	'centralnotice-no-notices-exist' => 'Powěsće njeeksistuja.
Přidaj někajku',
	'centralnotice-no-templates-translate' => 'Njejsu předłohi, za kotrež dyrbjeli so přełožki wobdźěłać',
	'centralnotice-number-uses' => 'Wužića',
	'centralnotice-edit-template' => 'Předłohu wobdźěłać',
	'centralnotice-edit-template-summary' => '↓ Zo by lokalizujomnu stronu wutowrił, wobdaj znamješkowy rjećazk z wjazawku z třomi zhibowanymi spinkami. na př. {{{citat-jimbo}}}.',
	'centralnotice-message' => 'Powěsć',
	'centralnotice-message-not-set' => 'Powěsć njepostajena',
	'centralnotice-clone' => 'Klonować',
	'centralnotice-clone-notice' => 'Kopiju předłohi wutworić',
	'centralnotice-clone-name' => 'Mjeno:',
	'centralnotice-preview-all-template-translations' => 'Přehlad wšěch k dispoziciji stejacych přełožkow předłohi',
	'centralnotice-insert' => 'Zasunyć: $1',
	'centralnotice-hide-button' => 'Tłóčatko {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Tłóčatko {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Tłóčatko {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Tłóčatko přełožowanskeje pomocy',
	'centralnotice-donate-button' => 'Darjenske tłóčatko',
	'centralnotice-expanded-banner' => 'Rozfałdowana chorhoj',
	'centralnotice-collapsed-banner' => 'Fałdowana chorhoj',
	'centralnotice-banner-display' => 'Zwobraznić za:',
	'centralnotice-banner-anonymous' => 'Anonymni wužiwarjo',
	'centralnotice-banner-logged-in' => 'Přizjewjeni wužiwarjo',
	'centralnotice-banner-type' => 'Chorhojowy typ:',
	'centralnotice-banner-hidable' => 'Statiski/Chowajomny',
	'centralnotice-banner-collapsible' => 'Fałdujomny',
	'right-centralnotice-admin' => 'Centralne powěsće zrjadować',
	'right-centralnotice-translate' => 'Centralne powěsće přełožić',
	'action-centralnotice-admin' => 'Centralne powěsće zrjadować',
	'action-centralnotice-translate' => 'centralne powěsće přełožić',
	'centralnotice-preferred' => 'Preferowany',
);

/** Hungarian (Magyar)
 * @author BáthoryPéter
 * @author Dani
 */
$messages['hu'] = array(
	'centralnotice' => 'Központi üzenet adminisztráció',
	'noticetemplate' => 'Központi üzenet-sablon',
	'centralnotice-desc' => 'Központi üzenet megjelenítése',
	'centralnotice-summary' => 'Ez a kiegészítő lehetővé teszi, hogy szerkeszd a jelenleg beállított központi üzeneteket.
Használhatod újak hozzáadására, vagy régiek eltávolítására is.',
	'centralnotice-query' => 'Jelenlegi üzenetek módosítása',
	'centralnotice-notice-name' => 'Üzenet neve',
	'centralnotice-end-date' => 'Befejezés dátuma',
	'centralnotice-enabled' => 'Engedélyezve',
	'centralnotice-modify' => 'Elküldés',
	'centralnotice-preview' => 'Előnézet',
	'centralnotice-add-new' => 'Új központi üzenet hozzáadása',
	'centralnotice-remove' => 'Eltávolítás',
	'centralnotice-translate-heading' => '$1 fordítása',
	'centralnotice-manage' => 'Központi üzenet beállítása',
	'centralnotice-add' => 'Hozzáadás',
	'centralnotice-add-notice' => 'Üzenet hozzáadása',
	'centralnotice-add-template' => 'Sablon hozzáadása',
	'centralnotice-show-notices' => 'Üzenetek megjelenítése',
	'centralnotice-list-templates' => 'Sablonok listázása',
	'centralnotice-translations' => 'Fordítások',
	'centralnotice-translate-to' => 'Lefordítás',
	'centralnotice-translate' => 'Lefordítás',
	'centralnotice-english' => 'angol',
	'centralnotice-banner-name' => 'Sablonnév',
	'centralnotice-templates' => 'Sablonok',
	'centralnotice-weight' => 'Súly',
	'centralnotice-locked' => 'Lezárva',
	'centralnotice-notices' => 'Üzenetek',
	'centralnotice-notice-exists' => 'Az üzenet már létezik.
Nem történt hozzáadás.',
	'centralnotice-template-exists' => 'A sablon már létezik.
Nem történt hozzáadás.',
	'centralnotice-notice-doesnt-exist' => 'Az üzenet nem létezik.',
	'centralnotice-template-still-bound' => 'A sablon nem létezik.
Nincs mit eltávolítani.',
	'centralnotice-template-body' => 'Sablon törzse:',
	'centralnotice-day' => 'Nap',
	'centralnotice-year' => 'Év',
	'centralnotice-month' => 'Hónap',
	'centralnotice-hours' => 'Óra',
	'centralnotice-min' => 'Perc',
	'centralnotice-project-lang' => 'Projekt nyelve',
	'centralnotice-project-name' => 'Projekt neve',
	'centralnotice-start-date' => 'Kezdési dátum',
	'centralnotice-start-time' => 'Kezdési idő (UTC)',
	'centralnotice-assigned-templates' => 'Hozzárendelt sablonok',
	'centralnotice-no-templates' => 'Nem találhatóak sablonok.
Adj hozzá néhányat.',
	'centralnotice-no-templates-assigned' => 'Nincsenek sablonok rendelve az üzenethez.
Adj hozzá néhányat.',
	'centralnotice-available-templates' => 'Elérhető sablonok',
	'centralnotice-template-already-exists' => 'A sablon már hozzá van rendelve a kampányhoz.
Nem történt hozzáadás',
	'centralnotice-preview-template' => 'Sablon előnézete',
	'centralnotice-change-lang' => 'Fordítási nyelv megváltoztatása',
	'centralnotice-weights' => 'Súlyok',
	'centralnotice-notice-is-locked' => 'Az üzenet le van zárva.
Nem történt eltávolítás.',
	'centralnotice-overlap' => 'Az üzenet le van zárva.
Nem történt hozzáadás.',
	'centralnotice-invalid-date-range' => 'Érvénytelen időtartam.
Nem történt módosítás.',
	'centralnotice-null-string' => 'Nem adhatsz hozzá üres szöveget.
Nem történt hozzáadás.',
	'centralnotice-confirm-delete' => 'Biztos, hogy törölni szeretnéd ezt az elemet?
A művelet visszavonhatatlan.',
	'centralnotice-no-notices-exist' => 'Nincsenek üzenetek.
Itt adhatsz hozzá újakat.',
	'centralnotice-no-templates-translate' => 'Nincs egyetlen sablon sem, amit fordítani lehetne',
	'centralnotice-number-uses' => 'Használatok',
	'centralnotice-settings' => 'Beállítások',
	'centralnotice-edit-template' => 'Sablon szerkesztése',
	'centralnotice-message' => 'Üzenet',
	'centralnotice-message-not-set' => 'Üzenet nincs beállítva',
	'centralnotice-clone' => 'Klónozás',
	'centralnotice-clone-notice' => 'Másolat készítése a sablonról',
	'centralnotice-clone-name' => 'Név:',
	'centralnotice-preview-all-template-translations' => 'A sablon összes fordításának megtekintése',
	'centralnotice-banner-anonymous' => 'Névtelen szerkesztők',
	'right-centralnotice-admin' => 'központi üzenetek beállítása',
	'right-centralnotice-translate' => 'központi üzenetek fordítása',
	'action-centralnotice-admin' => 'központi üzenetek beállítása',
	'action-centralnotice-translate' => 'központi üzenetek fordítása',
	'centralnotice-preferred' => 'Előnyben részesített',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'centralnotice' => 'Administration de avisos central',
	'noticetemplate' => 'Administration de avisos central',
	'bannerallocation' => 'Administration de avisos central',
	'centralnotice-desc' => 'Adde un aviso de sito central',
	'centralnotice-summary' => 'Iste modulo permitte modificar le avisos central actualmente configurate.
Illo pote tamben esser usate pro adder o remover avisos ancian.',
	'centralnotice-query' => 'Modificar campanias actual',
	'centralnotice-notice-name' => 'Nomine del campania',
	'centralnotice-end-date' => 'Data de fin',
	'centralnotice-enabled' => 'Active',
	'centralnotice-modify' => 'Submitter',
	'centralnotice-save-banner' => 'Salveguardar bandiera',
	'centralnotice-preview' => 'Previsualisar',
	'centralnotice-add-new' => 'Adder un nove campania',
	'centralnotice-remove' => 'Remover',
	'centralnotice-translate-heading' => 'Traduction de $1',
	'centralnotice-manage' => 'Gerer campanias',
	'centralnotice-manage-templates' => 'Gerer bandieras',
	'centralnotice-add' => 'Adder',
	'centralnotice-add-notice' => 'Adder un campania',
	'centralnotice-edit-notice' => 'Modificar campania',
	'centralnotice-add-template' => 'Adder un bandiera',
	'centralnotice-show-notices' => 'Monstrar campanias',
	'centralnotice-list-templates' => 'Listar bandieras',
	'centralnotice-multiple_languages' => 'multiple ($1)',
	'centralnotice-translations' => 'Traductiones',
	'centralnotice-translate-to' => 'Traducer in',
	'centralnotice-translate' => 'Traducer',
	'centralnotice-english' => 'Anglese',
	'centralnotice-banner-name' => 'Nomine del bandiera:',
	'centralnotice-banner' => 'Bandiera',
	'centralnotice-banner-heading' => 'Bandiera: $1',
	'centralnotice-templates' => 'Bandieras',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Serrate',
	'centralnotice-notice' => 'Campania',
	'centralnotice-notice-heading' => 'Campania: $1',
	'centralnotice-notices' => 'Campanias',
	'centralnotice-notice-exists' => 'Le campania ja existe.
Non es addite.',
	'centralnotice-no-language' => 'Nulle lingua esseva seligite pro le campania. Non es addite.',
	'centralnotice-template-exists' => 'Le bandiera ja existe.
Non es addite.',
	'centralnotice-notice-doesnt-exist' => 'Campania non existe.',
	'centralnotice-remove-notice-doesnt-exist' => 'Campania non existe.
Nihil a remover.',
	'centralnotice-banner-doesnt-exist' => 'Bandiera non existe.',
	'centralnotice-template-still-bound' => 'Le bandiera es ancora ligate a un campania.
Non es removite.',
	'centralnotice-template-body' => 'Texto del bandiera:',
	'centralnotice-day' => 'Die',
	'centralnotice-year' => 'Anno',
	'centralnotice-month' => 'Mense',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Lingua del projecto',
	'centralnotice-select' => 'Seliger: $1',
	'centralnotice-top-ten-languages' => 'Le prime 10 linguas',
	'centralnotice-project-name' => 'Nomine del projecto',
	'centralnotice-start-date' => 'Data de initio',
	'centralnotice-start-time' => 'Hora de initio (UTC)',
	'centralnotice-end-time' => 'Hora de fin (UTC)',
	'centralnotice-assigned-templates' => 'Bandieras assignate',
	'centralnotice-no-templates' => 'Nulle bandiera trovate.
Adde alcunes!',
	'centralnotice-no-templates-assigned' => 'Nulle bandiera assignate al campania.
Adde alcunes!',
	'centralnotice-available-templates' => 'Bandieras disponibile',
	'centralnotice-template-already-exists' => 'Le bandiera es ja ligate a un campania.
Non es addite.',
	'centralnotice-preview-template' => 'Previsualisar bandiera',
	'centralnotice-change-lang' => 'Cambiar lingua de traduction',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => 'Le campania es serrate.
Non es removite.',
	'centralnotice-overlap' => 'Le campania coincide con le tempore de un altere campania.
Non es addite.',
	'centralnotice-invalid-date-range' => 'Intervallo incorrecte de datas.
Non es actualisate',
	'centralnotice-null-string' => 'Non pote adder un catena de characteres vacue.
Non es addite',
	'centralnotice-confirm-delete' => 'Es tu secur que tu vole deler iste elemento?
Iste action essera irrecuperabile.',
	'centralnotice-no-notices-exist' => 'Nulle campania existe.
Adde un hic infra.',
	'centralnotice-no-templates-translate' => 'Non existe bandieras pro le quales modificar traductiones.',
	'centralnotice-number-uses' => 'Usos',
	'centralnotice-settings' => 'Configurationes',
	'centralnotice-edit-template' => 'Modificar bandiera',
	'centralnotice-edit-template-summary' => 'Pro crear un message localisabile, include un texto con tracto de union in tres accolladas, p.ex. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Message',
	'centralnotice-message-not-set' => 'Message non definite',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => 'Crear un copia del bandiera',
	'centralnotice-clone-name' => 'Nomine:',
	'centralnotice-preview-all-template-translations' => 'Previsualiar tote le traductiones disponibile del bandiera',
	'centralnotice-insert' => 'Inserer: $1',
	'centralnotice-hide-button' => 'Button "{{int:centralnotice-shared-hide}}"',
	'centralnotice-collapse-button' => 'Button "{{int:centralnotice-shared-collapse}}"',
	'centralnotice-expand-button' => 'Button "{{int:centralnotice-shared-expand}}"',
	'centralnotice-translate-button' => 'Button "Adjuta de traduction"',
	'centralnotice-donate-button' => 'Button "Donar"',
	'centralnotice-expanded-banner' => 'Bandiera expandite',
	'centralnotice-collapsed-banner' => 'Bandiera plicate',
	'centralnotice-banner-display' => 'Presentar a:',
	'centralnotice-banner-anonymous' => 'Usatores anonyme',
	'centralnotice-banner-logged-in' => 'Usatores authenticate',
	'centralnotice-banner-type' => 'Typo de bandiera:',
	'centralnotice-banner-hidable' => 'Static/Celabile',
	'centralnotice-banner-collapsible' => 'Plicabile',
	'centralnotice-geotargeted' => 'Localisation geographic',
	'centralnotice-countries' => 'Paises',
	'centralnotice-allocation' => 'Allocation',
	'centralnotice-view-allocation' => 'Vider allocation de bandieras',
	'centralnotice-allocation-instructions' => 'Selige le ambiente pro le qual tu vole vider le allocation de bandieras:',
	'centralnotice-project-language' => 'Lingua del projecto',
	'centralnotice-country' => 'Pais',
	'centralnotice-no-allocation' => 'Nulle bandiera allocate.',
	'centralnotice-allocation-description' => 'Allocation de bandieras pro $1.$2 in $3:',
	'centralnotice-percentage' => 'Percentage',
	'right-centralnotice-admin' => 'Gerer avisos central',
	'right-centralnotice-translate' => 'Traducer avisos central',
	'action-centralnotice-admin' => 'gerer avisos central',
	'action-centralnotice-translate' => 'traducer avisos central',
	'centralnotice-preferred' => 'Preferite',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Farras
 * @author Irwangatot
 * @author IvanLanin
 * @author Rex
 */
$messages['id'] = array(
	'centralnotice' => 'Administrasi pengumuman sentral',
	'noticetemplate' => 'Templat pengumuman sentral',
	'centralnotice-desc' => 'Menambahkan suatu pengumuman sentral',
	'centralnotice-summary' => 'Dengan modul ini, Anda dapat menyunting pengaturan pengumuman sentral saat ini.
Modul ini juga dapat digunakan untuk menambahkan atau menghapus pengumuman lama.',
	'centralnotice-query' => 'Ubah pengumuman saat ini',
	'centralnotice-notice-name' => 'Judul pengumuman',
	'centralnotice-end-date' => 'Tanggal selesai',
	'centralnotice-enabled' => 'Diaktifkan',
	'centralnotice-modify' => 'Kirim',
	'centralnotice-save-banner' => 'Panji simpan',
	'centralnotice-preview' => 'Pratayang',
	'centralnotice-add-new' => 'Buat pengumuman sentral baru',
	'centralnotice-remove' => 'Hapus',
	'centralnotice-translate-heading' => 'Terjemahan untuk $1',
	'centralnotice-manage' => 'Pengaturan pengumuman sentral',
	'centralnotice-manage-templates' => 'Kelola spanduk',
	'centralnotice-add' => 'Tambahkan',
	'centralnotice-add-notice' => 'Tambah pengumuman',
	'centralnotice-edit-notice' => 'Sunting kampanye',
	'centralnotice-add-template' => 'Tambah templat',
	'centralnotice-show-notices' => 'Tampilkan pengumuman',
	'centralnotice-list-templates' => 'Daftar templat',
	'centralnotice-multiple_languages' => 'ganda ($1)',
	'centralnotice-translations' => 'Terjemahan',
	'centralnotice-translate-to' => 'Terjemahkan ke',
	'centralnotice-translate' => 'Terjemahkan',
	'centralnotice-english' => 'Bahasa Inggris',
	'centralnotice-banner-name' => 'Nama templat:',
	'centralnotice-banner' => 'Spanduk',
	'centralnotice-banner-heading' => 'Panji: $1',
	'centralnotice-templates' => 'Templat',
	'centralnotice-weight' => 'Bobot',
	'centralnotice-locked' => 'Terkunci',
	'centralnotice-notice' => 'Kampanye',
	'centralnotice-notice-heading' => 'Kampanye: $1',
	'centralnotice-notices' => 'Pengumuman',
	'centralnotice-notice-exists' => 'Pengumuman sudah ada.
Batal menambahkan',
	'centralnotice-no-language' => 'Tidak ada bahasa yang dipilih untuk kampanye. Tidak menambahkan.',
	'centralnotice-template-exists' => 'Templat sudah ada.
Batal menambahkan',
	'centralnotice-notice-doesnt-exist' => 'Kampanye tidak ditemukan.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanye tidak ditemukan.
Tidak ada yang perlu dihapus.',
	'centralnotice-template-still-bound' => 'Templat masih digunakan dalam suatu pengumuman.
Batal menghapus',
	'centralnotice-template-body' => 'Isi templat:',
	'centralnotice-day' => 'Hari',
	'centralnotice-year' => 'Tahun',
	'centralnotice-month' => 'Bulan',
	'centralnotice-hours' => 'Jam',
	'centralnotice-min' => 'Menit',
	'centralnotice-project-lang' => 'Bahasa proyek',
	'centralnotice-select' => 'Pilih: $1',
	'centralnotice-top-ten-languages' => '10 bahasa teratas',
	'centralnotice-project-name' => 'Nama proyek',
	'centralnotice-start-date' => 'Tanggal mulai',
	'centralnotice-start-time' => 'Waktu mulai (UTC)',
	'centralnotice-assigned-templates' => 'Tempat yang digunakan',
	'centralnotice-no-templates' => 'Tidak ada templat yang ditemukan.
Tambahkan!',
	'centralnotice-no-templates-assigned' => 'Tidak ada templat yang digunakan dalam pengumuman.
Tambahkan!',
	'centralnotice-available-templates' => 'Templat yang tersedia',
	'centralnotice-template-already-exists' => 'Templat sudah digunakan dalam kampanye.
Batal menambahkan',
	'centralnotice-preview-template' => 'Lihat pratayang templat',
	'centralnotice-change-lang' => 'Ubah bahasa terjemahan',
	'centralnotice-weights' => 'Bobot',
	'centralnotice-notice-is-locked' => 'Pengumuman terkunci.
Batal menghapus',
	'centralnotice-overlap' => 'Pengumuman bertumpang tindih dengan waktu pengumuman lainnya.
Batal menambahkan',
	'centralnotice-invalid-date-range' => 'Jangka waktu tidak valid.
Batal memperbarui',
	'centralnotice-null-string' => 'Tidak dapat menambahkan string kosong.
Batal menambahkan',
	'centralnotice-confirm-delete' => 'Apakah Anda yakin untuk menghapus?
Tindakan ini tidak dapat dibatalkan.',
	'centralnotice-no-notices-exist' => 'Tidak ada pengumuman ditemukan.
Tambahkan di bawah ini.',
	'centralnotice-no-templates-translate' => 'Tidak ada templat yang dapat diterjemahkan',
	'centralnotice-number-uses' => 'Menggunakan',
	'centralnotice-settings' => 'Pengaturan',
	'centralnotice-edit-template' => 'Sunting templat',
	'centralnotice-edit-template-summary' => 'Untuk membuat dilokalisasi pesan, sertakan string ditulis dengan tanda penghubung di tiga kurung, misalnya {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Pesan',
	'centralnotice-message-not-set' => 'Pengaturan pesan tidak dilakukan',
	'centralnotice-clone' => 'Duplikat',
	'centralnotice-clone-notice' => 'Buat duplikat templat ini',
	'centralnotice-clone-name' => 'Nama:',
	'centralnotice-preview-all-template-translations' => 'Lihat pratayang semua terjemahan templat yang tersedia',
	'centralnotice-insert' => 'Sisipkan: $1',
	'centralnotice-hide-button' => 'Tombol {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Tombol {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Tombol {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Tombol bantu terjemahkan',
	'centralnotice-donate-button' => 'Tombol sumbangan',
	'centralnotice-expanded-banner' => 'Panji perluas',
	'centralnotice-collapsed-banner' => 'Panji buka',
	'centralnotice-banner-display' => 'Tampilkan ke:',
	'centralnotice-banner-anonymous' => 'Pengguna anonim',
	'centralnotice-banner-logged-in' => 'Pengguna telah masuk log',
	'centralnotice-banner-type' => 'Jenis panji:',
	'centralnotice-banner-hidable' => 'Statis/Dapat disembunyikan',
	'centralnotice-banner-collapsible' => 'Dapat dibuka',
	'right-centralnotice-admin' => 'Mengatur pengumuman sentral',
	'right-centralnotice-translate' => 'Menerjemahkan pengumuman sentral',
	'action-centralnotice-admin' => 'mengatur pengumuman sentral',
	'action-centralnotice-translate' => 'menerjemahkan pengumuman sentral',
	'centralnotice-preferred' => 'Preferensi',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'centralnotice-modify' => 'Dànyé',
	'centralnotice-preview' => 'Lètú',
	'centralnotice-remove' => 'Wéfù',
	'centralnotice-add' => 'Tinyé',
	'centralnotice-translations' => 'Nkuwaria na asụsụ ozor',
	'centralnotice-translate-to' => 'Kuwaria na',
	'centralnotice-translate' => 'Kuwaria na asụsụ ozor',
	'centralnotice-english' => 'Inglish',
	'centralnotice-weight' => 'Ọ zá',
	'centralnotice-locked' => 'Gbàchịrị',
	'centralnotice-day' => 'Úbọchi',
	'centralnotice-year' => 'Afọr',
	'centralnotice-month' => 'Önwa',
	'centralnotice-hours' => 'Àmànì',
	'centralnotice-project-lang' => 'Asụsụ orürü',
	'centralnotice-project-name' => 'Áhà orürü',
	'centralnotice-start-date' => 'Bìdó ubochi',
	'centralnotice-message' => 'Ozi',
	'centralnotice-clone-name' => 'Áhà',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'centralnotice-modify' => 'Sendez',
	'centralnotice-add' => 'Adjuntar',
	'centralnotice-add-notice' => 'Adjuntar avizo',
	'centralnotice-add-template' => 'Adjuntar shablono',
	'centralnotice-english' => 'Angliana',
	'centralnotice-templates' => 'Shabloni',
	'centralnotice-weight' => 'Pezo',
	'centralnotice-notices' => 'Avizi',
	'centralnotice-day' => 'Dio',
	'centralnotice-year' => 'Yaro',
	'centralnotice-month' => 'Monato',
	'centralnotice-hours' => 'Horo',
	'centralnotice-min' => 'Minuto',
	'centralnotice-number-uses' => 'Uzadi',
);

/** Icelandic (Íslenska)
 * @author Spacebirdy
 */
$messages['is'] = array(
	'centralnotice-modify' => 'Staðfesta',
);

/** Italian (Italiano)
 * @author BrokenArrow
 * @author Darth Kule
 * @author Melos
 * @author Pietrodn
 */
$messages['it'] = array(
	'centralnotice' => 'Gestione avviso centralizzato',
	'noticetemplate' => 'Template avvisi centralizzati',
	'centralnotice-desc' => 'Aggiunge un avviso centralizzato a inizio pagina (sitenotice)',
	'centralnotice-summary' => 'Questo modulo permette di modificare gli avvisi centralizzati. Puoi essere inoltre usato per aggiungere o rimuovere vecchi avvisi.',
	'centralnotice-query' => 'Modifica avvisi attuali',
	'centralnotice-notice-name' => "Nome dell'avviso",
	'centralnotice-end-date' => 'Data di fine',
	'centralnotice-enabled' => 'Attivato',
	'centralnotice-modify' => 'Invia',
	'centralnotice-preview' => 'Anteprima',
	'centralnotice-add-new' => 'Aggiungi un nuovo avviso centralizzato',
	'centralnotice-remove' => 'Rimuovi',
	'centralnotice-translate-heading' => 'Traduzione di $1',
	'centralnotice-manage' => 'Gestione avvisi centralizzati',
	'centralnotice-add' => 'Aggiungi',
	'centralnotice-add-notice' => 'Aggiungi un avviso',
	'centralnotice-add-template' => 'Aggiungi un template',
	'centralnotice-show-notices' => 'Mostra avvisi',
	'centralnotice-list-templates' => 'Elenca template',
	'centralnotice-translations' => 'Traduzioni',
	'centralnotice-translate-to' => 'Traduci in',
	'centralnotice-translate' => 'Traduci',
	'centralnotice-english' => 'Inglese',
	'centralnotice-banner-name' => 'Nome template',
	'centralnotice-templates' => 'Template',
	'centralnotice-weight' => 'Dimensione',
	'centralnotice-locked' => 'Bloccato',
	'centralnotice-notices' => 'Avvisi',
	'centralnotice-notice-exists' => "Avviso già esistente. L'avviso non è stato aggiunto",
	'centralnotice-template-exists' => 'Template già esistente. Il template non è stato aggiunto',
	'centralnotice-notice-doesnt-exist' => 'Avviso non esistente. Niente da rimuovere',
	'centralnotice-template-still-bound' => 'Il template è ancora collegato a un avviso. Il template non è stato rimosso',
	'centralnotice-template-body' => 'Corpo del template:',
	'centralnotice-day' => 'Giorno',
	'centralnotice-year' => 'Anno',
	'centralnotice-month' => 'Mese',
	'centralnotice-hours' => 'Ora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Lingua progetto',
	'centralnotice-project-name' => 'Nome progetto',
	'centralnotice-start-date' => 'Data di inizio',
	'centralnotice-start-time' => 'Ora di inizio (UTC)',
	'centralnotice-assigned-templates' => 'Template assegnati',
	'centralnotice-no-templates' => 'Nessun template trovato. Aggiungine qualcuno!',
	'centralnotice-no-templates-assigned' => "Nessun template è assegnato all'avviso. Aggiungine qualcuno!",
	'centralnotice-available-templates' => 'Template disponibili',
	'centralnotice-template-already-exists' => 'Il template è già collegato alla campagna. Il template non è stato aggiunto',
	'centralnotice-preview-template' => 'Anteprima template',
	'centralnotice-change-lang' => 'Cambia lingua della traduzione',
	'centralnotice-weights' => 'Dimensioni',
	'centralnotice-notice-is-locked' => "L'avviso è bloccato. Avviso non rimosso",
	'centralnotice-overlap' => "L'avviso si sovrappone con il tempo di un altro avviso. Non aggiunto",
	'centralnotice-invalid-date-range' => 'Intervallo di date non valido.
Non aggiorno',
	'centralnotice-null-string' => 'Impossibile aggiungere una stringa nulla.
Non aggiorno',
	'centralnotice-confirm-delete' => "Sei veramente sicuro di voler cancellare questo elemento? L'azione non è reversibile.",
	'centralnotice-no-notices-exist' => 'Non esiste alcun avviso. Aggiungine uno di seguito',
	'centralnotice-no-templates-translate' => 'Non ci sono template per cui modificare le traduzioni',
	'centralnotice-number-uses' => 'Usi',
	'centralnotice-edit-template' => 'Modifica template',
	'centralnotice-message' => 'Messaggio',
	'centralnotice-message-not-set' => 'Messaggio non impostato',
	'centralnotice-clone' => 'Clona',
	'centralnotice-clone-notice' => 'Crea una copia del template',
	'centralnotice-preview-all-template-translations' => 'Mostra tutte le traduzioni disponibili del template',
	'right-centralnotice-admin' => 'Gestisce gli avvisi centralizzati',
	'right-centralnotice-translate' => 'Traduce avvisi centralizzati',
	'action-centralnotice-admin' => 'gestire gli avvisi centralizzati',
	'action-centralnotice-translate' => 'tradurre avvisi centralizzati',
	'centralnotice-preferred' => 'Preferito',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author JtFuruhata
 * @author Klutzy
 * @author 青子守歌
 */
$messages['ja'] = array(
	'centralnotice' => '中央管理通知の管理',
	'noticetemplate' => '中央管理通知の管理',
	'bannerallocation' => '中央管理通知の管理',
	'centralnotice-desc' => '中央管理のサイト通知を追加する',
	'centralnotice-summary' => 'このモジュールにより現在設定されている中央管理通知を編集することができます。通知の追加や除去も行えます。',
	'centralnotice-query' => '現在の告知を変更する',
	'centralnotice-notice-name' => '告知名',
	'centralnotice-end-date' => '終了日',
	'centralnotice-enabled' => '有効',
	'centralnotice-modify' => '投稿',
	'centralnotice-save-banner' => 'テンプレートを保存',
	'centralnotice-preview' => 'プレビュー',
	'centralnotice-add-new' => '新しい告知を追加する',
	'centralnotice-remove' => '除去',
	'centralnotice-translate-heading' => '$1の翻訳',
	'centralnotice-manage' => '告知の管理',
	'centralnotice-manage-templates' => 'テンプレートの管理',
	'centralnotice-add' => '追加',
	'centralnotice-add-notice' => '告知を追加',
	'centralnotice-edit-notice' => '通知を編集',
	'centralnotice-add-template' => 'テンプレートを追加',
	'centralnotice-show-notices' => '告知を表示',
	'centralnotice-list-templates' => 'テンプレートを一覧表示',
	'centralnotice-multiple_languages' => '複数（$1）',
	'centralnotice-translations' => '翻訳',
	'centralnotice-translate-to' => '翻訳先',
	'centralnotice-translate' => '翻訳',
	'centralnotice-english' => '英語',
	'centralnotice-banner-name' => 'テンプレート名：',
	'centralnotice-banner' => 'テンプレート',
	'centralnotice-banner-heading' => 'テンプレート：$1',
	'centralnotice-templates' => 'テンプレート',
	'centralnotice-weight' => '重さ',
	'centralnotice-locked' => 'ロック中',
	'centralnotice-notice' => '告知',
	'centralnotice-notice-heading' => '告知：$1',
	'centralnotice-notices' => '告知',
	'centralnotice-notice-exists' => '告知がすでに存在します。
追加できませんでした。',
	'centralnotice-no-language' => '告知する言語が指定されませんでした。追加できませんでした。',
	'centralnotice-template-exists' => 'テンプレートがすでに存在します。追加できませんでした。',
	'centralnotice-notice-doesnt-exist' => '告知が存在しません。',
	'centralnotice-remove-notice-doesnt-exist' => '告知は存在しません。
除去できませんでした。',
	'centralnotice-banner-doesnt-exist' => 'テンプレートは存在しません。',
	'centralnotice-template-still-bound' => 'そのテンプレートはまだ告知に使用されています。
除去できませんでした。',
	'centralnotice-template-body' => 'テンプレート本文：',
	'centralnotice-day' => '日',
	'centralnotice-year' => '年',
	'centralnotice-month' => '月',
	'centralnotice-hours' => '時',
	'centralnotice-min' => '分',
	'centralnotice-project-lang' => 'プロジェクト言語',
	'centralnotice-select' => '選択：$1',
	'centralnotice-top-ten-languages' => '上位10言語',
	'centralnotice-project-name' => 'プロジェクト名',
	'centralnotice-start-date' => '開始日',
	'centralnotice-start-time' => '開始時間 (UTC)',
	'centralnotice-end-time' => '終了時間(UTC)',
	'centralnotice-assigned-templates' => '使用テンプレート',
	'centralnotice-no-templates' => 'テンプレートがみつかりませんでした。なにか追加してください！',
	'centralnotice-no-templates-assigned' => '告知にテンプレートが使われていません。
なにか追加してください！',
	'centralnotice-available-templates' => '利用可能なテンプレート',
	'centralnotice-template-already-exists' => 'テンプレートは既に告知に関連付けられています。
追加できません。',
	'centralnotice-preview-template' => 'テンプレートをプレビューする',
	'centralnotice-change-lang' => '翻訳言語を変更する',
	'centralnotice-weights' => '重要性',
	'centralnotice-notice-is-locked' => '告知がロックされています。除去できません。',
	'centralnotice-overlap' => '他の告知と通知期間が重複しています。
追加できません。',
	'centralnotice-invalid-date-range' => '通知期間の指定が無効です。
更新できません。',
	'centralnotice-null-string' => '空の行は追加できません。
追加できませんでした。',
	'centralnotice-confirm-delete' => 'この項目を削除してよいですか？
この操作は取り消せません。',
	'centralnotice-no-notices-exist' => '告知はひとつもありません。
以下に追加してください。',
	'centralnotice-no-templates-translate' => '翻訳すべきテンプレートはありません。',
	'centralnotice-number-uses' => '使用目的',
	'centralnotice-settings' => '設定',
	'centralnotice-edit-template' => 'テンプレートを編集する',
	'centralnotice-edit-template-summary' => '地域化可能なメッセージを作成するには、ハイフンで結合した文字列を3つの波括弧で囲います。例: {{{jimbo-quote}}}。',
	'centralnotice-message' => 'メッセージ',
	'centralnotice-message-not-set' => 'メッセージ未指定',
	'centralnotice-clone' => '複製',
	'centralnotice-clone-notice' => 'テンプレートの複製を作成する',
	'centralnotice-clone-name' => '名前：',
	'centralnotice-preview-all-template-translations' => 'テンプレートのすべての利用可能な翻訳をプレビューする',
	'centralnotice-insert' => '挿入：$1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}}ボタン',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}}ボタン',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}}ボタン',
	'centralnotice-translate-button' => '翻訳協力ボタン',
	'centralnotice-donate-button' => '寄付ボタン',
	'centralnotice-expanded-banner' => '展開されたテンプレート',
	'centralnotice-collapsed-banner' => '折りたたまれたテンプレート',
	'centralnotice-banner-display' => '表示：',
	'centralnotice-banner-anonymous' => '匿名利用者',
	'centralnotice-banner-logged-in' => 'ログイン利用者',
	'centralnotice-banner-type' => 'テンプレートの種類：',
	'centralnotice-banner-hidable' => '固定/非表示可',
	'centralnotice-banner-collapsible' => '折りたたみ',
	'centralnotice-geotargeted' => '対象地域',
	'centralnotice-countries' => '国',
	'centralnotice-allocation' => '割り当て',
	'centralnotice-view-allocation' => 'テンプレートの割り当てを表示',
	'centralnotice-allocation-instructions' => 'テンプレートの割り当てを表示したい環境を選んでください：',
	'centralnotice-project-language' => 'プロジェクトの言語',
	'centralnotice-country' => '国',
	'centralnotice-no-allocation' => 'テンプレートが割り当てられていません。',
	'centralnotice-allocation-description' => '$3での$1.$2へのテンプレートの割り当て：',
	'centralnotice-percentage' => '割合',
	'right-centralnotice-admin' => '中央管理通知の管理',
	'right-centralnotice-translate' => '中央管理通知の翻訳',
	'action-centralnotice-admin' => '中央管理通知の管理',
	'action-centralnotice-translate' => '中央管理通知の翻訳',
	'centralnotice-preferred' => '優先',
);

/** Jutish (Jysk)
 * @author Huslåke
 */
$messages['jut'] = array(
	'centralnotice-desc' => "Tilføje'n sentrål sitenotice",
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'centralnotice' => "Admin cathetan pusat (''central notice'')",
	'noticetemplate' => "Cithakan cathetan pusat (''central notice'')",
	'centralnotice-desc' => 'Nambahaké wara-wara situs punjer',
	'centralnotice-summary' => "Modul iki kanggo nyunting tatanan cathetan pusat (''central notice'') sing ana.
Iki uga bisa kanggo nambah utawa mbuwang cathetan/pangumuman lawas.",
	'centralnotice-query' => 'Owahi cathetan/pangumuman sing ana saiki',
	'centralnotice-notice-name' => 'Jeneng cathetan/pangumuman',
	'centralnotice-end-date' => 'Tanggal dipungkasi',
	'centralnotice-enabled' => 'Diaktifaké',
	'centralnotice-modify' => 'Kirim',
	'centralnotice-preview' => 'Pratayang',
	'centralnotice-add-new' => 'Tambah cathetan pusat (pangumuman) anyar',
	'centralnotice-remove' => 'Buwang/busak',
	'centralnotice-translate-heading' => 'Terjemahan saka $1',
	'centralnotice-manage' => "Tata cathetan pusat (''central notice'')",
	'centralnotice-add' => 'Tambahaké',
	'centralnotice-add-notice' => 'Tambahaké cathetan',
	'centralnotice-add-template' => 'Tambahaké cithakan',
	'centralnotice-show-notices' => 'Tuduhaké cathetan',
	'centralnotice-list-templates' => 'Dhaptar cithakan',
	'centralnotice-translations' => 'Terjemahan',
	'centralnotice-translate-to' => 'Terjemahaké menyang',
	'centralnotice-translate' => 'Terjemah',
	'centralnotice-english' => 'Basa Inggris',
	'centralnotice-banner-name' => 'Jeneng cithakan',
	'centralnotice-templates' => 'Cithakan',
	'centralnotice-weight' => 'Bobot',
	'centralnotice-locked' => 'Kakunci',
	'centralnotice-notices' => 'Cathetan',
	'centralnotice-notice-exists' => 'Cathetan wis ana.
Dudu panambahan',
	'centralnotice-template-exists' => 'Cithakan wis ana.
Dudu panambahan',
	'centralnotice-notice-doesnt-exist' => 'Cathetan ora ana.
Ora ana sing perlu dibusak',
	'centralnotice-template-still-bound' => 'Cithakan isih diwatesi déning cathetan.
Ora bisa mbusak.',
	'centralnotice-template-body' => 'Bagéyan utama cithakan',
	'centralnotice-day' => 'Dina',
	'centralnotice-year' => 'Taun',
	'centralnotice-month' => 'Sasi',
	'centralnotice-hours' => 'Jam',
	'centralnotice-min' => 'Menit',
	'centralnotice-project-lang' => 'Basa Proyèk',
	'centralnotice-project-name' => 'Jeneng proyèk',
	'centralnotice-start-date' => 'Tanggal diwiwiti',
	'centralnotice-start-time' => 'Wektu diwiwiti (UTC)',
	'centralnotice-assigned-templates' => 'Cithakan-cithakan sing ditetepaké',
	'centralnotice-no-templates' => 'Ora ana cithakan.
Gawénen!',
	'centralnotice-no-templates-assigned' => "Durung ana cithakan kanggo cathetan/pangumuman (''notice'').
Gawénen!",
	'centralnotice-available-templates' => 'Cithakan-cithakan sing ana',
	'centralnotice-template-already-exists' => "Cithakan isih kagandhèng menyang ''campaing''.
Ora bisa nambah",
	'centralnotice-preview-template' => 'Tampilaké cithakan',
	'centralnotice-change-lang' => 'Owahi basa terjemahan',
	'centralnotice-weights' => 'Bobot',
	'centralnotice-notice-is-locked' => 'Cathetan dikunci.
Ora bisa mbusak',
	'centralnotice-overlap' => 'Cathetan sauntara tumpang tindhih karo cathetan liyané.
Ora bisa nambah',
	'centralnotice-invalid-date-range' => 'Jangka data ora sah.
Ora bisa ngowahi',
	'centralnotice-null-string' => "Ora bisa nambah ''null string''. Ora bisa nambah",
	'centralnotice-confirm-delete' => 'Panjenengan yakin bakal mbusak item iki?
Tumindak iki bakal ora bisa didandani manèh.',
	'centralnotice-no-notices-exist' => 'Durung ana cathetan.
Tambahaké ing ngisor',
	'centralnotice-no-templates-translate' => 'Ora ana cithakan sing kudu disunting/terjemahaké',
	'centralnotice-number-uses' => 'Guna',
	'centralnotice-edit-template' => 'Sunting cithakan',
	'centralnotice-message' => 'Warta',
	'centralnotice-message-not-set' => 'Warta durung di sèt',
	'centralnotice-clone' => 'Kloning',
	'centralnotice-clone-notice' => "Gawé salinan (''copy'') saka cithakan",
	'centralnotice-preview-all-template-translations' => 'Tampilaké kabèh terjemahan cithakan sing ana',
	'right-centralnotice-admin' => 'Tata cathetan pusat',
	'right-centralnotice-translate' => "Terjemahaké cathetan pusat (''central notices'')",
	'action-centralnotice-admin' => "tata cathetan pusat (''central notices'')",
	'action-centralnotice-translate' => "terjemahaké cathetan pusat (''central notices'')",
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author Malafaya
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'noticetemplate' => 'გლობალური შეტყობინების თარგი',
	'centralnotice-query' => 'მოქმედი შეტყობინების შეცვლა',
	'centralnotice-end-date' => 'დასრულების თარიღი',
	'centralnotice-enabled' => 'ჩართულია',
	'centralnotice-modify' => 'გაგზავნა',
	'centralnotice-preview' => 'წინა',
	'centralnotice-remove' => 'წაშლა',
	'centralnotice-translate-heading' => 'თარგმანი $1-თვის',
	'centralnotice-add' => 'დამატება',
	'centralnotice-add-notice' => 'შეტყობინების დამატება',
	'centralnotice-add-template' => 'დაამატეთ თარგი',
	'centralnotice-show-notices' => 'შეტყობინებების ჩვენება',
	'centralnotice-list-templates' => 'თარგების სია',
	'centralnotice-translations' => 'თარგმანები',
	'centralnotice-translate-to' => 'გადათარგმნა',
	'centralnotice-translate' => 'თარგმნა',
	'centralnotice-english' => 'ინგლისური',
	'centralnotice-banner-name' => 'თარგების სახელი',
	'centralnotice-templates' => 'თარგები',
	'centralnotice-weight' => 'სიგანე',
	'centralnotice-locked' => 'დაბლოკილი',
	'centralnotice-notices' => 'შეტყობინებები',
	'centralnotice-notice-exists' => 'შენიშვნა უკვე არსებობს.
არ დაამატოთ',
	'centralnotice-template-exists' => 'თარგი უკვე არსებობს. არ დაამატოთ',
	'centralnotice-notice-doesnt-exist' => 'შეტყობინება არ არსებობს.
არაფერია წასაშლელი.',
	'centralnotice-template-body' => 'თარგის სხეული:',
	'centralnotice-day' => 'დღე',
	'centralnotice-year' => 'წელი',
	'centralnotice-month' => 'თვე',
	'centralnotice-hours' => 'საათი',
	'centralnotice-min' => 'წუთი',
	'centralnotice-project-lang' => 'პროექტის ენა',
	'centralnotice-project-name' => 'პროექტის სახელი',
	'centralnotice-start-date' => 'დაწყების თარიღი',
	'centralnotice-start-time' => 'დაწყების დრო (UTC)',
	'centralnotice-no-templates' => 'თარგები ნაპოვნი არ არის. დაამატეთ რამე!',
	'centralnotice-preview-template' => 'წინა თარგი',
	'centralnotice-change-lang' => 'თარგმანის ენის შეცვლა',
	'centralnotice-confirm-delete' => 'დარწმუნებული ხართ, რომ გინდათ ამ ელემენტის წაშლა? ეს მოქმედება ვეღარ გაუქმნდება.',
	'centralnotice-number-uses' => 'გამოიყენება',
	'centralnotice-settings' => 'კონფიგურაცია',
	'centralnotice-edit-template' => 'თარგის რედაქტირება',
	'centralnotice-message' => 'შეტყობინება',
	'centralnotice-message-not-set' => 'შეტყობინება არ არის',
	'centralnotice-clone' => 'კლონირება',
	'centralnotice-clone-notice' => 'თარგის ასლის შექმნა',
	'centralnotice-clone-name' => 'სახელი:',
	'right-centralnotice-translate' => 'ცენტრალური შეტყობინებების თარგმანი',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'centralnotice-end-date' => 'កាលបរិច្ឆេទបញ្ចប់',
	'centralnotice-modify' => 'ដាក់ស្នើ',
	'centralnotice-preview' => 'មើលជាមុន',
	'centralnotice-remove' => 'ដកចេញ',
	'centralnotice-translate-heading' => 'ការប្រែសម្រួល​សម្រាប់​$1',
	'centralnotice-add' => 'ដាក់បន្ថែម',
	'centralnotice-add-template' => 'បន្ថែមទំព័រគំរូ',
	'centralnotice-translations' => 'ការបកប្រែ',
	'centralnotice-translate-to' => 'បកប្រែ​ទៅ',
	'centralnotice-translate' => 'បកប្រែ',
	'centralnotice-english' => 'ភាសាអង់គ្លេស',
	'centralnotice-banner-name' => 'ឈ្មោះបដា៖',
	'centralnotice-templates' => 'ទំព័រគំរូ',
	'centralnotice-weight' => 'ទម្ងន់​',
	'centralnotice-locked' => 'បានចាក់សោ',
	'centralnotice-day' => 'ថ្ងៃ',
	'centralnotice-year' => 'ឆ្នាំ',
	'centralnotice-month' => 'ខែ',
	'centralnotice-hours' => 'ម៉ោង',
	'centralnotice-min' => 'នាទី',
	'centralnotice-project-lang' => 'ភាសាគម្រោង',
	'centralnotice-project-name' => 'ឈ្មោះគម្រោង',
	'centralnotice-start-time' => 'ម៉ោង​ចាប់ផ្តើម (UTC)',
	'centralnotice-preview-template' => 'មើលទំព័រគំរូជាមុន',
	'centralnotice-edit-template' => 'កែប្រែទំព័រគំរូ',
	'centralnotice-message' => 'សារ',
	'centralnotice-clone' => 'ក្លូន',
	'centralnotice-donate-button' => 'ប៊ូតុងវិភាគទាន',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'centralnotice-preview' => 'ಮುನ್ನೋಟ',
	'centralnotice-english' => 'ಆಂಗ್ಲ',
	'centralnotice-day' => 'ದಿನ',
	'centralnotice-year' => 'ವರ್ಷ',
	'centralnotice-month' => 'ತಿಂಗಳು',
	'centralnotice-hours' => 'ಘಂಟೆ',
	'centralnotice-min' => 'ನಿಮಿಷ',
	'centralnotice-project-lang' => 'ಪ್ರಾಜೆಕ್ಟ್ ಭಾಷೆ',
	'centralnotice-project-name' => 'ಪ್ರಾಜೆಕ್ಟ್ ಹೆಸರು',
	'centralnotice-message' => 'ಸಂದೇಶ',
);

/** Korean (한국어)
 * @author Gapo
 * @author Klutzy
 * @author Kwj2772
 * @author Yknok29
 */
$messages['ko'] = array(
	'centralnotice' => '중앙 공지 관리',
	'noticetemplate' => '중앙 공지 관리',
	'bannerallocation' => '중앙 공지 관리',
	'centralnotice-desc' => '중앙에서 공지하는 사이트노티스를 추가',
	'centralnotice-summary' => '전체 공지 기능을 추가합니다. 현재의 공지 편집 기능과 공지의 추가/삭제 기능을 제공합니다.',
	'centralnotice-query' => '현재 공지 수정하기',
	'centralnotice-notice-name' => '공지 이름',
	'centralnotice-end-date' => '종료 날짜',
	'centralnotice-enabled' => '활성화됨',
	'centralnotice-modify' => '변경',
	'centralnotice-save-banner' => '배너 저장하기',
	'centralnotice-preview' => '미리 보기',
	'centralnotice-add-new' => '새 중앙 공지 추가',
	'centralnotice-remove' => '제거',
	'centralnotice-translate-heading' => '$1에 대한 번역',
	'centralnotice-manage' => '중앙 공지 관리',
	'centralnotice-manage-templates' => '배너 관리하기',
	'centralnotice-add' => '추가',
	'centralnotice-add-notice' => '알림을 추가하기',
	'centralnotice-edit-notice' => '전체공지 편집',
	'centralnotice-add-template' => '틀을 추가하기',
	'centralnotice-show-notices' => '공지 표시하기',
	'centralnotice-list-templates' => '템플릿 목록 표시하기',
	'centralnotice-multiple_languages' => '다수 ($1)',
	'centralnotice-translations' => '번역',
	'centralnotice-translate-to' => '번역할 언어',
	'centralnotice-translate' => '번역하기',
	'centralnotice-english' => '영어',
	'centralnotice-banner-name' => '배너 이름:',
	'centralnotice-banner' => '배너',
	'centralnotice-banner-heading' => '배너: $1',
	'centralnotice-templates' => '틀',
	'centralnotice-weight' => '중요도',
	'centralnotice-locked' => '잠김',
	'centralnotice-notice' => '전체공지',
	'centralnotice-notices' => '공지',
	'centralnotice-notice-exists' => '이미 공지가 존재합니다. 공지를 추가할 수 없습니다.',
	'centralnotice-template-exists' => '틀이 이미 존재합니다.
추가하지 않았습니다.',
	'centralnotice-notice-doesnt-exist' => '전체공지가 존재하지 않습니다.',
	'centralnotice-remove-notice-doesnt-exist' => '전체공지가 존재하지 않습니다. 삭제할 수 없습니다.',
	'centralnotice-template-still-bound' => '템플릿이 공지에 사용되고 있습니다. 삭제할 수 없습니다.',
	'centralnotice-template-body' => '템플릿 내용:',
	'centralnotice-day' => '일',
	'centralnotice-year' => '연도',
	'centralnotice-month' => '월',
	'centralnotice-hours' => '시',
	'centralnotice-min' => '분',
	'centralnotice-project-lang' => '프로젝트 언어',
	'centralnotice-top-ten-languages' => '상위 10개 언어',
	'centralnotice-project-name' => '프로젝트 이름',
	'centralnotice-start-date' => '시작 날짜',
	'centralnotice-start-time' => '시작 시간 (UTC)',
	'centralnotice-end-time' => '종료 시각 (UTC)',
	'centralnotice-assigned-templates' => '배당된 틀',
	'centralnotice-no-templates' => '사용 가능한 템플릿이 없습니다. 템플릿을 추가해주세요!',
	'centralnotice-no-templates-assigned' => '해당 공지에 사용가능한 템플릿이 없습니다. 템플릿을 추가해주세요!',
	'centralnotice-available-templates' => '사용 가능한 템플릿 목록',
	'centralnotice-template-already-exists' => '템플릿이 이미 설정되어 있습니다. 추가할 수 없습니다.',
	'centralnotice-preview-template' => '틀 미리 보기',
	'centralnotice-change-lang' => '번역할 언어 변경',
	'centralnotice-weights' => '중요도',
	'centralnotice-notice-is-locked' => '공지가 잠겼습니다.
제거하지 않았습니다.',
	'centralnotice-overlap' => '다른 공지와 시간이 중복됩니다. 추가할 수 없습니다.',
	'centralnotice-invalid-date-range' => '날짜 형식이 잘못되었습니다. 추가할 수 없습니다.',
	'centralnotice-null-string' => '공지 내용이 비었습니다. 추가할 수 없습니다.',
	'centralnotice-confirm-delete' => '정말 이 항목을 삭제하시겠습니까?
한 번 삭제하면 복구할 수 없습니다.',
	'centralnotice-no-notices-exist' => '공지가 존재하지 않습니다. 공지를 추가해주세요.',
	'centralnotice-no-templates-translate' => '번역해야 할 템플릿이 없습니다.',
	'centralnotice-number-uses' => '사용 횟수',
	'centralnotice-edit-template' => '틀 편집하기',
	'centralnotice-edit-template-summary' => '번역이 가능한 메세지를 만드려면, {{{jimbo-quote}}}와 같이 중괄호로 세 번 감싸주면 됩니다.',
	'centralnotice-message' => '메시지',
	'centralnotice-message-not-set' => '메시지가 정의되지 않았습니다.',
	'centralnotice-clone' => '사본',
	'centralnotice-clone-notice' => '이 틀의 사본을 만들기',
	'centralnotice-clone-name' => '이름:',
	'centralnotice-preview-all-template-translations' => '템플렛의 모든 번역 미리 보기',
	'right-centralnotice-admin' => '중앙 공지 관리',
	'right-centralnotice-translate' => '중앙 공지 번역',
	'action-centralnotice-admin' => '중앙 공지를 관리하기',
	'action-centralnotice-translate' => '중앙 공지를 번역할',
	'centralnotice-preferred' => '우선 사용',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'centralnotice' => 'Zentraal Nohreschte verwallde',
	'noticetemplate' => 'Schabloon för zentraal Nohreschte',
	'centralnotice-desc' => "Brengk en zentraale ''sitenotice'' en et wiki",
	'centralnotice-summary' => 'Hee met kanns De de zentraal Nohreschte ändere, die jraad em Wiki opjesaz sen,
ävver och neue dobei donn, un allde fott schmieße.',
	'centralnotice-query' => 'Aktowälle zentraale Nohresch ändere.',
	'centralnotice-notice-name' => 'Dä Nohresch ier Name',
	'centralnotice-end-date' => 'Et Dattum fum Engk',
	'centralnotice-enabled' => 'Aanjeschalldt',
	'centralnotice-modify' => 'Loß Jonn!',
	'centralnotice-preview' => 'Vör-Aansich zeije',
	'centralnotice-add-new' => 'Donn en zentrale Nohresch dobei',
	'centralnotice-remove' => 'Fottnämme',
	'centralnotice-translate-heading' => 'Övversäzong för $1',
	'centralnotice-manage' => 'Zentrale Nohreschte fowallde',
	'centralnotice-add' => 'Dobeidonn',
	'centralnotice-add-notice' => 'En zentrale Nohresch dobei donn',
	'centralnotice-add-template' => 'En Schabloon dobei donn',
	'centralnotice-show-notices' => 'Zentrale Nohreschte zeije',
	'centralnotice-list-templates' => 'Schablone opleßte',
	'centralnotice-multiple_languages' => 'etlijje ($1)',
	'centralnotice-translations' => 'Övversäzonge',
	'centralnotice-translate-to' => 'Övversäze noh',
	'centralnotice-translate' => 'Övversäze',
	'centralnotice-english' => 'Englesch',
	'centralnotice-banner-name' => 'Dä Schablon iere Name',
	'centralnotice-templates' => 'Schablone',
	'centralnotice-weight' => 'Jeweesch',
	'centralnotice-locked' => 'jespert',
	'centralnotice-notices' => 'zentrale Nohreschte',
	'centralnotice-notice-exists' => 'Di zentrale Nohresch es ald doh.
Nix dobei jedonn.',
	'centralnotice-template-exists' => 'Di Schablon es ald doh.
Nit dobei jedonn.',
	'centralnotice-notice-doesnt-exist' => 'Di zentrale Nohresch es nit doh.
Kam_mer nit fott lohße.',
	'centralnotice-template-still-bound' => 'Di Schablon deit aan ene zentrale Nohresch hange.
Di kam_mer nit fott nämme.',
	'centralnotice-template-body' => 'Dä Tex fun dä Schablon:',
	'centralnotice-day' => 'Daach',
	'centralnotice-year' => 'Johr',
	'centralnotice-month' => 'Moohnd',
	'centralnotice-hours' => 'Shtund',
	'centralnotice-min' => 'Menutt',
	'centralnotice-project-lang' => 'Däm Projäk sing Shprooch',
	'centralnotice-project-name' => 'Däm Projäk singe Name',
	'centralnotice-start-date' => 'Et Annfangsdattum',
	'centralnotice-start-time' => 'De Aanfangszick (UTC)',
	'centralnotice-assigned-templates' => 'Zojedeilte Schablone',
	'centralnotice-no-templates' => 'Mer han kein Schablone.
Kanns ävver welshe dobei don.',
	'centralnotice-no-templates-assigned' => 'Et sin kein Schablone för de zentraal Nohresch zojedeilt.
Donn dat ens!',
	'centralnotice-available-templates' => 'Müjjelesche Schabloone',
	'centralnotice-template-already-exists' => 'Di Schablon weed ald förr_en Kampannje jebruch.
Nit dobeijedonn.',
	'centralnotice-preview-template' => 'Vör-Ansich för di Schablon',
	'centralnotice-change-lang' => 'Shprooch fö et Övversäze ändere',
	'centralnotice-weights' => 'Jeweeschte',
	'centralnotice-notice-is-locked' => 'Di zentraal Nohresch es jesperrt.
Se blief.',
	'centralnotice-overlap' => 'De Zick vun hee dä, un en ander vun dä zentraale Nohreschte, donn sesch övverlappe. Dat jeiht nit.
Nit dobei jedonn.',
	'centralnotice-invalid-date-range' => 'Die Zigge jidd_et nit.
Nix jedonn.',
	'centralnotice-null-string' => 'Et hät keine Senn, ene Täx aanzefööje, woh nix dren steiht.
Dat maache mer nit.',
	'centralnotice-confirm-delete' => "Bes De sescher, dat De dä Enndraach fottschmiiße well?
Fott eß fott, dä kam_mer '''nit''' widder zeröck holle!",
	'centralnotice-no-notices-exist' => 'Mer han kein Nohreschte.
De kanns ävver welshe dobei don.',
	'centralnotice-no-templates-translate' => 'Mer hann kein Schablone, woh mer Översäzunge för beärbeide künnt.',
	'centralnotice-number-uses' => 'Jebruch',
	'centralnotice-edit-template' => 'Schablon beärbeide',
	'centralnotice-message' => 'Nohresch',
	'centralnotice-message-not-set' => 'De Nohresch es nit jesaz',
	'centralnotice-clone' => 'Kopi maache',
	'centralnotice-clone-notice' => 'Maach en Kopi fun dä Schabloon',
	'centralnotice-preview-all-template-translations' => 'Vör-Aansich fun all dä Övversäzunge fun dä Schablon',
	'right-centralnotice-admin' => 'Zentraal Nohreschte verwallde',
	'right-centralnotice-translate' => 'Zentraal Nohreschte övversäze',
	'action-centralnotice-admin' => 'zentraal Nohreschte ze verwallde',
	'action-centralnotice-translate' => 'zentraal Nohreschte ze övversäze',
	'centralnotice-preferred' => 'Förjetrocke!',
);

/** Cornish (Kernewek)
 * @author Kernoweger
 * @author Kw-Moon
 */
$messages['kw'] = array(
	'centralnotice-english' => 'Sowsnek',
	'centralnotice-day' => 'Dedh',
	'centralnotice-year' => 'Bledhen',
	'centralnotice-month' => 'Mis',
	'centralnotice-edit-template' => 'Chanjya an baner',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'centralnotice' => 'Administratioun vun den zenrale Matdeelungen',
	'noticetemplate' => 'Gstioun vun den zentrale Matdeelungen',
	'centralnotice-desc' => 'Setzt eng zentral Matdeelung iwwert de Site derbäi',
	'centralnotice-summary' => "Dës Erweiderung erlaabt et Är aktuell Parameter vun den zentrale Matdeelungen z'änneren.
Se kann och benotzt gi fir Matdeelunge derbäizesetzen oder aler ewechzehuelen.",
	'centralnotice-query' => 'Déi aktuell Matdeelungen änneren',
	'centralnotice-notice-name' => 'Numm vun der Matdeelung',
	'centralnotice-end-date' => 'Schlussdatum',
	'centralnotice-enabled' => 'Aktivéiert',
	'centralnotice-modify' => 'Späicheren',
	'centralnotice-save-banner' => 'Banner späicheren',
	'centralnotice-preview' => 'Weisen ouni ze späicheren',
	'centralnotice-add-new' => 'Eng nei zentral Matdeelung derbäisetzen',
	'centralnotice-remove' => 'Ewechhuelen',
	'centralnotice-translate-heading' => 'Iwwersetzung vu(n) $1',
	'centralnotice-manage' => 'Zentralmatdeelunge geréieren',
	'centralnotice-manage-templates' => 'Bannere geréieren',
	'centralnotice-add' => 'Derbäisetzen',
	'centralnotice-add-notice' => 'Eng Matdeelung derbäisetzen',
	'centralnotice-edit-notice' => 'Campagne änneren',
	'centralnotice-add-template' => 'E Banner derbäisetzen',
	'centralnotice-show-notices' => 'Matdeelunge weisen',
	'centralnotice-list-templates' => 'Lëscht vun de Banneren',
	'centralnotice-multiple_languages' => 'méi ($1)',
	'centralnotice-translations' => 'Iwwersetzungen',
	'centralnotice-translate-to' => 'Iwwersetzen op',
	'centralnotice-translate' => 'Iwwersetzen',
	'centralnotice-english' => 'Englesch',
	'centralnotice-banner-name' => 'Numm vum Banner:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Banneren',
	'centralnotice-weight' => 'Gewiicht',
	'centralnotice-locked' => 'Gespaart',
	'centralnotice-notice' => 'Campagne',
	'centralnotice-notice-heading' => 'Campagne: $1',
	'centralnotice-notices' => 'Matdeelungen',
	'centralnotice-notice-exists' => "D'Matdeelung gëtt et schonn.
Si konnt net derbäigesat ginn.",
	'centralnotice-no-language' => "Fir d'Campagne gouf keng Sprooch erausgesicht. Se gëtt net derbäigesat.",
	'centralnotice-template-exists' => 'De Banner gëtt et schonn.
Net derbäisetzen.',
	'centralnotice-notice-doesnt-exist' => "D'Campagne gëtt et net.",
	'centralnotice-remove-notice-doesnt-exist' => "D'Campagne gëtt et net.
Et gëtt näischt fir ewechzehuelen.",
	'centralnotice-banner-doesnt-exist' => 'De Banner gëtt et net.',
	'centralnotice-template-still-bound' => 'De Banner ass nach ëmmer mat enger Campagne verbonn.
Net ewechhuelen.',
	'centralnotice-template-body' => 'Text vun der Schabloun:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'Joer',
	'centralnotice-month' => 'Mount',
	'centralnotice-hours' => 'Stonn',
	'centralnotice-min' => 'Minutt',
	'centralnotice-project-lang' => 'Sprooch vum Projet',
	'centralnotice-select' => 'Eraussichen: $1',
	'centralnotice-top-ten-languages' => 'Top 10 Sproochen',
	'centralnotice-project-name' => 'Numm vum Projet',
	'centralnotice-start-date' => 'Ufanksdatum',
	'centralnotice-start-time' => 'Ufankszäit (UTC)',
	'centralnotice-end-time' => 'Schlusszäitpunkt (UTC)',
	'centralnotice-assigned-templates' => 'Zougewise Banneren',
	'centralnotice-no-templates' => 'Keng Bannere fonnt.
Setzt der derbäi!',
	'centralnotice-no-templates-assigned' => 'Keng Bannere mat der Campagne verbonn.
Setzt der derbäi!',
	'centralnotice-available-templates' => 'Disponibel Banneren',
	'centralnotice-template-already-exists' => 'De Banner ass schonn enger Campagne zougedeelt.
Net derbäisetzen',
	'centralnotice-preview-template' => 'Schabloun weisen ouni ze späicheren',
	'centralnotice-change-lang' => 'Sprooch vun der Iwwersetzung änneren',
	'centralnotice-weights' => 'Gewiicht',
	'centralnotice-notice-is-locked' => "D'Matdeelung ass gespaart.
Se kann net ewechgeholl ginn.",
	'centralnotice-overlap' => "D'Meldung iwwerschneid sech mat der Zäit vun enger anerer Meldung.
Net derbäigesat.",
	'centralnotice-invalid-date-range' => 'Ongëltegen Zäitraum.
Gëtt net aktualiséiert.',
	'centralnotice-null-string' => 'Et ass net méiglech näischt derbäizesetzen.
Näischt derbäigesat',
	'centralnotice-confirm-delete' => 'Sidd Dir sécher datt Dir dës Säit läsche wëllt?
Dës Aktioun kann net réckgängeg gemaach ginn.',
	'centralnotice-no-notices-exist' => 'Et gëtt keng Matdeelung.
Setzt eng hei ënnendrënner bäi.',
	'centralnotice-no-templates-translate' => "Et gëtt keng Bannere fir déi Iwwersetzungen z'ännere sinn",
	'centralnotice-number-uses' => 'gëtt benotzt',
	'centralnotice-settings' => 'Astellungen',
	'centralnotice-edit-template' => 'Schabloun änneren',
	'centralnotice-edit-template-summary' => 'Fir e lokaliséierbare Message unzeleeën, setzt eng Zeecheketten tëschent dräi geschweefte Klameren  dran, z. Bsp. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Message',
	'centralnotice-message-not-set' => 'Message net gepäichert',
	'centralnotice-clone' => 'Eng Kopie maachen',
	'centralnotice-clone-notice' => 'Eng Kopie vum Banner maachen',
	'centralnotice-clone-name' => 'Numm:',
	'centralnotice-preview-all-template-translations' => 'All disponibel Iwwersetzunge vum Banner weisen ouni ofzespäicheren',
	'centralnotice-insert' => 'Drasetzen: $1',
	'centralnotice-hide-button' => 'Knäppche {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Knäppchen {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Knäppchen {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => "Knäppchen 'Hëllef iwwersetzen'",
	'centralnotice-donate-button' => "Knäppchen 'Spenden'",
	'centralnotice-expanded-banner' => 'Erweiderte Banner',
	'centralnotice-collapsed-banner' => 'Zesummegeklappte Banner',
	'centralnotice-banner-display' => 'Weise fir:',
	'centralnotice-banner-anonymous' => 'Anonym Benotzer',
	'centralnotice-banner-logged-in' => 'Ageloggte Benotzer',
	'centralnotice-banner-type' => 'Bannertyp:',
	'centralnotice-banner-hidable' => 'Statesch/Ka verstoppt ginn',
	'centralnotice-banner-collapsible' => 'Aklappbar',
	'centralnotice-geotargeted' => 'Geografesch geziilt',
	'centralnotice-countries' => 'Länner',
	'centralnotice-project-language' => 'Sprooch vum Projet',
	'centralnotice-country' => 'Land',
	'centralnotice-no-allocation' => 'Keng Banneren zougedeelt.',
	'centralnotice-percentage' => 'Prozentsaz',
	'right-centralnotice-admin' => 'Zentralmatdeelunge geréieren',
	'right-centralnotice-translate' => 'Zentralmatdeelungen iwwersetzen',
	'action-centralnotice-admin' => 'Zentralmatdeelungen ze geréieren',
	'action-centralnotice-translate' => "Zentralmatdeelungen z'iwwersetzen",
	'centralnotice-preferred' => 'Am léiwsten',
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Malafaya
 */
$messages['lfn'] = array(
	'centralnotice-day' => 'Dia',
	'centralnotice-year' => 'Anio',
	'centralnotice-hours' => 'Ora',
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Pahles
 */
$messages['li'] = array(
	'centralnotice' => 'Beheer centrale sitemitdeiling',
	'noticetemplate' => 'Behier centraal sitemitdeiling',
	'bannerallocation' => 'Behier centraal sitemitdeiling',
	'centralnotice-desc' => "Deit 'n centrale sitemededeling bie",
	'centralnotice-summary' => 'Mit dees moduul kinne centraal ingestelde sitemitdeilinge bewirk waere.
De module kin ouch gebroek waere om sitemitdeilinge bie te doon of eweg te sjaffe.',
	'centralnotice-query' => 'Hujige sitemitdeilinge verangere',
	'centralnotice-notice-name' => 'Naam mitdeiling',
	'centralnotice-end-date' => 'Einddatum',
	'centralnotice-enabled' => 'Aktief',
	'centralnotice-modify' => 'Opslaon',
	'centralnotice-save-banner' => 'Slaon vaan óp',
	'centralnotice-preview' => 'Betrachte',
	'centralnotice-add-new' => 'Nuuj centrale sitemitdeiling biedoon',
	'centralnotice-remove' => 'Wis',
	'centralnotice-translate-heading' => 'Vertaling veur $1',
	'centralnotice-manage' => 'Centrale sitemitdeiling behere',
	'centralnotice-manage-templates' => 'Behier vaan',
	'centralnotice-add' => 'Biedoon',
	'centralnotice-add-notice' => 'Sitemitdeiling biedoon',
	'centralnotice-edit-notice' => 'Bewirk campagne',
	'centralnotice-add-template' => 'Sjabloon biedoon',
	'centralnotice-show-notices' => 'Sitemitdeilinge waergaeve',
	'centralnotice-list-templates' => 'Sjablone waergaeve',
	'centralnotice-multiple_languages' => 'meerdere ($1)',
	'centralnotice-translations' => 'Euverzèttinge',
	'centralnotice-translate-to' => 'Euverzètte nao',
	'centralnotice-translate' => 'Euverzètte',
	'centralnotice-english' => 'Ingels',
	'centralnotice-banner-name' => 'Vaannaam:',
	'centralnotice-banner' => 'Vaan',
	'centralnotice-banner-heading' => 'Vaan: $1',
	'centralnotice-templates' => 'Sjablone',
	'centralnotice-weight' => 'Gewich',
	'centralnotice-locked' => 'Aafgesjlaote',
	'centralnotice-notice' => 'Kampanj',
	'centralnotice-notice-heading' => 'Kampanj: $1',
	'centralnotice-notices' => 'Sitemitdeilinge',
	'centralnotice-notice-exists' => 'De sitemitdeiling besjteit al.
Deze weurt neet biegedoon.',
	'centralnotice-no-language' => "d'r Is gein spraok geselecteerd veure campagne.
d'r Weurt nieks toegevoog.",
	'centralnotice-template-exists' => "'t Sjabloon besjteit al.
Dit weurt neet biegedoon.",
	'centralnotice-notice-doesnt-exist' => 'De campagne besteit neet.',
	'centralnotice-remove-notice-doesnt-exist' => "De campagne besteit neet.
d'r Kin nieks gewös waere.",
	'centralnotice-banner-doesnt-exist' => 'Vaan besteit neet.',
	'centralnotice-template-still-bound' => "'t Sjabloon is nog neet gekoppeld aan 'n sitemitdeiling.
't Weurt neet eweggesjaf.",
	'centralnotice-template-body' => 'Sjablooninhoud:',
	'centralnotice-day' => 'Daag',
	'centralnotice-year' => 'Jaor',
	'centralnotice-month' => 'Maondj',
	'centralnotice-hours' => 'Oer',
	'centralnotice-min' => 'Menuut',
	'centralnotice-project-lang' => 'Projektaal',
	'centralnotice-select' => 'Selecteer: $1',
	'centralnotice-top-ten-languages' => 'Top-10 tale',
	'centralnotice-project-name' => 'Projeknaam',
	'centralnotice-start-date' => 'Sjtartdatum',
	'centralnotice-start-time' => 'Sjtarttied (UTC)',
	'centralnotice-end-time' => 'Èndjtied (UTC)',
	'centralnotice-assigned-templates' => 'Toegeweze sjablone',
	'centralnotice-no-templates' => "Gein sjablone gevónje.
Doog 'rs bie!",
	'centralnotice-no-templates-assigned' => "D'r zeen gein sjablone toegeweze aan de sitemitdeiling.
Doog 'rs bie!",
	'centralnotice-available-templates' => 'Besjikbare sjablone',
	'centralnotice-template-already-exists' => "'t Sjabloon is al gekoppeld aan 'n campagne.
't Weurt neet biegedoon.",
	'centralnotice-preview-template' => 'Veursjouw sjabloon',
	'centralnotice-change-lang' => 'Euver te zètte taal verangere',
	'centralnotice-weights' => 'Gewichte',
	'centralnotice-notice-is-locked' => 'De sitenotice is toe.
Deze wörd neet gewis',
	'centralnotice-overlap' => "De sitemitdeiling euverlap mit 'n anger sitemitdeiling.
Deze weurt neet biegedoon",
	'centralnotice-invalid-date-range' => "Ongeljige datumreeks.
D'r weurt niks biegewirk.",
	'centralnotice-null-string' => "De kins gein laeg teksveld biedoon.
D'r weurt niks biegedoon",
	'centralnotice-confirm-delete' => 'Wèts doe zeker dats doe dit item wils ewegsjaffe?
Dees hanjeling is neet trök te drieje.',
	'centralnotice-no-notices-exist' => "D'r zeen gein sitemitdeilinge.
De kins hiejónger ein biedoon.",
	'centralnotice-no-templates-translate' => "D'r zeen gein sjablone woeveur euverzèttinge gemaak kinne waere",
	'centralnotice-number-uses' => 'Gebroeke',
	'centralnotice-settings' => 'Insjtellinge',
	'centralnotice-edit-template' => 'Sjabloon bewirke',
	'centralnotice-message' => 'Berich',
	'centralnotice-message-not-set' => "'t Berich is neet ingesjtèld",
	'centralnotice-clone' => 'Kopiëre',
	'centralnotice-clone-notice' => "'n Kopie van 't sjabloon make",
	'centralnotice-clone-name' => 'Naam:',
	'centralnotice-preview-all-template-translations' => "Alle besjikbare euverzèttinge van 't sjabloon betrachte",
	'centralnotice-insert' => 'Voog in: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}}knoep',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}}knoep',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}}knoep',
	'centralnotice-translate-button' => 'Euverzèttingshölpknoep',
	'centralnotice-donate-button' => 'Gaefknoep',
	'centralnotice-expanded-banner' => 'Oetgeklap vaan',
	'centralnotice-collapsed-banner' => 'Ingeklap vaan',
	'centralnotice-banner-display' => 'Tuun veur:',
	'centralnotice-banner-anonymous' => 'Anoniem gebroekers',
	'centralnotice-banner-logged-in' => 'Aangemeldje gebroekers',
	'centralnotice-banner-type' => 'Vaantiep:',
	'centralnotice-banner-hidable' => 'Statisch/verbergbaar',
	'centralnotice-banner-collapsible' => 'inklapbaar',
	'right-centralnotice-admin' => 'Centrale sitemitdeilinge behere',
	'right-centralnotice-translate' => 'Centrale sitenotices vertale',
	'action-centralnotice-admin' => 'beheer centrale sitemitdeilinge',
	'action-centralnotice-translate' => 'centrale sitemitdeilinge euverzètte',
	'centralnotice-preferred' => 'Prifferensies',
);

/** Lithuanian (Lietuvių)
 * @author Matasg
 */
$messages['lt'] = array(
	'centralnotice-day' => 'Diena',
	'centralnotice-year' => 'Metai',
	'centralnotice-month' => 'Mėnuo',
	'centralnotice-hours' => 'Valanda',
	'centralnotice-min' => 'Minutė',
	'centralnotice-project-lang' => 'Projekto kalba',
	'centralnotice-project-name' => 'Projekto pavadinimas',
	'centralnotice-start-date' => 'Pradžios data',
	'centralnotice-start-time' => 'Pradžios laikas (UTC)',
	'centralnotice-no-templates' => 'Nerasta šablonų.
Pridėkite!',
	'centralnotice-available-templates' => 'Galimi šablonai',
	'centralnotice-preview-template' => 'Peržiūrėti šabloną',
	'centralnotice-edit-template' => 'Redaguoti šabloną',
	'centralnotice-message' => 'Pranešimas',
	'centralnotice-message-not-set' => 'Pranešimas nenustatytas',
	'centralnotice-clone' => 'Klonuoti',
	'centralnotice-clone-notice' => 'Sukurti šablono kopiją',
	'centralnotice-insert' => 'Įdėti: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} mygtukas',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} mygtukas',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} mygtukas',
	'centralnotice-translate-button' => 'Padėkite išversti mygtukas',
	'centralnotice-donate-button' => 'Paaukokite mygtukas',
	'centralnotice-expanded-banner' => 'Išplėstas pranešimas',
	'centralnotice-collapsed-banner' => 'Sutrauktas pranešimas',
	'centralnotice-banner-display' => 'Rodyti:',
	'centralnotice-banner-anonymous' => 'Anoniminiai naudotojai',
	'centralnotice-banner-logged-in' => 'Prisijungę naudotojai',
	'centralnotice-banner-type' => 'Pranešimo tipas:',
	'centralnotice-banner-hidable' => 'Statinis/Paslepiamas',
	'centralnotice-banner-collapsible' => 'Sutraukiamas',
	'right-centralnotice-admin' => 'Visuotinių pranešimų valdymas',
	'right-centralnotice-translate' => 'Visuotinių pranešimų vertimas',
	'action-centralnotice-admin' => 'visuotinių pranešimų valdymas',
	'action-centralnotice-translate' => 'visuotinių pranešimų vertimas',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'centralnotice' => "Fandrindàn'ny toerana fampandrenesana",
	'noticetemplate' => "Endrin'ny toerana fampandrenesana",
	'centralnotice-desc' => "Manampy toerana fampandrenesana amin'ilay tranonkala",
	'centralnotice-query' => 'Ovay ny fampandrenesana misy ankehitriny',
	'centralnotice-notice-name' => "Anaran'ilay fampandrenesana",
	'centralnotice-end-date' => 'Daty fijanonana',
	'centralnotice-enabled' => 'Mande',
	'centralnotice-modify' => 'Alefaso',
	'centralnotice-preview' => 'Asehoy aloha',
	'centralnotice-remove' => 'Esorina',
	'centralnotice-translate-heading' => 'Dika ny fampandrenesana « $1 »',
	'centralnotice-manage' => 'Hikojakoja ny toerana fampandrenesana',
	'centralnotice-add' => 'Hanampy',
	'centralnotice-add-notice' => 'Hanampy hafatra',
	'centralnotice-add-template' => 'Hanampy endrika',
	'centralnotice-show-notices' => 'Ampiseho ny hafatra',
	'centralnotice-list-templates' => 'Ataovy lisitra ny endrika',
	'centralnotice-translations' => 'Dikan-teny',
	'centralnotice-translate-to' => "Dikao amin'ny",
	'centralnotice-translate' => 'Dikao',
	'centralnotice-english' => 'Anglisy',
	'centralnotice-banner-name' => "Anaran'ilay endrika",
	'centralnotice-templates' => 'Endrika',
	'centralnotice-weight' => 'Lanja',
	'centralnotice-locked' => 'Voaaro/voasakana',
	'centralnotice-notices' => 'Fampandrenesana/Hafatra',
	'centralnotice-notice-exists' => 'Efa misy io hafatra fampandrenesana io.
Tsy nampiana ilay izy',
	'centralnotice-day' => 'Andro',
	'centralnotice-year' => 'Taona',
	'centralnotice-month' => 'Volana',
	'centralnotice-hours' => 'Ora',
	'centralnotice-min' => 'Minìtra',
	'centralnotice-project-lang' => "Fiteny ampiasain'ilay tetikasa",
	'centralnotice-project-name' => "anaran'ilay tetikasa",
	'centralnotice-start-date' => 'Daty fanombohany',
	'centralnotice-start-time' => 'Ora fanombohany (UTC)',
	'centralnotice-assigned-templates' => 'Endrika ampiasainy',
	'centralnotice-no-templates' => 'Tsy nisy endrika hita.
Ampio!',
	'centralnotice-no-templates-assigned' => "Tsy misy endrika ampiasaina hoan'ilay hafatra.
Ampio!",
	'centralnotice-available-templates' => 'Endrika afaka ampiasaina',
	'centralnotice-preview-template' => 'Asehoy aloha io endrika',
	'centralnotice-change-lang' => "Ampio ny fiteny miasa amin'ny fandikàna-teny",
	'centralnotice-weights' => 'Lanja',
	'centralnotice-notice-is-locked' => 'Voaaro ilay hafatra.
Tsy nifafàna ilay izy',
	'centralnotice-number-uses' => 'Fampiasàna',
	'centralnotice-edit-template' => 'Ovay ny endrika',
	'centralnotice-message' => 'Hafatra',
	'centralnotice-clone' => 'Avereno dikao',
	'centralnotice-clone-notice' => "Angala-tahaka n'ilay endrika",
	'right-centralnotice-translate' => 'dikao teny ny hafatra',
	'action-centralnotice-admin' => "mikojakoja n'io hafatra io",
	'action-centralnotice-translate' => 'dikao teny ny fampandrenesana',
	'centralnotice-preferred' => 'Ny tiako/ny tianao/Ny tiny',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'centralnotice' => 'Администратор на централни известувања',
	'noticetemplate' => 'Администратор на централни известувања',
	'bannerallocation' => 'Администратор на централни известувања',
	'centralnotice-desc' => 'Централизирано известување',
	'centralnotice-summary' => 'Овој модул ви овозможува да ги уредувате вашите моментално поставени централни известувања.
Може да се користи и за додавање или отстранување на стари известувања.',
	'centralnotice-query' => 'Измени моментални известувања',
	'centralnotice-notice-name' => 'Назив на известувањето',
	'centralnotice-end-date' => 'Истекува',
	'centralnotice-enabled' => 'Овозможено',
	'centralnotice-modify' => 'Испрати',
	'centralnotice-save-banner' => 'Зачувај плакат',
	'centralnotice-preview' => 'Преглед',
	'centralnotice-add-new' => 'Додај ново централно известување',
	'centralnotice-remove' => 'Тргни',
	'centralnotice-translate-heading' => 'Превод на $1',
	'centralnotice-manage' => 'Раководење со централното известување',
	'centralnotice-manage-templates' => 'Раководење со плакати',
	'centralnotice-add' => 'Додај',
	'centralnotice-add-notice' => 'Додај известување',
	'centralnotice-edit-notice' => 'Уреди кампања',
	'centralnotice-add-template' => 'Додај шаблон',
	'centralnotice-show-notices' => 'Прикажи известувања',
	'centralnotice-list-templates' => 'Наведи шаблони',
	'centralnotice-multiple_languages' => 'повеќе ($1)',
	'centralnotice-translations' => 'Преводи',
	'centralnotice-translate-to' => 'Преведи на',
	'centralnotice-translate' => 'Преведи',
	'centralnotice-english' => 'англиски',
	'centralnotice-banner-name' => 'Назив на плакатот:',
	'centralnotice-banner' => 'Плакат',
	'centralnotice-banner-heading' => 'Плакат: $1',
	'centralnotice-templates' => 'Шаблони',
	'centralnotice-weight' => 'Тежина',
	'centralnotice-locked' => 'Заклучено',
	'centralnotice-notice' => 'Кампања',
	'centralnotice-notice-heading' => 'Кампања: $1',
	'centralnotice-notices' => 'Известувања',
	'centralnotice-notice-exists' => 'Известувањето веќе постои.
Не е додадено',
	'centralnotice-no-language' => 'Не е избран јазик за кампањата. Не е додадено.',
	'centralnotice-template-exists' => 'Шаблонот веќе постои.
Не е додаден',
	'centralnotice-notice-doesnt-exist' => 'Кампањата не постои.',
	'centralnotice-remove-notice-doesnt-exist' => 'Кампањата не постои.
Нема што да се отстранува.',
	'centralnotice-banner-doesnt-exist' => 'Плакатот не постои',
	'centralnotice-template-still-bound' => 'Шаблонот сè уште е врзан за известување.
Нема да биде отстранет.',
	'centralnotice-template-body' => 'Тело на шаблонот:',
	'centralnotice-day' => 'Ден',
	'centralnotice-year' => 'Година',
	'centralnotice-month' => 'Месец',
	'centralnotice-hours' => 'Час',
	'centralnotice-min' => 'Минута',
	'centralnotice-project-lang' => 'Јазик на проект',
	'centralnotice-select' => 'Одбери: $1',
	'centralnotice-top-ten-languages' => '10 најприсутни јазици',
	'centralnotice-project-name' => 'Име на проект',
	'centralnotice-start-date' => 'Почетен датум',
	'centralnotice-start-time' => 'Почетен датум (UTC)',
	'centralnotice-end-time' => 'Завршува (UTC)',
	'centralnotice-assigned-templates' => 'Придружени шаблони',
	'centralnotice-no-templates' => 'Нема шаблони.
Додај некој!',
	'centralnotice-no-templates-assigned' => 'Нема шаблони назначени за известување.
Додајте некои!',
	'centralnotice-available-templates' => 'Шаблони на располагање',
	'centralnotice-template-already-exists' => 'Шаблонот е веќе врзан за кампањата.
Нема да биде додаден',
	'centralnotice-preview-template' => 'Преглед на шаблонот',
	'centralnotice-change-lang' => 'Смени јазик на превод',
	'centralnotice-weights' => 'Тегови',
	'centralnotice-notice-is-locked' => 'Известувањето е заклучено.
Нема да биде отстрането',
	'centralnotice-overlap' => 'Известувањето временски се преклопува со друго известување.
Нема да биде додадено',
	'centralnotice-invalid-date-range' => 'Погрешен временски опсег.
Не се обновува',
	'centralnotice-null-string' => 'Не можете да додадете нулта низа.
Нема да биде додадено',
	'centralnotice-confirm-delete' => 'Дали сте сигурни дека сакате да ја избришење оваа ставка?
Ова ќе биде неповратно.',
	'centralnotice-no-notices-exist' => 'Нема никакви известувања.
Додајте известување подолу.',
	'centralnotice-no-templates-translate' => 'Нема шаблони за кои можете да уредите преведувања',
	'centralnotice-number-uses' => 'Користи',
	'centralnotice-settings' => 'Нагодувања',
	'centralnotice-edit-template' => 'Уреди шаблон',
	'centralnotice-edit-template-summary' => 'За да создадете порака што ќе може да се локализира, напишете низа со цртичка и ставете ја во три кадрави загради, на пр. {{{цитат-џимбо}}}.',
	'centralnotice-message' => 'Порака',
	'centralnotice-message-not-set' => 'Порката не е поставена',
	'centralnotice-clone' => 'Клонирај',
	'centralnotice-clone-notice' => 'Создај копија на шаблонот',
	'centralnotice-clone-name' => 'Име:',
	'centralnotice-preview-all-template-translations' => 'Преглед на сите расположиви преводи на шаблонот',
	'centralnotice-insert' => 'Вметни: $1',
	'centralnotice-hide-button' => 'копче „{{int:centralnotice-shared-hide}}“',
	'centralnotice-collapse-button' => 'копче „{{int:centralnotice-shared-collapse}}“',
	'centralnotice-expand-button' => 'копче „{{int:centralnotice-shared-expand}}“',
	'centralnotice-translate-button' => 'Копче за помош со преводите',
	'centralnotice-donate-button' => 'Копче за донации',
	'centralnotice-expanded-banner' => 'Расклопен плакат',
	'centralnotice-collapsed-banner' => 'Склопен плакат',
	'centralnotice-banner-display' => 'Прикажи во:',
	'centralnotice-banner-anonymous' => 'Анонимни корисници',
	'centralnotice-banner-logged-in' => 'Најавени корисници',
	'centralnotice-banner-type' => 'Тип на плакат:',
	'centralnotice-banner-hidable' => 'Статичен/Склоплив',
	'centralnotice-banner-collapsible' => 'Расклоплив',
	'centralnotice-geotargeted' => 'Геобележано',
	'centralnotice-countries' => 'Земји',
	'centralnotice-allocation' => 'Распределба',
	'centralnotice-view-allocation' => 'Преглед на распределбата на плакати',
	'centralnotice-allocation-instructions' => 'Одберете во која околина сакате да ја погледате распределбата на плакати:',
	'centralnotice-project-language' => 'Јазик на проектот',
	'centralnotice-country' => 'Земја',
	'centralnotice-no-allocation' => 'Нема распределени плакати',
	'centralnotice-allocation-description' => 'Распределба на плакати за $1.$2 iво $3:',
	'centralnotice-percentage' => 'Постоток',
	'right-centralnotice-admin' => 'Раководење со централни известувања',
	'right-centralnotice-translate' => 'Преведување на централни известувања',
	'action-centralnotice-admin' => 'раководење со централни известувања',
	'action-centralnotice-translate' => 'преведување на цетрални известувања',
	'centralnotice-preferred' => 'Претпочитано',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'centralnotice' => 'കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവാഹകൻ',
	'noticetemplate' => 'കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവാഹകൻ',
	'bannerallocation' => 'കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവാഹകൻ',
	'centralnotice-desc' => 'കേന്ദീകൃത സൈറ്റ്നോട്ടീസ് ചേർക്കുന്നു',
	'centralnotice-summary' => 'തയ്യാറാക്കപ്പെട്ട കേന്ദ്രീകൃത അറിയിപ്പുകൾ തിരുത്താൻ ഈ ഘടകം താങ്കളെ പ്രാപ്തമാക്കുന്നു.
പഴയ അറിയിപ്പുകൾ കൂട്ടിച്ചേർക്കാനോ നീക്കം ചെയ്യാനോ വേണ്ടിയും ഇതുപയോഗിക്കാവുന്നതാണ്.',
	'centralnotice-query' => 'ഇപ്പോഴുള്ള അറിയിപ്പുകളിൽ മാറ്റം വരുത്തുക',
	'centralnotice-notice-name' => 'അറിയിപ്പിന്റെ പേര്',
	'centralnotice-end-date' => 'അവസാനിക്കുന്ന തീയ്യതി',
	'centralnotice-enabled' => 'സജ്ജമാക്കിയിരിക്കുന്നു',
	'centralnotice-modify' => 'സമർപ്പിക്കുക',
	'centralnotice-save-banner' => 'എഴുത്തുപട്ട സേവ് ചെയ്യുക',
	'centralnotice-preview' => 'എങ്ങനെയുണ്ടെന്നു കാണുക',
	'centralnotice-add-new' => 'പുതിയൊരു കേന്ദ്രീകൃത അറിയിപ്പ് ചേർക്കുക',
	'centralnotice-remove' => 'നീക്കംചെയ്യുക',
	'centralnotice-translate-heading' => '$1 എന്നതിനുള്ള തർജ്ജമ',
	'centralnotice-manage' => 'കേന്ദ്രീകൃത അറിയിപ്പ് കൈകാര്യം ചെയ്യുക',
	'centralnotice-manage-templates' => 'എഴുത്തുപട്ടകൾ കൈകാര്യം ചെയ്യുക',
	'centralnotice-add' => 'കൂട്ടിച്ചേർക്കുക',
	'centralnotice-add-notice' => 'ഒരു അറിയിപ്പ് കൂട്ടിച്ചേർക്കുക',
	'centralnotice-edit-notice' => 'പ്രചരണപ്രവർത്തനം തിരുത്തുക',
	'centralnotice-add-template' => 'ഫലകം കൂട്ടിച്ചേർക്കുക',
	'centralnotice-show-notices' => 'അറിയിപ്പുകൾ പ്രദർശിപ്പിക്കുക',
	'centralnotice-list-templates' => 'ഫലകങ്ങൾ പട്ടികവത്കരിക്കുക',
	'centralnotice-multiple_languages' => 'നിരവധി ($1)',
	'centralnotice-translations' => 'തർജ്ജമകൾ',
	'centralnotice-translate-to' => 'ഇതിലേയ്ക്ക് തർജ്ജമ ചെയ്യുക',
	'centralnotice-translate' => 'തർജ്ജമ ചെയ്യുക',
	'centralnotice-english' => 'ഇംഗ്ലീഷ്',
	'centralnotice-banner-name' => 'എഴുത്തുപട്ടയുടെ പേര്:',
	'centralnotice-banner' => 'എഴുത്തുപട്ട',
	'centralnotice-banner-heading' => 'എഴുത്തുപട്ട: $1',
	'centralnotice-templates' => 'ഫലകങ്ങൾ',
	'centralnotice-weight' => 'ഘനം',
	'centralnotice-locked' => 'പൂട്ടിയിരിക്കുന്നു',
	'centralnotice-notice' => 'പ്രചാരണപ്രവർത്തനം',
	'centralnotice-notice-heading' => 'പ്രചരണം: $1',
	'centralnotice-notices' => 'അറിയിപ്പുകൾ',
	'centralnotice-notice-exists' => 'അറിയിപ്പ് ഇപ്പോൾ തന്നെ ഉണ്ട്.
കൂട്ടിച്ചേർക്കുന്നില്ല',
	'centralnotice-no-language' => 'പ്രചരണത്തിനായി ഭാഷയൊന്നും തിരഞ്ഞെടുക്കപ്പെട്ടിട്ടില്ല. കൂട്ടിച്ചേർക്കുന്നില്ല.',
	'centralnotice-template-exists' => 'ഫലകം നിലവിലുണ്ട്.
കൂട്ടിച്ചേർക്കുന്നില്ല',
	'centralnotice-notice-doesnt-exist' => 'പ്രചാരണപ്രവർത്തനം നിലനിൽക്കുന്നില്ല',
	'centralnotice-remove-notice-doesnt-exist' => 'പ്രചാരണപ്രവർത്തനം നിലനിൽക്കുന്നില്ല.
നീക്കംചെയ്യാൻ ഒന്നുമില്ല.',
	'centralnotice-banner-doesnt-exist' => 'എഴുത്തുപട്ട നിലവിലില്ല.',
	'centralnotice-template-still-bound' => 'ഫലകം ഇപ്പോഴും ഒരു അറിയിപ്പുമായി ബന്ധപ്പെട്ടിരിക്കുന്നു.
നീക്കം ചെയ്യുന്നില്ല.',
	'centralnotice-template-body' => 'ഫലകത്തിന്റെ ഉള്ളടക്കം:',
	'centralnotice-day' => 'ദിവസം',
	'centralnotice-year' => 'വർഷം',
	'centralnotice-month' => 'മാസം',
	'centralnotice-hours' => 'മണിക്കൂർ',
	'centralnotice-min' => 'മിനിട്ട്',
	'centralnotice-project-lang' => 'പദ്ധതിയുടെ ഭാഷ',
	'centralnotice-select' => 'തിരഞ്ഞെടുക്കുക: $1',
	'centralnotice-top-ten-languages' => 'ആദ്യ 10 ഭാഷകൾ',
	'centralnotice-project-name' => 'പദ്ധതിയുടെ പേര്',
	'centralnotice-start-date' => 'ആരംഭിക്കുന്ന തീയതി',
	'centralnotice-start-time' => 'ആരംഭിക്കുന്ന സമയം (UTC)',
	'centralnotice-end-time' => 'അവസാനിക്കുന്ന സമയം (യു.റ്റി.സി.)',
	'centralnotice-assigned-templates' => 'ചുമതലപ്പെടുത്തിയിരിക്കുന്ന ഫലകങ്ങൾ',
	'centralnotice-no-templates' => 'ഫലകങ്ങൾ ഒന്നും കണ്ടെത്താനായില്ല.
ഏതാനം ചേർക്കുക!',
	'centralnotice-no-templates-assigned' => 'അറിയിപ്പിനായി ഫലകങ്ങൾ ഒന്നും മാറ്റിവെച്ചിട്ടില്ല.
ഏതാനം ചേർക്കുക!',
	'centralnotice-available-templates' => 'ലഭ്യമായ ഫലകങ്ങൾ',
	'centralnotice-template-already-exists' => 'ഫലകം പ്രചരണപ്രവർത്തനവുമായി ബന്ധിച്ചിരിക്കുന്നു.
കൂട്ടിച്ചേർക്കുന്നില്ല',
	'centralnotice-preview-template' => 'ഫലകത്തിന്റെ പ്രിവ്യൂ കാണുക',
	'centralnotice-change-lang' => 'തർജ്ജമയുടെ ഭാഷ മാറ്റുക',
	'centralnotice-weights' => 'ഘനങ്ങൾ',
	'centralnotice-notice-is-locked' => 'അറിയിപ്പ് പൂട്ടപ്പെട്ടിരിക്കുന്നു.
നീക്കം ചെയ്യുന്നില്ല',
	'centralnotice-overlap' => 'മറ്റൊരു അറിയിപ്പിന്റെ സമയക്രമത്തെ ഈ അറിയിപ്പ് അതിലംഘിക്കുന്നു.
കൂട്ടിച്ചേർക്കുന്നില്ല',
	'centralnotice-invalid-date-range' => 'തീയതിയുടെ പരിധി അസാധുവാണ്.
പുതുക്കുന്നില്ല.',
	'centralnotice-null-string' => 'ശൂന്യമായ പദം ചേർക്കാൻ കഴിയില്ല.
കൂട്ടിച്ചേർക്കുന്നില്ല',
	'centralnotice-confirm-delete' => 'ഇത് മായ്ച്ചുകളയണമെന്നതിനു താങ്കൾക്കുറപ്പുണ്ടോ?
ഈ പ്രവൃത്തി തിരികെ ചെയ്യാവുന്നതല്ല.',
	'centralnotice-no-notices-exist' => 'അറിയിപ്പുകൾ നിലനിൽപ്പില്ല.
താഴെ ഒരെണ്ണം കൂട്ടിച്ചേർക്കുക',
	'centralnotice-no-templates-translate' => 'ഇതിന്റെ തർജ്ജമകൾ തിരുത്താനായി ഒരു ഫലകവും ഇപ്പോഴില്ല',
	'centralnotice-number-uses' => 'ഉപയോഗങ്ങൾ',
	'centralnotice-settings' => 'സജ്ജീകരണങ്ങൾ',
	'centralnotice-edit-template' => 'ഫലകം തിരുത്തുക',
	'centralnotice-edit-template-summary' => 'പ്രാദേശീകരിക്കാവുന്ന സന്ദേശം സൃഷ്ടിക്കാൻ, മൂന്ന് വളയൻ കോഷ്ഠകങ്ങൾക്കുള്ളിൽ ഹൈഫൻ ഉപയോഗിച്ച് ചേർത്ത പദങ്ങൾ നൽകുക, ഉദാ: {{{jimbo-quote}}}.',
	'centralnotice-message' => 'സന്ദേശം',
	'centralnotice-message-not-set' => 'സന്ദേശം നിശ്ചിതപ്പെടുത്തിയില്ല.',
	'centralnotice-clone' => 'സമപ്പകർപ്പ്',
	'centralnotice-clone-notice' => 'ഫലകത്തിന്റെ പകർപ്പ് സൃഷ്ടിക്കുക',
	'centralnotice-clone-name' => 'പേര്:',
	'centralnotice-preview-all-template-translations' => 'ഫലകത്തിന്റെ ലഭ്യമായ എല്ലാ തർജ്ജമകളുടേയും പ്രിവ്യൂ കാണുക',
	'centralnotice-insert' => 'ഉൾപ്പെടുത്തുക: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} ബട്ടൺ',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} ബട്ടൺ',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} ബട്ടൺ',
	'centralnotice-translate-button' => 'പരിഭാഷാസഹായി ബട്ടൺ',
	'centralnotice-donate-button' => 'സംഭാവനാ ബട്ടൺ',
	'centralnotice-expanded-banner' => 'വികസിപ്പിച്ച എഴുത്തുപട്ട',
	'centralnotice-collapsed-banner' => 'ചുരുക്കിയ എഴുത്തുപട്ട',
	'centralnotice-banner-display' => 'പ്രദർശിപ്പിക്കേണ്ടത്:',
	'centralnotice-banner-anonymous' => 'അജ്ഞാത ഉപയോക്താക്കൾ',
	'centralnotice-banner-logged-in' => 'പ്രവേശിച്ചിട്ടുള്ള ഉപയോക്താക്കൾ',
	'centralnotice-banner-type' => 'എഴുത്തുപട്ടയുടെ തരം:',
	'centralnotice-banner-hidable' => 'സ്ഥിരസ്ഥിതി/മറയ്ക്കാവുന്നത്',
	'centralnotice-banner-collapsible' => 'ചുരുക്കാവുന്നത്',
	'centralnotice-geotargeted' => 'ഭൂപ്രദേശങ്ങൾ ലക്ഷ്യമാക്കിയവ',
	'centralnotice-countries' => 'രാജ്യങ്ങൾ',
	'centralnotice-allocation' => 'വിന്യാസം',
	'centralnotice-view-allocation' => 'എഴുത്തുപട്ടയ്ക്ക് അനുവദിച്ചിരിക്കുന്ന സ്ഥാനം കാണുക',
	'centralnotice-allocation-instructions' => 'എഴുത്തുപട്ട അനുവദിക്കൽ പ്രദർശിപ്പിക്കാനായി താങ്കൾ തിരഞ്ഞെടുക്കുന്ന പരിതസ്ഥിതി:',
	'centralnotice-project-language' => 'പദ്ധതിയുടെ ഭാഷ',
	'centralnotice-country' => 'രാജ്യം',
	'centralnotice-no-allocation' => 'എഴുത്തുപട്ടകൾക്ക് ഇടയനുവദിച്ചിട്ടില്ല.',
	'centralnotice-allocation-description' => '$1.$2 സംരംഭത്തിൽ അനുവദിച്ചിരിക്കുന്ന എഴുത്തുപട്ട (രാജ്യം: $3):',
	'centralnotice-percentage' => 'ശതമാനം',
	'right-centralnotice-admin' => 'കേന്ദ്രീകൃത അറിയിപ്പുകൾ കൈകാര്യം ചെയ്യുക',
	'right-centralnotice-translate' => 'കേന്ദ്രീകൃത അറിയിപ്പുകൾ തർജ്ജമ ചെയ്യുക',
	'action-centralnotice-admin' => 'കേന്ദ്രീകൃത അറിയിപ്പുകൾ കൈകാര്യം ചെയ്യുക',
	'action-centralnotice-translate' => 'കേന്ദ്രീകൃത അറിയിപ്പുകൾ തർജ്ജമ ചെയ്യുക',
	'centralnotice-preferred' => 'അഭിലഷണീയമായുള്ളത്',
);

/** Marathi (मराठी)
 * @author Mahitgar
 * @author V.narsikar
 */
$messages['mr'] = array(
	'centralnotice-desc' => 'संकेतस्थळाचा मध्यवर्ती सूचना फलक',
	'centralnotice-end-date' => 'अंतिम तारीख',
	'centralnotice-add-new' => 'नव्या मोहीमेची सुरूवात करा',
	'centralnotice-translate-heading' => '$1 चे भाषांतर',
	'centralnotice-manage' => 'मोहीम हाताळा',
	'centralnotice-add-notice' => 'नव्या मोहीमेची भर घाला',
	'centralnotice-add-template' => 'नविन मथळा लावा',
	'centralnotice-translations' => 'भाषांतरे',
	'centralnotice-translate-to' => '(Language name) या भाषेत भाषांतर करा',
	'centralnotice-banner-name' => 'मथळ्याचे नाव',
	'centralnotice-day' => 'दिनांक',
	'centralnotice-hours' => 'तास',
	'centralnotice-project-lang' => 'प्रकल्प भाषा',
	'centralnotice-project-name' => 'प्रकल्पाचे नाव',
	'centralnotice-start-date' => 'सुरू केल्याचा दिनांक',
	'centralnotice-start-time' => 'सुरू केल्याची वेळ (युटीसी)',
	'centralnotice-no-templates' => 'मथळे सापडले नाहीत.काहींची भर घाला',
	'centralnotice-available-templates' => 'उपलब्ध मथळे',
	'centralnotice-template-already-exists' => 'मोहीमेस मथळा पूर्वीच दिलेला आहे. आता जोडू नका.',
	'centralnotice-preview-template' => 'मथळ्याची झलक पाहा.',
	'centralnotice-change-lang' => 'भाषांतरासाठी भाषेत बदल करा',
	'centralnotice-notice-is-locked' => 'मथळ्यास ताळा लावला आहे. काढु नका.',
	'centralnotice-confirm-delete' => 'आपणास हा मजकुर नक्की गाळावयाचा आहे काय? 
ही कृती परतविता येणार नाही.',
	'centralnotice-no-notices-exist' => 'मथळा अस्तित्वात नाही.
एक मथळा खाली जोडा.',
	'centralnotice-no-templates-translate' => '↓ भाषांतरे संपादीत करण्याकरिता कोणतेही मुखशीर्षक (बॅनर) उपलब्ध नाही',
	'centralnotice-number-uses' => '↓ उपयोग',
	'centralnotice-edit-template' => '↓ मुखशीर्षक (बॅनर) संपादीत करा',
	'centralnotice-edit-template-summary' => '↓ स्थानिकीकरण संदेश तयार करण्याकरिता, तीहेरी महिरपीकंस  संयोगचिन्ह(-) असलेले सूत्राने (स्ट्रींग)भरा, उदाहरणार्थ. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'संदेश',
	'centralnotice-message-not-set' => '↓ संदेश स्थापित केलेला नाही',
	'centralnotice-clone' => '↓ कृत्तक (क्लोन)',
	'centralnotice-clone-notice' => '↓ मुखशीर्षकाची(बॅनरची प्रत बनवा)',
	'centralnotice-preview-all-template-translations' => '↓ मुखशीर्षकांच्या सर्व उपलब्ध भाषांतराची झलक पहा',
	'right-centralnotice-admin' => '↓ मध्यवर्ती सूचनांचे प्रबंधन करा',
	'right-centralnotice-translate' => '↓ मध्यवर्ती सूचनांचे भाषांतरकरा',
	'action-centralnotice-admin' => 'मध्यवर्ती सूचनांचे प्रबंधन करा',
	'action-centralnotice-translate' => 'मध्यवर्ती सूचनांचे भाषांतरकरा',
	'centralnotice-preferred' => 'प्राधान्य',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 * @author Izzudin
 */
$messages['ms'] = array(
	'centralnotice' => 'Pentadbiran pemberitahuan pusat',
	'noticetemplate' => 'Templat pemberitahuan pusat',
	'centralnotice-desc' => 'Menambah pemberitahuan pusat',
	'centralnotice-summary' => 'Anda boleh menggunakan modul ini untuk menyunting pemberitahuan pusat yang disediakan. Anda juga boleh menambah atau membuang pemberitahuan yang lama.',
	'centralnotice-query' => 'Ubah suai pemberitahuan semasa',
	'centralnotice-notice-name' => 'Nama pemberitahuan',
	'centralnotice-end-date' => 'Tarikh tamat',
	'centralnotice-enabled' => 'Boleh',
	'centralnotice-modify' => 'Serah',
	'centralnotice-preview' => 'Pralihat',
	'centralnotice-add-new' => 'Tambah pemberitahuan pusat baru',
	'centralnotice-remove' => 'Buang',
	'centralnotice-translate-heading' => 'Penterjemahan $1',
	'centralnotice-manage' => 'Urus pemberitahuan pusat',
	'centralnotice-add' => 'Tambah',
	'centralnotice-add-notice' => 'Tambah pemberitahuan',
	'centralnotice-add-template' => 'Tambah templat',
	'centralnotice-show-notices' => 'Papar pemberitahuan',
	'centralnotice-list-templates' => 'Senarai templat',
	'centralnotice-translations' => 'Terjemahan',
	'centralnotice-translate-to' => 'Terjemah',
	'centralnotice-translate' => 'Terjemah',
	'centralnotice-english' => 'Bahasa Inggeris',
	'centralnotice-banner-name' => 'Nama templat',
	'centralnotice-templates' => 'Templat',
	'centralnotice-weight' => 'Berat',
	'centralnotice-locked' => 'Dikunci',
	'centralnotice-notices' => 'Pemberitahuan',
	'centralnotice-notice-exists' => 'Pemberitahuan telah pun wujud dan tidak ditambah.',
	'centralnotice-template-exists' => 'Templat telah pun wujud dan tidak ditambah.',
	'centralnotice-notice-doesnt-exist' => 'Pemberitahuan tidak wujud untuk dibuang.',
	'centralnotice-template-still-bound' => 'Templat masih digunakan untuk pemberitahuan dan tidak dibuang.',
	'centralnotice-template-body' => 'Kandungan templat:',
	'centralnotice-day' => 'Hari',
	'centralnotice-year' => 'Tahun',
	'centralnotice-month' => 'Bulan',
	'centralnotice-hours' => 'Jam',
	'centralnotice-min' => 'Minit',
	'centralnotice-project-lang' => 'Bahasa projek',
	'centralnotice-project-name' => 'Nama projek',
	'centralnotice-start-date' => 'Tarikh mula',
	'centralnotice-start-time' => 'Waktu mula (UTC)',
	'centralnotice-assigned-templates' => 'Templat ditugasi',
	'centralnotice-no-templates' => 'Tiada templat. Sila cipta templat baru.',
	'centralnotice-no-templates-assigned' => 'Tiada templat untuk pemberitahuan. Tambah templat baru!',
	'centralnotice-available-templates' => 'Templat yang ada',
	'centralnotice-template-already-exists' => 'Templat telah pun terikat dengan kempen, oleh itu tidak ditambah.',
	'centralnotice-preview-template' => 'Pralihat templat',
	'centralnotice-change-lang' => 'Tukar bahasa terjemahan',
	'centralnotice-weights' => 'Berat',
	'centralnotice-notice-is-locked' => 'Pemberitahuan telah dikunci dan tidak boleh dibuang.',
	'centralnotice-overlap' => 'Pemberitahuan tersebut bertindan waktu dengan pemberitahuan lain, oleh itu tidak ditambah.',
	'centralnotice-invalid-date-range' => 'Julat tarikh tidak sah dan tidak dikemaskinikan.',
	'centralnotice-null-string' => 'Rentetan kosong tidak boleh ditambah.',
	'centralnotice-confirm-delete' => 'Betul anda mahu menghapuskan item ini? Tindakan ini tidak boleh dipulihkan.',
	'centralnotice-no-notices-exist' => 'Tiada pemberitahuan. Anda boleh menambahnya di bawah.',
	'centralnotice-no-templates-translate' => 'Tiada templat untuk diterjemah',
	'centralnotice-number-uses' => 'Penggunaan',
	'centralnotice-edit-template' => 'Sunting templat',
	'centralnotice-message' => 'Pesanan',
	'centralnotice-message-not-set' => 'Pesanan tidak ditetapkan',
	'centralnotice-clone' => 'Salin',
	'centralnotice-clone-notice' => 'Buat salinan templat ini',
	'centralnotice-preview-all-template-translations' => 'Pratonton semua terjemahan yang ada bagi templat ini',
	'right-centralnotice-admin' => 'Mengurus pemberitahuan pusat',
	'right-centralnotice-translate' => 'Menterjemah pemberitahuan pusat',
	'action-centralnotice-admin' => 'mengurus pemberitahuan pusat',
	'action-centralnotice-translate' => 'menterjemah pemberitahuan pusat',
	'centralnotice-preferred' => 'Dipilih',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'centralnotice-add-template' => 'Żid mudell',
	'centralnotice-banner-name' => 'Isem tal-mudell',
	'centralnotice-number-uses' => 'Użi',
	'centralnotice-message' => 'Messaġġ',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'centralnotice-add' => 'Поладомс',
	'centralnotice-add-template' => 'Поладомс лопа парцун',
	'centralnotice-banner-name' => 'Лопа парцунонь лем',
	'centralnotice-templates' => 'Лопа парцунт',
	'centralnotice-weight' => 'Сталмо',
	'centralnotice-template-body' => 'Лопа парцунонть рунгозо:',
	'centralnotice-day' => 'Чи',
	'centralnotice-year' => 'Ие',
	'centralnotice-month' => 'Ков',
	'centralnotice-hours' => 'Цяс',
	'centralnotice-min' => 'Минут',
	'centralnotice-available-templates' => 'Кедь маласо лопа парцунт',
	'centralnotice-edit-template' => 'Лопа парцунонть витнеме-петнеме',
	'centralnotice-message' => 'Пачтамнэ',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'centralnotice' => 'Sitenotice verwalten',
	'noticetemplate' => 'Vörlaag för Sitenotice',
	'centralnotice-desc' => 'Föögt en zentrale Naricht för de Websteed to',
	'centralnotice-summary' => 'Dit Modul verlöövt di dat Ännern vun de Instellungen för Sitenotice.
Dat kann ok bruukt warrn, üm Sitenotices totofögen oder ruttonehmen.',
	'centralnotice-query' => 'Aktuelle Sitenotice ännern',
	'centralnotice-notice-name' => 'Naam',
	'centralnotice-end-date' => 'Datum vun’t Enn',
	'centralnotice-enabled' => 'Aktiv',
	'centralnotice-modify' => 'OK',
	'centralnotice-preview' => 'Vörschau',
	'centralnotice-add-new' => 'Ne’e zentrale Sitenotice tofögen',
	'centralnotice-remove' => 'Rutnehmen',
	'centralnotice-translate-heading' => 'Översetten för $1',
	'centralnotice-manage' => 'Sitenotice verwalten',
	'centralnotice-add' => 'Tofögen',
	'centralnotice-add-notice' => 'En Sitenotice tofögen',
	'centralnotice-add-template' => 'En Vörlaag tofögen',
	'centralnotice-show-notices' => 'Sitenotices wiesen',
	'centralnotice-list-templates' => 'Vörlagen oplisten',
	'centralnotice-translations' => 'Översetten',
	'centralnotice-translate-to' => 'Översetten na',
	'centralnotice-translate' => 'Översetten',
	'centralnotice-english' => 'Engelsch',
	'centralnotice-banner-name' => 'Vörlagennaam',
	'centralnotice-templates' => 'Vörlagen',
	'centralnotice-weight' => 'Gewicht',
	'centralnotice-locked' => 'Afslaten',
	'centralnotice-notices' => 'Sitenotices',
	'centralnotice-notice-exists' => 'De Sitenotice gifft dat al.
Nix toföögt.',
	'centralnotice-template-exists' => 'De Vörlaag gifft dat al.
Nix toföögt.',
	'centralnotice-notice-doesnt-exist' => 'De Sitenotice gifft dat nich.
Nix rutnahmen.',
	'centralnotice-template-still-bound' => 'Vörlaag is noch jümmer an en Sitenotice bunnen.
Nich rutnahmen.',
	'centralnotice-template-body' => 'Vörlagentext:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'Johr',
	'centralnotice-month' => 'Maand',
	'centralnotice-hours' => 'Stünn',
	'centralnotice-min' => 'Minuut',
	'centralnotice-project-lang' => 'Projektspraak',
	'centralnotice-project-name' => 'Projektnaam',
	'centralnotice-start-date' => 'Startdatum',
	'centralnotice-start-time' => 'Starttied (UTC)',
	'centralnotice-assigned-templates' => 'Towiest Vörlagen',
	'centralnotice-no-templates' => 'Keen Vörlagen funnen.
Kannst welk tofögen!',
	'centralnotice-no-templates-assigned' => 'Dor sünd kene Vörlagen an de Sitenotice towiest.
Föög welk to!',
	'centralnotice-available-templates' => 'Verföögbor Vörlagen',
	'centralnotice-template-already-exists' => 'Vörlaag is al an Kampagne bunnen.
Nich toföögt',
	'centralnotice-preview-template' => 'Vörschau för de Vörlaag',
	'centralnotice-change-lang' => 'Spraak för’t Översetten ännern',
	'centralnotice-weights' => 'Gewichten',
	'centralnotice-notice-is-locked' => 'Sitenotice is sperrt.
Nich rutnahmen',
	'centralnotice-overlap' => 'Sitenotice överlappt mit en annere Sitenotice.
Nich toföögt',
	'centralnotice-invalid-date-range' => 'Ungüllig Tied.
Warrt nich aktuell maakt.',
	'centralnotice-null-string' => 'Kann keen Nullstring tofögen.
Nix toföögt',
	'centralnotice-confirm-delete' => 'Büst du seker, dat du dissen Indrag wegdoon wullt?
Dat geit nich wedder trüchtodreihn.',
	'centralnotice-no-notices-exist' => 'Gifft keen Narichten.
Kannst ünnen een tofögen',
	'centralnotice-no-templates-translate' => 'Dat gifft keen Vörlagen, för de Översetten maakt warrn köönt',
	'centralnotice-number-uses' => 'Maal bruukt',
	'centralnotice-edit-template' => 'Vörlaag ännern',
	'centralnotice-message' => 'Naricht',
	'centralnotice-message-not-set' => 'Naricht nich instellt',
	'centralnotice-clone' => 'Koperen',
	'centralnotice-clone-notice' => 'En Kopie vun de Vörlaag maken',
	'centralnotice-preview-all-template-translations' => 'All vörhannen Översetten vun en Vörlaag ankieken',
	'right-centralnotice-admin' => 'Zentrale Siedennotiz verwalten',
	'right-centralnotice-translate' => 'Zentrale Siedennotiz översetten',
	'action-centralnotice-admin' => 'zentrale Siedennotiz verwalten',
	'action-centralnotice-translate' => 'zentrale Siedennotiz översetten',
	'centralnotice-preferred' => 'Vörtagen',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'centralnotice-desc' => 'Voeg een centrale mededeling an de webstee toe',
	'centralnotice-translate-heading' => 'Vertaling veur $1',
	'centralnotice-add' => 'Toevoegen',
	'centralnotice-add-template' => 'Mal toevoegen',
	'centralnotice-translations' => 'Vertalingen',
	'centralnotice-change-lang' => 'Taal dee-j vertalen willen wiezigen',
);

/** Dutch (Nederlands)
 * @author Siebrand
 * @author Tvdm
 */
$messages['nl'] = array(
	'centralnotice' => 'Beheer centrale sitenotice',
	'noticetemplate' => 'Centrale sitenotice beheren',
	'bannerallocation' => 'Centrale sitenotice beheren',
	'centralnotice-desc' => 'Voegt een centrale sitemededeling toe',
	'centralnotice-summary' => 'Met deze module kunnen centraal ingestelde sitenotices bewerkt worden.
De module kan ook gebruikt worden om sitenotices toe te voegen of oude te verwijderen.',
	'centralnotice-query' => 'Huidige sitenotices wijzigen',
	'centralnotice-notice-name' => 'Sitenoticenaam',
	'centralnotice-end-date' => 'Einddatum',
	'centralnotice-enabled' => 'Actief',
	'centralnotice-modify' => 'Opslaan',
	'centralnotice-save-banner' => 'Banner opslaan',
	'centralnotice-preview' => 'Voorvertoning',
	'centralnotice-add-new' => 'Nieuwe centrale sitenotice toevoegen',
	'centralnotice-remove' => 'Verwijderen',
	'centralnotice-translate-heading' => 'Vertaling voor $1',
	'centralnotice-manage' => 'Centrale sitenotice beheren',
	'centralnotice-manage-templates' => 'Banners beheren',
	'centralnotice-add' => 'Toevoegen',
	'centralnotice-add-notice' => 'Sitenotice toevoegen',
	'centralnotice-edit-notice' => 'Campagne bewerken',
	'centralnotice-add-template' => 'Sjabloon toevoegen',
	'centralnotice-show-notices' => 'Sitenotices weergeven',
	'centralnotice-list-templates' => 'Sjablonen weergeven',
	'centralnotice-multiple_languages' => 'meerdere ($1)',
	'centralnotice-translations' => 'Vertalingen',
	'centralnotice-translate-to' => 'Vertalen naar',
	'centralnotice-translate' => 'Vertalen',
	'centralnotice-english' => 'Engels',
	'centralnotice-banner-name' => 'Bannernaam:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Sjablonen',
	'centralnotice-weight' => 'Gewicht',
	'centralnotice-locked' => 'Afgesloten',
	'centralnotice-notice' => 'Campagne',
	'centralnotice-notice-heading' => 'Campagne: $1',
	'centralnotice-notices' => 'Sitenotices',
	'centralnotice-notice-exists' => 'De sitenotice bestaat al.
Deze wordt niet toegevoegd.',
	'centralnotice-no-language' => 'Er is geen taal geselecteerd voor de campagne.
Er wordt niets toegevoegd.',
	'centralnotice-template-exists' => 'Het sjabloon bestaat al.
Dit wordt niet toegevoegd.',
	'centralnotice-notice-doesnt-exist' => 'De campagne bestaat niet.',
	'centralnotice-remove-notice-doesnt-exist' => 'De campagne bestaat niet.
Er is niets te verwijderen',
	'centralnotice-banner-doesnt-exist' => 'DE banner bestaat niet.',
	'centralnotice-template-still-bound' => 'Het sjabloon is nog gekoppeld aan een sitenotice.
Het wordt niet verwijderd.',
	'centralnotice-template-body' => 'Sjablooninhoud:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'Jaar',
	'centralnotice-month' => 'Maand',
	'centralnotice-hours' => 'Uur',
	'centralnotice-min' => 'Minuut',
	'centralnotice-project-lang' => 'Projecttaal',
	'centralnotice-select' => 'Selecteer: $1',
	'centralnotice-top-ten-languages' => 'Top-10 talen',
	'centralnotice-project-name' => 'Projectnaam',
	'centralnotice-start-date' => 'Begindatum',
	'centralnotice-start-time' => 'Starttijd (UTC)',
	'centralnotice-end-time' => 'Eindtijd (UTC)',
	'centralnotice-assigned-templates' => 'Toegewezen sjablonen',
	'centralnotice-no-templates' => 'Er zijn geen sjablonen beschikbaar in het systeem',
	'centralnotice-no-templates-assigned' => 'Er zijn geen sjablonen toegewezen aan de sitenotice.
Die moet u toevoegen.',
	'centralnotice-available-templates' => 'Beschikbare sjablonen',
	'centralnotice-template-already-exists' => 'Het sjabloon is al gekoppeld aan een campagne.
Het wordt niet toegevoegd.',
	'centralnotice-preview-template' => 'Voorvertoning sjabloon',
	'centralnotice-change-lang' => 'Te vertalen taal wijzigen',
	'centralnotice-weights' => 'Gewichten',
	'centralnotice-notice-is-locked' => 'De sitenotice is afgesloten.
Deze wordt niet verwijderd.',
	'centralnotice-overlap' => 'De sitenotice overlapt met een andere sitenotice.
Deze wordt niet toegevoegd.',
	'centralnotice-invalid-date-range' => 'Ongeldige datumreeks.
Er wordt niet bijgewerkt.',
	'centralnotice-null-string' => 'U kunt geen leeg tekstveld toevoegen.
Er wordt niet toegevoegd.',
	'centralnotice-confirm-delete' => 'Weet u zeker dat u dit item wilt verwijderen?
Deze handeling is niet terug te draaien.',
	'centralnotice-no-notices-exist' => 'Er zijn geen sitenotices.
U kunt er hieronder een toevoegen.',
	'centralnotice-no-templates-translate' => 'Er zijn geen sjablonen waarvoor vertalingen gemaakt kunnen worden',
	'centralnotice-number-uses' => 'Keren gebruikt',
	'centralnotice-settings' => 'Instellingen',
	'centralnotice-edit-template' => 'Sjabloon bewerken',
	'centralnotice-edit-template-summary' => 'Sluit een stuk tekst in met drie accolades, bijvoorbeeld {{{jimo-quote}}}, om de tekst vertaalbaar te maken.',
	'centralnotice-message' => 'Bericht',
	'centralnotice-message-not-set' => 'Het bericht is niet ingesteld',
	'centralnotice-clone' => 'Kopiëren',
	'centralnotice-clone-notice' => 'Een kopie van het sjabloon maken',
	'centralnotice-clone-name' => 'Naam:',
	'centralnotice-preview-all-template-translations' => 'Alle beschikbare vertalingen van het sjabloon bekijken',
	'centralnotice-insert' => 'Invoegen: $1',
	'centralnotice-hide-button' => 'Knop "{{int:centralnotice-shared-hide}}"',
	'centralnotice-collapse-button' => 'Knop "{{int:centralnotice-shared-collapse}}"',
	'centralnotice-expand-button' => 'Knop "{{int:centralnotice-shared-expand}}"',
	'centralnotice-translate-button' => 'Knop "help met vertalen"',
	'centralnotice-donate-button' => 'Knop "doneren"',
	'centralnotice-expanded-banner' => 'Uitgeklapte banner',
	'centralnotice-collapsed-banner' => 'Ingeklapte banner',
	'centralnotice-banner-display' => 'Weergeven voor:',
	'centralnotice-banner-anonymous' => 'Anonieme gebruikers',
	'centralnotice-banner-logged-in' => 'Aangemelde gebruikers',
	'centralnotice-banner-type' => 'Bannertype:',
	'centralnotice-banner-hidable' => 'Statisch/te verbergen',
	'centralnotice-banner-collapsible' => 'In te klappen',
	'centralnotice-geotargeted' => 'Geografische doelen',
	'centralnotice-countries' => 'Landen',
	'centralnotice-allocation' => 'Toewijzing',
	'centralnotice-view-allocation' => 'Bannertoewijzing bekijken',
	'centralnotice-allocation-instructions' => 'Kies de omgeving waarvoor u de bannertoewijzing wilt bekijken:',
	'centralnotice-project-language' => 'Projecttaal',
	'centralnotice-country' => 'Land',
	'centralnotice-no-allocation' => 'Geen banners toegewezen.',
	'centralnotice-allocation-description' => 'Bannertoewijzing voor $1.$2 in $3:',
	'centralnotice-percentage' => 'Percentage',
	'right-centralnotice-admin' => 'Centrale sitenotices beheren',
	'right-centralnotice-translate' => 'Centrale sitenotices vertalen',
	'action-centralnotice-admin' => 'centrale sitenotices beheren',
	'action-centralnotice-translate' => 'centrale sitenotices vertalen',
	'centralnotice-preferred' => 'Voorkeur',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Harald Khan
 */
$messages['nn'] = array(
	'centralnotice' => 'Administrasjon av sentrale merknader',
	'noticetemplate' => 'Mal for sentrale merknader',
	'centralnotice-desc' => 'Legg til ein sentral sidemerknad',
	'centralnotice-summary' => 'Denne modulen lèt deg endra dine noverande sentralmerknader.
Han kan òg bli nytta til å leggja til eller fjerna gamle merknader.',
	'centralnotice-query' => 'Endra noverande merknader',
	'centralnotice-notice-name' => 'Namn på merknad',
	'centralnotice-end-date' => 'Sluttdato',
	'centralnotice-enabled' => 'Aktivert',
	'centralnotice-modify' => 'Utfør',
	'centralnotice-preview' => 'Førehandsvising',
	'centralnotice-add-new' => 'Legg til ein ny sentralmerknad',
	'centralnotice-remove' => 'Fjern',
	'centralnotice-translate-heading' => 'Omsetjing for $1',
	'centralnotice-manage' => 'Handter sentralmerknader',
	'centralnotice-add' => 'Legg til',
	'centralnotice-add-notice' => 'Legg til ein merknad',
	'centralnotice-add-template' => 'Legg til ein mal',
	'centralnotice-show-notices' => 'Syn merknader',
	'centralnotice-list-templates' => 'List opp malar',
	'centralnotice-translations' => 'Omsetjingar',
	'centralnotice-translate-to' => 'Omset til',
	'centralnotice-translate' => 'Omset',
	'centralnotice-english' => 'Engelsk',
	'centralnotice-banner-name' => 'Malnamn',
	'centralnotice-templates' => 'Malar',
	'centralnotice-weight' => 'Vekt',
	'centralnotice-locked' => 'Låst',
	'centralnotice-notices' => 'Merknader',
	'centralnotice-notice-exists' => 'Merknaden finst frå før.
Legg han ikkje til',
	'centralnotice-template-exists' => 'Mal finst frå før.
Legg han ikkje til',
	'centralnotice-notice-doesnt-exist' => 'Merknad finst ikkje. Ingenting å fjerna',
	'centralnotice-template-still-bound' => 'Malen er framleis kopla til ein merknad. Fjernar han ikkje',
	'centralnotice-template-body' => 'Malinnhald:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'År',
	'centralnotice-month' => 'Månad',
	'centralnotice-hours' => 'Time',
	'centralnotice-min' => 'Minutt',
	'centralnotice-project-lang' => 'Prosjektspråk',
	'centralnotice-project-name' => 'Prosjektnamn',
	'centralnotice-start-date' => 'Startdato',
	'centralnotice-start-time' => 'Starttid (UTC)',
	'centralnotice-assigned-templates' => 'Tildelte malar',
	'centralnotice-no-templates' => 'Fann ingen malar. Legg til nokre!',
	'centralnotice-no-templates-assigned' => 'Ingen malar er tildelte meldingar. Legg til nokre!',
	'centralnotice-available-templates' => 'Tilgjengelege malar',
	'centralnotice-template-already-exists' => 'Malen er allereie knytta til ein kampanje Legg han ikkje til',
	'centralnotice-preview-template' => 'Førehandsvis mal',
	'centralnotice-change-lang' => 'Endra omsetjingsspråk',
	'centralnotice-weights' => 'Vekter',
	'centralnotice-notice-is-locked' => 'Merknad er låst. Fjernar ikkje',
	'centralnotice-overlap' => 'Merknaden overlappar tida til ein annan merknad. Legg han ikkje til',
	'centralnotice-invalid-date-range' => 'Ugyldig tidsrom. Oppdaterer ikkje',
	'centralnotice-null-string' => 'Kan ikkje leggja til ein nullstreng. Legg ikkje til',
	'centralnotice-confirm-delete' => 'Er du sikker på at du vil sletta?
Denne handlinga kan ikkje bli omgjort.',
	'centralnotice-no-notices-exist' => 'Ingen merknader finst. Legg til ein under',
	'centralnotice-no-templates-translate' => 'Det finst ingen malar å endra omsetjingar for',
	'centralnotice-number-uses' => 'Gonger nytta',
	'centralnotice-edit-template' => 'Endra mal',
	'centralnotice-message' => 'Melding',
	'centralnotice-message-not-set' => 'Melding ikkje gjeve',
	'centralnotice-clone' => 'Kopi',
	'centralnotice-clone-notice' => 'Opprett ein kopi av malen',
	'centralnotice-clone-name' => 'Namn:',
	'centralnotice-preview-all-template-translations' => 'Førehandsvis alle tilgjengelege omsetjingar av malen',
	'right-centralnotice-admin' => 'Handtera sentrale merknader',
	'right-centralnotice-translate' => 'Omsetja sentrale merknader',
	'action-centralnotice-admin' => 'handtera sentrale merknader',
	'action-centralnotice-translate' => 'omsetja sentrale merknader',
	'centralnotice-preferred' => 'Føretrukke',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'centralnotice' => 'Administrasjon av sentrale beskjeder',
	'noticetemplate' => 'Mal for sentrale beskjeder',
	'bannerallocation' => 'Administrasjon av sentrale beskjeder',
	'centralnotice-desc' => 'Legger til en sentral sidenotis',
	'centralnotice-summary' => 'Denne modulen lar deg redigere din nåværende sentralmeldinger.
Den kan også bli brukt for å legge til eller fjerne gamle meldinger.',
	'centralnotice-query' => 'Endre nåværende meldinger',
	'centralnotice-notice-name' => 'Meldingsnavn',
	'centralnotice-end-date' => 'Sluttdato',
	'centralnotice-enabled' => 'Aktivert',
	'centralnotice-modify' => 'Lagre',
	'centralnotice-save-banner' => 'Lagre banner',
	'centralnotice-preview' => 'Forhåndsvisning',
	'centralnotice-add-new' => 'Legg til en ny sentralmelding',
	'centralnotice-remove' => 'Fjern',
	'centralnotice-translate-heading' => 'Oversettelse for $1',
	'centralnotice-manage' => 'Håndter sentralemeldinger',
	'centralnotice-manage-templates' => 'Behandle bannere',
	'centralnotice-add' => 'Legg til',
	'centralnotice-add-notice' => 'Legg til en melding',
	'centralnotice-edit-notice' => 'Rediger kampanje',
	'centralnotice-add-template' => 'Legg til en mal',
	'centralnotice-show-notices' => 'Vis meldinger',
	'centralnotice-list-templates' => 'Vis maler',
	'centralnotice-multiple_languages' => 'flere ($1)',
	'centralnotice-translations' => 'Oversettelser',
	'centralnotice-translate-to' => 'Oversett til',
	'centralnotice-translate' => 'Oversett',
	'centralnotice-english' => 'Engelsk',
	'centralnotice-banner-name' => 'Bannernavn:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Maler',
	'centralnotice-weight' => 'Vekt',
	'centralnotice-locked' => 'Låst',
	'centralnotice-notice' => 'Kampanje',
	'centralnotice-notice-heading' => 'Kampanje: $1',
	'centralnotice-notices' => 'Meldinger',
	'centralnotice-notice-exists' => 'Melding eksisterer allerede.
Ikke lagt inn.',
	'centralnotice-no-language' => 'Ingen språk ble valgt for kampanjen. Ikke lagt til.',
	'centralnotice-template-exists' => 'Mal finnes allerede.
Ikke lagt inn',
	'centralnotice-notice-doesnt-exist' => 'Kampanje finnes ikke.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampanje eksisterer ikke.
Ingenting å fjerne.',
	'centralnotice-banner-doesnt-exist' => 'Banner finnes ikke.',
	'centralnotice-template-still-bound' => 'Mal er fortsatt koblet til en melding.
Ikke fjernet',
	'centralnotice-template-body' => 'Malinnhold:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'År',
	'centralnotice-month' => 'Måned',
	'centralnotice-hours' => 'Timer',
	'centralnotice-min' => 'Minutt',
	'centralnotice-project-lang' => 'Prosjektspråk',
	'centralnotice-select' => 'Velg: $1',
	'centralnotice-top-ten-languages' => 'Topp 10 språk',
	'centralnotice-project-name' => 'Prosjektnavn',
	'centralnotice-start-date' => 'Startdato',
	'centralnotice-start-time' => 'Starttid (UTC)',
	'centralnotice-end-time' => 'Sluttid (UTC)',
	'centralnotice-assigned-templates' => 'Tildelte maler',
	'centralnotice-no-templates' => 'Ingen maler funnet.
Legg til noen!',
	'centralnotice-no-templates-assigned' => 'Ingen maler tildelt melding.
Legg til noen!',
	'centralnotice-available-templates' => 'Tilgjengelige maler',
	'centralnotice-template-already-exists' => 'Mal er allerede knyttet til kampanje.
Ikke lagt inn',
	'centralnotice-preview-template' => 'Forhåndsvis mal',
	'centralnotice-change-lang' => 'Endre oversettelsesspråk',
	'centralnotice-weights' => 'Tyngder',
	'centralnotice-notice-is-locked' => 'Melding er låst.
Ikke fjernet',
	'centralnotice-overlap' => 'Melding overlapper tiden til en annen melding.
Ikke lagt inn',
	'centralnotice-invalid-date-range' => 'Ugyldig tidsrom.
Ikke oppdatert',
	'centralnotice-null-string' => 'Kan ikke legge til en nullstreng.
Ikke lagt til',
	'centralnotice-confirm-delete' => 'Er du sikker på at du vil slette denne?
Denne handlingen kan ikke bli omgjort.',
	'centralnotice-no-notices-exist' => 'Ingen notiser finnes.
Legg til en under',
	'centralnotice-no-templates-translate' => 'Det finnes ingen maler å redigere oversettelser for',
	'centralnotice-number-uses' => 'Anvendelser',
	'centralnotice-settings' => 'Innstillinger',
	'centralnotice-edit-template' => 'Rediger mal',
	'centralnotice-edit-template-summary' => 'For å opprette en lokaliserbar melding, legg ved en bindestreks-streng inni tre krøllparanteser, for eksempel {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Melding',
	'centralnotice-message-not-set' => 'Melding ikke satt',
	'centralnotice-clone' => 'Klon',
	'centralnotice-clone-notice' => 'Lag en kopi av malen',
	'centralnotice-clone-name' => 'Navn:',
	'centralnotice-preview-all-template-translations' => 'Forhåndsvis alle tilgjengelige oversettelser av malen',
	'centralnotice-insert' => 'Sett inn: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} knapp',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collape}} knapp',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} knapp',
	'centralnotice-translate-button' => 'Hjelp med oversettelse-knapp',
	'centralnotice-donate-button' => 'Doner-knapp',
	'centralnotice-expanded-banner' => 'Utvidet banner',
	'centralnotice-collapsed-banner' => 'Kollapset banner',
	'centralnotice-banner-display' => 'Vis til:',
	'centralnotice-banner-anonymous' => 'Anonyme brukere',
	'centralnotice-banner-logged-in' => 'Innloggede brukere',
	'centralnotice-banner-type' => 'Banner type:',
	'centralnotice-banner-hidable' => 'Statisk/skjulbar',
	'centralnotice-banner-collapsible' => 'Sammenleggbar',
	'centralnotice-countries' => 'Land',
	'centralnotice-allocation' => 'Tildeling',
	'right-centralnotice-admin' => 'Håndtere sentrale meldinger',
	'right-centralnotice-translate' => 'Oversett sentrale meldinger',
	'action-centralnotice-admin' => 'administrere sentrale meldinger',
	'action-centralnotice-translate' => 'oversette sentrale meldinger',
	'centralnotice-preferred' => 'Foretrukket',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'centralnotice' => 'Administracion de las notificacions centralas',
	'noticetemplate' => 'Modèls de las notificacions centralas',
	'centralnotice-desc' => 'Apond un sitenotice central',
	'centralnotice-summary' => 'Aqueste modul vos permet de modificar vòstres paramètres de las notificacions centralas.',
	'centralnotice-query' => 'Modificar las notificacions actualas',
	'centralnotice-notice-name' => 'Nom de la notificacion',
	'centralnotice-end-date' => 'Data de fin',
	'centralnotice-enabled' => 'Activat',
	'centralnotice-modify' => 'Sometre',
	'centralnotice-preview' => 'Previsualizacion',
	'centralnotice-add-new' => 'Apondre una notificacion centrala novèla',
	'centralnotice-remove' => 'Suprimir',
	'centralnotice-translate-heading' => 'Traduccion de $1',
	'centralnotice-manage' => 'Gerir las notificacions centralas',
	'centralnotice-add' => 'Apondre',
	'centralnotice-add-notice' => 'Apondre una notificacion',
	'centralnotice-add-template' => 'Apondre un modèl',
	'centralnotice-show-notices' => 'Afichar las notificacions',
	'centralnotice-list-templates' => 'Listar los modèls',
	'centralnotice-translations' => 'Traduccions',
	'centralnotice-translate-to' => 'Traduire en',
	'centralnotice-translate' => 'Traduire',
	'centralnotice-english' => 'Anglés',
	'centralnotice-banner-name' => 'Nom del modèl',
	'centralnotice-templates' => 'Modèls',
	'centralnotice-weight' => 'Pes',
	'centralnotice-locked' => 'Varrolhat',
	'centralnotice-notices' => 'Notificacions',
	'centralnotice-notice-exists' => 'La notificacion existís ja.
Es pas estada aponduda.',
	'centralnotice-template-exists' => 'Lo modèl existís ja.
Es pas estat apondut.',
	'centralnotice-notice-doesnt-exist' => 'La notificacion existís pas.
I a pas res de suprimir.',
	'centralnotice-template-still-bound' => 'Lo modèl es encara religat a una notificacion.
Es pas estat suprimit.',
	'centralnotice-template-body' => 'Còs del modèl :',
	'centralnotice-day' => 'Jorn',
	'centralnotice-year' => 'Annada',
	'centralnotice-month' => 'Mes',
	'centralnotice-hours' => 'Ora',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Lenga del projècte',
	'centralnotice-project-name' => 'Nom del projècte',
	'centralnotice-start-date' => 'Data de començament',
	'centralnotice-start-time' => 'Ora de començament (UTC)',
	'centralnotice-assigned-templates' => 'Modèls assignats',
	'centralnotice-no-templates' => 'I a pas de modèl dins lo sistèma.
Apondètz-ne un !',
	'centralnotice-no-templates-assigned' => 'Pas cap de modèl assignat a la notificacion.
Apondètz-ne un !',
	'centralnotice-available-templates' => 'Modèls disponibles',
	'centralnotice-template-already-exists' => "Lo modèl je es estacat a una campanha.
D'apondre pas",
	'centralnotice-preview-template' => 'Previsualizacion del modèl',
	'centralnotice-change-lang' => 'Modificar la lenga de traduccion',
	'centralnotice-weights' => 'Pes',
	'centralnotice-notice-is-locked' => 'La notificacion es varrolhada.
Es pas estada suprimida.',
	'centralnotice-overlap' => "Notificacion que s’imbrica dins lo temps d’una autra.
D'apondre pas.",
	'centralnotice-invalid-date-range' => 'Triada de data incorrècta.
De metre pas a jorn.',
	'centralnotice-null-string' => "Pòt pas apondre una cadena nulla.
D'apondre pas.",
	'centralnotice-confirm-delete' => 'Sètz segur(a) que volètz suprimir aqueste article ?
Aquesta accion poirà pas pus èsser recuperada.',
	'centralnotice-no-notices-exist' => 'Cap de notificacion existís pas.
Apondètz-ne una en dejós.',
	'centralnotice-no-templates-translate' => 'I a pas cap de modèl de traduire',
	'centralnotice-number-uses' => 'Utilizaires',
	'centralnotice-edit-template' => 'Modificar lo modèl',
	'centralnotice-message' => 'Messatge',
	'centralnotice-message-not-set' => 'Messatge pas entresenhat',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => "Crear una còpia d'aqueste modèl",
	'centralnotice-preview-all-template-translations' => "Previsualizar totas las traduccions d'aqueste modèl",
	'right-centralnotice-admin' => 'Gerís las notificacions centralas',
	'right-centralnotice-translate' => 'Traduire las notificacions centralas',
	'action-centralnotice-admin' => 'gerir las notificacions centralas',
	'action-centralnotice-translate' => 'traduire las notificacions centralas',
	'centralnotice-preferred' => 'Preferit',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'centralnotice-preview' => 'Разæркаст',
	'centralnotice-translations' => 'Тæлмацтæ',
	'centralnotice-year' => 'Аз',
	'centralnotice-project-lang' => 'Проекты æвзаг',
	'centralnotice-project-name' => 'Проекты ном',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'centralnotice-preview' => 'Aagucke',
	'centralnotice-add' => 'Dezu duh',
	'centralnotice-list-templates' => 'Lischt vun Moddle',
	'centralnotice-translations' => 'Iwwersetzinge',
	'centralnotice-translate-to' => 'Iwwersetze in',
	'centralnotice-translate' => 'Iwwersetze',
	'centralnotice-english' => 'Englisch',
	'centralnotice-templates' => 'Moddle',
	'centralnotice-day' => 'Daag',
	'centralnotice-year' => 'Yaahr',
	'centralnotice-month' => 'Munet',
	'centralnotice-hours' => 'Schtund',
);

/** Polish (Polski)
 * @author Derbeth
 * @author Leinad
 * @author Maikking
 * @author Qblik
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'centralnotice' => 'Administrowanie wspólnymi komunikatami',
	'noticetemplate' => 'Zarządzanie wspólnymi komunikatami',
	'bannerallocation' => 'Zarządzanie wspólnymi komunikatami',
	'centralnotice-desc' => 'Dodaje wspólny komunikat dla serwisów',
	'centralnotice-summary' => 'Ten moduł pozwala zmieniać bieżące ustawienia wspólnych komunikatów.
Można także dodawać i usuwać komunikaty.',
	'centralnotice-query' => 'Modyfikuj bieżący komunikat',
	'centralnotice-notice-name' => 'Nazwa komunikatu',
	'centralnotice-end-date' => 'Data zakończenia',
	'centralnotice-enabled' => 'Włączony',
	'centralnotice-modify' => 'Zapisz',
	'centralnotice-save-banner' => 'Zapisz baner',
	'centralnotice-preview' => 'Podgląd',
	'centralnotice-add-new' => 'Dodaj nowy wspólny komunikat',
	'centralnotice-remove' => 'Usuń',
	'centralnotice-translate-heading' => 'Tłumaczenie dla $1',
	'centralnotice-manage' => 'Zarządzaj wspólnymi komunikatami',
	'centralnotice-manage-templates' => 'Zarządzanie banerami',
	'centralnotice-add' => 'Dodaj',
	'centralnotice-add-notice' => 'Dodaj komunikat',
	'centralnotice-edit-notice' => 'Edycja kampanii',
	'centralnotice-add-template' => 'Dodaj szablon',
	'centralnotice-show-notices' => 'Pokaż komunikaty',
	'centralnotice-list-templates' => 'Lista szablonów',
	'centralnotice-multiple_languages' => 'wiele ($1)',
	'centralnotice-translations' => 'Tłumaczenia',
	'centralnotice-translate-to' => 'Przetłumacz na',
	'centralnotice-translate' => 'Przetłumacz',
	'centralnotice-english' => 'Angielski',
	'centralnotice-banner-name' => 'Nazwa banera',
	'centralnotice-banner' => 'Baner',
	'centralnotice-banner-heading' => 'Baner – $1',
	'centralnotice-templates' => 'Banery',
	'centralnotice-weight' => 'Waga',
	'centralnotice-locked' => 'Zablokowany',
	'centralnotice-notice' => 'Kampania',
	'centralnotice-notice-heading' => 'Kampania – $1',
	'centralnotice-notices' => 'Komunikaty',
	'centralnotice-notice-exists' => 'Komunikat o podanej nazwie już istnieje. Nowy komunikat nie został dodany.',
	'centralnotice-no-language' => 'Ponieważ nie wybrano języka kampanii, nie została ona dodana.',
	'centralnotice-template-exists' => 'Szablon o podanej nazwie już istnieje. Nowy szablon nie został dodany.',
	'centralnotice-notice-doesnt-exist' => 'Kampania nie istnieje.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampania nie istnieje. 
Usunięcie jest niemożliwe.',
	'centralnotice-banner-doesnt-exist' => 'Baner nie istnieje.',
	'centralnotice-template-still-bound' => 'Szablon nie może zostać usunięty. Jest ciągle używany przez komunikat.',
	'centralnotice-template-body' => 'Treść szablonu:',
	'centralnotice-day' => 'Dzień',
	'centralnotice-year' => 'Rok',
	'centralnotice-month' => 'Miesiąc',
	'centralnotice-hours' => 'Godzina',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Język projektu',
	'centralnotice-select' => 'Wybierz: $1',
	'centralnotice-top-ten-languages' => '10 najważniejszych języków',
	'centralnotice-project-name' => 'Nazwa projektu',
	'centralnotice-start-date' => 'Data rozpoczęcia',
	'centralnotice-start-time' => 'Czas rozpoczęcia (UTC)',
	'centralnotice-end-time' => 'Czas zakończenia (UTC)',
	'centralnotice-assigned-templates' => 'Dołączone szablony',
	'centralnotice-no-templates' => 'Brak szablonów w bazie modułu',
	'centralnotice-no-templates-assigned' => 'Nie dołączono szablonów do komunikatu.
Dodaj jakiś szablon!',
	'centralnotice-available-templates' => 'Dostępne szablony',
	'centralnotice-template-already-exists' => 'Szablon nie został dodany.
Jest już wykorzystany w kampani.',
	'centralnotice-preview-template' => 'Podgląd szablonu',
	'centralnotice-change-lang' => 'Zmień język tłumaczenia',
	'centralnotice-weights' => 'Wagi',
	'centralnotice-notice-is-locked' => 'Komunikat nie może zostać usunięty, ponieważ jest zablokowany.',
	'centralnotice-overlap' => 'Czas komunikatu pokrywa się z czasem innego komunikatu. Nowy komunikat nie został dodany.',
	'centralnotice-invalid-date-range' => 'Nieprawidłowy przedział pomiędzy datą rozpoczęcia a zakończenia.
Komunikat nie został zaktualizowany.',
	'centralnotice-null-string' => 'Nie można dodać pustej zawartości.',
	'centralnotice-confirm-delete' => 'Czy jesteś pewien, że chcesz usunąć ten element?
Działanie to będzie nieodwracalne.',
	'centralnotice-no-notices-exist' => 'Brak komunikatów.
Dodaj nowy poniżej.',
	'centralnotice-no-templates-translate' => 'Nie ma żadnych szablonów do zmiany tłumaczeń dla',
	'centralnotice-number-uses' => 'Zastosowania',
	'centralnotice-settings' => 'Ustawienia',
	'centralnotice-edit-template' => 'Edycja szablonu',
	'centralnotice-edit-template-summary' => 'Lokalizowalny komunikat należy tworzyć poprzez zapisanie ciągu znaków rozdzielanych znakiem odejmowania w trzech nawiasach klamrowych, np {{{cytat-jimbo}}}.',
	'centralnotice-message' => 'Wiadomość',
	'centralnotice-message-not-set' => 'Wiadomość nie jest ustawiona',
	'centralnotice-clone' => 'Kopia',
	'centralnotice-clone-notice' => 'Utwórz kopię szablonu',
	'centralnotice-clone-name' => 'Nazwa',
	'centralnotice-preview-all-template-translations' => 'Zobacz wszystkie dostępne tłumaczenia szablonu',
	'centralnotice-insert' => 'Wstaw: $1',
	'centralnotice-hide-button' => 'Przycisk „{{int:centralnotice-shared-hide}}”',
	'centralnotice-collapse-button' => 'Przycisk „{{int:centralnotice-shared-collapse}}”',
	'centralnotice-expand-button' => 'Przycisk „{{int:centralnotice-shared-expand}}”',
	'centralnotice-translate-button' => 'Przycisk „Pomóż w tłumaczeniu”',
	'centralnotice-donate-button' => 'Przycisk „Wspomóż”',
	'centralnotice-expanded-banner' => 'Rozwinięty baner',
	'centralnotice-collapsed-banner' => 'Zwinięty baner',
	'centralnotice-banner-display' => 'Wyświetlaj',
	'centralnotice-banner-anonymous' => 'użytkownikom anonimowym',
	'centralnotice-banner-logged-in' => 'użytkownikom zalogowanym',
	'centralnotice-banner-type' => 'Typ banera:',
	'centralnotice-banner-hidable' => 'Statyczny czy ukrywalny',
	'centralnotice-banner-collapsible' => 'Zwijalny',
	'centralnotice-geotargeted' => 'Geograficznie nakierowane',
	'centralnotice-countries' => 'Kraje',
	'centralnotice-allocation' => 'Przydział',
	'centralnotice-view-allocation' => 'Zobacz przydziały dla banera',
	'centralnotice-allocation-instructions' => 'Określ środowisko, w którym chcesz zobaczyć baner',
	'centralnotice-project-language' => 'Język projektu',
	'centralnotice-country' => 'Kraj',
	'centralnotice-no-allocation' => 'Brak przypisanych banerów.',
	'centralnotice-allocation-description' => 'Przydział banera dla $1.$2 w $3:',
	'centralnotice-percentage' => 'Procentowo',
	'right-centralnotice-admin' => 'Zarządzanie wspólnymi komunikatami',
	'right-centralnotice-translate' => 'Tłumaczenie wspólnych dla projektów ogłoszeń',
	'action-centralnotice-admin' => 'zarządzaj centralnymi komunikatami',
	'action-centralnotice-translate' => 'przetłumacz centralne komunikaty',
	'centralnotice-preferred' => 'Preferowany',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'centralnotice' => 'Aministrassion sentral ëd le neuve',
	'noticetemplate' => 'Aministrassion sentral ëd le neuve',
	'bannerallocation' => 'Aministrassion sentral ëd le neuve',
	'centralnotice-desc' => 'A gionta na Neuva Sentral dël sit',
	'centralnotice-summary' => 'Sto mòdol-sì a-j përmët ëd modifiché soe Neuve Sentraj ampostà al moment.
A peul ëdcò esse dovrà për gionté o gavé notissie veje.',
	'centralnotice-query' => 'Modìfica le neuve corente',
	'centralnotice-notice-name' => 'Nòm ëd la neuva',
	'centralnotice-end-date' => 'Data fin',
	'centralnotice-enabled' => 'Abilità',
	'centralnotice-modify' => 'Spediss',
	'centralnotice-save-banner' => 'Salvé ël tilèt',
	'centralnotice-preview' => 'Previsualisassion',
	'centralnotice-add-new' => 'Gionta na Neuva Sentral neuva',
	'centralnotice-remove' => 'Gava',
	'centralnotice-translate-heading' => 'Tradussion për $1',
	'centralnotice-manage' => 'Gestiss neuva sentral',
	'centralnotice-manage-templates' => 'Gestì ij tilet',
	'centralnotice-add' => 'Gionta',
	'centralnotice-add-notice' => 'Gionta na neuva',
	'centralnotice-edit-notice' => 'Modifiché la campagna',
	'centralnotice-add-template' => 'Gionta në stamp',
	'centralnotice-show-notices' => 'Mostra neuva',
	'centralnotice-list-templates' => 'Lista stamp',
	'centralnotice-multiple_languages' => 'mùltipl ($1)',
	'centralnotice-translations' => 'Tradussion',
	'centralnotice-translate-to' => 'Volté an',
	'centralnotice-translate' => 'Volté',
	'centralnotice-english' => 'Anglèis',
	'centralnotice-banner-name' => 'Nòm dël tilèt:',
	'centralnotice-banner' => 'Tilèt',
	'centralnotice-banner-heading' => 'Tilèt: $1',
	'centralnotice-templates' => 'Stamp',
	'centralnotice-weight' => 'Pèis',
	'centralnotice-locked' => 'Blocà',
	'centralnotice-notice' => 'Campagna',
	'centralnotice-notice-heading' => 'Campagna: $1',
	'centralnotice-notices' => 'Neuve',
	'centralnotice-notice-exists' => 'La neuva a esist già.
Pa giontà',
	'centralnotice-no-language' => "Gnun-a lenga a l'é stàita selessionà për la campagna. Pa giontà.",
	'centralnotice-template-exists' => 'Lë stamp a esist già.
Pa giontà',
	'centralnotice-notice-doesnt-exist' => 'La campagna a esist pa.',
	'centralnotice-remove-notice-doesnt-exist' => 'La campagna a esist pa.
Pa gnente da gavé.',
	'centralnotice-banner-doesnt-exist' => 'Ël tilèt a esist pa.',
	'centralnotice-template-still-bound' => "Lë stamp a l'é ancó gropà a na neuva.
Pa gavà.",
	'centralnotice-template-body' => 'Còrp ëd lë stamp:',
	'centralnotice-day' => 'Di',
	'centralnotice-year' => 'Ann',
	'centralnotice-month' => 'Mèis',
	'centralnotice-hours' => 'Ora',
	'centralnotice-min' => 'Minuta',
	'centralnotice-project-lang' => 'Lenga dël proget',
	'centralnotice-select' => 'Selessioné: $1',
	'centralnotice-top-ten-languages' => 'Prime 10 lenghe',
	'centralnotice-project-name' => 'Nòm dël proget',
	'centralnotice-start-date' => "Data d'inissi",
	'centralnotice-start-time' => "Ora d'inissi (UTC)",
	'centralnotice-end-time' => 'Ora ëd fin (UTC)',
	'centralnotice-assigned-templates' => 'Stamp assignà',
	'centralnotice-no-templates' => 'Pa gnun stamp trovà.
Giontne un!',
	'centralnotice-no-templates-assigned' => 'Pa gnun stamp assignà a la neuva.
Giontne un!',
	'centralnotice-available-templates' => 'Stamp disponìbij',
	'centralnotice-template-already-exists' => "Lë stamp a l'é già gropà a na campagna.
Pa giontà",
	'centralnotice-preview-template' => 'Previsualisassion stamp',
	'centralnotice-change-lang' => 'Cangé lenga ëd tradussion',
	'centralnotice-weights' => 'Pèis',
	'centralnotice-notice-is-locked' => 'Neuva blocà.
Pa gavà',
	'centralnotice-overlap' => "La neuva a coata la durà ëd n'àutra neuva.
Pa giontà",
	'centralnotice-invalid-date-range' => 'Antërval ëd date pa bon.
Pa modificà',
	'centralnotice-null-string' => 'A peul pa gionté na stringa veuida.
Pa giontà',
	'centralnotice-confirm-delete' => "É-lo sigur ëd vorèj scancelé sto element-sì?
St'assion a podrà pa esse arcuperà.",
	'centralnotice-no-notices-exist' => "A-i son gnun-e neuve.
Ch'a na gionta un-a sì-sota.",
	'centralnotice-no-templates-translate' => 'A-i é gnun ëstamp dont modifiché la tradussion',
	'centralnotice-number-uses' => 'Usagi',
	'centralnotice-settings' => 'Regolassion',
	'centralnotice-edit-template' => 'Modìfica stamp',
	'centralnotice-edit-template-summary' => 'Për creé un mëssagi localisàbil, sara na stringa con tratin ant tre paréntesi grafe, p.e. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Mëssagi',
	'centralnotice-message-not-set' => 'Mëssagi pa ampostà',
	'centralnotice-clone' => 'Clon-a',
	'centralnotice-clone-notice' => 'Crea na còpia ëd lë stamp',
	'centralnotice-clone-name' => 'Nòm:',
	'centralnotice-preview-all-template-translations' => 'Previsualisa tute le tradussion disponìbij ëd lë stamp',
	'centralnotice-insert' => 'Anserì: $1',
	'centralnotice-hide-button' => 'Boton {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Boton {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Boton {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Boton për giuté a volté',
	'centralnotice-donate-button' => "Boton për fé dj'oferte",
	'centralnotice-expanded-banner' => 'Tilèt ëslargà',
	'centralnotice-collapsed-banner' => 'Tilèt ëstrenzù',
	'centralnotice-banner-display' => 'Smon-e a :',
	'centralnotice-banner-anonymous' => 'Utent anònim',
	'centralnotice-banner-logged-in' => 'Utent intrà ant ël sistema',
	'centralnotice-banner-type' => 'Sòrt ëd tilèt:',
	'centralnotice-banner-hidable' => 'Stàtich/Stërmàbil',
	'centralnotice-banner-collapsible' => 'Strenzìbil',
	'centralnotice-geotargeted' => 'Geotargeted',
	'centralnotice-countries' => 'Pais',
	'centralnotice-allocation' => 'Alocassion',
	'centralnotice-view-allocation' => 'Varda alocassin ëd la bara',
	'centralnotice-allocation-instructions' => "Sern l'ambient dont at piaserìa vëdde l'alocassion ëd la bara për:",
	'centralnotice-project-language' => 'Lenga dël proget',
	'centralnotice-country' => 'Nassion',
	'centralnotice-no-allocation' => 'Pa gnun-e bare alocà',
	'centralnotice-allocation-description' => 'Alocassion ëd la bara për $1.$2 an $3:',
	'centralnotice-percentage' => 'Përsentual',
	'right-centralnotice-admin' => 'Gestì le neuve sentraj',
	'right-centralnotice-translate' => 'Volté le neuve sentraj',
	'action-centralnotice-admin' => 'gestì le neuve sentraj',
	'action-centralnotice-translate' => 'volté le neuve sentraj',
	'centralnotice-preferred' => 'Mè gust',
);

/** Pontic (Ποντιακά)
 * @author Omnipaedista
 */
$messages['pnt'] = array(
	'centralnotice-english' => "Σ' αγγλικά",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'centralnotice-desc' => 'يو مرکزي ويبځی-يادښت ورګډول',
	'centralnotice-end-date' => 'د پای نېټه',
	'centralnotice-modify' => 'سپارل',
	'centralnotice-preview' => 'مخکتنه',
	'centralnotice-translate-heading' => 'د $1 لپاره ژباړه',
	'centralnotice-add' => 'ورګډول',
	'centralnotice-add-template' => 'يوه کينډۍ ورګډول',
	'centralnotice-translations' => 'ژباړې',
	'centralnotice-translate' => 'ژباړل',
	'centralnotice-english' => 'انګرېزي',
	'centralnotice-banner-name' => 'د کينډۍ نوم',
	'centralnotice-templates' => 'کينډۍ',
	'centralnotice-day' => 'ورځ',
	'centralnotice-year' => 'کال',
	'centralnotice-month' => 'مياشت',
	'centralnotice-hours' => 'ساعت',
	'centralnotice-min' => 'دقيقه',
	'centralnotice-project-lang' => 'د ژبې پروژه',
	'centralnotice-project-name' => 'د پروژې نوم',
	'centralnotice-start-date' => 'د پيل نېټه',
	'centralnotice-start-time' => 'د پيل وخت (UTC)',
	'centralnotice-available-templates' => 'شته کينډۍ',
	'centralnotice-change-lang' => 'د ژباړې ژبه بدلول',
	'centralnotice-number-uses' => 'کاروي',
	'centralnotice-message' => 'پيغام',
	'centralnotice-clone-name' => 'نوم',
);

/** Portuguese (Português)
 * @author Crazymadlover
 * @author Giro720
 * @author Hamilton Abreu
 * @author Malafaya
 */
$messages['pt'] = array(
	'centralnotice' => 'Administração de avisos centralizados',
	'noticetemplate' => 'Administração de avisos centralizados',
	'bannerallocation' => 'Administração de avisos centralizados',
	'centralnotice-desc' => 'Adiciona um aviso centralizado',
	'centralnotice-summary' => 'Este módulo permite-lhe editar os avisos centralizados configurados.
Pode também ser usado para adicionar novos ou remover antigos.',
	'centralnotice-query' => 'Modificar avisos actuais',
	'centralnotice-notice-name' => 'Nome do aviso',
	'centralnotice-end-date' => 'Data de fim',
	'centralnotice-enabled' => 'Activo',
	'centralnotice-modify' => 'Submeter',
	'centralnotice-save-banner' => 'Gravar modelo',
	'centralnotice-preview' => 'Antevisão',
	'centralnotice-add-new' => 'Adicionar um aviso centralizado',
	'centralnotice-remove' => 'Remover',
	'centralnotice-translate-heading' => 'Tradução para $1',
	'centralnotice-manage' => 'Gerir avisos centralizados',
	'centralnotice-manage-templates' => 'Administrar modelos',
	'centralnotice-add' => 'Adicionar',
	'centralnotice-add-notice' => 'Adicionar um aviso',
	'centralnotice-edit-notice' => 'Editar aviso',
	'centralnotice-add-template' => 'Adicionar um modelo',
	'centralnotice-show-notices' => 'Mostrar avisos',
	'centralnotice-list-templates' => 'Listar modelos',
	'centralnotice-multiple_languages' => 'múltiplas ($1)',
	'centralnotice-translations' => 'Traduções',
	'centralnotice-translate-to' => 'Traduzir para',
	'centralnotice-translate' => 'Traduzir',
	'centralnotice-english' => 'Inglês',
	'centralnotice-banner-name' => 'Nome do modelo:',
	'centralnotice-banner' => 'Modelo',
	'centralnotice-banner-heading' => 'Modelo: $1',
	'centralnotice-templates' => 'Modelos',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Bloqueado',
	'centralnotice-notice' => 'Aviso',
	'centralnotice-notice-heading' => 'Aviso centralizado: $1',
	'centralnotice-notices' => 'Avisos',
	'centralnotice-notice-exists' => 'O aviso já existe.
Não será adicionado.',
	'centralnotice-no-language' => 'Não foi seleccionada uma língua para o aviso centralizado. O aviso não será adicionado.',
	'centralnotice-template-exists' => 'O modelo já existe.
Não será adicionado.',
	'centralnotice-notice-doesnt-exist' => 'O aviso não existe.',
	'centralnotice-remove-notice-doesnt-exist' => 'O aviso não existe.
Não há nada para remover.',
	'centralnotice-banner-doesnt-exist' => 'O modelo não existe.',
	'centralnotice-template-still-bound' => 'O modelo ainda está ligado a um aviso.
Não será removido.',
	'centralnotice-template-body' => 'Conteúdo do modelo:',
	'centralnotice-day' => 'Dia',
	'centralnotice-year' => 'Ano',
	'centralnotice-month' => 'Mês',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Língua do projecto',
	'centralnotice-select' => 'Seleccionar: $1',
	'centralnotice-top-ten-languages' => 'As 10 línguas de topo',
	'centralnotice-project-name' => 'Nome do projecto',
	'centralnotice-start-date' => 'Data de início',
	'centralnotice-start-time' => 'Hora de início (UTC)',
	'centralnotice-end-time' => 'Hora de fim (UTC)',
	'centralnotice-assigned-templates' => 'Modelos atribuídos',
	'centralnotice-no-templates' => 'Não foi encontrado nenhum modelo.
Adicione alguns!',
	'centralnotice-no-templates-assigned' => 'Não há nenhum modelo atribuído a um aviso.
Adicione alguns!',
	'centralnotice-available-templates' => 'Modelos disponíveis',
	'centralnotice-template-already-exists' => 'O modelo já está ligado a um aviso.
Não será adicionado.',
	'centralnotice-preview-template' => 'Antever modelo',
	'centralnotice-change-lang' => 'Alterar língua de tradução',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => 'O aviso está bloqueado.
Não será removido.',
	'centralnotice-overlap' => 'O aviso sobrepõe-se no tempo com outro aviso.
Não será adicionado.',
	'centralnotice-invalid-date-range' => 'Intervalo de datas inválido.
Não será actualizado.',
	'centralnotice-null-string' => 'Não é possível adicionar um texto vazio.
Não será adicionado.',
	'centralnotice-confirm-delete' => 'Tem a certeza de que pretende eliminar este item?
Esta acção será irreversível.',
	'centralnotice-no-notices-exist' => 'Não existe nenhum aviso.
Adicione um, abaixo.',
	'centralnotice-no-templates-translate' => 'Não há quaisquer modelos para os quais seja possível editar traduções',
	'centralnotice-number-uses' => 'Utilizações',
	'centralnotice-settings' => 'Configurações',
	'centralnotice-edit-template' => 'Editar modelo',
	'centralnotice-edit-template-summary' => 'Para criar uma mensagem localizável, coloque entre três chavetas um texto que contenha um hífen; por exemplo, {{{citar-jimbo}}}.',
	'centralnotice-message' => 'Mensagem',
	'centralnotice-message-not-set' => 'Mensagem não estabelecida',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => 'Criar uma cópia do modelo',
	'centralnotice-clone-name' => 'Nome:',
	'centralnotice-preview-all-template-translations' => 'Antever todas as traduções disponíveis do modelo',
	'centralnotice-insert' => 'Inserir: $1',
	'centralnotice-hide-button' => 'Botão {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Botão {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Botão {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Botão Ajudar a traduzir',
	'centralnotice-donate-button' => 'Botão Donativo',
	'centralnotice-expanded-banner' => 'Modelo expandido',
	'centralnotice-collapsed-banner' => 'Modelo colapsado',
	'centralnotice-banner-display' => 'Apresentar a:',
	'centralnotice-banner-anonymous' => 'Utilizadores anónimos',
	'centralnotice-banner-logged-in' => 'Utilizadores autenticados',
	'centralnotice-banner-type' => 'Tipo de modelo:',
	'centralnotice-banner-hidable' => 'Estático/Ocultável',
	'centralnotice-banner-collapsible' => 'Colapsável',
	'centralnotice-geotargeted' => 'Com segmentação geográfica',
	'centralnotice-countries' => 'Países',
	'centralnotice-allocation' => 'Atribuição',
	'centralnotice-view-allocation' => 'Ver atribuição de modelos',
	'centralnotice-allocation-instructions' => 'Escolha o ambiente para o qual deseja ver a atribuição de modelos:',
	'centralnotice-project-language' => 'Língua do projecto',
	'centralnotice-country' => 'País',
	'centralnotice-no-allocation' => 'Não há modelos atribuídos.',
	'centralnotice-allocation-description' => 'Atribuição de modelos para $1.$2 em $3:',
	'centralnotice-percentage' => 'Percentagem',
	'right-centralnotice-admin' => 'Gerir avisos centralizados',
	'right-centralnotice-translate' => 'Traduzir avisos centralizados',
	'action-centralnotice-admin' => 'gerir avisos centralizados',
	'action-centralnotice-translate' => 'traduzir avisos centralizados',
	'centralnotice-preferred' => 'Preferido',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author Heldergeovane
 */
$messages['pt-br'] = array(
	'centralnotice' => 'Administração de aviso centralizado',
	'noticetemplate' => 'Administração de avisos centralizados',
	'bannerallocation' => 'Administração de avisos centralizados',
	'centralnotice-desc' => 'Adiciona um aviso do sítio centralizado',
	'centralnotice-summary' => 'Este módulo permite-lhe editar os seus avisos centralizados atualmente configurados.
Pode também ser usado para adicionar ou remover avisos antigos.',
	'centralnotice-query' => 'Modificar avisos atuais',
	'centralnotice-notice-name' => 'Nome do aviso',
	'centralnotice-end-date' => 'Data de fim',
	'centralnotice-enabled' => 'Ativo',
	'centralnotice-modify' => 'Enviar',
	'centralnotice-save-banner' => 'Salvar modelo',
	'centralnotice-preview' => 'Pré-visualização',
	'centralnotice-add-new' => 'Adicionar um novo aviso centralizado',
	'centralnotice-remove' => 'Remover',
	'centralnotice-translate-heading' => 'Tradução de $1',
	'centralnotice-manage' => 'Gerenciar aviso centralizado',
	'centralnotice-manage-templates' => 'Administrar modelos',
	'centralnotice-add' => 'Adicionar',
	'centralnotice-add-notice' => 'Adicionar um aviso',
	'centralnotice-edit-notice' => 'Editar aviso',
	'centralnotice-add-template' => 'Adicionar um modelo',
	'centralnotice-show-notices' => 'Mostrar avisos',
	'centralnotice-list-templates' => 'Listar modelos',
	'centralnotice-multiple_languages' => 'múltiplas ($1)',
	'centralnotice-translations' => 'Traduções',
	'centralnotice-translate-to' => 'Traduzir para',
	'centralnotice-translate' => 'Traduzir',
	'centralnotice-english' => 'Inglês',
	'centralnotice-banner-name' => 'Nome do banner:',
	'centralnotice-banner' => 'Banner',
	'centralnotice-banner-heading' => 'Banner: $1',
	'centralnotice-templates' => 'Modelos',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Bloqueado',
	'centralnotice-notice' => 'Campanha',
	'centralnotice-notice-heading' => 'Campanha: $1',
	'centralnotice-notices' => 'Avisos',
	'centralnotice-notice-exists' => 'O aviso já existe.
Não adicionado',
	'centralnotice-no-language' => 'Não foi selecionada uma língua para o aviso centralizado. O aviso não será adicionado.',
	'centralnotice-template-exists' => 'O modelo já existe.
Não adicionado',
	'centralnotice-notice-doesnt-exist' => 'O aviso não existe.',
	'centralnotice-remove-notice-doesnt-exist' => 'O aviso não existe.
Não há nada para remover.',
	'centralnotice-banner-doesnt-exist' => 'O banner não existe.',
	'centralnotice-template-still-bound' => 'O modelo ainda está ligado a um aviso.
Não removido.',
	'centralnotice-template-body' => 'Conteúdo do modelo:',
	'centralnotice-day' => 'Dia',
	'centralnotice-year' => 'Ano',
	'centralnotice-month' => 'Mês',
	'centralnotice-hours' => 'Hora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Língua do projeto',
	'centralnotice-select' => 'Seleccionar: $1',
	'centralnotice-top-ten-languages' => 'As 10 línguas mais usadas',
	'centralnotice-project-name' => 'Nome do projeto',
	'centralnotice-start-date' => 'Data início',
	'centralnotice-start-time' => 'Hora início (UTC)',
	'centralnotice-end-time' => 'Hora de fim (UTC)',
	'centralnotice-assigned-templates' => 'Modelos atribuídos',
	'centralnotice-no-templates' => 'Nenhum modelo encontrado.
Adicione alguns!',
	'centralnotice-no-templates-assigned' => 'Nenhum modelo atribuído a avisos.
Adicione alguns!',
	'centralnotice-available-templates' => 'Modelos disponíveis',
	'centralnotice-template-already-exists' => 'O modelo já está ligado a campanha.
Não adicionado',
	'centralnotice-preview-template' => 'Prever modelo',
	'centralnotice-change-lang' => 'Alterar língua de tradução',
	'centralnotice-weights' => 'Pesos',
	'centralnotice-notice-is-locked' => 'O aviso está bloqueado.
Não removido',
	'centralnotice-overlap' => 'O aviso sobrepõe-se no tempo com outro aviso.
Não adicionado',
	'centralnotice-invalid-date-range' => 'Intervalo de datas inválido.
Não atualizado',
	'centralnotice-null-string' => 'Não é possível adicionar uma cadeia de caracteres nula.
Não adicionado',
	'centralnotice-confirm-delete' => 'Tem a certeza de que pretende eliminar este item?
Esta ação será irreversível.',
	'centralnotice-no-notices-exist' => 'Não existe nenhum aviso.
Adicione um abaixo',
	'centralnotice-no-templates-translate' => 'Não há quaisquer modelos para os quais seja possível editar traduções',
	'centralnotice-number-uses' => 'Utilizações',
	'centralnotice-settings' => 'Configurações',
	'centralnotice-edit-template' => 'Editar modelo',
	'centralnotice-edit-template-summary' => 'Para criar uma mensagem localizável, coloque entre três chaves um texto que contenha um hífen; por exemplo, {{{texto-citado}}}.',
	'centralnotice-message' => 'Mensagem',
	'centralnotice-message-not-set' => 'Mensagem não estabelecida',
	'centralnotice-clone' => 'Clonar',
	'centralnotice-clone-notice' => 'Criar uma cópia do modelo',
	'centralnotice-clone-name' => 'Nome:',
	'centralnotice-preview-all-template-translations' => 'Prever todas as traduções disponíveis do modelo',
	'centralnotice-insert' => 'Inserir: $1',
	'centralnotice-hide-button' => 'Botão {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Botão {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Botão {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Botão Ajudar a traduzir',
	'centralnotice-donate-button' => 'Botão Donativo',
	'centralnotice-expanded-banner' => 'Modelo expandido',
	'centralnotice-collapsed-banner' => 'Modelo colapsado',
	'centralnotice-banner-display' => 'Apresentar a:',
	'centralnotice-banner-anonymous' => 'Usuários anônimos',
	'centralnotice-banner-logged-in' => 'Usuários autenticados',
	'centralnotice-banner-type' => 'Tipo de banner:',
	'centralnotice-banner-hidable' => 'Estático/Ocultável',
	'centralnotice-banner-collapsible' => 'Colapsável',
	'centralnotice-geotargeted' => 'Localizado geograficamente',
	'centralnotice-countries' => 'Países',
	'centralnotice-allocation' => 'Atribuição',
	'centralnotice-view-allocation' => 'Ver atribuição de modelos',
	'centralnotice-allocation-instructions' => 'Escolha o ambiente para o qual deseja ver a atribuição de modelos:',
	'centralnotice-project-language' => 'Língua do projeto',
	'centralnotice-country' => 'País',
	'centralnotice-no-allocation' => 'Não há modelos atribuídos.',
	'centralnotice-allocation-description' => 'Atribuição de modelos para $1.$2 em $3:',
	'centralnotice-percentage' => 'Porcentagem',
	'right-centralnotice-admin' => 'Gerenciar avisos centralizados',
	'right-centralnotice-translate' => 'Traduzir avisos centralizados',
	'action-centralnotice-admin' => 'gerenciar avisos centralizados',
	'action-centralnotice-translate' => 'traduzir avisos centralizados',
	'centralnotice-preferred' => 'Preferido',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'centralnotice' => 'Chawpi willay kamachiy',
	'noticetemplate' => 'Chawpi willay plantilla',
	'centralnotice-desc' => 'Tukuy ruraykamaykunapaq chawpi willayta yapan',
	'centralnotice-summary' => "Kay wakina tupuwanqa qampa kachkaq chawpi willayniykikunatam allinchayta atinki.
Paywanmi mawk'a willaykunatapas yapayta icha qichuyta atinki.",
	'centralnotice-query' => 'Kachkaq willaykunata hukchay',
	'centralnotice-notice-name' => 'Willaypa sutin',
	'centralnotice-end-date' => "Tukuna p'unchaw",
	'centralnotice-enabled' => 'Saqillasqa',
	'centralnotice-modify' => 'Kachay',
	'centralnotice-save-banner' => 'Unanchata waqaychay',
	'centralnotice-preview' => 'Ñawpaqta qhawallay',
	'centralnotice-add-new' => 'Musuq chawpi willayta yapay',
	'centralnotice-remove' => 'Qichuy',
	'centralnotice-translate-heading' => "$1-paq t'ikrasqa",
	'centralnotice-manage' => 'Chawpi willayta kamachiy',
	'centralnotice-manage-templates' => 'Unanchakunata kamachiy',
	'centralnotice-add' => 'Yapay',
	'centralnotice-add-notice' => 'Willayta yapay',
	'centralnotice-edit-notice' => "Kampañata llamk'apuy",
	'centralnotice-add-template' => 'Plantillata yapay',
	'centralnotice-show-notices' => 'Willaykunata rikuchiy',
	'centralnotice-list-templates' => 'Plantillakunata sutisuyupi rikuchiy',
	'centralnotice-multiple_languages' => 'imaymana ($1)',
	'centralnotice-translations' => "T'ikrasqakuna",
	'centralnotice-translate-to' => "Kayman t'ikray:",
	'centralnotice-translate' => "T'ikray",
	'centralnotice-english' => 'Inlish simipi',
	'centralnotice-banner-name' => 'Unancha suti:',
	'centralnotice-banner' => 'Unancha',
	'centralnotice-banner-heading' => 'Unancha: $1',
	'centralnotice-templates' => 'Plantillakuna',
	'centralnotice-weight' => 'Llasay',
	'centralnotice-locked' => "Llawiwan wichq'asqa",
	'centralnotice-notice' => 'Kampaña',
	'centralnotice-notice-heading' => 'Kampaña: $1',
	'centralnotice-notices' => 'Willaykuna',
	'centralnotice-notice-exists' => 'Willayqa kachkañam.
Manam yapasqachu',
	'centralnotice-no-language' => 'Manam ima rimaypas akllasqachu kampañapaq. Manam yapasqa kanqachu.',
	'centralnotice-template-exists' => 'Plantillaqa kachkañam.
Manam yapasqachu',
	'centralnotice-notice-doesnt-exist' => 'Kampañaqa manam kanchu.',
	'centralnotice-remove-notice-doesnt-exist' => 'Kampañaqa manam kanchu.
Manam qichunallachu.',
	'centralnotice-banner-doesnt-exist' => 'Unanchaqa manam kanchu.',
	'centralnotice-template-still-bound' => 'Plantillaqa willaymanraqmi watasqa.
Manam qichusqa kanqachu.',
	'centralnotice-template-body' => 'Plantilla kurku:',
	'centralnotice-day' => "P'unchaw",
	'centralnotice-year' => 'Wata',
	'centralnotice-month' => 'Killa',
	'centralnotice-hours' => 'Ura',
	'centralnotice-min' => 'Minutu',
	'centralnotice-project-lang' => 'Ruraykamaypa rimaynin',
	'centralnotice-select' => 'Akllay: $1',
	'centralnotice-top-ten-languages' => 'Ñawpaq 10 rimaykuna',
	'centralnotice-project-name' => 'Ruraykamaypa sutin',
	'centralnotice-start-date' => "Qallarisqanpa p'unchawnin",
	'centralnotice-start-time' => 'Qallarisqanpa pachan (UTC)',
	'centralnotice-assigned-templates' => 'Haypusqa plantillakuna',
	'centralnotice-no-templates' => 'Manam tarisqachu plantillakuna.
Yapay!',
	'centralnotice-no-templates-assigned' => 'Manam kanchu willayman haypusqa plantillakuna.
Yapay!',
	'centralnotice-available-templates' => 'Aypanalla plantillakuna',
	'centralnotice-template-already-exists' => 'Unanchaqa huk kampañamanmi watasqaña.
Mana yapaspa',
	'centralnotice-preview-template' => 'Plantillata ñawpaqta qhawallay',
	'centralnotice-change-lang' => "T'ikrana rimayta hukchay",
	'centralnotice-weights' => 'Llasaykuna',
	'centralnotice-notice-is-locked' => "Willayqa llawiwanmi wichq'asqa.
Manam qullusqa kanqachu",
	'centralnotice-overlap' => "Willayqa huk willaypa pachanwanmi mast'arinakunmi.
Manam yapasqa kanqachu",
	'centralnotice-invalid-date-range' => "P'unchawkunap mit'anqa manam allinchu.
Manam yapasqa kanqachu",
	'centralnotice-null-string' => "Manam atinichu ch'usaq link'uta yapayta.
Manam yapasqa kanqachu",
	'centralnotice-confirm-delete' => 'Allinta yachankichu, kayta qulluyta munaspayki?
Rurarqaspaykiqa, manam kutichiyta atinkichu.',
	'centralnotice-no-notices-exist' => 'Manam kanchu willaykuna.
Kay qatiqpi hukta yapay',
	'centralnotice-no-templates-translate' => "Manam kanchu plantillakuna, imapaqchus t'ikrasqa llamk'apunalla kanman",
	'centralnotice-number-uses' => "Llamk'achin",
	'centralnotice-settings' => 'Churasqakuna',
	'centralnotice-edit-template' => "Plantillata llamk'apuy",
	'centralnotice-edit-template-summary' => "Maypichanalla willayta kamarinaykipaqqa, aspiyuq qillqallata kimsa chhurku wichq'achiqpi wichq'ay, ahinataq {{{jimbo-quote}}}.",
	'centralnotice-message' => 'Willay',
	'centralnotice-message-not-set' => 'Manam kanchu churasqa willay',
	'centralnotice-clone' => 'Iskayllachay',
	'centralnotice-clone-notice' => 'Plantillamanta iskaychasqanta kamariy',
	'centralnotice-clone-name' => 'Suti:',
	'centralnotice-preview-all-template-translations' => "Tukuy aypanalla plantillamanta t'ikrasqakunata ñawpaqta qhawallay",
	'centralnotice-insert' => "Sat'iy: $1",
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} butun',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} butun',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} butun',
	'centralnotice-translate-button' => "T'ikraysiy butun",
	'centralnotice-donate-button' => 'Qaray butun',
	'centralnotice-expanded-banner' => "Mast'arisqa unancha",
	'centralnotice-collapsed-banner' => 'Thuñichisqa unancha',
	'centralnotice-banner-display' => 'Kayman qhawachiy:',
	'centralnotice-banner-anonymous' => 'Sutinnaq ruraqkuna',
	'centralnotice-banner-logged-in' => 'Yaykusqa ruraqkuna',
	'centralnotice-banner-type' => 'Unancha laya:',
	'centralnotice-banner-hidable' => 'Ranuy/Pakana',
	'centralnotice-banner-collapsible' => 'Thuñichina',
	'right-centralnotice-admin' => 'Chawpi willaykunata kamachiy',
	'right-centralnotice-translate' => "Chawpi willaykunata t'ikray",
	'action-centralnotice-admin' => 'chawpi willaykunata kamachiy',
	'action-centralnotice-translate' => "chawpi willaykunata t'ikray",
	'centralnotice-preferred' => 'Astawan munakusqa',
);

/** Romanian (Română)
 * @author Cin
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Mihai
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'centralnotice-desc' => 'Adaugă un anunț central sitului',
	'centralnotice-query' => 'Modifică anunțurile curente',
	'centralnotice-notice-name' => 'Numele anunțului',
	'centralnotice-end-date' => 'Dată de încheiere',
	'centralnotice-enabled' => 'Activat',
	'centralnotice-modify' => 'Trimite',
	'centralnotice-preview' => 'Previzualizare',
	'centralnotice-add-new' => 'Adaugă un anunț central nou',
	'centralnotice-remove' => 'Şterge',
	'centralnotice-translate-heading' => 'Traducere pentru $1',
	'centralnotice-manage' => 'Gestionați anunț central',
	'centralnotice-add' => 'Adaugă',
	'centralnotice-add-notice' => 'Adaugă un anunț',
	'centralnotice-add-template' => 'Adaugă un format',
	'centralnotice-show-notices' => 'Arată anunțurile',
	'centralnotice-list-templates' => 'Lista de formate',
	'centralnotice-translations' => 'Traduceri',
	'centralnotice-translate-to' => 'Tradu în',
	'centralnotice-translate' => 'Tradu',
	'centralnotice-english' => 'engleză',
	'centralnotice-banner-name' => 'Numele formatului',
	'centralnotice-templates' => 'Formate',
	'centralnotice-weight' => 'Greutate',
	'centralnotice-locked' => 'Blocat',
	'centralnotice-notices' => 'Notificări',
	'centralnotice-day' => 'Zi',
	'centralnotice-year' => 'An',
	'centralnotice-month' => 'Lună',
	'centralnotice-hours' => 'Oră',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Limba proiectului',
	'centralnotice-project-name' => 'Numele proiectului',
	'centralnotice-start-date' => 'Data de începere',
	'centralnotice-start-time' => 'Data de începere (UTC)',
	'centralnotice-available-templates' => 'Formate disponibile',
	'centralnotice-preview-template' => 'Previzualizare format',
	'centralnotice-change-lang' => 'Schimbă limba de traducere',
	'centralnotice-weights' => 'Greutăți',
	'centralnotice-edit-template' => 'Modifică format',
	'centralnotice-message' => 'Mesaj',
	'centralnotice-clone' => 'Clonează',
	'centralnotice-clone-notice' => 'Creează o copie a bannerului',
	'right-centralnotice-translate' => 'Traduce anunțurile centrale',
	'action-centralnotice-admin' => 'administrați anunțurile centrale',
	'action-centralnotice-translate' => 'traduceți anunțurile centrale',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'centralnotice-enabled' => 'Abbilitate',
	'centralnotice-preview' => 'Andeprime',
	'centralnotice-remove' => 'Live',
	'centralnotice-add' => 'Aggiunge',
);

/** Russian (Русский)
 * @author Aleksandrit
 * @author Eleferen
 * @author Ferrer
 * @author G0rn
 * @author MaxSem
 * @author Rubin
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'centralnotice' => 'Управление централизованными уведомлениями',
	'noticetemplate' => 'Управление централизованными уведомлениями',
	'bannerallocation' => 'Управление централизованными уведомлениями',
	'centralnotice-desc' => 'Добавляет общее сообщение сайта',
	'centralnotice-summary' => 'Этот модуль позволяет вам изменять ваши текущие централизованные уведомления.
Он также может использоваться для добавления новых и удаления старых уведомлений.',
	'centralnotice-query' => 'Изменить текущее уведомление',
	'centralnotice-notice-name' => 'Название уведомления',
	'centralnotice-end-date' => 'Дата окончания',
	'centralnotice-enabled' => 'Включено',
	'centralnotice-modify' => 'Отправить',
	'centralnotice-save-banner' => 'Сохранить баннер',
	'centralnotice-preview' => 'Предпросмотр',
	'centralnotice-add-new' => 'Добавить новое централизованное уведомление',
	'centralnotice-remove' => 'Удалить',
	'centralnotice-translate-heading' => 'Перевод для $1',
	'centralnotice-manage' => 'Управление централизованными уведомлениями',
	'centralnotice-manage-templates' => 'Управление баннерами',
	'centralnotice-add' => 'Добавить',
	'centralnotice-add-notice' => 'Добавить уведомление',
	'centralnotice-edit-notice' => 'Изменить кампанию',
	'centralnotice-add-template' => 'Добавить шаблон',
	'centralnotice-show-notices' => 'Показать уведомления',
	'centralnotice-list-templates' => 'Вывести список шаблонов',
	'centralnotice-multiple_languages' => 'несколько ($1)',
	'centralnotice-translations' => 'Переводы',
	'centralnotice-translate-to' => 'Перевод на',
	'centralnotice-translate' => 'Перевод',
	'centralnotice-english' => 'английский',
	'centralnotice-banner-name' => 'Название баннера:',
	'centralnotice-banner' => 'Баннер',
	'centralnotice-banner-heading' => 'Баннер: $1',
	'centralnotice-templates' => 'Шаблоны',
	'centralnotice-weight' => 'Ширина',
	'centralnotice-locked' => 'Заблокированный',
	'centralnotice-notice' => 'Кампания',
	'centralnotice-notice-heading' => 'Кампания: $1',
	'centralnotice-notices' => 'уведомления',
	'centralnotice-notice-exists' => 'Уведомление уже существует.
Не добавляется',
	'centralnotice-no-language' => 'Не выбран язык для этой кампании. Не добавлено.',
	'centralnotice-template-exists' => 'Шаблон уже существует.
Не добавляется',
	'centralnotice-notice-doesnt-exist' => 'Кампания не существует.',
	'centralnotice-remove-notice-doesnt-exist' => 'Кампания не существует.
Нечего удалять.',
	'centralnotice-banner-doesnt-exist' => 'Баннер не существует.',
	'centralnotice-template-still-bound' => 'Шаблон по-прежнему связан с уведомлением.
Не удаляется.',
	'centralnotice-template-body' => 'Тело шаблона:',
	'centralnotice-day' => 'День',
	'centralnotice-year' => 'Год',
	'centralnotice-month' => 'Месяц',
	'centralnotice-hours' => 'Час',
	'centralnotice-min' => 'Минута',
	'centralnotice-project-lang' => 'Язык проекта',
	'centralnotice-select' => 'Выборка: $1',
	'centralnotice-top-ten-languages' => '10 языков',
	'centralnotice-project-name' => 'Название проекта',
	'centralnotice-start-date' => 'Дата начала',
	'centralnotice-start-time' => 'Время начала (UTC)',
	'centralnotice-end-time' => 'Время окончания (UTC)',
	'centralnotice-assigned-templates' => 'Установленные шаблоны',
	'centralnotice-no-templates' => 'Не найдено шаблонов.
Добавьте что-нибудь!',
	'centralnotice-no-templates-assigned' => 'Нет связанных с уведомлением шаблонов.
Добавьте какой-нибудь',
	'centralnotice-available-templates' => 'Доступные шаблоны',
	'centralnotice-template-already-exists' => 'Шаблон уже привязан.
Не добавлен',
	'centralnotice-preview-template' => 'Предпросмотр шаблона',
	'centralnotice-change-lang' => 'Изменить язык перевода',
	'centralnotice-weights' => 'Веса',
	'centralnotice-notice-is-locked' => 'Уведомление заблокировано.
Не удаляется',
	'centralnotice-overlap' => 'Уведомление перекрывается по времени с другим уведомлением.
Не добавляется',
	'centralnotice-invalid-date-range' => 'Ошибочный диапазон дат.
Не обновляется',
	'centralnotice-null-string' => 'Невозможно добавить пустую строку.
Не добавляется',
	'centralnotice-confirm-delete' => 'Вы уверены в решении удалить этот элемент?
Это действие нельзя будет отменить.',
	'centralnotice-no-notices-exist' => 'Нет уведомлений.
Можно добавить',
	'centralnotice-no-templates-translate' => 'Нет ни одного шаблона для правки перевода',
	'centralnotice-number-uses' => 'Используются',
	'centralnotice-settings' => 'Настройки',
	'centralnotice-edit-template' => 'Править шаблон',
	'centralnotice-edit-template-summary' => 'Чтобы создать локализуемое сообщение, заключите дефисную строку в три фигурные скобки, например {{{цитата-джимбо}}}.',
	'centralnotice-message' => 'Сообщение',
	'centralnotice-message-not-set' => 'Сообщение не установлено',
	'centralnotice-clone' => 'Клонирование',
	'centralnotice-clone-notice' => 'Создать копию шаблона',
	'centralnotice-clone-name' => 'Имя:',
	'centralnotice-preview-all-template-translations' => 'Просмотреть все доступные переводы шаблона',
	'centralnotice-insert' => 'Вставка: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} кнопку',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} кнопку',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} кнопку',
	'centralnotice-translate-button' => 'Кнопка помощи в переводе',
	'centralnotice-donate-button' => 'Кнопка пожертвований',
	'centralnotice-expanded-banner' => 'Расширенный баннер',
	'centralnotice-collapsed-banner' => 'Сложенный баннер',
	'centralnotice-banner-display' => 'Показывать в:',
	'centralnotice-banner-anonymous' => 'Анонимные участники',
	'centralnotice-banner-logged-in' => 'Пользователи:',
	'centralnotice-banner-type' => 'Тип баннера:',
	'centralnotice-banner-hidable' => 'Статический / Скрываемый',
	'centralnotice-banner-collapsible' => 'Сворачиваемый',
	'centralnotice-geotargeted' => 'Геопривязка',
	'centralnotice-countries' => 'Страны',
	'centralnotice-allocation' => 'Распределение',
	'centralnotice-view-allocation' => 'Просмотр размещения баннеров',
	'centralnotice-allocation-instructions' => 'Выберите среды, для которых вы хотите просмотреть размещение баннеров:',
	'centralnotice-project-language' => 'Язык проекта',
	'centralnotice-country' => 'Страна',
	'centralnotice-no-allocation' => 'Баннеры не размещены',
	'centralnotice-allocation-description' => 'Размещение баннеров для $1.$2 в $3:',
	'centralnotice-percentage' => 'Процент',
	'right-centralnotice-admin' => 'управление централизованными уведомлениями',
	'right-centralnotice-translate' => 'перевод централизованных уведомлений',
	'action-centralnotice-admin' => 'управление централизованными уведомлениями',
	'action-centralnotice-translate' => 'перевод централизованных уведомлений',
	'centralnotice-preferred' => 'Желательно',
);

/** Rusyn (Русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'centralnotice-translations' => 'Переклады',
	'centralnotice-translate-to' => 'Переклад до',
	'centralnotice-translate' => 'Переложыти',
	'centralnotice-english' => 'анґліцькы',
	'centralnotice-banner-name' => 'Назва банера:',
	'centralnotice-banner' => 'Банер',
	'centralnotice-banner-heading' => 'Банер: $1',
	'centralnotice-templates' => 'Шаблоны',
	'centralnotice-weight' => 'Вага',
	'centralnotice-locked' => 'Замкнуто',
	'centralnotice-notice' => 'Кампань',
	'centralnotice-notice-heading' => 'Кампань: $1',
	'centralnotice-notices' => 'Кампанї',
	'centralnotice-notice-exists' => 'Повідомлїня уж екзістує.
Непридане.',
	'centralnotice-no-language' => 'Про кампань не быв выбраный жаден язык. Повідомлїня не было придане.',
	'centralnotice-template-exists' => 'Банер уж екзістує.
Непридане.',
	'centralnotice-notice-doesnt-exist' => 'Кампань не екзістує.',
	'centralnotice-remove-notice-doesnt-exist' => 'Кампань не екзістує.
Не є што одстранити.',
	'centralnotice-banner-doesnt-exist' => 'Банер не екзістує.',
	'centralnotice-template-still-bound' => 'Шаблона є іщі все навязана на повідомлїня. Не буде одстранена.',
	'centralnotice-template-body' => 'Тїло шаблоны:',
	'centralnotice-day' => 'День',
	'centralnotice-year' => 'Рік',
	'centralnotice-month' => 'Місяць',
	'centralnotice-hours' => 'Годины',
	'centralnotice-min' => 'Мінуты',
	'centralnotice-project-lang' => 'Язык проєкту',
	'centralnotice-select' => 'Выбрати: $1',
	'centralnotice-top-ten-languages' => '10 найвекшых языків',
	'centralnotice-project-name' => 'Назва проєкту',
	'centralnotice-start-date' => 'Датум початку',
	'centralnotice-start-time' => 'Час початку (UTC)',
	'centralnotice-end-time' => 'Час кінце (UTC)',
	'centralnotice-assigned-templates' => 'Приряджены шаблоны',
	'centralnotice-no-templates' => 'Ненайдженый ани єден банер.
Придайте даякый!',
	'centralnotice-no-templates-assigned' => 'Ку повідомлїню не были приряджены жадны банеры. Придайте даякы!',
	'centralnotice-available-templates' => 'Доступны шаблоны',
	'centralnotice-template-already-exists' => 'Банер уж є привязаный ку кампанї.
Не буде приданый.',
	'centralnotice-preview-template' => 'Нагляд банера',
	'centralnotice-change-lang' => 'Змінити язык перекладу',
	'centralnotice-weights' => 'Вагы',
	'centralnotice-notice-is-locked' => 'Повідомлїня є замкнуте. Не буде одстранене.',
	'centralnotice-overlap' => 'Час зображіня ся перекрывать з часом зображіня іншого повідомлїня.
Не было придане.',
	'centralnotice-invalid-date-range' => 'Неплатный россяг дат.
Не буде змінено.',
	'centralnotice-number-uses' => 'Хоснує',
	'centralnotice-message' => 'Ознам',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'centralnotice' => 'Кииннэммит биллэриилэри салайыы',
	'noticetemplate' => 'Кииннэммит биллэрии халыыба',
	'centralnotice-desc' => 'Саайт биллэриитин эбэр',
	'centralnotice-summary' => 'Бу муодул билигин үлэлиир кииннэммит биллэриилэргитин уларытарга туһаныллар.
Саҥа биллэриилэри эбэргэ, эргэ биллэриилэри соторго туһаныллыан эмиэ сөп.',
	'centralnotice-query' => 'Бу биллэриини уларытыы',
	'centralnotice-notice-name' => 'Биллэрии аата',
	'centralnotice-end-date' => 'Түмүктэнии күнэ-дьыла',
	'centralnotice-enabled' => 'Холбоммут/холбонно',
	'centralnotice-modify' => 'Ыытарга',
	'centralnotice-preview' => 'Ыытыах иннинэ көрүү',
	'centralnotice-add-new' => 'Саҥа кииннэммит биллэриини эбэргэ',
	'centralnotice-remove' => 'Сот',
	'centralnotice-translate-heading' => '$1 тылбааһа',
	'centralnotice-manage' => 'Кииннэммит биллэриилэри салайыы',
	'centralnotice-add' => 'Эбэргэ',
	'centralnotice-add-notice' => 'Биллэрии эбэргэ',
	'centralnotice-add-template' => 'Халыып эбэргэ',
	'centralnotice-show-notices' => 'Биллэриилэри көрдөр',
	'centralnotice-list-templates' => 'Халыыптар тиһиктэрэ',
	'centralnotice-translations' => 'Тылбаастар',
	'centralnotice-translate-to' => 'Манна тылбаас',
	'centralnotice-translate' => 'Тылбаас',
	'centralnotice-english' => 'Аҥылычаан',
	'centralnotice-banner-name' => 'Бааннер аата:',
	'centralnotice-templates' => 'Халыыптар',
	'centralnotice-weight' => 'Кэтитэ',
	'centralnotice-locked' => 'Хааччахтаммыт/бобуллубут',
	'centralnotice-notices' => 'Биллэриилэр',
	'centralnotice-notice-exists' => 'Биллэрии баар эбит.
Кыайан эбиллибэт',
	'centralnotice-template-exists' => 'Халыып баар эбит.
Кыайан эбиллибэт',
	'centralnotice-notice-doesnt-exist' => 'Биллэрии суох эбит.
Сотуллар суох',
	'centralnotice-template-still-bound' => 'Халыып уруккутун курдук биллэриини кытта ситимнээх.
Кыайан сотуллубат.',
	'centralnotice-template-body' => 'Халыып бэйэтэ:',
	'centralnotice-day' => 'Күн (хонук)',
	'centralnotice-year' => 'Сыл',
	'centralnotice-month' => 'Ый',
	'centralnotice-hours' => 'Чаас',
	'centralnotice-min' => 'Мүнүүтэ',
	'centralnotice-project-lang' => 'Бырайыак тыла',
	'centralnotice-project-name' => 'Бырайыак аата',
	'centralnotice-start-date' => 'Саҕаламмыт ыйа-күнэ',
	'centralnotice-start-time' => 'Саҕаламмыт кэмэ (UTC)',
	'centralnotice-assigned-templates' => 'Олордуллубут халыыптар',
	'centralnotice-no-templates' => 'Халыыптар көстүбэтилэр.
Эп эрэ!',
	'centralnotice-no-templates-assigned' => 'Биллэриини кытта ситимнээх халыыптар суохтар.
Эп эрэ!',
	'centralnotice-available-templates' => 'Баар халыыптар',
	'centralnotice-template-already-exists' => 'Халыып ситимнээх.
Эбиллибэтэх',
	'centralnotice-preview-template' => 'Халыыбы хайдах буолуоҕун көрүү',
	'centralnotice-change-lang' => 'Тылбаас тылын уларытыы',
	'centralnotice-weights' => 'Ыйааһына',
	'centralnotice-notice-is-locked' => 'Биллэрии көмүскэллээх.
Сотуллубат',
	'centralnotice-overlap' => 'Биллэрии атын биллэриини кытта кэминэн быһа охсуһар.
Эбиллэр кыаҕа суох',
	'centralnotice-invalid-date-range' => 'Күнүн-дьылын болдьоҕо сыыһа.
Кыайан саҥардыллыбат',
	'centralnotice-null-string' => 'Кураанах устуруоканы эбэр табыллыбат.
Эбиллибэт',
	'centralnotice-confirm-delete' => 'Маны сотоору гынаҕын дуо?
Соттоххуна төннөрөр кыаҕыҥ суох буолуо.',
	'centralnotice-no-notices-exist' => 'Биллэриилэр суохтар.
Эбиэххэ сөп',
	'centralnotice-no-templates-translate' => 'Тылбаастыырга аналлаах биир да халыыып суох',
	'centralnotice-number-uses' => 'Туттуллаллар',
	'centralnotice-edit-template' => 'Халыыбы уларытыы',
	'centralnotice-message' => 'Сурук',
	'centralnotice-message-not-set' => 'Сурук туруоруллубатах',
	'centralnotice-clone' => 'Клоннааһын',
	'centralnotice-clone-notice' => 'Халыып куопуйатын оҥоруу',
	'centralnotice-preview-all-template-translations' => 'Халыып баар тылбаастарын барытын көрүү',
	'right-centralnotice-admin' => 'Кииннэмит биллэриилэри салайыы',
	'right-centralnotice-translate' => 'Кииннэммит биллэриилэри тылбаастааһын',
	'action-centralnotice-admin' => 'кииннэммит биллэриилэри салайыы',
	'action-centralnotice-translate' => 'кииннэммит биллэриилэри тылбаастааһын',
	'centralnotice-preferred' => 'Бэрт буолуо этэ',
);

/** Sicilian (Sicilianu)
 * @author Gmelfi
 * @author Santu
 */
$messages['scn'] = array(
	'centralnotice' => 'Gistioni di avvisu cintralizzatu',
	'noticetemplate' => "Template di l'avvisi cintralizzati",
	'centralnotice-desc' => "Jiunci n'avvisu cintralizzatu a inìzziu pàggina",
	'centralnotice-summary' => "Stu mòdulu pirmetti di canciari l'avvisa cintralizzati. Pò èssiri usatu pi junciri o livari avvisa vecchi.",
	'centralnotice-query' => "Cancia l'avvisa attuali",
	'centralnotice-notice-name' => "Nomu di l'avvisu",
	'centralnotice-end-date' => "Data d'accapata",
	'centralnotice-enabled' => 'Attivatu',
	'centralnotice-modify' => 'Mànna',
	'centralnotice-preview' => 'Antiprima',
	'centralnotice-add-new' => "Junci n'avvisu cintralizzatu novu",
	'centralnotice-remove' => 'Lèva',
	'centralnotice-translate-heading' => 'Traduzzioni di $1',
	'centralnotice-manage' => "Gistioni di l'avvisa cintralizzati",
	'centralnotice-add' => 'Junci',
	'centralnotice-add-notice' => "Junci n'avvisu",
	'centralnotice-add-template' => 'Junci nu template',
	'centralnotice-show-notices' => "Ammuscia l'avvisa",
	'centralnotice-list-templates' => 'Li template di lista',
	'centralnotice-translations' => 'Traduzzioni',
	'centralnotice-translate-to' => 'Tradùci n',
	'centralnotice-translate' => 'Traduci',
	'centralnotice-english' => 'Ngrisi',
	'centralnotice-banner-name' => 'Nomu dû template',
	'centralnotice-templates' => 'Template',
	'centralnotice-weight' => 'Pisu',
	'centralnotice-locked' => 'Bluccatu',
	'centralnotice-notices' => 'Nutizzî',
	'centralnotice-notice-exists' => 'Avvisu già esistenti.
Nun fu jiunchiutu.',
	'centralnotice-template-exists' => 'Template già esistenti.
Nun fu jiunchiutu',
	'centralnotice-notice-doesnt-exist' => "L'avvisu nun esisti. Nun ce nenti di luvari",
	'centralnotice-template-still-bound' => 'Lu template è ancora fissatu a na nutizzia.
Nun si leva.',
	'centralnotice-template-body' => 'Lu corpu dû template',
	'centralnotice-day' => 'Jornu',
	'centralnotice-year' => 'Annu',
	'centralnotice-month' => 'Misi',
	'centralnotice-hours' => 'Ura',
	'centralnotice-min' => 'Minutu',
	'centralnotice-project-lang' => 'Lingua dû pruggettu',
	'centralnotice-project-name' => 'Nomu dû pruggettu',
	'centralnotice-start-date' => "Data d'accuminzatina",
	'centralnotice-start-time' => "Ura d'accuminzatina (UTC)",
	'centralnotice-assigned-templates' => 'Template assignati',
	'centralnotice-no-templates' => 'Nuddu template truvatu. Junchiccìnni quarchidunu!',
	'centralnotice-no-templates-assigned' => "Nuddu template assignatu all'avvisu. Junchiccìnni quarchidunu!",
	'centralnotice-available-templates' => 'Template dispunìbbili',
	'centralnotice-template-already-exists' => 'Lu template è già liatu â campagna.
Nun si junci',
	'centralnotice-preview-template' => 'Antiprima dû template',
	'centralnotice-change-lang' => 'Cancia la lingua dâ traduzzioni',
	'centralnotice-weights' => 'Pisa',
	'centralnotice-notice-is-locked' => "L'avvisu è bliccatu. Avvisu nun livatu",
	'centralnotice-overlap' => "L'avvisu si camìna ntê pèdi di n'àutru avvisu a causa dû tempu.
Nun junciutu",
	'centralnotice-invalid-date-range' => 'Ntirvaddu di tempu nun vàlidu.
Nun fu canciatu',
	'centralnotice-null-string' => 'Nun si pò junciri na strinca nulla.
Nun junciutu',
	'centralnotice-confirm-delete' => "Si pi daveru sicuru di vuliri scancillari st'uggettu? Na vota scancillatu non si pò turnari arredi.",
	'centralnotice-no-notices-exist' => "Nuddu avvisu c'è. Agghiunciccinni unu di sècutu.",
	'centralnotice-no-templates-translate' => 'Nun ci sunnu template pi mudificari li traduzzioni pi',
	'centralnotice-number-uses' => 'Usi',
	'centralnotice-edit-template' => 'Cancia template',
	'centralnotice-message' => 'Missaggiu',
	'centralnotice-message-not-set' => 'Missaggiu no mpustatu',
	'centralnotice-clone' => 'Clona',
	'centralnotice-clone-notice' => 'Cria na copia dû template',
	'centralnotice-preview-all-template-translations' => "Tutti li traduzzioni dî template dispunìbbili 'n anteprima",
	'right-centralnotice-admin' => "Gistisci l'avvisi cintralizzati",
	'right-centralnotice-translate' => 'Traduci avvisi cintralizzati',
	'action-centralnotice-admin' => "Guverna l'avvisi cintralizzati",
	'action-centralnotice-translate' => 'tradùciri avvisi cintralizzati',
	'centralnotice-preferred' => 'Prifiriti',
);

/** Serbo-Croatian (Srpskohrvatski / Српскохрватски)
 * @author OC Ripper
 */
$messages['sh'] = array(
	'centralnotice-modify' => 'Unesi',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'centralnotice' => 'Centrálny oznam',
	'noticetemplate' => 'Šablóna centrálneho oznamu',
	'centralnotice-desc' => 'Pridáva centrálnu Správu lokality',
	'centralnotice-summary' => 'Tento modul umožňuje upravovať vaše momentálne nastavené centrálne oznamy.
Tiež ho môžete použiť na pridanie alebo odstránenie starých oznamov.',
	'centralnotice-query' => 'Zmeniť súčasné oznamy',
	'centralnotice-notice-name' => 'Názov oznamu',
	'centralnotice-end-date' => 'Dátum ukončenia',
	'centralnotice-enabled' => 'Zapnutá',
	'centralnotice-modify' => 'Odoslať',
	'centralnotice-preview' => 'Náhľad',
	'centralnotice-add-new' => 'Pridať nový centrálny oznam',
	'centralnotice-remove' => 'Odstrániť',
	'centralnotice-translate-heading' => 'Preklad $1',
	'centralnotice-manage' => 'Správa centrálnych oznamov',
	'centralnotice-add' => 'Pridať',
	'centralnotice-add-notice' => 'Pridať oznam',
	'centralnotice-add-template' => 'Pridať šablónu',
	'centralnotice-show-notices' => 'Zobraziť oznamy',
	'centralnotice-list-templates' => 'Zoznam šablón',
	'centralnotice-translations' => 'Preklady',
	'centralnotice-translate-to' => 'Preložiť do jazyka',
	'centralnotice-translate' => 'Preložiť',
	'centralnotice-english' => 'angličtina',
	'centralnotice-banner-name' => 'Názov šablóny',
	'centralnotice-templates' => 'Šablóny',
	'centralnotice-weight' => 'Váha',
	'centralnotice-locked' => 'Zamknutý',
	'centralnotice-notices' => 'Oznamy',
	'centralnotice-notice-exists' => 'Oznam už existuje. Nebude pridaný.',
	'centralnotice-template-exists' => 'Šablóna už existuje. Nebude pridaná.',
	'centralnotice-notice-doesnt-exist' => 'Oznam neexistuje. Nebude odstránený.',
	'centralnotice-template-still-bound' => 'Šablóna je ešte stále naviazaná na oznam. Nebude odstránená.',
	'centralnotice-template-body' => 'Telo šablóny:',
	'centralnotice-day' => 'Deň',
	'centralnotice-year' => 'Rok',
	'centralnotice-month' => 'Mesiac',
	'centralnotice-hours' => 'Hodina',
	'centralnotice-min' => 'Minúta',
	'centralnotice-project-lang' => 'Jazyk projektu',
	'centralnotice-project-name' => 'Názov projektu',
	'centralnotice-start-date' => 'Dátum začatia',
	'centralnotice-start-time' => 'Čas začatia (UTC)',
	'centralnotice-assigned-templates' => 'Priradené šablóny',
	'centralnotice-no-templates' => 'Neboli nájdené žiadne šablóny. Pridajte nejaké!',
	'centralnotice-no-templates-assigned' => 'Žiadne šablóny neboli priradené oznamom. Pridajte nejaké!',
	'centralnotice-available-templates' => 'Dostupné šablóny',
	'centralnotice-template-already-exists' => 'Šablóna sa už viaže na kampaň. Nebude pridaná.',
	'centralnotice-preview-template' => 'Náhľad šablóny',
	'centralnotice-change-lang' => 'Zmeniť jazyk prekladu',
	'centralnotice-weights' => 'Váhy',
	'centralnotice-notice-is-locked' => 'Oznam je zamknutý. Nebude odstránený.',
	'centralnotice-overlap' => 'Čas zobrazenia oznamu sa prelína s časom iného oznamu. Nebude pridaný.',
	'centralnotice-invalid-date-range' => 'Neplatný rozsah dátumov. Nebude aktualizovaný.',
	'centralnotice-null-string' => 'Nemožno pridať prázdny reťazec. Nebude pridaný.',
	'centralnotice-confirm-delete' => 'Ste si istý, že chcete zmazať túto položku?
Túto operáciu nebude možné vrátiť.',
	'centralnotice-no-notices-exist' => 'Neexistujú žiadne oznamy. Môžete ich pridať.',
	'centralnotice-no-templates-translate' => 'Nie sú žiadne šablóny, ktoré by bolo možné preložiť.',
	'centralnotice-number-uses' => 'Použitia',
	'centralnotice-edit-template' => 'Upraviť šablónu',
	'centralnotice-message' => 'Správa',
	'centralnotice-message-not-set' => 'Správa nebola nastavená',
	'centralnotice-clone' => 'Klonovať',
	'centralnotice-clone-notice' => 'Vytvoriť kópiu šablóny',
	'centralnotice-preview-all-template-translations' => 'Náhľad všetkých dostupných verzií šablóny',
	'right-centralnotice-admin' => 'Spravovať centrálne oznamy',
	'right-centralnotice-translate' => 'Prekladať centrálne oznamy',
	'action-centralnotice-admin' => 'spravovať centrálne oznamy',
	'action-centralnotice-translate' => 'prekladať centrálne oznamy',
	'centralnotice-preferred' => 'Uprednostňované',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'centralnotice-message' => 'Sporočilo',
	'centralnotice-message-not-set' => 'Sporočilo ni določeno',
	'centralnotice-clone' => 'Kloniraj',
	'centralnotice-clone-notice' => 'Ustvarite kopijo pasice',
);

/** Serbian Cyrillic ekavian (Српски (ћирилица))
 * @author Millosh
 * @author Јованвб
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'centralnotice-desc' => 'Додаје централну напомену на сајт.',
	'centralnotice-query' => 'Измени тренутна обавештења',
	'centralnotice-notice-name' => 'Име обавештења',
	'centralnotice-end-date' => 'Завршни датум',
	'centralnotice-enabled' => 'Омогућено',
	'centralnotice-modify' => 'Пошаљи',
	'centralnotice-preview' => 'Прикажи',
	'centralnotice-add-new' => 'Додај нову централну напомену',
	'centralnotice-remove' => 'Уклони',
	'centralnotice-translate-heading' => 'Превод за $1',
	'centralnotice-manage' => 'Уреди централну напомену',
	'centralnotice-add' => 'Додај',
	'centralnotice-add-notice' => 'Додај обавештење',
	'centralnotice-add-template' => 'Додај шаблон',
	'centralnotice-show-notices' => 'Прикажи обавештења',
	'centralnotice-list-templates' => 'Списак шаблона',
	'centralnotice-translations' => 'Преводи',
	'centralnotice-translate-to' => 'Преведи на',
	'centralnotice-translate' => 'Преведи',
	'centralnotice-english' => 'Енглески',
	'centralnotice-banner-name' => 'Име шаблона',
	'centralnotice-templates' => 'Шаблони',
	'centralnotice-weight' => 'Тежина',
	'centralnotice-locked' => 'Закључано',
	'centralnotice-notices' => 'Обавештења',
	'centralnotice-notice-exists' => 'Напомена већ постоји.
Неће бити додата',
	'centralnotice-template-exists' => 'Шаблон већ постоји.
Неће бити додат',
	'centralnotice-notice-doesnt-exist' => 'Напомена не постоји.
Нема шта да се обрише',
	'centralnotice-template-still-bound' => 'Шаблон је још увек придружен напомени.
Неће бити обрисан.',
	'centralnotice-template-body' => 'Тело шаблона:',
	'centralnotice-day' => 'Дан',
	'centralnotice-year' => 'Година',
	'centralnotice-month' => 'Месец',
	'centralnotice-hours' => 'Сат',
	'centralnotice-min' => 'Минут',
	'centralnotice-project-lang' => 'Име пројекта',
	'centralnotice-project-name' => 'Име пројекта',
	'centralnotice-start-date' => 'Почетни датум',
	'centralnotice-start-time' => 'Почетно време (UTC)',
	'centralnotice-no-templates' => 'Шаблони нису проађен.
Додај неки!',
	'centralnotice-available-templates' => 'Расположиви шаблони',
	'centralnotice-preview-template' => 'Прикажи шаблон',
	'centralnotice-change-lang' => 'Измени језик транслитерације',
	'centralnotice-weights' => 'Тежине',
	'centralnotice-notice-is-locked' => 'Напомена је закључана.
Није била обрисана',
	'centralnotice-invalid-date-range' => 'Неисправан опсег података.
Ажурирање није извршено',
	'centralnotice-null-string' => 'Није могуће додавање празног стринга.
Није додат',
	'centralnotice-confirm-delete' => 'Да ли сте сигурни да желите да обришете ову ставку?
Ова акција се не може вратити.',
	'centralnotice-no-notices-exist' => 'Нема напомена.
Додајте једну испод.',
	'centralnotice-number-uses' => 'Коришћење',
	'centralnotice-edit-template' => 'Измени шаблон',
	'centralnotice-message' => 'Порука',
	'centralnotice-message-not-set' => 'Порука није подешена',
	'centralnotice-clone' => 'Клонирај',
	'centralnotice-clone-name' => 'Име:',
);

/** Serbian Latin ekavian (Srpski (latinica))
 * @author Michaello
 */
$messages['sr-el'] = array(
	'centralnotice-desc' => 'Dodaje centralnu napomenu na sajt.',
	'centralnotice-query' => 'Izmeni trenutna obaveštenja',
	'centralnotice-notice-name' => 'Ime obaveštenja',
	'centralnotice-end-date' => 'Završni datum',
	'centralnotice-enabled' => 'Omogućeno',
	'centralnotice-modify' => 'Pošalji',
	'centralnotice-preview' => 'Prikaži',
	'centralnotice-add-new' => 'Dodaj novu centralnu napomenu',
	'centralnotice-remove' => 'Ukloni',
	'centralnotice-translate-heading' => 'Prevod za $1',
	'centralnotice-manage' => 'Uredi centralnu napomenu',
	'centralnotice-add' => 'Dodaj',
	'centralnotice-add-notice' => 'Dodaj obaveštenje',
	'centralnotice-add-template' => 'Dodaj šablon',
	'centralnotice-show-notices' => 'Prikaži obaveštenja',
	'centralnotice-list-templates' => 'Spisak šablona',
	'centralnotice-translations' => 'Prevodi',
	'centralnotice-translate-to' => 'Prevedi na',
	'centralnotice-translate' => 'Prevedi',
	'centralnotice-english' => 'Engleski',
	'centralnotice-banner-name' => 'Ime šablona',
	'centralnotice-templates' => 'Šabloni',
	'centralnotice-weight' => 'Težina',
	'centralnotice-locked' => 'Zaključano',
	'centralnotice-notices' => 'Obaveštenja',
	'centralnotice-notice-exists' => 'Napomena već postoji.
Neće biti dodata',
	'centralnotice-template-exists' => 'Šablon već postoji.
Neće biti dodat',
	'centralnotice-notice-doesnt-exist' => 'Napomena ne postoji.
Nema šta da se obriše',
	'centralnotice-template-still-bound' => 'Šablon je još uvek pridružen napomeni.
Neće biti obrisan.',
	'centralnotice-template-body' => 'Telo šablona:',
	'centralnotice-day' => 'Dan',
	'centralnotice-year' => 'Godina',
	'centralnotice-month' => 'Mesec',
	'centralnotice-hours' => 'Sat',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Ime projekta',
	'centralnotice-project-name' => 'Ime projekta',
	'centralnotice-start-date' => 'Početni datum',
	'centralnotice-start-time' => 'Početno vreme (UTC)',
	'centralnotice-no-templates' => 'Šabloni nisu proađen.
Dodaj neki!',
	'centralnotice-available-templates' => 'Raspoloživi šabloni',
	'centralnotice-preview-template' => 'Prikaži šablon',
	'centralnotice-change-lang' => 'Izmeni jezik transliteracije',
	'centralnotice-weights' => 'Težine',
	'centralnotice-notice-is-locked' => 'Napomena je zaključana.
Nije bila obrisana',
	'centralnotice-invalid-date-range' => 'Neispravan opseg podataka.
Ažuriranje nije izvršeno',
	'centralnotice-null-string' => 'Nije moguće dodavanje praznog stringa.
Nije dodat',
	'centralnotice-confirm-delete' => 'Da li ste sigurni da želite da obrišete ovu stavku?
Ova akcija se ne može vratiti.',
	'centralnotice-no-notices-exist' => 'Nema napomena.
Dodajte jednu ispod.',
	'centralnotice-number-uses' => 'Korišćenje',
	'centralnotice-edit-template' => 'Izmeni šablon',
	'centralnotice-message' => 'Poruka',
	'centralnotice-message-not-set' => 'Poruka nije podešena',
	'centralnotice-clone' => 'Kloniraj',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'centralnotice' => 'Adminstrierenge fon do zentroale Mäldengen',
	'noticetemplate' => 'Zentroale Mäldengs-Foarloage',
	'centralnotice-desc' => "Föiget ne zentroale ''sitenotice'' bietou",
	'centralnotice-summary' => 'Disse Ärwiederenge ferlööwet ju Konfiguration fon zentroale Mäldengen.
Ju kon uk tou dät Moakjen fon näie un Läskenge fon oolde Mäldengen ferwoand wäide.',
	'centralnotice-query' => 'Aktuelle Mäldenge annerje',
	'centralnotice-notice-name' => 'Noome fon ju Notiz',
	'centralnotice-end-date' => 'Eenddoatum',
	'centralnotice-enabled' => 'Aktivierd',
	'centralnotice-modify' => 'OK',
	'centralnotice-preview' => 'Foarschau',
	'centralnotice-add-new' => 'Föich ne näie zentroale Mäldenge bietou',
	'centralnotice-remove' => 'Wächhoalje',
	'centralnotice-translate-heading' => 'Uursättenge fon "$1"',
	'centralnotice-manage' => 'Zentroale Mäldengen ferwaltje',
	'centralnotice-add' => 'Bietouföigje',
	'centralnotice-add-notice' => 'Bietouföigjen fon ne Mäldenge',
	'centralnotice-add-template' => 'Bietouföigjen fon ne Foarloage',
	'centralnotice-show-notices' => 'Wies Mäldengen',
	'centralnotice-list-templates' => 'Foarloagen apliestje',
	'centralnotice-translations' => 'Uursättengen',
	'centralnotice-translate-to' => 'Uursätte in',
	'centralnotice-translate' => 'Uursätte',
	'centralnotice-english' => 'Ängelsk',
	'centralnotice-banner-name' => 'Noome fon ju Foarloage',
	'centralnotice-templates' => 'Foarloagen',
	'centralnotice-weight' => 'Gewicht',
	'centralnotice-locked' => 'Speerd',
	'centralnotice-notices' => 'Mäldengen',
	'centralnotice-notice-exists' => 'Mäldenge is al deer.
Nit bietouföiged.',
	'centralnotice-template-exists' => 'Foarloage is al deer.
Nit bietouföiged.',
	'centralnotice-notice-doesnt-exist' => 'Mäldenge is nit deer.
Wächhoaljen nit muugelk.',
	'centralnotice-template-still-bound' => 'Foarloage is noch an ne Mäldengen buunen.
Wächhoaljen nit muugelk.',
	'centralnotice-template-body' => 'Foarloagentext:',
	'centralnotice-day' => 'Dai',
	'centralnotice-year' => 'Jier',
	'centralnotice-month' => 'Mound',
	'centralnotice-hours' => 'Uure',
	'centralnotice-min' => 'Minute',
	'centralnotice-project-lang' => 'Projektsproake',
	'centralnotice-project-name' => 'Projektnoome',
	'centralnotice-start-date' => 'Startdoatum',
	'centralnotice-start-time' => 'Starttied (UTC)',
	'centralnotice-assigned-templates' => 'Touwiesde Foarloagen',
	'centralnotice-no-templates' => 'Der sunt neen Foarloagen in dät System deer.',
	'centralnotice-no-templates-assigned' => 'Der sunt neen Foarloagen an Mäldengen touwiesd.
Föich een bietou.',
	'centralnotice-available-templates' => 'Ferföichboare Foarloagen',
	'centralnotice-template-already-exists' => 'Foarloage is al an ju Kampagne buunen.
Nit bietouföiged.',
	'centralnotice-preview-template' => 'Foarschau Foarloage',
	'centralnotice-change-lang' => 'Uursättengssproake annerje',
	'centralnotice-weights' => 'Gewicht',
	'centralnotice-notice-is-locked' => 'Mäldenge is speerd.
Wächhoaljen nit muugelk.',
	'centralnotice-overlap' => 'Ju Mäldenge uursnit sik mäd dän Tiedruum fon ne uur Mäldenge.
Nit bietouföiged.',
	'centralnotice-invalid-date-range' => 'Uungultigen Tiedruum.
Nit aktualisierd.',
	'centralnotice-null-string' => 'Der kon neen Nulstring bietouföiged wäide.
Niks bietouföiged.',
	'centralnotice-confirm-delete' => 'Bäst du sicher, dät du dän Iendraach läskje moatest?
Ju Aktion kon nit tourääch troald wäide.',
	'centralnotice-no-notices-exist' => 'Der sunt neen Mäldengen deer.
Föich een bietou.',
	'centralnotice-no-templates-translate' => 'Dät rakt neen Foarloagen, wierfoar do Uursättengen tou beoarbaidjen sunt',
	'centralnotice-number-uses' => 'Nutsengen',
	'centralnotice-edit-template' => 'Foarloage beoarbaidje',
	'centralnotice-message' => 'Ättergjucht',
	'centralnotice-message-not-set' => 'Ättergjucht nit sät.',
	'centralnotice-clone' => 'Klon moakje',
	'centralnotice-clone-notice' => 'Moak ne Kopie fon ju Foarloage',
	'centralnotice-preview-all-template-translations' => 'Foarschau fon aal do ferföichboare Uursättengen fon ne Foarloage',
	'right-centralnotice-admin' => 'Ferwaltjen fon zentroale Mäldengen',
	'right-centralnotice-translate' => 'Uursätten fon zentroale Mäldengen',
	'action-centralnotice-admin' => 'Zentroale Siedennotiz ferfaalen',
	'action-centralnotice-translate' => 'Zentroale Siedennotiz uursätte',
	'centralnotice-preferred' => 'Foarleeken',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'centralnotice-desc' => 'Nambah émbaran puseur',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 */
$messages['sv'] = array(
	'centralnotice' => 'Centralmeddelande-administration',
	'noticetemplate' => 'Centralmeddelande-mall',
	'centralnotice-desc' => 'Lägger till en central sitenotice',
	'centralnotice-summary' => 'Denna modul låter dig redigera din nuvarande uppsättning centralmeddelanden.
Den kan också användas för att lägga till eller ta bort gamla meddelanden.',
	'centralnotice-query' => 'Ändra nuvarande meddelanden',
	'centralnotice-notice-name' => 'Meddelandenamn',
	'centralnotice-end-date' => 'Slutdatum',
	'centralnotice-enabled' => 'Aktiverad',
	'centralnotice-modify' => 'Verkställ',
	'centralnotice-preview' => 'Förhandsgranska',
	'centralnotice-add-new' => 'Lägg till ett nytt centralmeddelande',
	'centralnotice-remove' => 'Ta bort',
	'centralnotice-translate-heading' => 'Översättning för $1',
	'centralnotice-manage' => 'Hantera centralmeddelande',
	'centralnotice-add' => 'Lägg till',
	'centralnotice-add-notice' => 'Lägg till ett meddelande',
	'centralnotice-add-template' => 'Lägg till en mall',
	'centralnotice-show-notices' => 'Visa meddelanden',
	'centralnotice-list-templates' => 'Lista mallar',
	'centralnotice-translations' => 'Översättningar',
	'centralnotice-translate-to' => 'Översätt till',
	'centralnotice-translate' => 'Översätt',
	'centralnotice-english' => 'Engelska',
	'centralnotice-banner-name' => 'Mallnamn',
	'centralnotice-templates' => 'Mallar',
	'centralnotice-weight' => 'Tyngd',
	'centralnotice-locked' => 'Låst',
	'centralnotice-notices' => 'Meddelanden',
	'centralnotice-notice-exists' => 'Meddelande existerar redan.
Lägger inte till',
	'centralnotice-template-exists' => 'Mall existerar redan.
Lägger inte till',
	'centralnotice-notice-doesnt-exist' => 'Meddelande existerar inte.
Inget att ta bort',
	'centralnotice-template-still-bound' => 'Mall är inte fortfarande kopplad till ett meddelande.
Tar inte bort.',
	'centralnotice-template-body' => 'Mallinnehåll:',
	'centralnotice-day' => 'Dag',
	'centralnotice-year' => 'År',
	'centralnotice-month' => 'Månad',
	'centralnotice-hours' => 'Timma',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Projektspråk',
	'centralnotice-project-name' => 'Projektnamn',
	'centralnotice-start-date' => 'Startdatum',
	'centralnotice-start-time' => 'Starttid (UTC)',
	'centralnotice-assigned-templates' => 'Använda mallar',
	'centralnotice-no-templates' => 'Inga mallar hittade.
Lägg till några!',
	'centralnotice-no-templates-assigned' => 'Inga mallar kopplade till meddelande.
Lägg till några!',
	'centralnotice-available-templates' => 'Tillgängliga mallar',
	'centralnotice-template-already-exists' => 'Mall är redan kopplad till kampanj.
Lägger inte till',
	'centralnotice-preview-template' => 'Förhandsgranska mall',
	'centralnotice-change-lang' => 'Ändra översättningsspråk',
	'centralnotice-weights' => 'Tyngder',
	'centralnotice-notice-is-locked' => 'Meddelande är låst.
Tar inte bort',
	'centralnotice-overlap' => 'Meddelande överlappar inom tiden för annat meddelande.
Lägger inte till',
	'centralnotice-invalid-date-range' => 'Ogiltig tidsrymd.
Uppdaterar inte',
	'centralnotice-null-string' => 'Kan inte lägga till en nollsträng.
Lägger inte till',
	'centralnotice-confirm-delete' => 'Är du säker på att vill radera detta föremål?
Denna handling kan inte återställas.',
	'centralnotice-no-notices-exist' => 'Inga meddelanden existerar.
Lägg till ett nedan',
	'centralnotice-no-templates-translate' => 'Det finns inga mallar att redigera översättningar för',
	'centralnotice-number-uses' => 'Användningar',
	'centralnotice-edit-template' => 'Redigera mall',
	'centralnotice-edit-template-summary' => 'För att skapa ett meddelande som kan lokalanpassas, inkludera en bindestrecks-sträng inom tre klammerparenteser, t.ex. {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Budskap',
	'centralnotice-message-not-set' => 'Budskap inte satt',
	'centralnotice-clone' => 'Klon',
	'centralnotice-clone-notice' => 'Skapa en kopia av mallen',
	'centralnotice-preview-all-template-translations' => 'Förhandsgranska alla tillgängliga översättningar av mallen',
	'right-centralnotice-admin' => 'Hantera centralmeddelanden',
	'right-centralnotice-translate' => 'Översätt centralmeddelanden',
	'action-centralnotice-admin' => 'hantera centralmeddelanden',
	'action-centralnotice-translate' => 'översätt centralmeddelanden',
	'centralnotice-preferred' => 'Föredragen',
);

/** Swahili (Kiswahili)
 * @author Ikiwaner
 */
$messages['sw'] = array(
	'centralnotice-modify' => 'Wasilisha',
	'centralnotice-preview' => 'Hakiki',
	'centralnotice-remove' => 'Ondoa',
	'centralnotice-add' => 'Ongeza',
	'centralnotice-day' => 'Siku',
	'centralnotice-year' => 'Mwaka',
	'centralnotice-month' => 'Mwezi',
	'centralnotice-hours' => 'Saa',
	'centralnotice-min' => 'Dakika',
	'centralnotice-message' => 'Ujumbe',
	'centralnotice-clone-name' => 'Jina:',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Veeven
 */
$messages['te'] = array(
	'centralnotice' => 'కేంద్రీయ గమనిక నిర్వహణ',
	'noticetemplate' => 'కేంద్రీయ గమనిక మూస',
	'centralnotice-desc' => 'కేంద్రీయ సైటు గమనికని చేరుస్తుంది',
	'centralnotice-notice-name' => 'గమనిక పేరు',
	'centralnotice-end-date' => 'ముగింపు తేదీ',
	'centralnotice-enabled' => 'చేతనమైంది',
	'centralnotice-modify' => 'దాఖలుచేయి',
	'centralnotice-preview' => 'మునుజూపు',
	'centralnotice-add-new' => 'కొత్త కేంద్రీయ గమనికని చేర్చు',
	'centralnotice-remove' => 'తొలగించు',
	'centralnotice-translate-heading' => '$1కి అనువాదం',
	'centralnotice-add' => 'చేర్చు',
	'centralnotice-add-template' => 'ఒక మూసని చేర్చు',
	'centralnotice-list-templates' => 'మూసలను చూపించు',
	'centralnotice-translations' => 'అనువాదాలు',
	'centralnotice-translate' => 'అనువదించండి',
	'centralnotice-english' => 'ఇంగ్లీష్',
	'centralnotice-banner-name' => 'మూస పేరు',
	'centralnotice-templates' => 'మూసలు',
	'centralnotice-weight' => 'భారం',
	'centralnotice-notices' => 'గమనికలు',
	'centralnotice-notice-exists' => 'గమనిక ఇప్పటికే ఉంది.
చేర్చట్లేదు',
	'centralnotice-template-exists' => 'మూస ఇప్పటికే ఉంది.
చేర్చట్లేదు',
	'centralnotice-notice-doesnt-exist' => 'గమనిక లేనే లేదు.
ఏమీ తొలగించలేదు',
	'centralnotice-template-body' => 'మూస వివరణ:',
	'centralnotice-day' => 'రోజు',
	'centralnotice-year' => 'సంవత్సరం',
	'centralnotice-month' => 'నెల',
	'centralnotice-hours' => 'గంట',
	'centralnotice-min' => 'నిమిషం',
	'centralnotice-project-lang' => 'ప్రాజెక్టు భాష',
	'centralnotice-top-ten-languages' => 'పై 10 భాషలు',
	'centralnotice-project-name' => 'ప్రాజెక్టు పేరు',
	'centralnotice-start-date' => 'ప్రారంభ తేదీ',
	'centralnotice-start-time' => 'ప్రారంభ సమయం (UTC)',
	'centralnotice-no-templates' => 'మూసలు ఏమీ లేవు.
కొన్నింటిని చేర్చండి!',
	'centralnotice-available-templates' => 'అందుబాటులో ఉన్న మూసలు',
	'centralnotice-preview-template' => 'మూస మునుజూపు',
	'centralnotice-change-lang' => 'అనువాదపు భాషని మార్చండి',
	'centralnotice-weights' => 'భారాలు',
	'centralnotice-no-notices-exist' => 'గమనికలు ఏమీ లేవు.
క్రింద చేర్చండి.',
	'centralnotice-number-uses' => 'వాడుకరులు',
	'centralnotice-edit-template' => 'మూసని మార్చు',
	'centralnotice-message' => 'సందేశం',
	'centralnotice-countries' => 'దేశాలు',
	'right-centralnotice-admin' => 'కేంద్రీయ గమనికలని నిర్వహించగలగడం',
	'right-centralnotice-translate' => 'కేంద్రీయ గమనికలని అనుదించండి',
	'action-centralnotice-translate' => 'కేంద్రీయ గమనికలని అనువదించగలగడం',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'centralnotice-add' => 'Tau tan',
	'centralnotice-translations' => 'Tradusaun sira',
	'centralnotice-translate' => 'Tradús',
	'centralnotice-english' => 'Inglés',
	'centralnotice-day' => 'Loron',
	'centralnotice-year' => 'Tinan',
	'centralnotice-month' => 'Fulan',
	'centralnotice-min' => 'Minutu',
	'centralnotice-project-lang' => 'Lian projetu nian',
	'centralnotice-project-name' => 'Naran projetu nian',
	'centralnotice-number-uses' => 'Uza',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'centralnotice' => 'Мудири эълони мутамарказ',
	'noticetemplate' => 'Шаблони эълони мутамарказ',
	'centralnotice-desc' => 'Як иттилооти маркази илова мекунад',
	'centralnotice-summary' => 'Ин модул ба шумо имкони вироиги насби эълони мутамаркази кунинро пешкаш мекунад.
Он боз метавонад барои изофа ё пок кардани эълонҳои кӯҳна истифода шавад.',
	'centralnotice-query' => 'Тағйири эълонҳои кунунӣ',
	'centralnotice-notice-name' => 'Унвони эълон',
	'centralnotice-end-date' => 'Санаи охир',
	'centralnotice-enabled' => 'Фаъол шуд',
	'centralnotice-modify' => 'Ирсол',
	'centralnotice-preview' => 'Пешнамоиш',
	'centralnotice-add-new' => 'Изофаи як эълони мутамарказ',
	'centralnotice-remove' => 'Пок кардан',
	'centralnotice-translate-heading' => 'Тарҷума барои $1',
	'centralnotice-manage' => 'Идоракунии эълони мутамарказ',
	'centralnotice-add' => 'Изофа',
	'centralnotice-add-notice' => 'Изофа кардани як хабар',
	'centralnotice-add-template' => 'Изофаи як шаблон',
	'centralnotice-show-notices' => 'Намоиши эълонҳо',
	'centralnotice-list-templates' => 'Феҳристи шаблонҳо',
	'centralnotice-translations' => 'Тарҷумаҳо',
	'centralnotice-translate-to' => 'Тарҷума ба',
	'centralnotice-translate' => 'Тарҷума',
	'centralnotice-english' => 'Англисӣ',
	'centralnotice-banner-name' => 'Унвони шаблон',
	'centralnotice-templates' => 'Шаблонҳо',
	'centralnotice-weight' => 'Вазн',
	'centralnotice-locked' => 'Басташуда',
	'centralnotice-notices' => 'Эълонҳо',
	'centralnotice-notice-exists' => 'Эълон аллакай вуҷуд дорад.
Изофа нашуд',
	'centralnotice-template-exists' => 'Шаблони аллакай мавҷуд аст.
Изофа намешавад',
	'centralnotice-notice-doesnt-exist' => 'Эълон вуҷуд надорад.
Чизе барои пок кардан нест',
	'centralnotice-template-still-bound' => 'Шаблон то ҳол дар як эълоне часпида аст.
Пок намешавад.',
	'centralnotice-template-body' => 'Танаи Шаблон:',
	'centralnotice-day' => 'Рӯз',
	'centralnotice-year' => 'Сол',
	'centralnotice-month' => 'Моҳ',
	'centralnotice-hours' => 'Соат',
	'centralnotice-min' => 'Дақиқа',
	'centralnotice-project-lang' => 'Забони лоиҳа',
	'centralnotice-project-name' => 'Номи лоиҳа',
	'centralnotice-start-date' => 'Санаи шурӯъ',
	'centralnotice-start-time' => 'Замони шурӯъ (UTC)',
	'centralnotice-assigned-templates' => 'Шаблонҳои муқараршуда',
	'centralnotice-no-templates' => 'Ҳеҷ шаблоне ёфт нашуд.
Чанде изофа намоед!',
	'centralnotice-no-templates-assigned' => 'Ҳеҷ шаблоне ба эълон муқарар нашудааст.
Чанде изофа намоед!',
	'centralnotice-available-templates' => 'Шаблонҳои дастрас',
	'centralnotice-template-already-exists' => 'Шаблони аллакай ба эълон часпонида шудааст.
Изофа нашуд.',
	'centralnotice-preview-template' => 'Пешнамоиши шаблон',
	'centralnotice-change-lang' => 'Тағйири забони тарҷума',
	'centralnotice-weights' => 'Вазнҳо',
	'centralnotice-notice-is-locked' => 'Эълон баста аст.
Пок нашуда истода аст',
	'centralnotice-overlap' => 'Эълон бо вақту замони дигар эълон рӯи ҳам омад.
Изофа нашуд',
	'centralnotice-invalid-date-range' => 'Давраи санаи номӯътабар.
Барӯз нашуд',
	'centralnotice-null-string' => 'Риштаи холиро наметавон афзуд.
Афзуда нашуд',
	'centralnotice-confirm-delete' => 'Оё шумо мутмаин ҳастед, ки мехоҳед ин маводро ҳафз кунед?
Ин амал барқарорнашавада хоҳад буд.',
	'centralnotice-no-notices-exist' => 'Ҳеҷ эълоне вуҷуд надорад.
Дар зер як эълоне изофа намоед',
	'centralnotice-no-templates-translate' => 'Ҳеҷ шаблоне барои вироиши тарҷумааш нест',
	'centralnotice-number-uses' => 'Истифодаҳо',
	'centralnotice-edit-template' => 'Вироиши шаблон',
	'centralnotice-message' => 'Пайғом',
	'centralnotice-message-not-set' => 'Пайғом танзим нашудааст',
	'centralnotice-clone' => 'Клон',
	'centralnotice-clone-notice' => 'Эҷоди як нусхаи ин шаблон',
	'centralnotice-preview-all-template-translations' => 'Пешнамоиши ҳамаи тарҷумаҳои дастраси шаблон',
	'right-centralnotice-admin' => 'Идоракунии эълонҳои мутамарказ',
	'right-centralnotice-translate' => 'Тарҷумаи эълонҳои мутамарказ',
	'action-centralnotice-admin' => 'идоракунии эълонҳои мутамарказ',
	'action-centralnotice-translate' => 'тарҷумаи эълонҳои мутамарказ',
	'centralnotice-preferred' => 'Тарҷиҳи додашуда',
);

/** Tajik (Latin) (Тоҷикӣ (Latin))
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'centralnotice' => "Mudiri e'loni mutamarkaz",
	'noticetemplate' => "Şabloni e'loni mutamarkaz",
	'centralnotice-desc' => 'Jak ittilooti markazi ilova mekunad',
	'centralnotice-summary' => "In modul ba şumo imkoni viroigi nasbi e'loni mutamarkazi kuninro peşkaş mekunad.
On boz metavonad baroi izofa jo pok kardani e'lonhoi kūhna istifoda şavad.",
	'centralnotice-query' => "Taƣjiri e'lonhoi kununī",
	'centralnotice-notice-name' => "Unvoni e'lon",
	'centralnotice-end-date' => 'Sanai oxir',
	'centralnotice-enabled' => "Fa'ol şud",
	'centralnotice-modify' => 'Irsol',
	'centralnotice-preview' => 'Peşnamoiş',
	'centralnotice-add-new' => "Izofai jak e'loni mutamarkaz",
	'centralnotice-remove' => 'Pok kardan',
	'centralnotice-translate-heading' => 'Tarçuma baroi $1',
	'centralnotice-manage' => "Idorakuniji e'loni mutamarkaz",
	'centralnotice-add' => 'Izofa',
	'centralnotice-add-notice' => 'Izofa kardani jak xabar',
	'centralnotice-add-template' => 'Izofai jak şablon',
	'centralnotice-show-notices' => "Namoişi e'lonho",
	'centralnotice-list-templates' => 'Fehristi şablonho',
	'centralnotice-translations' => 'Tarçumaho',
	'centralnotice-translate-to' => 'Tarçuma ba',
	'centralnotice-translate' => 'Tarçuma',
	'centralnotice-english' => 'Anglisī',
	'centralnotice-banner-name' => 'Unvoni şablon',
	'centralnotice-templates' => 'Şablonho',
	'centralnotice-weight' => 'Vazn',
	'centralnotice-locked' => 'Bastaşuda',
	'centralnotice-notices' => "E'lonho",
	'centralnotice-notice-exists' => "E'lon allakaj vuçud dorad.
Izofa naşud",
	'centralnotice-template-exists' => 'Şabloni allakaj mavçud ast.
Izofa nameşavad',
	'centralnotice-notice-doesnt-exist' => "E'lon vuçud nadorad.
Cize baroi pok kardan nest",
	'centralnotice-template-still-bound' => "Şablon to hol dar jak e'lone caspida ast.
Pok nameşavad.",
	'centralnotice-template-body' => 'Tanai Şablon:',
	'centralnotice-day' => 'Rūz',
	'centralnotice-year' => 'Sol',
	'centralnotice-month' => 'Moh',
	'centralnotice-hours' => 'Soat',
	'centralnotice-min' => 'Daqiqa',
	'centralnotice-project-lang' => 'Zaboni loiha',
	'centralnotice-project-name' => 'Nomi loiha',
	'centralnotice-start-date' => "Sanai şurū'",
	'centralnotice-start-time' => "Zamoni şurū' (UTC)",
	'centralnotice-assigned-templates' => 'Şablonhoi muqararşuda',
	'centralnotice-no-templates' => 'Heç şablone joft naşud.
Cande izofa namoed!',
	'centralnotice-no-templates-assigned' => "Heç şablone ba e'lon muqarar naşudaast.
Cande izofa namoed!",
	'centralnotice-available-templates' => 'Şablonhoi dastras',
	'centralnotice-template-already-exists' => "Şabloni allakaj ba e'lon casponida şudaast.
Izofa naşud.",
	'centralnotice-preview-template' => 'Peşnamoişi şablon',
	'centralnotice-change-lang' => 'Taƣjiri zaboni tarçuma',
	'centralnotice-weights' => 'Vaznho',
	'centralnotice-notice-is-locked' => "E'lon basta ast.
Pok naşuda istoda ast",
	'centralnotice-overlap' => "E'lon bo vaqtu zamoni digar e'lon rūi ham omad.
Izofa naşud",
	'centralnotice-invalid-date-range' => "Davrai sanai nomū'tabar.
Barūz naşud",
	'centralnotice-null-string' => 'Riştai xoliro nametavon afzud.
Afzuda naşud',
	'centralnotice-confirm-delete' => 'Ojo şumo mutmain hasted, ki mexohed in mavodro hafz kuned?
In amal barqarornaşavada xohad bud.',
	'centralnotice-no-notices-exist' => "Heç e'lone vuçud nadorad.
Dar zer jak e'lone izofa namoed",
	'centralnotice-no-templates-translate' => 'Heç şablone baroi viroişi tarçumaaş nest',
	'centralnotice-number-uses' => 'Istifodaho',
	'centralnotice-edit-template' => 'Viroişi şablon',
	'centralnotice-message' => 'Pajƣom',
	'centralnotice-message-not-set' => 'Pajƣom tanzim naşudaast',
	'centralnotice-clone' => 'Klon',
	'centralnotice-clone-notice' => 'Eçodi jak nusxai in şablon',
	'centralnotice-preview-all-template-translations' => 'Peşnamoişi hamai tarçumahoi dastrasi şablon',
	'right-centralnotice-admin' => "Idorakuniji e'lonhoi mutamarkaz",
	'right-centralnotice-translate' => "Tarçumai e'lonhoi mutamarkaz",
	'action-centralnotice-admin' => "idorakuniji e'lonhoi mutamarkaz",
	'action-centralnotice-translate' => "tarçumai e'lonhoi mutamarkaz",
	'centralnotice-preferred' => 'Tarçihi dodaşuda',
);

/** Thai (ไทย)
 * @author Ans
 * @author Manop
 * @author Octahedron80
 * @author Passawuth
 */
$messages['th'] = array(
	'centralnotice' => 'การจัดการประกาศส่วนกลาง',
	'noticetemplate' => 'แม่แบบประกาศของส่้วนกลาง',
	'centralnotice-desc' => 'เพิ่มประกาศส่วนกลางของไซต์',
	'centralnotice-summary' => 'คุณสามารถแก้ไขประกาศส่วนกลางปัจจุบันได้ โดยใช้เครื่องมือนี้
คุณสามารถเพิ่มหรือนำประกาศเก่าออกได้เช่นกัน',
	'centralnotice-query' => 'แก้ไขประกาศปัจจุบัน',
	'centralnotice-notice-name' => 'หัวข้อการประกาศ',
	'centralnotice-end-date' => 'วันหมดอายุ',
	'centralnotice-enabled' => 'ถูกทำให้ใช้งานได้',
	'centralnotice-modify' => 'ตกลง',
	'centralnotice-preview' => 'แสดงตัวอย่าง',
	'centralnotice-add-new' => 'เพิ่มประกาศของส่วนกลางใหม่',
	'centralnotice-remove' => 'นำออก',
	'centralnotice-translate-heading' => 'การแปลสำหรับ $1',
	'centralnotice-manage' => 'จัดการกับประกาศส่วนกลาง',
	'centralnotice-add' => 'เพิ่ม',
	'centralnotice-add-notice' => 'เพิ่มประกาศ',
	'centralnotice-add-template' => 'เพิ่มแม่แบบ',
	'centralnotice-show-notices' => 'แสดงประกาศ',
	'centralnotice-list-templates' => 'แสดงรายชื่อแม่แบบ',
	'centralnotice-translations' => 'การแปล',
	'centralnotice-translate-to' => 'แปลเป็นภาษา',
	'centralnotice-translate' => 'แปล',
	'centralnotice-english' => 'อังกฤษ',
	'centralnotice-banner-name' => 'ชื่อแม่แบบ',
	'centralnotice-templates' => 'แม่แบบ',
	'centralnotice-weight' => 'น้ำหนัก',
	'centralnotice-locked' => 'ถูกล็อก',
	'centralnotice-notices' => 'ประกาศ',
	'centralnotice-notice-exists' => 'มีประกาศอยู่แล้ว
จะไม่ทำการเพิ่ม',
	'centralnotice-template-exists' => 'มีแม่แบบอยู่แล้ว
จะไม่ทำการเพิ่ม',
	'centralnotice-notice-doesnt-exist' => 'ไม่มีประกาศ
ไม่สามารถนำออกได้',
	'centralnotice-template-still-bound' => 'แม่แบบยังอยู่ในระยะเวลาที่ใช้ประกาศ
จะไม่ทำการนำออก',
	'centralnotice-template-body' => 'เนื้อหาของแม่แบบ:',
	'centralnotice-day' => 'วัน',
	'centralnotice-year' => 'ปี',
	'centralnotice-month' => 'เดือน',
	'centralnotice-hours' => 'ชั่วโมง',
	'centralnotice-min' => 'นาที',
	'centralnotice-project-lang' => 'ภาษาของโึครงการ',
	'centralnotice-project-name' => 'ชื่อโครงการ',
	'centralnotice-start-date' => 'วันที่เริ่ม',
	'centralnotice-start-time' => 'เวลาที่เริ่ม (เวลาสากลกรีนิช UTC)',
	'centralnotice-assigned-templates' => 'แม่แบบที่ได้รับมอบหมาย',
	'centralnotice-no-templates' => 'ไม่พบแม่แบบใด ๆ
กรุณาเพิ่มแม่แบบ!',
	'centralnotice-no-templates-assigned' => 'ไม่มีแม่แบบบนประกาศ
กรุณาเพิ่มแม่แบบ!',
	'centralnotice-available-templates' => 'แม่แบบที่มีอยู่',
	'centralnotice-template-already-exists' => 'แม่แบบนี้เป็นส่วนหนึ่งของการรณรงค์
ไม่ทำการเพิ่ม',
	'centralnotice-preview-template' => 'ดูตัวอย่างแม่แบบ',
	'centralnotice-change-lang' => 'เปลี่ยนภาษาที่ใช้ในการแปล',
	'centralnotice-weights' => 'น้ำหนัก',
	'centralnotice-notice-is-locked' => 'ประกาศถูกล็อกอยู่
ไม่นำออก',
	'centralnotice-overlap' => 'ประกาศนี้ทับซ้อนกับเวลาของอีกประกาศหนึ่ง
จะำไม่ทำการเพิ่ม',
	'centralnotice-invalid-date-range' => 'ช่วงเวลาดังกล่าวเป็นช่วงเวลาที่ไม่สามารถเป็นไปได้
จะไม่ทำการอัปเดต',
	'centralnotice-null-string' => 'ไม่สามารถเพิ่มประกาศที่มีข้อความว่้างได้
จะไม่ทำการเพิ่ม',
	'centralnotice-confirm-delete' => 'คุณแน่ใจหรือว่าต้องการลบรายการนี้ทิ้ง
เมื่อลบทิ้งแล้ว จะไม่สามารถกู้คืนมาได้อีกเลย',
	'centralnotice-no-notices-exist' => 'ไม่มีประกาศ
เพิ่มประกาศด้านล่าง',
	'centralnotice-no-templates-translate' => 'ไม่มีแม่แบบใด ๆ ที่จะแก้ไขการแปล',
	'centralnotice-number-uses' => 'การใช้งาน',
	'centralnotice-edit-template' => 'แก้ไขแม่แบบ',
	'centralnotice-message' => 'ข้อความ',
	'centralnotice-message-not-set' => 'ข้อความยังไม่ได้ถูกตั้งค่า',
	'centralnotice-clone' => 'สำเนา',
	'centralnotice-clone-notice' => 'สร้างสำเนาของแม่แบบ',
	'centralnotice-preview-all-template-translations' => 'ดูการแปลในทุก ๆ ภาษาของแม่แบบ',
	'right-centralnotice-admin' => 'จัดการประกาศส่วนกลาง',
	'right-centralnotice-translate' => 'แปลประกาศส่วนกลาง',
	'action-centralnotice-admin' => 'จัดการประกาศส่วนกลาง',
	'action-centralnotice-translate' => 'แปลประกาศส่วนกลาง',
	'centralnotice-preferred' => 'แบบที่เลือก',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'centralnotice' => 'Merkezi uwedomleniýe admini',
	'noticetemplate' => 'Merkezi uwedomleniýe şablony',
	'centralnotice-desc' => 'Merkezi uwedomleniýe goşýar',
	'centralnotice-summary' => 'Bu modul size bar bolan gurulgy merkezi uwedomleniýeleri üýtgetmäge rugsat berýär.
Ony köne uwedomleniýeleri goşmak ýa-da aýyrmak üçin hem ulanmak bolýar.',
	'centralnotice-query' => 'Häzirki uwedomleniýeleri üýtget',
	'centralnotice-notice-name' => 'Uwedomleniýe ady',
	'centralnotice-end-date' => 'Gutaryş senesi',
	'centralnotice-enabled' => 'Açyk',
	'centralnotice-modify' => 'Tabşyr',
	'centralnotice-preview' => 'Deslapky syn',
	'centralnotice-add-new' => 'Täze merkezi uwedomleniýe goş',
	'centralnotice-remove' => 'Aýyr',
	'centralnotice-translate-heading' => '$1 üçin terjime',
	'centralnotice-manage' => 'Merkezi uwedomleniýäni dolandyr',
	'centralnotice-add' => 'Goş',
	'centralnotice-add-notice' => 'Uwedomleniýe goş',
	'centralnotice-add-template' => 'Şablon goş',
	'centralnotice-show-notices' => 'Uwedomleniýeleri görkez',
	'centralnotice-list-templates' => 'Şablonlaryň sanawyny görkez',
	'centralnotice-translations' => 'Terjimeler',
	'centralnotice-translate-to' => 'Şu dile terjime et:',
	'centralnotice-translate' => 'Terjime et',
	'centralnotice-english' => 'iňlisçe',
	'centralnotice-banner-name' => 'Şablon ady',
	'centralnotice-templates' => 'Şablonlar',
	'centralnotice-weight' => 'Agram',
	'centralnotice-locked' => 'Gulply',
	'centralnotice-notices' => 'Uwedomleniýeler',
	'centralnotice-notice-exists' => 'Uwedomleniýe eýýäm bar.
Goşulmaýar',
	'centralnotice-template-exists' => 'Şablon eýýäm bar.
Goşulmaýar',
	'centralnotice-notice-doesnt-exist' => 'Uwedomleniýe ýok.
Aýyrmaga zat ýok',
	'centralnotice-template-still-bound' => 'Şablon henizem bir uwedomleniýä bagly.
Aýrylmaýar.',
	'centralnotice-template-body' => 'Şablon göwresi:',
	'centralnotice-day' => 'Gün',
	'centralnotice-year' => 'Ýyl',
	'centralnotice-month' => 'Aý',
	'centralnotice-hours' => 'Sagat',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Taslama dili',
	'centralnotice-project-name' => 'Taslama ady',
	'centralnotice-start-date' => 'Başlangyç senesi',
	'centralnotice-start-time' => 'Başlangyç wagty (UTC)',
	'centralnotice-assigned-templates' => 'Bellenilen şablonlar',
	'centralnotice-no-templates' => 'Hiç hili şablon tapylmady.
Biraz goşuň!',
	'centralnotice-no-templates-assigned' => 'Bu uwedomleniýä hiç hili şablon bellenilmändir.
Biraz goşuň!',
	'centralnotice-available-templates' => 'Bar bolan şablonlar',
	'centralnotice-template-already-exists' => 'Şablon eýýäç kampaniýa baglanypdyr.
Goşulmaýar',
	'centralnotice-preview-template' => 'Şablony deslapky synla',
	'centralnotice-change-lang' => 'Terjime dilini üýtget',
	'centralnotice-weights' => 'Agramlar',
	'centralnotice-notice-is-locked' => 'Uwedomleniýe gulply.
Aýyrylmaýar',
	'centralnotice-overlap' => 'Uwedomleniýe başga bir uwedomleniýäniň wagty bilen çakyşýar.',
	'centralnotice-invalid-date-range' => 'Nädogry sene aralygy.
Täzelenmeýär',
	'centralnotice-null-string' => 'Boş setir goşup bolmaýar.
Goşulmaýar',
	'centralnotice-confirm-delete' => 'Bu elementi hakykatdan-da öçürjekmisiňiz?
Bu hereketi yzyna alyp bolýan däldir.',
	'centralnotice-no-notices-exist' => 'Hiç hili uwedomleniýe ýok.
Aşak birini goşuň.',
	'centralnotice-no-templates-translate' => 'Terjimeleri redaktirlemek üçin hiç hili şablon ýok.',
	'centralnotice-number-uses' => 'Ulanyşlar',
	'centralnotice-edit-template' => 'Şablony redaktirle',
	'centralnotice-message' => 'Habarlaşyk',
	'centralnotice-message-not-set' => 'Habarlaşyk bellenilmändir',
	'centralnotice-clone' => 'Klonirle',
	'centralnotice-clone-notice' => 'Şablonyň nusgasyny döret',
	'centralnotice-preview-all-template-translations' => 'Şablonyň bar bolan ähli terjimelerini deslapky synla',
	'right-centralnotice-admin' => 'Merkezi uwedomleniýeleri dolandyr',
	'right-centralnotice-translate' => 'Merkezi uwedomleniýeleri terjime et',
	'action-centralnotice-admin' => 'merkezi uwedomleniýeleri dolandyr',
	'action-centralnotice-translate' => 'merkezi uwedomleniýeleri terjime et',
	'centralnotice-preferred' => 'Ileri tutulýan',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'centralnotice' => 'Tagapangasiwa ng pangunahing pabatid',
	'noticetemplate' => 'Tagapangasiwa ng pangunahing pabatid',
	'bannerallocation' => 'Tagapangasiwa ng pangunahing pabatid',
	'centralnotice-desc' => 'Nagdaragdag ng pangunahing pahayag ng sayt/sityo',
	'centralnotice-summary' => 'Nagbibigay ang bahaging-panggampaning ito ng pahintulot na mabago mo ang iyong pangkasulukyang naitakdang mga pangunahing pahayag.
Maaari rin itong gamitin upang makapagdagdag o magtanggal ng mga lumang pahayag.',
	'centralnotice-query' => 'Baguhin ang pangkasalukuyang mga pabatid',
	'centralnotice-notice-name' => 'Pangalan ng pabatid',
	'centralnotice-end-date' => 'Pangwakas na petsa',
	'centralnotice-enabled' => 'Paganahin',
	'centralnotice-modify' => 'Ipasa',
	'centralnotice-save-banner' => 'Sagipin ang bandera',
	'centralnotice-preview' => 'Paunang tingin',
	'centralnotice-add-new' => 'Magdagdag ng isang bagong pangunahing pabatid',
	'centralnotice-remove' => 'Tanggalin',
	'centralnotice-translate-heading' => 'Salinwika para sa $1',
	'centralnotice-manage' => 'Pamahalaan ang pangunahing pabatid',
	'centralnotice-manage-templates' => 'Pamahalaan ang mga bandera',
	'centralnotice-add' => 'Magdagdag',
	'centralnotice-add-notice' => 'Magdagdag ng isang pabatid',
	'centralnotice-edit-notice' => 'Baguhin ang kampanya',
	'centralnotice-add-template' => 'Magdagdag ng isang suleras',
	'centralnotice-show-notices' => 'Ipagkita ang mga pabatid',
	'centralnotice-list-templates' => 'Itala ang mga suleras',
	'centralnotice-multiple_languages' => 'maramihan ($1)',
	'centralnotice-translations' => 'Mga salinwika',
	'centralnotice-translate-to' => 'Isalinwika patungong',
	'centralnotice-translate' => 'Isalinwika',
	'centralnotice-english' => 'Ingles',
	'centralnotice-banner-name' => 'Pangalan ng bandera:',
	'centralnotice-banner' => 'Bandera',
	'centralnotice-banner-heading' => 'Bandera: $1',
	'centralnotice-templates' => 'Mga suleras',
	'centralnotice-weight' => 'Timbang',
	'centralnotice-locked' => 'Nakakandado',
	'centralnotice-notice' => 'Kampanya',
	'centralnotice-notice-heading' => 'Kampanya: $1',
	'centralnotice-notices' => 'Mga pabatid',
	'centralnotice-notice-exists' => 'Umiiral na ang pabatid/pahayag.
Hindi idaragdag',
	'centralnotice-no-language' => 'Walang napiling wika para sa kampanya. Hindi idinaragdag.',
	'centralnotice-template-exists' => 'Umiiral na ang suleras.
Hindi idinargdag',
	'centralnotice-notice-doesnt-exist' => 'Hindi umiiral ang kampanya.',
	'centralnotice-remove-notice-doesnt-exist' => 'Hindi umiiral ang kampanya.
Walang tatanggalin.',
	'centralnotice-banner-doesnt-exist' => 'Hindi umiiral ang bandera.',
	'centralnotice-template-still-bound' => 'Nakadikit pa ang suleras sa isang pabatid/pahayag.
Hindi tatanggalin.',
	'centralnotice-template-body' => 'Katawan ng suleras:',
	'centralnotice-day' => 'Araw',
	'centralnotice-year' => 'Taon',
	'centralnotice-month' => 'Buwan',
	'centralnotice-hours' => 'Oras',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Wika ng proyekto',
	'centralnotice-select' => 'Piliin: $1',
	'centralnotice-top-ten-languages' => 'Nangungunang 10 mga wika',
	'centralnotice-project-name' => 'Pangalan ng proyekto',
	'centralnotice-start-date' => 'Petsa ng pagsisimula',
	'centralnotice-start-time' => 'Oras ng simula (UTC)',
	'centralnotice-end-time' => 'Katapusang oras (UTC)',
	'centralnotice-assigned-templates' => 'Nakatakdang mga suleras',
	'centralnotice-no-templates' => 'Walang natagpuang mga suleras.
Madagdag ng ilan!',
	'centralnotice-no-templates-assigned' => 'Walang nakatakdang mga suleras para sa pabatid.
Magdagdag ng ilan!',
	'centralnotice-available-templates' => 'Makukuhang mga suleras',
	'centralnotice-template-already-exists' => 'Nakabigkis na ang suleras sa kampanya.
Hindi idaragdag',
	'centralnotice-preview-template' => 'Paunang tingnan ang suleras',
	'centralnotice-change-lang' => 'Baguhin ang wika ng pagsasalin',
	'centralnotice-weights' => 'Mga timbang',
	'centralnotice-notice-is-locked' => 'Nakakandado ang pabatid.
Hindi tatanggalin',
	'centralnotice-overlap' => 'Nakikipagsabayan ang pabatid sa loob ng oras ng isa pang pahayag.
Hindi idaragdag',
	'centralnotice-invalid-date-range' => 'Hindi tanggap na sakop ng petsa.
Hindi isasapanahon',
	'centralnotice-null-string' => 'Hindi maidaragdag ang isang hindi mabisang bagting o hanay.
Hindi idaragdag',
	'centralnotice-confirm-delete' => 'Nakatitiyak ka bang ibig mong burahin ang bagay na ito?
Hindi na muling mababawi pa ang galaw na ito.',
	'centralnotice-no-notices-exist' => 'Walang umiiral na mga pabatid.
Magdagdag ng isa sa ibaba',
	'centralnotice-no-templates-translate' => 'Walang mga suleras na mapagsasagawaan ng mga pagbabagong pangsalinwika',
	'centralnotice-number-uses' => 'Mga mapaggagamitan',
	'centralnotice-settings' => 'Mga pagtatakda',
	'centralnotice-edit-template' => 'Baguhin ang suleras',
	'centralnotice-edit-template-summary' => 'Upang makalikha ng isang maisakakatubong mensahe, maglakip ng isang ginitlingang bagting sa loob ng tatlong kulot na mga braket, halimbawa na ang {{{jimbo-sipi}}}.',
	'centralnotice-message' => 'Mensahe',
	'centralnotice-message-not-set' => 'Hindi nakatakda ang mensahe',
	'centralnotice-clone' => 'Kopyang kahawig na kahawig ng pinaggayahan',
	'centralnotice-clone-notice' => 'Lumikha ng isang sipi ng suleras',
	'centralnotice-clone-name' => 'Pangalan:',
	'centralnotice-preview-all-template-translations' => 'Paunang tanawin ang lahat ng mga makukuhang mga salinwika ng suleras',
	'centralnotice-insert' => 'Isingit: $1',
	'centralnotice-hide-button' => 'Pindutang {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Pindutang {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Pindutang {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Pindutang pantulong sa pagsasalinwika',
	'centralnotice-donate-button' => 'Pindutang pang-abuloy',
	'centralnotice-expanded-banner' => 'Banderang pinalawak',
	'centralnotice-collapsed-banner' => 'Tumuping bandera',
	'centralnotice-banner-display' => 'Ipakita sa:',
	'centralnotice-banner-anonymous' => 'Hindi nakikilalang mga tagagamit',
	'centralnotice-banner-logged-in' => 'Nakalagdang mga tagagamit',
	'centralnotice-banner-type' => 'Uri ng bandera:',
	'centralnotice-banner-hidable' => 'Hindi tumitinag/Maitatago',
	'centralnotice-banner-collapsible' => 'Maititiklop',
	'centralnotice-geotargeted' => 'Puntiryang heograpiya',
	'centralnotice-countries' => 'Mga bansa',
	'centralnotice-allocation' => 'Paglalaan',
	'centralnotice-view-allocation' => 'Tingnan ang kabahagi ng bandera',
	'centralnotice-allocation-instructions' => 'Piliin ang kapaligirang nais mong tingnan ang kabahagi ng bandera:',
	'centralnotice-project-language' => 'Wika ng proyekto',
	'centralnotice-country' => 'Bansa',
	'centralnotice-no-allocation' => 'Walang bandera ibinahagi.',
	'centralnotice-allocation-description' => 'Ang banderang kabahagi para sa $1.$2 sa loob ng $3:',
	'centralnotice-percentage' => 'Kabahagdanan',
	'right-centralnotice-admin' => 'Pamahalaan ang pangunahing mga pabatid',
	'right-centralnotice-translate' => 'Isalinwika ang pangunahing mga pabatid',
	'action-centralnotice-admin' => 'pamahalaan ang pangunahing mga pabatid',
	'action-centralnotice-translate' => 'isalinwika ang pangunahing mga pabatid',
	'centralnotice-preferred' => 'Mas ninanais',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 * @author Srhat
 */
$messages['tr'] = array(
	'centralnotice' => 'Merkezi uyarı yöneticisi',
	'noticetemplate' => 'Merkezi uyarı şablonu',
	'centralnotice-desc' => 'Merkezi site uyarısı ekler',
	'centralnotice-summary' => 'Bu modül size, mevcut ayarlanmış merkezi uyarıları değiştirmenize izin verir.
Eski uyarıları ekleyip çıkarmak için de kullanılabilir.',
	'centralnotice-query' => 'Güncel uyarıları değiştir',
	'centralnotice-notice-name' => 'Uyarı adı',
	'centralnotice-end-date' => 'Bitiş tarihi',
	'centralnotice-enabled' => 'Etkinleştirilmiş',
	'centralnotice-modify' => 'Gönder',
	'centralnotice-preview' => 'Ön izleme',
	'centralnotice-add-new' => 'Yeni bir merkezi uyarı ekle',
	'centralnotice-remove' => 'Çıkar',
	'centralnotice-translate-heading' => '$1 için çeviri',
	'centralnotice-manage' => 'Merkezi uyarıyı yönet',
	'centralnotice-add' => 'Ekle',
	'centralnotice-add-notice' => 'Bir uyarı ekle',
	'centralnotice-add-template' => 'Bir şablon ekle',
	'centralnotice-show-notices' => 'Uyarıları göster',
	'centralnotice-list-templates' => 'Şablonları listele',
	'centralnotice-translations' => 'Çeviriler',
	'centralnotice-translate-to' => 'Şu dile çevir',
	'centralnotice-translate' => 'Çevir',
	'centralnotice-english' => 'İngilizce',
	'centralnotice-banner-name' => 'Şablon adı',
	'centralnotice-templates' => 'Şablonlar',
	'centralnotice-weight' => 'Önem',
	'centralnotice-locked' => 'Kilitli',
	'centralnotice-notices' => 'Uyarılar',
	'centralnotice-notice-exists' => 'Uyarı zaten var.
Eklenmiyor',
	'centralnotice-template-exists' => 'Şablon zaten var.
Eklenmiyor',
	'centralnotice-notice-doesnt-exist' => 'Uyarı mevcut değil.
Çıkaracak birşey yok',
	'centralnotice-template-still-bound' => 'Şablon hala bir uyarıya bağlı.
Kaldırılmıyor.',
	'centralnotice-template-body' => 'Şablon gövdesi:',
	'centralnotice-day' => 'Gün',
	'centralnotice-year' => 'Yıl',
	'centralnotice-month' => 'Ay',
	'centralnotice-hours' => 'Saat',
	'centralnotice-min' => 'Dakika',
	'centralnotice-project-lang' => 'Proje dili',
	'centralnotice-project-name' => 'Proje adı',
	'centralnotice-start-date' => 'Başlangıç tarihi',
	'centralnotice-start-time' => 'Başlangıç zamanı (UTC)',
	'centralnotice-assigned-templates' => 'Atanmış şablonlar',
	'centralnotice-no-templates' => 'Hiç şablon bulunamadı.
Birkaç tane ekleyin!',
	'centralnotice-no-templates-assigned' => 'Uyarıya hiç şablon atanmamış.
Birkaç tane ekleyin!',
	'centralnotice-available-templates' => 'Uygun şablonlar',
	'centralnotice-template-already-exists' => 'Şablon zaten kampanyaya bağlı.
Eklenmiyor',
	'centralnotice-preview-template' => 'Şablonu önizle',
	'centralnotice-change-lang' => 'Çeviri dilini değiştir',
	'centralnotice-weights' => 'Önemler',
	'centralnotice-notice-is-locked' => 'Uyarı kilitli.
Kaldırılmıyor',
	'centralnotice-overlap' => 'Uyarı başka bir uyarının zamanıyla çakışıyor.
Eklenmiyor',
	'centralnotice-invalid-date-range' => 'Geçersiz tarih aralığı.
Güncellenmiyor',
	'centralnotice-null-string' => 'Boş dizi eklenemez.
Eklenmiyor',
	'centralnotice-confirm-delete' => 'Bu öğeyi silmek istediğinize emin misiniz?
Bu işlem geri alınamaz.',
	'centralnotice-no-notices-exist' => 'Hiç uyarı yok.
Aşağıya bir tane ekleyin',
	'centralnotice-no-templates-translate' => 'Çevirileri değiştirmek için hiç şablon yok',
	'centralnotice-number-uses' => 'Kullanımlar',
	'centralnotice-edit-template' => 'Şablonu değiştir',
	'centralnotice-edit-template-summary' => 'Yerelleştirilebilir bir mesaj oluşturmak için, tireli bir metni üç köşeli parantez arasına yazın, örnek {{{jimbo-quote}}}',
	'centralnotice-message' => 'Mesaj',
	'centralnotice-message-not-set' => 'Mesaj ayarlanmadı',
	'centralnotice-clone' => 'Klonla',
	'centralnotice-clone-notice' => 'Şablonun kopyasını oluştur',
	'centralnotice-preview-all-template-translations' => 'Şablonun bütün uygun çevirilerini önizle',
	'right-centralnotice-admin' => 'Merkezi uyarıları yönet',
	'right-centralnotice-translate' => 'Merkezi uyarıları çevir',
	'action-centralnotice-admin' => 'merkezi uyarıları yönet',
	'action-centralnotice-translate' => 'merkezi uyarıları çevir',
	'centralnotice-preferred' => 'Tercih edilen',
);

/** Tatar (Cyrillic) (Татарча/Tatarça (Cyrillic))
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'centralnotice' => 'Хәбәрләр белән  идарә итү үзәге',
	'noticetemplate' => 'Үзәк хәбәрләр үрнәге',
	'centralnotice-desc' => 'Сәхифәнең гомуми хатларын йөкли',
	'centralnotice-summary' => 'Бу модуль Сезгә хәбәрләрегезне үзгәртергә ярдәм итә. Ул тагын яңа хәбәрләр өстәргә яки искеләрен юкка чыгарырга ярдәм итәчәк.',
	'centralnotice-query' => 'Әлеге хәбәрне үзгәртү',
	'centralnotice-notice-name' => 'Хәбәрнең исеме',
	'centralnotice-end-date' => 'Бетү вакыты',
	'centralnotice-enabled' => 'Ачылган',
	'centralnotice-modify' => 'Җибәрү',
	'centralnotice-preview' => 'Алдан карау',
	'centralnotice-add-new' => 'Яңа хәбәр өстәү',
	'centralnotice-remove' => 'Бетерү',
	'centralnotice-translate-heading' => '$1 өчен тәрҗемә',
	'centralnotice-manage' => 'Хәбәрләр белән идарә итү',
	'centralnotice-add' => 'Өстәргә',
	'centralnotice-add-notice' => 'Яңа хәбәр өстәү',
	'centralnotice-edit-notice' => 'Хәбәрне үзгәртү',
	'centralnotice-add-template' => 'Үрнәк өстәү',
	'centralnotice-show-notices' => 'Хәбәрне ачарга',
	'centralnotice-list-templates' => 'Үрнәкләр исемлеге',
	'centralnotice-translations' => 'Тәрҗемәләр',
	'centralnotice-translate-to' => 'Тәрҗемә',
	'centralnotice-translate' => 'Тәрҗемә',
	'centralnotice-english' => 'инглиз',
	'centralnotice-banner-name' => 'Үрнәкнең исеме:',
	'centralnotice-templates' => 'Үрнәкләр',
	'centralnotice-weight' => 'Киңлек',
	'centralnotice-locked' => 'Чикләнгән',
	'centralnotice-notices' => 'хәбәрләр',
	'centralnotice-notice-exists' => 'Мондый хәбәр бар инде',
	'centralnotice-template-exists' => 'Мондый үрнәк бар инде',
	'centralnotice-notice-doesnt-exist' => 'Мондый хәбәр юк',
	'centralnotice-remove-notice-doesnt-exist' => 'Мондый хәбәрне юкка чыгару мөмкин түгел, чөнки ул юк',
	'centralnotice-template-still-bound' => 'Үрнәк һаман хәбәргә бәйләнгән, юкка чыгарырга мөмкин түгел.',
	'centralnotice-template-body' => 'Үрнәкнең эчтәлеге:',
	'centralnotice-day' => 'Көн',
	'centralnotice-year' => 'Ел',
	'centralnotice-month' => 'Ай',
	'centralnotice-hours' => 'Сәгать',
	'centralnotice-min' => 'Минут',
	'centralnotice-project-lang' => 'Проектның теле',
	'centralnotice-project-name' => 'Проектның исеме',
	'centralnotice-start-date' => 'Башлау вакыты',
	'centralnotice-start-time' => 'Башлау сәгате (UTC)',
	'centralnotice-assigned-templates' => 'Куелган үрнәкләр',
	'centralnotice-no-templates' => 'Үрнәкләр табылмады',
	'centralnotice-no-templates-assigned' => 'Үрнәккә бәйләнгән хәбәрләр юк',
	'centralnotice-available-templates' => 'Үрнәкләр',
	'centralnotice-template-already-exists' => 'Үрнәк  өстәлмәде',
	'centralnotice-preview-template' => 'Алдан карау',
	'centralnotice-change-lang' => 'Тәрҗемә телен үзгәртү',
	'centralnotice-weights' => 'Үлчәү',
	'centralnotice-notice-is-locked' => 'Хәбәр чикләнде',
	'centralnotice-overlap' => 'Хәбәр башка хәбәр белән чикләнә',
	'centralnotice-invalid-date-range' => 'Вакыт дөрес түгел',
	'centralnotice-null-string' => 'Буш юлны өстәү мөмкин түгел',
	'centralnotice-confirm-delete' => 'Сез моны бетерергә ризамы?',
	'centralnotice-no-notices-exist' => 'Хәбәрләр юк',
	'centralnotice-no-templates-translate' => 'Тәрҗемәне карау өчен үрнәк юк',
	'centralnotice-number-uses' => 'Кулланыла',
	'centralnotice-edit-template' => 'Үрнәкне үзгәртергә',
	'centralnotice-edit-template-summary' => 'Локалләштерелгән хат язу өчен, сез җөмләне өчле фигуралы җәяләргә алырга тиешсез. Мәсәлән {{{өземтә-Сәлам}}}.',
	'centralnotice-message' => 'Хат',
	'centralnotice-message-not-set' => 'Хат тикшерелмәде',
	'centralnotice-clone' => 'Кабатлау',
	'centralnotice-clone-notice' => 'Үрнәне кабатлап ясау',
	'centralnotice-clone-name' => 'Исеме:',
	'centralnotice-preview-all-template-translations' => 'Үрнәкнең мөмкин булган тәрҗемәләрен карарга',
	'centralnotice-insert' => 'Өстәү: $1',
	'centralnotice-hide-button' => '{{int:centralnotice-shared-hide}} төймәсе',
	'centralnotice-collapse-button' => '{{int:centralnotice-shared-collapse}} төймәсе',
	'centralnotice-expand-button' => '{{int:centralnotice-shared-expand}} төймәсе',
	'right-centralnotice-admin' => 'Үзәкләштерелгән идарә иту системасы',
	'right-centralnotice-translate' => 'Хәбәрләрне тәрҗемә итү',
	'action-centralnotice-admin' => 'үзәкләштерелгән идарә иту системасы',
	'action-centralnotice-translate' => 'хәбәрләрне тәрҗемә итү',
	'centralnotice-preferred' => 'Катгый рәвештә',
);

/** Udmurt (Удмурт)
 * @author Kaganer
 */
$messages['udm'] = array(
	'centralnotice-message' => 'Ивортон',
);

/** Ukrainian (Українська)
 * @author Ahonc
 * @author Aleksandrit
 * @author Riwnodennyk
 * @author Ytsukeng Fyvaprol
 * @author Тест
 */
$messages['uk'] = array(
	'centralnotice' => 'Управління централізованими сповіщеннями',
	'noticetemplate' => 'Управління централізованими сповіщеннями',
	'centralnotice-desc' => 'Додає загальне повідомлення сайту',
	'centralnotice-summary' => 'Цей модуль дозволяє вам змінювати ваші поточні централізовані повідомлення.
Він також може використовуватися для додавання нових і видалення старих повідомлень.',
	'centralnotice-query' => 'Змінити поточне повідомлення',
	'centralnotice-notice-name' => 'Назва повідомлення',
	'centralnotice-end-date' => 'Дата закінчення',
	'centralnotice-enabled' => 'Включено',
	'centralnotice-modify' => 'Відправити',
	'centralnotice-preview' => 'Попередній перегляд',
	'centralnotice-add-new' => 'Додати нове централізоване повідомлення',
	'centralnotice-remove' => 'Вилучити',
	'centralnotice-translate-heading' => 'Переклад для $1',
	'centralnotice-manage' => 'Управління централізованими сповіщеннями',
	'centralnotice-manage-templates' => 'Управління банерами',
	'centralnotice-add' => 'Додати',
	'centralnotice-add-notice' => 'Додати повідомлення',
	'centralnotice-edit-notice' => 'Змінити кампанію',
	'centralnotice-add-template' => 'Додати шаблон',
	'centralnotice-show-notices' => 'Показати повідомлення',
	'centralnotice-list-templates' => 'Cписок шаблонів',
	'centralnotice-translations' => 'Переклади',
	'centralnotice-translate-to' => 'Переклад на',
	'centralnotice-translate' => 'Переклад',
	'centralnotice-english' => 'англійську',
	'centralnotice-banner-name' => 'Назва банера:',
	'centralnotice-banner' => 'Банер',
	'centralnotice-banner-heading' => 'Банер: $1',
	'centralnotice-templates' => 'Шаблони',
	'centralnotice-weight' => 'Ширина',
	'centralnotice-locked' => 'Заблокований',
	'centralnotice-notice' => 'Кампанія',
	'centralnotice-notices' => 'повідомлення',
	'centralnotice-notice-exists' => 'Повідомлення вже існує.
Не додається',
	'centralnotice-template-exists' => 'Шаблон вже існує.
Не додається',
	'centralnotice-notice-doesnt-exist' => 'Кампанії не існує.',
	'centralnotice-remove-notice-doesnt-exist' => 'Кампанії не існує.
Нема чого вилучати.',
	'centralnotice-template-still-bound' => "Шаблон, як і раніше, пов'язаний з повідомленням.
Не видаляється.",
	'centralnotice-template-body' => 'Тіло шаблону:',
	'centralnotice-day' => 'День',
	'centralnotice-year' => 'Рік',
	'centralnotice-month' => 'Місяць',
	'centralnotice-hours' => 'Час',
	'centralnotice-min' => 'Хвилина',
	'centralnotice-project-lang' => 'Мова проекту',
	'centralnotice-project-name' => 'Назва проекту',
	'centralnotice-start-date' => 'Дата початку',
	'centralnotice-start-time' => 'Час початку (UTC)',
	'centralnotice-assigned-templates' => 'Встановлені шаблони',
	'centralnotice-no-templates' => 'Не знайдено шаблонів.
Додайте що-небудь!',
	'centralnotice-no-templates-assigned' => "Не має пов'язаних з повідомленням шаблонів.
Додайте який-небудь!",
	'centralnotice-available-templates' => 'Доступні шаблони',
	'centralnotice-template-already-exists' => "Шаблон вже прив'язаний.
Не доданий",
	'centralnotice-preview-template' => 'Попередній перегляд шаблону',
	'centralnotice-change-lang' => 'Змінити мову перекладу',
	'centralnotice-weights' => 'Ваги',
	'centralnotice-notice-is-locked' => 'Повідомлення заблоковано.
Не вилучається',
	'centralnotice-overlap' => 'Повідомлення перекривається за часом з іншим повідомленням.
Не додається',
	'centralnotice-invalid-date-range' => 'Хибний діапазон дат.
Не оновлюється',
	'centralnotice-null-string' => 'Не вдається додати порожній рядок.
Не додається',
	'centralnotice-confirm-delete' => 'Ви впевнені у вирішенні вилучити цей елемент?
Цю дію не можна буде скасувати.',
	'centralnotice-no-notices-exist' => 'Немає повідомлень.
Можна додати',
	'centralnotice-no-templates-translate' => 'Не має ні одного шаблону для редагування перекладу',
	'centralnotice-number-uses' => 'Використовуються',
	'centralnotice-edit-template' => 'Редагувати шаблон',
	'centralnotice-edit-template-summary' => 'Щоб створити повідомлення, яке можна локалізувати, укладіть рядок з дефісом в три фігурні дужки, наприклад {{{цитата-джимбо}}}.',
	'centralnotice-message' => 'Повідомлення',
	'centralnotice-message-not-set' => 'Повідомлення не встановлено',
	'centralnotice-clone' => 'Клонування',
	'centralnotice-clone-notice' => 'Створити копію шаблона',
	'centralnotice-clone-name' => 'Назва:',
	'centralnotice-preview-all-template-translations' => 'Переглянути всі доступні переклади шаблону',
	'centralnotice-donate-button' => 'Ґудзик для пожертв',
	'centralnotice-banner-anonymous' => 'Анонімні користувачі',
	'centralnotice-banner-type' => 'Тип банера:',
	'right-centralnotice-admin' => 'Управління централізованими сповіщеннями',
	'right-centralnotice-translate' => 'Переклад централізованих повідомлень',
	'action-centralnotice-admin' => 'управління централізованими сповіщеннями',
	'action-centralnotice-translate' => 'переклад централізованих повідомлень',
	'centralnotice-preferred' => 'Бажано',
);

/** Vèneto (Vèneto)
 * @author Candalua
 * @author Vajotwo
 */
$messages['vec'] = array(
	'centralnotice' => 'Gestion notifiche sentralizade',
	'noticetemplate' => 'Modèl de aviso sentralizà',
	'centralnotice-desc' => 'Zonta un aviso çentralizà in çima a la pagina (sitenotice)',
	'centralnotice-summary' => 'Sto modulo el permete de canbiar i avisi sentralixà.
In più se pol dopararlo anca par zontar o cavar avisi veci.',
	'centralnotice-query' => 'Modìfega le notifiche corenti',
	'centralnotice-notice-name' => 'Nome de la notifica',
	'centralnotice-end-date' => 'Data de fine',
	'centralnotice-enabled' => 'Ativà',
	'centralnotice-modify' => 'Invia',
	'centralnotice-preview' => 'Anteprima',
	'centralnotice-add-new' => 'Zonta na notifica sentrale nova',
	'centralnotice-remove' => 'Cava',
	'centralnotice-translate-heading' => 'Tradussion par $1',
	'centralnotice-manage' => 'Gestion avisi sentralixà',
	'centralnotice-add' => 'Zonta',
	'centralnotice-add-notice' => 'Zonta na notifica',
	'centralnotice-add-template' => 'Zonta un modèl',
	'centralnotice-show-notices' => 'Mostra notifiche',
	'centralnotice-list-templates' => 'Elenca i modèi',
	'centralnotice-translations' => 'Tradussioni',
	'centralnotice-translate-to' => 'Tradusi con',
	'centralnotice-translate' => 'Tradusi',
	'centralnotice-english' => 'Inglese',
	'centralnotice-banner-name' => 'Nome modeło',
	'centralnotice-templates' => 'Modèi',
	'centralnotice-weight' => 'Peso',
	'centralnotice-locked' => 'Blocà',
	'centralnotice-notices' => 'Notifiche',
	'centralnotice-notice-exists' => 'Notifica zà esistente.
Inserimento mia fato',
	'centralnotice-template-exists' => 'Modèl zà esistente.
Inserimento mia fato',
	'centralnotice-notice-doesnt-exist' => 'Notifica mia esistente.
Rimozion mia fata',
	'centralnotice-template-still-bound' => 'Modèl ancora ligà a na notifica.
Rimozion mia fata.',
	'centralnotice-template-body' => 'Corpo del modèl:',
	'centralnotice-day' => 'Zorno',
	'centralnotice-year' => 'Ano',
	'centralnotice-month' => 'Mese',
	'centralnotice-hours' => 'Ora',
	'centralnotice-min' => 'Minuto',
	'centralnotice-project-lang' => 'Lengoa del projeto',
	'centralnotice-project-name' => 'Nome del projeto',
	'centralnotice-start-date' => 'Data de scominsio',
	'centralnotice-start-time' => 'Ora de scominsio (UTC)',
	'centralnotice-assigned-templates' => 'Modèi assegnà',
	'centralnotice-no-templates' => 'Nissun modèl catà.
Zónteghene qualchedun!',
	'centralnotice-no-templates-assigned' => 'Nissun modèl assegnà a la notifica
Zónteghene qualchedun!',
	'centralnotice-available-templates' => 'Modèi disponibili',
	'centralnotice-template-already-exists' => 'Sto modèl el xe zà ligà a na campagna.
Inserimento mia fato',
	'centralnotice-preview-template' => 'Anteprima modèl',
	'centralnotice-change-lang' => 'Cànbia lengoa de tradussion',
	'centralnotice-weights' => 'Pesi',
	'centralnotice-notice-is-locked' => 'Notifica blocà.
Rimozion mia fata',
	'centralnotice-overlap' => "El periodo de validità de sto aviso la se sormonta col periodo de n'antro aviso.
Creassion de l'aviso mia fata",
	'centralnotice-invalid-date-range' => 'Intervàl de date mia valido.
Modìfega mia fata',
	'centralnotice-null-string' => 'No se pol zontar na stringa voda.
Inserimento mia fato',
	'centralnotice-confirm-delete' => 'Vuto dal bon scancelar sto elemento? Arda che dopo no se pol più recuperarlo.',
	'centralnotice-no-notices-exist' => 'No esiste nissuna notifica.
Zónteghene una qua soto.',
	'centralnotice-no-templates-translate' => 'No ghe xe nissun modèl de cui modificar la tradussion',
	'centralnotice-number-uses' => 'Usi',
	'centralnotice-edit-template' => 'Modìfega modèl',
	'centralnotice-message' => 'Messagio',
	'centralnotice-message-not-set' => 'Messajo mia inpostà',
	'centralnotice-clone' => 'Copia',
	'centralnotice-clone-notice' => 'Crea na copia del modèl',
	'centralnotice-preview-all-template-translations' => 'Anteprima de tute le tradussion disponibili del modèl',
	'right-centralnotice-admin' => 'Gestisse i avisi sentralixà',
	'right-centralnotice-translate' => 'Tradusi le notifiche sentrali',
	'action-centralnotice-admin' => 'gestir i avisi sentralixà',
	'action-centralnotice-translate' => 'tradur i avisi sentralixà',
	'centralnotice-preferred' => 'Preferìo',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'centralnotice' => 'Quản lý các thông báo chung',
	'noticetemplate' => 'Quản lý các thông báo chung',
	'bannerallocation' => 'Quản lý các thông báo chung',
	'centralnotice-desc' => 'Thêm thông báo ở đầu các trang tại hơn một wiki',
	'centralnotice-summary' => 'Dùng phần này, bạn có thể sửa đổi các thông báo chung đã được thiết lập, cũng như thêm thông báo mới hoặc dời thông báo cũ.',
	'centralnotice-query' => 'Sửa đổi các thông báo hiện hành',
	'centralnotice-notice-name' => 'Tên thông báo',
	'centralnotice-end-date' => 'Ngày kết thúc',
	'centralnotice-enabled' => 'Đang hiện',
	'centralnotice-modify' => 'Lưu các thông báo',
	'centralnotice-save-banner' => 'Lưu bảng',
	'centralnotice-preview' => 'Xem trước',
	'centralnotice-add-new' => 'Thêm thông báo chung mới',
	'centralnotice-remove' => 'Dời',
	'centralnotice-translate-heading' => 'Dịch $1',
	'centralnotice-manage' => 'Quản lý thông báo chung',
	'centralnotice-manage-templates' => 'Quản lý bảng',
	'centralnotice-add' => 'Thêm',
	'centralnotice-add-notice' => 'Thêm thông báo',
	'centralnotice-edit-notice' => 'Sửa đổi cuộc vận động',
	'centralnotice-add-template' => 'Thêm bảng',
	'centralnotice-show-notices' => 'Xem các thông báo',
	'centralnotice-list-templates' => 'Liệt kê các bảng',
	'centralnotice-multiple_languages' => 'đa ngữ ($1)',
	'centralnotice-translations' => 'Bản dịch',
	'centralnotice-translate-to' => 'Dịch ra',
	'centralnotice-translate' => 'Biên dịch',
	'centralnotice-english' => 'tiếng Anh',
	'centralnotice-banner-name' => 'Tên bảng:',
	'centralnotice-banner' => 'Bảng',
	'centralnotice-banner-heading' => 'Bảng: $1',
	'centralnotice-templates' => 'Bảng',
	'centralnotice-weight' => 'Mức ưu tiên',
	'centralnotice-locked' => 'Bị khóa',
	'centralnotice-notice' => 'Cuộc vận động',
	'centralnotice-notice-heading' => 'Cuộc vận động: $1',
	'centralnotice-notices' => 'Thông báo',
	'centralnotice-notice-exists' => 'Không thêm được: thông báo đã tồn tại.',
	'centralnotice-no-language' => 'Không thêm được: chưa chọn ngôn ngữ cho cuộc vận động.',
	'centralnotice-template-exists' => 'Không thêm được: bảng đã tồn tại.',
	'centralnotice-notice-doesnt-exist' => 'Cuộc vận động không tồn tại.',
	'centralnotice-remove-notice-doesnt-exist' => 'Cuộc vận động không tồn tại.
Không có gì để dời.',
	'centralnotice-banner-doesnt-exist' => 'Bảng không tồn tại.',
	'centralnotice-template-still-bound' => 'Không dời được: có thông báo dựa theo cuộc vận động.',
	'centralnotice-template-body' => 'Nội dung bảng:',
	'centralnotice-day' => 'Ngày',
	'centralnotice-year' => 'Năm',
	'centralnotice-month' => 'Tháng',
	'centralnotice-hours' => 'Giờ',
	'centralnotice-min' => 'Phút',
	'centralnotice-project-lang' => 'Ngôn ngữ của dự án',
	'centralnotice-select' => 'Chọn: $1',
	'centralnotice-top-ten-languages' => 'Top 10 ngôn ngữ',
	'centralnotice-project-name' => 'Tên dự án',
	'centralnotice-start-date' => 'Ngày bắt đầu',
	'centralnotice-start-time' => 'Lúc bắt đầu (UTC)',
	'centralnotice-end-time' => 'Lúc kết thức (UTC)',
	'centralnotice-assigned-templates' => 'Bảng được sử dụng',
	'centralnotice-no-templates' => 'Hệ thống không chứa bảng.
Hãy thêm vào!',
	'centralnotice-no-templates-assigned' => 'Cuộc vận động không dùng bảng nào. Hãy chỉ định bảng!',
	'centralnotice-available-templates' => 'Bảng có sẵn',
	'centralnotice-template-already-exists' => 'Không chỉ định được: thông báo đã sử dụng bảng.',
	'centralnotice-preview-template' => 'Xem trước bảng',
	'centralnotice-change-lang' => 'Thay đổi ngôn ngữ của bản dịch',
	'centralnotice-weights' => 'Mức ưu tiên',
	'centralnotice-notice-is-locked' => 'Không dời được: thông báo bị khóa.',
	'centralnotice-overlap' => 'Không thêm được: thông báo sẽ hiện cùng lúc với thông báo khác.',
	'centralnotice-invalid-date-range' => 'Không cập nhật được: thời gian không hợp lệ.',
	'centralnotice-null-string' => 'Không thêm được: chuỗi rỗng.',
	'centralnotice-confirm-delete' => 'Bạn có chắc muốn xóa không? Không thể lùi lại tác vụ này.',
	'centralnotice-no-notices-exist' => 'Chưa có thông báo. Hãy thêm thông báo ở dưới.',
	'centralnotice-no-templates-translate' => 'Không có bản mẫu để dịch',
	'centralnotice-number-uses' => 'Số thông báo dùng',
	'centralnotice-settings' => 'Thiết lập',
	'centralnotice-edit-template' => 'Sửa đổi bản mẫu',
	'centralnotice-edit-template-summary' => 'Để tạo thông điệp có thể bản địa hóa, đóng chuỗi ngắt trong ba dấu ngoặc kép, ví dụ {{{jimbo-quote}}}.',
	'centralnotice-message' => 'Thông báo',
	'centralnotice-message-not-set' => 'Thông báo chưa được thiết lập',
	'centralnotice-clone' => 'Sao',
	'centralnotice-clone-notice' => 'Tạo bản sao của bản mẫu',
	'centralnotice-clone-name' => 'Tên:',
	'centralnotice-preview-all-template-translations' => 'Xem trước các bản dịch có sẵn của bảng',
	'centralnotice-insert' => 'Chèn: $1',
	'centralnotice-hide-button' => 'Nút {{int:centralnotice-shared-hide}}',
	'centralnotice-collapse-button' => 'Nút {{int:centralnotice-shared-collapse}}',
	'centralnotice-expand-button' => 'Nút {{int:centralnotice-shared-expand}}',
	'centralnotice-translate-button' => 'Nút giúp dịch',
	'centralnotice-donate-button' => 'Nút quyên góp',
	'centralnotice-expanded-banner' => 'Bảng mở rộng',
	'centralnotice-collapsed-banner' => 'Bảng thu nhỏ',
	'centralnotice-banner-display' => 'Hiển thị cho:',
	'centralnotice-banner-anonymous' => 'Người dùng vô danh',
	'centralnotice-banner-logged-in' => 'Thành viên đã đăng nhập',
	'centralnotice-banner-type' => 'Kiểu bảng:',
	'centralnotice-banner-hidable' => 'Cố định / Ẩn được',
	'centralnotice-banner-collapsible' => 'Thu nhỏ được',
	'centralnotice-geotargeted' => 'Mục tiêu địa lý',
	'centralnotice-countries' => 'Quốc gia',
	'centralnotice-allocation' => 'Phân bổ',
	'centralnotice-view-allocation' => 'Xem cách phân phối bảng',
	'centralnotice-allocation-instructions' => 'Chọn môi trường để xem cách phân phối bảng:',
	'centralnotice-project-language' => 'Ngôn ngữ dự án',
	'centralnotice-country' => 'Quốc gia',
	'centralnotice-no-allocation' => 'Chưa có phân phối bảng nào.',
	'centralnotice-allocation-description' => 'Phân phối bảng cho $1.$2 tại $3:',
	'centralnotice-percentage' => 'Tỷ lệ',
	'right-centralnotice-admin' => 'Quản lý thông báo chung',
	'right-centralnotice-translate' => 'Dịch thông báo chung',
	'action-centralnotice-admin' => 'quản lý thông báo chung',
	'action-centralnotice-translate' => 'dịch thông báo chung',
	'centralnotice-preferred' => 'Nổi bật hơn',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'centralnotice-desc' => 'Läükön sitanulod zänodik',
	'centralnotice-end-date' => 'Finadät',
	'centralnotice-enabled' => 'Pemögükon',
	'centralnotice-modify' => 'Sedön',
	'centralnotice-preview' => 'Büologed',
	'centralnotice-remove' => 'Moükön',
	'centralnotice-translate-heading' => 'Tradutam pro $1',
	'centralnotice-add' => 'Läükön',
	'centralnotice-add-template' => 'Läükön samafomoti',
	'centralnotice-list-templates' => 'Lisedön samafomotis',
	'centralnotice-translations' => 'Tradutods',
	'centralnotice-translate-to' => 'Tradutön ini',
	'centralnotice-translate' => 'Tradutön',
	'centralnotice-english' => 'Linglänapük',
	'centralnotice-banner-name' => 'Nem samafomota',
	'centralnotice-templates' => 'Samafomots',
	'centralnotice-locked' => 'Pelökofärmükon',
	'centralnotice-template-exists' => 'Samafomot ya dabinon.
No paläükon',
	'centralnotice-day' => 'Del',
	'centralnotice-year' => 'Yel',
	'centralnotice-month' => 'Mul',
	'centralnotice-hours' => 'Düp',
	'centralnotice-min' => 'Minut',
	'centralnotice-project-lang' => 'Proyegapük',
	'centralnotice-project-name' => 'Proyeganem',
	'centralnotice-start-date' => 'Primadät',
	'centralnotice-start-time' => 'Primatim (UTC)',
	'centralnotice-assigned-templates' => 'Samafomots pegivülöl',
	'centralnotice-no-templates' => 'Samafomots nonik petuvons.
Läükolös anikis!',
	'centralnotice-available-templates' => 'Samafomots gebidik',
	'centralnotice-preview-template' => 'Büologed samafomota',
	'centralnotice-change-lang' => 'Votükön tradutamapük',
	'centralnotice-confirm-delete' => 'Sevol-li fümo, das vilol moükön atosi?
Dun at obinon nesädunovik.',
	'centralnotice-no-templates-translate' => 'Dabinons samafomots nonik, tefü kels kanoy bevobön tradutodis',
	'centralnotice-number-uses' => 'Gebs',
	'centralnotice-edit-template' => 'Redakön samafomoti',
	'centralnotice-message' => 'Nun',
	'centralnotice-clone-notice' => 'Jafön kopiedi samafomota',
	'centralnotice-preview-all-template-translations' => 'Büologed tradutodas gebidik valik samafomota',
	'centralnotice-preferred' => 'Pebuüköl',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'centralnotice-preview' => 'פֿאראויסשטעלונג',
	'centralnotice-translate-heading' => 'פֿאַרטייטשונג פֿאַר ִ$1',
	'centralnotice-add' => 'צולייגן',
	'centralnotice-translations' => 'פֿאַרטייטשונגען',
	'centralnotice-translate-to' => 'פֿאַרטייטשן אויף',
	'centralnotice-translate' => 'פֿאַרטייטשן',
	'centralnotice-english' => 'ענגליש',
	'centralnotice-banner-name' => 'פֿאנע נאָמען',
	'centralnotice-banner' => 'פֿאנע',
	'centralnotice-templates' => 'מוסטערן',
	'centralnotice-locked' => 'פֿאַרשלאסן',
	'centralnotice-notices' => 'נאטיצן',
	'centralnotice-day' => 'טאג',
	'centralnotice-year' => 'יאר',
	'centralnotice-month' => 'מאנאט',
	'centralnotice-hours' => 'שעה',
	'centralnotice-min' => 'מינוט',
	'centralnotice-project-lang' => 'פראיעקט שפראך',
	'centralnotice-project-name' => 'פראיעקט נאמען',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'centralnotice-english' => 'Gẹ̀ẹ́sì',
	'centralnotice-day' => 'Ọjọ́',
	'centralnotice-year' => 'Ọdún',
	'centralnotice-month' => 'Osù',
	'centralnotice-hours' => 'Wákàtí',
	'centralnotice-min' => 'Ìṣẹ́jú',
);

/** Cantonese (粵語)
 * @author Horacewai2
 * @author Shinjiman
 */
$messages['yue'] = array(
	'centralnotice' => '統一通告管理',
	'centralnotice-desc' => '加入一個中央公告欄',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Alex S.H. Lin
 * @author Chenzw
 * @author Gzdavidwong
 * @author Liangent
 * @author Wmr89502270
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'centralnotice' => '中央通告管理',
	'noticetemplate' => '中央通告模板',
	'centralnotice-desc' => '在页面的顶部增加統一的公告栏位',
	'centralnotice-summary' => '这个模块允许你编辑你当前设置的中央通告。
它也可以用于添加或删除旧的通告。',
	'centralnotice-query' => '修改当前的通告',
	'centralnotice-notice-name' => '通告名称',
	'centralnotice-end-date' => '结束日期',
	'centralnotice-enabled' => '已启用',
	'centralnotice-modify' => '提交',
	'centralnotice-preview' => '预览',
	'centralnotice-add-new' => '添加一个新的中央通告',
	'centralnotice-remove' => '移除',
	'centralnotice-translate-heading' => '$1的翻译',
	'centralnotice-manage' => '管理中央通告',
	'centralnotice-add' => '添加',
	'centralnotice-add-notice' => '添加一个通告',
	'centralnotice-add-template' => '添加一个模板',
	'centralnotice-show-notices' => '显示通告',
	'centralnotice-list-templates' => '列出模板',
	'centralnotice-translations' => '翻译',
	'centralnotice-translate-to' => '翻译到',
	'centralnotice-translate' => '翻译',
	'centralnotice-english' => '英语',
	'centralnotice-banner-name' => '模板名称',
	'centralnotice-templates' => '模板',
	'centralnotice-weight' => '权重',
	'centralnotice-locked' => '已锁定',
	'centralnotice-notices' => '通告',
	'centralnotice-notice-exists' => '通告已经存在。
没有添加',
	'centralnotice-template-exists' => '模板已经存在。
没有添加',
	'centralnotice-notice-doesnt-exist' => '通告不存在。
没有东西移除',
	'centralnotice-template-still-bound' => '模板不存在。
没有东西移除。',
	'centralnotice-template-body' => '模板主体：',
	'centralnotice-day' => '日',
	'centralnotice-year' => '年',
	'centralnotice-month' => '月',
	'centralnotice-hours' => '时',
	'centralnotice-min' => '分',
	'centralnotice-project-lang' => '计划语言',
	'centralnotice-select' => '选定',
	'centralnotice-project-name' => '计划名称',
	'centralnotice-start-date' => '开始日期',
	'centralnotice-start-time' => '开始时间（UTC）',
	'centralnotice-assigned-templates' => '已分配的模板',
	'centralnotice-no-templates' => '没有找到模板。
添加一些！',
	'centralnotice-no-templates-assigned' => '没有模板分配到通告。
添加一些！',
	'centralnotice-available-templates' => '可用模板',
	'centralnotice-template-already-exists' => '模板已经绑定到营销。
没有添加',
	'centralnotice-preview-template' => '预览模板',
	'centralnotice-change-lang' => '改变翻译语言',
	'centralnotice-weights' => '权重',
	'centralnotice-notice-is-locked' => '通告已经锁定。
没有移除',
	'centralnotice-overlap' => '通告在另一个通告的时间内重叠。
没有添加',
	'centralnotice-invalid-date-range' => '无效日期范围。
没有更新',
	'centralnotice-null-string' => '不能添加一个空字符串。
没有添加',
	'centralnotice-confirm-delete' => '你确定要删除这个项目？
这个动作是不可恢复的。',
	'centralnotice-no-notices-exist' => '不存在通告。
在下面添加一个。',
	'centralnotice-no-templates-translate' => '没有任何可以编辑翻译的模板',
	'centralnotice-number-uses' => '使用',
	'centralnotice-edit-template' => '编辑模板',
	'centralnotice-edit-template-summary' => '要创建一个可本地化的消息，使用三个{，例如{{{jimbo-quote}}}。',
	'centralnotice-message' => '消息',
	'centralnotice-message-not-set' => '没有设置消息',
	'centralnotice-clone' => '建立副本',
	'centralnotice-clone-notice' => '创建一个模板的副本',
	'centralnotice-clone-name' => '名称',
	'centralnotice-preview-all-template-translations' => '预览模板的所有可用翻译',
	'centralnotice-insert' => '插入',
	'right-centralnotice-admin' => '管理中央通告',
	'right-centralnotice-translate' => '翻译中央通告',
	'action-centralnotice-admin' => '管理中央通告',
	'action-centralnotice-translate' => '翻译中央通告',
	'centralnotice-preferred' => '偏好的',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alex S.H. Lin
 * @author Frankou
 * @author Horacewai2
 * @author Liangent
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'centralnotice' => '中央通告管理',
	'noticetemplate' => '中央通告模板',
	'centralnotice-desc' => '在頁面頂端增加統一的公告欄位',
	'centralnotice-summary' => '這個模塊允許你編輯你當前設置的中央通告。
它也可以用於添加或刪除舊的通告。',
	'centralnotice-query' => '修改當前的通告',
	'centralnotice-notice-name' => '通告名稱',
	'centralnotice-end-date' => '結束日期',
	'centralnotice-enabled' => '已啟用',
	'centralnotice-modify' => '提交',
	'centralnotice-preview' => '預覽',
	'centralnotice-add-new' => '添加一個新的中央通告',
	'centralnotice-remove' => '移除',
	'centralnotice-translate-heading' => '$1的翻譯',
	'centralnotice-manage' => '管理中央通告',
	'centralnotice-add' => '添加',
	'centralnotice-add-notice' => '添加一個通告',
	'centralnotice-add-template' => '添加一個模板',
	'centralnotice-show-notices' => '顯示通告',
	'centralnotice-list-templates' => '列出模板',
	'centralnotice-translations' => '翻譯',
	'centralnotice-translate-to' => '翻譯到',
	'centralnotice-translate' => '翻譯',
	'centralnotice-english' => '英語',
	'centralnotice-banner-name' => '模板名稱',
	'centralnotice-templates' => '模板',
	'centralnotice-weight' => '權重',
	'centralnotice-locked' => '已鎖定',
	'centralnotice-notices' => '通告',
	'centralnotice-notice-exists' => '通告已經存在。
沒有添加',
	'centralnotice-template-exists' => '模板已經存在。
沒有添加',
	'centralnotice-notice-doesnt-exist' => '通告不存在。
沒有東西移除',
	'centralnotice-template-still-bound' => '模板不存在。
沒有東西移除。',
	'centralnotice-template-body' => '模板體：',
	'centralnotice-day' => '日',
	'centralnotice-year' => '年',
	'centralnotice-month' => '月',
	'centralnotice-hours' => '時',
	'centralnotice-min' => '分',
	'centralnotice-project-lang' => '計劃語言',
	'centralnotice-project-name' => '計劃名稱',
	'centralnotice-start-date' => '開始日期',
	'centralnotice-start-time' => '開始時間（UTC）',
	'centralnotice-assigned-templates' => '已分配的模板',
	'centralnotice-no-templates' => '沒有找到模板。
添加一些！',
	'centralnotice-no-templates-assigned' => '沒有模板分配到通告。
添加一些！',
	'centralnotice-available-templates' => '可用模板',
	'centralnotice-template-already-exists' => '模板已經綁定到營銷。
沒有添加',
	'centralnotice-preview-template' => '預覽模板',
	'centralnotice-change-lang' => '改變翻譯語言',
	'centralnotice-weights' => '權重',
	'centralnotice-notice-is-locked' => '通告已經鎖定。
沒有移除',
	'centralnotice-overlap' => '通告在另一個通告的時間內重疊。
沒有添加',
	'centralnotice-invalid-date-range' => '無效日期範圍。
沒有更新',
	'centralnotice-null-string' => '不能添加一個空字符串。
沒有添加',
	'centralnotice-confirm-delete' => '你確定要刪除這個項目？
這個動作是不可恢復的。',
	'centralnotice-no-notices-exist' => '不存在通告。
在下面添加一個。',
	'centralnotice-no-templates-translate' => '沒有任何可以編輯翻譯的模板',
	'centralnotice-number-uses' => '使用',
	'centralnotice-edit-template' => '編輯模板',
	'centralnotice-edit-template-summary' => '要創建一個可本地化的消息，使用三個大括號，例如{{{jimbo-quote}}}。',
	'centralnotice-message' => '消息',
	'centralnotice-message-not-set' => '沒有設置消息',
	'centralnotice-clone' => '建立副本',
	'centralnotice-clone-notice' => '創建一個模板的副本',
	'centralnotice-preview-all-template-translations' => '預覽模板的所有可用翻譯',
	'right-centralnotice-admin' => '管理中央通告',
	'right-centralnotice-translate' => '翻譯中央通告',
	'action-centralnotice-admin' => '管理中央通告',
	'action-centralnotice-translate' => '翻譯中央通告',
	'centralnotice-preferred' => '偏好的',
);

