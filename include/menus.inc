<?php
	function getMenus(){
		$sql = "select * from menu order by sort";
		$result = mysql_query($sql);
		$menuList = array();
		while($row = mysql_fetch_object($result)){
			array_push($menuList,$row);
		}
		$menus = getChild($menuList,0);
		return $menus;
	}
	
	function getMenuTree(){
		$sql = "select * from menu order by sort";
		$result = mysql_query($sql);
		$menuList = array();
		while($row = mysql_fetch_object($result)){
			array_push($menuList,$row);
		}
		return $menuList;
	}
	
	function getChild($menuList,$pid){
		$menu;
		$menus = array();
		while(list($key, $row) = each($menuList)){
			if($row->id==$pid){
				$menu->menu = $row;
			}else if($row->pid==$pid){
				$rowChild = getChild($menuList,$row->id);
				array_push($menus,$rowChild);
			}
		}
		if(count($menus)>0){
			$menu->child = $menus;
		}
		return $menu;
	}
?>