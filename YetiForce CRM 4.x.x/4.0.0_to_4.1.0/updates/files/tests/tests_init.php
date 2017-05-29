<?php
/**
 * Travis CI test script
 * @package YetiForce.Test
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
chdir(__DIR__ . '/../');
define('ROOT_DIRECTORY', getcwd());

if (!class_exists('Vtiger_WebUI')) {
	require_once 'include/main/WebUI.php';
}
\App\Config::$requestMode = 'TEST';

//fix phpunit console for windows
if (!getenv('ANSICON')) {
	putenv('ANSICON=80');
}

error_reporting(E_ALL & ~E_NOTICE);
AppConfig::iniSet('display_startup_errors', 1);
AppConfig::iniSet('display_errors', 'On');
AppConfig::iniSet('log_errors', 'On');
AppConfig::iniSet('error_log', ROOT_DIRECTORY . 'cache/logs/phpError.log');
AppConfig::iniSet('output_buffering', 'On');
AppConfig::iniSet('max_execution_time', 600);
AppConfig::iniSet('default_socket_timeout', 600);
AppConfig::iniSet('post_max_size', '200M');
AppConfig::iniSet('upload_max_filesize', '200M');
AppConfig::iniSet('max_input_vars', 10000);
AppConfig::iniSet('xdebug.enable', 'On');
Vtiger_Session::init();
