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
?>