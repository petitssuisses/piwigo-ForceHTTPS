<?php 
/*
Plugin Name: Force HTTPS
Version: auto
Description: Gives the capacity to force https connections on https enabled servers.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=697
Author: Arnaud (bonhommedeneige)
Author URI: http://piwigo.org/forum/profile.php?id=19052

Changelog :
 2.0.0 (06.11.2017) : Upgraded plugin design
 					  Implemented 
 1.5.0 (01.11.2017) : Upgrade for Piwigo 2.9
 					  Remove useless ...init() function
 1.4.0 (02.01.2015) : Upgrade for Piwigo 2.7 compatibility
 1.3.0 (05.03.2014) : Upgrade for Piwigo 2.6 compatibility
 1.2.0 (05.05.2013) : Fixed unicity of strbool function (renamed to piwigo_force_https_strbool)
                      Caused unicity issue with video-js plugin
 1.1.0 (04.05.2013) : Added response code 301 before redirecting to https
					  Added capacity to activate or not HSTS
 					  Corrected initialization of configuration at first launch
 1.0.0 (02.05.2013) : Initial version 
*/

defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

define('FORCE_HTTPS_PREFIX','https');			// prefix for https connections
define('FORCE_HTTPS_ID',      basename(dirname(__FILE__)));
define('FORCE_HTTPS_PATH' ,   PHPWG_PLUGINS_PATH . FORCE_HTTPS_ID . '/');
global $conf;

// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+
// init the plugin
add_event_handler('init', 'force_https_init');

// register new identification block when https identfication is enabled
add_event_handler('blockmanager_register_blocks', 'force_https_identification_menu_register');
// hide identification menu when https identification is enabled
add_event_handler('blockmanager_apply', 'force_https_hide_identification_menu');

if (defined('IN_ADMIN'))
{
  // admin plugins menu link
  add_event_handler('get_admin_plugin_menu_links', 'force_https_admin_plugin_menu_links');
}
add_event_handler('loc_end_page_header', 'force_https_header' );

/**
 * Admin plugins menu link
 */
function force_https_admin_plugin_menu_links($menu) 
{
  array_push($menu, array(
    'NAME' => l10n('Force HTTPS'),
    'URL' => get_admin_plugin_menu_link(dirname(__FILE__).'/admin.php'),
  ));
  return $menu;
}

/**
 * Http connections control
 * - function completes http header based on configuration settings
 */
function force_https_header() {
	global $conf;
	
	if ($conf['force_https']['fhp_use_partial_https_login'] and script_basename()=='identification') {
		force_https_set_header_https();	// Force HTTPS for identification page
	} else if ($conf['force_https']['fhp_use_partial_https_login'] and script_basename()=='register') {
		force_https_set_header_https();	// Force HTTPS for register page
	} else if ($conf['force_https']['fhp_use_partial_https_login'] and script_basename()=='profile') {
		force_https_set_header_https();	// Force HTTPS for profile page
	} else if ($conf['force_https']['fhp_use_partial_https_admin'] and script_basename()=='admin') {
		force_https_set_header_https();	// Force HTTPS for admin pages
	} else if ($conf['force_https']['fhp_use_https']) {
		if ($conf['force_https']['fhp_use_sts'] && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
			force_https_set_header_sts();	// Sets HSTS header
		} elseif (!isset($_SERVER['HTTPS'])) {
			force_https_set_header_https();	// Force HTTPS globally
		}
	}
}

/**
 * Activates the HSTS header
 */
function force_https_set_header_sts() {
	global $conf;
	// With HSTS activated
	header('Strict-Transport-Security: max-age='.$conf['force_https']['fhp_sts_maxage']);
}

/**
 * Activates SSL navigation
 */
function force_https_set_header_https() {
	global $conf;
	// Without HSTS
	header('Status-Code: '.$conf['force_https']['fhp_redirect_code']);
	header('Location: '.FORCE_HTTPS_PREFIX.'://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);
}

/**
* plugin initialization
*   - check for upgrades
*   - unserialize configuration
*   - load language
*/
function force_https_init()
{
	global $conf;

	// load plugin language file
	load_language('plugin.lang', FORCE_HTTPS_PATH);

	// prepare plugin configuration
	$conf['force_https'] = safe_unserialize($conf['force_https']);
}

function force_https_identification_menu_register($menu_ref_arr )
{
  $menu = & $menu_ref_arr[0];
  if ($menu->get_id() != 'menubar')
    return;
  $menu->register_block( new RegisteredBlock( 'mbForceHttpsIdentifcation', 'mbForceHttpsIdentifcation', 'Force_HTTPS'));
}

function force_https_hide_identification_menu($menublock) {
	global $conf,$template,$user;
	
	if ($conf['force_https']['fhp_use_partial_https_login'])
	{
		$menublock[0]->hide_block('mbIdentification'); 	// Removes Identification existing block
		
		// Send data to template
		$template->assign (
			array	(
					'force_https_menu_title' => l10n('Connexion'),
					'force_https_menu_name'  => l10n('Connexion'),
					'force_https_menu_url' => get_root_url().'identification.php',
					'force_https_theme' => $user['theme'],
			)
		);
		 
		if (($menublock[0]->get_block('mbForceHttpsIdentifcation')) != null) {
			$template->set_template_dir(FORCE_HTTPS_PATH.'template/');
			$menublock[0]->get_block('mbForceHttpsIdentifcation')->template = 'menubar_ident.tpl';
		}
	}
	
	
}
?>