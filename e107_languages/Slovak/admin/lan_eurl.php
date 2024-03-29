<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Slovak Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2024/02/15 11:19:26 
|            
|        $URL: https://github.com/e107translations/Slovak/ $
|        $Revision: 2.3.4 $
|        $Author: Jimako $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Správa URL adries webu");
define("LAN_EURL_NAME_CONFIG", "Profily");
define("LAN_EURL_NAME_ALIASES", "Aliasy");
define("LAN_EURL_NAME_SETTINGS", "Hlavné nastavenia");
define("LAN_EURL_NAME_HELP", "Pomocník");
define("LAN_EURL_EMPTY", "Zoznam je prázdny");
define("LAN_EURL_LEGEND_CONFIG", "Zvoľte URL profil podľa oblastí stránky");
define("LAN_EURL_LEGEND_ALIASES", "Konfigurácia základných aliasov URL pre jednotlivé profily URL");
define("LAN_EURL_DEFAULT", "Predvolený");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Info o profile nedostupné");
define("LAN_EURL_LOCATION", "Umiestnenie profilu");
define("LAN_EURL_LOCATION_NONE", "Konfiguračný súbor nie je k dispozícii");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias v predvolenom jazyku.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Predvolená hodnota je");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias when in");
define("LAN_EURL_FORM_HELP_EXAMPLE", "Base URL");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias &quot;%1\$s&quot; nemožno uložiť - existuje systémový profil URL s rovnakým názvom. Prosím, vyberte inú hodnotu aliasu pre systémový profil URL &quot;%2\$s&quot;");
define("LAN_EURL_SURL_UPD", "  SEF URLs were updated.");
define("LAN_EURL_SURL_NUPD", "&nbsp; SEF URL adresy boli aktualizované");
define("LAN_EURL_SETTINGS_PATHINFO", "Odstránenie názvu súboru z adresy URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Priradiť koreňový priestor");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Vyberte, ktorá oblasť bude prepojená s vašou základnou adresou URL webu. Príklad: Keď je základným menným priestorom https://yoursite.com/News-Item-Title, bude spojený s novinkami (stránka s detailom položky bude vyriešená).");
define("LAN_EURL_SETTINGS_REDIRECT", "Redirect to System not found page");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "If set to false, not found page will be direct rendered (without browser redirect)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "	Automated SEF string creation type");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Choose how will be assembled SEF string when it's automatically built from a Title value (e.g. in news, custom pages, etc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Just secure it");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-to-lower-case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-To-Camel-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-with-no-case-CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plus+separator+to+lower+case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus+Separator+To+Camel+Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus+separator+with+no+case+CHANGE");
define("LAN_EURL_MODREWR_DESCR", "Removes entry script file name (index.php/) from your URLs. You'll need mod_rewrite installed and running on your server (Apache Web Server). After enabling this setting go to your site root folder, rename htaccess.txt to .htaccess and modifgy <em>RewriteBase</em> Directive if required.");
define("LAN_EURL_MENU", "Site URLs");
define("LAN_EURL_MENU_CONFIG", "Configurations");
define("LAN_EURL_MENU_ALIASES", "Profile Aliases");
define("LAN_EURL_MENU_SETTINGS", "Nastavenia");
define("LAN_EURL_MENU_HELP", "Nápoveda");
define("LAN_EURL_MENU_PROFILES", "Profiles");
define("LAN_EURL_UC", "Under Construction");
define("LAN_EURL_CORE_MAIN", "Site Root Namespace - alias not in use.");
define("LAN_EURL_FRIENDLY", "Friendly");
define("LAN_EURL_LEGACY", "Legacy direct URLs.");
define("LAN_EURL_REWRITE_LABEL", "Friendly URLs");
define("LAN_EURL_REWRITE_DESCR", "Search engine and user friendly URLs.");
define("LAN_EURL_CORE_NEWS", "Články");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Full Friendly URLs (no performance and most friendly)");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Friendly URLs without ID (no performance, more friendly)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstrates manual link parsing and assembling.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Friendly URLs with ID (performance wise)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstrates automated link parsing and assembling based on predefined route rules.");
define("LAN_EURL_CORE_USER", "Užívatelia");
define("LAN_EURL_USER_REWRITE_LABEL", "Friendly URLs");
define("LAN_EURL_USER_REWRITE_DESCR", "Search engine and user friendly URLs.");
define("LAN_EURL_CORE_PAGE", "Vlastné stránky");
define("LAN_EURL_PAGE_SEF_LABEL", "Friendly URLs with ID (performance)");
define("LAN_EURL_PAGE_SEF_DESCR", "Search engine and user friendly URLs.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Friendly URLs without ID (no performance, more friendly)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Search engine and user friendly URLs.");

// Search
define("LAN_EURL_CORE_SEARCH", "Hľadať");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Default Search URL");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Legacy direct URL.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");

define("LAN_EURL_CORE_SYSTEM", "System");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Default System URLs");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs for pages like Not Found, Access denied, etc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Friendly System URLs");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs for pages like Not Found, Access denied, etc.");
define("LAN_EURL_CORE_INDEX", "Úvodná stránka");
define("LAN_EURL_CORE_INDEX_INFO", "Úvodná stránka nemôže mať alias");
define("LAN_EURL_REBUILD", "Rebuild");
define("LAN_EURL_REGULAR_EXPRESSION", "Regulárny výraz");
define("LAN_EURL_KEY", "Kľúč");
define("LAN_EURL_TABLE", "Tabuľka");
