<?php session_start();?>
<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<script>

function submitForm(){
	if(document.form.passwordOld1.value==""||document.form.password.value==""||document.form.passwordNew1.value==""){
		alert("请填写完整！");
	}else if(document.form.passwordOld1.value!=document.form.passwordOld.value){
		alert("旧密码不正确！");
	}else if(document.form.password.value!=document.form.passwordNew1.value){
		alert("新密码不一致！");
	}else{
		document.form.submit();
	}
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$id=$_SESSION['manager_id'];
	if($id){
		$table = getTableById("manager",$id);
	}
?>
<body>
<form name="form" method="post" action="../done/common.php">
<input name="tablename" type="hidden" value="manager"/>
<input name="link" type="hidden" value="../module/changePass.php"/>
<input name="type" type="hidden" value="update"/>
<input name="id" type="hidden" value="<?=$id?>"/>
<input name="loginname" type="hidden" value="<?=$table->loginname?>"/>
<input name="name" type="hidden" value="<?=$table->name?>"/>
<input name="issuper" type="hidden" value="<?=$table->issuper?>"/>
<input name="bz" type="hidden" value="<?=$table->bz?>"/>
<input name="passwordOld" type="hidden" value="<?=$table->password?>"/>
<div class="commonDiv">
<div class="commontop">修改密码</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
    <tr><td width="100" height="30">旧密码</td><td><input name="passwordOld1" type="password" maxlength="50" /></td></tr>
    <tr><td height="30">新密码</td><td><input name="password" maxlength="50" type="password" /></td></tr>
    <tr><td height="30">再次输入新密码</td><td><input name="passwordNew1" type="password" maxlength="50" /></td></tr>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:submitForm();">确定</a>&nbsp;&nbsp;<a class="icon" href="/" onClick="document.form.reset();return false;">取消</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>