<?php
require(ROOT . "model/ReservationModel.php");
function index()
{
	session_start();
	$username = $_SESSION["user"];
	render("reservation/index", array(
		'allRes' => getAllRes($username)
	));	
}

function delete($id)
{
	render("reservation/delete", array(
		'resId' => reservationById($id)
	));
}

function destroy($id){
	deleteRes($id);
	header("location:". URL. "reservation/index");
}

function edit($id, $carid){
	render("reservation/edit",  array(
		'resId' => reservationById($id)
	),	array(
		'carbyid' => getCarsById($carid)
	));
}

function update($id){
	session_start();
	$price = $_SESSION["price"];
   
	$_SESSION['vanres'] = date("Y-m-d", strtotime($_SESSION['vanres'])); 
    $_SESSION['totres'] = date("Y-m-d", strtotime($_SESSION['totres'])); 
    $van = $_SESSION["vanres"];
	$tot = $_SESSION["totres"];
	editRes($van, $tot, $price, $id);
	header("location:". URL. "reservation/index");
}

function validation($id){
	render("reservation/validation", array(
		'resId' => reservationById($id)
	));
}