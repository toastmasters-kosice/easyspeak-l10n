<?php
/**
*
* attachment mod main [Slovak]
*
* @package attachment_mod
* @version $Id: lang_main_attach.php,v 1.1 2005/11/05 10:25:02 acydburn Exp $
* @copyright (c) 2002 Meik Sievertsen
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!isset($lang) || !is_array($lang))
{
        $lang = array();
}

//
// Attachment Mod Main Language Variables
//

// Auth Related Entries
$lang['Rules_attach_can'] = "V tomto fóre <b>môžete</b> prikladať súbory.";
$lang['Rules_attach_cannot'] = "V tomto fóre <b>nemôžete</b> prikladať súbory.";
$lang['Rules_download_can'] = "V tomto fóre <b>môžete</b> sťahovať súbory.";
$lang['Rules_download_cannot'] = "V tomto fóre <b>nemôžete</b> sťahovať súbory.";
$lang['Sorry_auth_view_attach'] = "Prepáčte, ale nemáte povolenia zobraziť si alebo stiahnuť túto prílohu.";

// Viewtopic -> Display of Attachments
$lang['Description'] = "Popis"; // used in Administration Panel too...
$lang['Downloaded'] = "Stiahnuté";
$lang['Download'] = "Stiahnuť"; // this Language Variable is defined in lang_admin.php too, but we are unable to access it from the main Language File
$lang['Filesize'] = "Veľkosť súboru";
$lang['Viewed'] = "Zobrazené";
$lang['Download_number'] = "%d-krát"; // replace %d with count
$lang['Extension_disabled_after_posting'] = "Rozšírenie '%s' bolo deaktivované správcom fóra. Z tohto dôvodu sa príloha nezobrazuje."; // used in Posts and PM's, replace %s with mime type

// Posting/PM -> Initial Display
$lang['Attach_posting_cp'] = "Ovládací panel pre pridávanie prílohy";
$lang['Attach_posting_cp_explain'] = "Ak kliknete na <b>Pridať</b> prílohu, uvidíte panel pre pridávanie príloh.<br/>Ak kliknete na <b>Pridané</b> prílohy, uvidíte zoznam už priložených súborov a budete ich môcť upravovať.<br/>Pokiaľ chcete prílohu <b>Nahradiť</b>, musíte do panelu Pridať prílohu zadať názov súboru a následne kliknúť v paneli Pridané prílohy na tlačidlo Nahrať novú verziu u tej prílohy, ktorú chcete aktualizovať.";

// Posting/PM -> Posting Attachments
$lang['Add_attachment'] = "Pridať prílohu";
$lang['Add_attachment_title'] = "Pridať prílohu";
$lang['Add_attachment_explain'] = "Pokiaľ nechcete pridať prílohu k vášmu príspevku, nechajte pole prázdne.";
$lang['File_name'] = "Názov súboru";
$lang['File_comment'] = "Komentár k súboru";

// Posting/PM -> Posted Attachments
$lang['Posted_attachments'] = "Pridané prílohy";
$lang['Update_comment'] = "Aktualizovať komentár";
$lang['Delete_attachments'] = "Vymazať prílohy";
$lang['Delete_attachment'] = "Vymazať prílohu";
$lang['Delete_thumbnail'] = "Vymazať miniatúru";
$lang['Upload_new_version'] = "Nahrať novú verziu";

// Errors -> Posting Attachments
$lang['Invalid_filename'] = "%s je neplatný názov súboru."; // replace %s with given filename
$lang['Attachment_php_size_na'] = "Príloha je príliš veľká.<br/>Nie je možné zistiť najväčšiu veľkosť definovanú v PHP.<br/>Modifikácia pre prílohy nemôže určiť najväčšiu veľkosť pre nahratie definovanú v súbore php.ini.";
$lang['Attachment_php_size_overrun'] = "Príloha je príliš veľká.<br/>Najväčšia veľkosť pre nahratie: %d MB.<br/>Berte na vedomie, že táto veľkosť je definovaná v súbore php.ini. To znamená, že ju nastavuje priamo PHP a modifikácia pre prílohy túto hodnotu nemôže prenastaviť."; // replace %d with ini_get('upload_max_filesize')
$lang['Disallowed_extension'] = "Prípona %s nie je povolená."; // replace %s with extension (e.g. .php)
$lang['Disallowed_extension_within_forum'] = "V tomto fóre nemáte dovolené pridávať súbory s príponou %s."; // replace %s with the Extension
$lang['Attachment_too_big'] = "Príloha je príliš veľká.<br/>Najväčšia veľkosť: %d %s"; // replace %d with maximum file size, %s with size var
$lang['Attach_quota_reached'] = "Prepáčte, ale bola dosiahnutá najväčšia veľkosť súboru pre všetky prílohy. Pokiaľ máte otázky, kontaktujte správcu fóra.";
$lang['Too_many_attachments'] = "Prílohu nie je možné pridať, pretože v tomto príspevku bol dosiahnutý najväčší počet %d príloh."; // replace %d with maximum number of attachments
$lang['Error_imagesize'] = "Príloha/obrázok musia byť užšie ako %d pixelov a nižšie ako %d pixelov.";
$lang['General_upload_error'] = "Chyba pri nahrávaní: Nie je možné nahrať prílohu do %s."; // replace %s with local path

$lang['Error_empty_add_attachbox'] = "Musíte do panelu 'Pridať prílohu' zadať hodnoty.";
$lang['Error_missing_old_entry'] = "Nie je možné aktualizovať prílohu, pretože sa nenašiel záznam s pôvodnou prílohou.";

// Errors -> PM Related
$lang['Attach_quota_sender_pm_reached'] = "Prepáčte, ale bola dosiahnutá najväčšia veľkosť pre všetky prílohy v priečinku súkromných správ. Vymažte niektoré prijaté/odoslané prílohy.";
$lang['Attach_quota_receiver_pm_reached'] = "Prepáčte, ale bola dosiahnutá najväčšia veľkosť súboru pre všetky prílohy v priečinku súkromných správ, '%s'. Dajte mu/jej o tom, prosím, vedieť, alebo čakajte, kým nevymaže niektoré prílohy.";

// Errors -> Download
$lang['No_attachment_selected'] = "Nevybrali ste žiadnu prílohu pre stiahnutie alebo zobrazenie.";
$lang['Error_no_attachment'] = "Vybraná príloha už viac neexistuje.";

// Delete Attachments
$lang['Confirm_delete_attachments'] = "Skutočne chcete vymazať vybrané prílohy?";
$lang['Deleted_attachments'] = "Vybrané prílohy boli vymazané.";
$lang['Error_deleted_attachments'] = "Nie je možné vymazať prílohy.";
$lang['Confirm_delete_pm_attachments'] = "Skutočne chcete vymazať všetky prílohy pridané v tejto súkromnej správe?";

// General Error Messages
$lang['Attachment_feature_disabled'] = "Funkcionalita pre prílohy je zakázaná.";

$lang['Directory_does_not_exist'] = "Adresár '%s' neexistuje alebo nie je možné ho nájsť."; // replace %s with directory
$lang['Directory_is_not_a_dir'] = "Skontrolujte, či je '%s' adresár."; // replace %s with directory
$lang['Directory_not_writeable'] = "Do adresára '%s' nie je možné zapisovať. Aby ste mohli nahrať súbory, budete musieť vytvoriť cestu pre nahratie a nastaviť jej práva pomocou chmod na 777 (alebo zmeňte vlastníka na toho, ktorý spravuje httpd-servers).<br/>Pokiaľ máte iba obyčajný ftp-access, zmeňte 'atribút' v adresári na rwxrwxrwx."; // replace %s with directory

$lang['Ftp_error_connect'] = "Nie je možné sa pripojiť na FTP server: '%s'. Skontrolujte si nastavenia FTP.";
$lang['Ftp_error_login'] = "Nie je možné sa prihlásiť na FTP server. Používateľské meno '%s' alebo heslo nie sú správne. Skontrolujte si nastavenia FTP.";
$lang['Ftp_error_path'] = "Nie je možné pristupovať do FTP adresára: '%s'. Skontrolujte si nastavenia FTP.";
$lang['Ftp_error_upload'] = "Nie je možné nahrávať súbory do FTP adresára: '%s'. Skontrolujte si nastavenia FTP.";
$lang['Ftp_error_delete'] = "Nie je možné vymazať súbory v FTP adresári: '%s'. Skontrolujte si nastavenia FTP.<br/>Ďalším dôvodom pre túto chybu môže byť neexistujúca príloha. Najprv si to skontrolujte v Tieňových prílohách.";
$lang['Ftp_error_pasv_mode'] = "Unable to enable/disable FTP Passive Mode";

// Attach Rules Window
$lang['Rules_page'] = "Pravidlá prílohy";
$lang['Attach_rules_title'] = "Povolené skupiny prípon a ich veľkosti";
$lang['Group_rule_header'] = "%s -> Najväčšia veľkosť pre nahratie: %s"; // Replace first %s with Extension Group, second one with the Size STRING
$lang['Allowed_extensions_and_sizes'] = "Povolené prílohy a veľkosti";
$lang['Note_user_empty_group_permissions'] = "POZNÁMKA:<br/>Za bežných okolností môžete v tomto fóre prikladať súbory, <br/>ale keďže nie je povolená žiadna skupina prípon, <br/>nemôžete priložiť nič. Ak sa o to pokúsite, <br/>dostanete chybovú správu.<br/>";

// Quota Variables
$lang['Upload_quota'] = "Kvóta pre nahrávanie";
$lang['Pm_quota'] = "Kvóta SS";
$lang['User_upload_quota_reached'] = "Prepáčte, ale dosiahli ste horný limit kvóty pre nahrávanie, %d %s"; // replace %d with Size, %s with Size Lang (MB for example)
$lang['Club_upload_quota_reached'] = "Prepáčte, ale dosiahli ste horný limit kvóty pre nahrávanie klubu, %d %s"; // replace %d with Size, %s with Size Lang (MB for example)

// User Attachment Control Panel
$lang['User_acp_title'] = "Používateľský OPP";
$lang['UACP'] = "Používateľský ovládací panel pre prílohy";
$lang['User_uploaded_profile'] = "Nahrané: %s";
$lang['User_quota_profile'] = "Kvóta: %s";
$lang['Upload_percent_profile'] = "%d%% celkovo";

// Common Variables
$lang['Bytes'] = "bajtov";
$lang['KB'] = "KB";
$lang['MB'] = "MB";
$lang['Attach_search_query'] = "Hľadať prílohy";
$lang['Test_settings'] = "Testovať nastavenia";
$lang['Not_assigned'] = "Nepriradené";
$lang['No_file_comment_available'] = "Nie je k dispozícii žiadny komentár k súboru.";
$lang['Attachbox_limit'] = "Vaša schránka príloh je na %d%% plná.";
$lang['No_quota_limit'] = "Žiadna kvóta";
$lang['Unlimited'] = "Neobmedzené";

?>