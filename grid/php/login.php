<?php
session_start();
header("content-type:text/html;charset=utf-8");
$name=$_POST["user"];
$psd=$_POST["password"];
include("conn.php");
include("function.php");
$rs=mysql_query("select * from customer where loginname='$name' and password='$psd'");

if(mysql_affected_rows()>0)
{
	jump_page(0,'../html/mainpage.php','');
	while($row=mysql_fetch_array($rs)){
		$_SESSION["cumid"]=$row["cumno"];
		// echo $_SESSION["cumid"];
	}
	
}
else{	
	jump_page(1,'','登录失败');
}

$_SESSION["name"]=$psd;

mysql_close($con);
?>