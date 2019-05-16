<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Intrare Cont');
define('NAVBAR_TITLE_2', 'Am uitat parola');

define('HEADING_TITLE', 'Recuperare parolă');

define('TEXT_MAIN', 'Dacă ați uitat parola vă rugăm să introduceți adresa dumneavostră de e-mail și vă vom trimite una nouă.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Eroare: Această adresă de e-mail nu se regăsește în baza noastră de date.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Parolă Nouă');
define('EMAIL_PASSWORD_REMINDER_BODY', 'O nouă parolă a fost ceruta de la IP-ul from ' . $REMOTE_ADDR . '.' . "\n\n" . 'Noua ta parolă la \'' . STORE_NAME . '\' este:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', 'Succes: O nouă parolă a fost trimisă către adresa dumneavostră de e-mail.');
?>