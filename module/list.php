<?php session_start();?>
<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<script>
function publicN(id,v){
	var sql = "update content set isUse = "+ v +" where id = "+ id;
	$.ajax({
	   type: "POST",
	   url: "../done/common.php",
	   data: "type=ajax&sql="+sql,
	   success: function(msg){
		 alert("修改成功！");
		 window.location.reload();
	   }
	}); 
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php include("../include/page.inc");?>
<?php
	$id = $_GET['id'];
	$pageNo = $_GET['pageNo'];
	$seac_i = $_GET['seac_i'];
	$seac_t = $_GET['seac_t'];
	$page = new Page;
	if($pageNo)$page->pageNo = $pageNo;
	$page->pagename = "list.php?id=$id&";
	$menuT = getTableById("menu",$id);
	$seac_sql = $seac_i?(" and ".$seac_t." like '%".$seac_i."%' "):"";
	$list = getTableByConList("content","menu = $id ".$seac_sql." order by in_date desc limit ".$page->getBegin().",$page->pageSize");
	$page->pageCount = getTableCount("content","menu = $id ".$seac_sql);
	$menu = getTableByConList("menuset","id = $id and isIndex = 1");
	$menuAll = getTableByConList("menuset","id = $id");
?>
<body>
<div class="commonDiv">
<div class="commontop">模块【<?=$menuT->menuname?>】</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable" >
	<tr>
        <th width="100" height="28">序号</th>
        <th width="150">标题</th>
        <?php 
			while(list($key, $val) = each($menu)){
			  echo "<th width='150'>$val->title</th>";
			  }
		?>
        <th width="150">修改日期</th>
        <?php if($menuT->canpublic=='Y'){?>
    	<th width="50">发布</th>
        <?php }?>
        <?php if($_SESSION['manager_issuper']=='Y'||$menuT->canupdate=='Y'){?>
        <th width="50">修改</th>
        <?php }?>
        <?php if($_SESSION['manager_issuper']=='Y'||$menuT->candelete=='Y'){?>
        <th width="50">删除</th>
        <?php }?>
    </tr>
    <?php while(list($key, $val) = each($list)){?>
    <tr>
        <td height="28">【<a href="showContent.php?id=<?=$val->id?>">&nbsp;<?=$val->id?>&nbsp;</a>】<?php if($menuT->isshow=='Y'){?>（<a target="_blank" href="../<?=$menuT->showlink?>?id=<?=$val->id?>">预览</a>）<?php }?></td>
        <td><?=$val->title?></td>
        <?php 
			for($i = 0; $i < count($menu);$i++){
			  $t = $menu[$i]->col_name;
			  if($menu[$i]->col_type == "M") echo "<td style='padding:5px 0px;'>".($val->$t?("<img height='60' border='0' src='".$val->$t."'/>"):"")."</td>";
			  else if($menu[$i]->col_type == "P") echo "加密字段";
			  else echo "<td>".substr($val->$t,0,50)."</td>";
			}
		?>
        <td><?=$val->up_date?></td>
        <?php if($menuT->canpublic=='Y'){?>
        <td><a class='icon'  href="javascript:publicN('<?=$val->id?>','<?=$val->isUse=="0"?"1":"0"?>');"><?=$val->isUse=="0"?"发布":"停用"?></a></td>
        <?php }?>
        <?php if($_SESSION['manager_issuper']=='Y'||$menuT->canupdate=='Y'){?>
        <td><a class='icon'  href='addContent.php?id=<?=$val->id?>'>修改</a></td>
        <?php }?>
        <?php if($_SESSION['manager_issuper']=='Y'||$menuT->candelete=='Y'){?>
        <td><a class='icon' onclick='return window.confirm("确定删除？")' href='../done/common.php?type=delete&tablename=content&id=<?=$val->id?>&link=../module/list.php?id=<?=$id?>'>删除</a></td>
        <?php }?>
    </tr>
    <?php }?>
</table>
<?php if($page->pageCount==0){?><div align="center">没有记录！</div><br/><?php }?>
<div class="commonBottom"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><?php if($_SESSION['manager_issuper']=='Y'||$menuT->cancreate=='Y'){?><a class="icon" href="addContent.php?menu=<?=$id?>">新增</a><?php }?>&nbsp;&nbsp;
<input id="seac_text" size="15" value="<?=$seac_i?>" />&nbsp;按&nbsp;<select id="seac_col">
<option value='title' <?=$seac_t=="title"?"selected":""?>>标题</option>
<?php 
	while(list($key, $val) = each($menuAll)){
	if($val->col_type=="X"||$val->col_type=="I"||$val->col_type=="B"){
		echo "<option value='$val->col_name' ".($seac_t==$val->col_name?"selected":"").">$val->title</option>";
	}
}?>
</select>&nbsp;<a class="icon" href="javascript:window.location='list.php?id=<?=$id?>&seac_i='+document.getElementById('seac_text').value+'&seac_t='+document.getElementById('seac_col').value;">查询</a>&nbsp;&nbsp;<a class="icon" href="list.php?id=<?=$id?>">清除</a>
</td><td align="right"><?=$page->toString();?></td></tr></table></div>
</div>
</body>
</html>