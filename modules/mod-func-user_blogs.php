<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-user_blogs.php 44444 2013-01-05 21:24:24Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}


/**
 * @return array
 */
function module_user_blogs_info()
{
	return array(
		'name' => tra('My Blogs'),
		'description' => tra('Displays to registered users their blogs.'),
		'prefs' => array('feature_blogs'),
		'params' => array(),
		'common_params' => array("nonums")
	);
}

/**
 * @param $mod_reference
 * @param $module_params
 */
function module_user_blogs($mod_reference, $module_params)
{
	global $user, $tikilib, $smarty;
	if ($user) {
		global $bloglib; require_once('lib/blogs/bloglib.php');
		$ranking = $bloglib->list_user_blogs($user, false);
		
		$smarty->assign('modUserBlogs', $ranking);
		$smarty->assign('tpl_module_title', tra("My blogs"));
	}
}
