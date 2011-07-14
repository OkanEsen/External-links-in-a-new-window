<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * @author	Okan Esen
 * @copyright	2011 Okan Esen
 * @package	de.okanesen.externallinks
 * @license	Creative Commons <by-nd> <http://creativecommons.org/licenses/by-nd/3.0/deed.de>
 */
class ExternalLinksListener implements EventListener {
	
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		$permissionStatus = intval(WCF::getUser()->externalLinksInNewWindow);
		
		WCF::getTPL()->assign(array(
    		'checkPermission' => $permissionStatus
        ));
		
		WCF::getTPL()->append("specialStyles",WCF::getTPL()->fetch("externalLinksJS"));
	}
}
?>