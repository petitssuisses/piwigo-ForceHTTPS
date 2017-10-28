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
$lang['fhp_activate_sts_comment'] = 'Attiva HTTP Strict Transport Security (HSTS)<br/>Questa opzione deve essere attivata se possedete un certificato TLS firmato. Non ha alcun effetto se "Force HTTPS" è spento<br/><br/> <i>HST è un meccanismo di sicurezza web per cui il server web dichiara il browser web per interagire con esso solo utilizzando connessioni sicure HTTPS. Quando HSTS è attivo un campo di intestazione "Strict-Transport-Security" viene posizionato nell\'intestazione http e qualsiasi collegamento al sito viene automaticamente sostituito con un link protetto.<br/></i>';
$lang['fhp_description'] = 'Questo plugin colma una lacuna di sicurezza in Piwigo. Consente agli amministratori di forzare l\'utilizzo di connessioni protette SSL per la navigazione Piwigo (https quando è disponibile sul server di hosting). <br>E\' altamente consigliabile utilizzare connessioni protette per proteggere l\'invio utente e password.';
$lang['fhp_force_https_warning'] = '<b>Attenzione!</b> Prima di attivare la connessione sicura, si prega di verificare che il vostro server supporti https. E\' possibile fare clic sul seguente link per testare (carica questa pagina in modalità https).';
$lang['fhp_sts_maxage_comment'] = 'STS max-age in secondi';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_submit'] = 'Invia';
$lang['fhp_test_https_link'] = 'Prova questa pagina in https (finestra popup)';
$lang['fhp_security_group'] = 'Impostazioni di sicurezza';
$lang['fhp_force_https_comment'] = 'Attiva questa opzione per forzare i client di connettersi a Piwigo attraverso una connessione protetta.';
$lang['fhp_options_group'] = 'Opzioni';
$lang['fhp_force_https_label'] = 'Forza HTTPS';
$lang['fhp_activate_sts_label'] = 'Utilizzare STS';
$lang['fhp_about'] = 'About';
?>