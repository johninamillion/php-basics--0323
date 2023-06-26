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
			<?php renderErrors( 'gender' ); ?>
			<?php foreach ( $gender_options as $value => $label ): ?>
            <div class="form-input form-input--radio">
                <input id="gender--<?= $value ?>>" name="gender" type="radio" value="<?= $value ?>"/>
                <label for="gender--<?= $value ?>>"><?= $label ?></label>
            </div>
			<?php endforeach; ?>
        </div>
        <div class="form-group form-group--text">
            <label for="username">Benutzername</label>
			<?php
			renderErrors( 'username' ); ?>
            <input id="username" name="username" type="text"/>
        </div>
        <div class="form-group form-group--text">
            <label for="email">E-Mail Adresse</label>
			<?php
			renderErrors( 'email' ); ?>
            <input id="email" name="email" type="text"/>
        </div>
        <div class="form-group form-group--text">
            <label for="password">Passwort</label>
			<?php
			renderErrors( 'password' ); ?>
            <input id="password" name="password" type="password"/>
        </div>
        <div class="form-group form-group--select">
            <label for="country">Nationalität</label>
			<?php
			renderErrors( 'country' ); ?>
            <select id="country" name="country" size="4">
				<?php
				foreach ( $country_options as $value => $label ): ?>
                    <option value="<?= $value ?>"><?= $label ?></option>
				<?php
				endforeach; ?>
            </select>
        </div>
        <div class="form-group form-group--checkbox">
            <p>Weiteres</p>
			<?php
			renderErrors( 'terms-of-service' ); ?>
            <div class="form-input form-input--checkbox">
                <input id="terms-of-service" name="terms-of-service" type="checkbox"/>
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