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
$lang['fhp_activate_sts_comment'] = 'Активиране на HTTP Strict Transport Security (HSTS) <br/> Тази опция трябва да се активира, ако сте собственик на подписан TLS сертификат. Той няма ефект, ако "Force HTTPS" е изключен <br/><br/> <i> HSTS е механизъм за уеб сигурност, при която уеб сървър заявява уеб браузъри да взаимодействат с него само чрез сигурни връзки HTTPS. Когато HSTS е активна, а заглавната част "Strict-Transport-Security" се поставя в хедър, и всеки сайт, връзката автоматично се заменя със защитена връзка. <br/></i>';
$lang['fhp_about'] = 'Относно';
$lang['fhp_force_https_warning'] = '<b>Внимание!</b> Преди да активирате защитена връзка, моля, проверете си сървъра дали поддържа HTTPS. Можете да кликнете на следния линк за да тествате (зареди страницата на режим HTTPS).';
$lang['fhp_description'] = 'Този плъгин запълва пропуски в сигурността в галерията. Той позволява на администраторите да разреши използването на SSL обезпечени връзки за браузване (когато HTTPS е предоставена от хостинг сървър). <br> Силно препоръчваме да се използват защитени връзки за защита на потребителя и предавания парола.
';
$lang['fhp_activate_sts_label'] = 'Използване на STS';
$lang['fhp_force_https_comment'] = 'Активирайте тази опция, за да могат клиентите да се свързват към галерията чрез защитена връзка.';
$lang['fhp_force_https_label'] = 'Force HTTPS';
$lang['fhp_options_group'] = 'Опции';
$lang['fhp_security_group'] = 'Настройки по сигурноста';
$lang['fhp_test_https_link'] = 'Тест на страницата на HTTPS (изскачащ прозорец)';
$lang['fhp_submit'] = 'Изпращане';
$lang['fhp_sts_maxage_comment'] = 'STS максимално време в секунди';
$lang['fhp_sts_maxage_label'] = 'STS максимално време';
?>