<?php session_start();?>
<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../kindeditor/kindeditor-min.js"></script> 
<script src="../kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="../js/DatePicker/WdatePicker.js"></script>
<script>
	var editor;
	var editor1;
	KindEditor.ready(function(K) {
		if($("textarea[edit=Y]").size()>0){
			editor = K.create('textarea[edit=Y]', {
				allowFileManager : true,
				cssPath : '../kindeditor/plugins/code/prettify.css',
				uploadJson : '../kindeditor/php/upload_json.php',
				fileManagerJson : '../kindeditor/php/file_manager_json.php'
			});
		}
		
		if($("textarea[smalledit=Y]").size()>0){
			editor1 = K.create('textarea[smalledit=Y]', {
				allowFileManager : false,
				resizeType : 1,
				allowPreviewEmoticons : false,
				allowImageUpload : false,
				items : ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
							'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
							'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		}
		
		var imageeditor = K.editor({
			allowFileManager : true,
			cssPath : '../kindeditor/plugins/code/prettify.css',
			uploadJson : '../kindeditor/php/upload_json.php',
			fileManagerJson : '../kindeditor/php/file_manager_json.php'
		});
		K('input[imageedit]').click(function() {
			var n = $(this).prev();
			imageeditor.loadPlugin('image', function() {
				imageeditor.plugin.imageDialog({
					imageUrl : n.val(),
					clickFn : function(url, title, width, height, border, align) {
						n.val(url);
						imageeditor.hideDialog();
					}
				});
			});
		});

	});

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
<style>
.menu {height:25px; cursor:pointer;}
.menu:hover{ color:#F00; font-weight:bold;}
</style>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$id=$_GET["id"];
	if($id){
		$table = getTableById("content",$id);
		$menu=$table->menu;
	}else{
		$menu=$_GET["menu"];
	}
	$menus = getTableByConList("menuset","id = $menu");
?>
<body>
<form name="form" method="post" action="../done/common.php">
<input name="tablename" type="hidden" value="content"/>
<input name="link" type="hidden" value="../module/list.php?id=<?=$menu?>"/>
<input name="type" type="hidden" value="<?=$id?"update":""?>"/>
<input name="id" type="hidden" value="<?=$id?>"/>
<input name="menu" type="hidden" value="<?=$menu?>"/>
<input name="isUse" type="hidden" value="<?=$table?$table->isUse:0?>"/>
<input name="up_date" type="hidden" value="<?=date('Y-m-d h:i:s')?>"/>
<input name="in_date" type="hidden" value="<?=$table?$table->in_date:date('Y-m-d h:i:s')?>"/>
<input name="in_person" type="hidden" value="<?=$table?$table->in_person:$_SESSION['manager_name']?>"/>
<input name="up_person" type="hidden" value="<?=$_SESSION['manager_name']?>"/>
<div class="commonDiv">
<div class="commontop"><?=$id?"修改":"新增"?>内容</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
    <tr><td width="80" align="center" height="30">标题</td><td><input name="title" maxlength="50" value="<?=$table->title?>"></td></tr>
	<?php 
		while(list($key, $val) = each($menus)){
		  $t = $val->col_name;
		  $outstring =  "<tr><td align='center' height='30'>$val->title</td><td>";
		  switch ($val->col_type){
			 case 'B':{
				  $outstring = $outstring."<br/><textarea  name='$val->col_name' style='width:90%;height:300px;visibility:hidden;' edit='Y'>".$table->$t."</textarea><br/>";
				  break;
			 }
			 case 'X':{
				  $outstring = $outstring."<br/><textarea  name='$val->col_name' style='width:60%;height:200px;visibility:hidden;' smalledit='Y'>".$table->$t."</textarea><br/>";
				  break;
			 }
			 case 'D':{
				  $outstring = $outstring."<input  name='$val->col_name' readonly  class='Wdate' value='".$table->$t."' onclick='WdatePicker()'/>";
				  break;
			 }
			 case 'I':{
				  $outstring = $outstring."<input  name='$val->col_name'  maxlength='50' value='".$table->$t."'/>";
				  break;
			 }
			 case 'M':{
				  $outstring = $outstring.'<input type="text" name="'.$val->col_name.'" value="'.$table->$t.'" readonly /><input type="button" imageedit="Y" value="选择图片" />';
				  break;
			 }
		  }
		  $outstring = $outstring."</td></tr>";
		  echo $outstring;
		}
	?>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:;" onClick="submitForm()">确定</a>&nbsp;&nbsp;<a class="icon" href="../module/list.php?id=<?=$menu?>">取消</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>