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
?>