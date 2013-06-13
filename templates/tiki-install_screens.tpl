{* $Id: tiki-install_screens.tpl 44972 2013-02-25 16:13:14Z luciash $ *}<!DOCTYPE html>
<html id="installer" lang="{if !empty($pageLang)}{$pageLang}{else}{$prefs.language}{/if}">
	<head>
{include file='header.tpl'}
	</head>
	<body class="tiki fixed_width">


{$mid_data}


{include file='footer.tpl'}
{if $headerlib}
	{$headerlib->output_js_files()}
	{$headerlib->output_js()}
{/if}
	</body>
</html>
