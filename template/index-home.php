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
<div class="links">
	<ul class="container list-inline">友情链接：{module:link}</ul>
</div>
{template:footer}
