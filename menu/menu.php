<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<style>
.menu_2 td{ background-color:#E7F5FE;}
.menu_1 td{ background-color:#d4e1f3; font-weight:bold;}
.menu_3 td{}
</style>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/menu.inc");?>
<?php include("../include/common.inc");?>
<?php
	$id=$_GET["id"];
	if($id!=null){
		$menu = new Menu;
		$table = $menu->getMenu($id);
		if($menu->hasparent())$parent = $menu->getParentMenu();
	}
?>
<body>
<div class="commonDiv">
<div class="commontop">模块【<?=$table->menuname?>】</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
	<tr><td width="120">模块名称：</td><td><?=$table->menuname?></td></tr>
	<tr><td>父级模块：</td><td><?=$parent?$parent->menuname:"顶层模块"?></td></tr>
	<tr><td>是否有内容：</td><td><?=$table->hasContent!="N"?"是":"否"?></td></tr>
	<?php if($table->hasContent!="N"){?>
	<tr><td>模块模式：</td><td><?=$table->isnormal!="N"?($table->isnormal=="Y"?"默认":"独立内容"):"自定义"?></td></tr>
		<?php if($table->isnormal=="Y"){?>
        <tr><td>模块内容编辑：</td><td><a href='setMenu.php?id=<?=$id?>' class='icon'>编辑模块内容</a></td></tr>
        <tr><td>是否预览：</td><td><?=$table->isshow!="N"?"是":"否"?></td></tr>
        <?php if($table->isshow=="Y"){?><tr><td>预览页面：</td><td><?=$table->showlink?></td></tr><?php }?>
        <tr><td>可否新增：</td><td><?=$table->cancreate!="N"?"是":"否"?></td></tr>
        <tr><td>可否删除：</td><td><?=$table->candelete!="N"?"是":"否"?></td></tr>
        <tr><td>可否修改：</td><td><?=$table->canupdate!="N"?"是":"否"?></td></tr>
        <tr><td>发布功能：</td><td><?=$table->canpublic!="N"?"是":"否"?></td></tr>
        <?php }else if($table->isnormal=="R"){?>
		<?php }else{?>
        <tr><td>模块链接：</td><td><?=$table->link?></td></tr>
    	<?php }?>
    <?php }?>
    <tr><td>备注：</td><td><?=$table->bz?></td></tr>
</table>
<div class="commonBottom"><table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="addMenu.php?pid=<?=$id?>">新增子目录</a>&nbsp;&nbsp;<a class="icon" href="addMenu.php?id=<?=$id?>">修改</a>&nbsp;&nbsp;<a class='icon' onclick='return window.confirm("确定删除？")' href='../done/menu.php?type=delete&tablename=menu&id=<?=$id?>&pid=<?=$table->pid?>&link=../menu/menu.php'>删除</a></td></tr></table></div>
</div>
</body>
</html>