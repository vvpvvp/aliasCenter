<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script>

function submitForm(){
	if(editor)editor.sync();
	if(editor1)editor1.sync();
	if(document.form.title.value==""){
		alert("标题不能为空！");
	}else{
		document.form.submit();
	}
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$table = getTableByConList("manager"," issuper='N'");
?>
<body>
<form name="form" method="post">
<div class="commonDiv">
<div class="commontop">用户管理</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable" >
   <tr><th width="10%" height="28">序号</th><th>用户名</th><th>姓名</th><th>备注</th><th width="70">修改</th><th width="70">删除</th></tr>
   <?php while(list($key, $row) = each($table)){?>
   <?php if($row->loginname!="admin"){?><tr><td height="28"><?=$row->id?></td><td><?=$row->loginname?></td><td><?=$row->name?></td><td><?=$row->bz?></td><td><a class='icon'  href='addUser.php?id=<?=$row->id?>'>修改</a></td><td><a class='icon' onclick='return window.confirm("确定删除？")' href='../done/common.php?type=delete&tablename=manager&id=<?=$row->id?>&link=../module/userManage.php?id=<?=$id?>'>删除</a></td></tr><?php }?>
   <?php }
	if(count($table)==0){?>
   <tr><td colspan="6" height="28">无用户！</td></tr>
    <?php }?>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="addUser.php">新增</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>