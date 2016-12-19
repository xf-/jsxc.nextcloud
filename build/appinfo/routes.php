<?php 
/**
 * ownCloud - JavaScript XMPP Chat
 *
 * Copyright (c) 2014 Klaus Herberth <klaus@jsxc.org> <br>
 * Released under the MIT license
 *
 * @author Klaus Herberth
 */

use \OCA\NJSXC\AppInfo\Application;

$this->create('njsxc_ajax_getsettings', 'ajax/getSettings.php')
	->actionInclude('njsxc/ajax/getSettings.php');

$this->create('njsxc_ajax_getturncredentials', 'ajax/getTurnCredentials.php')
	->actionInclude('njsxc/ajax/getTurnCredentials.php');

$this->create('njsxc_ajax_setadminsettings', 'ajax/setAdminSettings.php')
	->actionInclude('njsxc/ajax/setAdminSettings.php');

$this->create('njsxc_ajax_setUserSettings', 'ajax/setUserSettings.php')
	->actionInclude('njsxc/ajax/setUserSettings.php');

$this->create('njsxc_ajax_getUsers', 'ajax/getUsers.php')
	->actionInclude('njsxc/ajax/getUsers.php');

$application = new Application();
$application->registerRoutes($this, array(
	'routes' => array(
		array('name' => 'http_bind#index', 'url' => '/http-bind', 'verb' => 'POST'),
	)
));
?>
