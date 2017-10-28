<?php
/***********************************************
* File      :   admin.php
* Project   :   piwigo-force-https
* Descr     :   Generate the admin panel
*
* Created   :   02.05.2013
* Updated   :   05.03.2014
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


// Test URL
$tpl_test_https_url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

// Load parameter
$tpl_use_https = $conf['fhp_use_https'] ? 'true' : 'false';
$tpl_use_sts = $conf['fhp_use_sts'] ? 'true' : 'false';

// Update conf if submitted in admin site
if (isset($_POST['submit']) && !empty($_POST['fhp_use_https']))
{
	$query = "UPDATE ". CONFIG_TABLE ." SET value='". $_POST['fhp_use_https'] ."' WHERE param='fhp_use_https'";
	pwg_query($query);

	// keep the value in the admin form
	$tpl_use_https = $_POST['fhp_use_https'];
}

// Update conf if submitted in admin site
if (isset($_POST['submit']) && !empty($_POST['fhp_use_sts']))
{
	$query = "UPDATE ". CONFIG_TABLE ." SET value='". $_POST['fhp_use_sts'] ."' WHERE param='fhp_use_sts'";
	pwg_query($query);

	// keep the value in the admin form
	$tpl_use_sts = $_POST['fhp_use_sts'];
}

// send value to template
$template->assign(
	array(
		'TPL_USE_HTTPS'			=> $tpl_use_https,
		'TPL_USE_STS'           => $tpl_use_sts,
		'TPL_TEST_URL'          => $tpl_test_https_url
	)
);

// Add our template to the global template
$template->set_filenames(
	array(
		'plugin_admin_content' => dirname(__FILE__).'/admin.tpl'
	) 
);

// Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>
