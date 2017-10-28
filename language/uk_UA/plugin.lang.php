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
$lang['fhp_submit'] = 'Підтвердити';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_sts_maxage_comment'] = 'STS max-age у секундах';
$lang['fhp_force_https_warning'] = '<b>Увага!</b> Перед включенням захищеного з\'єднання, переконайтеся, будь ласка, що ваш сервер підтримує HTTPS. Ви можете натиснути на посилання, щоб перевірити (завантажте цю сторінку в режимі HTTPS).';
$lang['fhp_description'] = 'Цей плагін закриває діру у безпеці Piwigo. Він дозволяє адміністраторам змусити використовувати SSL захищені з\'єднання для перегляду Piwigo (коли HTTPS доступна на хостинг-сервері). <br> Настійливо рекомендуємо використовувати безпечні з\'єднання для захисту при передачі імені користувача та паролю.';
$lang['fhp_activate_sts_comment'] = 'Активний HTTP Strict Transport Security (HSTS) <br/> Ця опція повинна бути активована, якщо у вас є підписаний TLS certficate. Це не має ніякого ефекту, якщо "Примусовий HTTPS" вимкнений<br/><br/> <i> HSTS є механізм веб-безпеки за допомогою веб-сервер заявляє веб-браузеру, щоб взаємодіяти з ним тільки за допомогою захищених з\'єднань HTTPS. Коли HSTS активний, поле заголовку "Strict-Transport-Security" знаходиться в заголовку HTTP, і кожне посилання на сайті автоматично замінюється на захищене посилання.<br/></i>';
$lang['fhp_force_https_label'] = 'Примусовий HTTPS';
$lang['fhp_force_https_comment'] = 'Активуйте цю опцію для примусу клієнтів використовувати безпечне з\'єднання при підключенні до Piwigo.';
$lang['fhp_test_https_link'] = 'Перевірте цю сторінку в HTTPS (спливаюче вікно)';
$lang['fhp_security_group'] = 'Налаштування безпеки';
$lang['fhp_options_group'] = 'Опції';
$lang['fhp_activate_sts_label'] = 'Використовувати STS';
$lang['fhp_about'] = 'Про плагін';