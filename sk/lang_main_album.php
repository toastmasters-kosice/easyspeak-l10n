<?php
/***************************************************************************
 *                          lang_main_album.php [Slovak]
 *                              -------------------
 *     begin                : Sunday, February 02, 2003
 *     copyright            : (C) 2003 Smartor
 *     email                : smartor_xp@hotmail.com
 *
 *     $Id: lang_main_album.php,v 1.0.6 2003/03/05 20:12:38 ngoctu Exp $
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
// Album Index
//
$lang['Photo_Album'] = "Fotoalbum";
$lang['Pics'] = "Obrázky";
$lang['Last_Pic'] = "Najnovší obrázok";
$lang['Public_Categories'] = "Verejné kategórie";
$lang['No_Pics'] = "Žiadne obrázky";
$lang['Users_Personal_Galleries'] = "Osobné galérie používateľov";
$lang['Your_Personal_Gallery'] = "Vaša osobná galéria";
$lang['Recent_Public_Pics'] = "Nedávne verejné obrázky";

$lang['View'] = "Pozreté";

//
// Category View
//
$lang['Category_not_exist'] = "Táto kategória neexistuje.";
$lang['Upload_Pic'] = "Nahrať obrázok";
$lang['Pic_Title'] = "Názov obrázka";

$lang['Album_upload_can'] = "V tejto kategórii <b>môžete</b> nahrávať nové obrázky.";
$lang['Album_upload_cannot'] = "V tejto kategórii <b>nemôžete</b> nahrávať nové obrázky.";
$lang['Album_rate_can'] = "V tejto kategórii <b>môžete</b> hodnotiť obrázky.";
$lang['Album_rate_cannot'] = "V tejto kategórii <b>nemôžete</b> hodnotiť obrázky.";
$lang['Album_comment_can'] = "V tejto kategórii <b>môžete</b> pridávať komentáre k obrázkom.";
$lang['Album_comment_cannot'] = "V tejto kategórii <b>nemôžete</b> pridávať komentáre k obrázkom.";
$lang['Album_edit_can'] = "V tejto kategórii <b>môžete</b> upravovať vaše obrázky a komentáre.";
$lang['Album_edit_cannot'] = "V tejto kategórii <b>nemôžete</b> upravovať vaše obrázky a komentáre.";
$lang['Album_delete_can'] = "V tejto kategórii <b>môžete</b> mazať vaše obrázky a komentáre.";
$lang['Album_delete_cannot'] = "V tejto kategórii <b>nemôžete</b> mazať vaše obrázky a komentáre.";
$lang['Album_moderate_can'] = "Túto kategóriu <b>môžete</b> %smoderovať%s.";
$lang['Pic_category'] = "Kategória fotky";
$lang['Pic_sub_category'] = "Podkategória";
$lang['Pic_comment'] = "Prejdite myšou nad obrázok, aby ste si prečítali popis alebo naňho kliknite, aby ste si ho pozreli v plnej veľkosti.";
$lang['Photo_Album_for'] = "Fotoalbum pre";
$lang['Unapproved'] = "(Nachádza sa tu %d obrázkov, ktoré boli nahrané a čakajú na schválenie)";
$lang['Unapproved_s'] = "(Nachádza sa tu jeden obrázok, ktorý bol nahraný a čaká na schválenie)";

$lang['Edit_pic'] = "Upraviť";
$lang['Delete_pic'] = "Vymazať";
$lang['Rating'] = "Hodnotenie";
$lang['New_Comment'] = "Nový komentár";

$lang['Not_rated'] = "<i>nehodnotený</i>";

//
// Upload
//
$lang['Pic_Desc'] = "Popis obrázka";
$lang['Plain_text_only'] = "Iba obyčajný text";
$lang['Desc_explain'] = "Keď používateľ presunie myš nad miniatúru obrázku, zobrazí sa tento popis.";
$lang['Max_length'] = "Najviac znakov";
$lang['Upload_pic_from_machine'] = "Nahrať obrázok z počítača";
$lang['Upload_to_Category'] = "Nahrať do kategórie";
$lang['Upload_thumbnail_from_machine'] = "Nahrať miniatúru obrázka z počítača (musí to byť rovnaký typ súboru ako váš obrázok)";
$lang['Upload_thumbnail'] = "Nahrať miniatúru obrázka";
$lang['Upload_thumbnail_explain'] = "Musí to byť rovnaký typ súboru ako váš obrázok.";
$lang['Thumbnail_size'] = "Veľkosť miniatúry (v pixeloch)";
$lang['Filetype_and_thumbtype_do_not_match'] = "Váš obrázok a jeho miniatúra musia byť rovnakého typu.";

$lang['Upload_no_title'] = "Musíte zadať názov vášho obrázka.";
$lang['Upload_no_file'] = "Musíte zadať cestu a názov súboru.";
$lang['Desc_too_long'] = "Váš popis je príliš dlhý.";

$lang['Max_file_size'] = "Najväčšia veľkosť súboru (v bajtoch)";
$lang['Max_width'] = "Najväčšia šírka obrázka (v pixeloch)";
$lang['Max_height'] = "Najväčšia výška obrázka (v pixeloch)";

$lang['JPG_allowed'] = "Je povolené nahrávať JPG súbory";
$lang['PNG_allowed'] = "Je povolené nahrávať PNG súbory";
$lang['GIF_allowed'] = "Je povolené nahrávať GIF súbory";

$lang['Album_reached_quota'] = "V tejto kategórii bola naplnená kvóta pre obrázky. Už ich viac nemôžete nahrať. Vymažte niektoré staré obrázky alebo pre viac informácií kontaktujte správcov.";
$lang['User_reached_pics_quota'] = "Naplnili ste kvótu pre obrázky. Už ich viac nemôžete nahrať. Pre viac informácií kontaktujte správcov.";

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- moved to language/lang_english/lang_multiple_album.php
//$lang['Bad_upload_file_size'] = "Váš nahraný súbor je príliš veľký alebo je poškodený.";
//--- Multiple File Upload mod : end
$lang['Not_allowed_file_type'] = "Tento typ súboru nie je povolený.";
$lang['Upload_image_size_too_big'] = "Rozmery vášho obrázka sú príliš veľké.";
$lang['Upload_thumbnail_size_too_big'] = "Rozmery vašej miniatúry sú príliš veľké.";

$lang['Missed_pic_title'] = "Musíte zadať názov vášho obrázka.";

//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- moved to language/lang_english/lang_multiple_album.php
//$lang['Album_upload_successful'] = "Váš obrázok bol úspešne nahraný.";
//$lang['Album_upload_need_approval'] = "Váš obrázok bol úspešne nahraný.<br /><br />Ale je povolená funkcia pre schvaľovanie obrázkov. Váš obrázok musí ešte pred zverejnením schváliť správca alebo moderátor.";
//--- Multiple File Upload mod : end
$lang['Click_return_category'] = "Kliknite %ssem pre návrat do kategórie%s.";
$lang['Click_load_another'] = "Kliknite %ssem pre nahratie ďalšieho obrázka%s.";
$lang['Click_return_album_index'] = "Kliknite %ssem pre návrat na register albumu%s.";

// View Pic
$lang['Pic_not_exist'] = "Takýto obrázok neexistuje.";

// Edit Pic
$lang['Edit_Pic_Info'] = "Upraviť informácie o obrázku";
$lang['Pics_updated_successfully'] = "Informácie o vašom obrázku boli úspešne aktualizované.";

// Delete Pic
$lang['Album_delete_confirm'] = "Skutočne chcete vymazať tieto obrázky?";
$lang['Pics_deleted_successfully'] = "Tieto obrázky boli úspešne vymazané.";

//
// ModCP
//
$lang['Approval'] = "Schválenie";
$lang['Approve'] = "Schváliť";
$lang['Unapprove'] = "Zrušiť schválenie";
$lang['Locked'] = "Uzamknuté";
$lang['Not_approved'] = "Neschválené";
$lang['Approved'] = "Schválené";
$lang['Move_to_Category'] = "Presunúť do kategórie";
$lang['Pics_moved_successfully'] = "Vaše obrázky boli úspešne presunuté.";
$lang['Pics_locked_successfully'] = "Vaše obrázky boli úspešne uzamknuté.";
$lang['Pics_unlocked_successfully'] = "Vaše obrázky boli úspešne odomknuté.";
$lang['Pics_approved_successfully'] = "Vaše obrázky boli úspešne schválené.";
$lang['Pics_unapproved_successfully'] = "Schválenie pre vaše obrázky bolo úspešne zrušené.";

//
// Rate
//
$lang['Current_Rating'] = "Aktuálne hodnotenie";
$lang['Please_Rate_It'] = "Ohodnoťte ho, prosím.";
$lang['Already_rated'] = "Tento obrázok ste už hodnotili.";
$lang['Album_rate_successfully'] = "Váš obrázok bol úspešne ohodnotený.";

//
// Comment
//
$lang['Comment_no_text'] = "Zadajte váš komentár.";
$lang['Comment_too_long'] = "Váš komentár je príliš dlhý.";
$lang['Comment_delete_confirm'] = "Skutočne chcete vymazať tento komentár?";
$lang['Pic_Locked'] = "Prepáčte, tento obrázok je uzamknutý a už sem viac nemôžete pridávať komentáre.";

//
// Personal Gallery
//
$lang['Personal_Gallery_Explain'] = "Môžete si pozrieť osobné galérie iných členov a to kliknutím na odkaz v ich profiloch.";
$lang['Personal_gallery_not_created'] = "Osobná galéria používateľa %s je prázdna alebo nebola vytvorená.";
$lang['Not_allowed_to_create_personal_gallery'] = "Prepáčte, správcovia tohto fóra vám nepovolili vytvoriť vašu osobnú galériu.";
$lang['Click_return_personal_gallery'] = "Kliknite %ssem pre návrat do osobnej galérie%s.";

//--- Admin configuration
//--- version : 1.0.0
$lang['Max_Files_To_Upload'] = "Najväčší počet súborov, ktoré môže naraz používateľ nahrať";
//--- version : 1.0.3
$lang['Album_upload_settings'] = "Nastavenia nahrávania albumu";
$lang['Max_pregenerated_fields'] = "Najväčší počet polí na predgenerovanie";
$lang['Dynamic_field_generation'] = "Povoliť dynamické pridávanie nahrávacích polí";
$lang['Pre_generate_fields'] = "Predgenerovať nahrávacie polia";
$lang['Propercase_pic_title'] = "Názov obrázka s veľkými začiatočnými písmenami, napr. <i>'Toto Je Názov Obrázka'</i><br>Ak túto voľbu nastavíte na 'NIE', bude výsledok <i>'Toto je názov obrázka'</i>.";


//--- Multiple File Upload mod : begin
//--- version : 1.0.3
//--- Upload page
//--- version : 1.0.1
$lang['Add_File'] = "Pridať súbor";
//--- version : 1.0.2
//--- NOTE : keep the <br> part of the messages PLEASE !
$lang['File_thumbnail_count_mismatch'] = "Počet nahrávaných obrázkov a miniatúr sa nezhoduje.";
$lang['No_thumbnail_for_picture_found'] = "Pre nahrávaný obrázok sa nenašla žiadna miniatúra (s názvom : %s)";
$lang['No_picture_for_thumbnail_found'] = "Pre nahrávanú miniatúru sa nenašiel žiadny obrázok (s názvom : %s)";
$lang['Unknown_file_and_thumbnail_error_mismatch'] = "Pri nahrávaní obrázka a miniatúry sa vyskytla neznáma chyba.<br>Obrázok má názov : %s a miniatúra má názov : %s<br>";
$lang['Picture_exceeded_maximum_size_INI'] = "Obrázok s názvom '%s' je príliš veľký. Obrázok bude vynechaný.<br>";
$lang['Thumbnail_exceeded_maximum_size_INI'] = "Miniatúra s názvom '%s' je príliš veľká. Obrázok a miniatúra budú vynechané.<br>"; ;
$lang['Execution_time_exceeded_skipping'] = "Bol prekročený najvyšší povolený čas na beh skriptu. Nasledujúce súbory boli vynechané:<br>";
$lang['Skipping_uploaded_picture_file'] = "%s<br/>";
$lang['Skipping_uploaded_picture_and_thumbnail_file'] = "%s (miniatúra: %s)<br/>";
$lang['Album_upload_not_successful'] = "Žiadny z vašich obrázkov nebol úspešne nahraný.<br/><br/>";
$lang['Album_upload_partially_successful'] = "Iba časť vašich obrázkov bola úspešne nahraná.<br/><br/>";
$lang['No_pictures_selected_for_upload'] = "Pre nahratie neboli vybrané žiadne obrázky alebo sa vyskytla neznáma chyba.";

$lang['Bad_upload_file_size'] = "Váš nahrávaný súbor (%s) je príliš veľký alebo poškodený.";

$lang['Album_upload_successful'] = "Vaše obrázky boli úspešne nahrané.";
$lang['Album_upload_need_approval'] = "Vaše obrázky boli úspešne nahrané a zobrazia sa po schválení správcom.";
$lang['Multi_file_explain'] = "Môžete naraz nahrať až %s súborov.";

?>