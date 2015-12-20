<?php
	class Menu{
		var $menu;
		
		function getMenu($id){
			$sql = "select * from menu where id = $id";
			$result = mysql_query($sql);
			while($row = mysql_fetch_object($result)){
				$this->menu = $row;
			}
			return $this->menu;
		}
		
		function hasparent(){
			return ($this->menu->pid != 0);
		}
		
		function getParentMenu(){
			$sql = "select * from menu where id = ".$this->menu->pid;
			$result = mysql_query($sql);
			$parentMenu;
			while($row = mysql_fetch_object($result)){
				$parentMenu = $row;
			}
			return $parentMenu;
		}
	}
	
	function hasChild($id){
		$sql = "select * from menu where pid = $id";
		$result = mysql_query($sql);
		return ($this->menu->pid != 0);
	}
		
?>