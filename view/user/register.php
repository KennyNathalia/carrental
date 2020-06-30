
	<div id="main-wrapper">
	<center><h2>REGISTREREN</h2></center>
			<form name="create" method="post" action="<?=URL?>user/saveuser">
			</div>
			<div class="text-center m-5">
				<label><b>Gebruikersnaam</b></label>
				<input type="text" placeholder="Voer uw gebruikersnaam in" name="username">
			<div class="text-center m-1">
				<label><b>Wachtwoord</b></label>
				<input type="password" placeholder="Voer uw wachtwoord in" name="password">
			<div class="text-center m-2">
				<p  class="text-center text-danger"><?php session_start();  echo $_SESSION['regerror'];?></p>
				<button name="register" class="sign_up_btn" type="submit">REGISTREREN</button>
				<a href="<?=URL?>user/index"><button type="button" class="back_btn"><< TERUG NAAR INLOGGEN</button></a>
			</div>
		</form>
	</div>
