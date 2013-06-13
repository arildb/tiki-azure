<?php
/**
 * @package tikiwiki
 */
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: tiki-wiki3d.php 44444 2013-01-05 21:24:24Z changi67 $

include_once ('tiki-setup.php');

$access->check_feature('wiki_feature_3d');

$smarty->assign('page', $_REQUEST['page']);
$smarty->display('tiki-wiki3d.tpl');
