<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: include_non_autoload_compatible_classes.php 44444 2013-01-05 21:24:24Z changi67 $

/*********************************************************
 * In lib/test/core/bootstrap.php, we define an _autoload() 
 * function which, given a class named A_B_C, will automatically
 * look for it in A/B/C.php.
 * 
 * But there are many classes in PHP and in Tiki that do not
 * follow that naming convention. So, we need to include them
 * explicitly in this file.
 *********************************************************/ 
 
 include_once('lib/diff/difflib.php');
