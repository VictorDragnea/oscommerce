<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Categorii / Produse');
define('HEADING_TITLE_SEARCH', 'Căutare:');
define('HEADING_TITLE_GOTO', 'Mergi la:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorii / Produse');
define('TABLE_HEADING_ACTION', 'Acțiuni');
define('TABLE_HEADING_STATUS', 'Stare');

define('TEXT_NEW_PRODUCT', 'Produs nou în &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Categorii:');
define('TEXT_SUBCATEGORIES', 'Subcategorii:');
define('TEXT_PRODUCTS', 'Produse:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Preț:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Clasă taxe:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Media evaluării:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Cantitate:');
define('TEXT_DATE_ADDED', 'Data la care a fost adăugat:');
define('TEXT_DATE_AVAILABLE', 'Data disponibilă:');
define('TEXT_LAST_MODIFIED', 'Ultima modificare:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGINEA NU EXISTĂ');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Vă rog inserați o nouă categorie sau produs la acest nivel.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Pentru mai multe informații despre acest produs vă rugăm vizitați <a href="http://%s" target="blank"><u>Pagina Web</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Acest produs a fost adăugat în catalog la %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Acest produs va fi în stoc la %s.');

define('TEXT_EDIT_INTRO', 'Vă rog faceți orice schimbare necesara');
define('TEXT_EDIT_CATEGORIES_ID', 'ID Categorie:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Nume categorie:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Imagine Categorie:');
define('TEXT_EDIT_SORT_ORDER', 'Ordinea Sortării:');

define('TEXT_INFO_COPY_TO_INTRO', 'Vă rog să alegeți o noua categorie în care doriți să mutați acest produs');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Categorii curente:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Categorie nouă');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Editare Categorie');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Șterge Categorie');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Mută Categorie');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Șterge Produs');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Mută Produs');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiază în');

define('TEXT_DELETE_CATEGORY_INTRO', 'Sunteți sigur că doriți să ștergeți această categorie?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Sunteți sigur că doriți să ștergeți permanent acest produs?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ATENȚIE:</b> Mai sunt %s (sub-)categorii legate de această categorie!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>ATENȚIE:</b> Mai sunt %s produse legate de această categorie!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Vă rog selectați categoria în care doriți ca <b>%s</b> să fie pus');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Vă rog selectați categoria în care doriți ca <b>%s</b> să fie pusă');
define('TEXT_MOVE', 'Mută <b>%s</b> în:');

define('TEXT_NEW_CATEGORY_INTRO', 'Vă rog completaâi următoarele informații despre noua categorie');
define('TEXT_CATEGORIES_NAME', 'Numele categoriei:');
define('TEXT_CATEGORIES_IMAGE', 'Imaginea categoriei:');
define('TEXT_SORT_ORDER', 'Ordinea de sortare:');

define('TEXT_PRODUCTS_STATUS', 'Status Produse:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Data disponibilității:');
define('TEXT_PRODUCT_AVAILABLE', 'În Stoc');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Nu este în Stoc');
define('TEXT_PRODUCTS_MANUFACTURER', 'Producător:');
define('TEXT_PRODUCTS_NAME', 'Numele Produsului:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Descrierea Produsului:');
define('TEXT_PRODUCTS_QUANTITY', 'Cantitate Produse:');
define('TEXT_PRODUCTS_MODEL', 'Modelul Produsului:');
define('TEXT_PRODUCTS_IMAGE', 'Imaginea produsului:');

define('TEXT_PRODUCTS_MAIN_IMAGE', 'Imagine cadru');
define('TEXT_PRODUCTS_LARGE_IMAGE', 'Imagine întreagă');
define('TEXT_PRODUCTS_LARGE_IMAGE_HTML_CONTENT', 'Conținut HTML (pentru fereastra popup)');
define('TEXT_PRODUCTS_ADD_LARGE_IMAGE', 'Adaugă imaginea întreagă');
define('TEXT_PRODUCTS_LARGE_IMAGE_DELETE_TITLE', 'Șterge imaginea întreagă?');
define('TEXT_PRODUCTS_LARGE_IMAGE_CONFIRM_DELETE', 'Vă rugăm să confirmați pentru ștergerea acesteia.');
define('TEXT_PRODUCTS_URL', 'URL-ul produsului:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(fară http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Preț Produs (Fără TVA):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Preț Produs (Cu TVA):');
define('TEXT_PRODUCTS_WEIGHT', 'Greutate produs:');

define('EMPTY_CATEGORY', 'Categorie Vidă');

define('TEXT_HOW_TO_COPY', 'Metoda de Copiere:');
define('TEXT_COPY_AS_LINK', 'Link-ul produsului');
define('TEXT_COPY_AS_DUPLICATE', 'Clonează produsul');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Eroare: Nu se pot lega produse în aceeași categorie.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Eroare: Directorul imaginilor magazinului nu poate fi scris: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Eroare: Directorul imaginilor magazinului nu există: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Eroare: Categoria nu poate fi mutată în sub-categorie.');
?>
