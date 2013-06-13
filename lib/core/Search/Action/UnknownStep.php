<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: UnknownStep.php 44444 2013-01-05 21:24:24Z changi67 $

class Search_Action_UnknownStep implements Search_Action_Step
{
	private $actionName;

	function __construct($action = null)
	{
		$this->actionName = $action;
	}

	function getFields()
	{
		return array();
	}

	function validate(array $entry)
	{
		return false;
	}

	function execute(array $entry)
	{
	}
}

