<?php
	include("../include/database.inc");
	$loginname = $_POST["loginname"];
	$password = $_POST["password"];
	$sql = "select * from manager where loginname = '$loginname' and password = '$password' ";
	$result = mysql_query($sql,$con);
	if(mysql_num_rows($result)==0){
		echo "<script>alert('错误');window.history.back();</script>";
	}else{
		session_start();
		while ($row = mysql_fetch_object($result)){
			$_SESSION['manager_id']=$row->id;
			$_SESSION['manager_loginname']=$row->loginname;
			$_SESSION['manager_name']=$row->name;
			$_SESSION['manager_issuper']=$row->issuper;
		}
		echo "<script>window.location='../main.php';</script>";
	}
	mysql_close($con);
?> 