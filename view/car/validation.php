<?php 
session_start();
$_SESSION['daterange'] = $_POST['daterange'];
$_SESSION['numberdays'] = $_POST['numberdays'];
$_SESSION['price'] = $_POST['price'];
$fields = ["daterange","numberdays","price"];

$class = [];
$data = [];
$class["daterange"] = $data["daterange"] = "";
$class["numberdays"] = $data["numberdays"] = "";
$class["price"] = $data["price"] = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$valid = 1;

	foreach($fields as $field){
		if(isset($_POST[$field]) && empty($_POST[$field])){
			$class[$field] = "is-invalid";
			$valid = 0;
			$_SESSION['error'] = "*Voer eerst een datum in";
			header("location: ".URL."car/huren/".$carbyid['car_id']);

		}
		 else {
			$data[$field] = $_POST[$field];
		}

	}

	if($valid == 1){
		$_SESSION['error'] = "";
		if(isset($gebruiker)){
			header("location: ".URL."car/reserveren/".$carbyid['car_id']);
		} else{
			$_SESSION['error'] = "Log eerst in, of maak een account aan";	
			header("location: ".URL."car/huren/".$carbyid['car_id']);
		}
		
		
	}
}