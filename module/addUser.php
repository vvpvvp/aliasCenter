<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<link rel="StyleSheet" href="../css/dtree.css" type="text/css" />
<script type="text/javascript" src="../js/dtree1.js"></script>
<script>
function submitForm(){
	if(document.form.loginname.value==""||document.form.name.value==""){
		alert("用户名和姓名不能为空！");
	}else{
		if(isOnly(document.form.loginname.value)){
			document.form.submit();
		}
	}
}

function setMenu(){
	var popedom = "";
	$(":checkbox:checked").each(function(i,n){
		popedom += (i==0?"":",")+n.value;
	});
	document.form.popedom.value = popedom;
}

function upmenu(obj){
	var pid = $(obj).attr("pidmenu");
	if(pid =='0'){
		$(":checkbox[value='"+pid+"']").attr("checked",true);
		return true;
	}else{
		$(":checkbox[value='"+pid+"']").attr("checked",true);
		upmenu($(":checkbox[value='"+pid+"']"));
	}
	
}

function downmenu(obj){
	var checkid = obj.value;
	if($(":checkbox[pidmenu='"+checkid+"']").size()==0)return true;
	else{
		$(":checkbox[pidmenu='"+checkid+"']").attr("checked",obj.checked);
		$(":checkbox[pidmenu='"+checkid+"']").each(function(){
			if(this.checked)upmenu(this);
			downmenu(this);
			setMenu();
		});
	}
	
}

$(function(){
	$(":checkbox[pidmenu]").bind('click',function(){
		if(this.checked)upmenu(this);
		downmenu(this);
		setMenu();
	});
	if(<?=$id?"false":"true"?>){
		$(":checkbox[pidmenu]").attr("checked",true);
		setMenu();
	}else{
		var checkedList = document.form.popedom.value.split(",");
		for(var i = 0; i < checkedList.length;i++){
			$(":checkbox[value='"+checkedList[i]+"']").attr("checked",true);
		}
	}
	
});

function isOnly(loginname){
	<?=$_GET["id"]?"return true;":""?>
	var result = true;
	var sql = "select id from manager where loginname = '" + loginname + "'";
	$.ajax({
	   type: "POST",
	   async:false,
	   cache:false,
	   url: "../done/common.php",
	   dataType :"json",
	   data: "type=ajax&sql="+sql,
	   success: function(msg){
			if(msg.length==0){
				result = true;
			}else{
				result = false;
				alert("用户名已存在！");
			}
	   }
	}); 
	return result;
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php include("../include/menus.inc");?>
<?php 
	$menus = getMenuTree();
	
	$id=$_GET["id"];
	if($id){
		$table = getTableById("manager",$id);
	}
?>
<body>
<form name="form" method="post" action="../done/common.php">
<input name="tablename" type="hidden" value="manager"/>
<input name="link" type="hidden" value="../module/userManage.php"/>
<input name="type" type="hidden" value="<?=$id?"update":""?>"/>
<input name="id" type="hidden" value="<?=$id?>"/>
<input name="password" type="hidden" value="<?=$table->password?$table->password:"888888"?>"/>
<input name="issuper" type="hidden" value="N"/>
<div class="commonDiv">
<div class="commontop"><?=$id?"修改":"新增"?>用户</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
    <tr><td width="80" align="center" height="30">用户名</td><td><input name="loginname" maxlength="50" <?=$table->loginname?"readonly='readonly'":""?> value="<?=$table->loginname?>">（唯一）</td></tr>
    <tr><td width="80" align="center" height="30">姓名</td><td><input name="name" maxlength="50" value="<?=$table->name?>"/></td></tr>
    <tr><td width="80" align="center" height="30">备注</td><td><input name="bz" maxlength="50" value="<?=$table->bz?>"/></td></tr>
    <tr><td width="80" align="center" height="30">权限设置</td><td><input name="popedom"  type="hidden" value="<?=$table->popedom?>"/><!--a href="javascript:;" onClick="$('#menutree').toggle()">设置用户权限</a--></td></tr>
    <tr><td height="30" colspan="2">
    <div id="menutree">
    <script type="text/javascript">
        var arr = <?php print json_encode($menus);?>;
        d = new dTree('d');
        d.config.useStatusText = true;
        d.config.drag = true;
        d.add(0,-1,'模块');
        for(var i = 0; i < arr.length; i++){
            d.add(arr[i].id,arr[i].pid,"<input type='checkbox' pidmenu='"+arr[i].pid+"' value='"+arr[i].id+"'/>"+arr[i].menuname,'');
        }
        document.write(d);
    </script>
    </div>
    </td></tr>
    <tr><td height="30" colspan="2">&nbsp;&nbsp;提示：默认密码为888888</td></tr>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:submitForm();">确定</a>&nbsp;&nbsp;<a class="icon" href="../module/userManage.php">取消</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>