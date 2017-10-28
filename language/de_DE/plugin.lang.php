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
$lang['fhp_description'] = 'Dieses Zusatzmodul schließt eine Sicherheitslücke in Piwigo. Es erlaubt Administratoren die Benutzung von SSL-verschlüsselten Verbindungen zu Piwigo zu erzwingen, falls HTTPS auf dem Webserver verfügbar ist.<br>Es wird dringend empfohlen, eine sichere Verbindung zu benutzen, um Benutzer und Passworte bei der Übertragung zu schützen.';
$lang['fhp_about'] = 'Info';
$lang['fhp_activate_sts_comment'] = 'Aktives HTTP Strict Transport Security (HSTS)<br/>Diese Option muss aktiviert sein wenn Sie ein signiertes TLS Zertifikat besitzen. Dies hat keine Auswirkung wenn "HHTPS erzwingen" ausgeschaltet ist<br/><br/> <i>HSTS ist ein Web-Sicherheitsmechanismus, bei dem der Webserver den Webbrowser veranlasst, nur über eine sichere HTTPS-Verbindung zu kommunizieren. Sobald HSTS aktiviert ist, wird das Header-Feld "Strict-Transport-Security" in den HTTP-Header eingefügt und der Seitenlink wird automatisch durch einen sicheren Link ersetzt.<br/></i>';
$lang['fhp_activate_sts_label'] = 'STS verwenden';
$lang['fhp_force_https_comment'] = 'Diese Option aktivieren, um zwingend eine sichere Verbindung zu Piwigo herzustellen.';
$lang['fhp_force_https_label'] = 'HTTPS erzwingen';
$lang['fhp_force_https_warning'] = '<b>Warnung!</b> Bitte vor der Aktivierung überprüfen, ob Ihr Server HTTPS unterstützt. Sie können auf den folgenden Link klicken, um dies zu testen. (Diese Seite wird dann über HTTPS geladen).';
$lang['fhp_options_group'] = 'Optionen';
$lang['fhp_security_group'] = 'Sicherheitseinstellungen';
$lang['fhp_sts_maxage_comment'] = 'maximales STS-Alter in Sekunden';
$lang['fhp_sts_maxage_label'] = 'maximales STS-Alter';
$lang['fhp_submit'] = 'Übertragen';
$lang['fhp_test_https_link'] = 'Die Seite mit HTTPS testen (Popup-Fenster)';