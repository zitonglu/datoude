<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
        <h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>

<footer>
    <div class="container footerNav">
        <ul class="list-inline">
            {module:navbar}
        </ul>
    </div>
    <div class="container contact">
        <p class="col-sm-6">
            <span class="name">联系我们</span><br>
            {module:footercontact}
        </p>
        <p class="col-sm-6 contact-qq">
            24小时为你提供服务 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin={$zbp->Config('datoude')->QQ}&amp;site=qq&amp;menu=yes" title="QQ联系"><img src="{$host}zb_users/theme/{$theme}/images/qq.png" alt="QQ联系"></a>
        </p>
    </div>
</footer>   
<div class="text-center copyright">
    {$zbp->Config('datoude')->aboutUsFooter}<br>
    Copyright © 2017-2018 <a href="{$host}">{$name}</a>
    {if $user.ID>0}
    <a href="{$host}zb_system/admin/?act=admin" rel="nofollow" title="后台管理"><span class="glyphicon glyphicon-pencil"></span></a>
    {else}
    <a href="{$host}zb_system/cmd.php?act=login" rel="nofollow" title="后台登录"><span class="glyphicon glyphicon-user"></span></a>
    {/if}
    {if $zbp->Config('datoude')->baike!=""}&nbsp;<a href="http://www.miibeian.gov.cn" title="备案" target="_blank" rel="nofollow">{$zbp->Config('datoude')->baike}</a>&nbsp;{/if}
    {$copyright}&nbsp;
    Powered By {$zblogphpabbrhtml}. Theme by <a href="http://limiwu.com" title="厘米屋-专业z-blogPHP主题模版制作" target="_blank" >Limiwu.com.</a>
</div>
{$footer}
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>