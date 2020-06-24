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

	header("location: ".URL."home/$succes");
}


function saveuser() 
{
	$username = $_POST["username"];
    $password = $_POST["password"];
    createUser($username, $password);

	header("location: ".URL."user/login");//redirect to login/home (registration succesful)
}