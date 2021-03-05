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
$lang['fhp_activate_sts_label'] = 'Utilitza STS';
$lang['fhp_options_group'] = 'Opcions';
$lang['fhp_security_group'] = 'Paràmetres de seguretat';
$lang['fhp_submit'] = 'Envia';
$lang['fhp_force_https_comment'] = 'Activeu aquesta opció si voleu forçar que tots els clients de Piwigo es connectin a traves d\'una connexió segura';
$lang['fhp_about'] = 'Quant a';
$lang['fhp_force_https_label'] = 'Força l\'HTTPS';
$lang['fhp_test_https_link'] = 'Testeja aquesta pàgina en https (finestra emergent)';
$lang['I have proceeded to the manual check'] = 'He fet la comprovació manual';
$lang['Your hosting server does support HTTPS.'] = 'El vostre servidor d\'allotjament suporta HTTPS.';
$lang['fhp_description'] = 'Aquest connector omple un buit de seguretat a Piwigo. Permet als administradors forçar l\'ús de connexions segures SSL per navegar per Piwigo (quan https està disponible al servidor d\'allotjament). <br>Es recomana utilitzar connexions protegides per protegir les transmissions d\'usuaris i contrasenyes.';
$lang['fhp_force_https_warning'] = '<b>Advertència!</b> Abans d\'activar la connexió segura, verifiqueu que el servidor admet https. Podeu fer clic al següent enllaç per provar (carrega aquesta pàgina en mode https).';
$lang['fhp_activate_sts_comment_short'] = 'Activa la Seguretat Estricta de Transport d\'HTTP (HSTS). Utilitzeu-la només si sóu propietaris d\'un certificat TLS signat';
$lang['fhp_sts_maxage_comment'] = 'STS max-age (edat màxima del STS) en segons';
$lang['fhp_sts_maxage_label'] = 'STS max-age (edat màxima del STS)';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'El valor de Max-age hauria de ser com a mínim de sis mesos (15768000), però es recomana un periode més llarg, com per exemple dos anys (63072000)';
$lang['seconds'] = 'segons';
$lang['fhp_activate_sts_comment'] = 'Activa la Seguretat Estricta de Transport d\'HTTP (HSTS)<br/>Aquesta opció s\'ha d\'activar si sóu propietaris d\'un certificat TLS signat. No té cap efecte si "Força l\'HTTPS" està desactivat<br/><br/> <i>L\'HSTS és un mecanisme de seguretat web amb què el servidor declara que només interactuarà amb navegadors web mitjançant connexions segures HTTPS. Quan l\'HSTS està actiu s\'afegeix un camp "Strict-Transport-Security" a la capçalera http, i qualsevol enllaç del lloc es substitueix automàticament per un enllaç segur.<br/></i>';
$lang['301 permanent, 302 temporary'] = '301 permanent, 302 temporal';
$lang['Advanced options'] = 'Opcions avançades';
$lang['Force HTTPS for administration'] = 'Força HTTPS per a l\'administració';
$lang['Force HTTPS for identification'] = 'Força HTTPS per a la identificació';
$lang['Force usage of HTTPS on this site'] = 'Força l\'ús d\'HTTPS en aquest lloc';
$lang['Global HTTPS'] = 'HTTPS global';
$lang['Global activation'] = 'Activació global';
$lang['HTTPS activated for administration pages only'] = 'L\'HTTPS està activat només per a les pàgines d\'administració';
$lang['HTTPS activated for identification, register and profile pages only'] = 'L\'HTTPS està activat només per a la identificació, el registre i les pàgines de perfils';
$lang['HTTPS available'] = 'HTTPS disponible';
$lang['HTTPS unavailable'] = 'HTTPS no disponible';
$lang['Manual Verification'] = 'Verificació manual';
$lang['Parial activation'] = 'Activació parcial';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'El connector no pot verificar automàticament la compatibilitat SSL/HTTPS del vostre servidor. Comproveu manualment que la navegació HTTPS està disponible utilitzant el botó següent. NO ACTIVEU HTTPS si la pàgina de la finestra emergent no es pot carregar correctament.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'El vostre servidor d\'allotjament no suporta HTTPS; cal un certificat SSL. L\'activació del connector s\'ha inhabilitat.';