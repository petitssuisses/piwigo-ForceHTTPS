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
$lang['fhp_options_group'] = '选项';
$lang['fhp_security_group'] = '安全设置';
$lang['fhp_sts_maxage_comment'] = 'STS max-age in seconds';
$lang['fhp_sts_maxage_label'] = 'STS max-age';
$lang['fhp_submit'] = '提交';
$lang['fhp_test_https_link'] = '在https模式下测试本页面（弹窗）';
$lang['fhp_force_https_comment'] = '启用本选项以强制客户端通过安全的连接访问Piwigo。';
$lang['fhp_force_https_label'] = 'Force HTTPS';
$lang['fhp_force_https_warning'] = '<b>警告！</b> 在启用安全连接前，请确认您的服务器支持https。您可点击下面的链接来测试（在https模式下加载本页面）。';
$lang['fhp_activate_sts_label'] = '使用 STS';
$lang['fhp_description'] = '本插件填补了一项Piwigo安全漏洞。它使得管理员可强制用户使用受SSL保护的连接来浏览Piwigo（当主机的https被启用时）。 <br>强烈建议使用安全的连接来保护用户名与密码的传输。';
$lang['fhp_about'] = '关于';
$lang['fhp_activate_sts_comment'] = 'Active HTTP Strict Transport Security (HSTS)<br/>如果您拥有一个注册了的TLS证书，则必须启用此选项。如果"Force HTTPS"被关闭，则无效果<br/><br/> <i>HSTS 是一种网络安全机制，网络服务器通过它告知浏览器仅可使用安全的HTTPS连接才能与之互动。当 HSTS 被启用，一块名为"Strict-Transport-Security"的头部区域被放置在http头部，任何网站链接将自动被一个安全的连接替换。<br/></i>';
?>