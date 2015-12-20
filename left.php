<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="js/jquery.js"></script>
<link href="css/form.css" rel="stylesheet" type="text/css">
<link rel="StyleSheet" href="css/dtree.css" type="text/css" />
<script type="text/javascript" src="js/dtree.js"></script>
<style>
#main{width:180px;padding:2px 0px; background:#2b649f;margin:10px 0px 0px 8px;}
#main a{display:block;width:178px;height:26px;line-height:26px;text-align:center;color:#06447d;cursor:pointer;border-right:#b9c9d6 1px solid;border-left:#b9c9d6 1px solid;border-bottom:#b9c9d6 1px solid;background-color:#FFFFFF;}
.selA{background:url(images/manage/left1.gif) repeat-x;font-weight:bold;}
</style>
<script>
$(function(){
	$("#main a").bind('click',function(){
		$(".selA").removeClass();
		$(this).addClass("selA");
	})
})
</script>
</head>
<body>
<?php
	$type = $_GET["type"];
	if(!$type)$type=1;
?>
<?php include("include/database.inc");?>
<?php include("include/common.inc");?>
<?php include("include/menus.inc");?>
<?php 
	$user = getTableById("manager",$_SESSION['manager_id']);
	if($user->loginname=="admin"||$user->issuper=="Y")
		$menus = getMenuTree();
	else
		$menus = getTableByConList("menu"," id in (".$user->popedom.") order by sort");
?>
<div style="margin:10px;">
<?php if($type=="2"){?>
<p>&nbsp;<a href="menu/addMenu.php?pid=0" target="mainFrame" class="icon">新建 </a>&nbsp;<!--a href="menu/upMenu.php?pid=0" target="mainFrame" class="icon">调整顺序</a!--></p>
<?php }?>
<script type="text/javascript">
	var arr = <?php print json_encode($menus);?>;
	d = new dTree('d');
	d.config.useStatusText = true;
	d.config.drag = true;
	d.add(0,-1,'模块');
	for(var i = 0; i < arr.length; i++){
		var linkPage = arr[i].isnormal=='Y'?('module/list.php?id='+arr[i].id):(arr[i].isnormal=='R'?('module/module.php?id='+arr[i].id):arr[i].link);
		d.add(arr[i].id,arr[i].pid,arr[i].menuname,<?=$type=="2"?"'menu/menu.php?id='+arr[i].id":"arr[i].hasContent=='Y'?linkPage:''"?>,null,'mainFrame');
	}
	<?php if($type=="1"){?>
		<?php if($_SESSION['manager_loginname']=="admin"||$_SESSION['manager_issuper']=="Y"){?>d.add(100,0,"用户管理","module/userManage.php",null,'mainFrame');<?php }?>
		d.add(102,0,"密码修改","module/changePass.php",null,'mainFrame');
	<?php }?>
	document.write(d);
</script>
</div>

</body>
</html>