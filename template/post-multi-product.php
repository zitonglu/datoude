<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
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