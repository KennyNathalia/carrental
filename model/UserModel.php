<?php

function createUser($username, $password){
  $conn = openDatabaseConnection();
  $statement = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
  $statement->bindParam(":username", $username);
  $statement->bindParam(":password", $password);
  $statement->execute();

  $conn = null;
}

function user($username, $password){
	$conn = openDatabaseConnection();
	$statement = $dbh->prepare("SELECT username from users where username = :username");
	$statement->bindParam(":username", $username);
    //$statement->bindParam(":password", $password);
	$statement->execute();

	$conn = null;

	if($statement->rowCount() > 0)
	{
	  	return "user has been found!";
	}
}


function getAllUsers() 
{
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM users"; 
	$query = $conn->prepare($sql);
	$query->execute();


	return $query->fetch();
}