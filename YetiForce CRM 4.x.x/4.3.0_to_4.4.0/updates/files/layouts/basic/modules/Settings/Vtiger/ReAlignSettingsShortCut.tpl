{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
* Contributor(s): YetiForce.com
********************************************************************************/
-->*}
{strip} {assign var=SPAN_COUNT value=1}
	<div  class="row">
		{foreach item=SETTING_SHORTCUT from=$SETTINGS_SHORTCUT name=shortcuts}
			<div class="col-md-3 mr-3 mb-3 contentsBackground well u-cursor-pointer moduleBlock" id="shortcut_{$SETTING_SHORTCUT->getId()}" data-actionurl="{$SETTING_SHORTCUT->getPinUnpinActionUrl()}" data-url="{$SETTING_SHORTCUT->getUrl()}">
				<button data-id="{$SETTING_SHORTCUT->getId()}" title="{\App\Language::translate('LBL_REMOVE',$MODULE)}" title="Close" type="button" class="unpin close">x</button>
				<h5 class="themeTextColor">{\App\Language::translate($SETTING_SHORTCUT->get('name'), Vtiger_Menu_Model::getModuleNameFromUrl($SETTING_SHORTCUT->getUrl()))}</h5>
				<div>{\App\Language::translate($SETTING_SHORTCUT->get('description'), Vtiger_Menu_Model::getModuleNameFromUrl($SETTING_SHORTCUT->getUrl()))}</div>
			</div>
		{if $SPAN_COUNT==3}</div>{$SPAN_COUNT=1}{if not $smarty.foreach.shortcuts.last}<div class="row">{/if}{continue}{/if}
		{$SPAN_COUNT=$SPAN_COUNT+1}
	{/foreach}
</div>
{/strip}
