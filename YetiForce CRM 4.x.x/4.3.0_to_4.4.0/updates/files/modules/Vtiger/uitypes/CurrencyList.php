<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * *********************************************************************************** */

class Vtiger_CurrencyList_UIType extends Vtiger_Picklist_UIType
{
	/**
	 * {@inheritdoc}
	 */
	public function validate($value, $isUserFormat = false)
	{
		if ($this->validate || empty($value)) {
			return;
		}
		if (!is_numeric($value)) {
			throw new \App\Exceptions\Security('ERR_ILLEGAL_FIELD_VALUE||' . $this->getFieldModel()->getFieldName() . '||' . $value, 406);
		}
		$this->validate = true;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDisplayValue($value, $record = false, $recordModel = false, $rawText = false, $length = false)
	{
		$currencylist = $this->getPicklistValues();

		return \App\Purifier::encodeHtml($currencylist[$value] ?? $value);
	}

	/**
	 * Function to get all the available picklist values for the current field.
	 *
	 * @return array List of picklist values if the field
	 */
	public function getPicklistValues()
	{
		$fieldModel = $this->getFieldModel();

		return $fieldModel->getCurrencyList();
	}

	public function getCurrenyListReferenceFieldName()
	{
		return 'currency_name';
	}

	/**
	 * Function defines empty picklist element availability.
	 *
	 * @return bool
	 */
	public function isEmptyPicklistOptionAllowed()
	{
		return false;
	}
}
