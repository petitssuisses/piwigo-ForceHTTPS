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
$lang['fhp_about'] = 'Acerca de';
$lang['fhp_activate_sts_comment'] = 'Seguridad Estricta del Transporte Activo HTTP(HSTS) <br/> Esta opción debe activarse si posee un certificado TLS firmado. No tiene ningún efecto si "Fuerza HTTPS" está apagado <br/><br/> <i>HSTS es un mecanismo de seguridad web mediante el cual el servidor web declara el navegador web para interactuar con él utilizando sólo conexiones HTTPS seguras. Cuando HSTS está activo, un campo de cabecera "Strict-Transport-Security" se coloca en la cabecera http, y cualquier vínculo a sitios se sustituye automáticamente por un enlace seguro.<br/></i>';
$lang['fhp_activate_sts_label'] = 'Utilisa STS';
$lang['fhp_description'] = 'Este plugin viene a llenar un vacío de seguridad en Piwigo. Permite a los administradores forzar el uso de conexiones seguras SSL para navegar en Piwigo (cuando https está disponible en el servidor de hosting). <br>Es muy recomendable utilizar conexiones seguras para proteger usuario y contraseña transmisiones.';
$lang['fhp_force_https_comment'] = 'Activa esta opción para forzar los clientes a conectarse a Piwigo a través de una conexión segura.';
$lang['fhp_force_https_label'] = 'Forzar HTTPS';
$lang['fhp_force_https_warning'] = '<b> Advertencia! </b> Antes de activar la conexión segura, por favor verifique si su servidor soporta https. Puede hacer clic en el siguiente enlace para probar (carga esta página en modo https).';
$lang['fhp_options_group'] = 'Opciones';
$lang['fhp_security_group'] = 'Ajustes de seguridad';
$lang['fhp_sts_maxage_comment'] = 'STS max-age en segundos';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_submit'] = 'Enviar';
$lang['fhp_test_https_link'] = 'Pruebe esta página en https (ventana popup)';
?>