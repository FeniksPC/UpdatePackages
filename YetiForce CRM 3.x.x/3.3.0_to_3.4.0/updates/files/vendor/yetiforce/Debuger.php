<?php namespace App;

/**
 * Debuger basic class
 * @package YetiForce.Include
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
use DebugBar;
use DebugBar\DataCollector;
use Yii;

class Debuger
{

	protected static $debugBar;

	static public function initConsole()
	{
		$debugbar = new DebugBar\DebugBar();
		$debugbar->addCollector(new DataCollector\PhpInfoCollector());
		$debugbar->addCollector(new DataCollector\RequestDataCollector());
		$debugbar->addCollector(new DataCollector\TimeDataCollector());
		$debugbar->addCollector(new DataCollector\MemoryCollector());
		if (\AppConfig::debug('LOG_TO_CONSOLE')) {
			$debugbar->addCollector(new debug\DebugBarLogs());
		}
		$debugbar->addCollector(new DataCollector\ExceptionsCollector());
		return self::$debugBar = $debugbar;
	}

	static public function getDebugBar()
	{
		return self::$debugBar;
	}

	public static function addLogs($message, $level, $traces)
	{
		if (isset(self::$debugBar['logs'])) {
			self::$debugBar['logs']->addMessage($message, $level, $traces);
		}
	}

	static public function initLogger()
	{
		$targets = [];
		if (\AppConfig::debug('LOG_TO_FILE')) {
			$levels = \AppConfig::debug('LOG_LEVELS');
			$target = [
				'class' => 'App\log\FileTarget'
			];
			if ($levels !== false) {
				$target['levels'] = $levels;
			}
			$targets['file'] = $target;
		}
		Yii::createObject([
			'class' => 'yii\log\Dispatcher',
			'traceLevel' => \AppConfig::debug('LOG_TRACE_LEVEL'),
			'targets' => $targets
		]);
	}

	public static function getBacktrace($minLevel = 1, $maxLevel = 0, $sep = '#')
	{
		$trace = '';
		foreach (debug_backtrace() as $k => $v) {
			if ($k < $minLevel) {
				continue;
			}
			$l = $k - $minLevel;
			$args = '';
			if (isset($v['args'])) {
				foreach ($v['args'] as &$arg) {
					if (!is_array($arg) && !is_object($arg) && !is_resource($arg)) {
						$args .= "'$arg'";
					} elseif (is_array($arg)) {
						$args .= '[';
						foreach ($arg as &$a) {
							$val = $a;
							if (is_array($a) || is_object($a) || is_resource($a)) {
								$val = gettype($a);
								if (is_object($a)) {
									$val .= '(' . get_class($a) . ')';
								}
							}
							$args .= $val . ',';
						}
						$args = rtrim($args, ',') . ']';
					}
					$args .= ',';
				}
				$args = rtrim($args, ',');
			}
			$file = str_replace(ROOT_DIRECTORY . DIRECTORY_SEPARATOR, '', $v['file']);
			$trace .= $sep . $l . ' ' . (isset($v['class']) ? $v['class'] . '->' : '') . $v['function'] . '(' . $args . ') in ' . $file . '(' . $v['line'] . '): ' . PHP_EOL;
			if ($maxLevel !== 0 && $l >= $maxLevel) {
				break;
			}
		}
		return rtrim($trace, PHP_EOL);
	}
}
