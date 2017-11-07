<?php
/***********************************************
* File      :   admin.php
* Project   :   piwigo-force-https
* Descr     :   Generates the admin panel
*
* Created   :   02.05.2013
* Updated   :   01.11.2017
* Author: bonhommedeneige
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
************************************************/

/**
Changelog :
 2.0.0 (01.11.2017) : Added new options
 1.3.0 (05.03.2014) : Upgrade for Piwigo 2.6 compatibility
 1.1.0 (03.05.2013) : No change yet
 1.0.0 (02.05.2013) : Initial version 
*/

// Check whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// Setup plugin Language
load_language('plugin.lang', FORCE_HTTPS_PATH);

// Fetch the template.
global $template, $conf, $lang;

// save config
if (isset($_POST['save_config']))
{
	$conf['force_https'] = array(
			'fhp_use_https' => isset($_POST['fhp_use_https']),
			'fhp_use_sts' => isset($_POST['fhp_use_sts']),
			'fhp_use_partial_https_login' => isset($_POST['fhp_use_partial_https_login']),
			'fhp_use_partial_https_admin' => isset($_POST['fhp_use_partial_https_admin']),
			'fhp_sts_maxage' => intval($_POST['fhp_sts_maxage']),
			'fhp_redirect_code' => intval($_POST['fhp_redirect_code']),
			
	);

	conf_update_param('force_https', $conf['force_https']);
	$page['infos'][] = l10n('Information data registered in database');
}

// Test URL
$tpl_test_https_url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

// send config to template
$template->assign(array(
		'force_https' => $conf['force_https'],
		'TPL_TEST_URL'          => $tpl_test_https_url,
));

// Add our template to the global template
$template->set_filenames(
	array(
		'plugin_admin_content' => dirname(__FILE__).'/admin.tpl'
	) 
);

// Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>
