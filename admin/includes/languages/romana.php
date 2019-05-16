<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..


setlocale(LC_TIME, 'ro_RO.ISO8859-1', 'ro_RO.ISO-8859-1', 'ro', 'ro_RO', 'ro_RO', 'rom', 'romanian');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', 'ro'); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="ro"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', 'Magazin online - Administrare');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administrare');
define('HEADER_TITLE_SUPPORT_SITE', 'Site de Suport (InCart)');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalog Online');
define('HEADER_TITLE_ADMINISTRATION', 'Administrare');


define('MALE', 'Masculin');
define('FEMALE', 'Feminin');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configurare');
define('BOX_CONFIGURATION_MYSTORE', 'Magazinul meu');
define('BOX_CONFIGURATION_LOGGING', 'Logare');
define('BOX_CONFIGURATION_CACHE', 'Cache');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administratori');
define('BOX_CONFIGURATION_STORE_LOGO', 'Store Logo');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Module');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categorii/Produse');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Atribute produse');
define('BOX_CATALOG_MANUFACTURERS', 'Producători');
define('BOX_CATALOG_REVIEWS', 'Comentarii');
define('BOX_CATALOG_SPECIALS', 'Promoții');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produse Așteptate');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clienți');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clienți');
define('BOX_CUSTOMERS_ORDERS', 'Comenzi');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locații / Taxe');
define('BOX_TAXES_COUNTRIES', 'Țări');
define('BOX_TAXES_ZONES', 'Zone');
define('BOX_TAXES_GEO_ZONES', 'Zone taxe');
define('BOX_TAXES_TAX_CLASSES', 'Clase taxe');
define('BOX_TAXES_TAX_RATES', 'Valoare Taxe');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapoarte');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produse Văzute');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produse Cumpărate');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total comenzi');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Unelte');
define('BOX_TOOLS_ACTION_RECORDER', 'Action Recorder');
define('BOX_TOOLS_BACKUP', 'Backup Baza de Date');
define('BOX_TOOLS_BANNER_MANAGER', 'Manager Bannere');
define('BOX_TOOLS_CACHE', 'Control Cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definește Limba');
define('BOX_TOOLS_MAIL', 'Trimite e-mail');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Manager Știri');
define('BOX_TOOLS_SEC_DIR_PERMISSIONS', 'Permisiuni fișiere');
define('BOX_TOOLS_SERVER_INFO', 'Informații Server');
define('BOX_TOOLS_VERSION_CHECK', 'Versiune magazin');
define('BOX_TOOLS_WHOS_ONLINE', 'Cine e Online');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localizare');
define('BOX_LOCALIZATION_CURRENCIES', 'Valută');
define('BOX_LOCALIZATION_LANGUAGES', 'Limbă');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Stare Comandă');

// javascript messages
define('JS_ERROR', 'Au apărut erori în procesarea comenzii!\nVă rog să faceți următoarele corectări:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Noul produs are nevoie de preț\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Noul produs are nevoie de un prefix de preț\n');

define('JS_PRODUCTS_NAME', '* Noul produs are nevoie de un nume\n');
define('JS_PRODUCTS_DESCRIPTION', '* Noul produs are nevoie de descriere\n');
define('JS_PRODUCTS_PRICE', '* Noul produs are nevoie de un preț\n');
define('JS_PRODUCTS_WEIGHT', '* Noul produs are nevoie de o masă (greutate)\n');
define('JS_PRODUCTS_QUANTITY', '* Noul produs are nevoie de o cantitate\n');
define('JS_PRODUCTS_MODEL', '* Noul produs are nevoie de un nr. de model\n');
define('JS_PRODUCTS_IMAGE', '* Noul produs are nevoie de o cale către imagine\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Un preț nou trebuie stabilit pentru acest produs\n');

define('JS_GENDER', '* Trebuie ales genul (masculin/feminin)\n');
define('JS_FIRST_NAME', '* Numele trebuie să conțină cel puțin ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractere.\n');
define('JS_LAST_NAME', '* Prenumele trebuie să conțină cel puțin ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractere.\n');
define('JS_DOB', '* Data neșterii trebuie să fie în format: xx/xx/xxxx (zi/luna/an).\n');
define('JS_EMAIL_ADDRESS', '* Adresa de Email trebuie să aibă cel puțin ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractere.\n');
define('JS_ADDRESS', '* Strada trebuie să conțină cel puțin ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractere.\n');
define('JS_POST_CODE', '* Codul poștal trebuie să conțină cel puțin ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractere.\n');
define('JS_CITY', '* Orașul trebuie să conțină cel puțin ' . ENTRY_CITY_MIN_LENGTH . ' caractere.\n');
define('JS_STATE', '* Județul trebuie selectat.\n');
define('JS_STATE_SELECT', '-- Selectați--');
define('JS_ZONE', '* Județul trebuie selectat din lista pentru această țară');
define('JS_COUNTRY', '* Țara trebuie aleasă.\n');
define('JS_TELEPHONE', '* Numărul de telefon trebuie să conțină cel puțin ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractere.\n');
define('JS_PASSWORD', '* Casuțele \'Parola\' și \'Confirmare\' trebuie să corespundă una cu alta și să conțină cel puțin ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractere.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Numărul comenzii %s nu există!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Adresa');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Companie');
define('CATEGORY_OPTIONS', 'Opțiuni');

define('ENTRY_GENDER', 'Gen:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obligatoriu</span>');
define('ENTRY_FIRST_NAME', 'Nume:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractere</span>');
define('ENTRY_LAST_NAME', 'Prenume:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractere</span>');
define('ENTRY_DATE_OF_BIRTH', 'Data nașterii:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresa E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractere</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Adresa de E-mail nu pare validă!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Adresa de E-mail există deja în baza de date!</span>');
define('ENTRY_COMPANY', 'Numele Companiei:');
define('ENTRY_STREET_ADDRESS', 'Strada:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractere</span>');
define('ENTRY_SUBURB', 'Suburbie:');
define('ENTRY_POST_CODE', 'Cod Poștal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractere</span>');
define('ENTRY_CITY', 'Oraș:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_CITY_MIN_LENGTH . ' caractere</span>');
define('ENTRY_STATE', 'Județ:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obligatoriu</span>');
define('ENTRY_COUNTRY', 'Țara:');
define('ENTRY_COUNTRY_ERROR', 'Trebuie să selectați o țară');
define('ENTRY_TELEPHONE_NUMBER', 'Număr de Telefon:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minim ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractere</span>');
define('ENTRY_FAX_NUMBER', 'Număr de Fax:');
define('ENTRY_NEWSLETTER', 'Abonare Știri:');
define('ENTRY_NEWSLETTER_YES', 'Abonare');
define('ENTRY_NEWSLETTER_NO', 'Fară abonare');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Trimitere e-mail');
define('IMAGE_BACK', 'Înapoi');
define('IMAGE_BACKUP', 'Backup');
define('IMAGE_CANCEL', 'Renunță');
define('IMAGE_CONFIRM', 'Confirmă');
define('IMAGE_COPY', 'Copiază');
define('IMAGE_COPY_TO', 'Copiază în');
define('IMAGE_DETAILS', 'Detalii');
define('IMAGE_DELETE', 'Șterge');
define('IMAGE_EDIT', 'Modifică');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_EXPORT', 'Export');
define('IMAGE_ICON_STATUS_GREEN', 'Activ');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Setează Activ');
define('IMAGE_ICON_STATUS_RED', 'Inactiv');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Setează Inactiv');
define('IMAGE_ICON_INFO', 'Informații');
define('IMAGE_INSERT', 'Inserează');
define('IMAGE_LOCK', 'Îngheață');
define('IMAGE_MODULE_INSTALL', 'Instalare module');
define('IMAGE_MODULE_REMOVE', 'Îndepărtează modulul');
define('IMAGE_MOVE', 'Mută');
define('IMAGE_NEW_BANNER', 'Banner nou');
define('IMAGE_NEW_CATEGORY', 'Categorie Nouă');
define('IMAGE_NEW_COUNTRY', 'Țară Nouă');
define('IMAGE_NEW_CURRENCY', 'Valută nouă');
define('IMAGE_NEW_FILE', 'Document nou');
define('IMAGE_NEW_FOLDER', 'Fișier nou');
define('IMAGE_NEW_LANGUAGE', 'Adaugă o limbă');
define('IMAGE_NEW_NEWSLETTER', 'Adaugă Știre');
define('IMAGE_NEW_PRODUCT', 'Adaugă Produs');
define('IMAGE_NEW_TAX_CLASS', 'Adaugă clasă de taxe');
define('IMAGE_NEW_TAX_RATE', 'Adaugă valoare taxă');
define('IMAGE_NEW_TAX_ZONE', 'Adaugă zonă taxe');
define('IMAGE_NEW_ZONE', 'Zonă nouă');
define('IMAGE_ORDERS', 'Comenzi');
define('IMAGE_ORDERS_INVOICE', 'Factură');
define('IMAGE_ORDERS_PACKINGSLIP', 'Document transport');
define('IMAGE_PREVIEW', 'Previzualizare');
define('IMAGE_RESTORE', 'Restaurează');
define('IMAGE_RESET', 'Resetează');
define('IMAGE_SAVE', 'Salvează');
define('IMAGE_SEARCH', 'Caută');
define('IMAGE_SELECT', 'Selectează');
define('IMAGE_SEND', 'Trimite');
define('IMAGE_SEND_EMAIL', 'Trimite e-mail');
define('IMAGE_UNLOCK', 'Descuie');
define('IMAGE_UPDATE', 'Actualizare');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizare cursul valutar');
define('IMAGE_UPLOAD', 'Încarcă (Upload)');

define('ICON_CROSS', 'Fals');
define('ICON_CURRENT_FOLDER', 'Fișierul curent');
define('ICON_DELETE', 'Șterge');
define('ICON_ERROR', 'Eroare');
define('ICON_FILE', 'Document');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Fișier');
define('ICON_LOCKED', 'Încuiat');
define('ICON_PREVIOUS_LEVEL', 'Nivelul anterior');
define('ICON_PREVIEW', 'Vizualizare');
define('ICON_STATISTICS', 'Statistici');
define('ICON_SUCCESS', 'Succes');
define('ICON_TICK', 'Adevărat');
define('ICON_UNLOCKED', 'Descuiat');
define('ICON_WARNING', 'Atenție!');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina %s din %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> bannere)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> șări)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> clienți)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> valute)');
define('TEXT_DISPLAY_NUMBER_OF_ENTRIES', 'Displaying <b>%d</b> la <b>%d</b> (din <b>%d</b> intrări)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> limbi)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> producători)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> știri)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> comenzi)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> stări comenzi)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> produse)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> produse așteptate)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> descrieri de produse)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> promoții)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> clase taxă)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> zone taxă)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> valori de taxe)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Arăt de la <b>%d</b> la <b>%d</b> (din <b>%d</b> zone)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'standard');
define('TEXT_SET_DEFAULT', 'Setează standard');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatoriu</span>');

define('TEXT_CACHE_CATEGORIES', 'Secțiune Categorii');
define('TEXT_CACHE_MANUFACTURERS', 'Secțiune Producători');
define('TEXT_CACHE_ALSO_PURCHASED', 'Module deja cumpărate');

define('TEXT_NONE', '--nimic--');
define('TEXT_TOP', 'Sus');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Eroare: Destinația nu există.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Eroare: Destinația nu poate fi scrisă.');
define('ERROR_FILE_NOT_SAVED', 'Eroare: Fișierul nu poate fi încărcat (upload-at).');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Eroare: Tipul fișierului de încărcat nu este suportat.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succes: Fișierul a fost încărcat pe site.');
define('WARNING_NO_FILE_UPLOADED', 'Atenție: Niciun fișier încărcat.');
?>
