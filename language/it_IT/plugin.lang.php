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
$lang['301 permanent, 302 temporary'] = '301 permanente, 302 temporaneo.';
$lang['Advanced options'] = 'Opzioni avanzate.';
$lang['Force HTTPS for administration'] = 'Forza HTTPS per l\'amministrazione.';
$lang['Force HTTPS for identification'] = 'Forza HTTPS per l\'identificazione.';
$lang['Force usage of HTTPS on this site'] = 'Forza l\'uso di HTTPS su questo sito.';
$lang['Global HTTPS'] = 'HTTPS globale.';
$lang['Global activation'] = 'Attivazione globale.';
$lang['HTTPS activated for administration pages only'] = 'HTTPS attivato soltanto per le pagine d\'amministrazione.';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS attivato solamente per le pagine di identificazione, registrazione e del profilo.';
$lang['HTTPS available'] = 'HTTPS disponibile.';
$lang['HTTPS unavailable'] = 'HTTPS non disponibile.';
$lang['I have proceeded to the manual check'] = 'Proceduto al controllo manuale.';
$lang['Manual Verification'] = 'Verifica manuale.';
$lang['Parial activation'] = 'Attivazione parziale.';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Il plug-in non ha potuto verificare la compatibilità del tuo sito con SSL/HTTS. Per favore controlla manualmente la disponibilità di  HTTPS cliccando sul seguente pulsante. NON attivare HTTPS se la pagina che apparirà nella finestra popup non dovesse caricarsi correttamente.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Il tuo host server non supporta HTTPS, è richiesto un certificato SSL. L\'attivazione del plug-in è disabilitata.';
$lang['Your hosting server does support HTTPS.'] = 'Il tuo host server non supporta HTTPS.';
$lang['fhp_activate_sts_comment_short'] = 'Attiva HTTP Strict Transport Security (HSTS). Da usare soltanto se si possiede un certificato TLS firmato.';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Max-age dovrebbe minimo corrispondere a 6 mesi (15768000), tuttavia si raccomanda un periodo più lungo, per esempio 2 anni (63072000).';
$lang['seconds'] = 'secondi';