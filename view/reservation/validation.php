<?php
  session_start();
  $datum = explode( '-', $_POST['daterange']);
  $datum[0] = str_replace(' ', '', $datum[0]);
  $datum[1] = str_replace(' ', '', $datum[1]);
  $_POST['startDatum'] = $datum[0];
  $_POST['eindDatum'] = $datum[1];
  $_SESSION["vanres"] = $datum[0];
  $_SESSION['totres'] = $datum[1];
  
?>

<?php 
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
			$_SESSION['editerror'] = "*Voer eerst een datum in";
			header("location: ".URL."reservation/edit/".$resId['res_id']."/".$carbyid['car_id']);

		}
		 else {
			$data[$field] = $_POST[$field];
		}

	}

	if($valid == 1){
		$_SESSION['editerror'] = "";
		if(isset($gebruiker)){
			header("location: ".URL."reservation/update/".$resId['res_id']);
		} else{
			$_SESSION['editerror'] = "Log eerst in, of maak een account aan";	
			header("location: ".URL."reservation/huren/".$carbyid['car_id']);
		}
		
		
	}
}

?>