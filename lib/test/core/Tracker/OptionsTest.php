<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: OptionsTest.php 45957 2013-05-16 12:05:18Z lphuberdeau $

class Tracker_OptionsTest extends PHPUnit_Framework_TestCase
{
	function testBuildLegacyStringBuilder()
	{
		$options = Tracker_Options::fromSerialized(json_encode(array('a' => 3, 'b' => 2, 'c' => 1)), array(
			'params' => array(
				'a' => array(
					'legacy_index' => 2,
				),
				'b' => array(
					'legacy_index' => 1,
				),
				'c' => array(
					'legacy_index' => 0,
				),
				'd' => array(
					// No legacy
				),
			),
		));

		$this->assertEquals(array('1', '2', '3'), $options->buildOptionsArray());
	}
}

