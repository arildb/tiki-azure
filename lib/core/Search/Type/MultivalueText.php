<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: MultivalueText.php 44444 2013-01-05 21:24:24Z changi67 $

class Search_Type_MultivalueText implements Search_Type_Interface
{
	private $values;

	function __construct(array $values)
	{
		$this->values = $values;
	}

	function getValue()
	{
		$strings = array();
		foreach ($this->values as $val) {
			$val = md5($val);
			$raw = 'token' . $val;

			// Must strip numbers to prevent tokenization
			$strings[] = strtr($raw, '1234567890', 'pqrtuvwxyz');
		}

		return implode(' ', $strings);
	}
}

