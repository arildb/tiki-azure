{* $Id: wikiplugin_subscribegroup.tpl 45016 2013-03-01 09:43:20Z chibaguy $ *}
{strip}
<form method="post">
<input type="hidden" name="group" value="{$subscribeGroup|escape}">
<input type="hidden" name="iSubscribeGroup" value="{$iSubscribeGroup}">
{$text|escape}
<div><input type="submit" name="subscribeGroup" value="{tr}{$action}{/tr}"></div>
</form>
{/strip}