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
$lang['fhp_about'] = 'О плагине';
$lang['fhp_activate_sts_comment'] = 'Активировать HTTP Strict Transport Security (HSTS)<br/>
Эта функция должна быть включена, если у Вас есть подписанный сертификат TLS. При этом эффекта не будет, если режим "Force HTTPS" выключен.
<br/><br/> <i>HSTS – это механизм безопасности web, согласно которому сервер взаимодействует с браузером только с использованием безопасных соединений HTTPS. Когда HSTS активен, надпись «Strict-Transport-Security» помещается в заголовок http-страницы; при этом любое соединение с сайтом автоматически переводится в защищенный режим.<br/></i>';
$lang['fhp_activate_sts_label'] = 'Режим STS';
$lang['fhp_description'] = 'Этот плагин дополняет возможности Piwigo в части безопасности. Он позволяет администраторам принудительно применять защищенное соединение SSL для всех пользователей, подключающихся к Piwigo (конечно, если сервер Вашего хостера позволяет использовать режим https).  <br> Защищенное соединение настойчиво рекомендуется к использованию для обеспечения сохранности паролей и сведений о пользователях.';
$lang['fhp_force_https_comment'] = 'Активация этой функции установит для всех пользователей обязательное подключение к Piwigo только в защищенном режиме';
$lang['fhp_force_https_label'] = 'Force HTTPS';
$lang['fhp_force_https_warning'] = '<b>ВНИМАНИЕ! Очень важно!</b> Перед активацией защищенного соединения, пожалуйста, убедитесь, что Ваш сервер поддерживает режим https. Для проверки Вы можете перейти по ссылке (эта страница загрузится в режиме https).';
$lang['fhp_options_group'] = 'Дополнительно';
$lang['fhp_security_group'] = 'Установки безопасности';
$lang['fhp_sts_maxage_comment'] = 'Максимальная длительность STS в секундах';
$lang['fhp_sts_maxage_label'] = 'Максимальная длительность ЫЕЫ';
$lang['fhp_submit'] = 'Подтвердить';
$lang['fhp_test_https_link'] = 'Тест этой страницы в режиме https (всплывающее окно)';
?>