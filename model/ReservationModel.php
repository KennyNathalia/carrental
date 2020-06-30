<?php

function reservation() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reservering";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllRes($username){
        $conn = openDatabaseConnection();
        $query = $conn->prepare("SELECT *, merken.naam as merknaam, modellen.naam as modelnaam FROM reservering JOIN auto ON auto.car_id = reservering.car_id JOIN merken ON merken.merk_id = auto.merk JOIN modellen ON modellen.model_id = auto.model_id WHERE username = :username");
        $query->bindParam(":username", $username);
        $query->execute();
        $allRes = $query->fetchAll();
        return $allRes;
}


function deleteRes($id){
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM reservering WHERE res_id = :id");
	$query->bindParam(":id", $id);
	$query->execute();

}

function reservationById($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reservering WHERE res_id = :id";
	
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();

	$db = null;

	return $query->fetch();
}