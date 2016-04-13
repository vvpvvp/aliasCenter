<?php
	date_default_timezone_set('Asia/Shanghai');
	$con = mysql_connect("127.0.0.1","root","root");

	if (!$con){
		die("Could not connect: " . mysql_error());
	}
	$database = "alias";
	$db_selected  = mysql_select_db($database, $con);
	if (!$db_selected){
		die ("Can\'t use test_db : " . mysql_error());
	}
	mysql_query("set names utf8",$con);
?>
