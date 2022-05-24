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
$lang['fhp_activate_sts_comment'] = 'HTTP Sıkı Nakil Güvenliği (Strict Transport Security, HSTS) etkinleştirin.)<br/> Eğer kendinize ait imzalı TLS sertifikanız varsa bu seçenek mutlaka etkinleştirilmelidir. "HTTPS\'ye zorla" seçeneği kapalıysa etkisi olmayacaktır.<br/><br/> <i>HSTS, web tarayıcısına sadece güvenli bağlantıyla sunucuya erişilebileceğini deklare eden bir ağ güvenlik mekanizmasıdır. HSTS etkinleştirildiğinde http başlığında "Strict-Transport-Security" adlı alan yer alır ve mevcut bağlantı güvenli bağlantıyla otomatik olarak değiştirilir.<br/></i>';
$lang['fhp_description'] = 'Bu eklenti Piwigo\'daki bir güvenlik açığını kapatır. Yöneticilere Piwigo gezintisini güvenli bağlantı üzerinden yapmayı zorlamak için seçenek sunar (sunucuda https kullanım olanağı varsa).
<br>Kullanıcı ve şifre transfer işlemlerini korumak için güvenli bağlantı şiddetle önerilir.';
$lang['fhp_force_https_warning'] = '<b>Uyarı !</b> Güvenli bağlantıyı etkinleştirmeden önce https için sunucu desteğinizin olup olmadığını kontrol ediniz. Takip eden bağlantıya tıklayarak test edebilirsiniz (bu sayfayı https üzerinden görüntüler)';
$lang['fhp_force_https_comment'] = 'İstemcilerin Piwigo\'ya güvenli bağlantı üzerinden bağlanmasını zorlamak için bu seçeneği etkinleştirin';
$lang['fhp_test_https_link'] = 'Bu sayfayı https olarak test et (açılır pencere)';
$lang['fhp_sts_maxage_label'] = 'STS azami süre';
$lang['fhp_sts_maxage_comment'] = 'Saniye olarak STS maks. süre';
$lang['fhp_submit'] = 'Gönder';
$lang['fhp_security_group'] = 'Güvenlik ayarları';
$lang['fhp_options_group'] = 'Seçenekler';
$lang['fhp_about'] = 'Hakkında';
$lang['fhp_activate_sts_label'] = 'STS kullan';
$lang['fhp_force_https_label'] = 'HTTPS\'ye zorla';
$lang['seconds'] = 'saniye';
$lang['max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'] = 'Maksimum yaş(Max-age), minimum altı aylık süreye (15768000) eşit olmalıdır, ancak iki yıl (63072000) gibi daha uzun bir süre önerilir';
$lang['fhp_activate_sts_comment_short'] = 'Yalnızca imzalı bir TLS sertifikanız varsa kullanmak için; HTTP Strict Transport Security\'yi (HSTS) etkinleştirir. ';
$lang['Your hosting server does support HTTPS.'] = 'Barındırma sunucunuz HTTPS\'yi destekliyor.';
$lang['Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'] = 'Barındırma sunucunuz HTTPS\'yi desteklemiyor, bir SSL sertifikası gerekiyor. Eklenti aktivasyonu devre dışı.';
$lang['Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'] = 'Eklenti, ana bilgisayar SSL/HTTPS uyumluluğunuzu otomatik olarak doğrulayamadı. Lütfen aşağıdaki düğmeyi kullanarak HTTPS navigasyonunun mevcut olup olmadığını manuel olarak kontrol edin. Açılır penceredeki sayfa başarıyla yüklenemiyorsa HTTPS\'yi ETKİNLEŞTİRMEYİN.';
$lang['Parial activation'] = 'Kısmi aktivasyon';
$lang['Manual Verification'] = 'Manuel Doğrulama';
$lang['I have proceeded to the manual check'] = 'Manuel kontrole geçtim';
$lang['HTTPS unavailable'] = 'HTTPS kullanılamıyor';
$lang['HTTPS available'] = 'HTTPS kullanılabilir';
$lang['HTTPS activated for identification, register and profile pages only'] = 'Yalnızca kimlik, kayıt ve profil sayfaları için etkinleştirilmiş HTTPS';
$lang['HTTPS activated for administration pages only'] = 'Yalnızca yönetim sayfaları için etkinleştirilmiş HTTPS';
$lang['Global activation'] = 'Genel aktivasyon';
$lang['Global HTTPS'] = 'Genel HTTPS';
$lang['Force HTTPS for identification'] = 'Kimlik için HTTPS\'yi zorla';
$lang['Force usage of HTTPS on this site'] = 'Bu sitede HTTPS kullanımını zorla';
$lang['Force HTTPS for administration'] = 'Yönetim için HTTPS\'yi zorla';
$lang['Advanced options'] = 'Gelişmiş seçenekler';
$lang['301 permanent, 302 temporary'] = '301 kalıcı, 302 geçici';