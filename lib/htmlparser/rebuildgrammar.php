<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: rebuildgrammar.php 44444 2013-01-05 21:24:24Z changi67 $

//include ("common.inc");

include ("htmlgrammarparser.inc");
$p = new HtmlGrammarParser("htmlgrammar.dat");
$p->Parse();
$p->PrintErrors();
$p->SaveGrammar("htmlgrammar.cmp");
print "Done.";
//PrintArray($p->pg);
