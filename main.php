<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('datoude')) {$zbp->ShowError(48);die();}
$blogtitle="主题配置";
$act=GetVars('act','GET');
if($act == "" ) $act= 'config' ;
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<div id="divMain">
  <div class="divHeader2"><?php echo $blogtitle;?></div>
  <div class="SubMenu">
    <?php datoude_SubMenu($act);?>
  </div>
  <div id="divMain2">
<?php if ($act == 'base' || $act == 'shangjpg' || $act == 'cellnumber'){?><!--图片设置-->
    <table width="100%" border="1" class="tableBorder">
    <tr>
      <th scope="col" height="32" width="150px">配置项</th>
      <th scope="col">配置内容</th>
      <th scope="col" width="500px">配置说明</th>
    </tr>
    <form enctype="multipart/form-data" method="post" action="save.php?type=base">
      <tr>
        <td><label for="logo.jpg">主题LOGO设置</label></td>
        <td><input name="logo.png" type="file"/>
          <input name="" type="Submit" class="button" value="上传LOGO图片"/></td>
        <td>png格式</td>
      </tr>
    </form>
    <form enctype="multipart/form-data" method="post" action="save.php?type=shangjpg">
      <tr>
        <td><label for="shang.jpg">文章打赏图片</label></td>
        <td><input name="shang.png" type="file"/>
          <input name="" type="Submit" class="button" value="上传默认图片"/></td>
        <td>JPG格式，大小随意</td>
      </tr>
    </form>
    <form enctype="multipart/form-data" method="post" action="save.php?type=cellnumber">
      <tr>
        <td><label for="cellnumber.jpg">首页自定义图片</label></td>
        <td><input name="cellnumber.png" type="file"/>
          <input name="" type="Submit" class="button" value="上传默认图片"/></td>
        <td>PND格式，大小随意</td>
      </tr>
    </form>
    </table>
<?php } ?>
<?php if ($act == 'config' || $act == ''){?><!--基本设置-->
<?php
if(isset($_POST['baike'])){
  $zbp->Config('datoude')->aboutUs = $_POST['aboutUs'];
  $zbp->Config('datoude')->baike = $_POST['baike'];
  $zbp->Config('datoude')->QQ = $_POST['QQ'];
  $zbp->SaveConfig('datoude');
    $zbp->ShowHint('good');
}
?>
    <form id="base" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php">
      <table width="100%" border="1" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">页脚备注</td>
        <td><input name="aboutUs" type="text" style="width:90%" value="<?php echo $zbp->Config('datoude')->aboutUs; ?>">
          </td>
        <td>显示在每页底部</td>
      </tr>
      <tr>
        <td scope="row">备案号</td>
        <td><input name="baike" type="text" style="width:20%" value="<?php echo $zbp->Config('datoude')->baike; ?>">
          </td>
        <td>显示在每页底部</td>
      </tr>
      <tr>
        <td scope="row">QQ号</td>
        <td><input name="QQ" type="text" style="width:20%" value="<?php echo $zbp->Config('datoude')->QQ; ?>">
          </td>
        <td>显示在每页底部</td>
      </tr>
      </table>
      <br/>
      <input class="button" type="submit" value="保存设置" />
    </form>
<?php } ?>
<?php if ($act == 'advertisement'){?><!--广告设置-->
<?php
  if(isset($_POST['PageAD1'])){
    $zbp->Config('datoude')->PageAD1 = $_POST['PageAD1'];
    $zbp->Config('datoude')->PageAD2 = $_POST['PageAD2'];
    $zbp->SaveConfig('datoude');
    $zbp->ShowHint('good');
  }
?>
    <form id="form-postdata" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=advertisement">
      <table width="100%" border="1" class="tableBorder">
      <tr>
        <th scope="col" height="32" width="150px">配置项</th>
        <th scope="col">配置内容</th>
        <th scope="col" width="500px">使用说明</th>
      </tr>
      <tr>
        <td scope="row">文章底部广告</td>
        <td><textarea name="PageAD1" type="text" style="width:98%" ><?php echo $zbp->Config('datoude')->PageAD1; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      <tr>
        <td scope="row">评论底部广告</td>
        <td><textarea name="PageAD2" type="text" style="width:98%" ><?php echo $zbp->Config('datoude')->PageAD2; ?></textarea></td>
        <td>文章底部的广告代码</td>
      </tr>
      </table>
      <br/>
      <input class="button" type="submit" value="保存设置" />
    </form>
<?php } ?>
<?php if ($act == 'TopPPT'){?><!--顶部幻灯片-->
<?php
if($_POST){
  $rules = array();
  $rule = array();
  $i=0;$Y=-1;
  $li='<div class="item"><a href="-aurl-" target="_blank" title="-pictitle-"><img src="-picurl-" alt="-pictitle-" class="img-cover"></a></div>';
  $tr='<tr><td><input type="checkbox" name="check"/></td><td><input name="picurl-id-" type="text" value="-picurl-" required="required"></td><td><input name="aurl-id-" type="text" value="-aurl-" required="required"></td><td><input name="pictitle-id-" type="text" value="-pictitle-"></td></tr>';
  $curli = "";$curtr = "";$html = "";$alltr = "";$one="";
foreach($_POST as $k=>$v){
  if($i % 3 == 0){
  $rule['picurl'] = (string)$v;
  $curtr = str_replace("-picurl-",$rule["picurl"],$tr);
  $curli = str_replace("-picurl-",$rule["picurl"],$li);
  }
  if($i % 3 == 1){
  $rule['aurl'] = (string)$v;
  $curtr = str_replace("-aurl-",$rule["aurl"],$curtr);
  $curli = str_replace("-aurl-",$rule["aurl"],$curli);
  }
  if($i % 3 == 2){
  $rule['pictitle'] = (string)$v;
  $curtr = str_replace("-pictitle-",$rule["pictitle"],$curtr);
  $curli = str_replace("-pictitle-",$rule["pictitle"],$curli);
  $curtr = str_replace("-id-",$Y,$curtr);
  $Y--;
    if ($one=="") {
      $curli = str_replace("class=\"item\"","class=\"item active\"",$curli);
      $one="end";
    }
  $alltr .= $curtr;
  $html .= $curli;
  $rules[]=json_encode($rule);
  }
  $i++;
}
file_put_contents("plugin/alltr.html", $alltr);
file_put_contents("plugin/out.html", $html);
$zbp->SaveConfig('datoude');
$zbp->ShowHint('good');
  }
?>
<input type="submit" value="增加一页" id="addTable"/> <input type="submit" value="删除选行" id="deleteTable"/>
  <hr>
  <form name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=TopPPT">
  <table>
    <thead>
      <tr>
        <th>选项</th>
        <th>增加图片URL地址(*)</th>
        <th>链接地址(*)</th>
        <th>图片名称</th>
      </tr>
    </thead>
    <tbody id="PPT">
<?php
  if(is_file('plugin/alltr.html')) {
    include 'plugin/alltr.html';
  }
?>
    </tbody>
  </table><br/>
  <input class="button" type="submit" value="保存设置" />
  </form>
  <p>*顶部幻灯片需在基础设置里面开启才能看到。<br>默认的幻灯片是增加一个图片，点击这个图片会增加一个弹出式链接。所以前两项为必填项目，最后一项为选填项。</p>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>
// 幻灯片增加行代码
$(document).ready(function(){
var i=0;
$("#addTable").click(function(){
var tr="<tr><td><input type=\"checkbox\" name=\"check\"/></td><td><input name=\"picurl"+i+"\" type=\"text\" required=\"required\"></td><td><input name=\"aurl"+i+"\" type=\"text\" required=\"required\"></td><td><input name=\"pictitle"+i+"\" type=\"text\"></td></tr>";
i++;
$("#PPT").append(tr);
});
$("#deleteTable").click(function(){
var check = document.getElementsByName("check");
for(var i=0;i<check.length;i++){
if(check[i].checked){
document.getElementById('PPT').deleteRow(i);
i--;
}
}
});
});
</script>
<?php } ?>
<?php if ($act == 'byDesign'){?><!--个性定制-->
<?php
if(isset($_POST['ActivationCode'])){
  $zbp->Config('datoude')->ActivationCode = $_POST['ActivationCode'];
  if(!is_null(GetVars('AstroFirstID'))) $zbp->Config('datoude')->AstroFirstID = intval($_POST['AstroFirstID'],10);
  if(!is_null(GetVars('AstroSecondID'))) $zbp->Config('datoude')->AstroSecondID = intval($_POST['AstroSecondID'],10);
  if(!is_null(GetVars('AstroThreeID'))) $zbp->Config('datoude')->AstroThreeID = intval($_POST['AstroThreeID'],10);
  if(!is_null(GetVars('AstroFourID'))) $zbp->Config('datoude')->AstroFourID = intval($_POST['AstroFourID'],10);
  $zbp->SaveConfig('datoude');
  $zbp->ShowHint('good');
}?>
<form id="design" name="form-postdata" method="post" enctype="multipart/form-data" action="main.php?act=byDesign">
  <table width="100%" border="1" class="tableBorder">
  <tr>
    <th scope="col" height="32" width="150px">配置项</th>
    <th scope="col">配置内容</th>
    <th scope="col" width="500px">使用说明</th>
  </tr>
  <tr>
    <td scope="row">激活码</td>
    <td>
      <input name="ActivationCode" type="text" style="width:40%" value="<?php echo $zbp->Config('datoude')->ActivationCode; ?>">
    </td>
    <td>激活定制主题用的密码</td>
  </tr>
<?php
switch ($zbp->Config('datoude')->ActivationCode) {
  case 'sdd194c8234nb':
    include 'plugin/astro-setting.php';
} 
?>
</table>
  <br/>
  <input class="button" type="submit" value="保存设置" />
</form>
    <h3 style="margin-top:30px">定制页面</h3>
    <p>模版可根据客户的要求进行<strong>私人定制</strong>，如果有需要的朋友，请<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=910109610&amp;site=qq&amp;menu=yes" title="联系我们" target="_black">联系作者</a>。
    我们会按低于市场的价格给您优先制作。</p>
    <h3 style="margin-top:30px">联系方式</h3>
      <ul>
        <li>联系方式：admin@paipk.com（#换成@）。来信请在主题中备注相关需求，您也可以在留言咨询相关信息。</li>
        <li>作者blog：<a href="http://www.paipk.com" target="_black" title="拍拍看科技">http://www.paipk.com</a></li>
        <li>BUG页面提交：<a href="http://www.paipk.com/67.html" target="_black" title="BUG提交">http://www.paipk.com/67.html</a></li>
     </ul>
<?php } ?>
  </div>
</div>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
?>
