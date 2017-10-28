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
$lang['fhp_activate_sts_label'] = 'Lietot STS';
$lang['fhp_security_group'] = 'Drošības iestatījumi';
$lang['fhp_options_group'] = 'Izvēles';
$lang['fhp_activate_sts_comment'] = 'Aktīvā HTTP Striktā Transporta Drošība (HSTS) <br/> Ja jums pieder parakstīts TLS sertifikāts, šai iespējai ir jābūt aktivizētai.Ja "Piespiedu HTTPS" ir izslēgts, šī iespēja nedarbojas. <br/> <br/> <i> HSTS ir interneta drošības mehānisms, ar kuru tīmekļa serveris paziņo interneta pārlūkotājam, pārlūkojot izmantot tikai drošu HTTPS savienojumu. Kad HSTS ir aktīvs, http galvenē tiek ievietots lauks "Strikta-Transporta-Drošība" un jebkura vietnes saite tiek automātiski aizstāta ar drošu saiti <br/>. </ I>';
$lang['fhp_description'] = 'Šis spraudnis aizpilda drošības plaisu Piwigo. Tas dod iespēju administratoriem piespiest lietotājiem izmantot SSL drošo savienoju Piwigo pārlūkošanai (gadījumā, kad https ir pieejams hostinga serverī). Ir ļoti ieteicams izmantot drošos savienojumus, lai aizsargātu lietotāju un viņu paroles datu pārraides laikā.';
$lang['fhp_force_https_warning'] = '<b> Uzmanību! </ b> Pirms droša savienojuma aktivācijas, lūdzu, pārbaudiet vai jūsu serveris atbalsta https. Jūs varat noklikšķināt uz šīs saites, lai pārbaudītu (atvērt šo lapu, izmantojot https režīmu).';
$lang['fhp_test_https_link'] = 'Pārbaudīt šo lappusi https (uznirstošo logu)';
$lang['fhp_submit'] = 'Iesniegt';
$lang['fhp_sts_maxage_label'] = 'STS max-vecums';
$lang['fhp_sts_maxage_comment'] = 'STS max-vecums sekundēs';
$lang['fhp_force_https_comment'] = 'Aktivizēt šo iespēju, lai piespiestu klientus izveidot savienojumu ar Piwigo, izmantojot drošu pieslēgumu.';
$lang['fhp_force_https_label'] = 'Piespiedu HTTPS';
$lang['fhp_about'] = 'Par';
?>