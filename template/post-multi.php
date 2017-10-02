<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<li id="log{$article.ID}" class="listLi">
    <p class="floatRight time">{$article.Time('Y/m/d')}</p>
    <p><a href="{$article.Url}" class="listName">{$article.Title}</a></p>
</li>