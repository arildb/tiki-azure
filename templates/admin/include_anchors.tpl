{*$Id: include_anchors.tpl 40830 2012-04-08 15:45:11Z sept_7 $*}

{foreach from=$icons key=page item=info}
	{if ! $info.disabled and $info.icon}
		{self_link _icon=$info.icon _icon_class="reflect" _width="32" _height="32" alt=$info.title page=$page _class="icon tips" _title="`$info.title`|`$info.description`"}{/self_link}
	{/if}
{/foreach}

<br class="clear" />
