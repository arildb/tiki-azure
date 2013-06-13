<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: areas.php 46033 2013-05-24 16:26:55Z lphuberdeau $

function prefs_areas_list()
{
	return array(
		'areas_root' => array(
			'name' => tra('Areas root category id'),
			'description' => tra('Id of category whose children are bound to a perspective by areas.'),
			'type' => 'text',
			'size' => '10',
			'filter' => 'digits',
			'default' => 0,
			'help' => 'Areas',
			'profile_reference' => 'category',
			'dependencies' => array(
				'feature_areas',
			),
		),
	);
}

