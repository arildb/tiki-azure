<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: articles.php 44444 2013-01-05 21:24:24Z changi67 $

function prefs_articles_list()
{
	return array(
		'articles_feature_copyrights' => array(
			'name' => tra('Articles'),
            'description' => tra('allows you to add copyright information for articles'),
			'type' => 'flag',
			'dependencies' => array(
				'feature_articles',
			),
			'default' => 'n',
		),
	);
}
