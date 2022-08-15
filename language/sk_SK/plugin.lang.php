<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['fhp_activate_sts_comment'] = 'Aktívny HTTP Strict Transport Security (HSTS)<br/>Táto voľba musí byť aktivovaná, ak vlastníte podpísaný TLS certfikát. Nemá žiadny vplyv, pokiaľ "Force HTTPS" je vypnutý<br/><br/> <i>HSTS je webový bezpečnostný mechanizmus, ktorým webový server oznamuje webovému prehliadaču interakciu iba pomocou zabezpečené pripojenie HTTPS. Keď je HSTS aktívne, hlavičky "Strict-Transport-Security" sú umiestnené v hlavičke http a akýkoľvek odkaz stránky je automaticky nahradený zabezpečeným spojením..<br/></i>';
$lang['fhp_description'] = 'Tento doplnok vypĺňa bezpečnostné medzery v Piwigo. Umožňuje administrátorom vynútiť použitie SSL zabezpečeného pripojenia pre prehliadanie Piwigo (ak je https k dispozícii na serveri). <br>Odporúčame používať zabezpečené pripojenie k ochrane užívateľa a hesla.';
$lang['fhp_force_https_warning'] = '<b>Varovanie!</ b> Pred aktiváciou zabezpečeného pripojenie, overte podporu protokolu https vášho servra. Môžete kliknúť na nasledujúci odkaz, aby ste ho otestovali (otvorenie stránky v režime https).';
$lang['fhp_force_https_comment'] = 'Aktivujte túto možnosť pre vynútenie klientom pripojiť sa k Piwigo cez zabezpečené pripojenie.';
$lang['fhp_force_https_label'] = 'Prinútiť k HTTPS';
$lang['fhp_test_https_link'] = 'Testovať stránku v https /nové okno/';
$lang['fhp_submit'] = 'Poslať';
$lang['fhp_sts_maxage_label'] = 'Maximálny vek STS';
$lang['fhp_sts_maxage_comment'] = 'Maximálny vek STS v sekundách';
$lang['fhp_security_group'] = 'Bezpečnostné nastavenia';
$lang['fhp_options_group'] = 'Voľby';
$lang['fhp_activate_sts_label'] = 'Použiť STS';
$lang['fhp_about'] = 'O';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Doplnku sa nepodarilo automaticky overiť kompatibilitu vášho hostiteľa s SSL/HTTPS. Pomocou nasledujúceho tlačidla manuálne skontrolujte, či je k dispozícii navigácia HTTPS. NEAKTIVUJTE HTTPS, ak stránku v rámci kontextového okna nemožno úspešne načítať.';
$lang['seconds'] = 'sekundár';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Maximálny vek by sa mal rovnať minimálne trvaniu šiestich mesiacov (15768000), ale odporúča sa dlhšie obdobie, napríklad dva roky (63072000).';
$lang['fhp_activate_sts_comment_short'] = 'Aktivuje HTTP Strict Transport Security (HSTS). Používať iba v prípade, že vlastníte podpísaný certifikát TLS';
$lang['Your hosting server does support HTTPS.'] = 'Váš hostingový server podporuje HTTPS.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Váš hostingový server nepodporuje HTTPS, vyžaduje sa certifikát SSL. Aktivácia pluginu je zakázaná.';
$lang['Parial activation'] = 'Čiastočná aktivácia';
$lang['Manual Verification'] = 'Manuálne overenie';
$lang['I have proceeded to the manual check'] = 'Pristúpil som k manuálnej kontrole';
$lang['HTTPS unavailable'] = 'HTTPS nie je k dispozícii';
$lang['HTTPS available'] = 'HTTPS k dispozícii';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS je aktivovaný iba pre stránky identifikácie, registrácie a profily';
$lang['HTTPS activated for administration pages only'] = 'HTTPS je aktivované len pre administračné stránky';
$lang['Global activation'] = 'Globálna aktivácia';
$lang['Global HTTPS'] = 'Globálny HTTPS';
$lang['Force usage of HTTPS on this site'] = 'Vynútiť používanie HTTPS na tomto webe';
$lang['Force HTTPS for identification'] = 'Vynútiť HTTPS na identifikáciu';
$lang['Force HTTPS for administration'] = 'Vynútiť HTTPS pre administráciu';
$lang['Advanced options'] = 'Pokročilé nastavenia';
$lang['301 permanent, 302 temporary'] = '301 trvalé, 302 dočasné';