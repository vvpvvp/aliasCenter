<?php
	function object_decode($object){
		$object_new;
		if(is_array($object))$object_new=array();
		while(list($key, $row) = each($object)){
			$row_new;
			if(is_array($row)||is_object($row)){
				$row_new = object_decode($row);
			}else if(is_string($row)){
				$row_new = iconv("gbk","utf-8",$row);
			}else{
				$row_new =$row;
			}
			if(is_array($object)){
				array_push($object_new,$row_new);
			}else{
				$object_new[$key]=$row_new;
			}
		}
		return $object_new;
	}
	
	function getTableById($tablename,$id){
		if($id!=null){
			$sql = "select * from $tablename where id = $id";
			$result = mysql_query($sql);
			return mysql_fetch_object($result);
		}else return null;
	}
	
	function getTableByIdList($tablename,$id){
		if($id!=null){
			$sql = "select * from $tablename where id = $id";
			$result = mysql_query($sql);
			$returnList = array();
			while($row = mysql_fetch_object($result)){
				array_push($returnList,$row);
			}
			return $returnList;
		}else return null;
	}
	
	function getTableByConList($tablename,$condition){
		if($condition!=null){
			$sql = "select * from $tablename where $condition";
			// print $sql;
			$result = mysql_query($sql);
			$returnList = array();
			while($row = mysql_fetch_object($result)){
				array_push($returnList,$row);
			}
			return $returnList;
		}else return null;
	}
	
	function getTableByCon($tablename,$condition){
		$sql = "select * from $tablename ".($condition?(" where ".$condition):"");
		$result = mysql_query($sql);
		return mysql_fetch_object($result);
	}
	
	function deleteTableById($tablename,$id){
		$sql = "delete from $tablename where id = $id";
		$result = mysql_query($sql);
	}
	
	function getTableCount($tablename,$condition){
		$sql = "select count(1) coun from (select 1 from $tablename ".($condition?" where ".$condition:"").") a";
		$result = mysql_query($sql);
		$row = mysql_fetch_object($result);
		return $row?$row->coun:0;
	}
?>