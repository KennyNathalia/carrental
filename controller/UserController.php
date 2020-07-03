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
	render("user/index");
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


	$fields = ["username","password"];

	$class = [];
	$data = [];
	$class["username"] = $data["username"] = "";
	$class["password"] = $data["password"] = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$valid = 1;

		foreach($fields as $field){
			$_POST[$field] = trim($_POST[$field]);
			$_POST[$field] = stripslashes($_POST[$field]);
			$_POST[$field] = htmlspecialchars($_POST[$field]);
			if(isset($_POST[$field]) && empty($_POST[$field])){
				$class[$field] = "is-invalid";
				$valid = 0;
				$_SESSION['loginerror'] = "*Vull alle velden in";
				header("location: ".URL."user/index");

			}
			 else {
				$data[$field] = $_POST[$field];
			}

		}

		if($valid == 1){
			$_SESSION['loginerror'] = "";
			if($username == $succes["username"]){
				if($password === $succes["password"]){
					$_SESSION["user"] = $username;
					header("location: ".URL."home/index/$succes");	
				} else{
					$_SESSION['loginerror'] = "*Wachtwoord onjuist";
					header("location: ".URL."user/index");
				}
			} else {
				$_SESSION['loginerror'] = "*Gebruikersnaam onjuist";
				header("location: ".URL."user/index");
			}
			
		}
	}
			
	
}


function saveuser() 
{
	session_start();
	$username = $_POST["username"];
    $password = $_POST["password"];

    $check = checkUser($username);

    $fields = ["username","password"];

	$class = [];
	$data = [];
	$class["username"] = $data["username"] = "";
	$class["password"] = $data["password"] = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$valid = 1;

		foreach($fields as $field){
			$_POST[$field] = trim($_POST[$field]);
			$_POST[$field] = stripslashes($_POST[$field]);
			$_POST[$field] = htmlspecialchars($_POST[$field]);
			if(isset($_POST[$field]) && empty($_POST[$field])){
				$class[$field] = "is-invalid";
				$valid = 0;
				$_SESSION['regerror'] = "*Vull alle velden in";
				header("location: ".URL."user/register");

			}
			 else {
				$data[$field] = $_POST[$field];
			}

		}

		if($valid == 1){
			$_SESSION['regerror'] = "";
			if($check == false){
				createUser($username, $password);
				header("location: ".URL."user/index");
	
			} else {
				var_dump($check);
	
				$_SESSION['regerror'] = "*Deze gebruikersnaam is al in gebruik.";
				header("location: ".URL."user/register");

   			}
			
		}
	}
   
	
	//redirect to login/home (registration succesful)
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