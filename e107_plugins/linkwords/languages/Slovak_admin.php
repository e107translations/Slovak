<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Slovak Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2026/09/15 13:48:46
|            
|        $URL: https://github.com/e107translations/Slovak/ $
|        $Revision: 2.4.0 $
|        $Author: Jimako $
+---------------------------------------------------------------+
*/

//define("LWLAN_1", "Field(s) left blank.");
//define("LWLAN_2", "Link word saved.");
//define("LWLAN_3", "Link word updated.");

return [
    'LWLAN_4' => "Nie je definovaný žiadny slovný link.",
    'LWLAN_5' => "Slová",
    'LWLAN_6' => "odkaz",
    'LWLAN_7' => "Aktívne?",
    'LWLAN_21' => "Slovo pre autolink (alebo čiarkou oddelený zoznam slov)",
    'LWLAN_26' => "Oblasti, v ktorých umožniť slovné linky",
    'LWLAN_28' => "Stránky, na ktorých je treba znefunkčniť slovné linky",
    'LWLAN_33' => "Oblasti názvu",
    'LWLAN_34' => "Sumár položiek",
    'LWLAN_35' => "Telo textu",
    'LWLAN_36' => "Popis (linky, atď.)",
    'LWLAN_40' => "Užívateľom vložené názvy (napr. fórum)",
    'LWLAN_41' => "Užívateľom vložené telo textu (napr. fórum)",
    'LWLAN_50' => "Popisok",
    'LWLAN_52' => "Iba slovný odkaz",
    'LWLAN_53' => "Iba popisok",
    'LWLAN_54' => "Slovný odkaz a popisok",
    'LWLAN_55' => "Otvoriť odkaz v novom okne",
    'LWLAN_58' => "Hook nastavení skonvertovaný do formátu 0.8",
    'LWLAN_59' => "Zapnúť funkcie Ajax",
    'LWLAN_64' => "Potlačiť odkaz na aktuálnej stránke",
    'LWLAN_66' => "Vlastná CSS trieda",
    'LWLAN_67' => "Max. odkazov/popiskov",
  //  'LAN_LW_HELP_01' => "Many areas of text have an associated 'context', and linkwords will only be displayed in areas matching that context.",
  //  'LAN_LW_HELP_02' => "The tooltips can use Ajax to get information for display. This usually requires some custom coding.",
    'LAN_LW_HELP_03' => "Zvyčajne nemá zmysel, aby užívateľ mohol kliknúť na odkaz, ak sa už nachádza na stránke, na ktorú odkaz vedie. Keď je táto voľba ZAPNUTÁ, slovné odkazy sa v takom prípade nespustia.",
    'LAN_LW_HELP_04' => "Slovné odkazy sa dajú vypnúť na konkrétnych stránkach alebo na stránkach zodpovedajúcich vzoru. Zadajte ich sem (rovnaká syntax ako pri viditeľnosti menu), jeden vzor na riadok. Ak vzor končí znakom '!', znamená to 'koniec dotazu' a zvyčajne ide o presnú zhodu. Inak vyhovie akákoľvek URL adresa obsahujúca zadaný reťazec.",
    'LAN_LW_HELP_05' => "Pridá túto triedu ku všetkým vygenerovaným odkazom.",
    'LAN_LW_HELP_10' => "Tu môžete definovať slová, ktoré sa stanú odkazmi alebo po prejdení myšou zobrazia text.",
    'LAN_LW_HELP_11' => "Nerozlišujú sa veľké a malé písmená. Ak má viac slov viesť na rovnaké odkazy a popisky, oddeľte ich čiarkami (bez medzier)",
    'LAN_LW_HELP_12' => "Tu definujte odkaz, na ktorý sa dá kliknúť. Ak ide o externý odkaz, MUSÍ začínať 'http(s)://'. Ak ide o odkaz v rámci tohto webu, môžete použiť bežné konštanty {e_XXX}.",
    'LAN_LW_HELP_13' => "Určuje, ktoré možnosti sú aktívne.",
    'LAN_LW_HELP_14' => "Defines which options are active.",
    'LAN_LW_HELP_15' => "Defines which options are active.",
    'LAN_LW_HELP_16' => "Určuje voliteľné číselné ID na spracovanie pomocou Ajaxu. Musí to byť kladné číslo. Ak je prázdne, použije sa číslo záznamu v databáze",
    'LAN_LW_HELP_17' => "Ak je zapnuté, odkaz sa otvorí v novej karte/okne prehliadača",
    'LAN_LW_HELP_01' => "<b>Oblasti, kde zapnúť</b><br />

  mnohé oblasti textu majú priradený „kontext“ a slovné odkazy sa zobrazia iba v oblastiach, ktoré tomuto kontextu zodpovedajú.<br /><br />

  <b>Vypnutie slovných odkazov</b><br />

  Slovné odkazy sa dajú vypnúť na konkrétnych stránkach alebo na stránkach zodpovedajúcich vzoru. Zadajte ich sem (rovnaká syntax ako pri menu), jeden vzor na riadok. 

  Ak vzor končí znakom „!“, znamená to „koniec dotazu“ a zvyčajne ide o presnú zhodu. Inak vyhovie akákoľvek URL adresa obsahujúca zadaný reťazec.<br />

  Slovné odkazy sa v administrácii <i>nikdy</i> nezobrazujú.<br /><br />

  <b>Zapnúť funkcie Ajax</b><br />

  Popisky môžu pomocou Ajaxu načítavať informácie na zobrazenie. Zvyčajne to vyžaduje vlastné programovanie.<br /><br />

  <b>Potlačiť odkaz na aktuálnej stránke</b><br />

  Zvyčajne nemá zmysel, aby užívateľ mohol kliknúť na odkaz, ak sa už na danej stránke nachádza. Začiarknutím tejto voľby túto možnosť odstránite.<br />",
    'LAN_LW_HELP_02' => "Tu definujte slová, ktoré sa stanú odkazmi alebo po prejdení myšou zobrazia text<br /><br />
  <b><u>Slovo na odkaz</u></b><br />

  Nerozlišujú sa veľké a malé písmená. Ak má viac slov viesť na rovnaké odkazy a popisky, oddeľte ich čiarkami (bez medzier)<br /><br />

  <b><u>Odkaz</u></b><br />

  Tu definujte odkaz, na ktorý sa dá kliknúť. Ak ide o externý odkaz, [i]musí[/i] začínať „http://“. Ak ide o odkaz v rámci tohto webu, môžete použiť bežné konštanty {e_XXX}.<br /><br />

  <b><u>Popisok</u></b><br />

  Určuje text, ktorý sa zobrazí, keď užívateľ prejde myšou cez slovo.<br /><br />

  <b><u>LW ID (ID popisku)</u></b><br /><br />

  Určuje voliteľné číselné ID na spracovanie pomocou Ajaxu. Ak je prázdne, použije sa číslo záznamu v databáze.<br /><br />

  <b><u>Aktivovať?</u></b><br />

  Určuje, ktoré možnosti sú aktívne.",
];
