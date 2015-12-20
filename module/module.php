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
<script  src="../kindeditor/lang/zh_CN.js"></script>
<script src="../kindeditor/plugins/code/prettify.js"></script>
<script type="text/javascript" src="../js/DatePicker/WdatePicker.js"></script>
<script>
	var editor;
	var editor1;
	KindEditor.ready(function(K) {
		if($("textarea[edit=y]").size()>0){
			editor = K.create('textarea[edit="y"]', {
				allowFileManager : true,
				cssPath : '../kindeditor/plugins/code/prettify.css',
				uploadJson : '../kindeditor/php/upload_json.php',
				fileManagerJson : '../kindeditor/php/file_manager_json.php'
			});
		}
		
		if($("textarea[smalledit=y]").size()>0){
			editor1 = K.create('textarea[smalledit="y"]', {
				allowFileManager : false,
				resizeType : 1,
				allowPreviewEmoticons : false,
				allowImageUpload : false,
				items : ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
							'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
							'insertunorderedlist', '|', 'emoticons', 'link']
			});
		}
		
		var fileeditor = K.editor({
			allowFileManager : true,
			cssPath : '../kindeditor/plugins/code/prettify.css',
			uploadJson : '../kindeditor/php/upload_json.php',
			fileManagerJson : '../kindeditor/php/file_manager_json.php'
		});
		K('input[imageedit]').click(function() {
			var n = $(this).prev();
			fileeditor.loadPlugin('image', function() {
				fileeditor.plugin.imageDialog({
					imageUrl : n.val(),
					clickFn : function(url, title, width, height, border, align) {
						n.val(url);
						fileeditor.hideDialog();
					}
				});
			});
		});
		K('input[fileedit]').click(function() {
			var n = $(this).prev();
			fileeditor.loadPlugin('insertfile', function() {
				fileeditor.plugin.fileDialog({
					imageUrl : n.val(),
					clickFn : function(url, title, width, height, border, align) {
						n.val(url);
						fileeditor.hideDialog();
					}
				});
			});
		});
		
		K('input[mediaedit]').click(function() {
			var n = $(this).prev();
			fileeditor.loadPlugin('media', function() {
				fileeditor.plugin.media.edit({
					url : n.val(),
					clickFn : function(url, title, width, height, border, align) {
						n.val(url);
						fileeditor.hideDialog();
					}
				});
			});
		});

	});

function submitForm(){
	if(editor)editor.sync();
	if(editor1)editor1.sync();
	document.form.submit();
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
	$menu=$_GET["id"];
	$table = getTableByCon("content","menu = $menu");
	$menuT = getTableByCon("menu","id = $id");
	$id=$table->id;
?>
<body>
<form name="form" method="post" action="../done/common.php">
<input name="tablename" type="hidden" value="content"/>
<input name="link" type="hidden" value="../module/module.php?id=<?=$menu?>"/>
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
    <tr><td width="80" align="center" height="30">标题</td><td><input name="title" type="hidden" maxlength="50" value="<?=$menuT->menuname?>"><?=$menuT->menuname?></td></tr>
    <tr><td align='center' height='30'>内容</td><td>
    <br/><textarea  name='textarea1' style='width:90%;height:400px;visibility:hidden;' edit='y'><?=$table->textarea1?></textarea><br/>
    </td></tr>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:;" onClick="submitForm()">确定</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>