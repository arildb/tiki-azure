<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: SnippetHelper.php 44444 2013-01-05 21:24:24Z changi67 $

class Search_ResultSet_SnippetHelper implements Zend_Filter_Interface
{
	private $length;
	private $formatter;

	function __construct($length = 240)
	{
		$this->length = (int) 240;
		$this->formatter = new Search_Formatter_ValueFormatter_Snippet(array( 'length' => $this->length ));
	}

	function filter($content)
	{
		$snippet = $this->formatter->render('', $content, array());
		return $snippet;
	}
}

