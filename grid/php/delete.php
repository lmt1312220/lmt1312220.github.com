<?php
include("conn.php");
include("function.php");
$id=$_REQUEST['id'];
$sql="delete from packetclass where classno='".$id."'";
$re=mysql_query($sql);
if(mysql_affected_rows()>0){
	jump_page(0,'index.php','格子删除成功');
}
else{
	jump_page(0,'index.php','格子删除失败');
}
?>