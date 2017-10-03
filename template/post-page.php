<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
<h2 style="font-size:60px;margin-bottom:32px;color:f00;">主题由<a href="http://limiwu.com">紫铜炉</a>设计制作</h2>
</div>';die();?>
<section>
  <h2 class="text-center">{$article.Title}</h2>
  <h6 class="text-center about"><i class="glyphicon glyphicon-time"></i>&nbsp;发布时间：{$article.Time('Y-m-d H:i')}&nbsp;&nbsp;<i class="glyphicon glyphicon-eye-open"></i>&nbsp;点击次数：{$article.ViewNums}</h6>
  {$article.Content}
</section><!-- single content end -->

{if !$article.IsLock}
{template:comments}		
{/if}