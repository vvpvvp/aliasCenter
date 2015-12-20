<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<link type="text/css" href="../css/smoothness/jquery-ui.css" rel="stylesheet" />	
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jqueryui.js"></script>
<script>
$(function(){
	showCurrect();
	$(":radio[name=hasContent],:radio[name=isnormal],:radio[name=isshow]").bind('click',function(){
		showCurrect();
	});
})

function showCurrect(){
	if($(":radio[name=hasContent]:checked").val()=="N"){//没有内容
		$(".commonTable1 tr").slice(3,10).hide();
	}else{
		$(".commonTable1 tr").slice(3,10).show();//有内容
		if($(":radio[name=isnormal]:checked").val()=="Y"){//默认格式
			$(".commonTable1 tr").slice(4,10).show();
			if($(":radio[name=isshow]:checked").val()=="Y"){//可预览
				$(".commonTable1 tr").slice(5,6).show();
			}else{
				$(".commonTable1 tr").slice(5,6).hide();//不可预览
			}
			$(".commonTable1 tr").slice(10,11).hide();
		}else if($(":radio[name=isnormal]:checked").val()=="N"){
			$(".commonTable1 tr").slice(4,10).hide();//自定义
			$(".commonTable1 tr").slice(10,11).show();
		}else{
			$(".commonTable1 tr").slice(4,11).hide();
		}
	}
}

function submitForm(){
	if(document.form.menuname.value==""){
		alert("模块名称不能为空！");
	}else{
		$(":radio:hidden").attr("disabled",true);
		$(":text[name='link']:hidden").attr("disabled",true);
		$(":text[name='showlink']:hidden").attr("disabled",true);
		document.form.submit();
	}
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/menu.inc");?>
<?php include("../include/common.inc");?>
<?php
	$id=$_GET["id"];
	$pid=$_GET["pid"];
	if($id!=null){
		$menu = new Menu;
		$table = $menu->getMenu($id);
		if($menu->hasparent())$parent = $menu->getParentMenu();
	}else{
		$pidMenu = new Menu;
		$parent = $pidMenu->getMenu($pid);
	}
?>
<body>
<form name="form" method="post" action="../done/menu.php">
<input name="tablename" type="hidden" value="menu"/>
<input name="type" type="hidden" value="<?=$id?"update":""?>"/>
<input name="id" type="hidden" value="<?=$id?>"/>
<input name="sort" type="hidden" value="<?=$table->sort?>"/>
<div class="commonDiv">
<div class="commontop"><?=$id?"修改":"新增"?>模块&nbsp;<?=$table->menuname?></div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
	<tr><td width="10%">模块名称：</td><td><input name="menuname" value="<?=$table->menuname?>"/></td></tr>
	<tr><td>父级模块：</td><td><?=$parent?$parent->menuname:"顶层目录"?><input type="hidden" name="pid" value="<?=$parent?$parent->id:"0"?>"/></td></tr>
	<tr><td>是否有内容：</td><td><input name="hasContent" type="radio" <?=$table->hasContent!="N"?"checked":""?> value="Y"/>是<input name="hasContent" type="radio" <?=$table->hasContent=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>模块模式：</td><td><input name="isnormal" type="radio" <?=$table->isnormal!="N"&&$table->isnormal!="R"?"checked":""?> value="Y"/>默认<input name="isnormal" type="radio" <?=$table->isnormal=="N"?"checked":""?> value="N"/>自定义<input name="isnormal" type="radio" <?=$table->isnormal=="R"?"checked":""?> value="R"/>独立内容</td></tr>
    <tr><td>是否预览：</td><td><input name="isshow" type="radio" <?=$table->isshow!="N"?"checked":""?> value="Y"/>是<input name="isshow" type="radio" <?=$table->isshow=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>预览页面：</td><td><input name="showlink" value="<?=$table->showlink?>"/>（从根目录开始）</td></tr>
    <tr><td>可否新增：</td><td><input name="cancreate" type="radio" <?=$table->cancreate!="N"?"checked":""?> value="Y"/>是<input name="cancreate" type="radio" <?=$table->cancreate=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>可否删除：</td><td><input name="candelete" type="radio" <?=$table->candelete!="N"?"checked":""?> value="Y"/>是<input name="candelete" type="radio" <?=$table->candelete=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>可否修改：</td><td><input name="canupdate" type="radio" <?=$table->canupdate!="N"?"checked":""?> value="Y"/>是<input name="canupdate" type="radio" <?=$table->canupdate=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>发布功能：</td><td><input name="canpublic" type="radio" <?=$table->canpublic!="N"?"checked":""?> value="Y"/>是<input name="canpublic" type="radio" <?=$table->canpublic=="N"?"checked":""?> value="N"/>否</td></tr>
    <tr><td>模块链接：</td><td><input name="link" value="<?=$table->link?>"/>（从根目录开始）</td></tr>
	<tr><td>备注：</td><td><input name="bz"  value="<?=$table->bz?>"/></td></tr>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:submitForm();">确定</a>&nbsp;&nbsp;<a class="icon" href="menu.php?id=<?=$id?$id:$pid?>">取消</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>