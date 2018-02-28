<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body>
	{template:nav}
<!-- 导航结束 -->
{php}
	if(is_file($zbp->path.'zb_users/theme/datoude/plugin/out.html'))
	{
{/php}			
<div id="carousel-example-generic" class="carousel slide topbox indexPPT" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
{php}
	include $zbp->path.'zb_users/theme/datoude/plugin/out.html';
{/php}
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
{php}
	}
{/php}
<!-- banner幻灯片结束 -->
<div class="culturalAndArticle">
	<div class="container">
		<div class="col-md-6 Cultural">
			<h4>技术文章 Article</h4>
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
		</div>
		<div class="col-md-6 Article">
			<h4>技术文章 Article</h4>
			<ul>
				{$shopArray=Getlist(5,3);}
				{foreach $shopArray as $article}
				<li><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a><time class="pull-right">{TimeAgo($article.Time())}</time></li>
				{/foreach}
			</ul>
			<p class="text-right"><a href="{$host}?cate=3" class="more">更多 >></a></p>
		</div>
	</div>
</div>
<!-- 企业文化&技术文章end -->
<div class="productBox">
	<p class="container">产品展示 | Product<a href="#" class="pull-right more">更多 >></a></p>
</div>
{$shopArray=Getlist(8,2);}
<div class="container" id="indexProduct">
{foreach $shopArray as $article}
<div class="col-sm-4 col-md-3" id="log{$article.ID}">
	<div class="thumbnail">
		<a href="{$article.Url}" title="{$article.Title}">
			{if $article->Metas->datoude_teSeTuPian == ''}
			<img src="{$host}zb_users/theme/{$theme}/images/shangpin.jpg" alt="{$article.Title}" class="product_img">
			{else}
			<img src="{datoude_mustIMG($article)}" alt="{$article.Title}" class="product_img">
			{/if}
		</a>
		<div class="caption">
			<a href="{$article.Url}" class="title" title="{$article.Title}"><h4>{$article.Title}</h4></a>
			<div class="intro">{$article.Intro}</div>
		</div>
	</div>
</div>
{/foreach}
</div>
<!-- 产品介绍 end -->
<div class="links">
	<ul class="container list-inline">友情链接：{module:link}</ul>
</div>
{template:footer}
