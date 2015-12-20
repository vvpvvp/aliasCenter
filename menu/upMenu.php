<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<style>
.menu_2 td{background-color:#E7F5FE;}
.menu_1 td{background-color:#d4e1f3;}
.menu_3 td{}
</style>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/menus.inc");?>
<?php include("../include/common.inc");?>
<?php
	$menus = getMenus();
	function printMenu($menuList,$k){
		$menu = $menuList->menu;
		if($menu->id) echo  "<tr class='menu_$k' id='".$menu->id."'><td height='28'>".$k."级菜单</td><td>".$menu->id."</td><td>".$menu->menuname."</td><td><a class='icon' href='../done/menu.php?type=up&tablename=menu&id=".$menu->id."'>上移</a></td><td><a class='icon' onclick='return ' href='../done/menu.php?type=down&tablename=menu&id=".$menu->id."'>下移</a></td></tr>";
		$child = $menuList->child;
		if($child){
			$k++;
			while(list($key, $row) = each($child)){
					printMenu($row,$k);
			}
		}
	}
?>
<body>
<div class="commonDiv">
<div class="commontop">【目录设置】</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable" >
	<tr>
    	<th width="10%" height="28">说明</th>
		<th width="6%">序号</th>
        <th>目录名称</th>
        <th width="6%">上移</th>
        <th width="6%">下移</th>
    </tr>
    <?php printMenu($menus,0)?>
</table>
<div class="commonBottom"></div>
</div>
</body>
</html>