<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$type = $_REQUEST["type"];
	$id = $_REQUEST["id"];
	$tablename = $_REQUEST["tablename"];
	$tableRowSql = "select column_name columnname,data_type datatype,character_maximum_length length from information_schema.columns where table_name='#tablename#' and table_schema = '$database'" ;
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
		$id = mysql_insert_id();
		$insertSql = "update $tablename set sort = id where id = $id";
		mysql_query($insertSql);
		echo "<script>alert('保存成功！');window.parent.leftFrame.window.location.reload();window.location='../menu/menu.php?id=".$id."'</script>";
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
		echo "<script>alert('修改成功！');window.parent.leftFrame.window.location.reload();window.location='../menu/menu.php?id=".$id."'</script>";
	}else if($type == "delete"){
		$sql = "select * from menu where pid = $id";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)>0){
			echo "<script>alert('该目录下还有子目录，不能进行删除操作！');window.location='$link?id=$id'</script>";
			return false;
		}
		deleteTableById($tablename,$id);
		echo "<script>alert('删除成功！');window.parent.leftFrame.window.location.reload();window.location='$link?id=$pid'</script>";
	}else if($type == "setmenu"){
		if($id)deleteTableById("menuset",$id);
		$imageCount = 1;
		$textCount = 1;
		$dateCount = 1;
		$clobCount = 1;
		$fileCount = 1;
		$mediaCount = 1;
		$sort= $_POST["sort"];
		$title= $_POST["title"];
		$col_type= $_POST["col_type"];
		$isIndex= $_POST["isIndex"];
		while(list($key, $row) = each($title)){
			switch ($col_type[$key]){
				case "P":{$col_name = "text".$textCount++;break;}
				case "I":{$col_name = "text".$textCount++;break;}
				case "D":{$col_name = "date".$dateCount++;break;}
				case "B":{$col_name = "textarea".$clobCount++;break;}
				case "M":{$col_name = "image".$imageCount++;break;}
				case "X":{$col_name = "textarea".$clobCount++;break;}
				case "W":{$col_name = "file".$fileCount++;break;}
				case "S":{$col_name = "media".$mediaCount++;break;}
				default:{$col_name = "text".$textCount++;break;}
			}
			$insertSql = "insert into menuset values($id,$sort[$key],'$title[$key]','$col_name','$col_type[$key]',$isIndex[$key])";
			$result = mysql_query($insertSql);
		}
		echo "<script>alert('保存成功！');window.location='../menu/menu.php?id=$id'</script>";
	}else if($type == "up"||$type == "down"){
		$sql = "select a.sort,a.id,b.sort sortb from menu a,(select id,sort,pid from menu where id = $id) b where a.pid = b.pid and a.sort ".($type == "down"?">":"<")." b.sort order by sort ".($type == "down"?"asc":"desc")." limit 1";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)==0){
			echo "<script>alert('该模块已是所在目录的".($type == "down"?"最后一个模块":"第一个模块")."，不能进行".($type == "down"?"下移":"上移")."操作！');window.location='../menu/upMenu.php'</script>";
			return false;
		}else{
			$row = mysql_fetch_object($result);
			$sql = "update menu set sort = $row->sort where id = $id";
			mysql_query($sql);
			$sql = "update menu set sort = $row->sortb where id = $row->id";
			mysql_query($sql);
			echo "<script>alert('".($type == "down"?"下移":"上移")."成功！');window.parent.leftFrame.window.location.reload();window.location='../menu/upMenu.php'</script>";
		}
	}
	mysql_close($con);
?> 