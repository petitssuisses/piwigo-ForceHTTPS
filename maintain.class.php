<?php
/***********************************************
* File      :   maintain.class.php
* Project   :   piwigo-force-https
* Descr     :   Plugin maintenance methods
*
* Created   :   02.01.2015
* Updated   :   
* Author    :   bonhommedeneige
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
 1.4.0 (02.01.2015) : New maintenance class (compatibility with Piwigo 2.7.x)
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!defined('FORCE_HTTPS_PATH')) define('FORCE_HTTPS_PATH' , PHPWG_PLUGINS_PATH . basename(dirname(__FILE__)) . '/');

class Force_HTTPS_maintain extends PluginMaintain {
	/**
	 * 
	 * @param unknown $plugin_version
	 * @param unknown $errors
	 */
	function install($plugin_version, &$errors=array())
	{
		$q = 'INSERT INTO '.CONFIG_TABLE.' (param,value,comment)
			VALUES ("fhp_use_https", "false", "https usage status tag used by the piwigo-force-https plugin");';
		pwg_query( $q );
		
		$q = 'INSERT INTO '.CONFIG_TABLE.' (param,value,comment)
			VALUES ("fhp_use_sts", "false", "HTTP Strict Transport Security (HSTS) usage status tag used by the piwigo-force-https plugin");';
		pwg_query( $q );
		
		$q = 'INSERT INTO '.CONFIG_TABLE.' (param,value,comment)
			VALUES ("fhp_sts_maxage", "500", "max age duration (in seconds) used by the piwigo-force-https plugin");';
		pwg_query( $q );
	}
	
	/**
	 * 
	 */
	function uninstall()
	{
		if (is_dir(PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'piwigo-force-https'))
		{
			$this->force_https_deltree(PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'piwigo-force-https');
		}
		$q = 'DELETE FROM '.CONFIG_TABLE.' WHERE param LIKE "fhp_%" LIMIT 6;';
		pwg_query( $q );
	}
	
	/**
	 * 
	 */
	function deactivate() {
		
	}
	
	/**
	 * 
	 * @param unknown $plugin_version
	 * @param unknown $errors
	 */
	function activate($plugin_version, &$errors=array())
	{
		global $conf;
	
		if (!isset($conf['fhp_use_https']))
		{
			plugin_install();
			$this->install($plugin_version);
		}
	}
	
	/**
	 * 
	 * @param unknown $plugin_version
	 * @param unknown $errors
	 */
	function update($old_version, $new_version, &$errors=array()) {
	}

	/**
	 * 
	 * @param unknown $path
	 */
	private function force_https_deltree($path)
	{
		if (is_dir($path))
		{
			$fh = opendir($path);
			while ($file = readdir($fh))
			{
				if ($file != '.' and $file != '..')
				{
					$pathfile = $path . '/' . $file;
					if (is_dir($pathfile))
					{
						force_https_deltree($pathfile);
					}
					else
					{
						@unlink($pathfile);
					}
				}
			}
			closedir($fh);
			return @rmdir($path);
		}
	}
}
?>
