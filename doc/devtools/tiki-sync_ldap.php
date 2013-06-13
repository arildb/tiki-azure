<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-sync_ldap.php 44444 2013-01-05 21:24:24Z changi67 $

require_once('tiki-setup.php');
require_once('lib/userslib.php');

/*
if ($tiki_p_admin != 'y') {
	if ($prefs['feature_redirect_on_error'] == 'y') {
		header('location: '.$prefs['tikiIndex']);
		die;
	} else {
		die("You need to be admin to run this script");
	}
}*/

$userlib->ldap_sync_all_users();
$userlib->ldap_sync_all_groups();