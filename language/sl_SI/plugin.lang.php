<?php
// +-----------------------------------------------------------------------+
// | This file is part of Piwigo.                                          |
// |                                                                       |
// | For copyright and license information, please view the COPYING.txt    |
// | file that was distributed with this source code.                      |
// +-----------------------------------------------------------------------+
$lang['Your hosting server does support HTTPS.'] = 'Vaš strežnik za gostovanje podpira HTTPS.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Vaš strežnik za gostovanje ne podpira HTTPS, potrebno je potrdilo SSL. Aktivacija vtičnika je onemogočena.';
$lang['HTTPS available'] = 'HTTPS je na voljo';
$lang['HTTPS unavailable'] = 'HTTPS ni na voljo';
$lang['I have proceeded to the manual check'] = 'Nadaljeval sem z ročnim preverjanjem';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Vtičnik ni mogel samodejno preveriti združljivosti vašega gostitelja SSL/HTTPS. Z naslednjim gumbom ročno preverite, ali je navigacija HTTPS na voljo. NE aktivirajte HTTPS, če strani v pojavnem oknu ni mogoče uspešno naložiti.';
$lang['Manual Verification'] = 'Ročno preverjanje';
$lang['fhp_activate_sts_comment_short'] = 'Aktivira HTTP Strict Transport Security (HSTS). Za uporabo samo, če imate podpisan certifikat TLS';
$lang['301 permanent, 302 temporary'] = '301 stalna, 302 začasna';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Najvišja starost mora biti najmanj šest mesecev (15768000), vendar je priporočljivo daljše obdobje, na primer dve leti (63072000).';
$lang['seconds'] = 'sekundah';
$lang['HTTPS activated for administration pages only'] = 'HTTPS je aktiviran samo za skrbniške strani';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS je aktiviran samo za strani za identifikacijo, registracijo in profil';
$lang['Force HTTPS for administration'] = 'Prisilite HTTPS za administracijo';
$lang['Force HTTPS for identification'] = 'Prisilite HTTPS za identifikacijo';
$lang['Force usage of HTTPS on this site'] = 'Prisilna uporaba HTTPS na tem spletnem mestu';
$lang['fhp_activate_sts_comment'] = 'Active HTTP Strict Transport Security (HSTS)<br/>Ta možnost mora biti aktivirana, če imate podpisano potrdilo TLS. Ne vpliva, če je "Force HTTPS" izklopljen<br/><br/> <i>HSTS je spletni varnostni mehanizem, pri katerem spletni strežnik izjavi, da spletni brskalnik deluje z njim samo z uporabo varnih povezav HTTPS. Ko je HSTS aktiven, se v glavo http postavi naslovno polje "Stroga-Transport-Security" in vsaka povezava spletnega mesta se samodejno nadomesti z zaščiteno povezavo.<br/></i>';
$lang['Global HTTPS'] = 'Globalni HTTPS';
$lang['Advanced options'] = 'Napredne možnosti';
$lang['Parial activation'] = 'Delna aktivacija';
$lang['Global activation'] = 'Globalna aktivacija';
$lang['fhp_submit'] = 'Pošlji';
$lang['fhp_sts_maxage_comment'] = 'Najvišja starost STS v sekundah';
$lang['fhp_sts_maxage_label'] = 'STS maksimalna starost';
$lang['fhp_activate_sts_label'] = 'Uporabite STS';
$lang['fhp_test_https_link'] = 'Preizkusite to stran v https (pojavno okno)';
$lang['fhp_force_https_warning'] = '<b>Opozorilo!</b> Pred aktiviranjem zaščitene povezave preverite, ali vaš strežnik podpira https. Za testiranje lahko kliknete naslednjo povezavo (to stran naloži v načinu https).';
$lang['fhp_force_https_comment'] = 'Aktivirajte to možnost, da prisilite stranke, da se povežejo s Piwigo prek zaščitene povezave.';
$lang['fhp_force_https_label'] = 'Prisilite HTTPS';
$lang['fhp_options_group'] = 'Možnosti';
$lang['fhp_security_group'] = 'Varnostne nastavitve';
$lang['fhp_about'] = 'O';
$lang['fhp_description'] = 'Ta vtičnik zapolnjuje varnostno vrzel v Piwigu. Skrbnikom omogoča, da vsilijo uporabo zaščitenih povezav SSL za brskanje po Piwigu (ko je https na voljo na strežniku za gostovanje). <br>Zelo priporočamo uporabo zaščitenih povezav za zaščito prenosa uporabnikov in gesel.';