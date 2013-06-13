{* $Id: blog_wrapper.tpl 45750 2013-04-28 20:16:03Z skinut $ *}
<div class="postbody clearfix">
	<a name="postId{$post_info.postId}"></a>
	{include file='blog_post_postbody_title.tpl'}
	{include file='blog_post_author_info.tpl'}
	{include file='blog_post_postbody_content.tpl'}
	{if $blog_post_context ne 'excerpt'}
		{if $blog_post_context ne 'print'} 
			<div class="postfooter">
				{include file='blog_post_author_actions.tpl'}
				{include file='blog_post_actions.tpl'}
				{include file='blog_post_status.tpl'}
			</div>
		{/if}
		{include file='blog_post_navigation.tpl'}
	{/if}
</div> <!-- postbody -->
