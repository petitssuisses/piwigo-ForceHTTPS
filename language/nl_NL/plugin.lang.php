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
$lang['fhp_activate_sts_comment'] = 'Actieve HTTP Strict Transport Security (HST)<br/>Deze optie moet worden geactiveerd als je eigenaar bent van een ondertekend TLS certificaat. Het heeft geen effect als "Force HTTPS" is uitgeschakeld<br/><br/><i>HSTS is een web-beveiligingsmechanisme waarbij de webserver, de webbrowser aangeeft om alleen te communiceren met de webserver via beveiligde HTTPS-verbindingen. Als HST actief is, wordt een kopveld (header field) "Strict-Transport-Security" geplaatst in de http header, en elke site-koppeling wordt automatisch vervangen door een beveiligde link.<br/></i>';
$lang['fhp_description'] = 'Deze plugin vult een gat in de beveiliging van Piwigo. Het stelt beheerders in staat om het gebruik van SSL-beveiligde verbindingen af te kunnen dwingen om te kunnen surfen in Piwigo (indien https beschikbaar is op de hosting server). <br> Het wordt sterk aanbevolen om beveiligde verbindingen te gebruiken om gebruikersnaam- en wachtwoord-overdrachten te beschermen.';
$lang['fhp_about'] = 'Over';
$lang['fhp_activate_sts_label'] = 'Gebruik STS';
$lang['fhp_force_https_comment'] = 'Activeer deze optie om klanten te dwingen verbinding met Piwigo te maken via een beveiligde verbinding.';
$lang['fhp_force_https_warning'] = '<b> Waarschuwing!</ b> Voordat je de beveiligde verbinding activeert:  controleer aub of jouw server https ondersteunt. Je kunt op de volgende link klikken om dit te testen (deze link laadt deze pagina in https-modus).';
$lang['fhp_sts_maxage_comment'] = 'STS max-age in seconden';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_test_https_link'] = 'Test deze pagina in https (popup-venster)';
$lang['fhp_force_https_label'] = 'Forceer HTTPS';
$lang['fhp_options_group'] = 'Opties';
$lang['fhp_security_group'] = 'Beveiligings-instellingen';
$lang['fhp_submit'] = 'Verstuur';