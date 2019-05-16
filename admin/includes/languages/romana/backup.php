<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Manager Backup - Baza de Date');

define('TABLE_HEADING_TITLE', 'Titlu');
define('TABLE_HEADING_FILE_DATE', 'Data');
define('TABLE_HEADING_FILE_SIZE', 'Mărime');
define('TABLE_HEADING_ACTION', 'Acțiune');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Backup Nou');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurare Locală');
define('TEXT_INFO_NEW_BACKUP', 'Nu întrerupeți procesul de backup. Poate dura cateva minute.');
define('TEXT_INFO_UNPACK', '<br /><br />(după despachetarea fișierelor din arhivă)');
define('TEXT_INFO_RESTORE', 'Nu întrerupeți procesul de restaurare.<br /><br />Cu cât e mai mare Baza de Date cu atât acesta durează mai mult!<br /><br />Dacă e posibil folosiți clientul mysql .<br><br>De exemplu:<br><br><strong>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </strong> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Nu întrerupeți procesul de restaurare.<br><br>Cu cât e mai mare Baza de Date cu atât acesta durează mai mult!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Fișierul încărcat trebuie să fie de tip sql raw (text).');
define('TEXT_INFO_DATE', 'Data:');
define('TEXT_INFO_SIZE', 'Mărime:');
define('TEXT_INFO_COMPRESSION', 'Compresie:');
define('TEXT_INFO_USE_GZIP', 'Folosește GZIP');
define('TEXT_INFO_USE_ZIP', 'Folosește ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Fără Compresie (SQL Pur)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Doar Download (fără fișiere server)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Cel mai bine printr-o conectare HTTPS');
define('TEXT_DELETE_INTRO', 'Sunteti sigur(ă) că doriți să ștergeți acest backup?');
define('TEXT_NO_EXTENSION', 'Niciuna');
define('TEXT_BACKUP_DIRECTORY', 'Director de Backup:');
define('TEXT_LAST_RESTORATION', 'Ultima restaurare:');
define('TEXT_FORGET', '(<u>uitat</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Eroare: Directorul de Backup nu există. Va rog să-l setați în fișierul configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Eroare: Directorul de Backup nu poate fi scris(permisiuni web).');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Eroare: Link de download inacceptabil.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succes: Ultima dată de restaurare a fost ștearsă.');
define('SUCCESS_DATABASE_SAVED', 'Succes: Baza de Date a fost salvată.');
define('SUCCESS_DATABASE_RESTORED', 'Succes: Baza de Date a fost restaurată.');
define('SUCCESS_BACKUP_DELETED', 'Succes: Backup-ul a fost șters.');
?>
