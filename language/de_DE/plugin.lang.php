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
$lang['301 permanent, 302 temporary'] = '301 dauerhaft, 302 temporär';
$lang['Advanced options'] = 'Erweiterte Optionen';
$lang['Force HTTPS for administration'] = 'HTTPS für Administration erzwingen';
$lang['Force HTTPS for identification'] = 'HTTPS für Anmeldung erzwingen';
$lang['Force usage of HTTPS on this site'] = 'HTTPS für diese Seite erzwingen';
$lang['Global HTTPS'] = 'Durchgängiges HTTPS';
$lang['Global activation'] = 'Globale Aktivierung';
$lang['HTTPS activated for administration pages only'] = 'HTTPS nur für administrative Seiten aktiviert';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS nur für Anmelde-, Registrierungs- und Profilseiten aktiviert';
$lang['HTTPS available'] = 'HTTPS verfügbar';
$lang['HTTPS unavailable'] = 'HTTPS nicht verfügbar';
$lang['I have proceeded to the manual check'] = 'Manuelle Überprüfung durchgeführt';
$lang['Manual Verification'] = 'Manuelle Überprüfung';
$lang['Parial activation'] = 'Teilaktivierung';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Das Plugin konnte die SSL / HTTPS-Kompatibilität Ihres Hosts nicht automatisch überprüfen. Bitte überprüfen Sie manuell, ob die HTTPS-Navigation über die folgende Schaltfläche verfügbar ist. Aktivieren Sie HTTPS NICHT, wenn die Seite im Popup nicht erfolgreich geladen wird.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Ihr Hostinganbieter unterstützt kein HTTPS, ein SSL-Zertifikat wird benötigt. Plugin-Aktivierung nicht möglich.';
$lang['Your hosting server does support HTTPS.'] = 'Ihr Hostinganbieter unterstützt HTTPS';
$lang['fhp_activate_sts_comment_short'] = 'Aktiviert HTTP Strict Transport Security (HSTS). Nur für signierte TLS-Zertifikate zu verwenden.';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'max-age muss mindestens eine Dauer von sechs Monaten umfassen (15768000), eine längere Laufzeit von z.B. zwei Jahren (63072000) wird empfohlen.
	

';
$lang['seconds'] = 'Sekunden';