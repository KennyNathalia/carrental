<?php

require(ROOT . "model/UserModel.php");

function index()
{
	render("user/index", array(
		'users' => getAllUsers()));
}

function register()
{
	render("user/register");
}

function login()
{
	render("user/login");
}

function verify()
{
	$username = $_POST["username"];
    $password = $_POST["password"];
	$succes = user($username, $password);
	var_dump($succes);
	session_start();
	var_dump($username);
	var_dump($password);
	$gebr = $_SESSION['gebr'];
	$ww = $_SESSION['ww'];

	var_dump($gebr);
	var_dump($ww);

	if($username == $succes["username"]){
		echo "gebruikersnaam juist";
		if($password === $succes["password"]){
			$_SESSION["user"] = $username;
			header("location: ".URL."home/index/$succes");	
		} else{
			echo "wachtwoord onjuist";
		}
	} else {
		echo "gebruikersnaam onjuist";
	}
	
}


function saveuser() 
{
	$username = $_POST["username"];
    $password = $_POST["password"];
    createUser($username, $password);

	header("location: ".URL."user/login");//redirect to login/home (registration succesful)
}

function detail()
{
	render("user/detail");
}

function logout()
{
	userLogout();
	header("location: ".URL."home/index");
}