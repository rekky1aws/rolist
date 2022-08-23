<?php 
	$DIR = "..";
	require $DIR."/components/head.php";
?>
	<!-- <link rel="stylesheet" type="text/css" href="/style/XXXX.css">-->
	<!-- <script type="text/javascript" src="script/XXXX.js" defer></script>-->
	<link rel="stylesheet" type="text/css" href="/dist/style/login.css">
	<title>Rollist - Connexion</title>
<?php
	require $DIR."/components/header.php";
?>
<!-- Page Content -->
	<div class="container">
		<form method="POST">
			<h2> Se connecter </h2>
			<div class="form-element">
				<label for="login-username">Username : </label>
				<input type="text" name="login-username" id="login-username">
			</div>
			<div class="form-element">
				<label for="login-password">Password : </label>
				<input type="password" name="login-password" id="login-password">
			</div>
			<button class="connect-button cliquable main-button">Connexion</button>
		</form>
		<div class="separator"></div>
		<form method="POST">
			<h2> Créer un compte </h2>
			<div class="form-element">
				<label for="register-username">Username : </label>
				<input type="text" name="register-username" id="register-username">
			</div>
			<div class="form-element">
				<label for="register-mail">Mail : </label>
				<input type="email" name="register-mail" id="register-mail">
			</div>
			<div class="form-element">
				<label for="register-password">Password : </label>
				<input type="password" name="register-password" id="register-password">
			</div>
			<div class="form-element">
				<label for="register-confirm-password">Confirm Password : </label>
				<input type="password" name="register-confirm-password" id="register-confirm-password">
			</div>
			<button class="create-button cliquable main-button">Créer le compte</button>
		</form>
	</div>
<?php
	require $DIR."/components/footer.php";
?>