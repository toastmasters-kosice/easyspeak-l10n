<?php
/***************************************************************************
 *                                 lang_kb.php
 *                            -------------------
 *   begin                : Sunday, Mar 31, 2003
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_kb.php,v 1.1 2005/04/12 19:30:56 jonohlsson Exp $
 *
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

$lang['Article'] = "Článok";
$lang['Article_description'] = "Popis";
$lang['Article_type'] = "Typ";
$lang['Article_keywords'] = "Kľúčové slová";
$lang['Articles'] = "Články";
$lang['Click_cat_to_add'] = "Vybrať kategóriu pre pridanie článku";
$lang['KB_Home'] = "Domov BZ";
$lang['Article_title'] = "Nadpis článku";
$lang['Article_text'] = "Text článku";
$lang['Add_article'] = "Odoslať článok";
$lang['Read_article'] = "Čítanie článku";
$lang['Article_not_visible'] = "Článok je obmedzený alebo ešte nebol schválený.";
$lang['Article_not_exsist'] = "Článok neexistuje.";
$lang['Category_not_exsist'] = "Kategória neexistuje.";
$lang['Resync_KB'] = "Zosynchronizovať všetky počty kategórií";
$lang['Article_submitted_Approve'] = "Článok bol úspešne odoslaný.<br />Správca váš článok posúdi a rozhodne sa, či dovolí používateľom vidieť ho alebo nie.";
$lang['Article_submitted'] = "Článok bol úspešne odoslaný.";
$lang['Click_return_article'] = "Kliknite %ssem pre návrat k článku%s.";
$lang['Article_Edited_Approve'] = "Článok bol úspešne upravený.<br />Predtým, ako ho používatelia uvidia, musí byť opäť schválený.";
$lang['Article_Edited'] = "Článok bol úspešne upravený.";
$lang['Edit_article'] = "Upraviť článok";
$lang['KB_art_description'] = "Tu môžete schváliť články, aby ich mohli používatelia vidieť. Alebo tiež môžete články mazať.";
$lang['Art_man'] = "Správa článkov";
$lang['Cat_man'] = "Správa kategórií";
$lang['KB_cat_description'] = "Sem môžete pridať, upraviť alebo vymazať kategórie z Bázy znalostí.";
$lang['Art_action'] = "Akcia";

// approve
$lang['Art_edit'] = "Upravené články";
$lang['Art_not_approved'] = "Neschválené";
$lang['Art_approved'] = "Schválené";
$lang['Approve'] = "Schváliť";
$lang['Un_approve'] = "Zrušiť schválenie";
$lang['Article_approved'] = "Článok je teraz schválený.";
$lang['Article_unapproved'] = "Článok je teraz neschválený.";

// delete
$lang['Confirm_art_delete'] = "Skutočne chcete tento článok vymazať?";
$lang['Confirm_art_delete_yes'] = "%sÁno, chcem tento článok vymazať%s";
$lang['Confirm_art_delete_no'] = "%sNie, nechcem tento článok vymazať%s";
$lang['Article_deleted'] = "Článok bol úspešne vymazaný.";
$lang['Click_return_article_manager'] = "Kliknite %ssem pre návrat do Správy článkov%s";

// cat manager
$lang['Create_cat'] = "Vytvorenie novej kategórie:"; // NTR
$lang['Create'] = "Vytvoriť"; // NTR
$lang['Cat_settings'] = "Nastavenia kategórie"; // NTR
$lang['Create_description'] = "Tu môžete zmeniť názov kategórie a pridať popis pre novú kategóriu."; // NTR
$lang['Cat_created'] = "Kategória bola úspešne vytvorená."; // NTR
$lang['Click_return_cat_manager'] = "Kliknite %ssem pre návrat do Správy kategórií%s."; // NTR
$lang['Edit_description'] = "Tu môžete upraviť nastavenia vašej kategórie."; // NTR
$lang['Edit_cat'] = "Upraviť kategóriu"; // NTR
$lang['Cat_edited'] = "Kategória bola úspešne upravená."; // NTR
$lang['Parent'] = "Rodič"; // NTR
$lang['Cat_delete_title'] = "Vymazať kategóriu"; // NTR
$lang['Cat_delete_desc'] = "Tu môžete vymazať kategóriu a presunúť všetky články v nej do novej kategórie."; // NTR
$lang['Cat_deleted'] = "Kategória bola úspešne vymazaná."; // NTR
$lang['Delete_all_articles'] = "Vymazať články"; // NTR

// configuration
$lang['KB_config'] = "Konfigurácia BZ"; // NTR
$lang['Art_types'] = "Typy článkov"; // NTR
$lang['KB_config_title'] = "Konfigurácia Bázy znalostí"; // NTR
$lang['KB_config_explain'] = "Zmeniť konfiguráciu vašej Bázy znalostí"; // NTR
$lang['New_title'] = "Povoliť nové články"; // NTR
$lang['New_explain'] = "Umožniť používateľom pridávať do vašej Bázy znalostí nové články"; // NTR
$lang['Edit_name'] = "Povoliť úpravy"; // NTR
$lang['Edit_explain'] = "Povoliť používateľom upravovať ich články po ich zverejnení"; // NTR
$lang['Notify_name'] = "Dať mi vedieť cez"; // NTR
$lang['Notify_explain'] = "Vyberte si, akým spôsobom chcete dostávať oznámenia o pridaní nových článkov."; // NTR
$lang['PM'] = "SS"; // NTR
$lang['Admin_id_name'] = "ID správcu"; // NTR
$lang['Admin_id_explain'] = "Toto je používateľské ID, ktorému budú posielané PM oznamy."; // NTR
$lang['Approve_new_name'] = "Schváliť nové články"; // NTR
$lang['Approve_new_explain'] = "Zmeniť, či <b/>nové</b/> články musia byť schválené alebo nie"; // NTR
$lang['Approve_edit_name'] = "Schváliť upravené články"; // NTR
$lang['Approve_edit_explain'] = "Zmeniť, či <b/>upravené</b/> články musia byť schválené alebo nie"; // NTR
$lang['Del_topic'] = "Vymazať tému"; // NTR
$lang['Del_topic_explain'] = "Keď vymažete článok, chcete tiež vymazať jeho komentáre?"; // NTR
$lang['Use_comments'] = "Komentáre"; // NTR
$lang['Use_comments_explain'] = "Povoliť komentovanie článkov, ktoré budú vložené do fóra phpBB"; // NTR
$lang['Use_ratings'] = "Hodnotenia"; // NTR
$lang['Use_ratings_explain'] = "Povoliť hodnotenia článkov"; // NTR
$lang['Forum_id'] = "ID fóra"; // NTR
$lang['Forum_id_explain'] = "Toto je fórum, v ktorom budú ponechané komentáre k článku."; // NTR

//
// Permissions
//
$lang['KB_Auth_Title'] = "Povolenia BZ"; // NTR
$lang['KB_Auth_Explain'] = "Tu si môžete zvoliť, ktoré používateľské skupiny môžu moderovať akú kategóriu BZ alebo mať len súkromný prístup."; // NTR
$lang['Select_a_Category'] = "Vybrať kategóriu"; // NTR
$lang['Look_up_Category'] = "Vyhľadať kategóriu"; // NTR
$lang['KB_Auth_successfully'] = "Autentifikácia bola úspešne aktualizovaná."; // NTR
$lang['Click_return_KB_auth'] = "Kliknite %ssem pre návrat k Povoleniam BZ%s."; // NTR
$lang['Upload'] = "Nahrať"; // NTR
$lang['Approval'] = "Schválenie"; // NTR
$lang['Approval_edit'] = "Upraviť schválenie"; // NTR
$lang['Allow_rating'] = "Povoliť hodnotenia"; // NTR
$lang['Allow_rating_explain'] = "Používatelia môžu hodnotiť články.";
$lang['Allow_anonymos_rating'] = "Povoliť anonymné hodnotenia"; // NTR
$lang['Allow_anonymos_rating_explain'] = "Pokiaľ sú aktivované hodnotenia, umožniť anonymným používateľom pridávať hodnotenia k vašim článkom."; // NTR
$lang['KB_config_updated'] = "Konfigurácia Bázy znalostí bola úspešne aktualizovaná."; // NTR
$lang['KB_notify_subject_new'] = "Nový článok!";
$lang['KB_notify_subject_edited'] = "Upravený článok!";
$lang['KB_notify_subject_approved'] = "Schválený článok!";
$lang['KB_notify_subject_unapproved'] = "Zrušené schválenie článku!";
$lang['KB_notify_body'] = "Článok bol odoslaný alebo upravený:";
$lang['Category_Permissions'] = "Povolenia kategórie"; // NTR
$lang['Category_Title'] = "Názov kategórie";
$lang['Category_Desc'] = "Popis kategórie";
$lang['View_level'] = "Zobraziť úroveň";
$lang['Upload_level'] = "Úroveň nahratia";
$lang['Rate_level'] = "Úroveň hodnotenia";
$lang['Comment_level'] = "Úroveň komentárov";
$lang['Edit_level'] = " Upraviť úroveň";
$lang['Delete_level'] = "Vymazať úroveň";
$lang['Approval_level'] = "Úroveň schválenia";
$lang['Approval_edit_level'] = "Úroveň úpravy schválenia";
$lang['KB_Rules_post_can'] = "V tejto kategórii <b>môžete</b> pridávať nové články.";
$lang['KB_Rules_post_cannot'] = "V tejto kategórii <b>nemôžete</b> pridávať nové články.";
$lang['KB_Rules_comment_can'] = "V tejto kategórii <b>môžete</b> komentovať články.";
$lang['KB_Rules_comment_cannot'] = "V tejto kategórii <b>nemôžete</b> komentovať články.";
$lang['KB_Rules_edit_can'] = "V tejto kategórii <b>môžete</b> upravovať vaše články.";
$lang['KB_Rules_edit_cannot'] = "V tejto kategórii <b>nemôžete</b> upravovať vaše články.";
$lang['KB_Rules_delete_can'] = "V tejto kategórii <b>môžete</b> mazať vaše články.";
$lang['KB_Rules_delete_cannot'] = "V tejto kategórii <b>nemôžete</b> mazať vaše články.";
$lang['KB_Rules_rate_can'] = "V tejto kategórii <b>môžete</b> hodnotiť články.";
$lang['KB_Rules_rate_cannot'] = "V tejto kategórii <b>nemôžete</b> hodnotiť články.";
$lang['KB_Rules_approval_can'] = "Články v tejto kategórii <b>nepotrebujú</b> schválenie.";
$lang['KB_Rules_approval_cannot'] = "Články v tejto kategórii <b>potrebujú</b> schválenie.";
$lang['KB_Rules_approval_edit_can'] = "Úpravy článkov v tejto kategórii <b>nepotrebujú</b> schválenie.";
$lang['KB_Rules_approval_edit_cannot'] = "Úpravy článkov v tejto kategórii <b>potrebujú</b> schválenie.";
$lang['KB_Rules_moderate'] = "<b>Môžete</b> %túto kategóriu moderovať%s."; // %s replaced by a href links, do not remove!
$lang['KB_Rules_moderate_can'] = "<b>Môžete</b> túto kategóriu moderovať.";
$lang['Comments_show'] = "Zobraziť komentáre k článku.";
$lang['Comments_show_explain'] = "- tiež sa zobrazia komentáre na stránke článku";
$lang['Comments_show_title'] = "Komentáre používateľov";
$lang['Mod_group'] = "Moderátor skupiny BZ"; // NTR
$lang['Mod_group_explain'] = "- s povoleniami správcu BZ!"; // NTR
$lang['Stats_list'] = "Zobraziť štatistiky BZ"; // NTR
$lang['Stats_list_explain'] = "Zobraziť v hlavičke štatistiky BZ."; // NTR
$lang['Header_banner'] = "Zobraziť vrchné logo"; // NTR
$lang['Header_banner_explain'] = "Zobraziť logo BZ v hlavičke."; // NTR
$lang['Comment_info'] = "Nastavenia komentárov"; // NTR
$lang['Rating_info'] = "Nastavenia hodnotení"; // NTR

// types
$lang['Types_man'] = "Správa typov"; // NTR
$lang['KB_types_description'] = "Tu môžete pridávať, mazať a upravovať rôzne typy článkov."; // NTR
$lang['Create_type'] = "Vytvoriť nový typ článku:"; // NTR
$lang['Type_created'] = "Typ článku bol úspešne vytvorený."; // NTR
$lang['Click_return_type_manager'] = "Kliknite %ssem pre návrat do Správy typov%s."; // NTR
$lang['Edit_type'] = "Upraviť typ"; // NTR
$lang['Edit_type_description'] = "Tu môžete upraviť názov typu."; // NTR
$lang['Type_edited'] = "Typ článku bol úspešne upravený."; // NTR
$lang['Type_delete_title'] = "Vymazať typ článku"; // NTR
$lang['Type_delete_desc'] = "Tu môžete zmeniť, aký má byť nový typ článku pre články, ktorých typ práve mažete."; // NTR
$lang['Change_type'] = "Zmeniť typ článku na"; // NTR
$lang['Change_and_Delete'] = "Zmeniť a vymazať"; // NTR
$lang['Type_deleted'] = "Typ článku bol úspešne vymazaný."; // NTR
$lang['Pre_text_name'] = "Inštrukcie pre odoslanie článku"; // NTR
$lang['Pre_text_header'] = "Hlavička inštrukcií pre odoslanie článku"; // NTR
$lang['Pre_text_body'] = "Telo inštrukcií pre odoslanie článku"; // NTR
$lang['Pre_text_explain'] = "Toto sú textové inštrukcie, ktoré sa používateľom zobrazia v hornej časti fóra pre odoslanie."; // NTR
$lang['Show'] = "Zobraziť"; // NTR
$lang['Hide'] = "Skryť"; // NTR
$lang['Empty_fields'] = "Vyplňte, prosím, všetky časti formulára.";
$lang['Back_button'] = "Použite tlačidlo 'naspäť' pre návrat do formulára.";
$lang['Empty_fields_return'] = "Kliknite %ssem pre návrat do formulára%s.";
$lang['Empty_category'] = "Musíte si vybrať kategóriu.";
$lang['Empty_type'] = "Musíte si zvoliť typ.";
$lang['Empty_article_name'] = "Musíte vyplniť názov článku.";
$lang['Empty_article_desc'] = "Musíte vyplniť popis článku.";
$lang['Read_full_article'] = ">>Čítať celý článok";
$lang['No_add'] = "Nemôžete pridať nový článok.";
$lang['No_edit'] = "Nemôžete tento článok upraviť!";
$lang['Post_comments'] = "Pridať komentáre";
$lang['Category_sub'] = "Podkategórie";
$lang['Quick_stats'] = "Rýchle štatistiky";

// added
$lang['Edited_Article_info'] = "Článok aktualizoval(a) ";
$lang['No_Articles'] = "Táto kategória je prázdna!";
$lang['Not_authorized'] = "Prepáčte, nemáte povolenia!";
$lang['TOC'] = "Obsah";

// Rate
$lang['Votes_label'] = "Hodnotenie "; // NTR
$lang['Votes'] = "hlas(ov)"; // NTR
$lang['No_votes'] = "Žiadne hlasy"; // NTR
$lang['Rate'] = "Ohodnotiť článok"; // NTR
$lang['ADD_RATING'] = "[ohodnotiť článok]"; // NTR
$lang['Rerror'] = "Prepáčte, ale už ste tento článok ohodnotili."; // NTR
$lang['Rateinfo'] = "Chystáte sa ohodnotiť článok <i>{filename}</i>.<br />Vyberte si hodnotenie. 1 je najhoršie, 10 je najlepšie."; // NTR
$lang['Rconf'] = "Súboru <i>{filename}</i> ste dali hodnotenie {rate}.<br />Týmto je nové hodnotenie súboru {newrating}/10."; // NTR
$lang['R1'] = "1"; // NTR
$lang['R2'] = "2"; // NTR
$lang['R3'] = "3"; // NTR
$lang['R4'] = "4"; // NTR
$lang['R5'] = "5"; // NTR
$lang['R6'] = "6"; // NTR
$lang['R7'] = "7"; // NTR
$lang['R8'] = "8"; // NTR
$lang['R9'] = "9"; // NTR
$lang['R10'] = "10"; // NTR
$lang['Click_return_rate'] = "Kliknite %ssem pre návrat do článku%s.";


// Print version
$lang['Print_version'] = "[verzia pre tlač]";

// Stats
$lang['Top_toprated'] = "Najlepšie hodnotené články";
$lang['Top_most_popular'] = "Najpopulárnejšie";
$lang['Top_latest'] = "Najnovšie články";

// Votes check
$lang['Votes_check_ip'] = "Validovať hodnotenia - ip";
$lang['Votes_check_ip_explain'] = "Je povolený iba jeden hlas na IP adresu.";
$lang['Votes_check_userid'] = "Validovať hodnotenia - používateľ";
$lang['Votes_check_userid_explain'] = "Používatelia môžu hlasovať iba raz.";
$lang['Article_pag'] = "Stránkovanie článku";
$lang['Article_pag_explain'] = "Počet článkov, ktoré sa zobrazia v kategórii (štatistiky) pred stránkovaním.";
$lang['Comments_pag'] = "Stránkovanie komentárov";
$lang['Comments_pag_explain'] = "Počet komentárov, ktoré sa zobrazia pre článok pred stránkovaním.";
$lang['News_sort'] = "Spôsob zoradenia článkov";
$lang['News_sort_explain'] = "Definujte, ako sa majú v rámci kategórie zoradzovať články.";
$lang['News_sort_par'] = "Zoraďovanie vzostupne alebo zostupne";
$lang['News_sort_par_explain'] = ""; // NTR

//
// General strings from the news admin panel
//
$lang['News_settings'] = "Nastavenia bloku BZ";
$lang['News_settings_short_explain'] = "Môžete nakonfigurovať niektoré možnosti pre novinky na prvej stránke.";
$lang['News_settings_explain'] = "Tu môžete upraviť konfiguráciu pre blok BZ. Tento panel vám dovolí extrahovať, ktoré kategórie sa zobrazia v bloku. Teda vytvoríte podinštancie modulu.";

//
// Update result messages
//
$lang['News_updated_return_settings'] = "Konfigurácia bloku BZ bola úspešne aktualizovaná.<br /><br />Kliknite %ssem pre návrat na hlavnú stránku%s."; // %s's for URI params - DO NOT REMOVE
$lang['News_update_error'] = "Nie je možné aktualizovať konfiguráciu bloku BZ.<br/><br/>Táto modifikácia je navrhnutá pre MySQL, takže kontaktujte, prosím, autora, ak máte problémy. Pokiaľ viete ponúknuť preklad SQL do iných databázových formátov, pošlite ich, prosím, na:<br/>";

// Custom Field
$lang['Fieldselecttitle'] = "Vyberte, čo spraviť";
$lang['Afield'] = "Vlastné pole: pridať";
$lang['Efield'] = "Vlastné pole: upraviť";
$lang['Dfield'] = "Vlastné pole: vymazať";
$lang['Mfieldtitle'] = "Vlastné polia";
$lang['Afieldtitle'] = "Pridať pole";
$lang['Efieldtitle'] = "Upraviť pole";
$lang['Dfieldtitle'] = "Vymazať pole";
$lang['Fieldexplain'] = "Sekciu pre správu vlastných polí môžete použiť na pridávanie, úpravu a mazanie vlastných polí. Tiež môžete použiť vlastné polia na pridávanie ďalších informácií o článku.";
$lang['Fieldname'] = "Názov poľa";
$lang['Fieldnameinfo'] = "Toto je názov poľa, napríklad 'veľkosť súboru'.";
$lang['Fielddesc'] = "Popis poľa";
$lang['Fielddescinfo'] = "Toto je popis poľa, napríklad 'veľkosť súboru v megabajtoch'.";
$lang['Fieldadded'] = "Vlastné pole bolo úspešne pridané.";
$lang['Fieldedited'] = "Vlastné pole, ktoré ste vybrali, bolo úspešne upravené.";
$lang['Dfielderror'] = "Nevybrali ste si žiadne polia na vymazanie.";
$lang['Fieldsdel'] = "Vlastné polia, ktoré ste vybrali, boli úspešne vymazané.";
$lang['Field_data'] = "Možnosti";
$lang['Field_data_info'] = "Zadajte možnosti, z ktorých si môže používateľ vybrať. Každú možnosť oddeľte novým riadkom (CR).";
$lang['Field_regex'] = "Regulárny výraz";
$lang['Field_regex_info'] = "Môžete vyžadovať, aby sa vstupné pole zhodovalo s regulárnym výrazom %s(PCRE)%s.";
$lang['Field_order'] = "Poradie zobrazenia";

//Fields Types
$lang['Field_Input'] = "Jednoriadkový textový panel"; // NTR
$lang['Field_Textarea'] = "Mnohoriadkový textový panel"; // NTR
$lang['Field_Radio'] = "Prepínače (radio buttons) s jedným výberom"; // NTR
$lang['Field_Select'] = "Menu s jedným výberom"; // NTR
$lang['Field_Select_multiple'] = "Menu s viacerými výbermi"; // NTR
$lang['Field_Checkbox'] = "Zaškrtávacie políčko s viacerými výbermi"; // NTR
$lang['Click_return'] = "Kliknite %ssem pre návrat na predchádzajúcu stránku%s.";

// added
$lang['Cat_all'] = "Všetky";
$lang['L_Pages'] = "Stránky";
$lang['L_Pages_explain'] = "Použite príkaz '[pages]' na rozdelenie článku na stránky.";
$lang['L_Toc'] = "Obsah (TOC)";
$lang['L_Toc_explain'] = "Použite príkaz '[toc]' na pridanie záznamu do obsahu.";
$lang['L_Abstract'] = "Abstrakt";
$lang['L_Abstract_explain'] = "Použite prostredie '[abstract]...[/abstract]' na vloženie abstraktu.";
$lang['L_Title_Format'] = "Nadpis";
$lang['L_Title_Format_explain'] = "Použite prostredie '[title]...[/title]' na vloženie hlavného nadpisu.";
$lang['L_Subtitle_Format'] = "Podnadpis";
$lang['L_Subtitle_Format_explain'] = "Použite prostredie '[subtitle]...[/subtitle]' na vloženie podnadpisu.";
$lang['L_Subsubtitle_Format_explain'] = "Použite prostredie '[subsubtitle]...[/subsubtitle]' na vloženie malej hlavičky.";
$lang['Default_article_id'] = "Nastavte predvolený článok pre zobrazovač obrázkov.";

// Added for v. 2.0
$lang['KB_comment_prefix'] = "[ BZ ] "; // NTR
$lang['Wysiwyg'] = "Použiť wysiwyg editor"; // NTR
$lang['Wysiwyg_explain'] = "Pokiaľ to je povolené, štandardný vstupný dialóg pre bbcode/html/emotikony sa nahradí wysiwyg editorom."; // NTR
$lang['Wysiwyg_path'] = "Cesta k wysiwyg softvéru"; // NTR
$lang['Wysiwyg_path_explain'] = "Toto je cesta (z koreňového adresára mxBB/phpBB) k priečinku s wysiwyg softvérom, napr. 'modules/', ak ste nahrali povedzme tinemce do modules/tinymce."; // NTR
$lang['Formatting_fixup'] = "Opraviť formátovanie"; // NTR
$lang['Formatting_fixup_explain'] = "Pokiaľ je povolené, text článku sa preformátuje: zalamovanie slov, skrátenie url adries, zmena veľkosti obrázka, preformátovanie bbcode, atď."; // NTR
$lang['Addtional_field'] = "Viac informácií (voliteľné)";
$lang['No_cat_comments_forum_id'] = "Komentáre sú povolené, ale neurčili ste cieľovú kategóriu fóra phpBB v ovládacom paneli správcu BZ, časti Kategórie."; // NTR

// Quick Nav
$lang['Quick_jump'] = "Prejsť";

?>