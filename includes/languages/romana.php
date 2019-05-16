<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'ro_RO.ISO8859-1', 'ro_RO.ISO-8859-1', 'ro', 'ro_RO', 'ro_RO', 'rom', 'romanian');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
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

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'RON');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="ro"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Creează cont');
define('HEADER_TITLE_MY_ACCOUNT', 'Contul meu');
define('HEADER_TITLE_CART_CONTENTS', 'Conținutul Coșului');
define('HEADER_TITLE_CHECKOUT', 'Plătește');
define('HEADER_TITLE_TOP', 'Ești aici:');
define('HEADER_TITLE_CATALOG', 'Magazin online');
define('HEADER_TITLE_LOGOFF', 'Ieșire cont');
define('HEADER_TITLE_LOGIN', 'Intrare');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'Număr cereri din data');

// text for gender
define('MALE', 'Masculin');
define('FEMALE', 'Feminin');
define('MALE_ADDRESS', 'Dl.');
define('FEMALE_ADDRESS', 'Dna.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Informații despre livrare');
define('CHECKOUT_BAR_PAYMENT', 'Informații despre plăți');
define('CHECKOUT_BAR_CONFIRMATION', 'Confirmare');
define('CHECKOUT_BAR_FINISHED', 'Gata!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Selectați');
define('TYPE_BELOW', 'Scrieți mai jos');

// javascript messages
define('JS_ERROR', 'S-au întâmpinat erori in procesarea formularului dumneavoastră.\n\nVă rugăm faceți următoarele modificări:\n\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Vă rugăm selectați o modalitate de plată pentru comanda dumneavoastră.\n');

define('JS_ERROR_SUBMITTED', 'Acest formular a fost deja trimis. Vă rugăm apăsați "Ok" și așteptați ca acest proces să se incheie.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Vă rugăm selectați o modalitate de plată pentru comanda dumneavoastră.');

define('CATEGORY_COMPANY', 'Detalii companie');
define('CATEGORY_PERSONAL', 'Informațiile dumneavoastră.');
define('CATEGORY_ADDRESS', 'Adresa dumneavoastră.');
define('CATEGORY_CONTACT', 'Informații de contact');
define('CATEGORY_OPTIONS', 'Opțiuni');
define('CATEGORY_PASSWORD', 'Parola dumneavoastră.');

define('ENTRY_COMPANY', 'Numele companiei:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Gen:');
define('ENTRY_GENDER_ERROR', 'Va rugăm selectați sexul.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Prenume:');
define('ENTRY_FIRST_NAME_ERROR', 'Prenumele dumneavoastră trebuie sa conțină cel puțin ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractere.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nume:');
define('ENTRY_LAST_NAME_ERROR', 'Numele dumneavoastră trebuie sa conțină cel puțin ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractere.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Data nașterii:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Data dumneavoastră de naștere trebuie să fie validă');
define('ENTRY_DATE_OF_BIRTH_TEXT', '*');
define('ENTRY_EMAIL_ADDRESS', 'Adresa de e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Adresa dumneavoastră de e-mail trebuie să conțină cel puțin ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractere.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Adresa dumneavoastră de e-mail pare să nu fie validă - vă rugăm rectificați.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Adresa dumneavoastră de e-mail este deja in baza noastră de date - va rugăm logați-vă sau creați un alt cont cu altă adresă de e-mail.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Strada:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Adresa dumneavoastră (Strada) trebuie să conțină cel puțin ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractere.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Suburbie:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Cod Poștal:');
define('ENTRY_POST_CODE_ERROR', 'Codul dumneavoastră poștal trebuie să conțină cel puțin ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractere.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Oraș:');
define('ENTRY_CITY_ERROR', 'Orașul dumneavoastră trebuie să conțină cel puțin ' . ENTRY_CITY_MIN_LENGTH . ' caractere.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Județ:');
define('ENTRY_STATE_ERROR', 'Județul dumneavoastră trebuie să conțină cel puțin ' . ENTRY_STATE_MIN_LENGTH . ' caractere.');
define('ENTRY_STATE_ERROR_SELECT', 'Trebuie să selectați un județ din meniu.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Țara:');
define('ENTRY_COUNTRY_ERROR', 'Trebuie să selectați o țară din meniu.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Numărul de telefon:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Numărul dumneavoastră de telefon trebuie să conțină cel puțin ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractere.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Subscris');
define('ENTRY_NEWSLETTER_NO', 'Nesubscris');
define('ENTRY_PASSWORD', 'Parola:');
define('ENTRY_PASSWORD_ERROR', 'Parola dumneavoastră trebuie să conțină cel puțin ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractere.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Confirmarea parolei trebuie să coincidă cu parola.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmarea parolei:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Parola Curentă:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Parola dumneavoastră trebuie sa conțină cel puțin ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractere.');
define('ENTRY_PASSWORD_NEW', 'Parolă Nouă:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Noua parolă trebuie sa conțină cel puțin ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractere.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Confirmarea parolei trebuie să coincidă cu noua parolă.');
define('PASSWORD_HIDDEN', '--ASCUNS--');

define('FORM_REQUIRED_INFORMATION', '* Informații obligatorii');


// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagini rezultate:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Afișez <strong>%d</strong> pană la <strong>%d</strong> (din <strong>%d</strong> produse)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Afișez <strong>%d</strong> pană la <strong>%d</strong> (din <strong>%d</strong> comenzi)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Afișez <strong>%d</strong> pană la <strong>%d</strong> (din <strong>%d</strong> comentarii)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Afișez <strong>%d</strong> pană la <strong>%d</strong> (din <strong>%d</strong> produse noi)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Afișez <strong>%d</strong> pană la <strong>%d</strong> (din <strong>%d</strong> produse speciale)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Prima pagină');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Pagina anterioară');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Pagina următoare');
define('PREVNEXT_TITLE_LAST_PAGE', 'Ultima pagină');
define('PREVNEXT_TITLE_PAGE_NO', 'Pagina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Setul anterior de %d pagini');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Următorul set de %d pagini');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PRIMUL');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Anteriorul]');
define('PREVNEXT_BUTTON_NEXT', '[Următorul&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'ULTIMUL&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Adaugă adresă');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Registru adrese');
define('IMAGE_BUTTON_BACK', 'Înapoi');
define('IMAGE_BUTTON_BUY_NOW', 'Cumpară acum');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Schimbă adresa');
define('IMAGE_BUTTON_CHECKOUT', 'Plătește');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Confirmă comanda');
define('IMAGE_BUTTON_CONTINUE', 'Continuă');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continuă Cumpărăturile');
define('IMAGE_BUTTON_DELETE', 'Șterge');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Editează contul');
define('IMAGE_BUTTON_HISTORY', 'Istoric Comenzi');
define('IMAGE_BUTTON_LOGIN', 'Intrare cont');
define('IMAGE_BUTTON_IN_CART', 'Adaugă în coș');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Notificări');
define('IMAGE_BUTTON_QUICK_FIND', 'Căutare rapidă');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Înlătură notificări');
define('IMAGE_BUTTON_REVIEWS', 'Comentarii');
define('IMAGE_BUTTON_SEARCH', 'Caută');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Opțiuni Livrare');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Spune unui prieten');
define('IMAGE_BUTTON_UPDATE', 'Actualizare');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizare Coș');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Scrie un comentariu');

define('SMALL_IMAGE_BUTTON_DELETE', 'Șterge');
define('SMALL_IMAGE_BUTTON_EDIT', 'Modifică');
define('SMALL_IMAGE_BUTTON_VIEW', 'Vizualizează');

define('ICON_ARROW_RIGHT', 'mai departe');
define('ICON_CART', 'In Coș');
define('ICON_ERROR', 'Eroare');
define('ICON_SUCCESS', 'Succes');
define('ICON_WARNING', 'Avertisment');

define('TEXT_GREETING_PERSONAL', 'Bine ai revenit <span class="greetUser">%s!</span> Vrei să vezi ce <a href="%s"><u>produse noi</u></a> poți să cumperi?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Dacă nu ești %s, te rugăm să te<a href="%s"><u>loghezi</u></a> cu informațiile tale.</small>');
define('TEXT_GREETING_GUEST', 'Bine ai venit <span class="greetUser">vizitatorule!</span> Vrei să te <a href="%s"><u>loghezi</u></a>? Sau dorești să <a href="%s"><u>creezi un cont</u></a>?');

define('TEXT_SORT_PRODUCTS', 'Sorteaza produse ');
define('TEXT_DESCENDINGLY', 'descrescător');
define('TEXT_ASCENDINGLY', 'crescător');
define('TEXT_BY', ' după ');

define('TEXT_REVIEW_BY', 'după %s');
define('TEXT_REVIEW_WORD_COUNT', '%s cuvinte');
define('TEXT_REVIEW_RATING', 'Clasare: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Data adăugării: %s');
define('TEXT_NO_REVIEWS', 'Momentan nu există comentarii la produse.');

define('TEXT_NO_NEW_PRODUCTS', 'Momentan nu există produse.');

define('TEXT_UNKNOWN_TAX_RATE', 'Taxă necunoscută');

define('TEXT_REQUIRED', '<span class="errorText">Obligatoriu</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small> EROARE TEP:</small> Nu putem trimite e-mailul cu ajutorul server-ului SMTP furnizat. Vă rugăm să verificați setările in fișierul php.ini și să corectați adresa server-ului SMTP dacă este nevoie.</strong></font>');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Data de expirare a cărții de credit nu este validă. Va rugăm să verificați.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Numărul cărții de credit nu este valid. Va rugăm să verificați');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Primele patru numere ale cărții de credit sunt: %s. Dacă numărul nu este corect, nu acceptăm acest tip de carte. Dacă este greșit, încercați din nou.');

define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>
