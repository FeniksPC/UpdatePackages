<?php
/**
 * Cron test class
 * @package YetiForce.Test
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
use PHPUnit\Framework\TestCase;

/**
 * @covers Cron::<public>
 */
class Cron extends TestCase
{

	public function test()
	{
		echo PHP_EOL;
		require 'cron/vtigercron.php';
		$rows = (new \App\Db\Query())->select(['modue' => 'setype', 'rows' => 'count(*)'])->from('vtiger_crmentity')->groupBy('setype')->orderBy(['rows' => SORT_DESC])->all();
		$c = '';
		foreach ($rows as $value) {
			$c .= "{$value['modue']} = {$value['rows']}" . PHP_EOL;
		}
		file_put_contents('tests/records.log', $c, FILE_APPEND);
	}
}
