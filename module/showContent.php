<?php session_start();?>
<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="../css/form.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
</head>
<?php include("../include/database.inc");?>
<?php include("../include/common.inc");?>
<?php
	$id=$_GET["id"];
	if($id){
		$table = getTableById("content",$id);
		$menu=$table->menu;
	}
	$menus = getTableByConList("menuset","id = $menu");
?>
<body>
<div class="commonDiv">
<div class="commontop"><?=$table->title?></div>
<table border="0" align="center" cellpadding="0" cellspacing="0" class="commonTable1" >
	<tr><td height='30' colspan="2">&nbsp;<a class="icon" href="javascript:window.history.back();">返回</a></td></tr>
	<tr><td align='center' height='30' width='13%'>标题</td><td><?=$table->title?></td></tr>
	<tr><td align='center' height='30' width='13%'>创建日期</td><td><?=$table->in_date?></td></tr>
	<tr><td align='center' height='30' width='13%'>更新日期</td><td><?=$table->up_date?></td></tr>
	<tr><td align='center' height='30' width='13%'>创建人</td><td><?=$table->in_person?></td></tr>
	<tr><td align='center' height='30' width='13%'>最新修改</td><td><?=$table->up_person?></td></tr>
	<?php 
		while(list($key, $val) = each($menus)){
		  $t = $val->col_name;
		  $outstring =  "<tr><td align='center' height='30' width='13%'>$val->title</td><td>";
		  switch ($val->col_type){
			 case 'M':{
				  if($table->$t)$outstring .= "<img height='120' border='0' src='".$table->$t."'/>";
				  break;
			 }
			 case 'S':{
				  if($table->$t)$outstring .= "<embed src='".$table->$t."' type='application/x-shockwave-flash' allowscriptaccess='always' allowfullscreen='true' wmode='opaque' width='480' height='400' />";
				  break;
			 }
			 case 'P':{
				  if($table->$t)$outstring .= "加密字段";
				  break;
			 }
			 default:{
				  $outstring .= $table->$t;
				  break;
			 }
		  }
		  $outstring = $outstring."</td></tr>";
		  echo $outstring;
		}
	?>
</table>
<div class="commonBottom"><table width="90%" border="0" cellpadding="0" cellspacing="0"><tr><td height="40"><a class="icon" href="javascript:window.history.back();">返回</a></td></tr></table></div>
</div>
</table>
</form>
</body>
</html>
<script type="text/javascript">
$(function(argument) {
	// body...
	prettyPrint();
})
</script>