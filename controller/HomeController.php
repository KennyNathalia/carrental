<?php
require(ROOT . "model/HomeModel.php");
function index()
{
	render("home/index", array(
		'cars' => getAllCars()));	
}

