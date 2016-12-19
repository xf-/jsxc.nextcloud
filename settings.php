<?php

OCP\User::checkAdminUser();

OCP\Util::addScript('njsxc', 'admin');

$config = \OC::$server->getConfig();
$tmpl = new OCP\Template('njsxc', 'settings');

$tmpl->assign('serverType', $config->getAppValue('njsxc', 'serverType'));
$tmpl->assign('boshUrl', $config->getAppValue('njsxc', 'boshUrl'));
$tmpl->assign('xmppDomain', $config->getAppValue('njsxc', 'xmppDomain'));
$tmpl->assign('xmppResource', $config->getAppValue('njsxc', 'xmppResource'));
$tmpl->assign('xmppOverwrite', $config->getAppValue('njsxc', 'xmppOverwrite'));
$tmpl->assign('xmppStartMinimized', $config->getAppValue('njsxc', 'xmppStartMinimized'));
$tmpl->assign('iceUrl', $config->getAppValue('njsxc', 'iceUrl'));
$tmpl->assign('iceUsername', $config->getAppValue('njsxc', 'iceUsername'));
$tmpl->assign('iceCredential', $config->getAppValue('njsxc', 'iceCredential'));
$tmpl->assign('iceSecret', $config->getAppValue('njsxc', 'iceSecret'));
$tmpl->assign('iceTtl', $config->getAppValue('njsxc', 'iceTtl'));

return $tmpl->fetchPage();
