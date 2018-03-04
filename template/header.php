<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
  <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
  <!-- 调用百度Bootstrap -->
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" type="text/css"/>
 	<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/style.css?v=1.0442" type="text/css">

	<meta name="generator" content="{$zblogphp}" />
  <!--首页相关信息-->
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
  <title>{$title}</title>
<!--[if lt IE 9]>
  <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
  <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

{$header}
</head>