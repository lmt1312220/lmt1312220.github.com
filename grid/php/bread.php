<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
switch($_SESSION["page"]){
	case 'purse';
	echo "<script>
	$(document).ready(function(){
	$('.purse>img').attr('src','../picture/w_yellow.png');
	$('.grid>img').attr('src','../picture/专项款(1).png');
	$('.mine>img').attr('src','../picture/我的.png');
});
	</script>";
	break;
	case 'index';
	echo "<script>
	$(document).ready(function(){
	$('.grid>img').attr('src','../picture/add_grid_yellow.png');
	$('.grid>img').css('width','50px');
		$('.grid>img').css('height','50px');
			$('.grid>img').css('margin-top','-20px');
	$('#f3').html('添加格子');
	$('.change').attr('href','add_grid.php');
	$('.purse>img').attr('src','../picture/钱包.png');
	$('.mine>img').attr('src','../picture/我的.png');
});
	</script>";
	break;
	case 'mine';
	echo "<script>
	$(document).ready(function(){
	$('.mine>img').attr('src','../picture/mine_yellow.png');
	$('.purse>img').attr('src','../picture/钱包.png');
	$('.grid>img').attr('src','../picture/专项款(1).png');
});
	</script>";
	break;
}
?>
</body>
</html>
