<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: FacetBuilder.php 46273 2013-06-10 19:26:34Z lphuberdeau $

class Search_Elastic_FacetBuilder
{
	function build(array $facets)
	{
		if (empty($facets)) {
			return array();
		}

		$out = array();
		foreach ($facets as $facet) {
			$out[$facet->getName()] = $this->buildFacet($facet);
		}

		return array(
			'facets' => $out,
		);
	}

	private function buildFacet(Search_Query_Facet_Interface $facet)
	{
		return array('terms' => array(
			'field' => $facet->getField(),
		));
	}
}

