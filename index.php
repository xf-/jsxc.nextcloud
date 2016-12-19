<?php
OCP\User::checkLoggedIn ();

OCP\App::setActiveNavigationEntry ( 'njsxc' );
$tmpl = new OCP\Template ( 'njsxc', 'main', 'user' );
$tmpl->printPage ();
?>
