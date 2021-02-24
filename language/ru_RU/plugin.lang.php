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
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Максимальный возраст должен равняться минимум шести месяцам (15768000), но рекомендуется более длительный период, например, два года (63072000)';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Плагин не может автоматически проверить совместимость Вашего хоста SSL/HTTPS. Пожалуйста, проверьте вручную, что навигация HTTPS доступна, пользуясь следующей кнопкой. НЕ активируйте HTTPS, если страница во всплывающем окне не загрузилась или загрузилась неуспешно.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Ваш хостинг-сервер не поддерживает HTTPS, требуется сертификат SSL. Активация плагина отключена.';
$lang['Manual Verification'] = 'Ручная проверка';
$lang['I have proceeded to the manual check'] = 'Я приступил к ручной проверке';
$lang['Your hosting server does support HTTPS.'] = 'Ваш сервер хостинга поддерживает HTTPS.';
$lang['fhp_activate_sts_comment_short'] = 'Активирует HTTP Strict Transport Security (HSTS). Использовать только в том случае, если у Вас есть подписанный сертификат TLS';
$lang['301 permanent, 302 temporary'] = '301 постоянно, 302 временно';
$lang['Advanced options'] = 'Дополнительные опции';
$lang['Force HTTPS for administration'] = 'Force HTTPS для администрации';
$lang['Force HTTPS for identification'] = 'Force HTTPS для идентификации';
$lang['Force usage of HTTPS on this site'] = 'Усиленное использование HTTPS на этом сайте';
$lang['Global HTTPS'] = 'Глобальный HTTPS';
$lang['Global activation'] = 'Глобальная активация';
$lang['HTTPS activated for administration pages only'] = 'HTTPS активируется только для административных страниц';
$lang['HTTPS activated for identification, register and profile pages only'] = 'HTTPS активируется только для идентификации, регистрации и профиля';
$lang['HTTPS available'] = 'HTTPS доступен';
$lang['HTTPS unavailable'] = 'HTTPS недоступен';
$lang['Parial activation'] = 'Частичная активация';
$lang['seconds'] = 'секунд';