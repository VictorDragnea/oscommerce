<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Manager Bannere');

define('TABLE_HEADING_BANNERS', 'Bannere');
define('TABLE_HEADING_GROUPS', 'Grupuri');
define('TABLE_HEADING_STATISTICS', 'Nr. Vizualizări / Clickuri');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Acțiune');

define('TEXT_BANNERS_TITLE', 'Titlu Banner:');
define('TEXT_BANNERS_URL', 'URL Banner:');
define('TEXT_BANNERS_GROUP', 'Grup Banner:');
define('TEXT_BANNERS_NEW_GROUP', ', sau adaugă un nou grup de bannere dedesubt');
define('TEXT_BANNERS_IMAGE', 'Imagine:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', sau adaugă fișier local dedesubt');
define('TEXT_BANNERS_IMAGE_TARGET', 'Țintă imagine (Salvează în):');
define('TEXT_BANNERS_HTML_TEXT', 'Text HTML:');
define('TEXT_BANNERS_EXPIRES_ON', 'Expiră la:');
define('TEXT_BANNERS_OR_AT', ', sau la');
define('TEXT_BANNERS_IMPRESSIONS', 'impresii/vizualizări.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Programat la:');
define('TEXT_BANNERS_BANNER_NOTE', '<strong>Notă Banner:</strong><ul><li>Folosiți o imagine sau un fișier HTML text pentru banner - nu amandouă.</li><li>Un text HTML are prioritate înainte de o imagine</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<strong>Notă imagine:</strong><ul><li>Pentru a încărca directoare trebuie să vă asigurați că au drept de scriere!</li><li>Nu completați campul \'Salveză în\' dacă nu încărcați o imagine pe server (daca folosiți o imagine stocată deja pe server).</li><li>Câmpul \'Salvează în\' trebuie să fie un director existent care se încheie cu ghilimea(banner/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<strong>Notă de Expirare:</strong><ul><li>Doar unul din cele 2 câmpuri trebuie umplut</li><li>Dacă nu doriți ca banner-ul să expire automat, lăsați câmpurile necompletate</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<strong>Notă de programare:</strong><ul><li>Dacă o programare e făcută, bannerul va fi activat la data acelei programări.</li><li>Toate banerele programate sunt marcate ca inactive până la acea dată, cand vor fi marcate active.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Data Adăugată:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Programat în: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Expiră în: <strong>%s</strong>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Expiră în: <strong>%s</strong> impresii');
define('TEXT_BANNERS_STATUS_CHANGE', 'Schimbare Status: %s');

define('TEXT_BANNERS_DATA', 'D<br>A<br>T<br>A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Ultimele 3 zile');
define('TEXT_BANNERS_BANNER_VIEWS', 'Vizualizări Banner');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clickuri Banner');

define('TEXT_INFO_DELETE_INTRO', 'Sunteți sigur(ă) că doriți să ștergeți acest banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Șterge imaginea bannerului');

define('SUCCESS_BANNER_INSERTED', 'Succes: Banner-ul a fost introdus.');
define('SUCCESS_BANNER_UPDATED', 'Succes: Banner-ul a fost înnoit.');
define('SUCCESS_BANNER_REMOVED', 'Succes: Banner-ul a fost țters.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succes: Statusul banner-ului a fost înnoit.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Eroare: Bannerul are nevoie de un titlu.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Eroare: Bannerul are nevoie de un grup.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Eroare: Directorul țintă nu există: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Eroare: Directorul țintă nu poate fi scris: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Eroare: Imaginea nu există.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Eroare: Imaginea nu poate fi îndepărtată.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Eroare: Eroare necunoscută.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Eroare: Folderul grafic nu exista . Va rog sa creati un folder numit \'graphs\' in folderul \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Eroare: Folderul grafic nu poate fi scris.');
?>

