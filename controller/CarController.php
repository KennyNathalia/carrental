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

function huren($id)
{
	render("car/huren", array(
		'carbyid' => getCarsByID($id)
	));
}

function kopen($id)
{
	render("car/kopen", array(
		'carbyid' => getCarsByID($id)
	));
}

function reserveren($id)
{
	render("car/reserveren", array(
		'carbyid' => getCarsByID($id)
	));
}