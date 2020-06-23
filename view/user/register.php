<!DOCTYPE html>
<html>
<head>
<title>CARRENTAL REGISTREREN</title>
</head>
	<div id="main-wrapper">
	<center><h2>REGISTREREN</h2></center>
			<form name="create" method="post" action="/carrental-master/user/saveuser">
			</div>
			<div class="text-center m-5">
				<label><b>Gebruikersnaam</b></label>
				<input type="text" placeholder="Voer uw gebruikersnaam in" name="username" required>
			<div class="text-center m-1">
				<label><b>Wachtwoord</b></label>
				<input type="password" placeholder="Voer uw wachtwoord in" name="password" required>
			<div class="text-center m-2">
				<button name="register" class="sign_up_btn" type="submit">REGISTREREN</button>
				<a href="login"><button type="button" class="back_btn"><< TERUG NAAR INLOGGEN</button></a>
			</div>
		</form>
	</div>
</body>
</html>