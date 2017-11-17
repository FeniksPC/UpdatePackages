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

class Vtiger_Date_UIType extends Vtiger_Base_UIType
{

	/**
	 * Function to get the DB Insert Value, for the current field type with given User Value
	 * @param mixed $value
	 * @param \Vtiger_Record_Model $recordModel
	 * @return mixed
	 */
	public function getDBValue($value, $recordModel = false)
	{
		if (!empty($value)) {
			return self::getDBInsertedValue($value);
		}
		return '';
	}

	/**
	 * Verification of data
	 * @param string $value
	 * @param bool $isUserFormat
	 * @return null
	 * @throws \App\Exceptions\Security
	 */
	public function validate($value, $isUserFormat = false)
	{
		if ($this->validate || empty($value)) {
			return;
		}
		if ($isUserFormat) {
			list($y, $m, $d) = App\Fields\Date::explode($value, App\User::getCurrentUserModel()->getDetail('date_format'));
		} else {
			list($y, $m, $d) = explode('-', $value);
		}
		if (!checkdate($m, $d, $y)) {
			throw new \App\Exceptions\Security('ERR_ILLEGAL_FIELD_VALUE||' . $this->get('field')->getFieldName() . '||' . $value, 406);
		}
		$this->validate = true;
	}

	/**
	 * Function to get the display value, for the current field type with given DB Insert Value
	 * @param mixed $value
	 * @param int $record
	 * @param type $recordModel
	 * @param Vtiger_Record_Model $rawText
	 * @return mixed
	 */
	public function getDisplayValue($value, $record = false, $recordInstance = false, $rawText = false)
	{
		if (empty($value)) {
			return '';
		} else {
			$dateValue = self::getDisplayDateValue($value);
		}
		if ($dateValue === '--') {
			return '';
		} else {
			return $dateValue;
		}
	}

	/**
	 * Function converts the date to database format
	 * @param string $value
	 * @return string
	 */
	public static function getDBInsertedValue($value)
	{
		return DateTimeField::convertToDBFormat($value);
	}

	/**
	 * Function to get the edit value in display view
	 * @param mixed $value
	 * @param Vtiger_Record_Model $recordModel
	 * @return mixed
	 */
	public function getEditViewDisplayValue($value, $recordModel = false)
	{
		if (empty($value) || $value === ' ') {
			$value = trim($value);
			$fieldName = $this->get('field')->getFieldName();
			$moduleName = $this->get('field')->getModule()->getName();
			//Restricted Fields for to show Default Value
			if (($fieldName === 'birthday' && $moduleName === 'Contacts') || $moduleName === 'Products') {
				return \App\Purifier::encodeHtml($value);
			}

			//Special Condition for field 'support_end_date' in Contacts Module
			if ($fieldName === 'support_end_date' && $moduleName === 'Contacts') {
				$value = DateTimeField::convertToUserFormat(date('Y-m-d', strtotime("+1 year")));
			} elseif ($fieldName === 'support_start_date' && $moduleName === 'Contacts') {
				$value = DateTimeField::convertToUserFormat(date('Y-m-d'));
			}
		} else {
			$value = DateTimeField::convertToUserFormat($value);
		}
		return \App\Purifier::encodeHtml($value);
	}

	/**
	 * Function to get Date value for Display
	 * @param <type> $date
	 * @return string
	 */
	public static function getDisplayDateValue($date)
	{
		$date = new DateTimeField($date);
		return $date->getDisplayDate();
	}

	/**
	 * Function to get DateTime value for Display
	 * @param <type> $dateTime
	 * @return string
	 */
	public static function getDisplayDateTimeValue($dateTime)
	{
		$date = new DateTimeField($dateTime);
		return $date->getDisplayDateTimeValue();
	}

	public function getListSearchTemplateName()
	{
		return 'uitypes/DateFieldSearchView.tpl';
	}

	/**
	 * Function to get the Template name for the current UI Type object
	 * @return string - Template Name
	 */
	public function getTemplateName()
	{
		return 'uitypes/Date.tpl';
	}
}
