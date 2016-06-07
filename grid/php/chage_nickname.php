<?php
include("conn.php");
include("function.php");
$nickname=$_POST['nickname'];
$sql="update customer set nickname='$nickname'";
// echo $sql;
mysql_query($sql);
if(mysql_affected_rows()>0){
	jump_page(0,'../html/mine.php','昵称修改成功');
}
else{
	jump_page(0,'../html/mine.php','昵称修改失败');
}
?>