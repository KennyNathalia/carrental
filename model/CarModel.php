<?php
function getAllCars() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT *, merken.naam as merknaam, modellen.naam as modelnaam FROM auto JOIN merken ON auto.merk = merken.merk_id JOIN modellen ON auto.model_id = modellen.model_id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getCarsByID($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT *, merken.naam as merknaam, modellen.naam as modelnaam FROM auto JOIN merken ON auto.merk = merken.merk_id JOIN modellen ON auto.model_id = modellen.model_id WHERE car_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();

	$db = null;

	return $query->fetch();
}

function addReservering() 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO reservering (car_id, van, tot, username) VALUES (:car_id, :van , :tot, :username)";
	$query = $db->prepare($sql);
	session_start();
	$query->bindParam(':car_id', $_SESSION['carid']  );
	$query->bindParam(':van', $_SESSION['van']  );
	$query->bindParam(':tot', $_SESSION['tot']  );
	$query->bindParam(':username', $_SESSION['user']  );
	$query->execute();

	$db = null;

	
}


