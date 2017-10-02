<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://www.paipk.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<div class="container logo">
	<div class="col-sm-7 ComLogo">
		<a href="{$host}" title="{$name}"><p><b>南通恒宇科学仪器有限公司</b><br><span>NanTongHengYu Scientific Instrument Co Ltd</span></p></a>
	</div>
	<div class="col-sm-5 us">
		<p class="text-right">
			<a href="{$host}" title="{$name}"><i class="glyphicon glyphicon-home"></i> 首页</a> | <a href="#" title="联系我们"><i class="glyphicon glyphicon-envelope"></i> 联系我们</a>
		</p>
		<p class="text-right">销售热线：<span class="saleNumber">0513-86528649 18012291278</span>（张先生）</p>
	</div>
</div>
<nav class="navbar navbar-default navbarStyle">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">{$name}</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="divNavBar">
				{module:navbar}
			</ul>
		</div>
	</div>
</nav>