<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2009 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Administratori');

define('TABLE_HEADING_ADMINISTRATORS', 'Administratori');
define('TABLE_HEADING_HTPASSWD', 'Securizat prin htpasswd');
define('TABLE_HEADING_ACTION', 'Acțiune');

define('TEXT_INFO_INSERT_INTRO', 'Vă rog să introduceți noul administrator și datele lui');
define('TEXT_INFO_EDIT_INTRO', 'Vă rog să faceți schimbările necesare');
define('TEXT_INFO_DELETE_INTRO', 'Sunteți sigur că vreți să ștergeți acest administrator?');
define('TEXT_INFO_HEADING_NEW_ADMINISTRATOR', 'Administrator Nou');
define('TEXT_INFO_USERNAME', 'User:');
define('TEXT_INFO_NEW_PASSWORD', 'Parolă Nouă:');
define('TEXT_INFO_PASSWORD', 'Parola:');
define('TEXT_INFO_PROTECT_WITH_HTPASSWD', 'Protejează prin htaccess/htpasswd');

define('HTPASSWD_INFO', '<strong>Mai multă protecție prin htaccess/htpasswd</strong><p>Activând securitatea prin htaccess/htpasswd va înregistra automat parola și userul administratorului cănd acesta le va modifica.</p><p><strong>Notează</strong>, Nu au fost făcute modificări contului și tu nu-l mai poți accesa contactează furnizorul spațiului web (host) și făi următoarele modificări:</p><p><u><strong>1. Modifică acest document:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htaccess</p><p>Șterge următoarele linii dacă există:</p><p><i>%s</i></p><p><u><strong>2. Șterge fișierul:</strong></u><br /><br />' . DIR_FS_ADMIN . '.htpasswd_oscommerce</p>');
define('HTPASSWD_SECURED', '<strong>Și mai multă protecție prin htaccess/htpasswd</strong><p>Secțiune de administrare securizată prin htaccess/htpasswd.</p>');
define('HTPASSWD_PERMISSIONS', '<strong>Mai multă protecție prin htaccess/htpasswd</strong><p>Nu este securizat prin htaccess/htpasswd.</p><p>Aceste fișiere trebuie să aibă toate permisiunile web pentru a putea activa protecția prin the htaccess/htpasswd:</p><ul><li>' . DIR_FS_ADMIN . '.htaccess</li><li>' . DIR_FS_ADMIN . '.htpasswd_oscommerce</li></ul><p>Reîncarcă (refresh) această pagină pentru a vedea starea fișierelor.</p>');
?>
