<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: ResultSet.php 45842 2013-05-02 15:28:39Z lphuberdeau $

class Search_Elastic_ResultSet extends Search_ResultSet
{
	function highlight($content)
	{
		return $content['_highlight'];
	}
}

