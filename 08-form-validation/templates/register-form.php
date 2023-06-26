<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
</head>
<body>
<main>
	<form method="post" action="index.php">
		<div class="form-group form-group--radio">
			<p>Geschlecht</p>
			<?php
			renderErrors( 'gender' ); ?>
			<div class="form-input form-input--radio">
				<input id="gender--male" name="gender" type="radio" value="male"/>
				<label for="gender--male">Männlich</label>
			</div>
			<div class="form-input form-input--radio">
				<input id="gender--female" name="gender" type="radio" value="female"/>
				<label for="gender--female">Weiblich</label>
			</div>
		</div>
		<div class="form-group form-group--text">
			<label for="username">Benutzername</label>
			<?php
			renderErrors( 'username' ); ?>
			<input id="username" name="username" type="text" required/>
		</div>
		<div class="form-group form-group--text">
			<label for="email">E-Mail Adresse</label>
			<?php
			renderErrors( 'email' ); ?>
			<input id="email" name="email" type="email" required/>
		</div>
		<div class="form-group form-group--text">
			<label for="password">Passwort</label>
			<?php
			renderErrors( 'password' ); ?>
			<input id="password" name="password" type="password" required/>
		</div>
		<div class="form-group form-group--select">
			<label for="country">Nationalität</label>
			<?php
			renderErrors( 'country' ); ?>
			<select id="country" name="country" size="4" required>
				<option value="germany">Deutschland</option>
				<option value="austria">Österreich</option>
				<option value="switzerland">Schweiz</option>
				<option value="france">Frankreich</option>
			</select>
		</div>
		<div class="form-group form-group--checkbox">
			<p>Weiteres</p>
			<?php renderErrors( 'terms-of-service' ); ?>
			<div class="form-input form-input--checkbox">
				<input id="terms-of-service" name="terms-of-service" type="checkbox" required/>
				<label for="terms-of-service">Ich aktzeptiere die Allgemeine Geschäftsbedingungen</label>
			</div>
		</div>
		<div class="form-group form-group--submit">
			<input type="submit" value="Registrieren"/>
		</div>
	</form>
</main>
</body>
</html>