{* $Id: wikiplugin_listpagenames.tpl 46166 2013-06-05 11:34:24Z changi67 $ *}
{strip}
<ul>
{section name=ix loop=$listpages}
<li>
	<a href="tiki-index.php?page={$listpages[ix].pageName|escape:"url"}" class="link" title="{tr}view{/tr}">
		{if !empty($showPageAlias) and $showPageAlias eq 'y' and !empty($listpages[ix].page_alias)}
			{$listpages[ix].page_alias}
		{else}
			{$listpages[ix].pageName}
		{/if}
	</a>
</li>
{/section}
{if $showNumberOfPages eq 'y'}
{tr}Number of result:{/tr}{$listpages|@count}
{/if}
</ul>
{/strip}
