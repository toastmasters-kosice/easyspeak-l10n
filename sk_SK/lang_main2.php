<?php
/***************************************************************************
 *                            lang_main2.php [Slovak]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main2.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
 *
 ****************************************************************************/

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
// Mass and Club e-mail
$lang['M_Email'] = "E-mail používateľskej skupiny";
$lang['Send_email_msg'] = "Poslať e-mail";
$lang['No_user_specified'] = "Nebol určený žiadny používateľ.";
$lang['User_prevent_email'] = "Tento používateľ nechce prijímať e-maily. Skúste mu poslať súkromnú správu.";
$lang['User_no_email'] = "Tento používateľ nemá platnú e-mailovú adresu. Skúste mu poslať %ssúkromnú správu.%s";
$lang['User_not_exist'] = "Takýto používateľ neexistuje.";
$lang['CC_email'] = "Preposlať mi kópiu tohto e-mailu";
$lang['CC_email_2'] = "(nie je to e-mail s agendou #3)";
$lang['Email_message_desc'] = "Odpovede na tento e-mail odošleme na vašu e-mailovú adresu.";
$lang['Flood_email_limit'] = "V tejto chvíli nemôžete poslať ďalší e-mail. Skúste to neskôr.";
$lang['Recipient'] = "Príjemca";
$lang['Email_sent'] = "Tento e-mail sme poslali nasledujúcim príjemcom:";
$lang['Send_email'] = "Poslať e-mail";
$lang['Empty_subject_email'] = "Musíte zadať predmet e-mailu.";
$lang['Empty_message_email'] = "Musíte zadať správu, ktorá sa má odoslať e-mailom.";
$lang['Contact_Support'] = "Kontaktovať podporu";
$lang['Too_many'] = "Pre takéto množstvo príjemcov použite, prosím, obrazovku Hromadný e-mail.";

//E-mail agenda
$lang['Email_text'] = "Myslím si, že by ťa mohlo zaujímať nasledujúce stretnutie zobrazené na";
$lang['Event_text'] = "Myslím si, že by ťa mohlo zaujímať nasledujúce podujatie zobrazené na";

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = "Potvrdzovací kód, ktorý ste zadali, bol nesprávny.";
$lang['Too_many_registers'] = "Prekročili ste počet pokusov o registráciu pre túto reláciu. Skúste to neskôr.";
$lang['Confirm_code_impaired'] = "Ak ste zrakovo postihnutí alebo nemôžete z nejakého dôvodu prečítať tento kód, kontaktujte, prosím, %ssprávcu%s.";
$lang['Confirm_code'] = "Potvrdzovací kód";
$lang['Confirm_code_explain'] = "Zadajte kód presne tak, ako ho vidíte.";

//
// Memberlist
//
$lang['Select_sort_method'] = "Zoradené podľa";
$lang['Sort'] = "Zoradiť";
$lang['Sort_Top_Ten'] = "Desať najlepších autorov príspevkov";
$lang['Sort_Joined'] = "Dátum pridania";
$lang['M_status'] = "Postavenie člena";
$lang['Sort_Username'] = "Používateľské meno";
$lang['Sort_Posts'] = "Príspevkov celkovo";
$lang['Sort_Email'] = "E-mail";
$lang['Sort_Website'] = "Webová stránka";
$lang['Sort_Ascending'] = "Vzostupne";
$lang['Sort_Descending'] = "Zostupne";
$lang['Order'] = "Poradie";

//
// Group control panel
//
$lang['Group_Control_Panel'] = "Ovládací panel skupiny";
$lang['Group_member_details'] = "Podrobnosti o členstve v skupine";
$lang['Group_member_join'] = "Pridať sa do skupiny";
$lang['Group_Information'] = "Informácie o používateľskej skupine";
$lang['Group_name'] = "Názov skupiny";
$lang['Group_description'] = "Popis skupiny";
$lang['Group_membership'] = "Členstvo v skupine";
$lang['Group_Members'] = "Členovia skupiny";
$lang['Group_Moderator'] = "Moderátor skupiny";
$lang['Pending_members'] = "Členovia čakajúci na schválenie";
$lang['Group_type'] = "Typ skupiny";
$lang['Group_open'] = "Otvorená skupina";
$lang['Group_closed'] = "Uzavretá skupina";
$lang['Group_hidden'] = "Skrytá skupina";
$lang['Group_auto'] = "Automaticky sa pridať do skupiny";
$lang['Current_memberships'] = "Aktuálne členstvá";
$lang['Non_member_groups'] = "Skupiny pre nečlenov";
$lang['Memberships_pending'] = "Členstvá čakajúce na schválenie";
$lang['No_groups_exist'] = "Neexistujú žiadne skupiny.";
$lang['Group_not_exist'] = "Takáto používateľská skupina neexistuje.";
$lang['Join_group'] = "Pridať sa do skupiny";
$lang['No_group_members'] = "Táto skupina nemá žiadnych členov.";
$lang['Group_hidden_members'] = "Táto skupina je skrytá. Nemôžete si zobraziť jej členov.";
$lang['Group_joined'] = "Úspešne ste požiadali o odber tejto skupiny.<br />Oznámime vám, keď váš odber schváli moderátor skupiny.";
$lang['Group_request'] = "Niekto požiadal o pridanie do vašej skupiny.";
$lang['Group_approved'] = "Vaša žiadosť bola schválená.";
$lang['Group_added'] = "Boli ste pridaní do tejto používateľskej skupiny.";
$lang['Already_member_group'] = "Už ste členom tejto skupiny.";
$lang['User_is_member_group'] = "Používateľ už je členom tejto skupiny.";
$lang['Group_type_updated'] = "Typ skupiny bol úspešne aktualizovaný.";
$lang['Could_not_add_user'] = "Vybraný používateľ neexistuje.";
$lang['Could_not_anon_user'] = "Nemôžete pridať anonyma ako člena skupiny.";
$lang['Confirm_unsub'] = "Skutočne chcete zrušiť odber tejto skupiny?";
$lang['Confirm_unsub_mail'] = "Skutočne chcete zrušiť odber zo skupiny %s?";
$lang['Confirm_unsub_pending'] = "Váš odber tejto skupiny ešte nebol schválený. Skutočne chcete odber zrušiť?";
$lang['Unsub_success'] = "Váš odber tejto skupiny bol zrušený.";
$lang['Approve_selected'] = "Schváliť vybrané";
$lang['Deny_selected'] = "Zamietnuť vybrané";
$lang['Remove_selected'] = "Odstrániť vybrané";
$lang['Add_member'] = "Pridať člena";
$lang['Not_add_member'] = "Nemáte systémové oprávnenia na pridávanie členov.";
$lang['Not_group_moderator'] = "Nie ste moderátor tejto skupiny a preto nemôžete urobiť túto akciu.";
$lang['Login_to_join'] = "Prihláste sa, aby ste sa mohli pridať do skupiny alebo spravovať členstvá v skupine.";
$lang['This_open_group'] = "Toto je otvorená skupina: kliknite, aby ste požiadali o členstvo.";
$lang['This_closed_group'] = "Toto je uzavretá skupina: neprijíma žiadnych ďalších používateľov.";
$lang['This_hidden_group'] = "Toto je skrytá skupina: automatické pridávanie používateľov nie je povolené.";
$lang['This_auto_group'] = "Toto je skupina s automatickým schvaľovaním: kliknite, aby ste požiadali o členstvo.";
$lang['Member_this_group'] = "Ste členom tejto skupiny.";
$lang['Pending_this_group'] = "Vaše členstvo v tejto skupine čaká na schválenie.";
$lang['Are_group_moderator'] = "Ste moderátor skupiny.";
$lang['None'] = "Žiadne";
$lang['Subscribe'] = "Odoberať";
$lang['Unsubscribe'] = "Zrušiť odber";
$lang['View_Information'] = "Zobraziť informácie";

//
// Search
//
$lang['Search_query'] = "Hľadaný výraz";
$lang['Search_options'] = "Možnosti hľadania";
$lang['Search_keywords'] = "Hľadať kľúčové slová";
$lang['Search_keywords_explain'] = "Môžete použiť <u>AND</u> na definovanie slov, ktoré musia byť vo výsledkoch, <u>OR</u> na definovanie slov, ktoré môžu byť vo výsledkoch a <u>NOT</u> na definovanie slov, ktoré nesmú byť vo výsledkoch. Použite * ako zástupný znak pre čiastočné zhody.";
$lang['Search_author'] = "Hľadať autora";
$lang['Search_author_explain'] = "Zadajte meno alebo používateľské meno (alebo časť mena alebo adresy)";
$lang['Search_for_any'] = "Hľadať akékoľvek pojmy alebo použiť hľadaný výraz tak, ako bol zadaný";
$lang['Search_for_all'] = "Hľadať všetky pojmy";
$lang['Search_title_msg'] = "Hľadať názov témy a text správy";
$lang['Search_msg_only'] = "Hľadať iba text správy";
$lang['Exact'] = "Presná zhoda";
$lang['Return_first'] = "Vrátiť prvých"; // followed by xxx characters in a select box
$lang['characters_posts'] = "znakov príspevku";
$lang['Search_previous'] = "Hľadať predchádzajúcich"; // followed by days, weeks, months, year, all in a select box
$lang['Sort_by'] = "Zoradiť podľa";
$lang['Sort_Time'] = "Čas zverejnenia";
$lang['Sort_Post_Subject'] = "Predmet príspevku";
$lang['Sort_Topic_Title'] = "Názov témy";
$lang['Sort_Author'] = "Autor";
$lang['Sort_Forum'] = "Fórum";
$lang['Display_results'] = "Zobraziť výsledky ako";
$lang['All_available'] = "Všetky dostupné";
$lang['No_searchable_forums'] = "Nemáte oprávnenia prehľadávať akékoľvek fórum na tejto stránke.";
$lang['No_search_match'] = "Vaše kritériá hľadania nespĺňa žiadna téma ani príspevok.";
$lang['Found_search_match'] = "Hľadanie našlo %d výsledok."; // eg. Search found 1 match
$lang['Found_search_matches'] = "Hľadanie našlo %d výsledkov."; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = "Nemôžete začať ďalšie hľadanie tak skoro po tom predošlom. Skúste to o chvíľu opäť.";
$lang['Search_member'] = "Hľadať používateľa";
$lang['Search_club'] = "Hľadať klub";
$lang['Close_window'] = "Zavrieť okno";
$lang['Comment'] = "Komentovať";

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Prepáčte, ale v tomto fóre môžete zverejniť iba %s oznamov.";
$lang['Sorry_auth_sticky'] = "Prepáčte, ale v tomto fóre môžete zverejniť iba %s pripnutých správ.";
$lang['Sorry_auth_read'] = "Prepáčte, ale iba %s môže čítať témy v tomto fóre.";
$lang['Sorry_auth_post'] = "Prepáčte, ale iba %s môže zverejňovať témy v tomto fóre.";
$lang['Sorry_auth_reply'] = "Prepáčte, ale iba %s môže odpovedať na príspevky v tomto fóre.";
$lang['Sorry_auth_edit'] = "Prepáčte, ale iba %s môže upravovať príspevky v tomto fóre.";
$lang['Sorry_auth_delete'] = "Prepáčte, ale iba %s môže mazať príspevky v tomto fóre.";
$lang['Sorry_auth_vote'] = "Prepáčte, ale iba %s sa môže zúčastniť hlasovaní v tomto fóre.";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>anonymných používateľov</b>";
$lang['Auth_Registered_Users'] = "<b>registrovaných používateľov</b>";
$lang['Auth_Users_granted_access'] = "<b>používateľov so špeciálnym prístupom</b>";
$lang['Auth_Moderators'] = "<b>moderátorov</b>";
$lang['Auth_Administrators'] = "<b>správcov</b>";
$lang['Not_Moderator'] = "Nie ste moderátorom tohto fóra.";
$lang['Not_Authorised'] = "Neoprávnený";
$lang['You_been_banned'] = "Tejto IP adrese alebo používateľovi bolo zamedzené používanie tohto systému.<br />Pre viac informácií, prosím, kontaktujte správcu webstránky alebo správcu nástenky.";
$lang['You_banned'] = "BEZPEČNOSTNÝ POPLACH - POKUS O REGISTRÁCIU ROBOTOM <br />Tejto IP adrese bola zamedzené používanie tohto systému."; // NTR

//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Nachádza sa tu 0 registrovaných používateľov a "; // There are 5 Registered and
$lang['Reg_users_online'] = "Nachádza sa tu %d registrovaných používateľov a "; // There are 5 Registered and
$lang['Reg_user_online'] = "Nachádza sa tu %d registrovaný používateľ a "; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = "0 skrytých používateľov online"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skrytých používateľov online"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d skrytý používateľ online"; // 6 Hidden users online
$lang['Guest_users_online'] = "Nachádza sa tu %d hostí"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Nachádza sa tu 0 hostí"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Nachádza sa tu %d hosť"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Aktuálne na tomto fóre nie sú žiadni používatelia.";
$lang['Online_explain'] = "Tieto údaje sú založené na počte aktívnych používateľov za posledných päť minút.";
$lang['Forum_Location'] = "Lokalita";
$lang['Last_updated'] = "Naposledy aktualizované";
$lang['Forum_index'] = "Register fóra";
$lang['Logging_on'] = "Prebieha prihlasovanie na";
$lang['Posting_message'] = "Zverejňuje sa správa";
$lang['Searching_forums'] = "Hľadá sa";
$lang['Viewing_profile'] = "Zobrazuje sa profil";
$lang['Viewing_location'] = "Zobrazuje sa lokalita";
$lang['Viewing_stats'] = "Zobrazujú sa štatistiky TM";
$lang['Viewing_clubdata'] = "Zobrazujú sa údaje o klube TM";
$lang['Viewing_speechdata'] = "Zobrazujú sa prejavy";
$lang['Viewing_CLdata'] = "Zobrazujú sa údaje o vodcovstve";
$lang['Viewing_CCdata'] = "Zobrazujú sa údaje o rečníctve";
$lang['Viewing_attendprint'] = "Tlačia sa menovky a odznaky";
$lang['Viewing_userstats'] = "Zobrazujú sa štatistiky o členoch";
$lang['Viewing_member_list'] = "Zobrazuje sa zoznam členov";
$lang['Viewing_priv_msgs'] = "Zobrazujú sa súkromné správy";
$lang['Viewing_FAQ'] = "Zobrazujú sa Časté otázky";
$lang['Viewing_group'] = "Ovládací panel skupiny";
$lang['Front_page'] = "Predná strana";
$lang['Mass_email'] = "Hromadný e-mail";
$lang['Viewing_officers'] = "Zobrazujú sa vedúci klubu";
$lang['Meeting_agenda'] = "Agenda stretnutia";
$lang['Meeting_list'] = "Zoznam stretnutí";
$lang['Meeting_audit'] = "Zobrazuje sa záznam priradení";
$lang['Viewing_calendar'] = "Zobrazuje sa kalendár";
$lang['Viewing_KB'] = "Zobrazuje sa Báza znalostí";
$lang['Viewing_directory'] = "Zobrazuje sa adresár";
$lang['Conf_agenda'] = "Agenda konferencie";
$lang['Conf_booking'] = "Rezervuje sa konferencia";
$lang['Viewing_candidates'] = "Kútik kandidátov";
$lang['Viewing_gallery'] = "Galéria portrétov";
$lang['Viewing_language'] = "Nástroj na preklad";
$lang['Viewing_objective'] = "Zobrazujú sa ciele prejavu";
$lang['Signup_page'] = "Prihlasuje sa na roly";
$lang['Requesting_speech'] = "Žiada sa o prejav";
$lang['Schedule_speech'] = "Plánujú sa prejavy";
$lang['Viewing_portal'] = "Zobrazuje sa portál";
$lang['Viewing_DCP'] = "Zobrazujú sa DCP";
$lang['Viewing_Goals'] = "Ciele členov";
$lang['Viewing_Charts'] = "Tabuľky členov";

//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Ovládací panel moderátora";
$lang['Mod_CP_explain'] = "Pomocou formulára nižšie môžete vykonať na tomto fóre operácie hromadného moderovania. Môžete zamknúť, odomknúť, presunúť alebo vymazať akékoľvek množstvo tém.";
$lang['Select'] = "Vybrať";
$lang['Move'] = "Presunúť";
$lang['Lock'] = "Zamknúť";
$lang['Unlock'] = "Odomknúť";
$lang['Topics_Removed'] = "Vybrané témy boli úspešne odstránené z databázy.";
$lang['Topics_Locked'] = "Vybrané témy boli uzamknuté.";
$lang['Topics_Moved'] = "Vybrané témy boli presunuté.";
$lang['Topics_Unlocked'] = "Vybrané témy boli odomknuté.";
$lang['No_Topics_Moved'] = "Neboli presunuté žiadne témy.";
$lang['Confirm_delete_topic'] = "Skutočne chcete odstrániť vybrané témy?";
$lang['Confirm_lock_topic'] = "Skutočne chcete zamknúť vybrané témy?";
$lang['Confirm_unlock_topic'] = "Skutočne chcete odomknúť vybrané témy?";
$lang['Confirm_move_topic'] = "Skutočne chcete presunúť vybrané témy?";
$lang['Move_to_forum'] = "Presunúť do fóra";
$lang['Leave_shadow_topic'] = "Ponechať v starom fóre tieňovú tému.";
$lang['Split_Topic'] = "Ovládací panel pre rozdelenie témy";
$lang['Split_Topic_explain'] = "Pomocou formulára nižšie môžete rozdeliť tému na dve. Buď tým, že vyberiete jednotlivé príspevky alebo tým, že ju rozdelíte na vybranom príspevku.";
$lang['Split_title'] = "Názov novej témy";
$lang['Split_forum'] = "Fórum pre novú tému";
$lang['Split_posts'] = "Rozdeliť vybrané príspevky";
$lang['Split_after'] = "Rozdeliť z vybraného príspevku";
$lang['Topic_split'] = "Vybraná téma bola úspešne rozdelená.";
$lang['Too_many_error'] = "Vybrali ste príliš veľa príspevkov. Môžete vybrať iba jeden príspevok, na základe ktorého sa téma rozdelí!";
$lang['None_selected'] = "Nevybrali ste žiadnu tému, na ktorej chcete vykonať túto operáciu. Choďte, prosím, späť a vyberte si aspoň jednu.";
$lang['New_forum'] = "Nové fórum";
$lang['This_posts_IP'] = "IP adresa tohto príspevku";
$lang['Other_IP_this_user'] = "Ďalšie IP adresy, z ktorých tento používateľ pridával príspevky";
$lang['Users_this_IP'] = "Používatelia pridávajúci príspevky z tejto IP adresy";
$lang['Users_logged_this_IP'] = "Používatelia, ktorí sa prihlásili z tejto IP adresy";
$lang['IP_info'] = "Informácie o IP adrese";
$lang['Lookup_IP'] = "Vyhľadať IP adresu";

//
// Timezones ... for display on each page
//
$lang['All_times'] = "Všetky systémové časy sú %s"; // eg. All times are GMT - 12 Hours (times from next block)
$lang['Club_times'] = "Časy stretnutí sa zobrazujú ako miestny čas";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "UTC - 12 hodín";
$lang['tz']['-11'] = "UTC - 11 hodín";
$lang['tz']['-10'] = "UTC - 10 hodín";
$lang['tz']['-9'] = "UTC - 9 hodín";
$lang['tz']['-8'] = "UTC - 8 hodín";
$lang['tz']['-7'] = "UTC - 7 hodín";
$lang['tz']['-6'] = "UTC - 6 hodín";
$lang['tz']['-5'] = "UTC - 5 hodín";
$lang['tz']['-4'] = "UTC - 4 hodiny";
$lang['tz']['-3.5'] = "UTC - 3,5 hodiny";
$lang['tz']['-3'] = "UTC - 3 hodiny";
$lang['tz']['-2'] = "UTC - 2 hodiny";
$lang['tz']['-1'] = "UTC - 1 hodina";
$lang['tz']['0'] = "UTC";
$lang['tz']['1'] = "UTC + 1 hodina";
$lang['tz']['2'] = "UTC + 2 hodiny";
$lang['tz']['3'] = "UTC + 3 hodiny";
$lang['tz']['3.5'] = "UTC + 3,5 hodiny";
$lang['tz']['4'] = "UTC + 4 hodiny";
$lang['tz']['4.5'] = "UTC + 4,5 hodiny";
$lang['tz']['5'] = "UTC + 5 hodín";
$lang['tz']['5.5'] = "UTC + 5,5 hodiny";
$lang['tz']['6'] = "UTC + 6 hodín";
$lang['tz']['6.5'] = "UTC + 6,5 hodiny";
$lang['tz']['7'] = "UTC + 7 hodín";
$lang['tz']['8'] = "UTC + 8 hodín";
$lang['tz']['9'] = "UTC + 9 hodín";
$lang['tz']['9.5'] = "UTC + 9,5 hodiny";
$lang['tz']['10'] = "UTC + 10 hodín";
$lang['tz']['11'] = "UTC + 11 hodín";
$lang['tz']['12'] = "UTC + 12 hodín";
// $lang['tz']['.0001'] = "UTC - Online meetings";

// Alpha representations of time
$lang['tza']['-12'] = "UTC - 12 hodín";
$lang['tza']['-11'] = "HST (UTC-11 hod.)";
$lang['tza']['-10'] = "UTC - 10 hodín";
$lang['tza']['-9'] = "UTC - 9 hodín";
$lang['tza']['-8'] = "PST (UTC-8 hod.)";
$lang['tza']['-7'] = "MST (UTC-7 hod.)";
$lang['tza']['-6'] = "CST (UTC-6 hod.)";
$lang['tza']['-5'] = "EST (UTC-5 hod.)";
$lang['tza']['-4'] = "UTC - 4 hodiny";
$lang['tza']['-3.5'] = "UTC - 3,5 hodiny";
$lang['tza']['-3'] = "UTC - 3 hodiny";
$lang['tza']['-2'] = "UTC - 2 hodiny";
$lang['tza']['-1'] = "UTC - 1 hodina";
$lang['tza']['0'] = "UTC";
// $lang['tza']['0.0001'] = "UTC - Online meetings";
$lang['tza']['1'] = "SEČ (UTC+1 hod.)";
$lang['tza']['2'] = "VEČ (UTC+2 hod.)";
$lang['tza']['3'] = "UTC + 3 hodiny";
$lang['tza']['3.5'] = "UTC + 3,5 hodiny";
$lang['tza']['4'] = "UTC + 4 hodiny";
$lang['tza']['4.5'] = "UTC + 4,5 hodiny";
$lang['tza']['5'] = "UTC + 5 hodín";
$lang['tza']['5.5'] = "UTC + 5,5 hodín";
$lang['tza']['6'] = "UTC + 6 hodín";
$lang['tza']['6.5'] = "UTC + 6,5 hodiny";
$lang['tza']['7'] = "UTC + 7 hodín";
$lang['tza']['8'] = "UTC + 8 hodín";
$lang['tza']['9'] = "UTC + 9 hodín";
$lang['tza']['9.5'] = "UTC + 9,5 hodiny";
$lang['tza']['10'] = "UTC + 10 hodín";
$lang['tza']['11'] = "UTC + 11 hodín";
$lang['tza']['12'] = "NZ (UTC+12 hod.)";

$lang['datetime']['Sunday'] = "nedeľa";
$lang['datetime']['Monday'] = "pondelok";
$lang['datetime']['Tuesday'] = "utorok";
$lang['datetime']['Wednesday'] = "streda";
$lang['datetime']['Thursday'] = "štvrtok";
$lang['datetime']['Friday'] = "piatok";
$lang['datetime']['Saturday'] = "sobota";

$lang['datetime']['Sun'] = "ned"; // Must be three characters
$lang['datetime']['Mon'] = "pon";
$lang['datetime']['Tue'] = "uto";
$lang['datetime']['Wed'] = "str";
$lang['datetime']['Thu'] = "štv";
$lang['datetime']['Fri'] = "pia";
$lang['datetime']['Sat'] = "sob";

$lang['datetime']['January'] = "január";
$lang['datetime']['February'] = "február";
$lang['datetime']['March'] = "marec";
$lang['datetime']['April'] = "apríl";
$lang['datetime']['May'] = "máj";
$lang['datetime']['June'] = "jún";
$lang['datetime']['July'] = "júl";
$lang['datetime']['August'] = "august";
$lang['datetime']['September'] = "september";
$lang['datetime']['October'] = "október";
$lang['datetime']['November'] = "november";
$lang['datetime']['December'] = "december";

$lang['datetime']['Jan'] = "jan"; // Must be three characters
$lang['datetime']['Feb'] = "feb";
$lang['datetime']['Mar'] = "mar";
$lang['datetime']['Apr'] = "apr";
$lang['datetime']['Jun'] = "jún";
$lang['datetime']['Jul'] = "júl";
$lang['datetime']['Aug'] = "aug";
$lang['datetime']['Sep'] = "sep";
$lang['datetime']['Oct'] = "okt";
$lang['datetime']['Nov'] = "nov";
$lang['datetime']['Dec'] = "dec";

$lang['datemonth']['01'] = "Január";
$lang['datemonth']['02'] = "Február";
$lang['datemonth']['03'] = "Marec";
$lang['datemonth']['04'] = "Apríl";
$lang['datemonth']['05'] = "Máj";
$lang['datemonth']['06'] = "Jún";
$lang['datemonth']['07'] = "Júl";
$lang['datemonth']['08'] = "August";
$lang['datemonth']['09'] = "September";
$lang['datemonth']['10'] = "Október";
$lang['datemonth']['11'] = "November";
$lang['datemonth']['12'] = "December";

$lang['interval'] = "dní";

$lang['Day']['0'] = " "; // NTR
$lang['Day']['1'] = "Pondelok";
$lang['Day']['2'] = "Utorok";
$lang['Day']['3'] = "Streda";
$lang['Day']['4'] = "Štvrtok";
$lang['Day']['5'] = "Piatok";
$lang['Day']['6'] = "Sobota";
$lang['Day']['7'] = "Nedeľa";
$lang['Select_one'] = "- Vyberte si -";

$lang['TimeofDay']['0'] = "ráno";
$lang['TimeofDay']['1'] = "poobede";
$lang['TimeofDay']['2'] = "večer";

//
// Photo Album Addon v2.x.x by Smartor
//
$lang['Album'] = "Fotoalbum";
$lang['Personal_Gallery_Of_User'] = "Osobná galéria používateľa %s";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informácia";
$lang['Critical_Information'] = "Kritická informácia";
$lang['General_Error'] = "Všeobecná chyba";
$lang['Critical_Error'] = "Kritická chyba";
$lang['An_error_occured'] = "Vyskytla sa chyba.";
$lang['A_critical_error'] = "Vyskytla sa kritická chyba.";
$lang['Admin_reauthenticate'] = "Aby ste mohli použiť ovládací panel, musíte sa znova prihlásiť.";
$lang['Dragons'] = "Tu sú draci!";
$lang['Access_explain'] = "Prístup do tejto zóny NIE JE potrebný pre ŽIADNU bežnú činnosť, akonáhle už váš klub beží v easy-Speaku.";
$lang['Dragons_explain'] = "Jediný dôvod, prečo by ste mohli chcieť vstúpiť do ovládacieho panelu, je, že za zmenila lokalita klubu, deň stretnutia, alebo potrebujete vytvoriť novú rolu na stretnutí či postavenie člena, ktoré predtým neexistovalo.<br /><br />
    Dobre zamýšľané, ale zle urobené zmeny môžu zruinovať použitie easy-Speaku vo vašom klube.";
$lang['Procede'] = "Nepokračujte, pokiaľ skutočne neviete, čo robíte.";
$lang['Yes_I_know'] = "Viem, čo robím";

// Add to search mod
$lang['Select_time'] = "Vyberte čas";
$lang['Or'] = "alebo";
$lang['15_min'] = "15 minút";
$lang['30_min'] = "30 minút";
$lang['45_min'] = "45 minút";
$lang['1_Hour'] = "1 hodina";
$lang['2_Hour'] = "2 hodiny";
$lang['6_Hour'] = "6 hodín";
$lang['12_Hour'] = "12 hodín";
$lang['Watched_Topics'] = "Sledované témy";
$lang['Watched_Topics_Started'] = "Téma založená";
$lang['Watched_Topics_Stop'] = "Prestať sledovať";
$lang['Check_All'] = "Označiť všetky";
$lang['UnCheck_All'] = "Odznačiť všetky";

//
// Email topic to friend
//
$lang['Email_topic'] = "Poslať tému priateľovi e-mailom";
$lang['Email_topic_settings'] = "Poslať informáciu o téme e-mailom";
$lang['Friend_name'] = "Meno priateľa";
$lang['Friend_email'] = "E-mail priateľa";
$lang['Email_max_exceeded'] = "Prepáčte, ale už ste poslali %d e-mailov za posledných %d hodín.";
$lang['No_friend_specified'] = "Musíte vyplniť správu, meno vášho priateľa a jeho e-mailovú adresu.";
$lang['Next_post'] = "Ďalej";
$lang['Prev_post'] = "Naspäť";
$lang['Email_overload'] = "Môžete zadať len jednu e-mailovú adresu.";
$lang['Email_agenda_settings'] = "Poslať e-mailom informácie o agende";

// Addded to mass email mod
$lang['group_allow_email'] = "Povolenia na hromadné posielanie e-mailov";
$lang['group_removed'] = "Boli ste odstránení zo skupiny ";
$lang['group_allow_email_explain'] = "Vyberte, aký typ používateľov bude mať práva posielať hromadné e-maily tejto skupine.";
$lang['Group_not_member'] = "Už viac nie ste členom skupiny %s.";
$lang['Club_not_member'] = "Už viac nie ste členom";
$lang['Club_never_member'] = "Nie ste členom";
$lang['Max_client_in_email'] = "Najväčší počet klientov, ktorým sa odošle hromadný e-mail";
$lang['Site_history'] = "História stránky";

// Added for extended user profile
$lang['Bus_phone'] = "Telefón počas dňa";
$lang['Phone'] = "Telefón počas večera";
$lang['Mobile'] = "Mobil";
$lang['Contact_Numbers'] = "Kontaktné čísla";
$lang['Bus_phone_short'] = "W";
$lang['Phone_short'] = "H";
$lang['Mobile_short'] = "M";
$lang['Phones'] = "Telefónne čísla";
$lang['Phone_format'] = "napr.: +421 123 456 789";
$lang['Fax'] = "Fax";
$lang['Name1'] = "Krstné meno";
$lang['Name2'] = "Priezvisko";
$lang['NameF'] = "Meno";
$lang['Hide_phone'] = "Telefónne čísla budú viditeľné pre";
$lang['Hide_photo'] = "Zobraziť fotku v mojom navigačnom paneli";
$lang['Hide_mobile'] = "Číslo mobilného telefónu bude viditeľné pre";
$lang['Address'] = "Adresa";
$lang['Hide_address'] = "Adresa bude viditeľná pre";
$lang['Hide_name'] = "Meno bude viditeľné pre";
$lang['Hidden'] = "Skryté";
$lang['Forgotten'] = "Zabudnutý používateľ";
$lang['Forgotten_explain'] = "Tento používateľ využil svoje právo byť zabudnutý a všetky údaje o ňom boli odstránené.";
$lang['Street_Address'] = "Ulica";
$lang['City'] = "Mesto";
$lang['State'] = "Okres/kraj";
$lang['Country_code'] = "Krajina";
$lang['Postcode'] = "Poštové smerovacie číslo";
$lang['Reset_password'] = "Obnoviť heslo";
$lang['Reg'] = "Registrácia";
$lang['Personal'] = "Osobné";
$lang['Communic'] = "Komunikácia";
$lang['Images'] = "Obrázky";
$lang['Attachments'] = "Prílohy";
$lang['Watching'] = "Sledované";
$lang['C_unknown'] = "Neznáma krajina";
$lang['C_code']['0'] = "Vybrať krajinu";
$lang['C_code']['355'] = "Albánsko";
$lang['C_code']['376'] = "Andorra";
$lang['C_code']['244'] = "Angola";
$lang['C_code']['1-264'] = "Anguilla";
$lang['C_code']['1-268'] = "Antigua a Barbuda";
$lang['C_code']['54'] = "Argentína";
$lang['C_code']['61'] = "Austrália";
$lang['C_code']['43'] = "Rakúsko";
$lang['C_code']['1-242'] = "Bahamy";
$lang['C_code']['973'] = "Bahrain";
$lang['C_code']['880'] = "Bangladéš";
$lang['C_code']['1-246'] = "Barbados";
$lang['C_code']['32'] = "Belgicko";
$lang['C_code']['1-441'] = "Bermudy";
$lang['C_code']['387'] = "Bosna a Hercegovina";
$lang['C_code']['267'] = "Botswana";
$lang['C_code']['55'] = "Brazília";
$lang['C_code']['246'] = "Britské indickooceánske územie";
$lang['C_code']['673'] = "Brunejsko-darussalamský štát";
$lang['C_code']['359'] = "Bulharsko";
$lang['C_code']['226'] = "Burkina Faso";
$lang['C_code']['237'] = "Kamerun";
$lang['C_code']['.1'] = "Kanada";
$lang['C_code']['1-345'] = "Kajmanie ostrovy";
$lang['C_code']['56'] = "Čile";
$lang['C_code']['86'] = "Čína";
$lang['C_code']['242'] = "Kongo";
$lang['C_code']['243'] = "Konžská demokratická republika";
$lang['C_code']['506'] = "Kostarika";
$lang['C_code']['225'] = "Pobrežie Slonoviny";
$lang['C_code']['385'] = "Chorvátsko";
$lang['C_code']['599'] = "Curaçao";
$lang['C_code']['357'] = "Cyprus";
$lang['C_code']['420'] = "Česká republika";
$lang['C_code']['45'] = "Dánsko";
$lang['C_code']['1-809'] = "Dominikánska republika";
$lang['C_code']['20'] = "Egypt";
$lang['C_code']['372'] = "Estónsko";
$lang['C_code']['358'] = "Fidži";
$lang['C_code']['679'] = "Fínsko";
$lang['C_code']['33'] = "Francúzsko";
$lang['C_code']['49'] = "Nemecko";
$lang['C_code']['233'] = "Ghana";
$lang['C_code']['350'] = "Gibraltár";
$lang['C_code']['30'] = "Grécko";
$lang['C_code']['299'] = "Grónsko";
$lang['C_code']['1-473'] = "Grenada";
$lang['C_code']['509'] = "Haiti";
$lang['C_code']['852'] = "Hongkong";
$lang['C_code']['36'] = "Maďarsko";
$lang['C_code']['354'] = "Island";
$lang['C_code']['91'] = "India";
$lang['C_code']['62'] = "Indonézia";
$lang['C_code']['98'] = "Irán";
$lang['C_code']['964'] = "Irak";
$lang['C_code']['353'] = "Írsko";
$lang['C_code']['972'] = "Izrael";
$lang['C_code']['39'] = "Taliansko";
$lang['C_code']['81'] = "Japonsko";
$lang['C_code']['.7'] = "Kazachstan";
$lang['C_code']['962'] = "Jordánsko";
$lang['C_code']['254'] = "Keňa";
$lang['C_code']['965'] = "Kuvajt";
$lang['C_code']['996'] = "Kirgizsko";
$lang['C_code']['371'] = "Lotyšsko";
$lang['C_code']['961'] = "Libanon";
$lang['C_code']['266'] = "Lesotho";
$lang['C_code']['370'] = "Litva";
$lang['C_code']['352'] = "Luxembursko";
$lang['C_code']['389'] = "Macedónsko";
$lang['C_code']['265'] = "Malawi";
$lang['C_code']['853'] = "Macao";
$lang['C_code']['60'] = "Malajzia";
$lang['C_code']['230'] = "Maurícius";
$lang['C_code']['356'] = "Malta";
$lang['C_code']['52'] = "Mexiko";
$lang['C_code']['691'] = "Mikronézia";
$lang['C_code']['377'] = "Monako";
$lang['C_code']['1-664'] = "Montserrat";
$lang['C_code']['212'] = "Maroko";
$lang['C_code']['258'] = "Mozambik";
$lang['C_code']['264'] = "Namíbia";
$lang['C_code']['31'] = "Holandsko";
$lang['C_code']['977'] = "Nepál";
$lang['C_code']['64'] = "Nový Zéland";
$lang['C_code']['505'] = "Nikaragua";
$lang['C_code']['227'] = "Niger";
$lang['C_code']['234'] = "Nigéria";
$lang['C_code']['47'] = "Nórsko";
$lang['C_code']['968'] = "Omán";
$lang['C_code']['92'] = "Pakistan";
$lang['C_code']['970'] = "Palestína";
$lang['C_code']['507'] = "Panama";
$lang['C_code']['675'] = "Papua-Nová Guinea";
$lang['C_code']['595'] = "Paraguaj";
$lang['C_code']['51'] = "Peru";
$lang['C_code']['63'] = "Filipíny";
$lang['C_code']['48'] = "Poľsko";
$lang['C_code']['351'] = "Portugalsko";
$lang['C_code']['1-787'] = "Portoriko";
$lang['C_code']['974'] = "Katar";
$lang['C_code']['40'] = "Rumunsko";
$lang['C_code']['7'] = "Ruská federácia";
$lang['C_code']['250'] = "Rwanda";
$lang['C_code']['378'] = "San Maríno";
$lang['C_code']['966'] = "Saudská Arábia";
$lang['C_code']['221'] = "Senegal";
$lang['C_code']['381'] = "Srbsko a Čierna Hora";
$lang['C_code']['248'] = "Seychely";
$lang['C_code']['232'] = "Sierra Leone";
$lang['C_code']['65'] = "Singapur";
$lang['C_code']['421'] = "Slovensko";
$lang['C_code']['386'] = "Slovinsko";
$lang['C_code']['27'] = "Južná Afrika";
$lang['C_code']['82'] = "Južná Kórea";
$lang['C_code']['34'] = "Španielsko";
$lang['C_code']['94'] = "Srí Lanka";
$lang['C_code']['1-758'] = "Svätá Lucia";
$lang['C_code']['268'] = "Eswatini";
$lang['C_code']['46'] = "Švédsko";
$lang['C_code']['41'] = "Švajčiarsko";
$lang['C_code']['886'] = "Taiwan";
$lang['C_code']['255'] = "Tanzánia";
$lang['C_code']['66'] = "Thajsko";
$lang['C_code']['216'] = "Tunisko";
$lang['C_code']['90'] = "Turecko";
$lang['C_code']['256'] = "Uganda";
$lang['C_code']['380'] = "Ukrajina";
$lang['C_code']['971'] = "Spojené arabské emiráty";
$lang['C_code']['44'] = "Spojené kráľovstvo";
$lang['C_code']['1'] = "Spojené štáty";
$lang['C_code']['598'] = "Uruguaj";
$lang['C_code']['58'] = "Venezuela";
$lang['C_code']['84'] = "Vietnam";
$lang['C_code']['967'] = "Jemen";
$lang['C_code']['260'] = "Zambia";
$lang['C_code']['263'] = "Zimbabwe";
$lang['Hidden_explain']['1'] = "Údaje označené ako 'Skryté' sú dostupné len pre členov klubu alebo vedúcich.";
$lang['Hidden_explain']['2'] = "Údaje označené ako 'Skryté' sú dostupné iba vedúcim klubu a dištriktu.";
$lang['Hidden_explain']['3'] = "<br>Údaje vyznačené kurzívou nie sú viditeľné pre verejnosť";
$lang['Warn_star'] = "<br><b><font color=#FF0000>*</font></b> Označiť, že má verejnosť v prípade problémov kontaktovať tento klub";
$lang['Officers'] = "- vedúci";
$lang['Members'] = "- členovia";
$lang['The_public'] = "Verejnosť";
$lang['Only'] = "";
$lang['And_neighbours'] = "a okolité kluby";
$lang['All_events'] = "Všetky podujatia";
$lang['Nothing_scheduled'] = "Neznáme";
$lang['Warn_contact'] = "UPOZORNENIE - Tento klub nemôže byť kontaktovaný %s členmi verejnosti.";
$lang['Warn_contact_e'] = "%s vedúcich klubu môžu kontaktovať potenciálni návštevníci.<br>%s vedúcich klubu má platné e-mailové adresy.<br>%s vedúcich klubu zverejnilo ich telefónne číslo.<br>%s vedúcich klubu zverejnilo ich meno.";
$lang['Easily'] = "jednoducho";
$lang['At_all'] = "VÔBEC";
$lang['Event'] = "Podujatie";
$lang['Event_Start'] = "Dátum začiatku";
$lang['Event_End'] = "Dátum konca";
$lang['Page_set'] = 'Nastavenie stránky';
$lang['Calendar_event_title'] = "Udalosť v kalendári";
$lang['View_calendar'] = "Kalendár";
$lang['View_previous_month'] = "Zobraziť predchádzajúci mesiac";
$lang['View_next_month'] = "Zobraziť nasledujúci mesiac";
$lang['View_previous_year'] = "Zobraziť predchádzajúci rok";
$lang['View_next_year'] = "Zobraziť nasledujúci rok";
$lang['Calendar_repeat'] = "Opakovať";
$lang['Calendar_start_monday'] = false; // NTR
$lang['Main_calendar_start_monday'] = true; // NTR
$lang['Date_selector'] = "Výber dátumu"; // title/header for Date Selector Window
$lang['Calendar_event_start'] = "Začína";
$lang['Calendar_event_club'] = "Názov klubu";
$lang['Calendar_event_theme'] = "Téma stretnutia";
$lang['Calendar_event_meeting'] = "Číslo stretnutia";
$lang['Calendar_event_venue'] = "Miesto";
$lang['Virtual_venue'] = "Stretnutie online";
$lang['Virtual_meeting'] = "Kliknite sem pre pripojenie sa na stretnutie";
$lang['Virtual_mmissing'] = "Identifikátor stretnutia nie je k dispozícii.";
$lang['Details'] = "Podrobnosti o";
$lang['Next_tm'] = "Najbližšie stretnutie";
$lang['Last_tm'] = "Posledné stretnutie";
$lang['Every'] = "Každý(-á)";
$lang['Inactive_event'] = "Kontaktujte správcu webovej stránky, aby povolil všetky typy stretnutí.";
$lang['GDPR_warn'] = "Upozornenie: %s používateľov na tejto obrazovke nepotvrdilo ich predvoľby súkromia a riskujú, že budú odstránení z easy-Speaku.";
$lang['Toastmasters'] = "Toastmasters";
$lang['Welcome'] = "Vitajte";
$lang['WelcomeB'] = "Vitajte späť";

// Who viewed this topic
$lang['Topic_view_users'] = "Zobraziť zoznam používateľov, ktorí si zobrazili túto tému";
$lang['Topic_view_agenda'] = "Zobraziť zoznam používateľov, ktorí si zobrazili toto stretnutie";
$lang['Topic_count'] = "Počet zobrazení";
$lang['Viewed_topic_list'] = "Používatelia, ktorí si zobrazili túto tému";
$lang['Viewed_agenda_list'] = "Používatelia, ktorí si zobrazili túto agendu";

// TM language needed in many areas
$lang['Select_club'] = "Vybrať klub";
$lang['Agenda_not_exist'] = "Stretnutie, o ktoré ste žiadali, neexistuje alebo nemá v agende nič, čo môžete priradiť.";
$lang['A_role'] = "rola";
$lang['A_roles'] = "Nasledujúce roly: ";
$lang['Not_a_club'] = "Nie je TM klub";
$lang['Not_a_Member'] = "Nie je člen";
$lang['All_users'] = "Všetci používatelia";
$lang['TM_club'] = "Klub Toastmasters";
$lang['Club'] = "Klub";
$lang['Member_of_clubs'] = "Prepojený s týmito klubmi Toastmasters";
$lang['TM_club_group_explain'] = "Pokiaľ je táto skupina klub Toastmasters, vyberte jeho meno.";
$lang['No_update_status'] = "Nie je možné aktualizovať postavenie používateľa tohto klubu.";
$lang['B_speech'] = "Požiadať o prejav";
$lang['Status'] = "Postavenie";
$lang['Meeting_details'] = "Podrobnosti o stretnutí";
$lang['Change'] = "Zmeniť";
$lang['Is_tm_forum'] = "Toto je diskusné fórum pre";
$lang['Print_s'] = "Vytlačiť";
$lang['Printable'] = "Na vytlačenie";
$lang['No_older_agenda'] = "Neexistuje skoršie stretnutie tohto typu.";
$lang['No_newer_agenda'] = "Nebolo vytvorené žiadne neskoršie stretnutie tohto typu.";
$lang['Click_new_meeting'] = "Kliknite %ssem pre vytvorenie nového stretnutia%s"; // %s's here are for uris, do not remove!
$lang['Notify_photo'] = "Posielať tomuto používateľovi oznámenia o nahraní nových obrázkov";
$lang['Not_scheduled'] = "Nenaplánované";
$lang['Date_not_known'] = "Dátum nie je známy";
$lang['Speeches_scheduled'] = "Prejavy: požiadaných %d, naplánovaných %d";
$lang['Meeting'] = "Stretnutie";
$lang['Not_attended'] = "Dal(a) na vedomie, že sa nezúčastní";
$lang['Not_attended_short'] = "Nezúčastní sa";
$lang['Losing_interest'] = "Stráca záujem?";
$lang['WOTD_title'] = "Slovo dňa";
$lang['Newsletters'] = "Newslettery";
$lang['Training_summary'] = "Školiace podujatia";
$lang['Contest_summary'] = "Súťažné podujatia";
$lang['Officer_history'] = "História vedúcich";

// TM Edit user data
$lang['No_auth'] = "Tohto používateľa nemôžete upraviť";
$lang['User_updated'] = "Používateľ bol aktualizovaný";

// TM club status
$lang['Club_stat'][CLUB_STATUS_ACTIVE] = "Aktívny";
$lang['Club_stat'][CLUB_STATUS_DEMO] = "Demo";
$lang['Club_stat'][CLUB_STATUS_PRACTICE] = "Cvičný";
$lang['Club_stat'][CLUB_STATUS_INACTIVE] = "Súhrn";
$lang['Club_stat'][CLUB_STATUS_DORMANT] = "Nečinný";
//$lang['Club_stat'][CLUB_STATUS_CL_ONLY] = "Iba CL";
$lang['Club_stat'][CLUB_STATUS_TEMPLATE] = "Šablóna";
$lang['Club_stat'][CLUB_STATUS_TEMPLATE_I] = "I Šablóna";
$lang['Refer_club'] = "<br />Pokiaľ chcete znovu spustiť tento klub,<br /> kontaktujte riaditeľa oblasti.";
$lang['ES_inactive_club'] = "Klub už viac nepoužíva tento systém.<br />Pokiaľ chcete obnoviť používanie easy-Speaku pre tento klub, kontaktujte, prosím, podporu.";
$lang['ES_activate_club'] = "Tento klub nepoužíva easy-Speak.<br />Pokiaľ chcete začať používať easy-Speak vo vašom klube, kontaktujte, prosím, podporu.";
$lang['Email_lock'] = "Dočasne sme vám obmedzili možnosť používať túto stránku, pretože e-mail, ktorý sme vám poslali, sa vrátil späť ako nedoručený.<br>E-mailovú adresu vo vašom profile sme označili ako neplatnú.<br />Prejdite, prosím, do vášho %sprofilu%s a aktualizujte vašu e-mailovú adresu.";
$lang['Edit_post_time'] = "Upraviť čas pridania príspevku";
$lang['Topic_time'] = "Čas pridania témy";
$lang['Post_time'] = "Čas pridania príspevku";
$lang['Post_time_successfull_edited'] = "<b>Aktualizácia času prebehla úspešne.</b></span><br /><span class='postdetails'>Toto okno sa zavrie za 3 sekundy.";
$lang['Hacking_attempt'] = "POKUS O HACKNUTIE"; // NTR
$lang['Login_attempts_exceeded'] = "BEZPEČNOSTNÝ POPLACH<br /><br />Bol prekročený najvyšší počet %s nesprávnych pokusov o prihlásenie. Nemôžete sa prihlásiť najbližších %s minút.";
$lang['Please_remove_install_contrib'] = "Uistite sa, že sú vymazané adresáre install/ a contrib/."; // NTR
$lang['Session_invalid'] = "Relácia je neplatná. Znovu odošlite tento formulár.";

// Anti-bot Guest Post Mod
$lang['Confirm_post'] = "Ľudský hosť?";
$lang['Confirm_post_explain'] = "Pred uložením vašej správy vyberte, prosím, 'Áno' ";
$lang['Confirm_post_error'] = "Ako opatrenie voči robotom, ktorí zverejňujú nevyžiadané správy, musia ľudskí hostia vybrať možnosť 'Áno' v časti 'Ľudský hosť'.";
$lang['upload_image'] = "Nahrať obrázok";

//
// IM Portal http://www.integramod.com
//
$lang['Maps'] = "Mapy";
$lang['Map'] = "Mapa";
$lang['Go_to'] = "Zobraziť";
$lang['Map_D_explain'] = "Zobraziť klikateľné mapy pre dištrikt";
$lang['Home'] = "Domov";
$lang['Find_club'] = "Nájsť klub - mapy";
$lang['Full_info'] = "Úplné informácie";
$lang['Conf_explain'] = "Informácie o konferencii %s";
$lang['About_TM_explain'] = "Zobraziť informácie o Toastmasters";
$lang['Find_explain'] = "Zobraziť Mapy Google s mnohými vychytávkami";
$lang['Conference_qa'] = "Otázky a odpovede ku konferencii";
$lang['View_help'] = "Zobraziť alebo pridať žiadosti";
$lang['Title_forum'] = "Novinky";
$lang['Comments'] = "Komentáre";
$lang['View_comments'] = "Zobraziť komentáre";
$lang['Post_your_comment'] = "Pridať komentár";
$lang['Read_Full'] = "Čítať celý článok";
$lang['All_art'] = "Naspäť";
$lang['Newest_pic'] = "Najnovší obrázok";
$lang['No_recent_pic'] = "Žiadne nedávne obrázky klubu";
$lang['Title_online_users'] = "Používatelia online";
$lang['View_complete_list'] = "Zobraziť úplný zoznam";
$lang['Title_poll'] = "Hlasovanie";
$lang['Poll'] = "Hlasovanie";
$lang['Vote'] = "Hlasovať";
$lang['No_poll'] = "V tejto chvíli neprebieha žiadne hlasovanie.";
$lang['Title_search'] = "Hľadanie";
$lang['Advanced_search'] = "Rozšírené hľadanie";
$lang['Title_statistics'] = "Štatistiky";
$lang['total_topics'] = " v rámci <b>%s</b> tém";
$lang['Title_user_block'] = "Blokovanie používateľa";
$lang['Register_new_account'] = "Ešte nemáte účet?<br />Môžete sa ZADARMO %szaregistrovať%s.";
$lang['Remember_me'] = "Zapamätať si ma";
$lang['Next_meetings'] = "Nadchádzajúce stretnutia";
$lang['Next_contest'] = "Súťaže";
$lang['Next_training'] = "Školenia vedúcich";
$lang['Next_exec'] = "Stretnutia vedúcich";
$lang['Next_council'] = "Stretnutia rady";
$lang['Next_exec_c'] = "Výkonná rada";
$lang['Next_help'] = "Kliknite na dátum, aby ste videli podrobnosti.";
$lang['Other_events'] = "Ďalšie podujatia";
$lang['Your_clubs'] = "Odkazy";
$lang['Select_district'] = "Vyberte dištrikt";
$lang['Site_map_including'] = "Mapa stránky a kluby"; // Must be short - ideally < 19 char
$lang['By'] = "podľa";

//Gmap
$lang['G_map_explain'] = "Presuňte myš nad ikonu, aby ste videli informácie, alebo kliknite na ikonu, aby ste videli všetky podrobnosti o klube.";
$lang['G_map_nav'] = "Môžete sa pohybovať tým, že uchopíte mapu myšou alebo kliknete na šípky.<br />Aby ste mapu <font color=#FF0000><b>priblížili alebo oddialili</b></font>, kliknite na + a -.<br />Dvojitým kliknutím vycentrujete mapu okolo bodu.";
$lang['Click_club_search'] = "Kliknite %ssem pre hľadanie klubu podľa názvu alebo adresy%s.";
$lang['Print_m'] = "Vytlačiť mapu";
$lang['Alt_div_map'] = "Kliknite %ssem na zobrazenie mapy divízie a štruktúru oblasti%s.";
$lang['POI_explain'] = "Stiahnuť lokality klubu pre GPS tohto ";
$lang['POI_tomtom'] = "Stiahnuť TomTom súbor";
$lang['POI_garmin'] = "Stiahnuť Garmin súbor";
$lang['POI_satnav_guide'] = "Inštrukcie na používanie";

// End Display Searchbot mod

// Change Poster
$lang['Change_poster'] = "Zmeniť autora príspevku";
$lang['Post_updated'] = "Príspevok bol úspešne aktualizovaný.";
$lang['Select_new_user'] = "Vybrať nového používateľa pre túto položku";
$lang['Move_all'] = "Zaškrtnite toto políčko, aby ste zmenili <em><b>všetky</b></em> príspevky používateľa <b>%s</b> na nového používateľa (**POZOR!! Túto akciu nie je možné vrátiť späť - používajte ju na vlastné riziko**).";
$lang['Moved_posts'] = "%d príspevkov presunutých z používateľa <b>%s</b> na používateľa <b>%s</b>.";
$lang['Move_posts_confirm'] = "Skutočne chcete presunúť všetky príspevky z používateľa <b>%s</b> na používateľa <b>%s</b>?";
$lang['Sitemap'] = "Mapa stránky";
$lang['Language'] = "Jazyk";
$lang['Translation'] = "Preklad";
$lang['BBCode_box_hidden'] = "Skryté";
$lang['BBcode_box_view'] = "Kliknutím zobrazíte obsah";
$lang['BBcode_box_hide'] = "Kliknutím schováte obsah";

// UploadPic
$lang['UploadPic'] = "Nahrať obrázok";
$lang['UP_Back'] = "Naspäť";
$lang['UP_BBCode'] = "BBCode";
$lang['UP_CloseWindow'] = "Zrušiť";
$lang['UP_Converted'] = "U väčších obrázkov sa zmení veľkosť.";
$lang['UP_CopyCode'] = "Štandardné";
$lang['UP_CopyCodeLeft'] = "Doľava";
$lang['UP_CopyCodeRight'] = "Doprava";
$lang['UP_CopyText'] = "Vložiť obrázok";
$lang['UP_CopyURL'] = "Vložiť ako odkaz";
$lang['UP_Custom'] = "Vlastná veľkosť";
$lang['UP_Datatypes'] = "Dátové typy";
$lang['UP_Dimensions'] = "Rozmery";
$lang['UP_ErrCreateGIF'] = "Obrázok je príliš veľký.<br />GIF obrázok nesmie mať rozmery väčšie ako %dx%d pixelov.";
$lang['UP_ErrCreatePic'] = "Nie je možné vytvoriť obrázok.<br />Skúste nahrať menší obrázok.";
$lang['UP_ErrDatatype'] = "Dátový typ <strong>%s</strong> nie je podporovaný.";
$lang['UP_ErrFilesize'] = "Veľkosť súboru prekračuje limit.";
$lang['UP_ErrGDLib'] = "GD knižnica nie je k dispozícii."; // NTR
$lang['UP_ErrImgDir'] = "Adresár pre obrázky neexistuje."; // NTR
$lang['UP_ErrLogin'] = "Prihláste sa, prosím.";
$lang['UP_ErrMinposts'] = "Musíte napísať aspoň %d príspevkov, aby ste mohli nahrávať obrázky.";
$lang['UP_ErrNoGallery'] = "Galéria nie je aktivovaná.";
$lang['UP_ErrPermission'] = "Nemáte povolenie nahrávať.";
$lang['UP_ErrUpload'] = "Obrázok nie je možné nahrať.";
$lang['UP_ErrWritable'] = "Adresár pre obrázky nie je zapisovateľný."; // NTR
$lang['UP_Files'] = "Súbory";
$lang['UP_Gallery'] = "Galéria";
$lang['UP_Help'] = "Nahrať obrázok a vložiť ho do správy.";
$lang['UP_Maximum'] = "max.";
$lang['UP_Multiple'] = "Vložiť obrázok a nahrať ďalší";
$lang['UP_Note'] = "Poznámka";
$lang['UP_PFile'] = "Súbor s obrázkom";
$lang['UP_Pixel'] = "pixel"; // NTR
$lang['UP_Resized'] = "zmenená veľkosť";
$lang['UP_Rotate'] = "Otočenie (doprava)";
$lang['UP_Rotate0'] = "Žiadne"; // NTR
$lang['UP_Rotate180'] = "180&deg;"; // NTR
$lang['UP_Rotate270'] = "270&deg;"; // NTR
$lang['UP_Rotate90'] = "90&deg;"; // NTR
$lang['UP_send'] = "Odoslať";
$lang['UP_Title'] = "Nahrať obrázok";
$lang['UP_YourPics'] = "Vaše nahrané súbory";
$lang['UP_Information'] = ""; // NTR

//
// RSS
//
$lang['rss_forum'] = "RSS zdroj fóra";
$lang['rss_topic'] = "RSS zdroj témy";
$lang['rss_latest'] = "RSS zdroj s najnovšími témami";
$lang['rss_portal'] = "RSS zdroj portálu";
$lang['rss_kb'] = "RSS zdroj Bázy znalostí";

// Timeshift meetings
$lang['TZ_shift'] = 'Posunúť časy stretnutí';
$lang['TZ_help'] = 'Vyberte dátum začiatku a konca stretnutí, kde chcete zmeniť časy, a potom vyberte, o koľko hodín ich chcete posunúť <br>(+ na neskôr, - na skôr).';
$lang['TZ_start'] = 'Prvý dátum na posunutie';
$lang['TZ_end'] = 'Posledný dátum na posunutie';
$lang['TZ_hours'] = 'Presunúť o toľko hodín';

// End of language
// That's all, Folks!

?>