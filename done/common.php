<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$type = $_REQUEST["type"];
	$id = $_REQUEST["id"];
	$tablename = $_REQUEST["tablename"];
	$pageNo = $_REQUEST["pageNo"];
	$link = $_REQUEST["link"];
	$tableRowSql = "select column_name columnname,data_type datatype,character_maximum_length length from information_schema.columns where table_name='#tablename#' and table_schema = '$database'" ;
	if($_REQUEST["imagesInsert"]){
		if($menu)deleteTableById("images",$menu);
		$sort= $_POST["sort"];
		$title= $_POST["title"];
		$images= $_POST["image"];
		while(list($key, $row) = each($sort)){
			$insertSql = "insert into images values($menu,'$title[$key]','$images[$key]',$sort[$key])";
			$result = mysql_query($insertSql);
			if(!$result){throw new Exception("保存错误！，sql为：$insertSql");}
		}
	}
	if($type==null){
		if($id)deleteTableById($tablename,$id);
		$insertSql = "insert into $tablename values(";
		$result = mysql_query(str_replace("#tablename#",$tablename,$tableRowSql));
		$i = 0;
		while($row = mysql_fetch_object($result)){
			$insertSql = $insertSql.($i==0?"":",").($_POST[$row->columnname]==null?"null":"'".$_POST[$row->columnname]."'");
			$i++;
		}
		$insertSql = $insertSql.")";
		//print $insertSql;
		$result = mysql_query($insertSql);
		if(!$result){throw new Exception("保存错误！，sql为：$insertSql");}
		echo "<script>alert('保存成功！');window.location='$link".(substr_count($link,"?")==0?"?":"&")."pageNo=$pageNo'</script>";
	}else if($type == "update"){
		$insertSql = "update $tablename set ";
		$result = mysql_query(str_replace("#tablename#",$tablename,$tableRowSql));
		$i = 0;
		while($row = mysql_fetch_object($result)){
			$insertSql = $insertSql.($i==0?"":",").$row->columnname." = ".($_POST[$row->columnname]==null?"null":"'".$_POST[$row->columnname]."'");
			$i++;
		}
		$insertSql = $insertSql." where id =$id";
		//print $insertSql;
		$result = mysql_query($insertSql);
		if(!$result){throw new Exception("错误！，sql为：$insertSql");}
		echo "<script>alert('修改成功！');window.location='$link".(substr_count($link,"?")==0?"?":"&")."pageNo=$pageNo'</script>";
	}else if($type == "delete"){
		deleteTableById($tablename,$id);
		echo "<script>alert('删除成功！');window.location='$link".(substr_count($link,"?")==0?"?":"&")."pageNo=$pageNo'</script>";
	}else if($type == "ajax"){
		$sql = stripcslashes($_REQUEST["sql"]);
		$result = mysql_query($sql);
		if(!$result){throw new Exception("错误！，sql为：$sql");}
		$returnList = array();
		while($row = mysql_fetch_object($result)){
			array_push($returnList,$row);
		}
		echo json_encode(object_decode($returnList));
	}
	mysql_close($con);
	
?> 