<?php
date_default_timezone_set('prc');
$classname=$_POST['name'];
$needmoney=$_POST['money'];
$endtime=$_POST['date'];
// echo $endtime;
include('function.php');
if(empty($classname)){
    jump_page(1,'','格子名不能为空');
}
else if(empty($needmoney)){
    jump_page(1,'','目标金额不能为空');
}
else if(empty($classname)){
    jump_page(1,'','期限不能为空');
}
else{

$date=date("Y-m-d");
// echo $date;
// echo "<br />";
$needtime=(strtotime($endtime)-strtotime($date))/60/60/24;
function randrgb()  
{  
  $str='0123456789ABCDEF';  
    $estr='#';  
    $len=strlen($str);  
    for($i=1;$i<=6;$i++)  
    {  
        $num=rand(0,$len-1);    
        $estr=$estr.$str[$num];   
    }  
    return $estr;  
} 
$color=randrgb();
include("conn.php");
$sql="insert into packetclass(cumno,classname,needmoney,havemoney,color,timestart,timeend) ";
$sql.="values('1','$classname','$needmoney',0,'$color','$date','$endtime')";
// echo $sql;
mysql_query($sql);
if(mysql_affected_rows()>0){
	jump_page(0,'../html/insert2.html','格子添加成功');
}
else{
	//jump_page(1,'','添加失败!');
}
    
}

?>