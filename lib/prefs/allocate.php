<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: allocate.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_allocate_list()
{
	$prefs = array(
		'unified_rebuild' => array('label' => tr('search index rebuild'), 'memory' => true, 'time' => true),
		'tracker_export_items' => array('label' => tr('tracker item export'), 'memory' => true, 'time' => true),
	);

	$out = array();
	foreach ($prefs as $name => $info) {
		if ($info['memory']) {
			$out['allocate_memory_' . $name] = array(
				'name' => tr('Memory limit to apply during %0', $info['label']),
				'description' => tr('Temporarily adjust the memory limit to use during %0. Depending on your volume of data, some large operations require more memory. Increasing it locally, per operation, allows to keep a lower memory limit globally. Keep in mind memory usage is still bound to what is available on the server.', $info['label']),
				'help' => 'Memory+Limit',
				'type' => 'text',
				'default' => '',
				'shorthint' => tr('ex: 256M'),
				'size' => 8,
			);
		}

		if ($info['time']) {
			$out['allocate_time_' . $name] = array(
				'name' => tr('Time limit to apply during %0', $info['label']),
				'description' => tr('Temporarily adjust the time limit to use during %0. Depending on the volume of data, some requests may take longer. Increase the time limit locally to resolve the issue. Use reasonable values.', $info['label']),
				'help' => 'Time+Limit',
				'type' => 'text',
				'default' => '',
				'shorthint' => tr('seconds'),
				'size' => 8,
			);
		}
	}

	return $out;
}
