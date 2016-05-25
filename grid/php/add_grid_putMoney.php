<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>grid</title>
		<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		<script src="../js/radialindicator.js"></script>
		<script src="../js/circle.js"></script>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/add_grid_putMoney.css">
		<link rel="stylesheet" href="../css/public.css">
	</head>
	<?php
	include("public.html");
	?>
	<body> <!-- head -->
	<nav class="navbar navbar-default  navbar-fixed-top head">
		<div class="container">
			<div class="row">
				<div class="col-xs-1">
					<img src="../picture/left_arrow.png" alt="">
				</div>
				<div class="col-xs-10">
					<span>存入金额</span>
				</div>
				<div class="col-xs-1">
					<span>跳过</span>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		
		
		<!-- middle -->
		<div class="row middle">
			<!-- grid1 -->
			<div class='row'>
				<div class='col-xs-2'></div>
				<div class='col-xs-8 grid-1'>
					<span>旅游</span>
					<h2>600.12</h2>
					<span>目标金额10000</span>
					<div class="cirle-progress-bar" id="indicatorContainer"></div>
				</div>
				<div class='col-xs-2'></div></div>
				<!-- grid2 -->
				<div class="row">
					<div class='col-xs-2'></div>
					<div class='col-xs-8 grid-2'>
						<span>单反</span>
						<h2>1000</h2>
						<span>目标金额6000</span>
						<div class="cirle-progress-bar" id="indicatorContainer2"></div>
					</div>
					<div class='col-xs-2'></div></div>
				</div>
			</div>
		</body>
	</html>