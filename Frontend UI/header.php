<?php 
	error_reporting(0);
	include 'script.php'; 
	$color = $_GET["color"] ? $_GET["color"] :'#e94d1d';
	$rgb = hex2rgb($color);
	$layout = $_GET["layout"] ? $_GET["layout"] :'full';
	$tablebooking =  $_GET["tablebooking"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mycaffe</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php include 'color.php'; ?>

</head>
<body class="l-<?=$layout?>">
	
	<div class="ml ml-top">
		<div class="container">
			<form class="m-postcode"><label for="">POST CODE <input type="text" name="" id=""></label></form>
		</div>
	</div>

	<div class="l-top g-clear">
		<div class="container">
			<div class="l-top_left pull-left">
				<div class="m-phonenumber g-text-white">+4417752387</div>
			</div>
			<div class="l-top_right pull-right">
				<form class="m-postcode"><label for="">POST CODE <input type="text" name="" id=""></label></form>
				<ul class="m-quickNavigation">
					<li><a href="">LOGIN</a></li>
					<li><a href="" class="active">REGISTER</a></li>
				</ul>
			</div>
		</div>
	</div><!-- End Of top orange bar -->

	<div class="l-header clear">
		<div class="container">
			<div class="l-header_left">
				<div class="m-logo"><img src="img/logo.png" alt=""></div>
				<!-- <span class="btn"><i class="fa fa-search"></i></span>
				<span class="btn"><i class="fa fa-shopping-cart"></i></span> -->
			</div>
			<div class="l-header_mid">
				<ul class="m-mainnavigation">
					<li><a href="" class="active">HOME</a></li>
					<li><a href="">MENU</a></li>
					<li><a href="">TABLE BOOKING</a></li>
					<li><a href="">ABOUT US</a></li>
					<li><a href="">REVIEWS</a></li>
					<li><a href="">SPECIAL</a></li>
					<li><a href="">CONTACT</a></li>
					<li class="m-mainnavigation_search g-icon"><i class="fa fa-search"></i></li>
				</ul>
			</div>
			<div class="l-header_right">
				<div class="m-cart g-icon"><i class="fa fa-shopping-cart"></i> 5 items | $233.90</div>
			</div>

			<ul class="m-timedetails">
				<li><span>Delivery Time : 40min</span></li>
				<li><span>Collection Time : 25min</span></li>
			</ul>
		</div>
	</div><!-- End Of Header -->