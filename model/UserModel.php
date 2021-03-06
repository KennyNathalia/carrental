<?php

function checkUser($username){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT username from users where username = :username");
  	$statement->bindParam(":username", $username);
  	$statement->execute();
	return $statement->fetch();
  	$conn= null;
}

function createUser($username, $password){
  $conn = openDatabaseConnection();
  $statement = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
  $statement->bindParam(":username", $username);
  $statement->bindParam(":password", $password);
  $statement->execute();

  $sql_u = "SELECT * FROM users WHERE username='$username'";
  $res_u = mysqli_query($conn, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 		
  	}

}

function user($username, $password){
	$conn = openDatabaseConnection();
	$statement = $conn->prepare("SELECT username, password from users where username = :username");
	$statement->bindParam(":username", $username);
	$statement->execute();

	
	
	
	return $statement->fetch();
	$conn = null;
	// if($statement->rowCount() > 0)
	// {
	//   	$gebr = true;
	//   	if($password == $statement["password"])
	// 	{
	//   		$ww = true;
	// 	} else {	
	// 		$ww = false;
	// 	}
	// } else{
	// 	$gebr = false;
	// }
	// session_start();
	// $_SESSION['gebr'] = $gebr;
	// $_SESSION['ww'] = $ww;
}


function getAllUsers() 
{
	$conn = openDatabaseConnection();

	$sql = "SELECT * FROM users"; 
	$query = $conn->prepare($sql);
	$query->execute();


	return $query->fetch();
}

function userLogout()
{
	session_start();
	unset($_SESSION['user']);
}

