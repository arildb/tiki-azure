<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: permission.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_permission_list()
{
	return array(
		'permission_denied_url' => array(
			'name' => tra('Send to URL'),
            'description' => tra('URL to redirect to on \'permission denied\''),
			'type' => 'text',
			'size' => '50',
			'default' => '',
			'tags' => array('basic'),
		),
		'permission_denied_login_box' => array(
			'name' => tra('On permission denied, display login module (for Anonymous)'),
			'type' => 'flag',
			'default' => 'n',
			'tags' => array('basic'),
		),
	);
}
