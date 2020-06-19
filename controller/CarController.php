<?php

require(ROOT . "model/CarModel.php");

function index()
{
	render("car/index", array(
		'cars' => getAllCars()));
}

function details($id)
{
	render("car/details", array(
		'carbyid' => getCarsByID($id)
	));
}

function delete()
{
	render("paarden/delete");
}