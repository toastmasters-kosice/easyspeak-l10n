<?php

/***************************************************************************
 *                                lang_xs.php
 *                                -----------
 *   copyright            : (C) 2003 - 2005 CyberAlien
 *   support              : http://www.phpbbstyles.com
 *
 *   version              : 2.3.1
 *
 *   file revision        : 75
 *   project revision     : 78
 *   last modified        : 05 Dec 2005  13:54:54
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}

$lang['Extreme_Styles'] = "eXtreme Styles";
$lang['xs_title'] = "Modifikácia eXtreme Styles";
$lang['xs_file'] = "Súbor";
$lang['xs_template'] = "Šablóna";
$lang['xs_id'] = "ID";
$lang['xs_style'] = "Štýl";
$lang['xs_styles'] = "Štýly";
$lang['xs_users'] = "Používatelia";
$lang['xs_options'] = "Možnosti";
$lang['xs_comment'] = "Komentár";
$lang['xs_upload_time'] = "Čas nahrania";
$lang['xs_select'] = "Vybrať";
$lang['xs_selectTEST'] = "Vybrať";
$lang['xs_continue'] = "Pokračovať"; // button
$lang['xs_click_here_lc'] = "kliknite sem";
$lang['xs_edit_lc'] = "upraviť";

/*
* navigation
*/
$lang['xs_config_shownav']['0'] = "Konfigurácia";
$lang['xs_config_shownav']['1'] = "Inštalovať štýly";
$lang['xs_config_shownav']['2'] = "Odinštalovať štýly";
$lang['xs_config_shownav']['3'] = "Predvolený štýl";
$lang['xs_config_shownav']['4'] = "Spravovať vyrovnávaciu pamäť";
$lang['xs_config_shownav']['5'] = "Importovať štýly";
$lang['xs_config_shownav']['6'] = "Exportovať štýly";
$lang['xs_config_shownav']['7'] = "Klonovať štýly";
$lang['xs_config_shownav']['8'] = "Stiahnuť štýly";
$lang['xs_config_shownav']['9'] = "Upraviť šablóny";
$lang['xs_config_shownav']['10'] = "Upraviť štýly";
$lang['xs_config_shownav']['11'] = "Exportovať databázu";
$lang['xs_config_shownav']['12'] = "Skontrolovať aktualizácie";

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = "menu modifikácie extreme styles";
$lang['xs_support_forum_lc'] = "fórum podpory";
$lang['xs_download_styles_lc'] = "stiahnuť štýly";
$lang['xs_install_styles_lc'] = "inštalovať štýly";


/*
* index.tpl
*/
$lang['xs_main_comment1'] = "Toto je hlavné menu modifikácie eXtreme Styles. Toto rozhranie poskytuje celkom dosť funkcií, takže táto stránka bude slúžiť ako sprievodca. Pod každou funkciou sa nachádza krátke vysvetlenie.&lt;br /&gt;&lt;br /&gt;Note: Táto modifikácia nahrádza správu štýlov v phpBB. V zozname nájdete štandardné funkcie phpBB, ale teraz sú optimalizované a majú dodatočné vlastnosti.&lt;br /&gt;&lt;br /&gt;Pokiaľ máte akékoľvek otázky, navštívte &lt;a href=&quot;http://www.phpbbstyles.com&quot; target=&quot;_blank&quot;&gt;fórum podpory&lt;/a&gt;, kde vám pomôžu s touto modifikáciou.";
$lang['xs_main_comment2'] = "Modifikácia eXtreme Styles umožňuje správcovi ukladať celé štýly v .style súboroch. Štýly sú uložené v malom, komprimovanom súbore a tým sa vyhnete problémom so sťahovaním a nahrávaním mnohých malých súborov. Súbory štýlov sú komprimované, takže sťahovanie a nahrávanie sú oveľa efektívnejšie ako sťahovanie a nahrávanie bežných súborov so štýlmi.";
$lang['xs_main_comment3'] = "Všetky funkcie správy štýlov phpBB sú nahradené modifikáciou eXtreme Styles.<br /><br /><a href='{URL}'>Kliknite sem</a>, aby ste videli menu."; // NTR
$lang['xs_main_title'] = "Navigačné menu pre eXtreme Styles";
$lang['xs_menu'] = "Menu eXtreme Styles";
$lang['xs_manage_styles'] = "Spravovať štýly";
$lang['xs_import_export_styles'] = "Importovať/exportovať štýly";
$lang['xs_install_uninstall_styles'] = "Inštalovať/odinštalovať štýly";
$lang['xs_edit_templates'] = "Upraviť šablóny";
$lang['xs_other_functions'] = "Ďalšie funkcie";
$lang['xs_configuration'] = "Konfigurácia";
$lang['xs_configuration_explain'] = "Táto funkcionalita vám umožní zmeniť konfiguráciu eXtreme Styles.";
$lang['xs_default_style'] = "Predvolený štýl";
$lang['xs_default_style_explain'] = "Táto funkcionalita vám umožní zmeniť predvolený štýl formulára a prepnúť používateľov z jedného štýlu na druhý.";
$lang['xs_manage_cache'] = "Spravovať vyrovnávaciu pamäť";
$lang['xs_manage_cache_explain'] = "Táto funkcionalita vám umožní spravovať súbory vo vyrovnávacej pamäti.";
$lang['xs_import_styles'] = "Importovať štýly";
$lang['xs_import_styles_explain'] = "Táto funkcionalita vám umožní stiahnuť a inštalovať .style súbory.";
$lang['xs_export_styles'] = "Exportovať štýly";
$lang['xs_export_styles_explain'] = "Táto funkcionalita vám umožní uložiť štýl z vášho fóra ako .style súbor a potom ho jednoducho preniesť na iné fórum alebo inú webovú stránku.";
$lang['xs_clone_styles'] = "Klonovať štýly";
$lang['xs_clone_styles_explain'] = "Táto funkcionalita vám umožní rýchlo klonovať štýly alebo celú šablónu.";
$lang['xs_download_styles'] = "Stiahnuť štýly";
$lang['xs_download_styles_explain'] = "Táto funkcionalita vám umožní rýchlo stiahnuť a nainštalovať štýly z webových stránok. Môžete si sami nakonfigurovať zoznam webstránok.";
$lang['xs_install_styles'] = "Inštalovať štýly";
$lang['xs_install_styles_explain'] = "Táto funkcionalita vám umožní nainštalovať štýly, ktoré už sú nahrané na vaše fórum.";
$lang['xs_uninstall_styles'] = "Odinštalovať štýly";
$lang['xs_uninstall_styles_explain'] = "Táto funkcionalita vám umožní vymazať štýly z vášho fóra.";
$lang['xs_edit_templates_explain'] = "Táto funkcionalita vám umožní upravovať tpl súbory online.";
$lang['xs_edit_styles_data'] = "Upravovať dáta štýlov";
$lang['xs_edit_styles_data_explain'] = "Táto funkcionalita vám umožní upraviť premenné štýlu. Využívajú ich niektoré štýly, ale väčšina z nich nie a namiesto toho používajú css súbor.";
$lang['xs_export_styles_data'] = "Exportovať dáta štýlov";
$lang['xs_export_styles_data_explain'] = "Táto funkcionalita vám umožní uložiť premenné štýlov do súboru theme_info.cfg.";
$lang['xs_check_for_updates'] = "Skontrolovať aktualizácie";
$lang['xs_check_for_updates_explain'] = "Táto funkcionalita vám umožní skontrolovať dostupnosť aktualizovaných verzií štýlov a modifikácií nainštalovaných vo vašom fóre.";
$lang['xs_set_configuration_lc'] = "nastaviť konfiguráciu";
$lang['xs_set_default_style_lc'] = "nastaviť predvolený štýl";
$lang['xs_manage_cache_lc'] = "spravovať vyrovnávaciu pamäť";
$lang['xs_import_styles_lc'] = "importovať štýly";
$lang['xs_export_styles_lc'] = "exportovať štýly";
$lang['xs_clone_styles_lc'] = "klonovať štýly";
$lang['xs_uninstall_styles_lc'] = "odinštalovať štýly";
$lang['xs_edit_templates_lc'] = "upraviť šablóny";
$lang['xs_edit_styles_data_lc'] = "upraviť dáta štýlov";
$lang['xs_export_styles_data_lc'] = "exportovať dáta štýlov";
$lang['xs_check_for_updates_lc'] = "skontrolovať aktualizácie";

/*
* ftp.tpl, ftp functions
*/
$lang['xs_ftp_comment1'] = "Aby ste mohli použiť túto funkcionalitu, musíte vybrať spôsob nahratia súboru. Ak vyberiete FTP, heslo nebude uložené a eXtreme Styles vás požiada o heslo zakaždým, keď vyberiete funkcie, ktoré vyžadujú FTP prístup. Ak vyberiete miestny súborový systém, uistite sa, že sú všetky potrebné adresáre zapisovateľné.";
$lang['xs_ftp_comment2'] = "Aby ste mohli použiť túto funkcionalitu, musíte nastaviť FTP. Heslo sa nebude ukladať a eXtreme Styles vás požiada o heslo zakaždým, keď vyberiete funkcie, ktoré vyžadujú FTP prístup.";
$lang['xs_ftp_comment3'] = "Upozornenie: FTP funkcie sú na tomto serveri zakázané. Nebudete môcť použiť funkcionalitu eXtreme Styles, ktorá vyžaduje FTP prístup.";
$lang['xs_ftp_title'] = "Konfigurácia FTP";
$lang['xs_ftp_explain'] = "FTP sa používa pre nahrávanie nových štýlov. Pokiaľ chcete použiť funkcionalitu pre importovanie štýlov, mali by ste podľa toho nastaviť FTP. eXtreme Styles sa pokúša automaticky zistiť nastavenia vždy keď je to možné.";
$lang['xs_ftp_error_fatal'] = "FTP funkcie sú na tomto serveri zakázané. Nie je možné pokračovať.";
$lang['xs_ftp_error_connect'] = "Chyba FTP: nie je možné sa pripojiť k {HOST}";
$lang['xs_ftp_error_login'] = "Chyba FTP: nie je možné sa prihlásiť";
$lang['xs_ftp_error_chdir'] = "Chyba FTP: nie je možné zmeniť adresár na {DIR}";
$lang['xs_ftp_error_nonphpbbdir'] = "Chyba FTP: nastavili ste neplatný adresár. Nenachádzajú sa v ňom žiadne súbory phpBB.";
$lang['xs_ftp_error_noconnect'] = "Nie je možné sa pripojiť na FTP server.";
$lang['xs_ftp_error_login2'] = "Neplatné prihlasovacie meno alebo heslo.";
$lang['xs_ftp_log_disabled'] = "ftp funkcie sú na tomto serveri zakázané. skript nemôže pokračovať.";
$lang['xs_ftp_log_connecting'] = "pripája sa k {HOST}";
$lang['xs_ftp_log_noconnect'] = "nie je možné sa pripojiť k {HOST}";
$lang['xs_ftp_log_connected'] = "pripojené. prihlasuje sa...";
$lang['xs_ftp_log_nologin'] = "nie je možné sa prihlásiť ako {USER}";
$lang['xs_ftp_log_loggedin'] = "prihlásený";
$lang['xs_ftp_log_end'] = "dokončené vykonávanie skriptu";
$lang['xs_ftp_log_nopwd'] = "chyba: nie je možné získať aktuálny adresár";
$lang['xs_ftp_log_nomkdir'] = "chyba: nie je možné vytvoriť adresár {DIR}";
$lang['xs_ftp_log_mkdir'] = "adresár {DIR} bol vytvorený";
$lang['xs_ftp_log_nochdir'] = "chyba: nie je možné zmeniť adresár na {DIR}";
$lang['xs_ftp_log_normdir'] = "chyba: nie je možné odstrániť adresár {DIR}";
$lang['xs_ftp_log_rmdir'] = "adresár {DIR} bol vymazaný";
$lang['xs_ftp_log_chdir'] = "adresár bol zmenený na {DIR}";
$lang['xs_ftp_log_noupload'] = "chyba: nie je možné nahrať súbor {FILE}";
$lang['xs_ftp_log_upload'] = "súbor {FILE} bol nahraný";
$lang['xs_ftp_log_nochmod'] = "upozornenie: nie je možné zmeniť práva súboru {FILE}";
$lang['xs_ftp_log_chmod'] = "zmena práv súboru {FILE} na {MODE}";
$lang['xs_ftp_log_invalidcommand'] = "chyba: neznámy príkaz: {COMMAND}";
$lang['xs_ftp_log_chdir2'] = "aktuálny adresár sa mení späť na {DIR}";
$lang['xs_ftp_log_nochdir2'] = "nie je možné zmeniť adresár na {DIR}";
$lang['xs_ftp_config'] = "Konfigurácia FTP";
$lang['xs_ftp_select_method'] = "Vyberte spôsob nahratia";
$lang['xs_ftp_select_local'] = "Použiť miestny súborový systém (nie je potrebná žiadna konfigurácia)";
$lang['xs_ftp_select_ftp'] = "Použiť FTP (pozrite nastavenia FTP nižšie)";
$lang['xs_ftp_settings'] = "Nastavenia FTP";
$lang['xs_ftp_host'] = "Hostiteľ FTP";
$lang['xs_ftp_login'] = "FTP prihlasovacie meno";
$lang['xs_ftp_path'] = "FTP cesta k phpBB";
$lang['xs_ftp_pass'] = "FTP heslo";
$lang['xs_ftp_remotedir'] = "Vzdialený adresár";
$lang['xs_ftp_host_guess'] = "(pravdepodobne '{HOST}' [<a href='javascript: void(0)' onclick='{CLICK}'>nastaviť hostiteľa</a>])"; // NTR
$lang['xs_ftp_login_guess'] = "(pravdepodobne '{LOGIN}' [<a href='javascript: void(0)' onclick='{CLICK}'>nastaviť hostiteľa</a>])"; // NTR
$lang['xs_ftp_path_guess'] = "(pravdepodobne '{PATH}' [<a href='javascript: void(0)' onclick='{CLICK}'>nastaviť cestu</a>])"; // NTR

/*
* config.tpl
*/
$lang['xs_config_updated'] = "Konfigurácia bola aktualizovaná.";
$lang['xs_config_updated_explain'] = "Predtým, ako sa použije nová konfigurácia, potrebujete obnoviť túto stránku. <a href='{URL}'>Kliknite sem</a> pre obnovenie."; // NTR
$lang['xs_config_warning'] = "Upozornenie: nie je možné zapisovať do vyrovnávacej pamäte.";
$lang['xs_config_warning_explain'] = "Adresár pre vyrovnávaciu pamäť nie je zapisovateľný. eXtreme Styles sa môže pokúsiť tento problém opraviť.<br /><a href='{URL}'>Kliknite sem</a>, aby sa táto modifikácia pokúsila zmeniť režim prístupu do adresára pre vyrovnávaciu pamäť.<br /><br />Pokiaľ na vašom serveri z nejakého dôvodu nefunguje vyrovnávacia pamäť, nebojte sa - eXtreme Styles<br />zvýši rýchlosť fóra mnohonásobne aj bez vyrovnávacej pamäte."; // NTR
$lang['xs_config_maintitle'] = "Konfigurácia modifikácie eXtreme Styles";
$lang['xs_config_subtitle'] = "Toto je konfigurácia pre eXtreme Styles. Pokiaľ nerozumiete tomu, čo niektoré premenné robia, tak ich nemeňte.";
$lang['xs_config_title'] = "Nastavenia modifikácie eXtreme Styles v{VERSION}";
$lang['xs_config_cache'] = "Konfigurácia vyrovnávacej pamäte";
$lang['xs_config_navbar'] = "Zobraziť v ľavom rámci:";
$lang['xs_config_navbar_explain'] = "Môžete si vybrať, ktoré položky sa zobrazia v ľavom rámci ovládacieho panela správcu.";
$lang['xs_config_def_template'] = "Predvolený adresár pre šablóny";
$lang['xs_config_def_template_explain'] = "Pokiaľ sa v aktuálnom adresári nenachádza potrebný tpl súbor (môže sa to stať, ak ste phpBB modifikovali nesprávne), tak bude šablónový systém hľadať ten istý súbor v príbuznom adresári (napr. ak je aktuálna šablóna &amp;amp;quot;mojaSablona&amp;amp;quot; a skript potrebuje súbor &amp;amp;quot;mojaSablona/moj_subor.tpl&amp;amp;quot; a takýto súbor tam nie je, šablónový systém bude tento súbor hľadať v &amp;amp;quot;subSilver/moj_subor.tpl&amp;amp;quot;). Túto funkcionalitu vypnete, ak hodnotu nastavíte na prázdnu.";
$lang['xs_config_check_switches'] = "Skontrolovať počas kompilácie prepínače";
$lang['xs_config_check_switches_explain'] = "Táto funkcionalita kontroluje chyby v šablónach. Ak ju vypnete, urýchlite kompiláciu, ale kompilátor môže niektoré chyby v šablónach preskočiť, pokiaľ obsahujú chyby.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Inteligentná kontrola skontroluje prítomnosť chýb v šablónach a automaticky opraví všetky známe chyby (v rôznych modifikáciách je niekoľko dobre známych preklepov). Funguje o niečo pomalšie ako jednoduchá kontrola.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Ale občas vyzerá šablóna správne iba vtedy, ak je kontrola chýb zakázaná. To sa stáva kvôli nesprávnemu kódu html - ak chcete chyby opraviť, kontaktujte autora tpl súboru.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Pokiaľ je funkcionalita vyrovnávacej pamäte zakázaná, vypnite túto funkcionalitu pre rýchlejšiu kompiláciu.";
$lang['xs_config_check_switches_0'] = "Vypnutá";
$lang['xs_config_check_switches_1'] = "Inteligentná kontrola";
$lang['xs_config_check_switches_2'] = "Jednoduchá kontrola";
$lang['xs_config_show_errors'] = "Zobrazuje chyby pokiaľ sú súbory nesprávne zahrnuté do tpl súborov";
$lang['xs_config_show_error_explain'] = "Táto funkcionalita povolí/zakáže chyby v tpl súboroch, ktoré používateľ používal nesprávne &amp;amp;amp;lt;!-- INCLUDE nazov_suboru --&amp;amp;amp;gt;";
$lang['xs_config_tpl_comments'] = "Pridať názvy tpl súborov do html";
$lang['xs_config_tpl_comments_explain'] = "Táto funkcionalita pridá komentáre do html kódu, ktorý umožní návrhárom štýlov zistiť, ktorý tpl súbor sa zobrazuje.";
$lang['xs_config_use_cache'] = "Použiť vyrovnávaciu pamäť";
$lang['xs_config_use_cache_explain'] = "Vyrovnávacia pamäť sa ukladá na disk a urýchli šablónový systém, pretože nebude potrebné kompilovať šablónu zakaždým, keď sa zobrazí.";
$lang['xs_config_auto_compile'] = "Automaticky ukladať do vyrovnávacej pamäte";
$lang['xs_config_auto_compile_explain'] = "Týmto sa automaticky skompilujú šablóny, ktoré nie sú vo vyrovnávacej pamäti, a uložia sa do adresára pre vyrovnávaciu pamäť.";
$lang['xs_config_auto_recompile'] = "Automaticky prekompilovať vyrovnávaciu pamäť";
$lang['xs_config_auto_recompile_explain'] = "Týmto sa automaticky prekompilujú šablóny, ak sa niektorá z nich zmenila.";
$lang['xs_config_php'] = "Prípona názvov súborov vyrovnávacej pamäte";
$lang['xs_config_php_explain'] = "Toto je prípona súborov vyrovnávacej pamäte. Súbory sa ukladajú v php formáte, takže štandardná prípona je &amp;amp;quot;php&amp;amp;quot;. Nepridávajte bodku.";
$lang['xs_config_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat do konfigurácie."; // NTR
$lang['xs_config_sql_error'] = "Nepodarilo sa aktualizovať všeobecnú konfiguráciu pre {VAR}";

// Debug info
$lang['xs_debug_header'] = "Ladiace informácie";
$lang['xs_debug_explain'] = "Toto sú ladiace informácie. Používajú sa na hľadanie a opravu problémov pri konfigurácii vyrovnávacej pamäte.";
$lang['xs_debug_vars'] = "Premenné šablóny";
$lang['xs_debug_tpl_name'] = "Názov súboru šablóny:";
$lang['xs_debug_cache_filename'] = "Názov súboru vyrovnávacej pamäte:";
$lang['xs_debug_data'] = "Ladiace dáta:";
$lang['xs_check_hdr'] = "Kontroluje sa vyrovnávacia pamäť pre %s";
$lang['xs_check_filename'] = "Chyba: neplatný názov súboru";
$lang['xs_check_openfile1'] = "Chyba: nie je možné otvoriť súbor &amp;amp;quot;%s&amp;amp;quot;. Pokúsime sa vytvoriť adresáre...";
$lang['xs_check_openfile2'] = "Chyba: nie je možné otvoriť súbor &amp;amp;quot;%s&amp;amp;quot; ani po druhý raz. Vzdávame to...";
$lang['xs_check_nodir'] = "Kontroluje sa &amp;amp;quot;%s&amp;amp;quot; - takýto adresár neexistuje.";
$lang['xs_check_nodir2'] = "Chyba: nie je možné vytvoriť adresár &amp;amp;quot;%s&amp;amp;quot; - mali by ste skontrolovať povolenia.";
$lang['xs_check_createddir'] = "Bol vytvorený adresár &amp;amp;quot;%s&amp;amp;quot;";
$lang['xs_check_dir'] = "Kontroluje sa &amp;amp;quot;%s&amp;amp;quot; - adresár existuje.";
$lang['xs_check_ok'] = "Súbor &amp;amp;quot;%s&amp;amp;quot; bol otvorený na zápis. Všetko sa zdá byť v poriadku.";
$lang['xs_error_demo_edit'] = "nemôžete súbor upravovať v demo režime";
$lang['xs_error_not_installed'] = "Modifikácia eXtreme Styles nie je nainštalovaná. Zabudli ste nahrať súbor includes/template.php.";

/*
* chmod
*/
$lang['xs_chmod'] = "CHMOD";
$lang['xs_chmod_return'] = "<br /><br /><a href='{URL}'>Kliknite sem</a> pre návrat do konfigurácie."; // NTR
$lang['xs_chmod_message1'] = "Konfigurácia bola zmenená.";
$lang['xs_chmod_error1'] = "Nie je možné zmeniť prístupový režim do adresára vyrovnávacej pamäte.";

/*
* default style
*/
$lang['xs_def_title'] = "Nastaviť predvolený štýl";
$lang['xs_def_explain'] = "Táto funkcionalita vám umožní rýchlo zmeniť predvolený štýl fóra a tiež prepnúť používateľov z jedného štýlu na druhý.";
$lang['xs_styles_set_default'] = "nastaviť predvolený";
$lang['xs_styles_no_override'] = "nenahrádzať používateľské nastavenia";
$lang['xs_styles_do_override'] = "nahrádzať používateľské nastavenia";
$lang['xs_styles_switch_all'] = "prepnúť všetkých používateľov na tento štýl";
$lang['xs_styles_switch_all2'] = "prepnúť všetkých používateľov na:";
$lang['xs_styles_defstyle'] = "predvolený štýl";
$lang['xs_styles_available'] = "Dostupné štýly";
$lang['xs_styles_make_public'] = "sprístupniť štýl pre verejnosť";
$lang['xs_styles_make_admin'] = "sprístupniť štýl len pre správcov";
$lang['xs_styles_users'] = "Zoznam používateľov";

/*
* cache management
*/
$lang['xs_manage_cache_explain2'] = "Táto funkcionalita vám umožní skompilovať alebo odstrániť súbory štýlov vo vyrovnávacej pamäti.";
$lang['xs_clear_all_lc'] = "vyčistiť všetko";
$lang['xs_compile_all_lc'] = "skompilovať všetko";
$lang['xs_clear_cache_lc'] = "vyčistiť vyrovnávaciu pamäť";
$lang['xs_compile_cache_lc'] = "skompilovať vyrovnávaciu pamäť";
$lang['xs_cache_confirm'] = "Pokiaľ máte štýlov veľa, môže to výrazne zaťažiť server. Chcete pokračovať?";
$lang['xs_cache_nowrite'] = "Chyba: nie je možné pristupovať do adresára vyrovnávacej pamäte";
$lang['xs_cache_log_deleted'] = "{FILE} bol vymazaný";
$lang['xs_cache_log_nodelete'] = "Chyba: nie je možné vymazať {FILE}";
$lang['xs_cache_log_nothing'] = "Pre šablónu {TPL} nie je nič, čo by sa dalo vymazať";
$lang['xs_cache_log_nothing2'] = "Vo vyrovnávacej pamäti nie je nič na vymazanie";
$lang['xs_cache_log_count'] = "Bolo úspešne vymazaných {NUM} súborov";
$lang['xs_cache_log_count2'] = "Chyba pri mazaní {NUM} súborov";
$lang['xs_cache_log_compiled'] = "Skompilovaných: {NUM} súborov";
$lang['xs_cache_log_errors'] = "Chyby: {NUM}";
$lang['xs_cache_log_noaccess'] = "Chyba: nie je možné pristupovať k adresáru {DIR}";
$lang['xs_cache_log_compiled2'] = "Skompilovaný: {FILE}";
$lang['xs_cache_log_nocompile'] = "Chyba pri kompilácii: {FILE}";

/*
* export/import/download/clone
*/
$lang['xs_import_explain'] = "Táto funkcionalita vám umožní importovať štýly. Tiež môže automaticky inštalovať a aktualizovať štýly.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Poznámka: Ak ste pridali na toto fórum akékoľvek modifikácie (okrem modifikácie eXtreme Styles), mali by ste si pri importovaní štýlov dávať pozor, pretože štýly nemusia byť kompatibilné s vašim fórom. Môžete nainštalovať len štýly, ktoré majú rovnaké úpravy ako iné štýly, ktoré ste nakonfigurovali vo vašom fóre.";
$lang['xs_import_lc'] = "importovať";
$lang['xs_list_files_lc'] = "vypísať súbory";
$lang['xs_delete_file_lc'] = "vymazať súbor";
$lang['xs_export_style_lc'] = "exportovať štýl";
$lang['xs_import_no_cached'] = "Vo vyrovnávacej pamäti nie sú žiadne štýly, ktoré by bolo možné importovať.";
$lang['xs_add_styles'] = "Pridať štýly";
$lang['xs_add_styles_web'] = "Stiahnuť z webu";
$lang['xs_add_styles_web_get'] = "Získať ho";
$lang['xs_add_styles_copy'] = "Skopírovať z miestneho súboru";
$lang['xs_add_styles_copy_get'] = "Kopírovať";
$lang['xs_add_styles_upload'] = "Nahrať z počítača";
$lang['xs_add_styles_upload_get'] = "Nahrať";
$lang['xs_export_style'] = "Exportovať štýl";
$lang['xs_export_style_explain'] = "Táto funkcionalita vám umožní exportovať štýl ako jeden súbor. Tento súbor je veľmi malý - menší ako .zip súbor (pretože je skomprimovaný algoritmom gzip, ktorý funguje lepšie ako zip) a všetky štýly sú vnútri tohto súboru. Následne je veľmi jednoduché preniesť štýly z jedného fóra na druhé.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Táto funkcionalita vám tiež umožní nahrať exportované štýly na server prostredníctvom FTP. Tento systém vám umožní rýchlo preniesť štýl na iné fórum bez toho, aby ste ho museli ručne skopírovať.";
$lang['xs_export_style_title'] = "Exportovať šablónu &amp;amp;quot;{TPL}&amp;amp;quot;";
$lang['xs_export_tpl_name'] = "Exportovať ako (názov šablóny)";
$lang['xs_export_style_names'] = "Vyberte štýl(y) na exportovanie";
$lang['xs_export_style_name'] = "Štýl na exportovanie (názov štýlu)";
$lang['xs_export_style_comment'] = "Komentár";
$lang['xs_export_where'] = "Kam exportovať";
$lang['xs_export_where_download'] = "Stiahnuť ako súbor";
$lang['xs_export_where_store'] = "Uložiť ako súbor na serveri";
$lang['xs_export_where_store_dir'] = "Adresár";
$lang['xs_export_where_ftp'] = "Nahrať prostredníctvom FTP";
$lang['xs_export_filename'] = "Exportovať názov súboru";
$lang['xs_download_explain2'] = "Táto funkcionalita vám umožní rýchlo stiahnuť a nainštalovať štýly z rôznych webových stránok. Kliknite na odkaz vedľa názvu webovej stránky a budete presmerovaní na stránku pre stiahnutie štýlov.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Taktiež môžete spravovať zoznam webových stránok.";
$lang['xs_download_locations'] = "Umiestnenia pre sťahovanie";
$lang['xs_edit_link'] = "Upraviť odkaz";
$lang['xs_add_link'] = "Pridať odkaz";
$lang['xs_link_title'] = "Názov odkazu";
$lang['xs_link_url'] = "URL odkazu";
$lang['xs_delete'] = "Vymazať";
$lang['xs_style_header_error_file'] = "Nie je možné otvoriť miestny súbor.";
$lang['xs_style_header_error_server'] = "Chyba na serveri: ";
$lang['xs_style_header_error_invalid'] = "Neplatná hlavička súboru.";
$lang['xs_style_header_error_reason'] = "Chyba pri čítaní hlavičky súboru: ";
$lang['xs_style_header_error_incomplete'] = "Súbor nie je kompletný.";
$lang['xs_style_header_error_incomplete2'] = "Neplatná veľkosť súboru. Asi nie je súbor kompletný.";
$lang['xs_style_header_error_invalid2'] = "Neplatný súbor. Asi tento súbor nie je kompatibilný s modifikáciou eXtreme Styles alebo je v nesprávnej verzii.";
$lang['xs_error_cannot_open'] = "Nie je možné otvoriť súbor.";
$lang['xs_error_decompress_style'] = "Chyba počas dekompresie súboru. Asi je súbor poškodený.";
$lang['xs_error_cannot_create_file'] = "Nie je možné vytvoriť súbor &amp;amp;quot;{FILE}&amp;amp;quot;";
$lang['xs_error_cannot_create_tmp'] = "Nie je možné vytvoriť dočasný súbor &amp;amp;quot;{FILE}&amp;amp;quot;";
$lang['xs_import_invalid_file'] = "Neplatný súbor.";
$lang['xs_import_incomplete_file'] = "Nekompletný súbor.";
$lang['xs_import_uploaded'] = "Štýl bol nahraný.";
$lang['xs_import_installed'] = "Štýl bol nahraný a nainštalovaný.";
$lang['xs_import_notinstall'] = "Štýl bol nahraný, ale počas inštalácie sa vyskytla chyba (SQL chyba).";
$lang['xs_import_notinstall2'] = "Štýl bol nahraný, ale počas inštalácie sa vyskytla chyba: v súbore theme_info.cfg sa nenašli žiadne štýly.";
$lang['xs_import_notinstall3'] = "Štýl bol nahraný, ale počas inštalácie sa vyskytla chyba: v súbore theme_info.cfg sa nenašiel žiadny záznam pre &amp;amp;quot;{STYLE}&amp;amp;quot;.";
$lang['xs_import_notinstall4'] = "Štýl bol nahraný, ale počas inštalácie sa vyskytla chyba: nie je možné získať ďalšie informácie themes_id.";
$lang['xs_import_notinstall5'] = "Štýl bol nahraný, ale počas inštalácie sa vyskytla chyba: nie je možné aktualizovať tabuľku štýlov.";
$lang['xs_import_nodownload'] = "Nie je možné stiahnuť štýl z {URL}";
$lang['xs_import_nodownload2'] = "Nie je možné skopírovať štýl z {URL}";
$lang['xs_import_nodownload3'] = "Súbor nebol nahraný.";
$lang['xs_import_uploaded2'] = "Štýl bol stiahnutý. Môžete ho teraz importovať.<br /><br /><a href='{URL}'>Kliknite sem</a> pre importovanie štýlu."; // NTR
$lang['xs_import_uploaded3'] = "Štýl bol skopírovaný. Môžete ho teraz importovať.<br /><br /><a href='{URL}'>Kliknite sem</a> pre importovanie štýlu."; // NTR
$lang['xs_import_uploaded4'] = "Štýl bol nahraný. Môžete ho teraz importovať.<br /><br /><a href='{URL}'>Kliknite sem</a> pre importovanie štýlu."; // NTR
$lang['xs_export_no_open_dir'] = "Nie je možné otvoriť adresár {DIR}.";
$lang['xs_export_no_open_file'] = "Nie je možné otvoriť súbor {FILE}.";
$lang['xs_export_no_read_file'] = "Chyba pri čítaní súboru {FILE}.";
$lang['xs_no_theme_data'] = "Nie je možné získať dáta štýlu pre vybranú šablónu.";
$lang['xs_no_style_info'] = "Nie je možné získať informácie o štýle.";
$lang['xs_export_noselect_themes'] = "Mali by ste vybrať aspoň jeden štýl.";
$lang['xs_export_error'] = "Nie je možné exportovať šablónu &amp;amp;quot;{TPL}&amp;amp;quot;: ";
$lang['xs_export_error2'] = "Nie je možné exportovať šablónu &amp;amp;quot;{TPL}&amp;amp;quot;: štýl je prázdny.";
$lang['xs_export_saved'] = "Štýl je uložený ako &amp;amp;quot;{FILE}&amp;amp;quot;";
$lang['xs_export_error_uploading'] = "Chyba pri nahrávaní súboru.";
$lang['xs_export_uploaded'] = "Súbor bol nahraný.";
$lang['xs_clone_taken'] = "Tento názov štýlu sa už používa.";
$lang['xs_error_new_row'] = "Nie je možné vložiť nový riadok do tabuľky.";
$lang['xs_theme_cloned'] = "Štyl bol sklonovaný.";
$lang['xs_invalid_style_name'] = "Neplatný názov štýlu.";
$lang['xs_clone_style_exists'] = "Taká šablóna už existuje.";
$lang['xs_clone_no_select'] = "Mali by ste vybrať aspoň jeden štýl, ktorý chcete klonovať.";
$lang['xs_no_themes'] = "Štýl sa v databáze nenašiel.";
$lang['xs_import_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na stránku pre importovanie štýlov."; // NTR
$lang['xs_import_back_download'] = "<a href='{URL}' target='main'>Kliknite sem</a> pre návrat k stiahnutým súborom."; // NTR
$lang['xs_export_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na stránku pre exportovanie štýlov."; // NTR
$lang['xs_clone_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na stránku pre klonovanie štýlov."; // NTR
$lang['xs_download_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na stránku pre sťahovanie."; // NTR
$lang['xs_import_tpl'] = "Importovať šablónu &amp;amp;quot;{TPL}&amp;amp;quot;";
$lang['xs_import_tpl_comment'] = "Táto funkcionalita nahrá na vaše fórum šablónu. Ak už vo vašom fóre šablóna s takým menom existuje, táto funkcionalita automaticky prepíše staré súbory, takže ju tiež môžete použiť na aktualizáciu štýlov.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Táto funkcionalita tiež môže automaticky inštalovať štýly. Ak chcete nainštalovať štýl po tom, ako ho importujete, vyberte si jeden alebo viac štýlov nižšie.";
$lang['xs_import_tpl_filename'] = "Názov súboru:";
$lang['xs_import_tpl_tplname'] = "Názov šablóny:";
$lang['xs_import_tpl_comment2'] = "Komentár:";
$lang['xs_import_select_styles'] = "Vyberte štýl(y) pre inštaláciu:";
$lang['xs_import_install_def_lc'] = "nastaviť ako predvolený štýl fóra";
$lang['xs_import_install_style'] = "Inštalovať štýl:";
$lang['xs_import'] = "Importovať";
$lang['xs_import_list_contents'] = "Obsah súboru: ";
$lang['xs_import_list_filename'] = "Názov súboru: ";
$lang['xs_import_list_template'] = "Šablóna: ";
$lang['xs_import_list_comment'] = "Komentár: ";
$lang['xs_import_list_styles'] = "Štýl(y): ";
$lang['xs_import_list_files'] = "Súbory ({NUM}):";
$lang['xs_import_download_lc'] = "stiahnuť súbor";
$lang['xs_import_view_lc'] = "zobraziť súbor";
$lang['xs_import_file_size'] = "({NUM} bajtov)";
$lang['xs_import_nogzip'] = "Táto funkcionalita vyžaduje gz kompresiu a zjavne tá nie je na tomto serveri podporovaná.";
$lang['xs_import_nowrite_cache'] = "Nie je možné zapisovať do vyrovnávacej pamäte. Táto funkcionalita vyžaduje, aby bola vyrovnávacia pamäť zapisovateľná. Skontrolujte konfiguráciu modifikácie.<br /><br /><a href='{URL1}'>Kliknite sem</a>, aby ste nastavili vyrovnávaciu pamäť ako zapisovateľnú.<br /><br /><a href='{URL2}'>Kliknite sem</a> pre návrat na stránku pre importovanie."; // NTR
$lang['xs_import_download_warning'] = "Týmto sa dostanete na externú webovú stránku, kde môžete rýchlo stiahnuť štýly len na zopár kliknutí a to pomocou funkcionality pre importovanie eXtreme Styles.";
$lang['xs_clone_style'] = "Klonovať štýl";
$lang['xs_clone_style_explain'] = "Táto funkcionalita vám umožní rýchlo sklonovať štýly alebo celú šablónu.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Upozornenie: Pokiaľ kopírujete šablónu, uistite sa, že vám to autor pôvodnej šablóny dovoľuje (iba ak ide o subSilver - s ním si môžete robiť čo len chcete). Zvyčajne vám autori dovolia ich štýly upravovať, ale tieto by sa nemali distribuovať.";
$lang['xs_clone_style_explain2'] = "Táto funkcionalita vám umožní vytvoriť nový štýl pre šablónu. Táto funkcionalita neskopíruje žiadne súbory - pridá záznam do databázy pre váš nový štýl. Aj starý, ako aj nový štýl, budú zdieľať rovnakú šablónu.";
$lang['xs_clone_style_explain3'] = "Zadajte názov nového štýlu, ktorý sa chystáte vytvoriť a kliknite na tlačidlo &amp;amp;quot;klonovať&amp;amp;quot;.";
$lang['xs_clone_style_explain4'] = "Táto funkcionalita vám umožní klonovať šablónu. Taktiež môžete skopírovať všetky štýly pridružené s touto šablónou. Neskôr môžete bezpečne upraviť tpl súbory pre novú šablónu a starú tým vôbec neovplyvníte.";
$lang['xs_clone_style_lc'] = "klonovať štýl";
$lang['xs_clone_style2'] = "Klonovať štýl &amp;amp;quot;{STYLE}&amp;amp;quot;:";
$lang['xs_clone_style3'] = "Klonovať šablónu &amp;amp;quot;{STYLE}&amp;amp;quot;";
$lang['xs_clone_newdir_name'] = "Názov novej šablóny (adresára):";
$lang['xs_clone_select'] = "Vyberte štýl(y) na klonovanie:";
$lang['xs_clone_select_explain'] = "Mali by ste si vybrať aspoň jeden štýl.";
$lang['xs_clone_newname'] = "Názov nového štýlu:";

/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = "Toto je zoznam štýlov, ktoré sú nahrané vo vašom fóre, ale nie sú nainštalované. Kliknite na odkaz &amp;amp;quot;inštalovať&amp;amp;quot; pre štýl, ktorý chcete nainštalovať, alebo vyberte niekoľko štýlov a kliknite na tlačidlo Odoslať.";
$lang['xs_uninstall_styles_explain2'] = "Toto je zoznam štýlov, ktoré sú nainštalované vo vašom fóre. Kliknite na odkaz &amp;amp;quot;odinštalovať&amp;amp;quot;, aby ste odstránili niektoré štýly z fóra. Odinštalovanie je bezpečné - všetci používatelia, ktorí využívajú štýl, ktorý bude odinštalovaný, budú prepnutí späť na predvolený štýl fóra. Taktiež odinštalovaním sa automaticky vymaže vyrovnávacia pamäť pre tento štýl.";
$lang['xs_install'] = "Inštalovať";
$lang['xs_install_lc'] = "inštalovať";
$lang['xs_uninstall'] = "Odinštalovať";
$lang['xs_remove_files'] = "Odstrániť súbory";
$lang['xs_style_removed'] = "Štýl bol odstránený.";
$lang['xs_uninstall_lc'] = "odinštalovať";
$lang['xs_uninstall2_lc'] = "odinštalovať a vymazať súbory";
$lang['xs_install_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat k inštalácii štýlov."; // NTR
$lang['xs_uninstall_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat k odinštalácii štýlov."; // NTR
$lang['xs_goto_default'] = "<a href='{URL}'>Kliknite sem</a> pre zmenu predvoleného štýlu."; // NTR
$lang['xs_install_installed'] = "Štýl(y) bol(i) nainštalovaný(-é).";
$lang['xs_install_error'] = "Chyba pri inštalácii štýlu.";
$lang['xs_install_none'] = "Nie sú žiadne nové štýly, ktoré by bolo možné nainštalovať. Všetky dostupné štýly už sú nainštalované.";
$lang['xs_uninstall_default'] = "Nemôžete odstrániť predvolený štýl. Aby ste zmenili predvolený štýl, <a href='{URL}'>kliknite sem</a>."; // NTR

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = "Táto funkcionalita uloží dáta štýlu do súboru theme_info.cfg. Môžete ju použiť na uloženie informácií z databázy pred prenesením štýlov z jedného fóra na druhé.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Poznámka: Pokiaľ používate funkcionalitu pre exportovanie z modifikácie eXtreme Styles na presun štýlu na iné fórum, nepotrebujete ukladať súbor theme_info.cfg - funkcionalita pre exportovanie štýlu to spraví automaticky za vás.";
$lang['xs_export_styles_data_explain3'] = "Vyberte štýly, ktoré chcete exportovať.";
$lang['xs_export_data_back'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na stránku pre export dát štýlov."; // NTR
$lang['xs_export_style_data_lc'] = "exportovanie dát štýlov";
$lang['xs_export_data_saved'] = "Dáta boli exportované.";

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = "Táto funkcionalita vám umožní upravovať šablóny. Prehliadač súborov vám zobrazí iba súbory, ktoré je možné upravovať.";
$lang['xs_edit_template_comment2'] = "Táto funkcionalita vám umožní upravovať šablóny.";
$lang['xs_edit_file_saved'] = "Súbor je uložený.";
$lang['xs_edit_not_found'] = "Súbor sa nenašiel.";
$lang['xs_edittpl_back_dir'] = "<a href='{URL}'>Kliknite sem</a> pre návrat do správcu súborov."; // NTR
$lang['xs_fileman_browser'] = "Prehliadač súborov";
$lang['xs_fileman_directory'] = "Adresár:";
$lang['xs_fileman_dircount'] = "Adresáre ({COUNT}):";
$lang['xs_fileman_filter'] = "Filter";
$lang['xs_fileman_filter_ext'] = "Zobraziť iba súbory s príponou:";
$lang['xs_fileman_filter_content'] = "Zobraziť iba súbory, ktoré obsahujú:";
$lang['xs_fileman_filter_clear'] = "Vyčistiť filter";
$lang['xs_fileman_filename'] = "Názov súboru";
$lang['xs_fileman_filesize'] = "Veľkosť";
$lang['xs_fileman_filetime'] = "Úprava";
$lang['xs_fileman_options'] = "Možnosti";
$lang['xs_fileman_time_today'] = "(dnes)";
$lang['xs_fileman_edit_lc'] = "upraviť";
$lang['xs_fileedit_search_nomatch'] = "Zhoda sa nenašla.";
$lang['xs_fileedit_search_match1'] = "Nahradená 1 zhoda.";
$lang['xs_fileedit_search_matches'] = "Nahradených &amp;amp;#039; + count + &amp;amp;#039; zhôd.";
$lang['xs_fileedit_noundo'] = "Nie je tu nič, čo by sa dálo vrátiť späť.";
$lang['xs_fileedit_undo_complete'] = "Starý obsah bol obnovený.";
$lang['xs_fileedit_edit_name'] = "Upraviť súbor:";
$lang['xs_fileedit_location'] = "Umiestnenie:";
$lang['xs_fileedit_reload_lc'] = "znovu načítať súbor";
$lang['xs_fileedit_download_lc'] = "stiahnuť súbor";
$lang['xs_fileedit_trim'] = "Automaticky odstrániť medzery na začiatku a konci súboru.";
$lang['xs_fileedit_functions'] = "Funkcie pre úpravu";
$lang['xs_fileedit_replace1'] = "Nahradiť ";
$lang['xs_fileedit_replace2'] = " s ";
$lang['xs_fileedit_replace_first_lc'] = "nahradiť prvú zhodu";
$lang['xs_fileedit_replace_all_lc'] = "nahradiť všetky zhody";
$lang['xs_fileedit_replace_undo_lc'] = "vrátiť nahradenie späť";
$lang['xs_fileedit_backups'] = "Zálohy";
$lang['xs_fileedit_backups_save_lc'] = "uložiť zálohu";
$lang['xs_fileedit_backups_show_lc'] = "zobraziť obsah";
$lang['xs_fileedit_backups_restore_lc'] = "obnoviť";
$lang['xs_fileedit_backups_download_lc'] = "stiahnuť";
$lang['xs_fileedit_backups_delete_lc'] = "vymazať";
$lang['xs_fileedit_upload'] = "Nahrať";
$lang['xs_fileedit_upload_file'] = "Nahrať súbor:";

/*
* edit styles data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = "Súbor s CSS štýlmi";
$lang['xs_data_body_background'] = "Obrázok na pozadí";
$lang['xs_data_body_bgcolor'] = "Farba pozadia";
$lang['xs_data_style_name'] = "Názov štýlu";
$lang['xs_data_body_link'] = "Farba odkazu";
$lang['xs_data_body_text'] = "Farba textu";
$lang['xs_data_body_vlink'] = "Farba navštíveného odkazu";
$lang['xs_data_body_alink'] = "Farba aktívneho odkazu";
$lang['xs_data_body_hlink'] = "Farba odkazu, nad ktorý presuniete myš";
$lang['xs_data_tr_color'] = "Farba riadku tabuľky %s";
$lang['xs_data_tr_class'] = "Trieda riadku tabuľky %s";
$lang['xs_data_th_color'] = "Farba hlavičky tabuľky %s";
$lang['xs_data_th_class'] = "Trieda hlavičky tabuľky %s";
$lang['xs_data_td_color'] = "Farba bunky tabuľky %s";
$lang['xs_data_td_class'] = "Trieda bunky tabuľky %s";
$lang['xs_data_fontface'] = "Typ písma %s";
$lang['xs_data_fontsize'] = "Veľkosť písma %s";
$lang['xs_data_fontcolor'] = "Farba písma %s";
$lang['xs_data_span_class'] = "Trieda pre rozpätie (span) %s";
$lang['xs_data_img_size_poll'] = "Veľkosť obrázka pre polling [px]";
$lang['xs_data_img_size_privmsg'] = "Veľkosť statusu súkromnej správy [px]";
$lang['xs_data_theme_public'] = "Verejný štýl (1 alebo 0)";
$lang['xs_data_unknown'] = "Popis nie je k dispozícii (%s)";
$lang['xs_edittpl_error_updating'] = "Chyba pri nahrávaní štýlu.";
$lang['xs_edittpl_style_updated'] = "Štýl bol aktualizovaný.";
$lang['xs_invalid_style_id'] = "Neplatné ID štýlu.";
$lang['xs_edittpl_back_edit'] = "<a href='{URL}'>Kliknite sem</a> pre návrat k úpravám.";
$lang['xs_edittpl_back_list'] = "<a href='{URL}'>Kliknite sem</a> pre návrat na zoznam štýlov.";
$lang['xs_editdata_explain'] = "Táto funkcionalita vám umožní upraviť dáta v databáze pre nainštalované štýly. Niektoré štýly ignorujú hodnoty v databáze a používajú namiesto toho css súbory, a niektoré štýly používajú iba niektoré z hodnôt v databáze.";
$lang['xs_editdata_var'] = "Premenná";
$lang['xs_editdata_value'] = "Hodnota";
$lang['xs_editdata_comment'] = "Komentár";

/*
* updates
*/
$lang['xs_updates'] = "Aktualizácie";
$lang['xs_updates_comment'] = "Táto funkcionalita kontroluje dostupnosť aktualizácií niektorých štýlov a modifikácií. Funguje len pre tie položky, ktoré majú relevantné informácie o aktualizácii.";
$lang['xs_updates_comment2'] = "Toto je výsledok kontroly verzie.";
$lang['xs_update_total1'] = "Celkovo: {NUM} položiek";
$lang['xs_update_info1'] = "Táto správcovská funkcionalita skontroluje dostupnosť aktualizácií pre phpBB, niektoré modifikácie a štýly nainštalované vo vašom fóre. Pokiaľ nájde dostupné aktualizácie, zobrazí odkaz, kde si môžete stiahnuť aktualizovaný súbor.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Táto funkcionalita vyžaduje povolenie socketov. Väčšina bezplatných webhostingov túto funkcionalitu nemá, takže ak je vaše fórum u bezplatného hostiteľa (ako je lycos), vtedy nemôžete funkcionalitu pre aktualizovanie použiť. Ale ak je toto fórum na normálnom serveri, v takom prípade by malo byť všetko v poriadku.&amp;amp;lt;br /&amp;amp;gt;&amp;amp;lt;br /&amp;amp;gt;Keď kliknete na &amp;amp;quot;pokračovať&amp;amp;quot;, skript skontroluje všetok nainštalovaný softvér v tomto fóre. Pokiaľ je vaša webová stránka pomalá, môže to chvíľu trvať. Buďte trpezliví a neklikajte vo vašom prehliadači na &amp;amp;quot;Zastaviť&amp;amp;quot;, ak je priebeh oneskorený. Pokiaľ sú tento server alebo aktualizačná stránka pomalé, skriptu môže uplynúť čas pre beh - ak sa tak stane, mali by ste zvýšiť hodnotu časového limitu.";
$lang['xs_update_name'] = "Názov";
$lang['xs_update_type'] = "Typ";
$lang['xs_update_current_version'] = "Vaša verzia";
$lang['xs_update_latest_version'] = "Najnovšia verzia";
$lang['xs_update_downloadinfo'] = "URL pre stiahnutie";
$lang['xs_update_timeout'] = "Časový limit aktualizačného skriptu (sekúnd):";
$lang['xs_update_continue'] = "Pokračovať";
$lang['xs_update_total2'] = "Chyby: {NUM}";
$lang['xs_update_total3'] = "K dispozícii sú aktualizácie: {NUM} položiek";
$lang['xs_update_select1'] = "Vyberte položky pre aktualizáciu";
$lang['xs_update_types']['0'] = "Neznáme";
$lang['xs_update_types']['1'] = "Štýl";
$lang['xs_update_types']['2'] = "Modifikácia";
$lang['xs_update_types']['3'] = "phpBB";
$lang['xs_update_fileinfo'] = "Viac informácií";
$lang['xs_update_nothing'] = "Nie je čo aktualizovať.";
$lang['xs_update_noupdate'] = "Používate najnovšiu verziu.";
$lang['xs_update_error_url'] = "Chyba: nie je možné získať url %s";
$lang['xs_update_error_noitem'] = "Chyba: Nie sú k dispozícii žiadne informácie o aktualizáciách";
$lang['xs_update_error_noconnect'] = "Chyba: Nie je možné sa pripojiť k aktualizačnému serveru";
$lang['xs_update_download'] = "stiahnuť";
$lang['xs_update_downloadinfo2'] = "stiahnuť/informácie";
$lang['xs_update_info'] = "webstránka";
$lang['xs_permission_denied'] = "Povolenia boli zamietnuté.";
$lang['xs_download_lc'] = "stiahnuť";
$lang['xs_info_lc'] = "informácie";

/*
* style configuration
*/
$lang['Template_Config'] = "Konfigurácia šablóny";
$lang['xs_style_configuration'] = "Konfigurácia šablóny";

?>