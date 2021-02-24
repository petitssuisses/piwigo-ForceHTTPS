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
$lang['fhp_activate_sts_comment'] = 'Activar la Seguridad Estricta del Transporte HTTP (HSTS)<br/>Esta opción debe activarse si posee un certificado TLS firmado. No tiene ningún efecto si "Fuerza HTTPS" está apagado<br/><br/> <i>HSTS es un mecanismo de seguridad web mediante el cual el servidor web declara que el navegador web sólo puede interactuar con él utilizando conexiones HTTPS seguras. Cuando HSTS está activo, se coloca un campo de cabecera "Strict-Transport-Security" en la cabecera http, y cualquier vínculo del sitio se sustituye automáticamente por un enlace seguro.<br/></i>';
$lang['fhp_activate_sts_label'] = 'Utilizar STS';
$lang['fhp_description'] = 'Este plugin viene a llenar un vacío de seguridad en Piwigo. Permite a los administradores forzar el uso de conexiones seguras SSL para navegar en Piwigo (cuando https está disponible en el servidor de alojamiento).<br/>Es muy recomendable utilizar conexiones seguras para proteger la transmisión de nombres de usuario y contraseñas.';
$lang['fhp_force_https_comment'] = 'Active esta opción para forzar los clientes a conectarse a Piwigo a través de una conexión segura.';
$lang['fhp_force_https_label'] = 'Forzar HTTPS';
$lang['fhp_force_https_warning'] = '<b> Advertencia!</b> Antes de activar la conexión segura, por favor verifique si su servidor soporta https. Puede hacer clic en el siguiente enlace para probar (carga esta página en modo https).';
$lang['fhp_options_group'] = 'Opciones';
$lang['fhp_security_group'] = 'Ajustes de seguridad';
$lang['fhp_sts_maxage_comment'] = 'STS max-age en segundos';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_submit'] = 'Enviar';
$lang['fhp_test_https_link'] = 'Probar esta página en https (ventana popup)';
$lang['fhp_activate_sts_comment_short'] = 'Activa la Seguridad Estricta del Transporte HTTP (HSTS). Sólo debe utilizarse si se posee un certificado TLS firmado';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'El valor de Max-age debería ser por lo menos de seis meses de duración (15768000), pero se recomienda un período más largo, como dos años (63072000).';
$lang['seconds'] = 'segundos';
$lang['301 permanent, 302 temporary'] = '301 permanente, 302 temporal';
$lang['Advanced options'] = 'Opciones avanzadas';
$lang['Force HTTPS for administration'] = 'Forzar HTTPS para la administración';
$lang['Force HTTPS for identification'] = 'Forzar HTTPS para la identificación';
$lang['Force usage of HTTPS on this site'] = 'Forzar el uso de HTTPS en este sitio';
$lang['Global HTTPS'] = 'HTTPS global';
$lang['Global activation'] = 'Activación global';
$lang['HTTPS activated for administration pages only'] = 'HTTPS activado sólo para las páginas de administración';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS activado sólo para las páginas de identificación, registro y perfil';
$lang['HTTPS available'] = 'HTTPS disponible';
$lang['HTTPS unavailable'] = 'HTTPS no disponible';
$lang['I have proceeded to the manual check'] = 'He realizado la comprobación manual';
$lang['Manual Verification'] = 'Verificación manual';
$lang['Parial activation'] = 'Activación parcial';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'El plugin no ha podido verificar automáticamente la compatibilidad SSL/HTTPS de su servidor. Compruebe manualmente que la navegación HTTPS está disponible utilizando el botón siguiente. NO ACTIVE HTTPS si la página de la ventana emergente no se puede cargar correctamente.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Su servidor de alojamiento no da soporte a HTTPS; se necesita un certificado SSL. La activación del plugin se ha inhabilitado.';
$lang['Your hosting server does support HTTPS.'] = 'Su servidor de alojamiento da soporte a HTTPS.';