<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CarRental</title>	
	<link rel="stylesheet" type="text/css" href="<?=URL?>css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script src="https://kit.fontawesome.com/970adb2e15.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="col-lg-10 col-sm-12 m-auto">
		<ul class="row m-auto nav nav-tabs justify-content-center">
		
			<div class="col-lg-10 col-sm-12 row d-flex align-items-end justify-content-center">
				<img class="col-4 col-lg-1 col-sm-2 col-md-2 col-xl-1" src="<?=URL?>public/Auto-images/CARRENTAL.png">
				<li class="nav-item col-lg-2 col-sm-12 text-center"><a class="nav-link color-green" href="<?= URL ?>home/index">Home</a></li>
				<li class="nav-item col-lg-2 col-sm-12 text-center"><a class="nav-link color-green" href="<?= URL ?>car/index">Auto's</a></li>
				<li class="nav-item col-lg-2 col-sm-12 text-center"><a class="nav-link color-green" href="<?= URL ?>contact/index">Contact</a></li>
				<li class="nav-item col-lg-2 col-sm-12 text-center"><a class="nav-link color-green" href="<?= URL ?>reservation/index">Reserveringen</a></li>

			</div>
			<div  class="col-lg-2 col-sm-12 d-flex align-items-end text-center justify-content-center">
				<?php session_start();
					  $gebruiker = $_SESSION["user"];
				?>
				<a <?php if(!isset($gebruiker)){ echo' href="'.URL.'user/index" '; }else{ echo' href="'.URL.'user/detail" '; }?> class="color-green"><i class="fas fa-user p-0  d-block text-center"></i><span class="d-flex align-items-center"> <?php  
				if(isset($gebruiker)){
					echo $gebruiker;
				} else{
					echo "Log in";
				}
					 ?></span></a>
			</div>

		</ul>
	</nav>
