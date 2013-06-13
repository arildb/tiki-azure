<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: quantify.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_quantify_list()
{
	return array(
		'quantify_changes' => array(
			'name' => tra('Quantify change size'),
			'description' => tra('In addition to tracking the changes, track the change size and display the approximate up-to-date-ness of the page.'),
			'type' => 'flag',
			'default' => 'n',
		),
	);
}
