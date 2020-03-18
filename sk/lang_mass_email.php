<?php
if ( !defined('IN_PHPBB') )
{
        die("Hacking attempt");
}
// Added to Custom mass email
$lang['Agenda_email_count']= "Poslané %d používateľom, ktorí%s - v jazyku %s"; // %d substituted with the number of recipents, %s substituted with the language used
$lang['Mass_email_count']= "Poslané %d používateľom - v jazyku %s"; // %d substituted with the number of recipents, %s substituted with the language used
$lang['Mass_email_total']= "Celkovo poslané %d používateľom na %d e-mailov";
$lang['Mass_email_wrong']= "<b>POZOR</b> nasledujúci používatelia majú trvalé chyby v ich e-mailových adresách. Kontaktujte ich, aby si ich opravili <br/> %s";
$lang['Mass_email_none'] = "V tejto skupine nie sú žiadni používatelia s platnou e-mailovou adresou.";

$lang['Sendt_to']= "Toto je zoznam používateľov, ktorí%s ktorým bol poslaný e-mail v jazyku %s"; //%s is substituted with 'replied' etc and the users language
$lang['Send1_to']= "Toto je zoznam používateľov, ktorým bol poslaný e-mail v jazyku %s"; //%s is substituted with the users language
$lang['Mass_email_explain'] = "Tu môžete vytvoriť správu pre všetkých používateľov konkrétnej skupiny. Všetkým príjemcom sa pošle e-mail so slepou kópiou. <br/>Ak posielate e-mail veľkej skupine ľudí, majte po odoslaní trpezlivosť a nezastavujte stránku v polovici. Je normálne, že posielanie hromadných e-mailov trvá dlho. O tom, že skript skončil, budete informovaní.<br />E-mail sa posiela v dávkach.";
$lang['Compose'] = "Napísať";

$lang['Recipients'] = "Príjemcovia";
$lang['Gavel_clubs'] = "Zarhnúť kladivkové kluby";
$lang['Gavel_only'] = "Iba kladivkové kluby";
$lang['Status_clubs'] = "Zahrnúť aktívne/súhrnné kluby";
$lang['Active_status'] = "Iba aktívne kluby";
$lang['Summary_status'] = "Iba kluby so súhrnným postavením";
$lang['All_status'] = "Všetky kluby";
$lang['Precharter_clubs'] = "Zahrnúť budúce kluby";
$lang['Precharter_only'] = "Iba budúce kluby";
$lang['Nothing_to_send'] = 'Žiadna pošta na odoslanie.';

$lang['Mass_email_not_allowed'] = "Nemáte povolenia posielať hromadné e-maily žiadnym skupinám.";

// Club mass email
$lang['Mail_year']= "Aktuálni alebo nastávajúci vedúci?";
$lang['Club_email']= "Hromadný e-mail";
$lang['Both_years']= "Obidva roky";
$lang['Current']= "Aktuálni";
$lang['No_club_email']= "Buď vaše spojenie vypršalo ALEBO nemáte oprávnenia posielať hromadný e-mail pre túto organizáciu.";
$lang['Club_email_extra'] = "Za normálnych okolností by ste NEMALI posielať e-mail bývalým členom.";
$lang['M_status'] = "Postavenie členov";
$lang['M_stat_explain'] = "Ak je vyššie zvolená členská skupina - poslať tento e-mail členom, ktorých postavenie v klube je:";
$lang['No_status_selected'] = "Musíte vybrať aspoň jedno postavenie člena, ktoré dostane e-mail.<br />Použite tlačidlo 'naspäť' vo vašom prehliadači, aby ste sa vrátili na stránku pre výber pošty.";
$lang['No_data_selected'] = "Neboli vybrané žiadne údaje na prijatie e-mailu.<br />Použite tlačidlo 'naspäť' vo vašom prehliadači, aby ste sa vrátili na stránku pre výber pošty.";
$lang['No_country_selected'] = "Musíte vybrať aspoň jednu krajinu, ktorej sa pošlú e-maily.<br />Použite tlačidlo 'naspäť' vo vašom prehliadači, aby ste sa vrátili na stránku pre výber pošty.";
$lang['No_message'] = "Musíte zadať predmet a správu.<br />Použite tlačidlo 'naspäť' vo vašom prehliadači, aby ste sa vrátili na stránku pre výber pošty.";
$lang['No_subject_or_message'] = "Musíte zadať predmet a správu.";
$lang['M_officer_explain'] = "Vyberte si, či chcete poslať týmto vedúcim e-mail alebo vytlačiť pre nich menovky:";
$lang['No_spam'] = 'Nemôžete vašim starým kontaktom posielať nevyžiadanú poštu cez easy-Speak.<br>Buď znovu potvrďte e-mailové adresy a aktualizujte podrobnosti o kontakte, presuňte ľudí do príslušného postavenia alebo zmeňte váš výber pre poštu.';

$lang['Select_recip'] = "Vyberte príjemcov vašej správy";
$lang['Club_l_email']= "Poslať hromadný e-mail alebo vytlačiť menovky";
$lang['Org_email_explain'] = "Použite túto možnosť na poslanie e-mailu. Zadajte predmet a obsah vašej správy. Všetkým príjemcom sa odošle e-mail so slepou kópiou.<br />E-mail sa posiela v dávkach.<br />Ak posielate e-mail veľkej skupine ľudí, majte po odoslaní trpezlivosť a nezastavujte stránku v polovici. Je normálne, že posielanie hromadných e-mailov trvá dlho. O tom, že skript skončil, budete informovaní.";
$lang['Org_explain'] = "Urobte výber a následne stlačte tlačidlo E-mail alebo Vytvoriť menovky.";
$lang['System_mail'] = "Poslať ako systémovú poštu";
$lang['Send_c_link'] = "Zahrnúť odkaz na webovú stránku konferencie";
$lang['Replyto'] = "Odpovedať na";
$lang['Send_as'] = "Poslať ako tento používateľ";
$lang['Club_admin_setting'] = "Nastavenie správcu klubu";
$lang['No_user'] = "Nie je možné nájsť informácie pre požadovaného používateľa. Použite tlačidlo Naspäť a skúste to znovu.";

// Label generator
// added by Kit
$lang['Label_explain']= "Použite túto možnosť na vytvorenie menoviek vo forme pdf dokumentu. Po kliknutí na 'Vytvoriť menovky' uvidíte stránku s menovkami, ktorú si môžete uložiť alebo priamo vytlačiť. Je navrhnutá, aby používala Avery L7160 alebo ekvivalentné menovky.<br><b>VYPNITE všetky nastavenia typu 'Prispôsobiť stránke' </b>, keď budete posielať súbor do tlačiarne.";
$lang['Make_labels']= "Vytvoriť menovky";
$lang['L_officer_explain']= "Vytvoriť pre vybraných vedúcich menovku s adresou";
$lang['Label_maker']= "Tvorba menoviek";
$lang['Print_country'] = "Vytlačiť názov krajiny";
$lang['Print_blanks'] = "Vytlačiť meno, ak je adresa prázdna";
$lang['Print_email'] = "Vytlačiť, aj keď je e-mail platný";
$lang['Country_select'] = "Vybrať krajiny";
$lang['Label_select'] = "Vybrať";

// pdf generator
$lang['Pdf_explain'] = "Kliknite sem pre otvorenie/stiahnutie tejto stránky ako súboru pdf";

// COT email
$lang['COT_email_count']= "Poslané %d používateľom - v jazyku %s"; //%d substituted with the number of recipents, %s substituted with the language used
$lang['No_COT_email']= "Nie ste oprávnení posielať COT e-mail pre túto organizáciu.";
$lang['COT_resent'] = "OPRAVNÝ alebo DUPLICITNÝ e-mail";
$lang['COT_error'] = "Na tomto školení neboli žiadni účastníci?";
$lang['Another_district'] = "Pamätajte, že na školení boli účastníci z iného dištriktu - prepošlite, prosím, tento e-mail príslušnému vedúcemu.";
$lang['Attendance_COT'] = "Účasť na školení";
$lang['Attendance_message'] = "Nasledujúci vedúci klubu navštívili školenie, ktoré som organizoval(a) %s.";
$lang['Send_COT_email'] = "Poslať e-mail o školení";
$lang['COT_email_explain'] = "Táto obrazovka e-mailom oznámi vedeniu vášho dištriktu všetkých vedúcich klubu, ktorí sa tohto školenia zúčastnili.<br />Mená a podrobnosti o klube budú vyplnené automaticky, ale doprovodnú správu si môžete prispôsobiť.<br />Dostanete potvrdenie o doručení, pokiaľ to podporuje poštový server príjemcu.<br />Majte po odoslaní trpezlivosť a nezastavujte stránku v polovici. O tom, že skript skončil, budete informovaní.";
$lang['COT_detail'] = "Kliknite sem pre zobrazenie všetkých informácií o školení";
//
?>