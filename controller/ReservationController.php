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