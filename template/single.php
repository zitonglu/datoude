<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body>
	{template:nav}
<!-- 导航结束 -->
<div class="jumbotron banner"></div>
<div class="container list">
	{if $type=='article'}
	<div class="floatRight">
		<ol class="breadcrumb">
			<li><a href="{$host}" title="{$name}">首页</a></li>
			<li><a href="{$article.Category.Url}" title="{$article.Category.Name}">{$article.Category.Name}</a></li>
			<li class="active">正文</li>
		</ol>
	</div>
	<div class="listTitle">{$article.Category.Name}
		{if $article.Category.Alias != ''}
			<span>/ {$article.Category.Alias}</span>
		{/if}
	</div>
	{/if}
	{if $article.Type==ZC_POST_TYPE_ARTICLE}
		{template:post-single}
	{else}
		{template:post-page}
	{/if}
</div>
{template:footer}