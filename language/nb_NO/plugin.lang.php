<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
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
$lang['fhp_activate_sts_comment'] = 'Aktiv HTTP Strict Transport Security (HSTS) <br/> Dette alternativet må aktiveres hvis du eier et signert TLS sertifikat. Det har ingen virkning hvis "Force HTTPS» er slått av <br/><br/> <i> HSTS er en web sikkerhetsmekanisme der webserveren erklærer nettleseren for å samhandle med seg kun ved hjelp av sikre HTTPS-tilkoblinger. Når HSTS er aktiv, legges det til "Strict-Transport-Security" i http feldtet, og alle besøkende nettsteder blir automatisk erstattet med et sikret link. <br/></I>';
$lang['fhp_activate_sts_label'] = 'Bruk STS';
$lang['fhp_description'] = 'Dette programtillegget fyller et sikkerhetshull i Piwigo. Det tillater administratorer å tvinge bruken av SSL sikret tilkoblinger for surfing Piwigo (når https er tilgjengelig på vertens server). <br> Det er sterkt anbefalt å bruke sikret tilkoblinger for å beskytte bruker og passord sendinger.';
$lang['fhp_force_https_comment'] = 'Aktiver dette alternativet for å tvinge kundene til å koble til Piwigo via en sikker tilkobling.';
$lang['fhp_force_https_label'] = 'Tvungen HTTPS';
$lang['fhp_force_https_warning'] = '<b>Advarsel!</ b> Før du aktiverer sikker tilkobling, må du bekrefte at din server støtter https. Du kan klikke på følgende link for å teste (last denne siden i https-modus).';
$lang['fhp_options_group'] = 'Alternativer';
$lang['fhp_security_group'] = 'Sikkerhetsinnstillinger';
$lang['fhp_sts_maxage_comment'] = 'STS maks-alder i sekunder';
$lang['fhp_sts_maxage_label'] = 'STS maks-alder';
$lang['fhp_submit'] = 'Send inn';
$lang['fhp_test_https_link'] = 'Test dette nettstedet i https (popopp-vindu)';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 midlertidig';
$lang['Advanced options'] = 'Avanserte instillinger';
$lang['Force HTTPS for administration'] = 'Tving HTTPS for administrasjon';
$lang['Force HTTPS for identification'] = 'Tving HTTPS for identifikasjon';
$lang['Force usage of HTTPS on this site'] = 'Tving bruk av HTTPS på dette nettstedet';
$lang['Global HTTPS'] = 'Global HTTPS';
$lang['Global activation'] = 'Global aktivering';
$lang['HTTPS activated for administration pages only'] = 'HTTPS er bare aktivert for administrasjonssider';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS er kun aktivert for identifikasjon, register og profilsider';
$lang['HTTPS available'] = 'HTTPS tilgjengelig';
$lang['HTTPS unavailable'] = 'HTTPS utilgjengelig';
$lang['I have proceeded to the manual check'] = 'Jeg har gått videre til den manuelle kontrollen';
$lang['Manual Verification'] = 'Manuell bekreftelse';
$lang['Parial activation'] = 'Delvis aktivering';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Programtillegget kunne ikke bekrefte verts SSL / HTTPS-kompatibilitet automatisk. Kontroller manuelt at HTTPS-navigering er tilgjengelig ved hjelp av følgende knapp. IKKE aktiver HTTPS hvis siden i popup-en ikke kan lastes inn. ';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Vertsserveren din støtter ikke HTTPS, et SSL-sertifikat kreves. Programtillegget er deaktivert. ';
$lang['Your hosting server does support HTTPS.'] = 'Vertsserveren din støtter HTTPS.';
$lang['fhp_activate_sts_comment_short'] = 'Aktiverer HTTP Strict Transport Security (HSTS). Brukes bare hvis du eier et signert TLS-sertifikat ';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Maksimal alder skal være minst seks måneders varighet (15768000), men en lengre periode på to år (63072000) anbefales';
$lang['seconds'] = 'sekunder';