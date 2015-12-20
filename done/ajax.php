<?php
	include("../include/database.inc");
	$sql = $_REQUEST["sql"];
	if(get_magic_quotes_gpc()){
		$sql=stripslashes($sql);
	}
	
	$result = mysql_query($sql,$con);
	if(mysql_num_rows($result)==0){
		echo 0;
	}else{
		echo 1;
	}
	
	mysql_close($con);
?> 