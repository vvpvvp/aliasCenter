<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="js/jquery.js"></script>
<link href="css/form.css" rel="stylesheet" type="text/css">
<script>
$(function(){
	$("#top2 a").bind('click',function(){
		$(".selA").removeClass();
		$(this).addClass("selA");
	})
})
</script>
</head>
<body>
<div id="top1">
<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><td id="topic" width="60%">管理系统</td><td align="right" valign="bottom" style="padding-bottom:10px;color: #FFF;" ><?php echo $_SESSION['manager_name']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?logoutBz=true" onclick="return window.confirm('确定退出？')" target="_parent" style="color: #FFF;">退出</a>&nbsp;&nbsp;</td></tr></table>
</div>
<div id="top2">
<a href="left.php?type=1" target="leftFrame" class="selA">目录</a><?php echo $_SESSION['manager_issuper']=="Y"?"<a  target='leftFrame' href='left.php?type=2'>目录管理</a>":"";?>
</div>
</body>
</html>