<?php
/***********************************************
* File      :   maintain.class.php
* Project   :   piwigo-force-https
* Descr     :   Plugin maintenance methods
*
* Created   :   02.01.2015
* Updated   :   12.11.2017
* Author    :   Arnaud (bonhommedeneige)
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
 * Changelog 
 * 2.0.2 (12.11.2017) : See main.inc.php header
 * 2.0.0 (01.11.2017) : Recoded class to simplify usage and maintenance
 * 1.4.0 (02.01.2015) : New maintenance class (compatibility with Piwigo 2.7.x)
 */
if (! defined ('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

class Force_HTTPS_maintain extends PluginMaintain {
	// Default configuration
	private $default_conf = array (
		'fhp_use_https' => false, // Force https (on the whole site)
		'fhp_use_partial_https_login' => false, // Force https when using credential only
		'fhp_use_partial_https_admin' => false, // Force https when browsing the administration interface
		'fhp_use_sts' => false, // HTTP Strict Transport Security (HSTS) usage status tag used by the piwigo-force-https plugin
		'fhp_sts_maxage' => 15768000, 	 // max age duration (in seconds) used by the piwigo-force-https plugin
		'fhp_redirect_code' => 301,   // HTTP header redirect code (301 permanent, 302 temporary)
		'fhp_use_partial_http_other' => false,	// Force the use of HTTP on non protected pages
		'fhp_autocheck' => '',	// Autocheck if HTTPS is available on server ('N/A' No possible check, 'HTTP' http only, 'HTTPS' https available)
		'fhp_manual_confirm' => false,
	);

	private $dir;

	function __construct($plugin_id) {
		parent::__construct ( $plugin_id ); // always call parent constructor
		
		// Class members can't be declared with computed values so initialization is done here
		$this->dir = PHPWG_ROOT_PATH . PWG_LOCAL_DIR . 'Force_HTTPS/';
	}
	
	/**
	 * Plugin installation
	 *
	 * Perform here all needed step for the plugin installation such as create default config,
	 * add database tables, add fields to existing tables, create local folders...
	 */
	function install($plugin_version, &$errors = array()) {
		global $conf;
		
		// add config parameter
		if (empty ($conf['force_https'])) {
			// conf_update_param well serialize and escape array before database insertion
			// the third parameter indicates to update $conf['force_https'] global variable as well
			conf_update_param ('force_https', $this->default_conf, true );
		} else {
			$old_conf = safe_unserialize ($conf['force_https']);
			conf_update_param ('force_https', $old_conf, true);
		}
		
		// create a local directory
		if (! file_exists ( $this->dir )) {
			mkdir ( $this->dir, 0755 );
		}
	}
	
	/**
	 * Plugin uninstallation
	 *
	 * Perform here all cleaning tasks when the plugin is removed
	 * you should revert all changes made in 'install'
	 */
	function uninstall() {
		// delete configuration
		conf_delete_param ('force_https');
		
		// delete local folder
		// use a recursive function if you plan to have nested directories
		foreach ( scandir ( $this->dir ) as $file ) {
			if ($file == '.' or $file == '..')
				continue;
			unlink ( $this->dir . $file );
		}
		rmdir ( $this->dir );
	}
	
	/**
	 */
	function deactivate() {
	}
	
	/**
	 *
	 * @param unknown $plugin_version        	
	 * @param unknown $errors        	
	 */
	function activate($plugin_version, &$errors = array()) {
		global $conf;
		
		if (! isset ( $conf['force_https']['fhp_use_https'] )) {
			$this->install ( $plugin_version );
		}
	}
	
	/**
	 * Plugin (auto)update
	 *
	 * This function is called when Piwigo detects that the registered version of
	 * the plugin is older than the version exposed in main.inc.php
	 * Thus it's called after a plugin update from admin panel or a manual update by FTP
	 */
	function update($old_version, $new_version, &$errors = array()) {
		// uninstall old parameters
		$q = 'DELETE FROM '.CONFIG_TABLE.' WHERE param LIKE "fhp_%" LIMIT 6;';
		pwg_query( $q );
		// proceed to install of the new version
		$this->install ( $new_version, $errors );
	}
}
?>
