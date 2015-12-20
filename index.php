<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
body{background:#414042;margin:0px;}
#main{    height: 523px;
    width: 969px;
    background: #414042;
    margin: 50px auto;
    color: #FFF;}
label {
    width: 70px;
    display: inline-block;
}
#main input{    height: 23px;
    width: 155px;
    border-width: 0px;
    color: #000;
    outline: none;
    padding: 2px 8px;
    background: #FFF;}
#main button{    padding: 5px 10px;
    border-width: 0px;
    background: #FFF;
    color: #414042;
    font-family: inherit;
    font-size: 16px;
    cursor: pointer;}
#username{padding-top:265px;}
#password{padding-top:12px;}
#buttonDiv{padding-top:20px;}
#resetButton{margin-left:25px;}
.title {
    position: absolute;
    font-size: 100px;
    top: 150px;
}
</style>
<script>
function subForm(){
	with(document.form){
		if(loginname.value==""||password.value==""){
			alert("");
		}else{
			submit();
		}
	}
}
</script>
</head>
<?php
  $logoutBz = $_GET["logoutBz"];
  if($logoutBz != null)	{
	$_SESSION['manager_id']='';
	$_SESSION['manager_loginname']='';
	$_SESSION['manager_name']='';
	$_SESSION['manager_issuper']='';
  }
?>
<body onload="document.forms[0].loginname.focus();">
<form name="form" action="done/login.php" method="post">
	<div id="main">
		<div class="title">LOGIN</div>
		<div id="username"><label for="loginname">用户名：</label><input name="loginname" id="loginname" autocomplete="off"/></div>
		<div id="password"><label for="password">密码：</label><input name="password" id="password" type="password" autocomplete="off" onkeyup="if(event.keyCode==13)document.forms[0].submit();" /></div>
		<div id="buttonDiv"><button type="button" id="loginButton" onclick="subForm()">登录</button><button type="button" id="resetButton" onclick="document.form.reset()">重置</button></div>
	</div>
</form>
</body>
</html>