<?php 
/*
Plugin Name: Force HTTPS
Version: 1.4.0
Description: Gives the capacity to force https connections on https enabled servers.
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=697
Author: bonhommedeneige
Author URI: http://piwigo.org/forum/profile.php?id=19052

Changelog :
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

global $conf;

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
define('FORCE_HTTPS_ID', basename(dirname(__FILE__)));
define('FORCE_HTTPS_PATH' ,   PHPWG_PLUGINS_PATH . FORCE_HTTPS_ID . '/');
define('FORCE_HTTPS_VERSION', '1.4.0');
// this is automatically updated by PEM if you publish your plugin with SVN, otherwise you musn't forget to change it, as well as "Version" in the plugin header


// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+
// init the plugin
add_event_handler('init', 'piwigo_force_https_init');

if (defined('IN_ADMIN'))
{
  // admin plugins menu link
  add_event_handler('get_admin_plugin_menu_links', 'piwigo_force_https_admin_plugin_menu_links');
}

add_event_handler('loc_end_page_header', 'piwigo_force_https_header' );

/**
 * Admin plugins menu link
 */
function piwigo_force_https_admin_plugin_menu_links($menu) 
{
  array_push($menu, array(
    'NAME' => l10n('Force HTTPS'),
    'URL' => get_admin_plugin_menu_link(dirname(__FILE__).'/admin.php'),
  ));
  return $menu;
}

/**
 * plugin initialization
 *   - check for upgrades
 *   - unserialize configuration
 *   - load language
 */
function piwigo_force_https_init()
{
  global $conf, $pwg_loaded_plugins;
  
  // apply upgrade if needed
  if (
    FORCE_HTTPS_VERSION == 'auto' or
    $pwg_loaded_plugins[FORCE_HTTPS_ID]['version'] == 'auto' or
    version_compare($pwg_loaded_plugins[FORCE_HTTPS_ID]['version'], FORCE_HTTPS_VERSION, '<')
  )
  {
    // call install function
    include_once(FORCE_HTTPS_PATH . 'maintain.inc.php');
    plugin_install();
    
    // update plugin version in database
    if ( $pwg_loaded_plugins[FORCE_HTTPS_ID]['version'] != 'auto' and FORCE_HTTPS_VERSION != 'auto' )
    {
      $query = '
		UPDATE '. PLUGINS_TABLE .'
		SET version = "'. FORCE_HTTPS_VERSION .'"
		WHERE id = "'. FORCE_HTTPS_ID .'"';
      pwg_query($query);
      
      $pwg_loaded_plugins[FORCE_HTTPS_ID]['version'] = FORCE_HTTPS_VERSION;
      
      if (defined('IN_ADMIN'))
      {
        $_SESSION['page_infos'][] = 'Force https updated to version '. FORCE_HTTPS_VERSION;
      }
    }
  }
}

/**
 * Http connections control
 * - function completes http header based on configuration settings
 */
function piwigo_force_https_header() {
	global $conf;

	// Force https connection
	$use_https = isset($conf['fhp_use_https']) ? piwigo_force_https_strbool($conf['fhp_use_https']) : 'false';
	$use_sts = isset($conf['fhp_use_sts']) ? piwigo_force_https_strbool($conf['fhp_use_sts']) : 'false';

	// Activates STS security
	if ($use_https == 'true') {
		if ($use_sts == 'true' && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
		  header('Strict-Transport-Security: max-age=500');
		} elseif (!isset($_SERVER['HTTPS'])) {
		  header('Status-Code: 301');
		  header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);
		}
	}
}

function piwigo_force_https_strbool($value)
{
	return $value ? 'true' : 'false';
}
?>