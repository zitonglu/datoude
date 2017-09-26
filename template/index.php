<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
{template:header}
<body class="index">
<!-- 导航结束 -->
<div class="jumbotron banner">
</div>
<div class="container list">
	<div class="listTitle">技术文章</div>
	<ul>
	{foreach $articles as $article}
		{template:post-multi}
	{/foreach}
	</ul>
	{template:pagebar}
</div>
{template:footer}