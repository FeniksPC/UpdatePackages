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

class Vtiger_Email_UIType extends Vtiger_Base_UIType
{

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
		if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
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
	public function getDisplayValue($value, $recordId = false, $recordInstance = false, $rawText = false)
	{
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$internalMailer = $currentUser->get('internal_mailer');
		if ($value && !$rawText) {
			$moduleName = $this->get('field')->get('block')->module->name;
			$fieldName = $this->get('field')->get('name');
			$rawValue = \App\Purifier::encodeHtml($value);
			$value = \App\Purifier::encodeHtml(vtlib\Functions::textLength($value));
			if ($internalMailer == 1 && \App\Privilege::isPermitted('OSSMail')) {
				$url = OSSMail_Module_Model::getComposeUrl($moduleName, $recordId, 'Detail', 'new');
				$mailConfig = OSSMail_Module_Model::getComposeParameters();
				return "<a class = \"cursorPointer sendMailBtn\" data-url=\"$url\" data-module=\"$moduleName\" data-record=\"$recordId\" data-to=\"$rawValue\" data-popup=" . $mailConfig['popup'] . " title=" . \App\Language::translate('LBL_SEND_EMAIL') . ">$value</a>";
			} else {
				if ($moduleName === 'Users' && $fieldName === 'user_name') {
					return "<a class='cursorPointer' href='mailto:" . $rawValue . "'>" . $value . "</a>";
				} else {
					return "<a class='emailField cursorPointer'  href='mailto:" . $rawValue . "'>" . $value . "</a>";
				}
			}
		}
		return \App\Purifier::encodeHtml($value);
	}

	/**
	 * Function to get the Template name for the current UI Type object
	 * @return string - Template Name
	 */
	public function getTemplateName()
	{
		return 'uitypes/Email.tpl';
	}
}
