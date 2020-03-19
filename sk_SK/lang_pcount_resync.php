<?php
/***************************************************************************
 *                            lang_pcount_resync.php [English]
 *                              -------------------
 *     begin                : Fri Sep 06 2002
 *     copyright            : (C) 2002 Adam Alkins
 *     email                : phpbb@rasadam.com
 *	  $Id: lang_pcount_resync.php,v 1.5 2003/07/12 15:48:42 rasadam Exp $:
 *
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

$lang['Resync_page_title'] = "Zosynchronizovať počty príspevkov používateľov";
$lang['Resync_page_desc_simple'] = "Vitajte v nástroji pre zosynchronizovanie počtu príspevkov používateľov. Môžete stlačiť tlačidlo Zosynchronizovať, aby sa všetky počty príspevkov nastavili na ich skutočnú hodnotu tým, že sa prepočíta množstvo skutočných príspevkov.<br /><br />Dávkový režim vám umožní zosynchronizovať účty v krokoch a je užitočný pre veľké fóra. Taktiež poskytuje počas synchronizácie aktualizácie o priebehu, takže ak skript skončí pred dokončením (dosiahnutý pamäťový limit alebo vypršal čas), môžete na tejto pozícii pokračovať zadaním čísla dávky (Nechajte prázdne, ak chcete začať od začiatku. Položka Zosynchronizovaní na dávku určuje, koľko synchronizácií sa urobí za jednu dávku. Ak je dávka nastavená ako zapnutá a množstvo je ponechané prázdne, štandardne sa aplikuje 50 synchronizácií na dávku.";
$lang['Resync_page_desc_adv'] = "Vitajte v nástroji pre zosynchronizovanie počtu príspevkov používateľov. Môžete si vybrať, v ktorých fórach by ste chceli zosynchronizovať buď konkrétneho používateľa alebo všetkých používateľov. Stlačte tlačidlo Zosynchronizovať, aby sa všetky počty príspevkov prepočítali na množstvo skutočných príspevkov podľa vašich kritérií.<br /><br />Dávkový režim vám umožní zosynchronizovať účty v krokoch a je užitočný pre veľké fóra. Taktiež poskytuje počas synchronizácie aktualizácie o priebehu, takže ak skript skončí pred dokončením (dosiahnutý pamäťový limit alebo vypršal čas), môžete na tejto pozícii pokračovať zadaním čísla dávky (Nechajte prázdne, ak chcete začať od začiatku. Položka Zosynchronizovaní na dávku určuje, koľko synchronizácií sa urobí za jednu dávku. Ak je dávka nastavená ako zapnutá a množstvo je ponechané prázdne, štandardne sa aplikuje 50 synchronizácií na dávku.";

$lang['Resync_batch_mode'] = "Dávkový režim";
$lang['Resync_batch_number'] = "Číslo dávky";
$lang['Resync_batch_amount'] = "Zosynchronizovaní na dávku";
$lang['Resync_finished'] = "Dokončené.";

$lang['Resync_completed'] = "Zosynchronizovanie bolo úspešne dokončené.";

$lang['Resync_question'] = "Zosynchronizovať?";

$lang['Resync_check_all'] = "Zaškrtnite políčko pre zosynchronizovanie všetkých používateľov:";

$lang['Resync_do'] = "Začať zosynchronizovanie";

$lang['Resync_redirect'] = "<br /><br />Vrátiť sa do <a href='%s'>Nástroja pre zosynchronizovanie počtov príspevkov</a><br /><br />Vrátiť sa do <a href='%s'>registra správcu</a>.";
$lang['Resync_invalid'] = "Neplatné nastavenia - žiadni používatelia na zosynchronizovanie.";

?>