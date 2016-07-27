<?php
/* {[The file is published on the basis of YetiForce Public License that can be found in the following directory: licenses/License.html]} */

class AppConfig
{

	protected static $api = [];
	protected static $main = [];
	protected static $debug = [];
	protected static $developer = [];
	protected static $security = [];
	protected static $securityKeys = [];
	protected static $performance = [];
	protected static $relation = [];
	protected static $modules = [];
	protected static $sounds = [];

	public static function load($key, $config)
	{
		self::$$key = $config;
	}

	public static function main($key, $value = false)
	{
		if (key_exists($key, $GLOBALS)) {
			self::$main[$key] = $GLOBALS[$key];
			return $GLOBALS[$key];
		} elseif (key_exists($key, self::$main)) {
			return self::$main[$key];
		}
		return $value;
	}

	public static function module()
	{
		$argsLength = func_num_args();
		$args = func_get_args();
		$module = $args[0];
		if ($argsLength == 2) {
			$key = $args[1];
		}
		if (key_exists($module, self::$modules)) {
			switch ($argsLength) {
				case 1:
					return self::$modules[$module];
					break;
				case 2:
					return self::$modules[$module][$key];
					break;
			}
		}
		$fileName = 'config/modules/' . $module . '.php';
		if (!file_exists($fileName)) {
			return false;
		}
		require_once $fileName;
		if (empty($CONFIG)) {
			return false;
		}
		self::$modules[$module] = $CONFIG;
		switch ($argsLength) {
			case 2:
				if (!isset($CONFIG[$key]))
					return false;
				return $CONFIG[$key];
				break;
			default:
				return $CONFIG;
				break;
		}
	}

	public static function api($key, $defvalue = false)
	{
		return self::$api[$key];
	}

	public static function debug($key, $defvalue = false)
	{
		return self::$debug[$key];
	}

	public static function developer($key, $defvalue = false)
	{
		return self::$developer[$key];
	}

	public static function security($key, $defvalue = false)
	{
		return self::$security[$key];
	}

	public static function securityKeys($key, $defvalue = false)
	{
		return self::$securityKeys[$key];
	}

	public static function performance($key, $defvalue = false)
	{
		return self::$performance[$key];
	}

	public static function relation($key, $defvalue = false)
	{
		return self::$relation[$key];
	}

	public static function sounds()
	{
		if (func_num_args() == 0) {
			return self::$sounds;
		}
		$key = func_get_args(1);
		return self::$sounds[$key];
	}

	public static function iniSet($key, $value)
	{
		@ini_set($key, $value);
	}
}

if (ROOT_DIRECTORY == 'ROOT_DIRECTORY') {
	define('ROOT_DIRECTORY', str_replace(DIRECTORY_SEPARATOR . 'include', '', dirname(__FILE__)));
}

require_once 'config/api.php';
require_once 'config/config.php';
require_once 'config/debug.php';
require_once 'config/developer.php';
require_once 'config/performance.php';
require_once 'config/relation.php';
require_once 'config/secret_keys.php';
require_once 'config/security.php';
require_once 'config/version.php';
require_once 'config/sounds.php';
require_once('include/autoload.php');

AppConfig::load('debug', $DEBUG_CONFIG);
AppConfig::load('developer', $DEVELOPER_CONFIG);
AppConfig::load('security', $SECURITY_CONFIG);
AppConfig::load('securityKeys', $SECURITY_KEYS_CONFIG);
AppConfig::load('performance', $PERFORMANCE_CONFIG);
AppConfig::load('relation', $RELATION_CONFIG);
AppConfig::load('sounds', $SOUNDS_CONFIG);
AppConfig::load('api', $API_CONFIG);

session_save_path(ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'session');
// Change of logs directory with PHP errors
AppConfig::iniSet('error_log', ROOT_DIRECTORY . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'phpError.log');

