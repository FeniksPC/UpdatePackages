<?php
/**
 * 
 * @package YetiForce.handler
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class AJAXChat {
	function vtlib_handler($modulename, $event_type) {
		if($event_type == 'module.postinstall') {

		} else if($event_type == 'module.disabled') {
			$moduleInstance = vtlib\Module::getInstance($modulename);
			$moduleInstance->deleteLink('HEADERSCRIPT', 'Chat', 'layouts/_layoutName_/modules/AJAXChat/Chat.js');
			// TODO Handle actions when this module is disabled.
			return;
		} else if($event_type == 'module.enabled') {
			$moduleInstance = vtlib\Module::getInstance($modulename);
			$moduleInstance->addLink('HEADERSCRIPT', 'Chat', 'layouts/_layoutName_/modules/AJAXChat/Chat.js');
			// TODO Handle actions when this module is enabled.
			return;
		} else if($event_type == 'module.preuninstall') {
			// TODO Handle actions when this module is about to be deleted.
			return;		
		} else if($event_type == 'module.preupdate') {
			// TODO Handle actions before this module is updated.
			return;			
		} else if($event_type == 'module.postupdate') {
		
		}
	}
}
