<?php
//if(isset($_POST["username"])){
	//$uname = $_POST["username"];
	//$password = $_POST["password"];

	//$sql = "SELECT * FROM users WHERE username='".$uname." 'AND password='".$password."' limit 1";

	//$result=mysql_query($sql);

	//if(mysql_num_rows($result)==1){
		//echo "U ben ingelogd!";
		//exit();
	//}else{
		//echo "Verkeerde wachtwoord"
		//exit();

	//}

	
//}


?>



   <div id="main-wrapper">
	<center><h2 class="color-blue">INLOGGEN</h2></center>	
	   <form action="<?=URL?>user/verify" method="post">
			<div class="text-center m-5">
				<label><b>Gebruikersnaam</b></label>
				<input type="text" placeholder="Voer uw gebruikersnaam in" name="username" required>
			<div class="text-center m-1">
				<label><b>Wachtwoord</b></label>
				<input type="password" placeholder="Voer uw wachtwoord in" name="password" required>
			<div class="text-center m-2">
				<button class="login_button" name="login" type="submit">INLOGGEN</button>
				<a class='d-block' href="<?=URL?>user/register">Nog geen account? Registreer je!</a>
			</div>
		</form>
	</div>
