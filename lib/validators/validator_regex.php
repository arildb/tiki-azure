<?php 
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: validator_regex.php 44444 2013-01-05 21:24:24Z changi67 $

function validator_regex($input, $parameter = '', $message = '')
{
	$times = preg_match('/'.$parameter.'/', $input, $matches);
	if (!$times || $matches[0] != $input) {
		if ($message) {
			return tra($message);
		} else {
			return false;	
		}
	} else {	
		return true;
	}
}



