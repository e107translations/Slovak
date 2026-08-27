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

/* 
TODO LAN - cleanup constants not in use 
Work in progress Moc - commented out are candidate for removal
LAN file needs working from scratch after development is stabilized
*/


//define("LAN_PLUGIN_FEATUREBOX_NAME", "Feature Box");
//define("FBLAN_02", "Displays an animated area on the top of your page with news-items and other content you would like to feature.");
//define("FBLAN_03", "Configure feature box"); //FIXME LAN  - use generic. 
//define("FBLAN_04", "Feature Box plugin has been successfully installed. To add messages and configure, return to the main admin page and click on the feature box icon in the plugin section.");
//define("FBLAN_05", "No feature box messages defined yet");
//define("FBLAN_06", "Existing Feature Box Messages"); //FIXME LAN  - use generic. 
//define("FBLAN_07", "Title / Caption"); //FIXME LAN  - use generic. 

return [
    'FBLAN_08' => "Text správy",
    'FBLAN_12' => "Mód",
    'FBLAN_13' => "Náhodné obmieňanie správ",
    'FBLAN_14' => "Ukázať len túto správu",
    'FBLAN_22' => "Typ zobrazenia",
    'FBLAN_23' => "Nastavenie vzhľadu",
    'FBLAN_24' => "Jednoduchý text",
    'FBLAN_25' => "K template [x] nie sú priradené žiadne položky featureboxu",
    'FBLAN_26' => "Obrázok/video",
    'FBLAN_27' => "Link obrázka",
    'FBLAN_28' => "Kategória Featurebox Menu",
    'FBLAN_29' => "Kategória, ktorá sa použije pre  featurebox menu",
    'FBLAN_30' => "Template kategórie",
    'FBLAN_31' => "Náhodne",
    'FBLAN_32' => "Parametre (nepovinné)",
    'FBLAN_33' => "Možno javasc. parametre (format subject to change)",
    'FBLAN_34' => "Unassigned",
    'FBLAN_35' => "Carousel",
    'FBLAN_36' => "Tabs",
    'LAN_FEATUREBOX_SEF' => "Shortcode name",
    'LAN_FEATUREBOX_SEF_HELP' => "How a layout addresses this category, as {FEATUREBOX|my-category}. Letters, numbers, - and _ only; anything else is converted.",
    'LAN_FEATUREBOX_SEF_EMPTY' => "Please give this category a shortcode name containing letters, numbers, - or _.",
    'LAN_FEATUREBOX_SEF_TAKEN' => "Another category already uses that shortcode name. Please choose a different one.",
    'LAN_FEATUREBOX_LAYOUT_RESERVED' => "The Unassigned layout belongs to the system category. Please choose a different layout.",
];
