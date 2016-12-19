<?php

OCP\User::checkAdminUser();
OCP\JSON::callCheck();

$config = \OC::$server->getConfig();

$config->setAppValue('njsxc', 'serverType', $_POST ['serverType']);
$config->setAppValue('njsxc', 'boshUrl', $_POST ['boshUrl']);
$config->setAppValue('njsxc', 'xmppDomain', $_POST ['xmppDomain']);
$config->setAppValue('njsxc', 'xmppResource', $_POST ['xmppResource']);
$config->setAppValue('njsxc', 'xmppOverwrite', (isset($_POST ['xmppOverwrite'])) ? $_POST ['xmppOverwrite'] : 'false');
$config->setAppValue('njsxc', 'xmppStartMinimized', (isset($_POST ['xmppStartMinimized'])) ? $_POST ['xmppStartMinimized'] : 'false');

$config->setAppValue('njsxc', 'iceUrl', $_POST ['iceUrl']);
$config->setAppValue('njsxc', 'iceUsername', $_POST ['iceUsername']);
$config->setAppValue('njsxc', 'iceCredential', $_POST ['iceCredential']);
$config->setAppValue('njsxc', 'iceSecret', $_POST ['iceSecret']);
$config->setAppValue('njsxc', 'iceTtl', $_POST ['iceTtl']);

echo 'true';
