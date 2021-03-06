{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
    {assign var='count' value=0}
    {assign var="dateFormat" value=$USER_MODEL->get('date_format')}
	<div class="navbar-form navbar-right">
		<div class="dropdown quickActions">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><img id="menubar_quickCreate" src="{\App\Layout::getImagePath('plus.png')}" class="alignMiddle" alt="{\App\Language::translate('LBL_QUICK_CREATE',$MODULE)}" title="{\App\Language::translate('LBL_QUICK_CREATE',$MODULE)}" /></a>
			<ul class="dropdown-menu dropdown-menu-right commonActionsButtonDropDown">
				<li id="quickCreateModules">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><strong>{\App\Language::translate('LBL_QUICK_CREATE',$MODULE)}</strong></h4>
						</div>
						<div class="panel-body paddingLRZero">
							{foreach key=NAME item=MODULEMODEL from=Vtiger_Module_Model::getQuickCreateModules(true)}
								{assign var='quickCreateModule' value=$MODULEMODEL->isQuickCreateSupported()}
								{assign var='singularLabel' value=$MODULEMODEL->getSingularLabelKey()}
								{if $singularLabel == 'SINGLE_Calendar'}
									{assign var='singularLabel' value='LBL_EVENT_OR_TASK'}
								{/if}
								{if $quickCreateModule == '1'}
									{if $count % 3 == 0}
										<div class="">
										{/if}
										<div class="col-4{if $count % 3 != 2} paddingRightZero{/if}">
											<a id="menubar_quickCreate_{$NAME}" class="quickCreateModule list-group-item" data-name="{$NAME}"
											   data-url="{$MODULEMODEL->getQuickCreateUrl()}" href="javascript:void(0)" title="{\App\Language::translate($singularLabel,$NAME)}"><span>{\App\Language::translate($singularLabel,$NAME)}</span></a>
										</div>
										{if $count % 3 == 2}
										</div>
									{/if}
									{assign var='count' value=$count+1}
								{/if}
							{/foreach}
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="navbar-form navbar-left">
		<div class="quickActions">
			<a id="companyLogo-container" class="" href="#"><img src="{$COMPANY_LOGO->get('imageUrl')}" title="{$COMPANY_LOGO->get('title')}" alt="{$COMPANY_LOGO->get('alt')}" /></a>
		</div>
	</div>
	<div class="select-search navbar-form navbar-left " style="width: 216px;">
		<select class="chzn-select col-md-5" title="{\App\Language::translate('LBL_SEARCH_MODULE', $MODULE_NAME)}" id="basicSearchModulesList" >
			<option value="" class="globalSearch_module_All">{\App\Language::translate('LBL_ALL_RECORDS', $MODULE_NAME)}</option>
			{foreach key=MODULE_NAME item=fieldObject from=$SEARCHABLE_MODULES}
				{if isset($SEARCHED_MODULE) && $SEARCHED_MODULE eq $MODULE_NAME && $SEARCHED_MODULE !== 'All'}
					<option value="{$MODULE_NAME}" class="globalSearch_module_{$MODULE_NAME}" selected>{\App\Language::translate($MODULE_NAME,$MODULE_NAME)}</option>
				{else}
					<option value="{$MODULE_NAME}" class="globalSearch_module_{$MODULE_NAME}">{\App\Language::translate($MODULE_NAME,$MODULE_NAME)}</option>
				{/if}
			{/foreach}
		</select>
	</div>
	<div role="search" class="navbar-form navbar-left">
		<div class="form-group">
			<div class="input-group float-left js-global-search__input o-global-search__input" data-js="container">
				<input type="text"  class="form-control js-global-search__value o-global-search__value" title="{\App\Language::translate('LBL_GLOBAL_SEARCH')}"
					   data-js="keypress | value | autocomplete" placeholder="{\App\Language::translate('LBL_GLOBAL_SEARCH')}" results="10" />
				<span id="searchIcon" class="input-group-addon u-cursor-pointer"><span class="fas fa-search "></span></span>
			</div>
			{assign var="ROLE_DETAIL" value=Users_Record_Model::getCurrentUserModel()->getRoleDetail()}
			{if $ROLE_DETAIL->get('globalsearchadv') == 1}
				<div class="float-left">
					<span class="adv-search navbar-form">
						<button class="alignMiddle btn btn-info" id="globalSearch">{\App\Language::translate('LBL_ADVANCE_SEARCH')}</button>
					</span>
				</div>
			{/if}
		</div>
	</div>
{/strip}
