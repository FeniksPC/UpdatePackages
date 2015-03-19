<?php
/*+***********************************************************************************************************************************
 * The contents of this file are subject to the YetiForce Public License Version 1.1 (the "License"); you may not use this file except
 * in compliance with the License.
 * Software distributed under the License is distributed on an "AS IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or implied.
 * See the License for the specific language governing rights and limitations under the License.
 * The Original Code is YetiForce.
 * The Initial Developer of the Original Code is YetiForce. Portions created by YetiForce are Copyright (C) www.yetiforce.com. 
 * All Rights Reserved.
 *************************************************************************************************************************************/
class YetiForceUpdate{
	var $modulenode;
	var $return = true;
	var $dropTablePicklist = array();
	var $filesToDelete = array(
		'modules/OSSCosts/copy',
		'data',
		'README.md',
		'logs/',
		'includes/',
		'test/contact/',
		'test/logo/',
		'test/product/',
		'test/templates_c/',
		'test/user/',
		'test/upload/',
		//'test/vtlib/',
		'test/wordtemplatedownload/',
		'modules/Settings/vtigerCRM.CAB',
		'modules/Utilities/Merge.php',
		'modules/Utilities/UtilitiesAjax.php',
		'modules/Utilities/Currencies.php',
		'layouts/vlayout/modules/Calendar/SideBarWidgets.tpl',
		'libraries/fullcalendar/fullcalendar-bootstrap.css',
		'libraries/fullcalendar/fullcalendar-bootstrap.less',
		'modules/Settings/Vtiger/actions/SaveCompanyField.php',
		'modules/Calculations/EditView.tpl',
		'modules/Calculations/Hierarchy.tpl',
		'modules/Calculations/LineItemsContent.tpl',
		'modules/Calculations/LineItemsDetail.tpl',
		'modules/Calculations/LineItemsEdit.tpl',
		'modules/Calculations/resources/Detail.js',
		'modules/Calculations/resources/Edit.js',
		'modules/Vtiger/widgets/Dropbox.php',
		'languages/de_de/BackUp.php',
		'languages/en_us/BackUp.php',
		'languages/pl_pl/BackUp.php',
		'languages/pt_br/BackUp.php',
		'modules\Vtiger\widgets\Dropbox.php',
		'languages\ru_ru\BackUp.php',
		'layouts\vlayout\modules\Inventory\PopupEntries.tpl',
		'layouts\vlayout\modules\Inventory\PopupContents.tpl',
		'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ar.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/az.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/bg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/bn.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/br.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/bs.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ca.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/cs.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/cy.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/langs/da.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/de.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/el.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/en.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/eo.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/es.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/et.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/eu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/fa.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/fi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/fr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/gl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/he.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/hi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/hr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/hu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/hy.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/id.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/is.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/it.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ja.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ka.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ko.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/lt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/lv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/mk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ms.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/nb.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/nl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/nn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/pl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ps.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/pt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ro.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ru.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/si.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/sk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/sl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/sq.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/sr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/sv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/ta.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/th.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/tr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/uk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/vi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/zh-cn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/langs/zh-tw.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/css/advhr.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/js/rule.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/lv_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advhr/rule.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/css/advimage.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/img/sample.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/js/image.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/fa_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advimage/image.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/css/advlink.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/js/advlink.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/is_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlink/link.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlist/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/advlist/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autolink/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autolink/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autoresize/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autoresize/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autosave/langs/en.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autosave/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/autosave/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/bbcode/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/bbcode/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/contextmenu/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/contextmenu/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/directionality/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/directionality/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-cool.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-cry.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-embarassed.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-foot-in-mouth.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-frown.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-innocent.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-kiss.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-laughing.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-money-mouth.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-sealed.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-smile.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-surprised.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-tongue-out.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-undecided.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-wink.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/img/smiley-yell.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/js/emotions.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/emotions/emotions.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/img/example.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/js/dialog.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/langs/en.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/dialog.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example_dependency/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/example_dependency/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/css/fullpage.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/js/fullpage.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ar_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/uk_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullpage/fullpage.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullscreen/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullscreen/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/fullscreen/fullscreen.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/iespell/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/iespell/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/alert.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/button.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/buttons.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/confirm.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/corners.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/horizontal.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/img/vertical.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/inlinepopups/template.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/insertdatetime/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/insertdatetime/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/layer/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/layer/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/legacyoutput/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/legacyoutput/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/lists/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/lists/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/css/media.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/js/embed.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/js/media.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/media.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/media/moxieplayer.swf', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/nonbreaking/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/nonbreaking/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/noneditable/editor_plugin.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/noneditable/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/pagebreak/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/pagebreak/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/js/pastetext.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/js/pasteword.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/pastetext.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/paste/pasteword.htm', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/jscripts/embed.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/example.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/preview.htm', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/print/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/print/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/save/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/save/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/css/searchreplace.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/js/searchreplace.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ca_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/hy_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/searchreplace/searchreplace.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/spellchecker/css/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/spellchecker/img/wline.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/spellchecker/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/spellchecker/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/css/props.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/js/props.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/hu_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/zh-cn_dlg.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/props.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/style/readme.txt', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/tabfocus/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/tabfocus/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/css/cell.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/css/row.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/css/table.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/js/cell.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/js/merge_cells.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/js/row.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/js/table.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/cell.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/merge_cells.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/row.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/table/table.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/css/template.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/js/template.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/blank.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/template/template.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/visualblocks/css/visualblocks.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/visualblocks/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/visualblocks/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/visualchars/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/visualchars/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/wordcount/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/wordcount/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/css/attributes.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/css/popup.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/abbr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/acronym.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/attributes.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/cite.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/del.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/element_common.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/js/ins.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/abbr.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/acronym.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/attributes.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/cite.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/del.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/editor_plugin.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/editor_plugin_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/xhtmlxtras/ins.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/colorpicker.jpg', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/flash.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/icons.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/iframe.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/pagebreak.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/quicktime.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/realmedia.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/shockwave.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/trans.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/video.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/img/windowsmedia.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/about.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/anchor.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/charmap.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/color_picker.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/image.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/link.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/js/source_editor.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ar.js', 
            'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ar_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/az.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/az_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bg_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/br.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/br_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bs.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/bs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ca.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ca_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/cs.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/cs_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/cy.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/cy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/da.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/da_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/de.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/de_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/el.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/el_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/en.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/en_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/eo.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/eo_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/es.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/es_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/et.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/et_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/eu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/eu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fa.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fa_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/fr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/gl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/gl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/he.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/he_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hu_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hy.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/hy_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/id.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/id_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/is.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/is_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/it.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/it_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ja.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ja_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ka.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ka_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ko.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ko_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/lt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/lt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/lv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/lv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/mk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/mk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ms.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ms_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nb.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nb_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/nn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/pl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/pl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ps.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ps_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/pt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/pt_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ro.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ro_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ru.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ru_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/si.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/si_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sl_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sq.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sq_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/sv_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ta.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/ta_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/th.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/th_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/tr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/tr_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/uk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/uk_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/vi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/vi_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/zh-cn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/zh-cn_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/zh-tw.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/langs/zh-tw_dlg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/buttons.png', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/items.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/menu_arrow.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/menu_check.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/progress.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/img/tabs.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/dialog.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/default/ui.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/highcontrast/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/highcontrast/dialog.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/highcontrast/ui.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/img/button_bg.png', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/img/button_bg_black.png', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/img/button_bg_silver.png', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/dialog.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/ui.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/ui_black.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/skins/o2k7/ui_silver.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/about.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/anchor.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/charmap.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/color_picker.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/editor_template.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/editor_template_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/image.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/link.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/shortcuts.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/advanced/source_editor.htm', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/img/icons.gif', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ar.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/az.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/bg.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/bn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/br.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/bs.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ca.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/cs.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/cy.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/da.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/de.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/el.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/en.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/eo.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/es.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/et.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/eu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/fa.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/fi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/fr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/gl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/he.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/hi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/hr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/hu.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/hy.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/id.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/is.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/it.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ja.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ka.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ko.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/lt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/lv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/mk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ms.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/nb.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/nl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/nn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/pl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ps.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/pt.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ro.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ru.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/si.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/sk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/sl.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/sq.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/sr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/sv.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/ta.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/th.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/tr.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/uk.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/vi.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/zh-cn.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/langs/zh-tw.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/skins/default/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/skins/default/ui.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/skins/o2k7/img/button_bg.png', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/skins/o2k7/content.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/skins/o2k7/ui.css', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/editor_template.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/themes/simple/editor_template_src.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/utils/editable_selects.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/utils/form_utils.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/utils/mctabs.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/utils/validate.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/license.txt', 'modules/OSSMail/roundcube/program/js/tiny_mce/tiny_mce.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/tiny_mce_popup.js', 'modules/OSSMail/roundcube/program/js/tiny_mce/tiny_mce_src.js', 'modules/OSSMail/roundcube/program/js/app.js.src', 'modules/OSSMail/roundcube/program/js/common.js.src', 'modules/OSSMail/roundcube/program/js/googiespell.js.src', 'modules/OSSMail/roundcube/program/js/list.js.src', 'modules/OSSMail/roundcube/program/js/treelist.js.src', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/Anonymous.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/Common.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/CramMD5.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/DigestMD5.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/External.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/Login.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/Plain.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL/SCRAM.php', 'modules/OSSMail/roundcube/program/lib/Auth/SASL.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/ByteUtils.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/DecryptStatusHandler.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/Engine.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/Exceptions.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/Key.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/KeyGenerator.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/KeyGeneratorErrorHandler.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/KeyGeneratorStatusHandler.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/PinEntry.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/ProcessControl.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/Signature.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/SubKey.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/UserId.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG/VerifyStatusHandler.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPG.php', 'modules/OSSMail/roundcube/program/lib/Crypt/GPGAbstract.php', 'modules/OSSMail/roundcube/program/lib/encoding/CP1250.map','modules/OSSMail/roundcube/program/lib/encoding/CP1251.map','modules/OSSMail/roundcube/program/lib/encoding/CP1252.map','modules/OSSMail/roundcube/program/lib/encoding/CP1253.map','modules/OSSMail/roundcube/program/lib/encoding/CP1254.map','modules/OSSMail/roundcube/program/lib/encoding/CP1255.map','modules/OSSMail/roundcube/program/lib/encoding/CP1256.map','modules/OSSMail/roundcube/program/lib/encoding/CP1257.map','modules/OSSMail/roundcube/program/lib/encoding/CP1258.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-1.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-10.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-11.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-13.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-14.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-15.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-16.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-2.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-3.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-4.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-5.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-6.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-7.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-8.map','modules/OSSMail/roundcube/program/lib/encoding/ISO-8859-9.map','modules/OSSMail/roundcube/program/lib/encoding/KOI8R.map','modules/OSSMail/roundcube/program/lib/encoding/KSC5601.map','modules/OSSMail/roundcube/program/lib/Mail/mime.php', 'modules/OSSMail/roundcube/program/lib/Mail/mimeDecode.php', 'modules/OSSMail/roundcube/program/lib/Mail/mimePart.php', 'modules/OSSMail/roundcube/program/lib/Net/IDNA2/Exception/Nameprep.php', 'modules/OSSMail/roundcube/program/lib/Net/IDNA2/Exception.php', 'modules/OSSMail/roundcube/program/lib/Net/IDNA2.php', 'modules/OSSMail/roundcube/program/lib/Net/Sieve.php', 'modules/OSSMail/roundcube/program/lib/Net/SMTP.php', 'modules/OSSMail/roundcube/program/lib/Net/Socket.php', 'modules/OSSMail/roundcube/program/lib/Roundcube/rcube_ldap_result.php', 'modules/OSSMail/roundcube/program/lib/PEAR.php', 'modules/OSSMail/roundcube/program/lib/PEAR5.php', 'modules/OSSMail/roundcube/program/lib/tnef_decoder.php', 'modules/OSSMail/roundcube/program/lib/utf8.class.php', 'modules/OSSMail/roundcube/program/localization/ur_PK/messages.inc', 'modules/OSSMail/roundcube/program/steps/mail/autocomplete_org.inc', 'modules/OSSMail/roundcube/program/steps/settings/delete_identity.inc',
			'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/ar.inc ', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/bn_BD.inc ', 
'modules/OSSMail/roundcube/skins/larry/images/buttons.gif', 
'modules/OSSMail/roundcube/plugins/zipdownload/CHANGELOG', 
'modules/OSSMail/roundcube/skins/larry/editor_content.css',
'modules/OSSMail/roundcube/skins/larry/editor_content.min.css',
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/eo.inc ', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/es_MX.inc ', 
'modules/OSSMail/roundcube/program/js/tiny_mce/plugins/preview/example.html',
'modules/OSSMail/roundcube/bin/exportgettext.sh ',
'modules/OSSMail/roundcube/temp/f25eeddc5df12f74999afe2c8ff91373.png', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/hi_IN.inc ', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/hy_AM.inc ', 'modules/OSSMail/roundcube/skins/larry/ie7hacks.css',
'modules/OSSMail/roundcube/skins/larry/ie7hacks.min.css',
'modules/OSSMail/roundcube/skins/larry/iehacks.css',
'modules/OSSMail/roundcube/skins/larry/iehacks.min.css',
'modules/OSSMail/roundcube/bin/importgettext.sh',
'modules/OSSMail/roundcube/plugins/jqueryui/themes/classic/jquery-ui-1.9.1.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/jquery-ui-1.9.1.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/themes/redmond/jquery-ui-1.9.1.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/js/jquery-ui-1.9.1.custom.min.js', 
'modules/OSSMail/roundcube/plugins/jqueryui/themes/classic/jquery-ui-1.9.2.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/jquery-ui-1.9.2.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/themes/redmond/jquery-ui-1.9.2.custom.css',
'modules/OSSMail/roundcube/plugins/jqueryui/js/jquery-ui-1.9.2.custom.min.js', 
'modules/OSSMail/roundcube/bin/jsunshrink.sh',
'modules/OSSMail/roundcube/plugins/markasjunk/localization/ku.inc ',
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/mn_MN.inc ', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/ms_MY.inc ', 
'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/my_MM.inc ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/nl_BE.inc ', 
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/nn_NO.inc ', 
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/nqo.inc ', 
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/om.inc ',
 'modules/OSSMail/roundcube/plugins/additional_message_headers/package.xml', 
 'modules/OSSMail/roundcube/plugins/archive/package.xml', 
 'modules/OSSMail/roundcube/plugins/attachment_reminder/package.xml',
 'modules/OSSMail/roundcube/plugins/database_attachments/package.xml', 
 'modules/OSSMail/roundcube/plugins/debug_logger/package.xml', 
 'modules/OSSMail/roundcube/plugins/emoticons/package.xml',
 'modules/OSSMail/roundcube/plugins/example_addressbook/package.xml', 
 'modules/OSSMail/roundcube/plugins/filesystem_attachments/package.xml', 
 'modules/OSSMail/roundcube/plugins/help/package.xml', 
 'modules/OSSMail/roundcube/plugins/hide_blockquote/package.xml',
 'modules/OSSMail/roundcube/plugins/http_authentication/package.xml',
 'modules/OSSMail/roundcube/plugins/identity_select/package.xml', 
 'modules/OSSMail/roundcube/plugins/jqueryui/package.xml', 
 'modules/OSSMail/roundcube/plugins/managesieve/package.xml',
 'modules/OSSMail/roundcube/plugins/markasjunk/package.xml', 
 'modules/OSSMail/roundcube/plugins/new_user_dialog/package.xml', 
 'modules/OSSMail/roundcube/plugins/new_user_identity/package.xml', 
 'modules/OSSMail/roundcube/plugins/newmail_notifier/package.xml', 
 'modules/OSSMail/roundcube/plugins/password/package.xml', 
 'modules/OSSMail/roundcube/plugins/redundant_attachments/package.xml',
 'modules/OSSMail/roundcube/plugins/show_additional_headers/package.xml',
 'modules/OSSMail/roundcube/plugins/subscriptions_option/package.xml',
 'modules/OSSMail/roundcube/plugins/userinfo/package.xml', 
 'modules/OSSMail/roundcube/plugins/vcard_attachments/package.xml', 
 'modules/OSSMail/roundcube/plugins/virtuser_file/package.xml', 
 'modules/OSSMail/roundcube/plugins/virtuser_query/package.xml',
 'modules/OSSMail/roundcube/plugins/zipdownload/package.xml',
 'modules/OSSMail/roundcube/bin/package2composer.sh ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/sr_CS.inc ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/te_IN.inc ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/th_TH.inc ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/ti.inc ',
 'modules/OSSMail/roundcube/bin/transifexpull.sh ',
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/tzm.inc ',
 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-hard_55_b0ccd7_1x100.png', 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-hard_65_ffffff_1x100.png', 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-hard_75_eaeaea_1x100.png', 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-hard_75_f8f8f8_1x100.png', 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-soft_75_fafafa_1x100.png', 'modules/OSSMail/roundcube/plugins/jqueryui/themes/larry/images/ui-bg_highlight-soft_90_e4e4e4_1x100.png', 
 'modules/OSSMail/roundcube/plugins/attachment_reminder/localization/ur_PK.inc ',
	);
	function YetiForceUpdate($modulenode) {
		$this->modulenode = $modulenode;
	}
	function preupdate() {
		$this->recurseCopy('cache/updates/files','');
	}
	
	function update() {
		$this->addModules();
		$this->updateFiles();
		$this->roundcubeConfig();
		$this->databaseStructureExceptDeletedTables();
		$this->databaseData();
		$this->transferLogo();
		@chmod($root_directory.'/logs/installation.log', 0777);
		@chmod($root_directory.'/logs/migration.log', 0777);
		@chmod($root_directory.'/logs/platform.log', 0777);
		@chmod($root_directory.'/logs/security.log', 0777);
		@chmod($root_directory.'/logs/soap.log', 0777);
		@chmod($root_directory.'/logs/sqltime.log', 0777);
		@chmod($root_directory.'/logs/vtigercrm.log', 0777);
	}
	function postupdate() {
		Vtiger_Deprecated::createModuleMetaFile();
		Vtiger_Access::syncSharingAccess();
		return true;
	}
	public function transferLogo(){
		global $log,$adb,$root_directory;
		$log->debug("Entering YetiForceUpdate::transferLogo() method ...");
		$result = $adb->query( "SELECT `logoname` FROM `vtiger_organizationdetails` ;");
		$num = $adb->num_rows( $result );
		if($num == 1){
			$logoName = $adb->query_result( $result, 0, 'logoname' );
			if(file_exists( $root_directory.'test/logo/'.$logoName )){
				copy($root_directory.'test/logo/'.$logoName, $root_directory.'/storage/Logo/'.$logoName);
			}
		}
		$log->debug("Exiting YetiForceUpdate::transferLogo() method ...");
	}
	public function databaseStructureExceptDeletedTables(){
		global $log,$adb;
		$log->debug("Entering YetiForceUpdate::databaseStructureExceptDeletedTables() method ...");
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_portalinfo` LIKE 'crypt_type';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_portalinfo` CHANGE `user_password` `user_password` varchar(200) NULL after `user_name` , 
							ADD COLUMN `crypt_type` varchar(20) NULL after `isactive` ;");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_portalinfo` LIKE 'password_sent';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_portalinfo` ADD COLUMN `password_sent` varchar(255) NOT NULL after `crypt_type` ;");
		}
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_blocks_hide` (
					  `id` int(19) NOT NULL AUTO_INCREMENT,
					  `blockid` int(19) DEFAULT NULL,
					  `conditions` text,
					  `enabled` tinyint(1) DEFAULT NULL,
					  `view` varchar(100) DEFAULT NULL,
					  PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
					
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_publicholiday` (
					  `publicholidayid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id of public holiday',
					  `holidaydate` date NOT NULL COMMENT 'date of holiday',
					  `holidayname` varchar(255) NOT NULL COMMENT 'name of holiday',
					  PRIMARY KEY (`publicholidayid`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_calendar_config`(
					`type` varchar(10) NULL  , 
					`name` varchar(20) NULL  , 
					`label` varchar(20) NULL  , 
					`value` varchar(100) NULL  
				) ENGINE=InnoDB DEFAULT CHARSET='utf8';");
		
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_trees_templates_data` LIKE 'state';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_trees_templates_data` ADD COLUMN `state` varchar(10) NULL after `label` ; ");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_calculations` LIKE 'currency_id';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_calculations` ADD COLUMN `currency_id` INT(19) UNSIGNED NOT NULL AFTER `date`; ");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_calculations` LIKE 'conversion_rate';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_calculations` ADD COLUMN `conversion_rate` decimal(10,3) unsigned NOT NULL AFTER `currency_id`; ");
		}
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_converttoaccount_settings` (
  `state` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_salesprocesses_settings` (
  `id` int(11) NOT NULL,
  `products_rel_potentials` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_bruteforce` LIKE 'active';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_bruteforce` ADD COLUMN `active` tinyint(1) NULL DEFAULT 1 after `timelock` ;");
		}
		$adb->query("CREATE TABLE IF NOT EXISTS `vtiger_bruteforce_users`(
					`id` int(19) NOT NULL  , 
					KEY `fk_1_vtiger_bruteforce_users`(`id`) , 
					CONSTRAINT `fk_1_vtiger_bruteforce_users` 
					FOREIGN KEY (`id`) REFERENCES `vtiger_users` (`id`) ON DELETE CASCADE 
				) ENGINE=InnoDB DEFAULT CHARSET='utf8' COLLATE='utf8_general_ci';");
		
		$result = $adb->query("SHOW KEYS FROM  `vtiger_module_dashboard_widgets` WHERE Key_name='vtiger_module_dashboard_widgets_ibfk_1';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_module_dashboard_widgets` ADD KEY `vtiger_module_dashboard_widgets_ibfk_1`(`templateid`) ;");
		}
		$result = $adb->query("SHOW KEYS FROM `vtiger_module_dashboard_widgets` WHERE Key_name='templateid';");
		if($adb->num_rows($result) == 1){
			$adb->query("ALTER TABLE `vtiger_module_dashboard_widgets` DROP KEY templateid;");
		}
		$adb->query("DROP TABLE IF EXISTS `vtiger_max_search_result`;");
		$adb->query("DROP TABLE IF EXISTS `vtiger_pscategory`;");
		$adb->query("DROP TABLE IF EXISTS `vtiger_pscategory_seq`;");
		$adb->query("ALTER TABLE `vtiger_field` CHANGE `helpinfo` `helpinfo` varchar(30) NULL DEFAULT '' after `masseditable` ;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_addressbookchanges` (
					  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					  `uri` varchar(200) NOT NULL,
					  `synctoken` int(11) unsigned NOT NULL,
					  `addressbookid` int(11) unsigned NOT NULL,
					  `operation` tinyint(1) NOT NULL,
					  PRIMARY KEY (`id`),
					  KEY `addressbookid_synctoken` (`addressbookid`,`synctoken`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_groupmembers` (
				  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
				  `principal_id` int(10) unsigned NOT NULL,
				  `member_id` int(10) unsigned NOT NULL,
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `principal_id` (`principal_id`,`member_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_principals` (
				  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
				  `uri` varchar(200) NOT NULL,
				  `email` varchar(80) DEFAULT NULL,
				  `displayname` varchar(80) DEFAULT NULL,
				  `vcardurl` varchar(255) DEFAULT NULL,
				  `userid` int(19) DEFAULT NULL,
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `uri` (`uri`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_addressbooks` (
				  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
				  `principaluri` varchar(255) DEFAULT NULL,
				  `displayname` varchar(255) DEFAULT NULL,
				  `uri` varchar(200) DEFAULT NULL,
				  `description` text,
				  `synctoken` int(11) unsigned NOT NULL DEFAULT '1',
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `principaluri` (`principaluri`(100),`uri`(100)),
				  KEY `principaluri_2` (`principaluri`),
				  CONSTRAINT `dav_addressbooks_ibfk_1` FOREIGN KEY (`principaluri`) REFERENCES `dav_principals` (`uri`) ON DELETE CASCADE
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_cards` (
				  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
				  `addressbookid` int(11) unsigned NOT NULL,
				  `carddata` mediumblob,
				  `uri` varchar(200) DEFAULT NULL,
				  `lastmodified` int(11) unsigned DEFAULT NULL,
				  `etag` varbinary(32) DEFAULT NULL,
				  `size` int(11) unsigned NOT NULL,
				  `crmid` int(19) DEFAULT '0',
				  PRIMARY KEY (`id`),
				  KEY `addressbookid` (`addressbookid`,`crmid`),
				  CONSTRAINT `dav_cards_ibfk_1` FOREIGN KEY (`addressbookid`) REFERENCES `dav_addressbooks` (`id`) ON DELETE CASCADE
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_users` (
				  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
				  `username` varchar(50) DEFAULT NULL,
				  `digesta1` varchar(32) DEFAULT NULL,
				  `userid` int(19) unsigned DEFAULT NULL,
				  `key` varchar(50) DEFAULT NULL,
				  PRIMARY KEY (`id`),
				  UNIQUE KEY `username` (`username`),
				  UNIQUE KEY `userid` (`userid`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_contactdetails` LIKE 'dav_status';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_contactdetails` ADD COLUMN `dav_status` tinyint(1) NULL DEFAULT 1 after `contactstatus` ;");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_ossemployees` LIKE 'dav_status';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_ossemployees` ADD COLUMN `dav_status` tinyint(1) NULL DEFAULT 1 after `ship_country`;");
		}
		
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_backup_ftp` LIKE 'port';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_backup_ftp` ADD COLUMN `port` int(11) NULL after `status`;");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_backup_ftp` LIKE 'active';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_backup_ftp` ADD COLUMN `active` tinyint(1) NOT NULL after `port`;");
		}
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_backup_ftp` LIKE 'path';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_backup_ftp` ADD COLUMN `path` varchar(255) NOT NULL after `active`;");
		}
		
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_calendarchanges` (
					  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					  `uri` varchar(200) NOT NULL,
					  `synctoken` int(11) unsigned NOT NULL,
					  `calendarid` int(11) unsigned NOT NULL,
					  `operation` tinyint(1) NOT NULL,
					  PRIMARY KEY (`id`),
					  KEY `calendarid_synctoken` (`calendarid`,`synctoken`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_calendars` (
					  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
					  `principaluri` varbinary(100) DEFAULT NULL,
					  `displayname` varchar(100) DEFAULT NULL,
					  `uri` varbinary(200) DEFAULT NULL,
					  `synctoken` int(10) unsigned NOT NULL DEFAULT '1',
					  `description` text,
					  `calendarorder` int(11) unsigned NOT NULL DEFAULT '0',
					  `calendarcolor` varbinary(10) DEFAULT NULL,
					  `timezone` text,
					  `components` varbinary(20) DEFAULT NULL,
					  `transparent` tinyint(1) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`id`),
					  UNIQUE KEY `principaluri` (`principaluri`,`uri`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_calendarobjects` (
					  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					  `calendardata` mediumblob,
					  `uri` varbinary(200) DEFAULT NULL,
					  `calendarid` int(10) unsigned NOT NULL,
					  `lastmodified` int(11) unsigned DEFAULT NULL,
					  `etag` varbinary(32) DEFAULT NULL,
					  `size` int(11) unsigned NOT NULL,
					  `componenttype` varbinary(8) DEFAULT NULL,
					  `firstoccurence` int(11) unsigned DEFAULT NULL,
					  `lastoccurence` int(11) unsigned DEFAULT NULL,
					  `uid` varchar(200) DEFAULT NULL,
					  `crmid` int(19) DEFAULT NULL,
					  PRIMARY KEY (`id`),
					  UNIQUE KEY `calendarid` (`calendarid`,`uri`),
					  CONSTRAINT `dav_calendarobjects_ibfk_1` FOREIGN KEY (`calendarid`) REFERENCES `dav_calendars` (`id`) ON DELETE CASCADE
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_schedulingobjects` (
					  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					  `principaluri` varchar(255) DEFAULT NULL,
					  `calendardata` mediumblob,
					  `uri` varchar(200) DEFAULT NULL,
					  `lastmodified` int(11) unsigned DEFAULT NULL,
					  `etag` varchar(32) DEFAULT NULL,
					  `size` int(11) unsigned NOT NULL,
					  PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
		$adb->query("CREATE TABLE IF NOT EXISTS `dav_calendarsubscriptions` (
					  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
					  `uri` varchar(200) NOT NULL,
					  `principaluri` varchar(100) NOT NULL,
					  `source` text,
					  `displayname` varchar(100) DEFAULT NULL,
					  `refreshrate` varchar(10) DEFAULT NULL,
					  `calendarorder` int(11) unsigned NOT NULL DEFAULT '0',
					  `calendarcolor` varchar(10) DEFAULT NULL,
					  `striptodos` tinyint(1) DEFAULT NULL,
					  `stripalarms` tinyint(1) DEFAULT NULL,
					  `stripattachments` tinyint(1) DEFAULT NULL,
					  `lastmodified` int(11) unsigned DEFAULT NULL,
					  PRIMARY KEY (`id`),
					  UNIQUE KEY `principaluri` (`principaluri`,`uri`)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
					
		$result = $adb->query("SHOW COLUMNS FROM `vtiger_activity` LIKE 'dav_status';");
		if($adb->num_rows($result) == 0){
			$adb->query("ALTER TABLE `vtiger_activity` ADD COLUMN `dav_status` tinyint(1) NULL DEFAULT 1;");
		}
		$adb->query("DROP TABLE IF EXISTS `vtiger_name_seq`;");
		$adb->query("DROP TABLE IF EXISTS `vtiger_name`;");
		$log->debug("Exiting YetiForceUpdate::databaseStructureExceptDeletedTables() method ...");
	}
	
	
	function settingsReplace() {
		global $log,$adb;
		$log->debug("Entering YetiForceUpdate::settingsReplace() method ...");

		//add new record
		$settings_field = array();
		$settings_field[] = array('LBL_STUDIO','LBL_MODTRACKER_SETTINGS',NULL,'LBL_MODTRACKER_SETTINGS_DESCRIPTION','index.php?module=ModTracker&parent=Settings&view=List',16,0,0);
		$settings_field[] = array('LBL_STUDIO','LBL_HIDEBLOCKS',NULL,'LBL_HIDEBLOCKS_DESCRIPTION','index.php?module=HideBlocks&parent=Settings&view=List',17,0,0);
		$settings_field[] = array('LBL_OTHER_SETTINGS','LBL_PUBLIC_HOLIDAY',NULL,'LBL_PUBLIC_HOLIDAY_DESCRIPTION','index.php?module=PublicHoliday&view=Configuration&parent=Settings',25,0,0);
		$settings_field[] = array('LBL_STUDIO','LBL_CALENDAR_CONFIG',NULL,'LBL_CALENDAR_CONFIG_DESCRIPTION','index.php?parent=Settings&module=Calendar&view=UserColors',18,0,0);
		$settings_field[] = array('LBL_PROCESSES','LBL_CONVERSION_TO_ACCOUNT',NULL,'LBL_CONVERSION_TO_ACCOUNT_DESCRIPTION','index.php?module=Leads&parent=Settings&view=ConvertToAccount',2,0,0);
		$settings_field[] = array('LBL_PROCESSES','LBL_SALES_PROCESSES',NULL,'LBL_SALES_PROCESSES_DESCRIPTION','index.php?module=SalesProcesses&view=Configuration&parent=Settings',1,0,0);
		$settings_field[] = array('LBL_INTEGRATION','LBL_DAV_KEYS',NULL,'LBL_DAV_KEYS_DESCRIPTION','index.php?parent=Settings&module=Dav&view=Keys',6,0,0);
		foreach ($settings_field AS $field){
			if(!self::checkFieldExists( $field, 'Settings' )){
				$field[0] = self::getBlockId($field[0]);
				$count = self::countRow('vtiger_settings_field', 'fieldid');
				array_unshift($field, ++$count);
				$adb->pquery('insert into `vtiger_settings_field`(`fieldid`,`blockid`,`name`,`iconpath`,`description`,`linkto`,`sequence`,`active`,`pinned`) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', $field);
			}
		}
		$adb->pquery('UPDATE `vtiger_settings_field_seq` SET id = ?;', array(self::countRow('vtiger_settings_field', 'fieldid')));

		$log->debug("Exiting YetiForceUpdate::settingsReplace() method ...");
	}
	public function getBlockId($label){
		global $adb;
		$result = $adb->pquery("SELECT blockid FROM vtiger_settings_blocks WHERE label = ? ;",array($label), true);
		return $adb->query_result($result, 0, 'blockid');
	}
	public function countRow($table, $field){
		global $adb;
		$result = $adb->query("SELECT MAX(".$field.") AS max_seq  FROM ".$table." ;");
		return $adb->query_result($result, 0, 'max_seq');
	}
	public function checkFieldExists($field, $moduleName){
		global $adb;
		if($moduleName == 'Settings')
			$result = $adb->pquery("SELECT * FROM vtiger_settings_field WHERE name = ? AND linkto = ? ;", array($field[1],$field[4]));
		else
			$result = $adb->pquery("SELECT * FROM vtiger_field WHERE columnname = ? AND tablename = ? AND tabid = ?;", array($field['name'],$field['table'], getTabid($moduleName)));
		if(!$adb->num_rows($result)) {
			return false;
		}
		return true;
	}
	public function databaseData(){
		global $log,$adb;
		$log->debug("Entering YetiForceUpdate::databaseData() method ...");
		$result = $adb->pquery("SELECT * FROM `vtiger_links` WHERE linklabel = ?", array('LIST_OF_LAST_UPDATED_RECORD'));
		if($adb->num_rows($result) == 0){
			$instanceModule = Vtiger_Module::getInstance('Home');
			$instanceModule->addLink('DASHBOARDWIDGET', 'LIST_OF_LAST_UPDATED_RECORD', 'index.php?module=Home&view=ShowWidget&name=ListUpdatedRecord');
		}
		
		$result = $adb->query("SELECT MAX(blockid) AS id FROM vtiger_settings_blocks");
		$adb->pquery("UPDATE vtiger_settings_blocks_seq SET `id` = ?",array($adb->query_result($result, 0, 'id')));
		$result = $adb->pquery("SELECT * FROM `vtiger_settings_blocks` WHERE `label` = ? ", array('LBL_PROCESSES'));
		if($adb->num_rows($result) == 0){
			$blockid = $adb->getUniqueId("vtiger_settings_blocks");
			$adb->pquery("insert  into `vtiger_settings_blocks`(`blockid`,`label`,`sequence`) values (?,?,?);",array($blockid,'LBL_PROCESSES',9));
			$result = $adb->query("SELECT MAX(blockid) AS id FROM vtiger_settings_blocks");
			$result = $adb->pquery("UPDATE vtiger_settings_blocks_seq SET `id` = ?",array($adb->query_result($result, 0, 'id')));
		}
		$adb->pquery("UPDATE `vtiger_modentity_num` SET `cur_id` = ? WHERE `semodule` = ? ;", array(1, 'Products'));
		$result = $adb->pquery("SELECT * FROM `vtiger_ossmailtemplates` WHERE name = ? AND oss_module_list = ? ", array('Customer Portal Login Details', 'Contacts'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_ossmailtemplates` SET `content` = ? WHERE name = ? AND oss_module_list = ?  ;", array('<p>#s#LogoImage#sEnd# </p><p>Dear #a#67#aEnd#  #a#70#aEnd#</p><p>Created for your account in the customer portal, below sending data access.</p><p>Login: #a#80#aEnd#<br />Password: #s#ContactsPortalPass#sEnd#</p><p>Regards</p>', 'Customer Portal Login Details', 'Contacts'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_ossmailtemplates` WHERE name = ? AND oss_module_list = ? ", array('Customer Portal - ForgotPassword', 'Contacts'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_ossmailtemplates` SET `content` = ? WHERE name = ? AND oss_module_list = ?  ;", array('Dear #a#67#aEnd# #a#70#aEnd#,<br /><br />
You recently requested a reminder of your access data for the YetiForce Portal.<br /><br />
You can login by entering the following data:<br /><br />
Your username: #a#80#aEnd#<br />
Your password: #s#ContactsPortalPass#sEnd#<br /><br /><br />
Regards,<br />
YetiForce CRM Support Team.', 'Customer Portal - ForgotPassword', 'Contacts'));
		}
		$adb->pquery("UPDATE `vtiger_ossmenumanager` SET `label` = ?, `langfield` = ? WHERE `label` = ? ;", array('Teamwork', 'en_us*Teamwork#pl_pl*Praca grupowa', 'Group Card'));
		$adb->pquery("UPDATE `vtiger_osspdf` SET `footer_content` = ? WHERE `title` = ? AND `moduleid` = ?;", array('<title></title>
<table width="537px">
	<tbody>
		<tr>
			<td colspan="6" rowspan="2"><img src="#special_function#siteUrl#end_special_function#storage/Logo/logo_yetiforce.png" style="width: 200px;" width="200" /></td>
			<td colspan="4"><span style="font-size:6px;">#company_organizationname# #company_address# #company_code# #company_city#. VAT:#company_vatid#</span></td>
		</tr>
		<tr>
			<td colspan="5">
			<table border="1">
				<tbody>
					<tr>
						<td>
						<table cellpadding="1">
							<tbody>
								<tr>
									<td style="text-align: center;"><span style="font-size:9px;">Calculation confirmation: <strong>#calculations_no#</strong></span></td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td>
						<table cellpadding="1">
							<tbody>
								<tr>
									<td style="text-align: center;"><span style="font-size:9px;">Date: #special_function#CreatedDateTime#end_special_function#</span></td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="7">&nbsp;</td>
			<td colspan="5" rowspan="2">
			<table border="1">
				<tbody>
					<tr>
						<td>
						<table cellpadding="5">
							<tbody>
								<tr>
									<td>
									<table cellpadding="0" style="font-size:8px;">
										<tbody>
											<tr>
												<td colspan="2">Issued by:</td>
												<td colspan="3">#Users_first_name# #Users_last_name#</td>
											</tr>
											<tr>
												<td colspan="2">Email:</td>
												<td colspan="3">#Users_email1#</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			<table>
				<tbody>
					<tr>
						<td><span style="font-size:10px;">&nbsp;<span style="font-size:8px;">#Accounts_account_no#</span></span></td>
					</tr>
					<tr>
						<td>
						<table>
							<tbody>
								<tr>
									<td>
									<p><span style="font-size:10px;">#Accounts_accountname#<br />
									<span style="font-size:8px;">#Accounts_addresslevel8b# #Accounts_buildingnumberb# #Accounts_localnumberb#<br />
									#Accounts_addresslevel7b#, #Accounts_addresslevel5b#<br />
									<span style="font-size:10px;">#Accounts_addresslevel1b#</span><br />
									#Accounts_vat_id#<br />
									#Contacts_email#</span></span></p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
			<td colspan="3">&nbsp;</td>
		</tr>
	</tbody>
</table>
&nbsp;

<table>
	<tbody>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>#special_function#replaceProductTable#end_special_function#</td>
		</tr>
	</tbody>
</table>', 'Calculation PDF', getTabid('Calculations')));
		$this->addWorkflow();
		$this->addRecords();
		$this->settingsReplace();
		
		$result = $adb->pquery("SELECT * FROM `vtiger_payment_duration` WHERE payment_duration = ?", array('payment:+0 days'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_payment_duration` SET `payment_duration` = ? WHERE `payment_duration` = ? ;", array('payment:+0 day', 'payment:+0 days'));
			$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `payment_duration` = ? WHERE `payment_duration` = ? ;", array('payment:+0 day', 'payment:+0 days'));
		}
		$this->picklists();
		$adb->pquery("UPDATE `vtiger_blocks` SET `display_status` = ? WHERE `tabid` = ? AND `blocklabel` = ? ;", array(0,getTabid('OSSTimeControl'), 'LBL_BLOCK'));
		$adb->query("ALTER TABLE `vtiger_notes` CHANGE `title` `title` varchar(200) NOT NULL after `note_no` ;");
		
		$adb->pquery("UPDATE `vtiger_field` SET `uitype` = ? WHERE `columnname` = ? AND `tablename` = ? ;", array(14,'time_start', 'vtiger_osstimecontrol'));
		$adb->pquery("UPDATE `vtiger_field` SET `uitype` = ? WHERE `columnname` = ? AND `tablename` = ? ;", array(14,'time_end', 'vtiger_osstimecontrol'));
		$result = $adb->pquery("SELECT * FROM `vtiger_salesprocesses_settings`; ");
		if($adb->num_rows($result) == 0){
			$adb->pquery('insert  into `vtiger_salesprocesses_settings`(`id`,`products_rel_potentials`) values (1,1);');
		}
		$adb->pquery("UPDATE `vtiger_field` SET `displaytype` = ? WHERE `columnname` = ? AND `tablename` = ? ;", array(1,'product_id', 'vtiger_troubletickets'));
		
		$fieldsToDelete = array(
		'OSSTimeControl'=>array('payment','contactid'),
		'Calculations'=>array('parentid'),
		'Assets'=>array('contact'),
		'OutsourcedProducts'=>array('contact'),
		'OSSOutsourcedServices'=>array('contact'),
		'OSSSoldServices'=>array('contact'),
		'Invoice'=>array('contact_id'),
		'PurchaseOrder'=>array('contact_id'),
		'SalesOrder'=>array('contact_id'),
		'Quotes'=>array('contact_id'),
		'HelpDesk'=>array('contact_id'),
		'PaymentsIn'=>array('parentid')
		);
		self::deleteFields($fieldsToDelete);
		self::addFields();
		
		$result = $adb->query("SHOW TABLES LIKE 'vtiger_calendar_config';");
		if($adb->num_rows($result) == 1){
			$result = $adb->pquery("SELECT * FROM `vtiger_calendar_config` ;");
			if($adb->num_rows($result) == 0){
				$adb->query("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values ('colors','break','PLL_BREAK_TIME','#ffd000');");
				$adb->query("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values ('colors','holiday','PLL_HOLIDAY_TIME','#00d4f5');");
			}
		}
		$adb->pquery("UPDATE `vtiger_entityname` SET `searchcolumn` = ? WHERE `modulename` IN (?,?,?);", array('subject','RequirementCards', 'QuotesEnquires','Ideas'));
		$adb->pquery("UPDATE `vtiger_entityname` SET `searchcolumn` = ?, fieldname = ?  WHERE `modulename` = ?;", array('holidaysentitlement_year,ossemployeesid','holidaysentitlement_year', 'HolidaysEntitlement'));
		
		$result1 = $adb->pquery("SELECT fieldid FROM `vtiger_field` WHERE columnname = ? AND tablename = ?", array('parentid','vtiger_contactdetails'));
		$result2 = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE fieldid = ? AND relmodule = ?", array($adb->query_result($result1, 0, 'fieldid'),'Vendors'));
		if($adb->num_rows($result2) == 0){
			$adb->query("insert  into `vtiger_fieldmodulerel`(`fieldid`,`module`,`relmodule`) values (".$adb->query_result($result1, 0, 'fieldid').",'Contacts','Vendors');");
		}
		$result1 = $adb->pquery("SELECT fieldid FROM `vtiger_field` WHERE columnname = ? AND tablename = ?", array('potentialid','vtiger_quotesenquires'));
		$result2 = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE fieldid = ? AND relmodule = ?", array($adb->query_result($result1, 0, 'fieldid'),'Potentials'));
		if($adb->num_rows($result2) == 0){
			$adb->query("insert  into `vtiger_fieldmodulerel`(`fieldid`,`module`,`relmodule`) values (".$adb->query_result($result1, 0, 'fieldid').",'QuotesEnquires','Potentials');");
		}
		
		$result = $adb->pquery("SELECT * FROM `vtiger_calendar_config` WHERE type = ? ;", array('reminder'));
		if($adb->num_rows($result) == 0){
			$adb->pquery("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values (?,?,?,?);", array('reminder','update_event','LBL_UPDATE_EVENT','0'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_calendar_config` WHERE type = ? AND `name` = ?;", array('colors', 'work'));
		if($adb->num_rows($result) == 0){
			$adb->pquery("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values (?,?,?,?);", array('colors','work','PLL_WORKING_TIME','#FFD500'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_calendar_config` WHERE type = ? AND `name` = ?;", array('colors', 'Task'));
		if($adb->num_rows($result) == 0){
			$adb->pquery("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values (?,?,?,?);", array('colors','Task','Task','#00d4f5'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_calendar_config` WHERE type = ? AND `name` = ?;", array('colors', 'Meeting'));
		if($adb->num_rows($result) == 0){
			$adb->pquery("insert  into `vtiger_calendar_config`(`type`,`name`,`label`,`value`) values (?,?,?,?);", array('colors','Meeting','Meeting','#FFD500'));
		}
		// related list
		$adb->pquery("UPDATE `vtiger_relatedlists` SET label = ? WHERE related_tabid = ? AND name = ? AND label = ?;", array('Upcoming Activities',getTabid('Calendar'),'get_activities','Activities'));
		
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Accounts'),getTabid('OSSMailView'),'get_related_list','OSSMailView', 7));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(8, getTabid('Accounts'),getTabid('OSSMailView'),'get_related_list','OSSMailView'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `actions` = ?;", array(getTabid('Accounts'),getTabid('Calendar'),'get_history','Activity History', 'add'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ?, `actions` = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(7,'',getTabid('Accounts'),getTabid('Calendar'),'get_history','Activity History'));
		}
		//
		$adb->pquery("UPDATE `vtiger_relatedlists` SET actions = ? WHERE related_tabid = ? AND name = ? AND label = ?;", array('',getTabid('Calendar'),'get_history','Activity History'));
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Contacts'),getTabid('OSSMailView'),'get_related_list','OSSMailView', 3));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(9, getTabid('Contacts'),getTabid('OSSMailView'),'get_related_list','OSSMailView'));
		}
		//
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Contacts'),getTabid('Calendar'),'get_history','Activity History', 9));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(3, getTabid('Contacts'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Potentials'),getTabid('Contacts'),'get_contacts','Contacts', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(8, getTabid('Potentials'),getTabid('Contacts'),'get_contacts','Contacts'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Potentials'),getTabid('Calendar'),'get_history','Activity History', 8));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(2, getTabid('Potentials'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('HelpDesk'),getTabid('Documents'),'get_attachments','Documents', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(4, getTabid('HelpDesk'),getTabid('Documents'),'get_attachments','Documents'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('HelpDesk'),getTabid('Calendar'),'get_history','Activity History', 4));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(2, getTabid('HelpDesk'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Quotes'),getTabid('Documents'),'get_attachments','Documents', 3));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(4, getTabid('Quotes'),getTabid('Documents'),'get_attachments','Documents'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Quotes'),getTabid('Calendar'),'get_history','Activity History', 4));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(3, getTabid('Quotes'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('PurchaseOrder'),getTabid('Documents'),'get_attachments','Documents', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(3, getTabid('PurchaseOrder'),getTabid('Documents'),'get_attachments','Documents'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('PurchaseOrder'),getTabid('Calendar'),'get_history','Activity History', 3));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(2, getTabid('PurchaseOrder'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('SalesOrder'),getTabid('Documents'),'get_attachments','Documents', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(4, getTabid('SalesOrder'),getTabid('Documents'),'get_attachments','Documents'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('SalesOrder'),getTabid('Calendar'),'get_history','Activity History', 4));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(2, getTabid('SalesOrder'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Invoice'),getTabid('Documents'),'get_attachments','Documents', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(3, getTabid('Invoice'),getTabid('Documents'),'get_attachments','Documents'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Invoice'),getTabid('Calendar'),'get_history','Activity History', 3));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(2, getTabid('Invoice'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Campaigns'),getTabid('Accounts'),'get_accounts','Accounts', 5));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(6, getTabid('Campaigns'),getTabid('Accounts'),'get_accounts','Accounts'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('ServiceContracts'),getTabid('HelpDesk'),'get_dependents_list','HelpDesk', 2));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(4, getTabid('ServiceContracts'),getTabid('HelpDesk'),'get_dependents_list','HelpDesk'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Project'),getTabid('HelpDesk'),'get_dependents_list','HelpDesk', 6));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(5, getTabid('Project'),getTabid('HelpDesk'),'get_dependents_list','HelpDesk'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Project'),0,'get_gantt_chart','Charts', 5));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(1, getTabid('Project'),0,'get_gantt_chart','Charts'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ? AND `sequence` = ?;", array(getTabid('Project'),getTabid('Calendar'),'get_activities','Upcoming Activities', 1));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(6, getTabid('Project'),getTabid('Calendar'),'get_activities','Upcoming Activities'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(getTabid('Campaigns'),getTabid('Calendar'),'get_history','Activity History'));
		if($adb->num_rows($result) == 0){
			$targetModule = Vtiger_Module::getInstance('Campaigns');
			$moduleInstance = Vtiger_Module::getInstance('Calendar');
			$targetModule->setRelatedList($moduleInstance, 'Activity History', array(),'get_history');
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(5, getTabid('Campaigns'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(getTabid('Project'),getTabid('Calendar'),'get_history','Activity History'));
		if($adb->num_rows($result) == 0){
			$targetModule = Vtiger_Module::getInstance('Project');
			$moduleInstance = Vtiger_Module::getInstance('Calendar');
			$targetModule->setRelatedList($moduleInstance, 'Activity History', array(),'get_history');
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(7, getTabid('Project'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(getTabid('ServiceContracts'),getTabid('Calendar'),'get_history','Activity History'));
		if($adb->num_rows($result) == 0){
			$targetModule = Vtiger_Module::getInstance('ServiceContracts');
			$moduleInstance = Vtiger_Module::getInstance('Calendar');
			$targetModule->setRelatedList($moduleInstance, 'Activity History', array(),'get_history');
			$adb->pquery("UPDATE `vtiger_relatedlists` SET sequence = ? WHERE tabid = ? AND related_tabid = ? AND `name` = ? AND label = ?;", array(2, getTabid('ServiceContracts'),getTabid('Calendar'),'get_history','Activity History'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('RequirementCards','Quotes'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("DELETE FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('RequirementCards','Quotes'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('Calculations','Quotes'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("DELETE FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('Calculations','Quotes'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND `name` = ?", array(getTabid('Quotes'),getTabid('Calculations'),'get_dependents_list'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_relatedlists` SET `name` = ? WHERE `tabid` = ? AND `related_tabid` = ? AND `name` = ?;", array('get_related_list',getTabid('Quotes'),getTabid('Calculations'),'get_dependents_list'));
		}
		/*$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(getTabid('OSSEmployees'),getTabid('HolidaysEntitlement'),'get_dependents_list','HolidaysEntitlement'));
		if($adb->num_rows($result) == 0){
			$targetModule = Vtiger_Module::getInstance('OSSEmployees');
			$moduleInstance = Vtiger_Module::getInstance('HolidaysEntitlement');
			$targetModule->setRelatedList($moduleInstance, 'HolidaysEntitlement', array('ADD'),'get_dependents_list');
		}*/
		/*$result = $adb->pquery("SELECT * FROM `vtiger_relatedlists` WHERE tabid = ? AND related_tabid = ? AND name = ? AND label = ?;", array(getTabid('Accounts'),getTabid('RequirementCards'),'get_dependents_list','RequirementCards'));
		if($adb->num_rows($result) == 0){
			$targetModule = Vtiger_Module::getInstance('Accounts');
			$moduleInstance = Vtiger_Module::getInstance('RequirementCards');
			$targetModule->setRelatedList($moduleInstance, 'RequirementCards', array('ADD'),'get_dependents_list');
		}*/

		$result = $adb->pquery("SELECT * FROM `vtiger_links` WHERE tabid = ? AND linktype = ? AND linklabel = ?;", array(getTabid('Calculations'),'DETAILVIEWWIDGET','DetailViewBlockCommentWidget'));
		if($adb->num_rows($result) == 0){
			$modcommentsModuleInstance = Vtiger_Module::getInstance('ModComments');
			if($modcommentsModuleInstance && file_exists('modules/ModComments/ModComments.php')) {
				include_once 'modules/ModComments/ModComments.php';
				if(class_exists('ModComments')) ModComments::addWidgetTo(array('Calculations'));
			}
		}
		$modulename = 'Calculations';
		$modcommentsModuleInstance = Vtiger_Module::getInstance('ModTracker');
		if($modcommentsModuleInstance && file_exists('modules/ModTracker/ModTracker.php')) {
			include_once('vtlib/Vtiger/Module.php');
			include_once 'modules/ModTracker/ModTracker.php';
			$tabid = Vtiger_Functions::getModuleId($modulename);
			$moduleModTrackerInstance = new ModTracker();
			if(!$moduleModTrackerInstance->isModulePresent($tabid)){
				$res=$adb->pquery("INSERT INTO vtiger_modtracker_tabs VALUES(?,?)",array($tabid,1));
				$moduleModTrackerInstance->updateCache($tabid,1);
			} else{
				$updatevisibility = $adb->pquery("UPDATE vtiger_modtracker_tabs SET visible = 1 WHERE tabid = ?", array($tabid));
				$moduleModTrackerInstance->updateCache($tabid,1);
			}
			if(!$moduleModTrackerInstance->isModTrackerLinkPresent($tabid)){
				$moduleInstance=Vtiger_Module::getInstance($tabid);
				$moduleInstance->addLink('DETAILVIEWBASIC', 'View History', "javascript:ModTrackerCommon.showhistory('\$RECORD\$')",'','',
				array('path'=>'modules/ModTracker/ModTracker.php','class'=>'ModTracker','method'=>'isViewPermitted'));
			}
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_links` WHERE tabid = ? AND linktype = ? AND linklabel = ?;", array(getTabid('Quotes'),'DETAILVIEWWIDGET','DetailViewBlockCommentWidget'));
		if($adb->num_rows($result) == 0){
			$modcommentsModuleInstance = Vtiger_Module::getInstance('ModComments');
			if($modcommentsModuleInstance && file_exists('modules/ModComments/ModComments.php')) {
				include_once 'modules/ModComments/ModComments.php';
				if(class_exists('ModComments')) ModComments::addWidgetTo(array('Quotes'));
			}
		}
		$modulename = 'Quotes';
		$modcommentsModuleInstance = Vtiger_Module::getInstance('ModTracker');
		if($modcommentsModuleInstance && file_exists('modules/ModTracker/ModTracker.php')) {
			include_once('vtlib/Vtiger/Module.php');
			include_once 'modules/ModTracker/ModTracker.php';
			$tabid = Vtiger_Functions::getModuleId($modulename);
			$moduleModTrackerInstance = new ModTracker();
			if(!$moduleModTrackerInstance->isModulePresent($tabid)){
				$res=$adb->pquery("INSERT INTO vtiger_modtracker_tabs VALUES(?,?)",array($tabid,1));
				$moduleModTrackerInstance->updateCache($tabid,1);
			} else{
				$updatevisibility = $adb->pquery("UPDATE vtiger_modtracker_tabs SET visible = 1 WHERE tabid = ?", array($tabid));
				$moduleModTrackerInstance->updateCache($tabid,1);
			}
			if(!$moduleModTrackerInstance->isModTrackerLinkPresent($tabid)){
				$moduleInstance=Vtiger_Module::getInstance($tabid);
				$moduleInstance->addLink('DETAILVIEWBASIC', 'View History', "javascript:ModTrackerCommon.showhistory('\$RECORD\$')",'','',
				array('path'=>'modules/ModTracker/ModTracker.php','class'=>'ModTracker','method'=>'isViewPermitted'));
			}
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_links` WHERE tabid = ? AND linktype = ? AND linklabel = ?;", array(getTabid('SalesOrder'),'DETAILVIEWWIDGET','DetailViewBlockCommentWidget'));
		if($adb->num_rows($result) == 0){
			$modcommentsModuleInstance = Vtiger_Module::getInstance('ModComments');
			if($modcommentsModuleInstance && file_exists('modules/ModComments/ModComments.php')) {
				include_once 'modules/ModComments/ModComments.php';
				if(class_exists('ModComments')) ModComments::addWidgetTo(array('SalesOrder'));
			}
		}
		$modulename = 'SalesOrder';
		$modcommentsModuleInstance = Vtiger_Module::getInstance('ModTracker');
		if($modcommentsModuleInstance && file_exists('modules/ModTracker/ModTracker.php')) {
			include_once('vtlib/Vtiger/Module.php');
			include_once 'modules/ModTracker/ModTracker.php';
			$tabid = Vtiger_Functions::getModuleId($modulename);
			$moduleModTrackerInstance = new ModTracker();
			if(!$moduleModTrackerInstance->isModulePresent($tabid)){
				$res=$adb->pquery("INSERT INTO vtiger_modtracker_tabs VALUES(?,?)",array($tabid,1));
				$moduleModTrackerInstance->updateCache($tabid,1);
			} else{
				$updatevisibility = $adb->pquery("UPDATE vtiger_modtracker_tabs SET visible = 1 WHERE tabid = ?", array($tabid));
				$moduleModTrackerInstance->updateCache($tabid,1);
			}
			if(!$moduleModTrackerInstance->isModTrackerLinkPresent($tabid)){
				$moduleInstance=Vtiger_Module::getInstance($tabid);
				$moduleInstance->addLink('DETAILVIEWBASIC', 'View History', "javascript:ModTrackerCommon.showhistory('\$RECORD\$')",'','',
				array('path'=>'modules/ModTracker/ModTracker.php','class'=>'ModTracker','method'=>'isViewPermitted'));
			}
		}
		
		$result = $adb->pquery("SELECT * FROM `vtiger_cron_task` WHERE name = ? ;", array('CardDav'));
		if($adb->num_rows($result) == 0){
			$addCrons = array();
			$addCrons[] = array('CardDav','modules/API/cron/CardDav.php',300,NULL,NULL,1,'Contacts',12,NULL);
			foreach($addCrons as $cron){
				Vtiger_Cron::register($cron[0],$cron[1],$cron[2],$cron[6],$cron[5],0,$cron[8]);
			}
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_eventhandlers` WHERE event_name = ? AND handler_class = ?;", array('vtiger.entity.aftersave.final', 'API_CardDAV_Handler'));
		if($adb->num_rows($result) == 0){
			$addHandler[] = array('vtiger.entity.aftersave.final','modules/API/handlers/CardDAV.php','API_CardDAV_Handler','',1,'[]');
			$em = new VTEventsManager($adb);
			foreach($addHandler as $handler){
				$em->registerHandler($handler[0], $handler[1], $handler[2], $handler[3], $handler[5]);
			}
		}
		/*$modules = array('RequirementCards','QuotesEnquires');
		foreach($modules as $module){
			$moduleInstance = Vtiger_Module::getInstance($module);
			$refInstance = Vtiger_Module::getInstance('OSSMailView');
			if($moduleInstance && $refInstance){
				$moduleInstance->unsetRelatedList($refInstance,"OSSMailView",'get_related_list');
			}
		}*/
		
		$result = $adb->pquery("SELECT * FROM `vtiger_dataaccess` WHERE summary = ?;", array('Date vatidation'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_dataaccess` SET `summary` = ? WHERE `summary` = ? ;", array('Date validation','Date vatidation'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_dataaccess` WHERE summary = ?;", array('Checking whether all mandatory fields in quick edit are filled in'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_dataaccess` SET `summary` = ? WHERE `summary` = ? ;", array('Check whether all mandatory fields in quick edit are filled in','Checking whether all mandatory fields in quick edit are filled in'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_cron_task` WHERE name = ? ;", array('CalDav'));
		if($adb->num_rows($result) == 0){
			$addCrons = array();
			$addCrons[] = array('CalDav','modules/API/cron/CalDav.php',300,NULL,NULL,1,'Calendar',13,NULL);
			foreach($addCrons as $cron){
				Vtiger_Cron::register($cron[0],$cron[1],$cron[2],$cron[6],$cron[5],0,$cron[8]);
			}
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_eventhandlers` WHERE event_name = ? AND handler_class = ?;", array('vtiger.entity.aftersave.final', 'API_CalDAV_Handler'));
		if($adb->num_rows($result) == 0){
			$addHandler[] = array('vtiger.entity.aftersave.final','modules/API/handlers/CalDAV.php','API_CalDAV_Handler',NULL,1,'[]');
			$em = new VTEventsManager($adb);
			foreach($addHandler as $handler){
				$em->registerHandler($handler[0], $handler[1], $handler[2], $handler[3], $handler[5]);
			}
		}
		$adb->pquery("UPDATE `vtiger_field` SET `defaultvalue` = '' WHERE `columnname` = ? AND `defaultvalue` = ?;", array('eventstatus', 'Planned'));
		
		$result = $adb->pquery("SELECT * FROM `vtiger_taskstatus` WHERE taskstatus = ?;", array('Planned'));
		if($adb->num_rows($result) == 1){
			$adb->pquery("UPDATE `vtiger_taskstatus` SET `taskstatus` = ? WHERE `taskstatus` = ?;", array('Cancelled', 'Planned'));
			//$adb->pquery("UPDATE `vtiger_activity` SET `status` = ? WHERE `status` = ?;", array('Cancelled', 'Planned'));
		}
		$adb->pquery("UPDATE `vtiger_users` SET `defaulteventstatus` = ? WHERE `defaulteventstatus` = ?;", array('Not Held', 'Planned'));
		self::rebootSeq();
		
		
		// change relations
		
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSPasswords','Leads'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Leads'),getTabid('OSSPasswords'),'OSSPasswords'), true );

$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('PBXManager','Leads'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Leads'),getTabid('PBXManager'),'PBXManager'), true );


$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('PaymentsIn','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('PaymentsIn'),'PaymentsIn'), true );


$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('PaymentsOut','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('PaymentsOut'),'PaymentsOut'), true );

$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSCosts','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OSSCosts'),'OSSCosts'), true );

$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Calculations'),'Calculations'), true );


$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSPasswords','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OSSPasswords'),'OSSPasswords'), true );

// Related Products of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Products'),'Products'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Products'),getTabid('Contacts'),'Contacts'), true );


////// Related Assets of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('Assets','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Assets'),'Assets'), true );

////// Related OutsourcedProducts of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OutsourcedProducts','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OutsourcedProducts'),'OutsourcedProducts'), true );


////// Related Services of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Services'),'Services'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Services'),getTabid('Contacts'),'Contacts'), true );

////// Related OSSOutsourcedServices of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSOutsourcedServices','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OSSOutsourcedServices'),'OSSOutsourcedServices'), true );


////// Related OSSSoldServices of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSSoldServices','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OSSSoldServices'),'OSSSoldServices'), true );

////// Related Vendors of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Vendors'),'Vendors'), true );

////// Related OSSTimeControl of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('OSSSoldServices','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('OSSTimeControl'),'OSSTimeControl'), true );


////// Related Projects of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('Project','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Project'),'Projects'), true );


////// Related ServiceContracts of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('ServiceContracts','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('ServiceContracts'),'Service Contracts'), true );


////// Related PBXManager of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('PBXManager','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('PBXManager'),'PBXManager'), true );


////// Related Invoices of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Invoice'),'Invoice'), true );

////// Related Contacts of Campaigns ect.
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Campaigns'),'Campaigns'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Campaigns'),getTabid('Contacts'),'Contacts'), true );

////// Related PurchaseOrder of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('PurchaseOrder'),'Purchase Order'), true );

////// Related SalesOrder of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('SalesOrder'),'Sales Order'), true );

////// Related  Quotes of contact
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('Quotes'),'Quotes'), true );


////// Related HelpDesk of contact
$query = "DELETE FROM vtiger_fieldmodulerel WHERE module = ? AND relmodule = ? ;";
$adb->pquery( $query, array('HelpDesk','Contacts'), true );
$query = "DELETE FROM `vtiger_relatedlists` WHERE `tabid` = ? AND `related_tabid` = ? AND `label` = ?;";
$adb->pquery( $query, array(getTabid('Contacts'),getTabid('HelpDesk'),'HelpDesk'), true );

		$adb->pquery("UPDATE `vtiger_field` SET `uitype` = ? WHERE `uitype` = ? AND columnname = ? AND tablename = ?;", array(1,'16','name', 'vtiger_ossemployees'));

		
		$result = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('ModComments','Reservations'));
		if($adb->num_rows($result) == 0){
			$result = $adb->pquery("SELECT * FROM `vtiger_field` WHERE columnname = ? AND tablename = ?", array('related_to','vtiger_modcomments'));
			$fieldId = $adb->query_result( $result, 0, 'fieldid' );
			$adb->pquery("INSERT INTO vtiger_fieldmodulerel(fieldid, module, relmodule) VALUES(?,?,?)", array($fieldId, 'ModComments', 'Reservations'));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_fieldmodulerel` WHERE module = ? AND relmodule = ?", array('ModComments','SalesOrder'));
		if($adb->num_rows($result) == 0){
			$result = $adb->pquery("SELECT * FROM `vtiger_field` WHERE columnname = ? AND tablename = ?", array('related_to','vtiger_modcomments'));
			$fieldId = $adb->query_result( $result, 0, 'fieldid' );
			$adb->pquery("INSERT INTO vtiger_fieldmodulerel(fieldid, module, relmodule) VALUES(?,?,?)", array($fieldId, 'ModComments', 'SalesOrder'));
		}
		
		$result = $adb->pquery("SELECT * FROM `vtiger_trees_templates` WHERE name = ?;", array('Reservations'));
		if($adb->num_rows($result) == 0){
			$sql = 'INSERT INTO vtiger_trees_templates(`name`, `module`, `access`) VALUES (?,?,?)';
			$params = array('Reservations', getTabid('Reservations'), 0);
			$adb->pquery($sql, $params);
			$templateId = $adb->getLastInsertID();
		
			$recordModel = new Settings_TreesManager_Record_Model();
			$recordModel->set('name', 'Reservations');
			$recordModel->set('module', getTabid('Reservations'));
			$recordModel->set('templateid', $templateId);
			$recordModel->set('tree', array(
			array( 'data' => 'LBL_MEETING_ROOMS' , 'attr' =>  array('id' => 3 ), 'state' => NULL ),
			array( 'data' => 'LBL_EQUIPMENT' , 'attr' =>  array('id' => 2 ), 'state' => NULL ),
			array( 'data' => 'LBL_CARS' , 'attr' =>  array('id' => 1 ), 'state' => NULL )
			));
			$recordModel->save();
			$adb->pquery("UPDATE `vtiger_field` SET `fieldparams` = ? WHERE `columnname` = ? AND `tablename` = ?;", array($templateId, 'type', 'vtiger_reservations'));
		}
		
		$result = $adb->pquery("SELECT * FROM `vtiger_widgets` WHERE tabid = ? AND `type` = ? ;", array(getTabid('Reservations'), 'Summary');
		if($adb->num_rows($result) == 0){
			$widget = array('Reservations','Summary',NULL,'1','0',NULL,'[]');
			$sql = "INSERT INTO vtiger_widgets (tabid, type, label, wcol, sequence, nomargin, data) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$adb->pquery($sql, array( getTabid($widget[0]), $widget[1], $widget[2], $widget[3], $widget[4], $widget[5], $widget[6]));
		}
		$result = $adb->pquery("SELECT * FROM `vtiger_widgets` WHERE tabid = ? AND `type` = ? ;", array(getTabid'Reservations'), 'Comments');
		if($adb->num_rows($result) == 0){
			$widget = array('Reservations','Comments','','2','1',NULL,'{"relatedmodule":"ModComments","limit":"10"}');
			$sql = "INSERT INTO vtiger_widgets (tabid, type, label, wcol, sequence, nomargin, data) VALUES (?, ?, ?, ?, ?, ?, ?);";
			$adb->pquery($sql, array( getTabid($widget[0]), $widget[1], $widget[2], $widget[3], $widget[4], $widget[5], $widget[6]));
		}
		$log->debug("Exiting YetiForceUpdate::databaseData() method ...");
	}
	public function roundcubeConfig(){
		global $log,$adb,$root_directory;
		$log->debug("Entering YetiForceUpdate::roundcubeConfig() method ...");
		if(!$root_directory)
			$root_directory = getcwd();
		$fileName = $root_directory.'/modules/OSSMail/roundcube/config/config.inc.php';
		if(file_exists($fileName)){
			if(strpos(file_get_contents( $fileName ),'GEBUG_CONFIG') !== FALSE){
				return;
			}
			$fileContentArray = [];
			$addValues = [];
			$addValues[] = "\$config['smtp_log'] = true;";
			$addValues[] = "";
			$addValues[] = "\$config['debug_level'] = \$GEBUG_CONFIG['ROUNDCUBE_DEBUG_LEVEL'];";
			$addValues[] = "\$config['per_user_logging'] = \$GEBUG_CONFIG['ROUNDCUBE_PER_USER_LOGGING'];";
			$addValues[] = "\$config['smtp_log'] = \$GEBUG_CONFIG['ROUNDCUBE_SMTP_LOG'];";
			$addValues[] = "\$config['log_logins'] = \$GEBUG_CONFIG['ROUNDCUBE_LOG_LOGINS'];";
			$addValues[] = "\$config['log_session'] = \$GEBUG_CONFIG['ROUNDCUBE_LOG_SESSION'];";
			$addValues[] = "\$config['sql_debug'] = \$GEBUG_CONFIG['ROUNDCUBE_SQL_DEBUG'];";
			$addValues[] = "\$config['imap_debug'] = \$GEBUG_CONFIG['ROUNDCUBE_IMAP_DEBUG'];";
			$addValues[] = "\$config['ldap_debug'] = \$GEBUG_CONFIG['ROUNDCUBE_LDAP_DEBUG'];";
			$addValues[] = "\$config['smtp_debug'] = \$GEBUG_CONFIG['ROUNDCUBE_SMTP_DEBUG'];";
			$addValues[] = "\$config['log_dir'] = RCUBE_INSTALL_PATH . '/../../../cache/logs/';";
			
			$tab = file($fileName);
			$previous = '';
			foreach($tab as $line){
				if(strpos($line,'Debug:') === FALSE && (strpos($line,"\$config['debug_level']") === FALSE || strpos($previous,"Debug:") === FALSE) && strpos($line,"\$config['imap_debug']") === FALSE  && strpos($line,"\$config['smtp_debug']") === FALSE  && strpos($line,"\$config['log_logins']") === FALSE ){
					$fileContentArray[] = rtrim($line);
				}
				if(strpos($previous,"include_once 'config/config_override.php';") !== FALSE){
					$fileContentArray[] = "	@include_once('config/debug.php');";
				}
				$previous = $line; 
			}
			$fileContent = array_merge($fileContentArray,$addValues);
			$fileContent = implode("\n",$fileContent);
			$filePointer = fopen($fileName, 'w');
			fwrite($filePointer, $fileContent);
			fclose($filePointer);
		}
		$log->debug("Exiting YetiForceUpdate::roundcubeConfig() method ...");
	}
	function updateFiles() {
		$config = "
\$davStorageDir = 'storage/WebDAV/';

// prod and demo
\$systemMode = 'prod';";
		if(strpos(file_get_contents( 'config/config.inc.php' ),'davStorageDir') === FALSE){
			file_put_contents( 'config/config.inc.php', $config, FILE_APPEND );
		}
	}
	public function rebootSeq(){
		global $log,$adb;
		$log->debug("Entering VT620_to_YT::rebootSeq() method ...");
		$modules = array('Calendar','Events');

		$calendarId = getTabid('Calendar');
		$eventsId = getTabid('Events');
		$fields[$calendarId][] = array(1,'subject',9);
		$fields[$calendarId][] = array(6,'smownerid',9);
		$fields[$calendarId][] = array(3,'date_start',9);
		$fields[$calendarId][] = array(4,'due_date',9);
		$fields[$calendarId][] = array(5,'crmid',9);
		$fields[$calendarId][] = array(2,'status',9);
		$fields[$calendarId][] = array(5,'smcreatorid',9);
		$fields[$calendarId][] = array(7,'allday',9);

		$fields[$eventsId][] = array(8,'subject',16);
		$fields[$eventsId][] = array(14,'smownerid',16);
		$fields[$eventsId][] = array(11,'date_start',16);
		$fields[$eventsId][] = array(10,'due_date',16);
		$fields[$eventsId][] = array(13,'crmid',16);
		$fields[$eventsId][] = array(12,'eventstatus',16);
		$fields[$eventsId][] = array(9,'activitytype',16);
		$fields[$eventsId][] = array(15,'allday',16);

		$query = 'UPDATE vtiger_field SET ';
		$query .=' quickcreatesequence= CASE ';
		foreach($fields as $tabId=>$field ) {
			foreach($field as $values){
				$query .= ' WHEN columnname="'.$values[1].'" AND tabid = "'.$tabId.'" THEN '.$values[0];
			}
		}
		$query .=' END ';
        $query .= ' WHERE tabid IN ('.generateQuestionMarks($modules).')';
		$adb->pquery($query, array($calendarId,$eventsId));
		$log->debug("Exiting VT620_to_YT::rebootSeq() method ...");
	}
	public function picklists(){
		global $log,$adb;
		$log->debug("Entering YetiForceUpdate::picklists() method ...");
		
		$addPicklists = array();
		$addPicklists['SalesOrder'][] = array('name'=>'payment_duration','uitype'=>'16','add_values'=>array('payment:+0 day','payment:+1 day','payment:+7 days','payment:+14 days','payment:+21 days','payment:+30 days','payment:+60 days','payment:+90 days','payment:+180 days','payment:+360 days','payment:+1 month','payment:+3 months','payment:+6 months','payment:+1 year','payment:monday next week','payment:friday next week','payment:first day of next month','payment:last day of next month','payment:first day of +3 months','payment:last day of +3 months'),'remove_values'=>array('Net 30 days','Net 45 days','Net 60 days'));
		$addPicklists['SalesOrder'][] = array('name'=>'recurring_frequency','uitype'=>'16','add_values'=>array('+1 day','+7 days','+14 days','+21 days','+30 days','+60 days','+90 days','+180 days','+360 days','+1 month','+3 months','+6 months','+1 year','monday next week','friday next week','first day of next month','last day of next month','first day of +3 months','last day of +3 months'),'remove_values'=>array('Daily','Weekly','Monthly','Quarterly','Yearly'));
		$addPicklists['Calculations'][] = array('name'=>'calculationsstatus','uitype'=>'15','add_values'=>array('PLL_WAITING_FOR_VERIFICATION','PLL_VERIFICATION_PROCESS','PLL_INTERNAL_CONSULTATION_REQUIRED','PLL_EXTERNAL_CONSULTATION_REQUIRED','PLL_WAITING_FOR_VENDORS_QUOTE','PLL_WAITING_FOR_CUSTOMERS_REPLY','PLL_IN_PREPARATION','LBL_DECLINED','LBL_ACCEPTED'),'remove_values'=>array('LBL_IN_PREPARATION','Waiting for valuation','Waiting for acceptance','Accepted','Rejected','LBL_OBJECTIONS_ARE_RAISED'));
		$addPicklists['Quotes'][] = array('name'=>'quotestage','uitype'=>'15','add_values'=>array('PLL_WAITING_FOR_PREPARATION','PLL_INTERNAL_CONSULTATION_REQUIRED','PLL_EXTERNAL_CONSULTATION_REQUIRED','PLL_WAITING_FOR_CUSTOMERS_REPLY','PLL_IN_PREPARATION','PLL_DECLINED','PLL_ACCEPTED'),'remove_values'=>array('Created','Delivered','Reviewed','Accepted','Rejected'));
		$addPicklists['Calendar'][] = array('name'=>'activitytype','uitype'=>'15','add_values'=>array(),'remove_values'=>array('Mobile Call'));
		$addPicklists['Calendar'][] = array('name'=>'eventstatus','uitype'=>'15','add_values'=>array(),'remove_values'=>array('Planned'));
		$addPicklists['Users'][] = array('name'=>'defaulteventstatus','uitype'=>'15','add_values'=>array(),'remove_values'=>array('Planned'));
		
		$roleRecordList = Settings_Roles_Record_Model::getAll();
		$rolesSelected = array();
		foreach($roleRecordList as $roleRecord) {
			$rolesSelected[] = $roleRecord->getId();
		}
		foreach($addPicklists as $moduleName=>$piscklists){
			$moduleModel = Settings_Picklist_Module_Model::getInstance($moduleName);
			if(!$moduleModel)
				continue;
			foreach($piscklists as $piscklist){
				$fieldModel = Settings_Picklist_Field_Model::getInstance($piscklist['name'], $moduleModel);
				if(!$fieldModel)
					continue;
				$pickListValues = Vtiger_Util_Helper::getPickListValues($piscklist['name']);
				foreach($piscklist['add_values'] as $newValue){
					if(!in_array($newValue, $pickListValues)){
						//$moduleModel->addPickListValues($fieldModel, $newValue);
						$moduleModel->addPickListValues($fieldModel, $newValue, $rolesSelected);
					}
				}
				foreach($piscklist['remove_values'] as $newValue){
					if(!in_array($newValue, $pickListValues))
						continue;
					if($piscklist['uitype'] == '15'){
						$deletePicklistValueId = self::getPicklistId($piscklist['name'], $newValue);
						if($deletePicklistValueId)
							$adb->pquery("DELETE FROM `vtiger_role2picklist` WHERE picklistvalueid = ? ", array($deletePicklistValueId));
					}
					$adb->pquery("DELETE FROM `vtiger_".$piscklist['name']."` WHERE ".$piscklist['name']." = ? ", array($newValue));
					if($piscklist['name'] == 'Net 30 days'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `payment_duration` = ? WHERE `payment_duration` = ? ;", array($piscklist['name'], 'payment:+30 days'));
					}if($piscklist['name'] == 'Net 60 days'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `payment_duration` = ? WHERE `payment_duration` = ? ;", array($piscklist['name'], 'payment:+60 days'));
					}if($piscklist['name'] == 'Daily'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `recurring_frequency` = ? WHERE `recurring_frequency` = ? ;", array($piscklist['name'], '+1 day'));
					}if($piscklist['name'] == 'Weekly'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `recurring_frequency` = ? WHERE `recurring_frequency` = ? ;", array($piscklist['name'], '+7 days'));
					}if($piscklist['name'] == 'Monthly'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `recurring_frequency` = ? WHERE `recurring_frequency` = ? ;", array($piscklist['name'], '+1 month'));
					}if($piscklist['name'] == 'Quarterly'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `recurring_frequency` = ? WHERE `recurring_frequency` = ? ;", array($piscklist['name'], '+3 months'));
					}if($piscklist['name'] == 'Yearly'){
						$adb->pquery("UPDATE `vtiger_invoice_recurring_info` SET `recurring_frequency` = ? WHERE `recurring_frequency` = ? ;", array($piscklist['name'], '+1 year'));
					}if($piscklist['name'] == 'Accepted' && $moduleName == 'Calculations'){
						$adb->pquery("UPDATE `vtiger_calculations` SET `calculationsstatus` = ? WHERE `calculationsstatus` = ? ;", array($piscklist['name'], 'LBL_ACCEPTED'));
					}if($piscklist['name'] == 'Rejected' && $moduleName == 'Calculations'){
						$adb->pquery("UPDATE `vtiger_calculations` SET `calculationsstatus` = ? WHERE `calculationsstatus` = ? ;", array($piscklist['name'], 'LBL_DECLINED'));
					}
					if($piscklist['name'] == 'Accepted' && $moduleName == 'Quotes'){
						$adb->pquery("UPDATE `vtiger_calculations` SET `calculationsstatus` = ? WHERE `calculationsstatus` = ? ;", array($piscklist['name'], 'PLL_ACCEPTED'));
					}if($piscklist['name'] == 'Rejected' && $moduleName == 'Quotes'){
						$adb->pquery("UPDATE `vtiger_quotes` SET `quotestage` = ? WHERE `quotestage` = ? ;", array($piscklist['name'], 'PLL_DECLINED'));
					}
					//$moduleModel->remove($piscklist['name'], $deletePicklistId, '', $moduleName); // remove and replace in records
				}
			}
		}
		$log->debug("Exiting YetiForceUpdate::picklists() method ...");
	}
	public function getPicklistId($fieldName, $value){
		global $log,$adb;
		$log->debug("Entering YetiForceUpdate::getPicklistId(".$fieldName.','.$value.") method ...");
		if(Vtiger_Utils::CheckTable('vtiger_' .$fieldName)) {
			$sql = 'SELECT * FROM vtiger_' .$fieldName. ' WHERE ' .$fieldName. ' = ? ;';
			$result = $adb->pquery($sql, array($value));
			if($adb->num_rows($result) > 0){
				$log->debug("Exiting YetiForceUpdate::getPicklistId() method ...");
				return $adb->query_result($result, 0, 'picklist_valueid');
			}
		}
		$log->debug("Exiting YetiForceUpdate::getPicklistId() method ...");
		return false;
		
	}
	public function deleteFields($fieldsToDelete){
		global $log;
		$log->debug("Entering YetiForceUpdate::deleteFields() method ...");
		if( file_exists( 'includes/main/WebUI.php' ) ){
			require_once('includes/main/WebUI.php');
		}elseif( file_exists( 'include/main/WebUI.php' )){
			require_once('include/main/WebUI.php');
		}
		$adb = PearDatabase::getInstance();
		foreach($fieldsToDelete AS $fld_module=>$columnnames){
			$moduleId = getTabid($fld_module);
			foreach($columnnames AS $columnname){
				$fieldquery = 'select * from vtiger_field where tabid = ? AND fieldname = ?';
				$res = $adb->pquery($fieldquery,array($moduleId,$columnname));
				$id = $adb->query_result($res,0,'fieldid');
				if(empty($id))
					continue;
				$typeofdata = $adb->query_result($res,0,'typeofdata');
				$fieldname = $adb->query_result($res,0,'fieldname');
				$oldfieldlabel = $adb->query_result($res,0,'fieldlabel');
				$tablename = $adb->query_result($res,0,'tablename');
				$uitype = $adb->query_result($res,0,'uitype');
				$colName = $adb->query_result($res,0,'columnname');
				$tablica = $adb->query_result($res,0,'tablename');
				$fieldtype =  explode("~",$typeofdata);

				//Deleting the CustomField from the Custom Field Table
				$query='delete from vtiger_field where fieldid = ? and vtiger_field.presence in (0,2)';
				$adb->pquery($query, array($id));

				//Deleting from vtiger_profile2field table
				$query='delete from vtiger_profile2field where fieldid=?';
				$adb->pquery($query, array($id));

				//Deleting from vtiger_def_org_field table
				$query='delete from vtiger_def_org_field where fieldid=?';
				$adb->pquery($query, array($id));

				$focus = CRMEntity::getInstance($fld_module);

				$deletecolumnname =$tablename .":". $columnname .":".$fieldname.":".$fld_module. "_" .str_replace(" ","_",$oldfieldlabel).":".$fieldtype[0];
				$column_cvstdfilter = 	$tablename .":". $columnname .":".$fieldname.":".$fld_module. "_" .str_replace(" ","_",$oldfieldlabel);
				$select_columnname = $tablename.":".$columnname .":".$fld_module. "_" . str_replace(" ","_",$oldfieldlabel).":".$fieldname.":".$fieldtype[0];
				$reportsummary_column = $tablename.":".$columnname.":".str_replace(" ","_",$oldfieldlabel);

				$dbquery = 'alter table '. $adb->sql_escape_string($tablica).' drop column '. $adb->sql_escape_string($colName);
				$adb->pquery($dbquery, array());

				//To remove customfield entry from vtiger_field table
				$dbquery = 'delete from vtiger_field where columnname= ? and fieldid=? and vtiger_field.presence in (0,2)';
				$adb->pquery($dbquery, array($colName, $id));
				//we have to remove the entries in customview and report related tables which have this field ($colName)
				$adb->pquery("delete from vtiger_cvcolumnlist where columnname = ? ", array($deletecolumnname));
				$adb->pquery("delete from vtiger_cvstdfilter where columnname = ?", array($column_cvstdfilter));
				$adb->pquery("delete from vtiger_cvadvfilter where columnname = ?", array($deletecolumnname));
				$adb->pquery("delete from vtiger_selectcolumn where columnname = ?", array($select_columnname));
				$adb->pquery("delete from vtiger_relcriteria where columnname = ?", array($select_columnname));
				$adb->pquery("delete from vtiger_reportsortcol where columnname = ?", array($select_columnname));
				$adb->pquery("delete from vtiger_reportdatefilter where datecolumnname = ?", array($column_cvstdfilter));
				$adb->pquery("delete from vtiger_reportsummary where columnname like ?", array('%'.$reportsummary_column.'%'));
				$adb->pquery("delete from vtiger_fieldmodulerel where fieldid = ?", array($id));

				//Deleting from convert lead mapping vtiger_table- Jaguar
				if($fld_module=="Leads") {
					$deletequery = 'delete from vtiger_convertleadmapping where leadfid=?';
					$adb->pquery($deletequery, array($id));
				}elseif($fld_module=="Accounts" || $fld_module=="Contacts" || $fld_module=="Potentials") {
					$map_del_id = array("Accounts"=>"accountfid","Contacts"=>"contactfid","Potentials"=>"potentialfid");
					$map_del_q = "update vtiger_convertleadmapping set ".$map_del_id[$fld_module]."=0 where ".$map_del_id[$fld_module]."=?";
					$adb->pquery($map_del_q, array($id));
				}

				//HANDLE HERE - we have to remove the table for other picklist type values which are text area and multiselect combo box
				if($uitype == 15 || $uitype == 16 ) {
					$deltablequery = 'drop table IF EXISTS vtiger_'.$adb->sql_escape_string($colName);
					$adb->pquery($deltablequery, array());
					$deltablequeryseq = 'drop table IF EXISTS vtiger_'.$adb->sql_escape_string($colName).'_seq';
					$adb->pquery($deltablequeryseq, array());		
					$adb->pquery("delete from  vtiger_picklist_dependency where sourcefield=? or targetfield=?", array($colName,$colName));
					
					$fieldquery = 'select * from vtiger_picklist where name = ?';
					$res = $adb->pquery($fieldquery,array($columnname));
					$picklistid = $adb->query_result($res,0,'picklistid');
					$adb->pquery("delete from vtiger_picklist where name = ?", array($columnname));
					$adb->pquery("delete from vtiger_role2picklist where picklistid = ?", array($picklistid));
				}
			}
			
		}
		$log->debug("Exiting YetiForceUpdate::deleteFields() method ...");
	}
	public function addFields(){
		global $log;
		$log->debug("Entering YetiForceUpdate::addFields() method ...");
		include_once('vtlib/Vtiger/Module.php'); 
		$columnName = array("tabid","id","column","table","generatedtype","uitype","name","label","readonly","presence","defaultvalue","maximumlength","sequence","block","displaytype","typeofdata","quickcreate","quicksequence","info_type","masseditable","helpinfo","summaryfield","fieldparams","columntype","blocklabel","setpicklistvalues","setrelatedmodules");

		$OSSTimeControl = array(
		array('51','1600','timecontrol_type','vtiger_osstimecontrol','1','16','timecontrol_type','Type','1','2','PLL_WORKING_TIME','100','17','128','1','V~M','2','','BAS','1','','0','',"varchar(255)","LBL_MAIN_INFORMATION",array('PLL_WORKING_TIME','PLL_BREAK_TIME','PLL_HOLIDAY')),
		array(51,1706,'requirementcardsid','vtiger_osstimecontrol',1,'10','requirementcardsid','RequirementCards',1,2,'',100,13,129,1,'V~O',1,NULL,'BAS',1,'',0,'',"int(19)","LBL_BLOCK",array(),array('RequirementCards')),
		array(51,1707,'quotesenquiresid','vtiger_osstimecontrol',1,'10','quotesenquiresid','QuotesEnquires',1,2,'',100,14,129,1,'V~O',1,NULL,'BAS',1,'',0,'',"int(19)","LBL_BLOCK",array(),array('QuotesEnquires'))
		);
		$Quotes = array(
		array('20','1585','requirementcards_id','vtiger_quotes','1','10','requirementcards_id','RequirementCards','1','2','','100','28','49','1','V~O','1','','BAS','1','0','','',"int(19)","LBL_QUOTE_INFORMATION",array(),array('RequirementCards'))
		);
		$Calculations = array(
		array(70,1601,'currency_id','vtiger_calculations',1,'117','currency_id','Currency',1,2,'1',100,11,182,3,'I~O',3,NULL,'BAS',1,0,0,'',"int(19)","LBL_INFORMATION",array(),array()),
		array(70,1602,'conversion_rate','vtiger_calculations',1,'1','conversion_rate','Conversion Rate',1,2,'1',100,12,182,3,'N~O',3,NULL,'BAS',1,0,0,'',"decimal(10,3)","LBL_INFORMATION",array(),array()),
		array(70,1702,'requirementcardsid','vtiger_calculations',1,'10','requirementcardsid','RequirementCards',1,2,'',100,3,182,1,'M~M',1,NULL,'BAS',1,'',0,'',"int(19)","LBL_INFORMATION",array(),array('RequirementCards')),
		array(70,1703,'quotesenquiresid','vtiger_calculations',1,'10','quotesenquiresid','QuotesEnquires',1,2,'',100,5,182,10,'M~M',1,NULL,'BAS',1,'',0,'',"int(19)","LBL_INFORMATION",array(),array('QuotesEnquires')),
		array(70,1704,'calculations_cons','vtiger_calculations',1,'33','calculations_cons','LBL_CONS',1,2,'',100,9,182,1,'V~O',1,NULL,'BAS',1,'',0,'',"text","LBL_INFORMATION",array('PLL_DIFFICULT_REALIZATION','PLL_DIFFICULT_ORDER','PLL_DIFFICULT_SHIPMENT','PLL_OUTSOURCED_PARTNER'),array()),
		array(70,1705,'calculations_pros','vtiger_calculations',1,'33','calculations_pros','LBL_PROS',1,2,'',100,10,182,1,'V~O',1,NULL,'BAS',1,'',0,'',"text","LBL_INFORMATION",array('PLL_HIGH_MARGIN','PLL_EASY_REALIZATION','PLL_LONGTERM_REALIZATION'),array())
		);
		
		$Calendar = array(
		array(9,1603,'allday','vtiger_activity',1,'56','allday','All day',1,2,'',100,26,19,1,'C~O',0,NULL,'BAS',1,0,0,'',"tinyint(1)","LBL_TASK_INFORMATION",array(),array()),
		array(9,1715,'state','vtiger_activity',1,'16','state','LBL_STATE',1,2,'PLL_OPAQUE',100,27,19,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(255)","LBL_TASK_INFORMATION",array('PLL_OPAQUE','PLL_TRANSPARENT'),array())
		);
		$Events = array(
		array(16,1604,'allday','vtiger_activity',1,'56','allday','All day',1,2,'',100,24,39,1,'C~O',0,NULL,'BAS',1,0,0,'',"tinyint(1)","LBL_EVENT_INFORMATION",array(),array()),
		array(16,1714,'state','vtiger_activity',1,'16','state','LBL_STATE',1,2,'PLL_OPAQUE',100,25,39,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(255)","LBL_EVENT_INFORMATION",array(),array())
		);
		$Invoice = array(
		array(23,1629,'payment_balance','vtiger_invoice',1,'7','payment_balance','Payment balance',1,2,'',100,31,67,2,'NN~O',1,NULL,'BAS',1,0,0,'',"decimal(25,8)","LBL_INVOICE_INFORMATION",array(),array())
		);
		$Accounts = array(
		array(6,1630,'payment_balance','vtiger_account',1,'7','payment_balance','Payment balance',1,2,'',100,25,9,2,'NN~O',1,NULL,'BAS',1,0,0,'',"decimal(25,8)","LBL_ACCOUNT_INFORMATION",array(),array()),
		array(6,1738,'legal_form','vtiger_account',1,'16','legal_form','LBL_LEGAL_FORM',1,2,'',100,7,194,1,'V~M',1,NULL,'BAS',1,'',0,'',"varchar(255)","LBL_REGISTRATION_INFO",array('PLL_NATURAL_PERSON','PLL_BUSINESS_ACTIVITY','PLL_GENERAL_PARTNERSHIP','PLL_PROFESSIONAL_PARTNERSHIP','PLL_LIMITED_PARTNERSHIP','PLL_JOINT_STOCK_PARTNERSHIP','PLL_LIMITED_LIABILITY_COMPANY','PLL_STOCK_OFFERING_COMPANY','PLL_GOVERMENT_ENTERPRISE','PLL_ASSOCIATION','PLL_COOPERATIVE','PLL_FOUNDATION','PLL_EUROPEAN_PARTNERSHIP','PLL_EUROPEAN_ECONOMIC_INTEREST_GROUPING','PLL_EUROPEAN_COOPERATIVE','PLL_EUROPEAN_PRIVATE_PARTNERSHIP','PLL_EUROPEAN_RECIPROCAL_PARTNERSHIP','PLL_EUROPEAN_ASSOCIATION','PLL_UFCIITS'),array())
		);
		$Potentials = array(
		array(2,1631,'payment_balance','vtiger_potential',1,'7','payment_balance','Payment balance',1,2,'',100,19,1,2,'NN~O',1,NULL,'BAS',1,0,0,'',"decimal(25,8)","LBL_OPPORTUNITY_INFORMATION",array(),array())
		);
		$Vendors = array(
		array(18,1689,'buildingnumbera','vtiger_vendoraddress',1,'1','buildingnumbera','LBL_BUILDING_NUMBER',1,2,'',100,10,44,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_INFORMATION",array(),array()),
		array(18,1690,'buildingnumberb','vtiger_vendoraddress',1,'1','buildingnumberb','LBL_BUILDING_NUMBER',1,2,'',100,10,43,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_MAILING_INFORMATION",array(),array()),
		array(18,1691,'buildingnumberc','vtiger_vendoraddress',1,'1','buildingnumberc','LBL_BUILDING_NUMBER',1,2,'',100,10,179,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_DELIVERY_INFORMATION",array(),array()),
		array(18,1692,'localnumbera','vtiger_vendoraddress',1,'1','localnumbera','LBL_LOCAL_NUMBER',1,2,'',100,11,44,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_INFORMATION",array(),array()),
		array(18,1693,'localnumberb','vtiger_vendoraddress',1,'1','localnumberb','LBL_LOCAL_NUMBER',1,2,'',100,11,43,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_MAILING_INFORMATION",array(),array()),
		array(18,1694,'localnumberc','vtiger_vendoraddress',1,'1','localnumberc','LBL_LOCAL_NUMBER',1,2,'',100,11,179,1,'V~O',1,NULL,'BAS',1,'',0,'',"varchar(100)","LBL_ADDRESS_DELIVERY_INFORMATION",array(),array()),
		);
		$Leads = array(
		array(7,1736,'leads_relation','vtiger_leaddetails',1,'16','leads_relation','LBL_RELATION',1,2,'PLL_B2C',100,25,13,1,'V~M',1,NULL,'BAS',1,'',0,'',"varchar(255)","LBL_LEAD_INFORMATION",array('PLL_B2C','PLL_B2B'),array()),
		array(7,1737,'legal_form','vtiger_leaddetails',1,'16','legal_form','LBL_LEGAL_FORM',1,2,'',100,5,191,1,'V~M',1,NULL,'BAS',1,'',0,'',"varchar(255)","LBL_REGISTRATION_INFO",array(),array())
		);
		
		$setToCRM = array('OSSTimeControl'=>$OSSTimeControl,'Calculations'=>$Calculations,'Quotes'=>$Quotes,'Calendar'=>$Calendar,'Events'=>$Events,'Invoice'=>$Invoice,'Accounts'=>$Accounts,'Potentials'=>$Potentials,'Vendors'=>$Vendors,'Leads'=>$Leads);

		$setToCRMAfter = array();
		foreach($setToCRM as $nameModule=>$module){
			if(!$module)
				continue;
			foreach($module as $key=>$fieldValues){
				for($i=0;$i<count($fieldValues);$i++){
					$setToCRMAfter[$nameModule][$key][$columnName[$i]] = $fieldValues[$i];
				}
			}
		}
		foreach($setToCRMAfter as $moduleName=>$fields){
			foreach($fields as $field){
				if(self::checkFieldExists($field, $moduleName)){
					continue;
				}
					$moduleInstance = Vtiger_Module::getInstance($moduleName);
					$blockInstance = Vtiger_Block::getInstance($field['blocklabel'],$moduleInstance);
					$fieldInstance = new Vtiger_Field();
					$fieldInstance->column = $field['column'];
					$fieldInstance->name = $field['name'];
					$fieldInstance->label = $field['label'];
					$fieldInstance->table = $field['table'];
					$fieldInstance->uitype = $field['uitype'];
					$fieldInstance->typeofdata = $field['typeofdata'];
					$fieldInstance->readonly = $field['readonly'];
					$fieldInstance->displaytype = $field['displaytype'];
					$fieldInstance->masseditable = $field['masseditable'];
					$fieldInstance->quickcreate = $field['quickcreate'];
					$fieldInstance->columntype = $field['columntype'];
					$fieldInstance->presence = $field['presence'];
					$fieldInstance->maximumlength = $field['maximumlength'];
					$fieldInstance->info_type = $field['info_type'];
					$fieldInstance->helpinfo = $field['helpinfo'];
					$fieldInstance->summaryfield = $field['summaryfield'];
					$fieldInstance->generatedtype = $field['generatedtype'];
					$fieldInstance->defaultvalue = $field['defaultvalue'];
					$blockInstance->addField($fieldInstance);
					if($field['setpicklistvalues'] && ($field['uitype'] == 15 || $field['uitype'] == 16 || $field['uitype'] == 33 ))
						$fieldInstance->setPicklistValues($field['setpicklistvalues']);
					if($field['setrelatedmodules'] && $field['uitype'] == 10){
						$fieldInstance->setRelatedModules($field['setrelatedmodules']);
					}
			}
		}
	}
	public function addWorkflow (){
		global $log, $adb;
		$log->debug("Entering YetiForceUpdate::addWorkflow() method ...");
		require_once 'modules/com_vtiger_workflow/include.inc';
		require_once 'modules/com_vtiger_workflow/tasks/VTEntityMethodTask.inc';
		require_once 'modules/com_vtiger_workflow/VTEntityMethodManager.inc';
		require_once('include/events/include.inc');
		
		// rename workflow
		$workflowRename = array();
		$workflowRename[] = array(34,'Potentials','Proces sprzedażowy - Weryfikacja danych','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Data verification\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(35,'Potentials','Proces sprzedażowy - Wewnętrzna analiza Klienta','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Customer internal analysis\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(36,'Potentials','Proces sprzedażowy - Pierwszy kontakt z Klientem','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"First contact with a customer\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(37,'Potentials','Proces sprzedażowy - Zaawansowana analiza biznesowa','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Advanced business analysis\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(38,'Potentials','Proces sprzedażowy - Przygotowywanie kalkulacji','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Preparation of calculations\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(39,'Potentials','Proces sprzedażowy - Przygotowywanie oferty','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Preparation of offers\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(40,'Potentials','Proces sprzedażowy - Oczekiwanie na decyzje','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Awaiting a decision\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(41,'Potentials','Proces sprzedażowy - Negocjacje','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Negotiations\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(42,'Potentials','Proces sprzedażowy - Zamówienie i umowa','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Order and contract\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(43,'Potentials','Proces sprzedażowy - Weryfikacja dokumentów','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Documentation verification\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(44,'Potentials','Proces sprzedażowy - Sprzedaż wygrana - oczekiwanie na realizacje','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Waiting for processing\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(45,'Potentials','Proces sprzedażowy - Sprzedaż wygrana - realizacja zamówienia/umowy','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Order\\/contract processing\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(46,'Potentials','Proces sprzedażowy - Sprzedaż wygrana - działania posprzedażowe','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Presale activities\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(47,'Leads','Proces marketingowy - Weryfikacja danych','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_REQUIRES_VERIFICATION\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(48,'Leads','Proces marketingowy - Wstępna analiza','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_PRELIMINARY_ANALYSIS_OF\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(49,'Leads','Proces marketingowy - Zaawansowana analiza','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_ADVANCED_ANALYSIS\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowRename[] = array(50,'Leads','Proces marketingowy - Wstępne pozyskanie','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_INITIAL_ACQUISITION\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName = array();
		$workflowNewName[] = array(34,'Potentials','Sales stage - Data verification','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Data verification\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(35,'Potentials','Sales stage - Customer internal analysis','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Customer internal analysis\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(36,'Potentials','Sales stage - First contact with customer','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"First contact with a customer\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(37,'Potentials','Sales stage - Advanced business analysis','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Advanced business analysis\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(38,'Potentials','Sales stage - Preparing calculations','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Preparation of calculations\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(39,'Potentials','Sales stage - Preparing quote','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Preparation of offers\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(40,'Potentials','Sales stage - Awaiting decision','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Awaiting a decision\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(41,'Potentials','Sales stage - Negotiations','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Negotiations\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(42,'Potentials','Sales stage - Order and Contract','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Order and contract\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(43,'Potentials','Sales stage - Verification of documents','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Documentation verification\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(44,'Potentials','Sales stage - Sales winnings - waiting for projects','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Waiting for processing\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(45,'Potentials','Sales stage - Sales Win - performance of the contract / agreement','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Order\\/contract processing\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(46,'Potentials','Sales stage - Sales Win - post sales activities','[{\"fieldname\":\"sales_stage\",\"operation\":\"is\",\"value\":\"Closed Presale activities\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(47,'Leads','Marketing process - Data Verification','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_REQUIRES_VERIFICATION\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(48,'Leads','Marketing process - Preliminary analysis','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_PRELIMINARY_ANALYSIS_OF\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(49,'Leads','Marketing process - Advanced Analysis','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_ADVANCED_ANALYSIS\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflowNewName[] = array(50,'Leads','Marketing process - Initial acquisition','[{\"fieldname\":\"leadstatus\",\"operation\":\"is\",\"value\":\"LBL_INITIAL_ACQUISITION\",\"valuetype\":\"rawtext\",\"joincondition\":\"\",\"groupjoin\":\"and\",\"groupid\":\"0\"}]',2,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);

		foreach($workflowRename AS $oldName){
			$result = $adb->pquery("SELECT workflow_id,summary FROM `com_vtiger_workflows` WHERE summary = ? AND module_name =? ", array($oldName[2],$oldName[1]));
			if($adb->num_rows($result) == 1){
				foreach($workflowNewName AS $newName){
					if($newName[0] == $oldName[0]){
						$adb->pquery("UPDATE `com_vtiger_workflows` SET `summary` = ? WHERE `summary` = ? AND module_name = ? ;", array($newName[2], $oldName[2], $newName[1]));
					}
				}
			}
		}
		//add new entity method
			$task_entity_method = array();
			$task_entity_method[] = array('Contacts','MarkPasswordSent','modules/Contacts/handlers/ContactsHandler.php','Contacts_markPasswordSent');
			$task_entity_method[] = array('PaymentsIn','UpdateBalance','modules/PaymentsIn/workflow/UpdateBalance.php','UpdateBalance');
			$task_entity_method[] = array('Invoice','UpdateBalance','modules/PaymentsIn/workflow/UpdateBalance.php','UpdateBalance');
			$task_entity_method[] = array('PaymentsOut','UpdateBalance','modules/PaymentsIn/workflow/UpdateBalance.php','UpdateBalance');
			$emm = new VTEntityMethodManager($adb);
			foreach($task_entity_method as $method){
				$result = $adb->pquery("SELECT * FROM `com_vtiger_workflowtasks_entitymethod` WHERE module_name = ? AND method_name =? ", array($method[0],$method[1]));
				if($adb->num_rows($result) == 0){
					$emm->addEntityMethod($method[0], $method[1], $method[2], $method[3]);
				}
			}
		$workflow = array();
		
		$workflow[] = array(56,'ModComments','New comment added to ticket from portal','[{"fieldname":"(related_to : (HelpDesk) ticket_title)","operation":"is not empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"customer","operation":"is not empty","value":null,"valuetype":"rawtext","joincondition":"","groupjoin":"and","groupid":"0"}]',1,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflow[] = array(57,'ModComments','New comment added to ticket - contact person','[{"fieldname":"customer","operation":"is empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"(related_to : (HelpDesk) contact_id)","operation":"is not empty","value":null,"valuetype":"rawtext","joincondition":"","groupjoin":"and","groupid":"0"}]',1,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflow[] = array(58,'ModComments','New comment added to ticket - account','[{"fieldname":"customer","operation":"is empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"(related_to : (Accounts) accountname)","operation":"is not empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"(related_to : (Contacts) emailoptout)","operation":"is","value":"1","valuetype":"rawtext","joincondition":"","groupjoin":"and","groupid":"0"}]',1,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		$workflow[] = array(59,'ModComments','New comment added to ticket - contact','[{"fieldname":"customer","operation":"is empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"(related_to : (Contacts) lastname)","operation":"is not empty","value":null,"valuetype":"rawtext","joincondition":"and","groupjoin":"and","groupid":"0"},{"fieldname":"(related_to : (Contacts) emailoptout)","operation":"is","value":"1","valuetype":"rawtext","joincondition":"","groupjoin":"and","groupid":"0"}]',1,NULL,'basic',6,NULL,NULL,NULL,NULL,NULL,NULL);
		
		$workflowTask = array();
		$workflowTask[] = array(124,56,'Send e-mail to user','O:19:"VTEmailTemplateTask":10:{s:18:"executeImmediately";b:1;s:10:"workflowId";s:2:"56";s:7:"summary";s:19:"Send e-mail to user";s:6:"active";b:0;s:7:"trigger";N;s:8:"template";s:3:"105";s:11:"attachments";s:0:"";s:5:"email";s:28:"created_user_id=Users=email1";s:10:"copy_email";s:0:"";s:2:"id";i:124;}');
		$workflowTask[] = array(125,57,'Send e-mail to contact person','O:19:"VTEmailTemplateTask":10:{s:18:"executeImmediately";b:1;s:10:"workflowId";s:2:"57";s:7:"summary";s:29:"Send e-mail to contact person";s:6:"active";b:1;s:7:"trigger";N;s:8:"template";s:3:"106";s:11:"attachments";s:0:"";s:5:"email";s:23:"customer=Contacts=email";s:10:"copy_email";s:0:"";s:2:"id";i:125;}');
		$workflowTask[] = array(126,58,'Send e-mail to account','O:19:"VTEmailTemplateTask":10:{s:18:"executeImmediately";b:1;s:10:"workflowId";s:2:"58";s:7:"summary";s:22:"Send e-mail to account";s:6:"active";b:1;s:7:"trigger";N;s:8:"template";s:3:"106";s:11:"attachments";s:0:"";s:5:"email";s:26:"related_to=Accounts=email1";s:10:"copy_email";s:0:"";s:2:"id";i:126;}');
		$workflowTask[] = array(127,59,'Send e-mail to contact','O:19:"VTEmailTemplateTask":10:{s:18:"executeImmediately";b:1;s:10:"workflowId";s:2:"59";s:7:"summary";s:22:"Send e-mail to contact";s:6:"active";b:1;s:7:"trigger";N;s:8:"template";s:3:"106";s:11:"attachments";s:0:"";s:5:"email";s:25:"related_to=Contacts=email";s:10:"copy_email";s:0:"";s:2:"id";i:127;}');
		
		$workflowManager = new VTWorkflowManager($adb);
		$taskManager = new VTTaskManager($adb);
		foreach($workflow as $record){
			$result = $adb->pquery("SELECT workflow_id FROM `com_vtiger_workflows` WHERE summary = ? AND module_name =? ", array($record[2],$record[1]));
			if($adb->num_rows($result) > 0){
				continue;
			}
			$newWorkflow = $workflowManager->newWorkFlow($record[1]);
			$newWorkflow->description = $record[2];
			$newWorkflow->test = $record[3];
			$newWorkflow->executionCondition = $record[4];
			$newWorkflow->defaultworkflow = $record[5];
			$newWorkflow->type = $record[6];
			$newWorkflow->filtersavedinnew = $record[7];
			$workflowManager->save($newWorkflow);
			foreach($workflowTask as $indexTask){
				if($indexTask[1] == $record[0]){
					$task = $taskManager->unserializeTask($indexTask[3]);
					$task->id = '';
					$task->workflowId = $newWorkflow->id;
					$taskManager->saveTask($task);
				}
			}	
		}
                $result = $adb->pquery("SELECT workflow_id FROM `com_vtiger_workflows` WHERE summary = ? AND module_name =? ", array('Send Customer Login Details','Contacts'));
                if($adb->num_rows($result) == 1){
                    $workflow_id = $adb->query_result_raw($result, 0, 'workflow_id');
                    $workflowTaskAdd = array(128,53,'Mark portal users password as sent.','O:18:"VTEntityMethodTask":7:{s:18:"executeImmediately";b:1;s:10:"workflowId";s:2:"53";s:7:"summary";s:35:"Mark portal users password as sent.";s:6:"active";b:0;s:7:"trigger";N;s:10:"methodName";s:16:"MarkPasswordSent";s:2:"id";i:128;}');
                    $result = $adb->pquery("SELECT * FROM `com_vtiger_workflowtasks` WHERE summary = ? AND workflow_id =? ", array($workflowTaskAdd[2],$workflow_id));
                    if($adb->num_rows($result) == 0){
                        $taskManager = new VTTaskManager($adb);
                        $task = $taskManager->unserializeTask($workflowTaskAdd[3]);
                        $task->id = '';
                        $task->workflowId = $workflow_id;
                        $taskManager->saveTask($task);
                    }
                }
		$log->debug("Exiting YetiForceUpdate::addWorkflow() method ...");
	}
	public function addRecords(){
		global $log,$adb,$current_user;
		$log->debug("Entering YetiForceUpdate::addRecords() method ...");
		$assigned_user_id = $current_user->id;
		$moduleName = 'OSSMailTemplates';
		vimport('~~modules/' . $moduleName . '/' . $moduleName . '.php');
		$records = array();
		$records[] = array('New comment added to ticket from portal','ModComments','New comment added to ticket from portal','Dear User,<br />
A new comment has been added to the ticket.<br />
#b#597#bEnd# #a#597#aEnd#<br /><br />
 ');
		$records[] = array('New comment added to ticket','ModComments','New comment added to ticket','<span class="value">Dear User,<br />
A new comment has been added to the ticket.<br />
#b#597#bEnd# #a#597#aEnd#</span>');
		$records[] = array('Security risk has been detected - Brute Force','Contacts','Security risk has been detected','<span class="value">Dear user,<br />
Failed login attempts have been detected. </span>');
		$records[] = array('Backup has been made','Contacts','Backup has been made notification','Dear User,<br />
Backup has been made.');

		foreach($records as $record){
			$result = $adb->query("SELECT * FROM `vtiger_ossmailtemplates` WHERE `name` = '".$record[0]."'");
			if($adb->num_rows($result) == 0){
				$instance = new $moduleName();
				$instance->column_fields['assigned_user_id'] = $assigned_user_id;
				$instance->column_fields['name'] = $record[0];
				$instance->column_fields['oss_module_list'] = $record[1];
				$instance->column_fields['subject'] = $record[2];
				$instance->column_fields['content'] = $record[3];
				$save = $instance->save($moduleName);
			}
		}
		$log->debug("Exiting YetiForceUpdate::addRecords() method ...");
	}
	public function addModules(){
		$modules = array('QuotesEnquires','RequirementCards','HolidaysEntitlement','PaymentsIn','PaymentsOut','LettersIn','LettersOut','NewOrders','Reservations');
		foreach($modules as $module){
			try {
				if(file_exists('cache/updates/'.$module.'.xml') && !Vtiger_Module::getInstance($module)){
					$importInstance = new Vtiger_PackageImport();
					$importInstance->_modulexml = simplexml_load_file('cache/updates/'.$module.'.xml');
					$importInstance->import_Module();
					self::addModuleToMenu($module, (string)$importInstance->_modulexml->parent);
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	}
	public function addModuleToMenu($moduleName, $parent){
		global $log;
		$log->debug("Entering YetiForceUpdate::addModuleToMenu($moduleName, $parent) method ...");
		$adb = PearDatabase::getInstance();
		if(!$parent)
			return false;
		
		$sql = "SELECT `profileid` FROM `vtiger_profile` WHERE 1;";
        $result = $adb->query( $sql, true );
        $num = $adb->num_rows( $result );
        
        $profiles = array();
        for ( $i=0; $i<$num; $i++ ) {
            $profiles[] = $adb->query_result( $result, $i, 'profileid' );
        }
        
        $profilePermissions = implode( ' |##| ', $profiles );
		$profilePermissions = ' ' . $profilePermissions . ' ';
		
		//$blocksModule = array('My Home Page','Companies','Human resources','Sales','Projects','Support','Databases');
		$sql = "SELECT `id` FROM `vtiger_ossmenumanager` WHERE label = ? AND tabid = ? AND parent_id = ?;";
		$result = $adb->pquery( $sql, array($parent, 0, 0), true );
		$num = $adb->num_rows( $result );
		if($num == 0){
			$subParams = array(
				'name'         => $parent,
				'visible'       => '1',
				'permission'    => $profilePermissions,
				'locationicon'  => '',
				'sizeicon'      => '',
				'langfield'     => ''
				
			);
			$id = OSSMenuManager_Record_Model::addBlock( $subParams ); 
			if($id){
				$subParams = array(
				'parent_id'     => $id,
				'tabid'         => getTabid($moduleName),
				'label'         => $moduleName,
				'sequence'      => -1,
				'visible'       => '1',
				'type'          => 0,
				'url'           => '',
				'new_window'    => 0,
				'permission'    => $profilePermissions,
				'locationicon'  => '',
				'sizeicon'      => '',
				'langfield'     => ''
				
				);
				$id = OSSMenuManager_Record_Model::addMenu( $subParams ); 
			}
		}
		elseif($num == 1){
			$subParams = array(
				'parent_id'     => $adb->query_result( $result, 0, 'id' ),
				'tabid'         => getTabid($moduleName),
				'label'         => $moduleName,
				'sequence'      => -1,
				'visible'       => '1',
				'type'          => 0,
				'url'           => '',
				'new_window'    => 0,
				'permission'    => $profilePermissions,
				'locationicon'  => '',
				'sizeicon'      => '',
				'langfield'     => ''
				
			);
			$id = OSSMenuManager_Record_Model::addMenu( $subParams ); 
		}
		$log->debug("Exiting YetiForceUpdate::addModuleToMenu() method ...");
	}

	
	function recurseCopy($src,$dst) {
		global $root_directory;
		if(!file_exists( $src ) )
			return;
		$dir = opendir($src); 
		@mkdir($root_directory.$dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					$this->recurseCopy($src . '/' . $file,$dst . '/' . $file); 
				} else {
					copy($root_directory.$src . '/' . $file,$root_directory.$dst . '/' . $file);
					unlink($root_directory.$src . '/' . $file);
				}
			} 
		} 
		closedir($dir); 
		rmdir($src);
	}
}