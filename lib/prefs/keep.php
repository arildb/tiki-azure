<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: keep.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_keep_list()
{
	return array(
		'keep_versions' => array(
			'name' => tra('Keep versions for'),
            'description' => tra('Never delete versions younger than (? days), default=1'),
			'type' => 'text',
			'size' => '5',
			'shorthint' => tra('days'),
			'default' => 1,
		),
	);	
}
