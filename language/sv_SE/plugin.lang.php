<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Insticksmodul kunde inte automatiskt verifiera din värds SSL/HTTPS-kompatibilitet. Kontrollera manuellt att HTTPS-navigering är tillgänglig med hjälp av följande knapp. Aktivera INTE HTTPS om sidan i popup-fönstret inte kan laddas.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Din värdserver stöder inte HTTPS, ett SSL certifikat krävs.
Aktivering av insticksmoduler är avstängt.';
$lang['fhp_activate_sts_comment'] = 'Aktiv HTTP Strict Transport Security (HSTS)<br/>Det här alternativet måste aktiveras om du äger ett signerat TLS-certifikat. Det har ingen effekt om "Tvinga HTTPS" är avstängt<br/><br/> <i>HSTS är en webbsäkerhetsmekanism där webbservern förklarar att webbläsaren endast interagerar med den, med hjälp av säkra HTTPS-anslutningar. När HSTS är aktivt placeras ett rubrikfält "Strict-Transport-Security" i http-huvudet, och varje webbplatslänk ersätts automatiskt med en säker länk.<br/></i>';
$lang['fhp_activate_sts_comment_short'] = 'Aktiverar HTTP Strict Transport Security (HSTS). Att användas endast om du äger ett signerat TLS-certifikat';
$lang['fhp_description'] = 'Denna insticksmodul fyller en säkerhetslucka i Piwigo. Det tillåter administratörer att tvinga användningen av SSL-säkra anslutningar för att surfa i Piwigo (när https är tillgängligt på värdservern). <br>Det rekommenderas starkt att använda säkra anslutningar för att skydda användar- och lösenordsöverföringar.';
$lang['fhp_force_https_comment'] = 'Aktivera det här alternativet för att tvinga klienter att ansluta till Piwigo via en säker anslutning.';
$lang['fhp_force_https_warning'] = '<b>Varning!</b> Innan du aktiverar en säker anslutning, kontrollera att din server stöder https. Du kan klicka på följande länk för att testa (laddar den här sidan i https-läge).';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Max ålder bör vara minst sex månader (15768000), men en längre period som två år (63072000) rekommenderas';
$lang['fhp_activate_sts_label'] = 'Använd STS';
$lang['fhp_force_https_label'] = 'Tvinga HTTPS';
$lang['fhp_options_group'] = 'Alternativ';
$lang['fhp_security_group'] = 'Säkerhetsinställningar';
$lang['fhp_sts_maxage_comment'] = 'Maxålder för STS i sekunder';
$lang['fhp_sts_maxage_label'] = 'Maxålder för STS';
$lang['fhp_submit'] = 'Skicka in';
$lang['fhp_test_https_link'] = 'Testa denna sida med https (popup fönster)';
$lang['seconds'] = 'sekunder';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 temporär';
$lang['Advanced options'] = 'Avancerade alternativ';
$lang['Force HTTPS for administration'] = 'Tvinga HTTPS för administrering';
$lang['Force HTTPS for identification'] = 'Tvinga HTTPS för identifiering';
$lang['Force usage of HTTPS on this site'] = 'Tvinga användning av HTTPS på denna webbsida';
$lang['Global HTTPS'] = 'Global HTTPS';
$lang['Global activation'] = 'Global aktivering';
$lang['HTTPS activated for administration pages only'] = 'HTTPS endast aktiverat för administrativa sidor';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS endast aktiverat för identifiering, register och profilsidor';
$lang['HTTPS available'] = 'HTTPS tillgängligt';
$lang['HTTPS unavailable'] = 'HTTPS ej tillgängligt';
$lang['I have proceeded to the manual check'] = 'Jag har fortsatt till den manuella kontrollen';
$lang['Manual Verification'] = 'Manuell verifiering';
$lang['Parial activation'] = 'Partiell aktivering';
$lang['Your hosting server does support HTTPS.'] = 'Din värdserver stöder inte HTTPS.';
$lang['fhp_about'] = 'Om';