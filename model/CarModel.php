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