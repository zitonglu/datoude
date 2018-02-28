<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{if $type=='index'&&$page=='1'}
	{template:index-home}
{else}
{template:header}
<body>
	{template:nav}
<!-- 导航结束 -->
<div class="jumbotron banner">
</div>
<div class="container list">
	{if $type=='category'}
	<div class="floatRight">
		<ol class="breadcrumb">
			<li><a href="{$host}" title="{$name}">首页</a></li>
			<li class="active">{$category.Name}</li>
		</ol>
	</div>
	<div class="listTitle">{$category.Name}
		{if $category.Alias != ''}
			<span>/ {$category.Alias}</span>
		{/if}
	</div>
	{/if}
	<ul>
		{foreach $articles as $article}
		{template:post-multi}
		{/foreach}
	</ul>
	{template:pagebar}
</div>
{template:footer}
{/if}