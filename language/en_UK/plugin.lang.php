<?php
$lang['fhp_about'] = 'About';
$lang['fhp_description'] = 'This plugin fills a security gap in Piwigo. It allows administrators to force the usage of SSL secured connections for browsing Piwigo (when https is available on the hosting server). <br>It is highly recommend to use secured connections to protect user and password transmissions.';
$lang['fhp_security_group'] = 'Security settings';
$lang['fhp_options_group'] = 'Options';
$lang['fhp_force_https_label'] = 'Force HTTPS';
$lang['fhp_force_https_comment'] = 'Activate this option to force clients to connect to Piwigo through a secured connection.';
$lang['fhp_force_https_warning'] = '<b>Warning!</b> Before activating secured connection, please verify your server supports https. You can click on the following link to test (loads this page in https mode).';
$lang['fhp_test_https_link'] = 'Test this page in https (popup window)';
$lang['fhp_activate_sts_label'] = 'Use STS';
$lang['fhp_activate_sts_comment'] = 'Active HTTP Strict Transport Security (HSTS)<br/>This option must be activated if you own a signed TLS certficate. It has no effect if "Force HTTPS" is turned off<br/><br/> <i>HSTS is a web security mechanism whereby the web server declares the web browser to interact with it only using secure HTTPS connections. When HSTS is active, a header field "Strict-Transport-Security" is placed in http header, and any site link is automatically replaced with a secured link.<br/></i>';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_sts_maxage_comment'] = 'STS max-age in seconds';
$lang['fhp_submit'] = 'Submit';
// New 2.0.0
$lang['Global activation'] = 'Global activation';
$lang['Parial activation'] = 'Partial activation';
$lang['Advanced options'] = 'Advanced options';
$lang['Global HTTPS'] = 'Global HTTPS';
$lang['Force usage of HTTPS on this site'] = 'Force usage of HTTPS on this site';
$lang['Force HTTPS for identification'] = 'Force HTTPS for identification';
$lang['Force HTTPS for administration'] = 'Force HTTPS for administration';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS activated for identification, register and profile pages only';
$lang['HTTPS activated for administration pages only'] = 'HTTPS activated for administration pages only';
$lang['seconds'] = 'secondes';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'max-age doit être égal au minimum d\une durée de six mois (15768000), mais une période plus longue comme deux ans (63072000) est recommandée';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 temporaire';
$lang['fhp_activate_sts_comment_short'] = 'Activates HTTP Strict Transport Security (HSTS). To use only if you own a signed TLS certficate';
// New 2.0.2
$lang['Manual Verification'] = 'Manual Verification';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.';
$lang['I have proceeded to the manual check'] = 'I have proceeded to the manual check';
$lang['HTTPS unavailable'] = 'HTTPS unavailable';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.';
$lang['HTTPS available'] = 'HTTPS available';
$lang['Your hosting server does support HTTPS.'] = 'Your hosting server does support HTTPS.';
?>