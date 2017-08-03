<?php

/**
 * Settings FinancialProcesses index view class
 * @package YetiForce.View
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
class Settings_FinancialProcesses_Index_View extends Settings_Vtiger_Index_View
{

	public function process(\App\Request $request)
	{

		\App\Log::trace("Entering Settings_FinancialProcesses_Index_View::process() method ...");
		$qualifiedModule = $request->getModule(false);
		$viewer = $this->getViewer($request);

		$viewer->assign('QUALIFIED_MODULE', $request->getModule(false));

		$viewer->view('Index.tpl', $qualifiedModule);
		\App\Log::trace("Exiting Settings_FinancialProcesses_Index_View::process() method ...");
	}
}
