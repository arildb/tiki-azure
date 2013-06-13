<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: trackerfield.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_trackerfield_list($partial = false)
{
	$factory = new Tracker_Field_Factory(false);
	$types = $factory->getFieldTypes();
	
	$prefs = array();
	foreach ($types as $type) {
		$name = array_shift($type['prefs']);
		$prefs[$name] = array(
			'name' => $type['name'],
			'description' => $type['description'],
			'tags' => $type['tags'],
			'default' => $type['default'],
			'dependencies' => $type['prefs'],
			'type' => 'flag',
			'warning' => isset($type['warning']) ? $type['warning'] : false,
			'help' => isset($type['help']) ? urlencode($type['help']) : false,
		);
	}

	return $prefs;
}

