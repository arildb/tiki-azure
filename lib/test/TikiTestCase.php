<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: TikiTestCase.php 44444 2013-01-05 21:24:24Z changi67 $
/*
 * Created on Jan 30, 2009
 *
 * Parent class of all test cases. For some reason PHPUnit doesn't deal
 * well with globals, so $backupGlobals should be set to false. 
 * Use this class to set other PHPUnit variables, as needed. 
 * 
 */
 
require_once (version_compare(PHPUnit_Runner_Version::id(), '3.5.0', '>=')) ? 'PHPUnit/Autoload.php' : 'PHPUnit/Framework.php';
 
abstract class TikiTestCase extends PHPUnit_Framework_TestCase
{
 	protected $backupGlobals = FALSE;	
}
