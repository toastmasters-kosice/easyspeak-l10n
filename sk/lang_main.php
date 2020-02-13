<?php
/***************************************************************************
 *                            lang_main.php [Slovak]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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

//
// CONTRIBUTORS:
//         Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
// 2020-02-13  Vladimir Zahradnik     - Slovak localization

//
// The format of this file is ---> $lang['message'] = "text";
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//
$lang['ENCODING'] = "utf-8";     //NTR

$lang['lang_code'] = "18";      //Enter the language code from constants file (used to lookup fixed text)

$lang['junk']  = "JunkZ";
$lang['junk2']  = "JunkCCC";
//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Fórum";
$lang['Category'] = "Kategória";
$lang['Topic'] = "Téma";
$lang['Topics'] = "Témy";
$lang['Replies'] = "Odpovede";
$lang['Views'] = "Zobrazenia";
$lang['Post'] = "Príspevok";
$lang['Posts'] = "Príspevky";
$lang['Times'] = "Časy";
$lang['Posted'] = "Zverejnené";
$lang['Username'] = "Používateľské meno";
$lang['Password'] = "Heslo";
$lang['Email'] = "E-mail";
$lang['Mail'] = "Pošta";
$lang['Poster'] = "Postujúci";
$lang['Author'] = "Autor";
$lang['Time'] = "Čas";
$lang['Hours'] = "Hodiny";
$lang['Hour'] = "Hodina";
$lang['Minutes'] = "Minúty";
$lang['Message'] = "Správa";
$lang['Return'] = "Naspäť";
$lang['Display'] = "Zobraziť";
$lang['Club_user_mode'] = "Pohľad člena klubu";
$lang['Club_officer_mode'] = "Pohľad vedúceho";

$lang['1_Day'] = "1 dňa";
$lang['7_Days'] = "7 dní";
$lang['2_Weeks'] = "2 týždňov";
$lang['1_Month'] = "1 mesiaca";
$lang['3_Months'] = "3 mesiacov";
$lang['6_Months'] = "6 mesiacov";
$lang['1_Year'] = "1 roka";

$lang['Go'] = "Prejsť";
$lang['And'] = "a";
$lang['OR'] = "ALEBO";
$lang['Jump_to'] = "Preskočiť na";
$lang['Submit'] = "Odoslať";
$lang['Reset'] = "Obnoviť";
$lang['Cancel'] = "Zrušiť";
$lang['OK'] = "OK";
$lang['Preview'] = "Ukážka";
$lang['Confirm'] = "Potvrdiť";
$lang['Spellcheck'] = "Kontrola pravopisu";
$lang['Yes'] = "Áno";
$lang['No'] = "Nie";
$lang['Never'] = "Nikdy";
$lang['Y'] = "A";           //Short form
$lang['N'] = "N";
$lang['D'] = "D";           // for 'detail'
$lang['Enabled'] = "Povolené";
$lang['Disabled'] = "Zakázané";
$lang['Error'] = "Chyba";
$lang['Edit'] = "Upraviť";
$lang['Insert'] = "Vložiť";
$lang['Insert_above'] = "Vložiť nad";
$lang['Delete'] = "Vymazať";
$lang['Action'] = "Akcia";
$lang['Move_up'] = "Presunúť nahor";
$lang['Move_down'] = "Presunúť nadol";
$lang['Top'] = "Úplne hore";
$lang['Bottom'] = "Úplne dole";
$lang['Anonymous'] = "Anonym";
$lang['Please_wait'] = "Čakajte, prosím...";

$lang['Next'] = "Ďalej";
$lang['Back'] = "Naspäť";
$lang['Previous'] = "Predchádzajúci";
$lang['Goto_page'] = "Prejsť na stránku";
$lang['Joined'] = "Pripojený dňa";
$lang['IP_Address'] = "IP adresa";
$lang['at'] = "o";
$lang['Hosted'] = "Moderovaný";

$lang['Select_forum'] = "Vybrať oblasť";
$lang['View_latest_post'] = "Zobraziť posledný príspevok";
$lang['View_newest_post'] = "Zobraziť najnovší príspevok";
$lang['Page_of'] = "Strana <b>%d</b> z <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "Číslo ICQ";
$lang['AIM'] = "Adresa AIM";
$lang['MSNM'] = "MSN Messenger";
$lang['GTALK'] = "Google Talk";
$lang['YIM'] = "Yahoo Messenger";
$lang['SKYPE'] = "Účet Skype";
$lang['Aboutme_id'] = "Používateľské meno about.me";
$lang['LinkedIn'] = "LinkedIn profil";
$lang['Facebook'] = "Facebook profil";
$lang['Twitter'] = "Twitter účet";
$lang['Youtube'] = "YouTube účet";
$lang['Gplus'] = "Google+ účet";
$lang['Meetup'] = "Meetup účet";
$lang['Aboutme'] = "about.me profil";
$lang['LinkedIn_explain'] = "Zadajte úplnú URL adresu vášho LinkedIn profilu>Zobraziť profil. Napr. - <br>www.linkedin.com/profile/view?id=12345&...";
$lang['Facebook_explain'] = "Zadajte úplnú URL adresu vášho Facebook profilu. BUĎ: <br>www.facebook.com/profile.php?id=1234567890<br>ALEBO: <br>www.facebook.com/vaše.meno";
$lang['Forum_Index'] = "Register diskusií %s";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Založiť novú tému";
$lang['Post_new_event'] = "Vytvoriť nové podujatie";
$lang['Reply_to_topic'] = "Odpovedať na tému";
$lang['Reply_with_quote'] = "Odpovedať citátom";

$lang['Click_return_topic'] = "Kliknite %ssem pre návrat do témy%s"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Kliknite %ssem pre ďalší pokus%s";
$lang['Click_return_forum'] = "Kliknite %ssem pre návrat do fóra%s";
$lang['Click_view_message'] = "Kliknite %ssem pre zobrazenie vašej správy%s";
$lang['Click_view_event'] = "Kliknite %ssem pre zobrazenie vášho podujatia%s";
$lang['Click_add_event'] = "Kliknite %ssem pre pridanie ďalšieho podujatia%s";
$lang['Click_return_modcp'] = "Kliknite %ssem pre návrat do Ovládacieho panelu moderátora%s";
$lang['Click_return_group'] = "Kliknite %ssem pre návrat k informáciám o skupine%s";
$lang['Click_return_calendar'] = "Kliknite %ssem pre návrat do kalendára%s";
$lang['Click_return_memberlist'] = "Kliknite %ssem pre návrat na zoznam používateľov%s";
$lang['Click_review_group'] = "Kliknite %ssem pre preskúmanie vašich zostávajúcich skupinových členstiev%s";
$lang['Click_return_home'] = "Kliknite %ssem pre návrat na domovskú stránku%s";
$lang['Click_return_last'] = "Kliknite %ssem, aby ste sa dostali na posledné stretnutie%s";
$lang['Click_return_next'] = "Kliknite %ssem, aby ste sa dostali na nasledujúce stretnutie%s";
$lang['Click_return_club'] = "Kliknite %ssem, aby ste sa vrátili k podrobnostiam o klube%s";
$lang['Click_return_agenda'] = "Kliknite %ssem, aby ste sa vrátili k agende%s";
$lang['Click_return_a_speech'] = "Kliknite %ssem, aby ste sa vrátili k prideleniu prejavov%s";
$lang['Click_return_e_agenda'] = "Kliknite %ssem, aby ste sa vrátili k úprave agendy%s";
$lang['Click_return_booking'] = "Kliknite %ssem, aby ste vrátili k rezervačnému formuláru%s";
$lang['Click_return_assignment'] = "Kliknite %ssem, aby ste sa vrátili na obrazovku s priradzovaním rolí%s";
$lang['Click_next_assignment'] = "Kliknite %ssem, aby ste sa dostali na obrazovku s priradzovaním rolí pre NASLEDUJÚCE stretnutie%s";
$lang['Click_return_actual'] = "Kliknite %ssem, aby ste dokončili zadávanie skutočných hodnôt%s";
$lang['Click_return_welcome'] = "Kliknite %ssem, aby ste sa vrátili na domovskú stránku%s";
$lang['Click_return_album'] = "Kliknite %ssem, aby ste sa vrátili do fotoalbumu%s";
$lang['Click_return_clubadmin'] = "Kliknite %ssem, aby ste sa dostali do Správy klubu%s";
$lang['Click_return_clubregister'] = "Kliknite %ssem, aby ste sa dostali k Registrácii klubu%s";
$lang['Click_return_link_manager'] = "Kliknite %ssem, aby ste sa vrátili do Správy odkazov%s";
$lang['Click_return_loc_manager'] = "Kliknite %ssem, aby ste sa vrátili do Správy lokality%s";
$lang['Click_return_role_manager'] = "Kliknite %ssem, aby ste sa vrátili do Správy rolí%s";
$lang['Click_return_email'] = "Kliknite %ssem, aby ste sa vrátili na stránku pre hromadný e-mail%s";
$lang['Click_return_a_email'] = "Kliknite %ssem, aby ste sa vrátili na e-mailovú obrazovku agendy%s";
$lang['Click_return_status_manager'] = "Kliknite %ssem, aby ste sa vrátili do Správy statusov%s";
$lang['Click_return_inbox'] = "Kliknite %ssem, aby ste sa vrátili do vašej schránky%s";
$lang['Click_return_index'] = "Kliknite %ssem, aby ste sa vrátili na Register fóra%s";
$lang['Click_return_orgdata'] = "Kliknite %ssem, aby ste sa vrátili na obrazovku dištriktu alebo divízie%s";
$lang['Click_return_kb'] = "Kliknite %ssem, aby ste sa vrátili do Bázy znalostí%s";
$lang['Click_return_post'] = "Kliknite %ssem, aby ste sa vrátili do príspevku%s";
$lang['Click_go_profile'] = "Kliknite %ssem pre úpravu vášho profilu%s";
$lang['Click_return_event'] = "Kliknite %ssem, aby ste sa vrátili do podujatia%s";
$lang['Click_return_gmaps'] = "Kliknite %ssem, aby ste sa vrátili do správy Google máp%s";
$lang['Click_return_candidates'] = "Kliknite %ssem, aby ste sa vrátili k profilom kandidátov%s";
$lang['Click_return_conference'] = "Kliknite %ssem, aby ste sa vrátili na stránky konferencií%s";

$lang['Click_ti_login'] = "Nezabudnite si aktualizovať vaše osobné údaje aj u Toastmasters International<br> Kliknite %ssem, aby ste sa prihlásili na webovej stránke TI%s";
$lang['TI_login'] = "Prihlásiť sa na webovej stránke TI";
$lang['TI_officer_manuals'] = "Prevziať príručky pre vedúcich klubov";

$lang['Admin_panel'] = "Prejsť do Panelu pre správu";
$lang['Club_admin_panel'] = "Ovládací panel klubu";

$lang['Board_disable'] = "Prepáčte, ale táto stránka je v tejto chvíli uzavretá kvôli údržbe.  Skúste to, prosím, neskôr.";
$lang['Redirected_club'] = "PRESMEROVANÝ<br /><br />Tento klub bol teraz presunutý<br /><br />Upravte si vaše záložky, aby odkazovali na túto novú URL adresu<br /><br />";

//
// Global Header strings
//
$lang['Registered_users'] = "Registrovaní používatelia:";
$lang['Browsing_forum'] = "Používatelia prezerajúci si toto fórum:";
$lang['Online_users_zero_total'] = "Celkovo  <b>0</b> používateľov online: ";
$lang['Online_users_total'] = "Celkovo  <b>%d</b> používateľov online: ";
$lang['Online_user_total'] = "Celkovo <b>%d</b> používateľov online: ";
$lang['Reg_users_zero_total'] = "0 registrovaných, ";
$lang['Reg_users_total'] = "%d registrovaných, ";
$lang['Reg_user_total'] = "%d registrovaných, ";
$lang['Hidden_users_zero_total'] = "0 skrytých a ";
$lang['Hidden_user_total'] = "%d skrytých a ";
$lang['Hidden_users_total'] = "%d skrytých a ";
$lang['Guest_users_zero_total'] = "0 hostí";
$lang['Guest_users_total'] = "%d hostí";
$lang['Guest_user_total'] = "%d hosť";
$lang['Record_online_users'] = "Najviac v histórii bolo online <b>%s</b> používateľov dňa %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sSprávca%s";
$lang['Mod_online_color'] = "%Moderátor%s";

$lang['You_last_visit'] = "Vaša posledná návšteva bola %s"; // %s replaced by date/time
$lang['Current_time'] = "Aktuálny čas je %s"; // %s replaced by time

$lang['Search_new'] = "Zobraziť príspevky od poslednej návštevy";
$lang['Search_your_posts'] = "Zobraziť moje príspevky";
$lang['Search_unanswered'] = "Zobraziť nezodpovedané príspevky";

$lang['Register'] = "Registrovať sa";
$lang['Register_new'] = "Registrovať sa ako nový používateľ";
$lang['Forgot_username'] = "Zabudli ste vaše používateľské meno? - %sKliknite sem, ak chcete hľadať vaše meno%s";
$lang['Profile'] = "Profil";
$lang['Edit_profile'] = "Upraviť môj profil";
$lang['Edit_other'] = "Upraviť profil používateľa";
$lang['Search'] = "Hľadať";
$lang['Search_w'] = "Hľadať slovo";
$lang['Search_u'] = "Hľadať používateľa";
$lang['Search_c'] = "Hľadať klub";
$lang['Search_f'] = "Hľadať v diskusných fórach";
$lang['Search_k'] = "Hľadať v báze znalostí";
$lang['Memberlist'] = "Zoznam používateľov";
$lang['Annual_review'] = "Preskúmanie výročného stretnutia";
$lang['Officerlist'] = "Zoznam vedúcich";
$lang['FAQ'] = "Časté otázky";
$lang['News'] = "Novinky";

$lang['KB_title'] = "Báza znalostí";
$lang['KB_map'] = "Mapa znalostí";
$lang['Yahoogroups'] = "Yahoo! skupiny";
$lang['TIinfo'] = "Informácie o TI";
$lang['TIstats'] = "Štatistiky dištriktov";
$lang['DCPstats'] = "Analýza DCP bodov";
$lang['Neighbouring'] = "Okolité kluby";
$lang['Basecamp'] = "Základný tábor Pathways";

$lang['BBCode_guide'] = "Príručka BBCode";
$lang['Usergroups'] = "Používateľské skupiny";
$lang['Last_Post'] = "Posledný príspevok";
$lang['Moderator'] = "Moderátor";
$lang['Moderators'] = "Moderátori";

//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "Naši používatelia zverejnili celkovo <b>0</b> článkov"; // Number of posts
$lang['Posted_articles_total'] = "Naši používatelia zverejnili celkovo <b>%d</b> článkov"; // Number of posts
$lang['Posted_article_total'] = "Naši používatelia zverejnili celkovo <b>%d</b> článok"; // Number of posts
$lang['Registered_users_zero_total'] = "Máme <b>0</b> registrovaných používateľov"; // # registered users
$lang['Registered_users_total'] = "Máme <b>%d</b> registrovaných používateľov"; // # registered users
$lang['Registered_user_total'] = "Máme <b>%d</b> registrovaného používateľa"; // # registered users
$lang['Newest_user'] = "Naposledy registrovaný používateľ je <b>%s%s%s</b>"; // a href, username, /a
$lang['Newest_club_user'] = "Najnovší používateľ v tomto klube je <b>%s%s%s</b>"; // a href, username, /a
$lang['Newest_club'] = "Najnovší aktívny klub je <b>%s%s%s</b>"; // a href, clubname, /a
$lang['Live_clubs'] = "V systéme máme <b>%d</b> aktívnych klubov Toastmasters";
$lang['Number_clubs'] = "Aktívne kluby Toastmasters";
$lang['Number_tm_users'] = "Kombinácie používateľov/klubov TM";
$lang['Number_tm_speeches'] = "Celkový počet prejavov";
$lang['Number_club_speeches'] = "Počet prejavov (club_id = %s)";
$lang['Average_tm_users'] = "Priemerný počet používateľov na klub";
$lang['Managed_meetings'] = "Organizujeme <b>%d</b> stretnutí Toastmasters";
$lang['Managed_speeches'] = "Máme podrobnosti o <b>%d</b> prejavoch Toastmasters";
$lang['Number_meetings'] = "Organizované stretnutia Toastmasters";

$lang['No_new_posts'] = "Žiadne nové príspevky";
$lang['New_posts'] = "Nové príspevky";
$lang['New_post'] = "Nový príspevok";
$lang['No_new_posts_hot'] = "Žiadne nové príspevky [ populárne ]";
$lang['New_posts_hot'] = "Nové príspevky [ populárne ]";
$lang['No_new_posts_locked'] = "Žiadne nové príspevky [ uzamknuté ]";
$lang['New_posts_locked'] = "Nové príspevky [ uzamknuté ]";
$lang['Forum_is_locked'] = "Fórum je uzamknuté";

//
// Login
//
$lang['Enter_password'] = "Aby ste sa prihlásili, zadajte vaše používateľské meno a heslo.";
$lang['Change_password_title'] = "Na zmenu vášho hesla použite nižšie zobrazený formulár.";

$lang['Login'] = "Prihlásiť sa";
$lang['Logout'] = "Odhlásiť sa";
$lang['Change_password'] = "Zmeniť heslo";

$lang['Forgotten_password'] = "Zabudol som svoje heslo";

$lang['Log_me_in'] = "Automaticky ma prihlásiť pri každej návšteve";

$lang['Error_login'] = "Zadali ste nesprávne alebo neaktívne používateľské meno alebo neplatné heslo.";
$lang['login_warn'] = "Z IP adresy, ktorá sa líši od tej zaznamenanej pri vašom poslednom platnom prihlásení, ste mali %s neúspešných pokusov o prihlásenie.<br>Ďalším neplatným prihlásením dôjde k zablokovaniu IP adresy %s a zabráni sa tak AKÉMUKOĽVEK ďalšiemu prístupu k systému.<br><br>Pre obnovu hesla použite postup 'Zabudol som heslo'.";

//
// Index page
//
$lang['No_Posts'] = "Žiadne príspevky";
$lang['No_forums'] = "Táto nástenka nemá žiadne fóra.";

$lang['Private_Message'] = "Súkromná správa";
$lang['Private_Messages'] = "Súkromné správy";
$lang['Messages'] = "Správy";
$lang['Who_is_Online'] = "Kto je online";
$lang['Prv_Msg'] = "Súkr. spr.";

$lang['Mark_all_forums'] = "Označiť všetky fóra ako prečítané";
$lang['Forums_marked_read'] = "Všetky fóra boli označené ako prečítané";

//
// Viewforum
//
$lang['View_forum'] = "Zobraziť fórum";

$lang['Forum_not_exist'] = "Fórum, ktoré ste vybrali, neexistuje.";
$lang['Reached_on_error'] = "Ná túto stránku ste sa dostali kvôli chybe.";

$lang['Display_topics'] = "Zobraziť témy z prechádzajúceho";
$lang['All_Topics'] = "Všetky témy";

// Language based descriptions of topic types entered here OVERRIDE the descriptions in the table
$lang['Topic_type']['0'] = "";                     //NTR Normal posting
$lang['Topic_type']['1'] = "Pripnuté";
$lang['Topic_type']['2'] = "Oznamy";
$lang['Topic_type']['3'] = "Novinky";
$lang['Topic_type']['4'] = "Vitajte";
$lang['Topic_type']['5'] = "[zaparkované]";

$lang['Topic_Moved'] = "Presunuté";
$lang['Topic_Poll'] = "[ hlasovanie ]";

$lang['Mark_all_topics'] = "Označiť všetky témy ako prečítané";
$lang['Topics_marked_read'] = "Témy v tomto fóre boli označené ako prečítané.";

$lang['Rules_event_can'] = "<b>Môžete</b> vytvárať nové podujatia pre tento klub.";
$lang['Rules_post_can'] = "<b>Môžete</b> vytvárať nové témy v tomto fóre.";
$lang['Rules_post_cannot'] = "<b>Nemôžete</b> vytvárať nové témy v tomto fóre.";
$lang['Rules_reply_can'] = "<b>Môžete</b> odpovedať na témy v tomto fóre.";
$lang['Rules_reply_cannot'] = "<b>Nemôžete</b> odpovedať na témy v tomto fóre.";
$lang['Rules_edit_can'] = "<b>Môžete</b> upravovať vaše príspevky v tomto fóre.";
$lang['Rules_edit_cannot'] = "<b>Nemôžete</b> upravovať vaše príspevky v tomto fóre.";
$lang['Rules_delete_can'] = "<b>Môžete</b> mazať vaše príspevky v tomto fóre.";
$lang['Rules_delete_cannot'] = "<b>Nemôžete</b> mazať vaše príspevky v tomto fóre.";
$lang['Rules_vote_can'] = "<b>Môžete</b> sa zúčastňovať hlasovaní v tomto fóre.";
$lang['Rules_vote_cannot'] = "<b>Nemôžete</b> sa zúčastňovať hlasovaní v tomto fóre.";
$lang['Rules_moderate'] = "<b>Môžete</b> %smoderovať toto fórum%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "V tomto fóre nie sú žiadne príspevky.<br />Kliknite na tejto stránke na odkaz <b>Založiť novú tému</b> a pridajte nejaký.";

//
// Viewtopic
//
$lang['View_topic'] = "Zobraziť tému";

$lang['Guest'] = "Hosť";
$lang['Post_subject'] = "Predmet príspevku";
$lang['View_next_topic'] = "Zobraziť nasledujúcu tému";
$lang['View_previous_topic'] = "Zobraziť predchádzajúcu tému";
$lang['Submit_vote'] = "Odoslať hlas";
$lang['View_results'] = "Zobraziť výsledky";

$lang['Topic_post_not_exist'] = "Požadovaná téma alebo príspevok neexistuje.";
$lang['No_posts_topic'] = "Pre túto tému neexistujú žiadne príspevky.";
$lang['Event_not_exist'] = "Skontrolujte si kalendár - požadované stretnutie neexistuje.";

$lang['Display_posts'] = "Zobraziť príspevky z predchádzajúcej";
$lang['All_Posts'] = "Všetky príspevky";
$lang['Newest_First'] = "Najnovšie navrchu";
$lang['Oldest_First'] = "Najstaršie navrchu";

$lang['Back_to_top'] = "Vrátiť sa hore";

$lang['Read_profile'] = "Zobraziť profil používateľa";

$lang['No_send_email'] = "E-mailová adresa používateľa je neplatná.";
$lang['No_spam_email'] = "E-mailová adresa používateľa nám vracia naše správy, lebo ich považuje za nevyžiadanú poštu.";
$lang['Visit_website'] = "Navštíviť ich webstránku";
$lang['ICQ_status'] = "Status ICQ";
$lang['Edit_delete_post'] = "Upraviť/vymazať tento príspevok";
$lang['View_IP'] = "Zobraziť IP adresu postujúceho";
$lang['Delete_post'] = "Vymazať tento príspevok";
$lang['Delete_event'] = "Vymazať toto podujatie";

$lang['wrote'] = "napísal(a)"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Citát"; // comes before bbcode quote output.
$lang['Code'] = "Kód"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Naposledy upravil(a) %s dňa %s, upravené celkovo %d raz."; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = "Naposledy upravil(a) %s dňa %s, upravené celkovo %d-krát."; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = "Uzamknúť túto tému";
$lang['Unlock_topic'] = "Odomknúť túto tému";
$lang['Move_topic'] = "Presunúť túto tému";
$lang['Delete_topic'] = "Vymazať túto tému";
$lang['Split_topic'] = "Rozdeliť túto tému";

$lang['Stop_watching_topic'] = "Prestať sledovať túto tému";
$lang['Start_watching_topic'] = "Sledovať odpovede v tejto téme";
$lang['No_longer_watching'] = "Už viac nesledujete túto tému.";
$lang['You_are_watching'] = "Teraz sledujete túto tému.";
$lang['Stop_watching_forum'] = "Prestať sledovať toto fórum";
$lang['Start_watching_forum'] = "Sledovať príspevky v tomto fóre";
$lang['No_longer_watching_forum'] = "Už viac nesledujete toto fórum.";
$lang['You_are_watching_forum'] = "Teraz sledujete toto fórum.";

$lang['Total_votes'] = "Celkový počet hlasov";
$lang['Voted_show'] = "Používatelia, ktorí hlasovali : "; // it means :  users that voted  (the number of voters will follow)
$lang['Poll_expires'] = "Výsledky budú viditeľné v : ";
$lang['Who_Voted'] = "Kto hlasoval";
$lang['No_one'] = "Nikto";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Telo správy";
$lang['Topic_review'] = "Preskúmanie témy";

$lang['No_post_mode'] = "Nebol určený režim príspevku."; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Založiť novú tému";
$lang['Post_a_new_event'] = "Zverejniť nové podujatie";
$lang['Post_a_reply'] = "Odoslať odpoveď";
$lang['Post_topic_as'] = "Založiť tému ako";
$lang['Edit_Post'] = "Upraviť príspevok";
$lang['Options'] = "Voľby";

$lang['Post_Announcement'] = "Oznam";
$lang['Post_Sticky'] = "Pripnutý";
$lang['Post_Normal'] = "Obyčajný";
$lang['Post_Poll'] = "Hlasovanie";

$lang['Event_type'] = "Typ podujatia";
$lang['PT_cal_event'] = "Iné podujatie";
$lang['PT_tm_event'] = "Stretnutie Toastmasters";
$lang['PT_tm_exec'] = "Porada vedenia";
$lang['PT_conf'] = "Konferencia";
$lang['PT_trn'] = "Školenie vedúcich";
$lang['DOT_trn'] = "Školenie vedúcich dištriktu";
$lang['Council'] = "Rada";
$lang['ECouncil'] = "Výkonná rada";
$lang['Duplicate_meeting'] = "Už máte stretnutie tohto typu v tom istom čase a v ten istý deň.";
$lang['Invalid_date'] = "So zvoleným dátumom bol problém - zmenili sme ho na dnešný dátum<br>*** Prejdite na obrazovku podujatia a opravte dátum a čas ***";

$lang['Confirm_delete'] = "Skutočne chcete vymazať tento príspevok?";
$lang['Confirm_delete_event'] = "Skutočne chcete vymazať toto podujatie?";
$lang['Confirm_delete_poll'] = "Skutočne chcete vymazať toto hlasovanie?";

$lang['Flood_Error'] = "Váš ďalší príspevok nemôžete zverejniť tak krátko po tom predošlom. Skúste to po chvíli opäť.";
$lang['Empty_subject'] = "Keď zverejňujete novú tému, musíte zadať predmet.";
$lang['Empty_message'] = "Príspevok musí obsahovať správu.";
$lang['No_date'] = "Musíte zadať dátum pre toto podujatie.";
$lang['Forum_locked'] = "Toto fórum je uzamknuté: nemôžete zverejňovať príspevky, ani odpovedať na témy či ich upravovať.";
$lang['Topic_locked'] = "Táto téma je uzamknutá: nemôžete upravovať príspevky alebo na ne odpovedať.";
$lang['No_post_id'] = "Musíte si vybrať príspevok, ktorý chcete upraviť.";
$lang['No_role_id'] = "Musíte si vybrať rolu.";
$lang['No_topic_id'] = "Musíte si vybrať tému, na ktorú chcete odpovedať.";
$lang['No_valid_mode'] = "Môžete iba zverejňovať príspevky, odpovedať, upravovať, či citovať správy. Vráťte sa sem neskôr a skúste to opäť.";
$lang['No_such_post'] = "Takýto príspevok neexistuje. Vráťte sa späť a skúste to opäť.";
$lang['Deleted_post'] = "Toto stretnutie alebo rola boli vymazané.";
$lang['Edit_own_posts'] = "Prepáčte, ale môžete upravovať iba vaše vlastné príspevky.";
$lang['Delete_own_posts'] = "Prepáčte, ale môžete mazať iba vaše vlastné príspevky.";
$lang['Cannot_delete_replied'] = "Prepáčte, ale nemôžete mazať príspevky, na ktoré niekto odpovedal.";
$lang['Cannot_delete_poll'] = "Prepáčte, ale nemôžete vymazať aktívne hlasovanie.";
$lang['Empty_poll_title'] = "Musíte zadať názov pre vaše hlasovanie.";
$lang['To_few_poll_options'] = "Musíte zadať aspoň dve voľby, pre ktoré chcete hlasovať.";
$lang['To_many_poll_options'] = "Pokúsili ste sa pridať príliš veľa volieb pre toto hlasovanie.";
$lang['Post_has_no_poll'] = "Tento príspevok nemá žiadne hlasovanie.";
$lang['Already_voted'] = "Už ste sa hlasovania zúčastnili.";
$lang['No_vote_option'] = "Počas hlasovania si musíte zvoliť voľbu.";
$lang['Short_url'] = 'Informácia chýba - Vložte, prosím, celý odkaz z e-mailu do vášho prehliadača.';

$lang['Add_poll'] = "Pridať hlasovanie";
$lang['Add_poll_explain'] = "Pokiaľ nechcete pridať hlasovanie do vašej témy, nechajte polia prázdne.";
$lang['Poll_question'] = "Otázka pre hlasovanie";
$lang['Poll_option'] = "Voľba pre hlasovanie";
$lang['Add_option'] = "Pridať voľbu";
$lang['Add_option_explain'] = "Pridať každú voľbu pred odoslaním tohto príspevku";
$lang['Update'] = "Aktualizovať";
$lang['Poll_for'] = "Nechať hlasovanie spustené ďalších";
$lang['Days'] = "dní"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "Zadajte nulu alebo nechajte pole nevyplnené, ak nechcete, aby hlasovanie skončilo.";
$lang['Delete_poll'] = "Vymazať hlasovanie";
$lang['Max_vote'] = "Najväčší počet výberov";
$lang['Max_vote_explain'] = "Zadajte jednotku alebo nechajte pole nevyplnené, aby ste umožnili vybrať v hlasovaní iba jednu voľbu.";
$lang['Max_voting_1_explain'] = "Vyberte, prosím, iba ";
$lang['Max_voting_2_explain'] = " odpovedí";
$lang['Max_voting_3_explain'] = " (výbery nad týmto limitom budú ignorované)";
$lang['Vhide'] = "Skryť výsledky dokiaľ hlasovanie neskončí";
$lang['Hide_vote'] = "Výsledky";
$lang['Tothide_vote'] = "a počet hlasov";
$lang['Hide_vote_explain'] = "Skryť dokiaľ hlasovanie neskončí";
$lang['Vote_hide'] = "Výsledky je možné vidieť až po ukončení hlasovania.";
$lang['Show_results'] = "Zobraziť výsledky hlasovania";
$lang['Poll_to_go'] = "Čas do konca hlasovania";
$lang['Open_poll'] = "Neobmedzený";

$lang['Disable_HTML_post'] = "Zakázať HTML v tomto príspevku";
$lang['Disable_BBCode_post'] = "Zakázať BBCode v tomto príspevku";
$lang['Disable_Smilies_post'] = "Zakázať emotikony v tomto príspevku";

$lang['HTML_is_ON'] = "HTML je <u>ZAPNUTÉ</u>";
$lang['HTML_is_OFF'] = "HTML je <u>VYPNUTÉ</u>";
$lang['BBCode_is_ON'] = "%sBBCode%s je <u>ZAPNUTÝ</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBCode%s je <u>VYPNUTÝ</u>";
$lang['Smilies_are_ON'] = "Emotikony sú <u>ZAPNUTÉ</u>";
$lang['Smilies_are_OFF'] = "Emotikony sú <u>VYPNUTÉ</u>";

$lang['Attach_signature'] = "Priložiť podpis (podpisy je možné zmeniť v profile)";
$lang['Notify'] = "Oznámiť mi, keď mi niekto odpovie";

$lang['Stored'] = "Správu ste úspešne zadali.";
$lang['Stored_e'] = "Podujatie ste úspešne zadali.";
$lang['Deleted'] = "Správu ste úspešne vymazali.";
$lang['Deleted_e'] = "Podujatie ste úspešne vymazali.";
$lang['Poll_delete'] = "Hlasovanie ste úspešne vymazali.";
$lang['Vote_cast'] = "Váš hlas bol zaznamenaný.";

$lang['Topic_reply_notification'] = "Oznámenie o odpovediach v téme";

//
// bbcode help format goes like this
// $lang['bbcode_help']['value'] = "BBCode Name: Info (Alt+%s)";
//
// value is what you put in $EMBB_values in posting.php
// %s gets replaced with the automatic hotkey that the bbcode gets assigned
//
$lang['bbcode_help']['value'] = "Názov BBCode: Informácie (Alt+%s)";
$lang['bbcode_b_help'] = "Tučný text: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kurzíva: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Podčiarknutý text: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Citácia: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Zobrazenie kódu: [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Zoznam: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Usporiadaný zoznam: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Vloženie obrázka: [img( | =left | =right )]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Vloženie URL adresy: [url]http://url[/url] alebo [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Uzavrieť všetky otvorené značky bbCode";
$lang['bbcode_s_help'] = "Farba písma: [color=red]text[/color]  Tip: tiež môžete použiť parameter v tvare color=#FF0000";
$lang['bbcode_f_help'] = "Veľkosť písma: [size=x-small]drobný text[/size]";
$lang['bbcode_g_help'] = "Tabuľky:   Pre viac informácií kliknite na otáznik..  (alt+g)";

$lang['Emoticons'] = "Emotikony";
$lang['More_emoticons'] = "Zobraziť viac emotikonov";

$lang['Font_color'] = "Farba písma";
$lang['color_default'] = "Predvolené";
$lang['color_dark_red'] = "Tmavočervená";
$lang['color_red'] = "Červená";
$lang['color_orange'] = "Oranžová";
$lang['color_brown'] = "Hnedá";
$lang['color_yellow'] = "Žltá";
$lang['color_green'] = "Zelená";
$lang['color_olive'] = "Olivová";
$lang['color_cyan'] = "Zelenomodrá";
$lang['color_blue'] = "Modrá";
$lang['color_dark_blue'] = "Tmavomodrá";
$lang['color_indigo'] = "Indigová";
$lang['color_violet'] = "Fialová";
$lang['color_white'] = "Biela";
$lang['color_black'] = "Čierna";

$lang['Font_size'] = "Veľkosť písma";
$lang['font_tiny'] = "Drobné";
$lang['font_small'] = "Malé";
$lang['font_normal'] = "Normálne";
$lang['font_large'] = "Veľké";
$lang['font_huge'] = "Veľké";

$lang['Close_Tags'] = "Uzavrieť značky";
$lang['Styles_tip'] = "Tip: Na vybraný text môžete rýchlo aplikovať štýly.";

//
// Private Messaging
//
$lang['Private_Messaging'] = "Súkromné správy";

$lang['Login_check_pm'] = "Prihláste sa, aby ste si pozreli súkromné správy.";
$lang['New_pms'] = "%d nových správ"; // You have 2 new messages
$lang['New_pm'] = "%d novú správu"; // You have 1 new message
$lang['No_new_pm'] = "Žiadne nové správy.";
$lang['Unread_pms'] = "%d neprečítaných správ";
$lang['Unread_pm'] = "%d neprečítaná správa";
$lang['No_unread_pm'] = "Žiadne neprečítané správy.";
$lang['You_new_pm'] = "Vo vašej schránke na vás čaká nová súkromná správa.";
$lang['You_new_pms'] = "Vo vašej schránke na vás čakajú nové súkromné správy.";
$lang['You_no_new_pm'] = "Nečakajú na vás žiadne súkromné správy.";

$lang['Unread_message'] = "Neprečítaná správa";
$lang['Read_message'] = "Prečítať správu";

$lang['Read_pm'] = "Prečítať správu";
$lang['Post_new_pm'] = "Odoslať správu";
$lang['Post_reply_pm'] = "Odpovedať na správu";
$lang['Post_quote_pm'] = "Citovať správu";
$lang['Edit_pm'] = "Upraviť správu";

$lang['Inbox'] = "Doručené správy";
$lang['Outbox'] = "Správy na odoslanie";
$lang['Savebox'] = "Uložené správy";
$lang['Sentbox'] = "Odoslané správy";
$lang['Flag'] = "Označenie";
$lang['Subject'] = "Predmet";
$lang['From'] = "Od";
$lang['Lastvisit'] = "Naposledy online";
$lang['To'] = "Komu";
$lang['Date'] = "Dátum";
$lang['Mark'] = "Označiť";
$lang['Sent'] = "Odoslané";
$lang['Saved'] = "Uložené";
$lang['Delete_marked'] = "Vymazať označené";
$lang['Delete_all'] = "Vymazať všetky";
$lang['Save_marked'] = "Uložiť označené";
$lang['Save_message'] = "Uložiť správu";
$lang['Delete_message'] = "Vymazať správu";
$lang['Usage'] = "Tento systém sa smie používať IBA pre záležitosti týkajúce sa klubu Toastmasters, oblasti alebo dištriktu.";

$lang['Display_messages'] = "Zobraziť správy z predchádzajúceho obdobia"; // Followed by number of days/weeks/months

$lang['No_messages_folder'] = "V tomto priečinku nemáte žiadne správy.";

$lang['Cannot_send_privmsg'] = "Prepáčte, ale správca vám zabránil v tom, aby ste mohli posielať súkromné správy alebo e-maily.";
$lang['No_to_user'] = "Musíte zadať používateľské meno toho, komu chcete poslať správu.";
$lang['No_such_user'] = "Prepáčte, ale takýto používateľ neexistuje.";
$lang['No_email_cannot_send'] = "Predtým, ako budete môcť poslať e-mail, musíte %spridať e-mailovú adresu do vášho profilu%s.";

$lang['Disable_HTML_pm'] = "Zakázať HTML v tejto správe";
$lang['Disable_BBCode_pm'] = "Zakázať BBCode v tejto správe";
$lang['Disable_Smilies_pm'] = "Zakázať emotikony v tejto správe";

$lang['Message_sent'] = "Vaša správa bola odoslaná.";

$lang['Send_a_new_message'] = "Poslať novú súkromnú správu";
$lang['Send_a_reply'] = "Odpovedať na súkromnú správu";
$lang['Edit_message'] = "Upraviť súkromnú správu";

$lang['Notification_subject'] = "Prišla vám nová súkromná správa!";

$lang['Find_username'] = "Nájsť používateľa";
$lang['Find'] = "Nájsť";
$lang['No_match'] = "Nenašla sa žiadna zhoda.";
$lang['Select_username'] = "Vybrať tohto používateľa";
$lang['Invalid_email'] = "Označiť ako neplatný";
$lang['Bounced_email'] = "Označiť ako vracajúci sa späť";

$lang['No_such_folder'] = "Takýto priečinok neexistuje.";

$lang['Mark_all'] = "Označiť všetky";
$lang['Unmark_all'] = "Odznačiť všetky";

$lang['Confirm_delete_pm'] = "Skutočne chcete vymazať túto správu?";
$lang['Confirm_delete_pms'] = "Skutočne chcete vymazať tieto správy?";

$lang['Inbox_size'] = "Vaša schránka je zaplnená na %d%%."; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Váš priečinok odoslanej pošty je zaplnený na %d%%.";
$lang['Savebox_size'] = "Váš priečinok uloženej pošty je zaplnený na %d%%.";

$lang['Click_view_privmsg'] = "Kliknite %ssem, aby ste sa dostali do vašej schránky%s";
// START - SEND PM ON REGISTER MOD - AbelaJohnB
$lang['register_pm_subject'] = "Vítame vás v %s";
$lang['register_pm'] = "Ahojte.<br /><br />Vítame vás v %s. <br /><br />Veríme, že si váš čas strávený na tejto stránke užívate.<br /><br />Ak chcete získať informácie o akejkoľvek oblasti týkajúcej sa používania tejto stránky, kliknite na odkaz 'Báza znalostí' v hornej časti ktorejkoľvek obrazovky.<br />Týmto odkazom sa dostanete na prehľad systému z pohľadu používateľa: https://<názov_servera>/kb.php?mode=cat&cat=6<br />Týmto odkazom sa dostanete na prehľad správy klubu: https://<názov_servera>/kb.php?mode=cat&cat=5<br /><br />Aby ste získali plný prístup k oblastiam, ktoré vás zaujímajú, požiadajte o členstvo v príslušných skupinách.<br /><br />K dispozícii sú nasledujúce skupiny %s<br>O členstvo v skupinách môžete požiadaž teraz kliknutím na tieto odkazy alebo kedykoľvek neskôr kliknutím na menu 'používateľské skupiny' (nachádza sa na všetkých obrazovkách).<br /><br />Členstvo niektorých skupín je spracovávané automaticky, ale niektoré skupiny vyžadujú schválenie od moderátora - v takom prípade vám po spracovaní vašej žiadosti príde e-mail.<br /><br />Kliknite na kalendár a vyberte si stretnutie, o ktoré máte záujem. Pokiaľ sa ho chcete zúčastniť, kliknite na ikonu 'palec hore' vedľa vášho mena a my vás automaticky pridáme na zoznam hostí.<br /><br />~Užite si to!<br />%s  ";

//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Zobrazuje sa profil :: %s"; // %s is username
$lang['About_user'] = "Všetko o používateľovi %s"; // %s is username
$lang['User_admin_for'] = "Správa pre používateľa %s"; // %s is username

$lang['Preferences'] = "Vlastnosti";
$lang['TM_club_info'] = "Informácie o klube Toastmasters";
$lang['Items_required'] = "Položky označené hviezdičkou sú povinné, pokiaľ nie je uvedené inak.";
$lang['Add_explain'] = "Môžete <b>BUĎ</b> pridať nového používateľa vyplnením tohto formulára <b>ALEBO</b> prepojiť existujúceho používateľa s vašim klubom.";
$lang['Registration_info'] = "Informácie o registrácii";
$lang['Status_history'] = "História statusov";
$lang['Profile_info'] = "Informácie o profile";
$lang['TM_club_add'] = "Prepojiť existujúceho používateľa s vašim klubom";
$lang['TM_c_explain'] = "Pokiaľ už používateľ v tomto systéme existuje, použite tlačidlo 'Nájsť používateľa', aby ste ho mohli nájsť a následne prepojiť s vašim klubom.";
$lang['Profile_info_warn'] = "Táto informácia bude viditeľná pre všetkých (ale môžete obmedziť viditeľnosť vášho mena a telefónnych čísel).";
$lang['Avatar_panel'] = "Ovládací panel pre avatar";
$lang['Avatar_gallery'] = "Galéria avatarov";
$lang['File_upload'] = "Kvóta pre veľkosť prílohy";
$lang['Both_names_required'] = "Je nutné zadať vaše meno aj priezvisko.";
$lang['My_profile'] = "Môj používateľský profil";

// Club Registration Wizard
$lang['Club_Registration'] = "Registrácia v klube";
$lang['tab_Web'] = "Web";
$lang['tab_Club_Info'] = "Informácie o klube";
$lang['tab_Meeting'] = "Stretnutie";
$lang['tab_Region'] = "Región";
$lang['tab_Location'] = "Mapa";

$lang['Website'] = "Webová stránka";
$lang['Location'] = "Lokalita";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "E-mailová adresa";
$lang['Send_private_message'] = "Poslať súkromnú správu";
$lang['Subdomain'] = "Hostovaná stránka";

$lang['Interests'] = "Osobné informácie";
$lang['Occupation'] = "Zamestnanie";
$lang['Poster_rank'] = "Hodnosť postujúceho";
$lang['Member_rank'] = "Status";

$lang['Total_posts'] = "Príspevkov celkovo";
$lang['User_post_pct_stats'] = "%.2f%% zo všetkých príspevkov"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f príspevkov za deň"; // 1.5 posts per day
$lang['Search_user_posts'] = "Nájsť všetky príspevky od %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Prepáčte, ale takýto používateľ neexistuje.";
$lang['Wrong_Profile'] = "Nemôžete upravovať profil, ktorý nie je váš.";

$lang['Only_one_avatar'] = "Je možné zadať iba jeden typ avatara.";
$lang['File_no_data'] = "Súbor na zadanej URL adrese neobsahuje žiadne dáta.";
$lang['No_connection_URL'] = "Na URL adresu, ktorú ste zadali, sme sa nemohli pripojiť.";
$lang['Incomplete_URL'] = "Zadaná URL adresa nie je úplná.";
$lang['Wrong_remote_avatar_format'] = "URL adresa odkazujúca na vzdialeného avatara je neplatná.";
$lang['No_send_account_inactive'] = "Prepáčte, ale nemôžeme získať vaše heslo, pretože váš účet je aktuálne neaktívny.<br />Použite odkaz v e-maile, ktorý ste dostali pri registrácii alebo kontaktujte správcu stránky, ak chcete ďalšie informácie.";
$lang['No_send_invalid_email'] = "Prepáčte, ale nemôžeme získať vaše heslo, pretože váš účet nemá platnú e-mailovú adresu.<br />Použite odkaz v e-maile, ktorý ste dostali pri registrácii alebo kontaktujte správcu stránky, ak chcete ďalšie informácie.";
$lang['Unknown'] = "Žiadny záznam";
$lang['User_not_active'] = "Neaktivovaný";
$lang['Always_smile'] = "Vždy povoliť emotikony";
$lang['Always_html'] = "Vždy povoliť HTML";
$lang['Always_bbcode'] = "Vždy povoliť BBCode";
$lang['Always_add_sig'] = "Vždy priložiť môj podpis";
$lang['Always_notify'] = "Vždy mi dať vedieť o odpovediach";
$lang['Always_notify_explain'] = "Ak niekto odpovie na tému, v ktorej prispievate, dostanete o tom e-mail. Môžete to kedykoľvek zmeniť pri zverejňovaní príspevku.";

$lang['Board_style'] = "Farebná schéma";
$lang['Board_lang'] = "Jazyk nástenky";
$lang['User_lang'] = "Predvolený jazyk";
$lang['Change_user_lang'] = "Zmeniť predvolený jazyk";
$lang['Timezone'] = "Časová zóna";
$lang['DST'] = "Ignorovať letný čas";
$lang['Date_format'] = "Formát dátumu";
$lang['Date_format_explain'] = "Použitá syntax je identická s PHP funkciou <a href='http://www.php.net/date' target='_other'>date()</a>."; //NTR
$lang['Signature'] = "Podpis";
$lang['Signature_explain'] = "Toto je blok textu, ktorý môžete pridať do vašich príspevkov. Je obmedzený na %d znakov.";
$lang['Public_view_email'] = "Vždy zobrazovať moju e-mailovú adresu";

$lang['Current_password'] = "Aktuálne heslo";
$lang['New_password'] = "Nové heslo";
$lang['Confirm_password'] = "Potvrdiť heslo";
$lang['Confirm_password_explain'] = "Pokiaľ chcete zmeniť vašu e-mailovú adresu, musíte potvrdiť vaše aktuálne heslo.";
$lang['password_if_changed'] = "Heslo musíte zadať len ak ho chcete zmeniť.";
$lang['password_confirm_if_changed'] = "Vaše heslo musíte potvrdiť iba vtedy, ak ste ho vyššie zmenili.";
$lang['Confirm_password_short'] = "Aby ste mohli nastaviť túto možnosť, musíte vyššie zadať vaše aktuálne heslo.";

$lang['Avatar'] = "Avatar";
$lang['Avatar_explain'] = "V príspevkoch, v časti s podrobnosťami o vás, sa zobrazí malý obrázok. Naraz je možné zobraziť iba jeden obrázok. Jeho šírka nesmie prekročiť %d pixelov, výška nesmie prekročiť %d pixelov a veľkosť súboru nesmie prekročiť %d KB.";
$lang['Upload_Avatar_file'] = "Nahrať avatara z môjho počítača";
$lang['Upload_Avatar_URL'] = "Nahrať avatara z URL adresy";
$lang['Upload_Avatar_URL_explain'] = "Zadajte URL adresu s umiestnením obrázka vášho avatara. Skopíruje sa na túto stránku.";
$lang['Link_remote_Avatar'] = "Odkaz na avatara mimo tejto stránky";
$lang['Link_remote_Avatar_explain'] = "Zadajte URL adresu s umiestnením obrázka avatara, na ktorého sa chcete odkázať.";
$lang['Select_from_gallery'] = "Vybrať avatara z galérie";
$lang['View_avatar_gallery'] = "Zobraziť galériu";

$lang['Select_avatar'] = "Vybrať avatara";
$lang['Return_profile'] = "Zrušiť avatara";
$lang['Select_category'] = "Vybrať kategóriu";

$lang['Delete_Image'] = "Vymazať obrázok";
$lang['Current_Image'] = "Aktuálny obrázok";

$lang['Notify_on_privmsg'] = "Oznámiť mi, že mám novú súkromnú správu";
$lang['Popup_on_privmsg'] = "Zobraziť vyskakovacie okno, keď mi príde súkromná správa";
$lang['Popup_on_privmsg_explain'] = "Niektoré šablóny môžu otvoriť nové okno, aby vás informovali, že máte novú súkromnú správu.";
$lang['Hide_user'] = "Skryť môj online status";

$lang['Profile_updated'] = "Váš profil bol aktualizovaný.";
$lang['Profile_updated_inactive'] = "Aktualizovali sme váš profil. Avšak zmenili ste v ňom zásadné podrobnosti a preto je váš účet v tejto chvíli neaktívny. Skontrolujte si e-mail, aby ste sa dozvedeli, ako znovu aktivovať tento účet. V prípade, že je nutná aktivácia správcom, počkajte kým ho správca opäť aktivuje.";

$lang['Password_mismatch'] = "Zadané heslá sa nezhodujú.";
$lang['Already_member'] = "Tento používateľ už je prepojený s týmto klubom.";
$lang['Current_password_mismatch'] = "Aktuálne heslo, ktoré ste zadali, sa nezhoduje s tým, ktoré je uložené v databáze.";
$lang['Password_long'] = "Vaše heslo nesmie mať viac ako 32 znakov.";

$lang['Username_taken'] = "Prepáčte, ale takéto používateľské meno už niekto má.";
$lang['Name_invalid'] = "Prepáčte, ale meno tohto používateľa obsahuje neplatný znak ako napr. '@'";
$lang['Username_invalid'] = "Prepáčte, ale meno tohto používateľa obsahuje neplatný znak ako napr. '@', '.' alebo je nezadané.";
$lang['Username_disallowed'] = "Prepáčte, ale takéto používateľské meno bolo zakázané.";
$lang['Name_duplicate'] = "Už máme člena s menom %s. Prihláste sa alebo požiadajte o opätovné poslanie hesla.";
$lang['Name_in_username'] = "Kvôli ochrane súkromia nesmiete použiť vaše celé priezvisko ako súčasť používateľského mena.";
$lang['Forget_me_explain'] = "Využívam moje 'právo byť zabudnutý' a požadujem, aby boli všetky informácie o mne vymazané zo systému easy-Speak.
\t<br />Rozumiem, že sa týmto vymažú <b>VŠETKY</b> údaje o mne, vrátane môjho členstva v ktoromkoľvek klube a všetky minulé aj budúce roly.
\t<br /><br /><b>Tento úkon NIE JE MOŽNÉ vrátiť späť</b>. Pokiaľ si to rozmyslíte, budete sa musieť opätovne pripojiť do klubu a ručne zadať celú vašu históriu.";
$lang['Forget_me'] = "Vymazať VŠETKY moje údaje";
$lang['Disclose'] = "Zobraziť, čo všetko easy-Speak o mne vie";

$lang['Email_taken'] = "Prepáčte, ale táto e-mailová adresa už je registrovaná u iného používateľa.";
$lang['Email_banned'] = "Prepáčte, ale táto e-mailová adresa bola zablokovaná.";
$lang['Email_unwanted'] = "Prepáčte, ale nemôžeme prijať e-mail pre";
$lang['Email_invalid'] = "Prepáčte, ale táto e-mailová adresa je neplatná.";
$lang['Email_unverified'] = "Prepáčte, ale túto e-mailovú adresu nemôžeme overiť. Pre viac informácií si pozrite stránku %s. "; // %s is replaced with a link to the FAQ page
$lang['No_connection'] = "Túto adresu sme nemohli overiť pripojením sa k poštovému serveru.";
$lang['Email_spam'] = "Táto adresa je neplatná - možno problém s ochranou proti nevyžiadanej pošte.";
$lang['Email_bounced'] = "Táto adresa je neplatná - E-mail na túto adresu sa nám vrátil.";
$lang['Email_SMTP'] = "Táto adresa '%s' je neplatná - neprešla kontrolou SMTP.";
$lang['Email_Cloud'] = "Túto adresu '%s' zamietol Cloudmark - choďte na fórum s hlásením problémov.";
$lang['Email_reval'] = "Potvrdzujem, že som<b> pridal %s do zoznamu povolených</b> s poštovou službou na<b> %s</b> a chcem, aby easy-Speak aj naďalej používal %s ako moju e-mailovú adresu";
$lang['Email_reval1'] = "Potvrdzujem, že problémy s touto adresou som vyriešil a chcem, aby easy-Speak aj naďalej používal %s ako moju e-mailovú adresu";
$lang['Server_SMTP'] = "Vzdialený poštový server odpovedal";

$lang['TM_Number_duplicate'] = "Duplicitné členské číslo TMI: %s";
$lang['Email_duplicate'] = "S touto e-mailovou adresou už je registrovaný iný používateľ: %s";
$lang['Username_duplicate'] = "Duplicitne používateľské meno: %s.  Najbližšie dostupné: %s";

$lang['Signature_too_long'] = "Váš podpis je príliš dlhý.";
$lang['Fields_empty'] = "Musíte vyplniť všetky požadované polia.";
$lang['Avatar_filetype'] = "Typ súboru avatara musí byť .jpg, .gif alebo .png.";
$lang['Avatar_filesize'] = "Veľkosť obrázka avatara musí byť menšia ako %d KB."; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = "Avatar musí byť užší ako %d pixelov a nižší ako %d pixelov.";
$lang['Status_date_error'] = "Zmena statusu je ďaleko v budúcnosti!";

$lang['Welcome_subject'] = "Vítame vás na stránke pre automatizáciu Toastmasters, %s"; // Welcome to my.com Toastmaster Automation
$lang['New_account_subject'] = "Nový používateľský účet";
$lang['Account_activated_subject'] = "Účet bol aktivovaný.";

$lang['New_account_tm'] = "Správca klubu %s vytvoril pre vás používateľské ID na tejto stránke.";
$lang['New_account_tm2'] = "Môžete sa nahlásiť na najbližšie stretnutie klubu %skliknutím na tento odkaz%s.";
$lang['New_account_tm3'] = "Môžete si pozrieť všetky podrobnosti o kontakte %skliknutím na tento odkaz%s.";
$lang['Account_added'] = "Ďakujeme vám za registráciu, vytvorili sme vám účet. Teraz vás prihlásime s vašim používateľským menom a heslom - Zapamätajte si ich pre použitie v budúcnosti.";
$lang['Account_added_tm'] = "Vytvorili sme účet a používateľovi sme poslali uvítací e-mail.";
$lang['Account_added_no_em'] = "Tento účet bol vytvorený BEZ E-MAILOVEJ ADRESY.";
$lang['Account_added_not_sent'] = "Vytvorili sme účet, ale používateľovi sme neposlali žiadny email.";
$lang['Account_inactive'] = "Vytvorili sme vám účet, avšak táto stránka vyžaduje jeho aktiváciu.<br /><br />Na e-mailovú adresu, ktorú ste nám poskytli, sme poslali aktivačný kľúč.<br /><br />Pre viac informácií si, prosím, skontrolujte váš e-mail.<br/>Túto službu nebudete môcť používať, dokiaľ nepoužijete potvrdzovací odkaz z vášho e-mailu.";
$lang['Account_inactive_admin'] = "Vytvorili sme vám účet, avšak táto stránka vyžaduje jeho aktiváciu správcom. Poslali sme mu email a budeme vás informovať, keď vám účet aktivuje.";
$lang['Account_active'] = "Váš účet bol práve aktivovaný. Ďakujeme vám za registráciu.";
$lang['Account_active_admin'] = "Tento účet bol práve aktivovaný.";
$lang['Reactivate'] = "Opätovne aktivovať môj účet!";
$lang['Already_activated'] = "Tento odkaz ste už na aktivovanie vášho účtu použili.<br>Teraz sa prihláste pomocou hesla, ktoré ste si nastavili.";
$lang['COPPA'] = "Účet sme vám vytvorili, ale musí byť ešte schválený. Pre podrobnosti si skontrolujte váš e-mail.";
$lang['Your_username'] = "Vaše používateľské meno a heslo pre";
$lang['Password_reset'] = "Používateľovi sme odoslali e-mail s radami ohľadom jeho nového hesla.";

$lang['Registration'] = "Podmienky registrácie";
$lang['Reg_agreement'] = "Aj keď sa správcovia a moderátori tejto stránky snažia mazať alebo upravovať akýkoľvek pochybný materiál v čo najkratšom čase, nie je možné posúdiť každú správu. Z toho dôvodu potvrdzujete, že všetky príspevky na tejto webstránke vyjadrujú postoje a názory autora a nie správcov, moderátorov alebo správcu webovej stránky (okrem príspevkov týchto ľudí) a títo nebudú niesť za obsah zodpovednosť.
<br /><br />Súhlasíte s tým, že nebudete zverejňovať hanlivý, obscénny, vulgárny, ohovárajúci, nenávistný, vyhrážajúci, sexuálne orientovaný alebo akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek aplikovateľné zákony. Ak takýto obsah zverejníte, môže to viesť k vášmu okamžitému a trvalému blokovaniu (a informovaniu vášho internetového poskytovateľa). IP adresu všetkých príspevkov zaznamenávame, aby sme pomohli vynútiť tieto podmienky.
<br />Súhlasíte s tým, že správca webovej stránky, správca a moderátori tohto fóra majú právo vymazať, upraviť, presunúť alebo uzavrieť akúkoľvek tému a to kedykoľvek to uznajú za vhodné.
<br />Potvrdzujete, že ste si prečítali a súhlasíte s Podmienkami použitia pre túto stránku, ktoré sú k dispozícii prostredníctvom odkazu v spodnej časti stránky.
<br /><br />Zaznamenávame informácie o vás a o vašej účasti v Toastmasters a poskytujeme prostriedky, ktoré umožňujú vám a organizácii Toastmasters zaznamenávať, plánovať a spravovať váš pokrok vo výukovom programe Toastmasters. Súhlasíte s tým, že túto informáciu zaznamenávame a potvrdzujete, že si prezriete voľby ovplyvňujúce súkromie vo vašom osobnom profile. Môžete využiť vaše \"Právo byť zabudnutý\" a to kedykoľvek zvolením voľby vo vašom osobnom profile.
<br />Naša Politika súkromia je vždy dostupná prostredníctvom odkazu v spodnej časti každej stránky.
<br /><br />Kliknutím na tlačidlo \"Registrovať sa\" súhlasíte, že budete dodržiavať tieto podmienky.";

$lang['Agree_under_13'] = "Súhlasím s týmito podmienkami a som <b>mladší</b> ako 13 rokov";
$lang['Agree_over_13'] = "Súhlasím s týmito podmienkami";
$lang['Agree_not'] = "Nesúhlasím s týmito podmienkami";

$lang['Wrong_activation'] = "Aktivačný kľúč, ktorý ste zadali, sa nezhoduje s tým v databáze.";
$lang['Send_password'] = "Pošlite mi nové heslo";
$lang['Password_updated'] = "Vytvorili sme nové heslo. Skontrolujte si váš e-mail kvôli podrobnostiam ako ho aktivovať.";
$lang['Password_updated_U'] = "Vytvorili sme nové heslo a poslali sme ho tomuto používateľovi.";
$lang['No_email_match'] = "E-mailová adresa, ktorú ste zadali, sa nezhoduje s tou, ktorá je uvedená pre toto používateľské meno.";
$lang['No_username_match'] = "Zadané používateľské meno sa nezhoduje s tým, ktoré je uložené v databáze.";
$lang['New_password_activation'] = "Aktivácia nového hesla";
$lang['Password_activated'] = "Váš účet bol opäť aktivovaný a budete automaticky prihlásení.<br>Teraz si MUSÍTE nastaviť nové heslo.";
$lang['Other_reg'] = "Ďalšie registrácie";
$lang['Admin_no_edit'] = "Nemáte oprávnenie upravovať používateľa s ADMIN právami.<br>NEPOKRAČUJTE - BUDETE ZABLOKOVANÍ";
$lang['Password_set'] = "Nastaviť heslo pre: ";
$lang['Password_message_strict'] = "Musí obsahovať aspoň jedno číslo a jedno veľké písmeno, jedno malé písmeno, jeden špeciálny znak a musí mať aspoň %s znakov.";
$lang['Password_message_lax'] = "Musí obsahovať aspoň jedno číslo a jedno veľké alebo malé písmeno a musí mať aspoň %s znakov.";
$lang['Password_message'] = "Heslo musí spĺňať tieto pravidlá:";
$lang['Password_lowercase'] = "Malé písmeno";
$lang['Password_uppercase'] = "Veľké písmeno";
$lang['Password_letter'] = "Veľké alebo malé písmeno";
$lang['Password_nonalpha'] = "Špeciálny znak, napr. *@!/ atď.";
$lang['Password_number'] = "Číslo";
$lang['Password_min_length'] = "Aspoň %s znakov";
$lang['Password_show'] = "Zobraziť heslo";
$lang['Password_match'] = "Zhoduje sa";
$lang['Password_not_match'] = "Nezhoduje sa";
$lang['Password_reset'] = "Resetovali sme heslo "; // Duplicate
$lang['Password_change_click'] = "Pre zmenu vášho hesla kliknite sem: ";
// $lang['Change_password'] = "Zmeniť heslo"; // Duplicate
$lang['Current_password_wrong'] = "Aktuálne heslo je nesprávne.";
$lang['Enter_email'] = "Zadajte vašu emailovú adresu.";
$lang['Enter_username'] = "Zadajte vaše používateľské meno.";
$lang['Reset_email'] = "Na email pre obnovu hesla je potrebné zareagovať do %s minút<br/>Informujte o tom používateľa skôr ako klikne na tlačidlo.";
$lang['Expired_link'] = "Odkaz v emaile už vypršal. Skúste to opäť.";
$lang['Invalid_link'] = "Odkaz v emaile je neplatný. Skúste to opäť.";
$lang['Password_changed_email'] = "Oznámenie o zmene hesla";
$lang['Password_change_action'] = " zmenil(a) vaše heslo ";
$lang['Email_change_action'] = " zmenil(a) vašu emailovú adresu ";

$lang['Privacy_prompt'] = "Už to je nejaký ten čas, odkedy ste si naposledy prezreli vaše osobné nastavenia, vrátane vašich volieb ovplyvňujúcich súkromie.<br>Tým, že udržiavate vaše osobné informácie aktuálne nám pomáhate lepšie chrániť váš účet.<br ><br >easy-Speak vám umožňuje vybrať si, či vaše meno a telefónne čísla uvidia ostatní členovia klubu alebo iba vedúci klubu a dištriktu.
\t<br>Tiež môžete uplatniť vaše právo byť zabudnutý - tým dôjde k vymazaniu všetkých údajov o vás, vrátane členstva v ktoromkoľvek klube vedenom v easy-Speaku.";
$lang['Privacy_click'] = "%sKliknite sem pre zobrazenie a úpravu vášho profilu%s, vrátane vašich volieb pre súkromie.<br><br>Váš profil môžete kedykoľvek zobraziť a upraviť po kliknutí na časť Profil v hornom menu.";
$lang['Privacy_review'] = "Prezrite si svoje nastavenia súkromia a stlačte tlačidlo \"Uložiť\", čím vaše voľby potvrdíte.<br><br>Naša Politika súkromia je vždy dostupná z odkazu v dolnej časti každej stránky<br />a váš profil môžete kedykoľvek zobraziť a upraviť po kliknutí na časť Profil v hornom menu.";

// Webcal
$lang['Webcal_subs_title'] = "Prihlásiť sa na odber webového kalendára";
$lang['Webcal_subs_subtitle_mobile'] = "Mobil";
$lang['Webcal_subs_platf_iOS'] = "iPhone, iPad a iPod touch";
$lang['Webcal_subs_platf_iOS_note'] = "Pošleme vám e-mail s inštrukciami ako sa prihlásiť na odber. Otvorte tento e-mail na vašom iZariadení a riaďte sa inštrukciami.";
$lang['Webcal_subs_platf_Android'] = "Android zariadenie";
$lang['Webcal_subs_platf_Android_note'] = "Prihlásiť sa na odber v Kalendári Google, ktorý používate vo vašom Android zariadení.";
$lang['Webcal_subs_subtitle_web'] = "Web";
$lang['Webcal_subs_platf_Google_cal'] = "Kalendár Google";
$lang['Webcal_subs_platf_Live_cal'] = "Kalendár Microsoft Outlook.com/Live/Hotmail";
$lang['Webcal_subs_platf_Live_cal_note'] = "V kalendári Outlook.com na stránke pre vloženie/odber vyberte možnosť <b>Odoberať</b>.";
$lang['Webcal_subs_subtitle_desktop'] = "Pracovná plocha";
$lang['Webcal_subs_platf_Outlook'] = "Microsoft Outlook 2007 a novší";
$lang['Webcal_subs_platf_Outlook_note'] = "<a href='%s'target='_blank' class='nav'>Prečítajte si viac</a> o prihlásení sa k odberu webových kalendárov v aplikácii Microsoft Outlook.";
$lang['Webcal_subs_platf_OSX_Cal'] = "Kalendár OS X";
$lang['Webcal_subscribe'] = "Odoberať";
$lang['Webcal_subs_email_conformation'] = "Odošleme vám e-mail s inštrukciami ako sa prihlásiť na odber.";
$lang['Webcal_subs_email_success'] = "Poslali sme vám e-mail. Pokiaľ ho nevidíte medzi doručenou poštou, skontrolujte si priečinok nevyžiadanej pošty. Pokiaľ email neprišiel, otvorte túto stránku na vašom iZariadení a prihláste sa na odber tam.";
$lang['Webcal_subs_email_error'] = "Pri posielaní e-mailu sa vyskytla chyba.";
$lang['Webcal_timezone_name_missing'] = "V údajoch vášho klubu musí byť nastavená časová zóna, aby bolo možné zverejňovať webový kalendár pre váš klub. Kontaktujte, prosím, vášho správcu, aby ju nastavil.";
$lang['Webcal_not_club'] = "Webové kalendáre sú zverejňované iba pre kluby. Vyberte si klub a vráťte sa späť na túto stránku.";

// Start Display Searchbot mod
$lang['google'] = "Google Bot";                     //NTR
$lang['inktomi'] = "Yahoo/Inktomi Bot";             //NTR
$lang['lycos'] = "Lycos Bot";                       //NTR
$lang['infoseek'] = "InfoSeek Bot";                 //NTR
$lang['msn'] = "MSN Bot";                           //NTR
$lang['altavista'] = "Altavista Bot";               //NTR
$lang['excite'] = "Excite Bot";                     //NTR
$lang['northernlight'] = "Northen Light Bot";       //NTR
$lang['wisenut'] = "Wisenut Bot";                   //NTR
$lang['askjeeves '] = "Ask Jeeves Bot";             //NTR
// End Display Searchbot mod

?>
