<?php
/***************************************************************************
 * Filename:          lang_import.php
 * Description:       Import Tools Langauge File
 * Author:            Graham Eames (phpbb@grahameames.co.uk)
 * Last Modified:     28-Feb-2004
 * File Version:      1.0
 *
 ***************************************************************************/
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}

// Error Messages
$lang['import_file_missing'] = "Súbor sa nenašiel.";
$lang['import_file_missing_details'] = "Súbor %s sa nenašiel."; // e.g. "The members.csv file was not found"
$lang['import_error_user_id'] = "Nie je možné získať informácie o ďalšom user_id.";
$lang['error_user_m'] = "Chýba meno používateľa.";
$lang['error_user_d'] = "Duplicitné meno používateľa.";
$lang['error_user_n'] = "Meno používateľa neexistuje.";
$lang['error_user_l'] = "Používateľské meno musí byť kratšie ako 25 znakov, nesmie obsahovať '@' ani celé priezvisko.";
$lang['error_email'] = "Neplatná e-mailová adresa.";
$lang['GDPR_error_email'] = "Kvôli ochrane údajov sa vyžaduje fungujúci e-mail.";
$lang['error_insert'] = "Nie je možné pridať záznam.";
$lang['error_insert_c'] = "Nie je možné pridať klubový záznam.";
$lang['error_email_m'] = "E-mail sa nezhoduje.";
$lang['error_name_m'] = "Mená sa nezhodujú.";
$lang['error_name1'] = "Chýba krstné meno.";
$lang['error_name2'] = "Chýba priezvisko.";
$lang['error_password'] = "Chýba heslo.";
$lang['blank'] = "(prázdne)";
$lang['Bad_upload_size'] = "Nesprávna veľkosť súboru pre nahratie.";
$lang['No_file'] = "Vyberte si súbor pre nahratie.";
$lang['No_status'] = "Vyberte postavenie pre týchto používateľov.";
$lang['Not_allowed_type'] = "Nahrávaný súbor MUSÍ byť .CSV alebo .XLS (Klub-Členstvo-Zoznam).";
$lang['Error_user'] = "Neplatné meno používateľa.";
$lang['Error_date'] = "Neplatný dátum prejavu.";
$lang['Error_evaluator'] = "Neplatný hodnotiteľ.";
$lang['Error_assigned'] = "Prejav už je priradený.";
$lang['Error_task'] = "Nepl. cvič. alebo zadanie"; // Must be SHORT 25 char max.
$lang['Error_dup'] = "Prejav už je v súbore.";
$lang['Error_joined'] = "Neplatný dátum pridania.";

// Information Messages
$lang['import_complete'] = "Importovanie dokončené.";
$lang['Processing_complete'] = "Spracovanie dokončené.";
$lang['import_errors'] = "%d riadkov obsahovalo chyby a neboli importované.";
$lang['import_complete_members'] = "%d členov bolo úspešne importovaných.";
$lang['Import_complete_speeches'] = "%d prejavov bolo úspešne importovaných.";
$lang['Import_complete_officers'] = "%d vedúcich bolo úspešne importovaných.";
$lang['import_in_progress'] = "Prebieha importovanie.";
$lang['import_in_progress_members'] = "Importovanie členov do systému stále prebieha. Kliknite na tlačidlo nižšie, aby ste mohli pokračovať s ďalšou dávkou členov.";
$lang['line'] = "Riadok %d : ";
$lang['No_meeting'] = "Nie v easy-Speaku";
$lang['Import_continue'] = "Fáza importovania bola dokončená - Skontrolujte si to a potvrďte, či chcete pokračovať.";
$lang['Records'] = "záznamov";

// Settings Messages - Members
$lang['import_settings'] = "Importovať nastavenia";
$lang['CSV_format'] = "Inštrukcie pre formátovanie CSV";
$lang['import_explain_csv'] = "Aby ste mohli nahrať .CSV súbor, vytvorte excelovský zošit vo formáte nižšie (bez hlavičky). Uložte ho ako .CSV súbor. Ďalšie inštrukcie a informácie nájdete v Báze znalostí.";
$lang['import_explain_members'] = "Tento nástroj vám umožní importovať zoznam používateľov alebo vytvoriť používateľské účty pre všetkých týchto členov vo vašom klube. Používateľov môžete importovať zo zoznamu členov TMI, exportovaného do .CSV z www.toastmasters.org, alebo z .CSV súboru vo vašom počítači.";
$lang['import_password_format'] = "Formát hesla";
$lang['import_password_format_explain'] = "Toto nastavenie určuje použitý formát hesla v súbore, ktorý importujeme.";
$lang['import_password_format_plain'] = "Obyčajný text";
$lang['import_password_format_md5'] = "MD5";
$lang['import_rate'] = "Rýchlosť importovania";
$lang['import_rate_explain'] = "Toto nastavenie určuje počet riadkov importovaných pri každom prechode súborom.";
$lang['import_start'] = "Začať importovanie";
$lang['Load_club_status'] = "Udeliť používateľom importovaným z tohto súboru postavenie";
$lang['Manual_entry'] = "Ručne zadať záznamy";
$lang['Name1_s'] = "Meno";
$lang['Bus_phone_s'] = "Telefón počas dňa";
$lang['Phone_s'] = "Telefon počas večera";
$lang['Joined_date'] = "01.03.2020"; // example date in your language
$lang['Upload_officer_file'] = "Vyberte zoznam vedúcich klubu pre nahratie do tohto dištriktu.";
$lang['upload_file'] = "Vyberte si pre nahratie stiahnutý zoznam z TMI alebo váš ručne vytvorený CSV súbor (pozrite si odkaz nižšie ohľadom formátu súboru) alebo zadajte informácie ručne.<br />Pokiaľ budete upravovať zoznam klubu z TMI, <b>MUSÍTE</b> zachovať hlavičky stĺpcov na prvom riadku.";
$lang['upload_s_file'] = "Vybrať súbor";
$lang['Number_format'] = "Môj počítač ukladá čísla v tomto formáte";
$lang['Number_format_explain'] = "Ak používate 'európsky' formát čísiel, Excel zmení znak použitý na <br>oddeľovanie polí z ',' na '.";
$lang['Number_format_explain2'] = "Vedzte, že ak používate 'európske' čísla, <b>musíte</b> použiť '>' pre nové riadky v adrese.";
$lang['Member_number'] = "TM číslo";
$lang['Tracks'] = "Ceny";
$lang['Import_explain_awards'] = "Použite tieto kódy pre ceny každého člena v rečníckych a vodcovských dráhach:";
$lang['Import_additional'] = "Sú k dispozícii dva voliteľné stĺpce:<br />&nbsp;&nbsp;Stĺpec M - adresa<br />&nbsp;&nbsp;Stĺpec N - PSČ.";
$lang['British'] = "Britský";
$lang['European'] = "Európsky";
$lang['Import_explain'] = "Obidve mená musia mať aspoň dva znaky. Používateľské mená musia mať 5-24 znakov a NEOBSAHOVAŤ celé priezvisko.<br>Heslá musia mať aspoň štyri znaky.";
$lang['Import_psswd'] = "NECHAJTE SI ZÁZNAM O POUŽÍVATEĽSKÝCH MENÁCH A HESLÁCH, aby ste tieto informácie mohli poskytnúť každému členovi.";

// Settings dual members import
$lang['import_explain_dual'] = "Tento nástroj vám umožní importovať zoznam členov, ktorí už používajú easy-Speak a vytvoriť používateľské účty pre týchto duálnych členov vášho klubu.<br />Meno používateľa musí existovať a zhodovať sa s menom, priezviskom a e-mailovou adresou.<br />Členovia budú importovaní z .CSV súboru vo vašom počítači, ktorý obsahuje záznamy vo formáte uvedenom nižšie a to bez hlavičky.<br />Ohľadom inštrukcií a ďalších informácií sa pozrite do Bázy znalostí.";

// Settings Messages - Speeches
$lang['Import_explain_speeches'] = "Tento nástroj vám umožní importovať zoznam prejavov, ktoré už členovia vášho klubu spravili. Prejavy budú importované z .CSV súboru vo vašom počítači, ktorý obsahuje záznamy vo formáte uvedenom nižšie a to bez hlavičky. V každom súbore pre importovanie môže byť NAJVIAC 100 riadkov.<br />Ohľadom inštrukcií a ďalších informácií sa pozrite do Bázy znalostí.";
$lang['Import_explain_workbook'] = "Tu je zoznam čísiel, ktoré sa použijú pre každú cvičebnicu:";
$lang['Imp_speeches'] = "Prejavy";
$lang['I_Assign'] = "Zad.";
$lang['Confirm_speeches'] = "Potvrdiť a spracovať tieto prejavy?";
$lang['Confirm_explain'] = "Stlačte 'Áno', aby sa spracovali platné riadky zobrazené vyššie alebo stlačte 'Nie' pre zrušenie tohto úkonu a vráťte sa sem neskôr, keď súbor opravíte.";

// Settings Messages - Club Officers
$lang['Import_explain_officers'] = "Tento nástroj vám umožní importovať zoznam vedúcich klubu poslaných TI. Vedúci budú importovaní z .CSV súboru vo vašom počítači, ktorý obsahuje záznamy vo formáte uvedenom v Báze znalostí. V každom súbore pre importovanie môže byť NAJVIAC 1500 riadkov, ale nič vám nebráni spraviť importovanie na niekoľkokrát, čím vytvoríte dátový súbor TMI.

Nastavte si vašu časovú zónu na správny čas toho dištriktu, ktorý bude spracovaný.

Vymažte zo súboru neaktuálne údaje.

Importujte TMI údaje z excelovského zošitu.
Spracujte a obmedzte prázdny kódy na nulu a potom spustite zostávajúce procesy za sebou.
Skontrolujte súbory so záznamom, aby ste našli problémy.

Používatelia budú pridávaní v dávkach po 50 - tento proces možno budete musieť zopakovať. Medzi každou dávkou trochu počkajte, aby ste sa vyhli problémom s e-mailovým serverom.

Ohľadom inštrukcií a ďalších informácií sa pozrite do Bázy znalostí.";       
$lang['Imp_officers'] = "Importovať vedúcich klubu";
$lang['Member_no'] = "Číslo člena";
$lang['Confirm_officers'] = "Potvrdiť a spracovať týchto vedúcich?";
$lang['Import_erase_previous'] = "Vymazať predchádzajúci nahraný TMI súbor";
$lang['Import_erase'] = "Vymazať";
$lang['Import_process_users'] = "Aktualizovať staré údaje o používateľoch a načítať nových";
$lang['Process_update'] = "Spracovať údaje";
$lang['Import_add'] = "Importovať vedúcich a PRIDA5 ich do súboru";
$lang['Import_process_1'] = "Spracovať aktualízácie o používateľoch a klube do TMI súboru";
$lang['Import_process_2'] = "Spracovať aktualizácie o používateľoch do hlavného súboru";
$lang['Import_process_3'] = "Pridať chýbajúcich používateľov (opakujte podľa potreby)";
$lang['Import_process_4'] = "Aktualizovať záznamy vedúcich";
$lang['Import_process_5'] = "Pridať chýbajúcich používateľov s rovnakým menom ako iný vedúci";
$lang['Import_process_6'] = "Pridať vedúcich do údajov klubu";
$lang['Import_process_9'] = "Vyčistiť chýbajúce e-mailové adresy a spraviť krížovú kontrolu";
$lang['Update_users'] = "Aktualizovať používateľov";
$lang['Add_users'] = "Pridať používateľov";
$lang['Clean_up'] = "Vyčistiť nesprávne údaje";
$lang['Add_double'] = "Pridať dvojako pomenovaných používateľov";
$lang['Update_officers'] = "Aktualizovať vedúcich";
$lang['Update_clubs'] = "Aktualizovať záznamy klubu";
$lang['Import_summary'] = "Súhrn údajov v hlavnom súbore klubu";
$lang['Import_blank'] = "Kluby bez TI čísla";
$lang['Log_users'] = "Zobraziť záznam používateľov";
$lang['Log_officers'] = "Zobraziť záznam vedúcich";
$lang['Log_clubs'] = "Zobraziť záznam klubov";
$lang['Log_unprocessed'] = "Zobraziť záznam o nespracovaných";
$lang['Log_update_u'] = "Zobraziť záznam o aktualizácii používateľov";
$lang['Log_update_o'] = "Zobraziť záznam o aktualizácii vedúcich";
$lang['Log_error'] = "Zobraziť chybový záznam";
$lang['Log_compare'] = "Zobraziť porovnávací zoznam";

?>