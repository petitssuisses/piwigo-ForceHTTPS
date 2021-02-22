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
$lang['Advanced options'] = 'Avancerede indstillinger';
$lang['fhp_activate_sts_comment_short'] = 'Aktiverer HTTP Strict Transport Security (HSTS). Benyt kun hvis du har et signeret TLS-certifikat';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Maksimal alder bør svare til minimum seks måneder (15768000), men en længere periode, så som to år (63072000), anbefales';
$lang['seconds'] = 'sekunder';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Plugin\'en kunne ikke automatisk kontrollere din værtsmaskines SSL-/HTTPS-kompabilitet. Kontrollér manuelt at HTTPS-navigering er tilgængelig ved hjælp af den følgende knap. Du skal IKKE aktivere HTTPS hvis siden inde i popup\'en ikke kan indlæses.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Din værtsserver understøtter ikke HTTP, et SSL-certifikat er krævet. Aktivering af plugin\'en blev slået fra.';
$lang['Global activation'] = 'Global aktivering';
$lang['HTTPS activated for administration pages only'] = 'HTTPS kun aktiveret for administrationssider';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS kun aktiveret for login, brugeroprettelse og profilsider';
$lang['HTTPS available'] = 'HTTPS tilgængelig';
$lang['HTTPS unavailable'] = 'HTTPS ikke tilgængelig';
$lang['I have proceeded to the manual check'] = 'Jeg har gennemført det manuelle kontrol';
$lang['Manual Verification'] = 'Manuel kontrol';
$lang['Parial activation'] = 'Delvis aktivering';
$lang['Your hosting server does support HTTPS.'] = 'Den hostingserver understøtter ikke HTTPS';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 midlertidig';
$lang['Force HTTPS for administration'] = 'Gennemtving HTTPS for administration';
$lang['Force HTTPS for identification'] = 'Gennemtving HTTPS for login';
$lang['Force usage of HTTPS on this site'] = 'Gennemtving brug af HTTPS på dette websted';
$lang['Global HTTPS'] = 'Global HTTPS';