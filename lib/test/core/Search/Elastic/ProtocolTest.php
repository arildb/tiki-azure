<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ProtocolTest.php 45653 2013-04-21 17:51:01Z lphuberdeau $

class Search_Elastic_ProtocolTest extends PHPUnit_Framework_TestCase
{
	function testObtainStatus()
	{
		$connection = new Search_Elastic_Connection('http://localhost:9200');
		$status = $connection->getStatus();

		if (! $status->ok) {
			$this->markTestSkipped('ElasticSearch needs to be available on localhost:9200 for the test to run.');
		}

		$this->assertEquals(200, $status->status);
	}
}

