 {* $Id: wikiplugin_catorphans.tpl 45006 2013-02-28 14:59:58Z chibaguy $ *}

{foreach from=$pages item=pg}
		 <a href="{$pg.pageName|sefurl}">{$pg.pageName|escape}</a><br>
{/foreach}
{if $pagination.step ne -1}
	{pagination_links cant=$pagination.cant step=$pagination.step offset=$pagination.offset}{/pagination_links}
{/if}