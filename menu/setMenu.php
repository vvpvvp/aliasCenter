<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<style>
.noBoder{ border:0px; text-align:center; width:100px;}
</style>
<script>
function add(){
	var addTr = $(".commonTable tr").slice(-1).clone(true);
	addTr.find(":input[name='title[]']").val("");
	addTr.find("select[name='col_type[]'] option").eq(0).attr("selected","selected");
	addTr.find("select[name='isIndex[]'] option").eq(0).attr("selected","selected");
	//alert(addTr.find("select[name='col_type[]'] option").get(0).value);
	$(".commonTable").append(addTr);
	sortInput();
}
function sortInput(){
	$(":input[name='sort[]']").each(function(i,n){
		n.value = i+1;
	});
}
function del(obj){
	if($(".commonTable tr").size()==2){
		alert("已经是最后一行！");
		return false;
	}
	$(obj).parent().parent().remove();
	sortInput();
}

function submitForm(){
	if($(":input[name='title[]'][value='']").size()>0){
		alert("字段名不可为空！");
	}else{
		document.form.submit();
	}
}

function moveTr(type,obj){
	var TRobj = $(obj).parent().parent();
	if(type==-1&&TRobj.prevAll().size()==1){
		alert("当前已经是第一行！");
		return false;
	}else if(type==1&&TRobj.next().size()==0){
		alert("当前已经是最后一行！");
		return false;
	}else{
		if(type==-1)TRobj.insertBefore(TRobj.prev());
		else TRobj.insertAfter(TRobj.next());
		sortInput();
	}
}
</script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php 
	$id = $_GET["id"];
	$sql = "select * from menuset where id = $id";
	$result = mysql_query($sql);
	$menu = getTableById("menu",$id);
?>
<body>
<form name="form" method="post" action="../done/menu.php">
<input name="type" type="hidden" value="setmenu"/>
<input type="hidden" name="id" value="<?=$id?>">

<div class="commonDiv">
<div class="commontop">【模块设置&nbsp;>>&nbsp;<?=$menu->menuname?>】【无需设置标题项】</div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable" >
	<tr><th width="10%" height="28">序号</th><th>字段名</th><th>字段类型</th><th>是否首页展示</th>
	  <th>上移</th>
	  <th>下移</th>
	  <th><a class="icon" href="javascript:;" onClick="add()">+</a></th></tr>
    <?php while($row = mysql_fetch_object($result)){?>
	<tr><td width="10%" height="28"><input class="noBoder" readonly name="sort[]" value="<?=$row->sort?>"></td><td><input name="title[]" value="<?=$row->title?>"/></td>
      <td><select name="col_type[]"><option value="I" <?=$row->col_type=='I'?"selected":""?>>普通字段</option><option value="Z" <?=$row->col_type=='Z'?"selected":""?>>展示</option><option value="P" <?=$row->col_type=='P'?"selected":""?>>密码</option><option value="M" <?=$row->col_type=='M'?"selected":""?>>图像</option><option value="D" <?=$row->col_type=='D'?"selected":""?>>日期</option><option value="W" <?=$row->col_type=='W'?"selected":""?>>文件</option><option value="S" <?=$row->col_type=='S'?"selected":""?>>视频</option><option value="X" <?=$row->col_type=='X'?"selected":""?>>小型编辑</option><option value="B" <?=$row->col_type=='B'?"selected":""?>>大型编辑</option></select></td>
      <td><select name="isIndex[]"><option value="0" <?=$row->isIndex==0?"selected":""?>>否</option><option value="1" <?=$row->isIndex==1?"selected":""?>>是</option></select></td>
      <td><a href="javascript:;" onClick="moveTr(-1,this)">上移</a></td>
      <td><a href="javascript:;" onClick="moveTr(1,this)">下移</a></td>
      <td><a class="icon" href="javascript:;" onClick="del(this)">-</a></td>
    </tr>
	<?php }
	if(mysql_num_rows($result)==0){?>
	<tr><td width="10%" height="28"><input class="noBoder" readonly name="sort[]" value="1"></td><td><input name="title[]" value="<?=$table->title?>"/></td>
      <td><select name="col_type[]"><option value="I">普通字段</option><option value="Z" >展示</option><option value="P" >密码</option><option value="M">图像</option><option value="D">日期</option><option value="W">文件</option><option value="S">视频</option><option value="X">小型编辑</option><option value="B">大型编辑</option></select></td>
      <td><select name="isIndex[]"><option value="0">否</option><option value="1">是</option></select></td>
      <td><a href="javascript:;" onClick="moveTr(-1,this)">上移</a></td>
      <td><a href="javascript:;" onClick="moveTr(1,this)">下移</a></td>
      <td><a class="icon" href="javascript:;" onClick="del(this)">-</a></td>
    </tr>
    <?php }?>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:submitForm();" >确定</a>&nbsp;&nbsp;<a class="icon" href="menu.php?id=<?=$id?>">取消</a></td></tr></table></div>
</div>
</form>
</body>
</html>