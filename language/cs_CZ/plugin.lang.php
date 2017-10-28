<?php
$lang['fhp_about'] = 'Popis';
$lang['fhp_description'] = 'Tento plugin vyplňuje bezpečnostní mezeru v Piwigo. Umožňuje administrátorům upřednostnit použití bezpečnějšího SSL spojení pro prohlížení Piwigo (jen pokud je https k dispozici na hosting serveru). <br>Je vhodné a obecně doporučeno dozabezpečit přístup uživatele a zadávání hesel pro přihlášení.';
$lang['fhp_security_group'] = 'Bezpečnostní nastavení';
$lang['fhp_options_group'] = 'Nastavení';
$lang['fhp_force_https_label'] = 'Jen HTTPS';
$lang['fhp_force_https_comment'] = 'Aktivací této volby směruje vaše uživatele na použití zabezpečeného spojení s vaší fotogalerií.';
$lang['fhp_force_https_warning'] = '<b>Pozor!</b> Před aktivací prosím zjistěte zda váš poskytrovatel hostingu umožňuje a podporuje https připojení. Můžete to otestovat klinutím na tento odkaz (nahraje tuto stránku skrze https mód).';
$lang['fhp_test_https_link'] = 'Otestujte tuto stránku v režimu https (zobrazí se jako vyskakovací okno)';
$lang['fhp_activate_sts_label'] = 'Použít STS';
$lang['fhp_activate_sts_comment'] = 'Aktivuje HTTP Strict Transport Security (HSTS)<br/>Tato volba musí být aktivována pokud máte svůj vlastní ověření TLS certifikát. Nemá to žádný efekt pokud je "Force HTTPS" vypnuto<br/><br/> <i>HSTS je zabezpečovací web mechanismus kdy server sděluje vašemu web prohlížeči aby s ním komunikoval výhradně skrze https spojení. Když je HSTS aktivní, http hlavička komunikace obsahuje "Strict-Transport-Security" a jakýkoliv http odkaz je automaticky nahrazen za https.<br/></i>';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_sts_maxage_comment'] = 'STS max-age v sekundách';
$lang['fhp_submit'] = 'Odeslat';
?>