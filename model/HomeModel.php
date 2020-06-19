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

// function createBezoeker($naam){
// 	$db = openDatabaseConnection();

// 	$sql = "INSERT INTO bezoeker (naam) VALUES (:naam)";
	
// 	$query = $db->prepare($sql);
// 	$query->bindParam(':naam', $naam);
// 	$query->execute();

// 	$db = null;
// }

// function getAllBezoekers() 
// {
// 	$db = openDatabaseConnection();

// 	$sql = "SELECT * FROM bezoeker";
// 	$query = $db->prepare($sql);
// 	$query->execute();

// 	$db = null;

// 	return $query->fetchAll();
// }

// function getBezoeker($id){
// 	$db = openDatabaseConnection();
// 	$sql = "SELECT * FROM bezoeker WHERE id = :id";
// 	$query = $db->prepare($sql);
// 	$query->bindParam(':id', $id);
// 	$query->execute();
// 	$db = null;

// 	return $query->fetch();
// }

// function updateBezoeker($naam, $id){
// 	$db = openDatabaseConnection();
// 	$sql = "UPDATE bezoeker SET naam = :naam WHERE id = :id";
// 	$query = $db->prepare($sql);
// 	$query->bindParam(':naam', $naam);
// 	$query->bindParam(':id', $id);
	
// 	$query->execute();
// 	$db = null;
// }

// function deleteBezoeker($id){
// 	$db = openDatabaseConnection();
// 	$sql = "DELETE FROM bezoeker WHERE id = :id";
// 	$query = $db->prepare($sql);
// 	$query->bindParam(':id', $id);
	
// 	$query->execute();
// 	$db = null;
// }