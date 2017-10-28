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
$lang['fhp_about'] = 'Om';
$lang['fhp_activate_sts_comment'] = 'Aktiv HTTP Strict Transport Security (HSTS)<br />Valgmuligheden skal være aktiveret hvis du har et signeret TLS-certifikat. Den har ingen virkning hvis "Gennemtving HTTPS" er slået fra<br /><br /> <i>HSTS er en websikkerhedsmekanisme, hvorved webserveren sørger for at webbrowseren kun kommunikerer med sig, kun med brug af sikre HTTPS-forbindelser. Når HSTS er aktiv, indsættes et headerfelt, "Strict-Transport-Security", http-headeren, og ethvert webstedslink erstattes automatisk med et sikkert link.<br /></i>';
$lang['fhp_activate_sts_label'] = 'Benyt STS';
$lang['fhp_description'] = 'Denne plugin udfylder et sikkerhedshul i Piwigo.  Den gør det muligt for administratorer, at gennemtvinge bruge af SSL-sikrede forbindelse ved Piwigo-browsing (når https er tilgængelig på hostingserveren).<br /> Det anbefales kratigt at anvende sikre forbindelser for at beskytte bruger- og adgangskodeoverførsler.';
$lang['fhp_force_https_comment'] = 'Aktiver denne valgmulighed for at tvinge klienter til at benytte Piwigo gennem en sikker forbindelse.';
$lang['fhp_force_https_label'] = 'Gennemtving HTTPS';
$lang['fhp_force_https_warning'] = '<b>Advarsel!</b> Før sikre forbindelser aktiveres, skal man sikre sig at ens webserver understøtter https. Man kan klikke på følgende link, for at afprøve det (indlæser denne side i https-tilstand).';
$lang['fhp_options_group'] = 'Valgmuligheder';
$lang['fhp_security_group'] = 'Sikkerhedsindstillinger';
$lang['fhp_sts_maxage_comment'] = 'STS-maksimal alder i sekunder';
$lang['fhp_sts_maxage_label'] = 'STS-maksimal alder';
$lang['fhp_submit'] = 'Gem';
$lang['fhp_test_https_link'] = 'Test denne side i https (popopvindue)';
?>