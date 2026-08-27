<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Slovak Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2026/08/27 07:00:00
|            
|        $URL: https://github.com/e107translations/Slovak/ $
|        $Revision: 2.4.0 $
|        $Author: Jimako $
+---------------------------------------------------------------+
*/

 
 /**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */

// Some password-related strings moved to admin_alt_auth.php for generic use
//define('IMPORTDB_LAN_1', 'Database type');
//define('IMPORTDB_LAN_2', 'Plain Text');
//define('IMPORTDB_LAN_3', 'Joomla salted');
//define('IMPORTDB_LAN_4', 'Mambo salted');
//define('IMPORTDB_LAN_5', 'SMF (SHA1)');
//define('IMPORTDB_LAN_6', 'Generic SHA1');
//define('IMPORTDB_LAN_7', 'MD5 (E107 original)');
//define('IMPORTDB_LAN_8', 'E107 salted (option 2.0 on)');

return [
    'IMPORTDB_LAN_9' => "Metóda hesla:",
    'IMPORTDB_LAN_10' => "Nastavte typ hesla importovanej databázy",
    'IMPORTDB_LAN_11' => "Táto možnosť sa používa, keď importujete do e107 iný systém založený na užívateľoch. Umožňuje prijať heslá zakódované vo vybranom neštandardnom formáte. Každé heslo sa konvertuje do formátu pre e107, keď sa užívateľ prihlási.",
    'LAN_AUTHENTICATE_HELP' => "Táto metóda overenia sa používa  <i>len</i> keď importujete užívateľa do e107 a heslo má iný formát. Pôvodné heslo sa prečíta z lokálnej databázy a overí voči uloženému formátu originálneho systému. Ak overenie prejde, konvertuje sa na formát kompatibilný s e107 a uloží do databázy. Po čase obvykle môžete alt-auth plugin vypnúť, pretože aktívni užívatelia budú mať svoje heslá uložené v kompatibilnom formáte.",
];
