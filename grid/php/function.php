<?php
function jump($path){
	$str="<script>";
	$str.="window.location.href='".$path."';";
	$str.="</script>";
	echo $str;
}
function jump_page($back,$path,$info){
	$str="<script>";
	if(!empty($info)){
		$str.="alert('".$info."');";
	}
	if($back){
		$str.="window.history.back();";
	}
	else{
		if(!empty($path))
		$str.="window.location.href='".$path."';";
	}
	
	$str.="</script>";
	echo $str;
}



?>