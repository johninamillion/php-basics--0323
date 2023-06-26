<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

$errors = [];

function validateGender( ?string $gender, array &$errors ) : bool {
    // überprüfen ob ein geschlecht ausgewählt wurde
	if ( is_null( $gender ) ) {
		$errors[ 'gender' ][] = 'Bitte wählen Sie ein Geschlecht aus.';
	}
    // überprüfen ob der wert von gender im array mit allen optionen vorhanden ist
    elseif ( !in_array( $gender, [ 'male', 'female' ] ) ) {
        $errors[ 'gender' ][] = 'Bitte wähle ein verfügbares Geschlecht aus.';
    }

    return !isset( $errors[ 'gender' ] );
}

function validateUsername( ?string $username,  array &$errors ) : bool {
    // überprüfen ob der Nutername leer ist
    if ( is_null( $username ) || empty( $username ) ) {
        $errors[ 'username' ][] = 'Bitte geben Sie einen Benutzernamen ein.';
    }
    // überprüfen ob der Nutername kürzer als 4 Zeichen ist
    elseif ( strlen( $username ) < 4 ) {
        $errors[ 'username' ][] = 'Der Benutzername muss mindestens 4 Zeichen lang sein.';
    }
    // überprüfen ob der Nutername länger als 16 Zeichen ist
    elseif ( strlen( $username ) > 16 ) {
        $errors[ 'username' ][] = 'Der Benutzername darf maximal 16 Zeichen lang sein.';
    }
    // überprüfen ob der Nutername whitespace (leerzeichen/tabs) enthält
    if ( preg_match( '/\s/', $username ) ) {
        $errors[ 'username' ][] = 'Der Benutzername darf keine Leerzeichen enthalten.';
    }

    return !isset( $errors[ 'username' ] );
}

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
	$gender         = filter_input( INPUT_POST, 'gender' );
	$username       = filter_input( INPUT_POST, 'username' );
	$email          = filter_input( INPUT_POST, 'email' );
	$password       = filter_input( INPUT_POST, 'password' );
	$country        = filter_input( INPUT_POST, 'country' );
	$termsOfService = filter_input( INPUT_POST, 'terms-of-service' );

	$validateGender   = validateGender( $gender, $errors );
	$validateUsername = validateUsername( $username, $errors );
}
?>
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
	        <?php foreach( $errors[ 'gender' ] as $error ): ?>
                <p><?= $error ?></p>
	        <?php endforeach; ?>
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
	        <?php foreach( $errors[ 'username' ] as $error ): ?>
                <p><?= $error ?></p>
	        <?php endforeach; ?>
            <input id="username" name="username" type="text" required/>
        </div>
        <div class="form-group form-group--text">
            <label for="email">E-Mail Adresse</label>
            <input id="email" name="email" type="email" required/>
        </div>
        <div class="form-group form-group--text">
            <label for="password">Passwort</label>
            <input id="password" name="password" type="password" required/>
        </div>
        <div class="form-group form-group--select">
            <label for="country">Nationalität</label>
            <select id="country" name="country" size="4" required>
                <option value="germany">Deutschland</option>
                <option value="austria">Österreich</option>
                <option value="switzerland">Schweiz</option>
                <option value="france">Frankreich</option>
            </select>
        </div>
        <div class="form-group form-group--checkbox">
            <p>Weiteres</p>
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