<?php

function register( array &$errors = [] ) : bool {
	$gender         = filter_input( INPUT_POST, 'gender' );
	$username       = filter_input( INPUT_POST, 'username' );
	$email          = filter_input( INPUT_POST, 'email' );
	$password       = filter_input( INPUT_POST, 'password' );
	$country        = filter_input( INPUT_POST, 'country' );
	$termsOfService = filter_input( INPUT_POST, 'terms-of-service' );

	$validateGender   = validateGender( $gender, $errors );
	$validateUsername = validateUsername( $username, $errors );
	$validateEmail    = validateEmail( $email, $errors );
	$validatePassword = validatePassword( $password, $errors );
	$validateCountry  = validateCountry( $country, $errors );
	$validateTermsOfService = validateTermsOfService( $termsOfService, $errors );

	return  $validateGender
		&&  $validateUsername
		&&  $validateEmail
		&&  $validatePassword
		&&  $validateCountry
		&&  $validateTermsOfService;
}

function validateCountry( ?string $country, array &$errors  ) : bool {
	// überprüfen ob ein land ausgewählt wurde
	if ( is_null( $country ) ) {
		$errors[ 'country' ][] = 'Bitte wählen Sie ein Land aus.';
	}
	elseif ( !in_array( $country, [ 'germany', 'austria', 'switzerland', 'france' ] ) ) {
		$errors[ 'country' ][] = 'Bitte wählen Sie ein verfügbares Land aus.';
	}

	return !isset( $errors[ 'country' ] );
}

function validateEmail( ?string $email, array &$errors ) : bool {
	// überprüfen ob eine e-amil angegeben wurde
	if ( is_null( $email ) || empty( $email ) ) {
		$errors[ 'email' ][] = 'Bitte geben Sie eine E-Mail Adresse ein.';
	}
	// überprüfen ob die e-mail adresse valide ist
	elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[ 'email' ][] = 'Die E-Mail Adresse ist ungültig.';
	}

	return !isset( $errors[ 'email' ] );
}

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

function validatePassword( ?string $password, array &$errors ) : bool {
	// überprüfen ob das passwort leer ist
	if ( is_null( $password ) || empty( $password ) ) {
		$errors[ 'password' ][] = 'Bitte geben Sie ein Passwort ein.';
	}
	// überprüfen ob das passwort kürzer als 8 Zeichen ist
	elseif ( strlen( $password ) < 8 ) {
		$errors[ 'password' ][] = 'Das Passwort muss mindestens 8 Zeichen lang sein.';
	}
	// überprüfen ob das passwort länger als 16 Zeichen ist
	elseif ( strlen( $password ) > 16 ) {
		$errors[ 'password' ][] = 'Das Passwort darf maximal 16 Zeichen lang sein.';
	}
	// überprüfen ob das passwort keine zahlen enthält
	if ( !preg_match( '/\d/', $password ) ) {
		$errors[ 'password' ][] = 'Das Passwort muss mindestens eine Zahl enthalten.';
	}
	// überprüfen ob das passwort keine kleinbuchstaben enthält
	if ( !preg_match( '/[a-z]/', $password ) ) {
		$errors[ 'password' ][] = 'Das Passwort muss mindestens einen kleinen Buchstaben enthalten.';
	}
	// überprüfen ob das passwort keine großbuchstaben enthält
	if ( !preg_match( '/[A-Z]/', $password ) ) {
		$errors[ 'password' ][] = 'Das Passwort muss mindestens einen großen Buchstaben enthalten.';
	}
	// überprüfen ob das passwort keine sonderzeichen enthält
	if ( !preg_match( '/\W/', $password ) ) {
		$errors[ 'password' ][] = 'Das Passwort muss mindestens ein Sonderzeichen enthalten.';
	}
	// überprüfen ob das passwort leerzeichen enthält
	if ( preg_match( '/\s/', $password ) ) {
		$errors[ 'password' ][] = 'Das Passwort darf keine Leerzeichen enthalten.';
	}

	return !isset( $errors[ 'password' ] );
}

function validateTermsOfService( ?string $termsOfService, array &$errors ) {
	// überprüfen ob die nutzungsbedingungen akzeptiert wurden
	if ( is_null( $termsOfService ) ) {
		$errors[ 'terms-of-service' ][] = 'Bitte akzeptieren Sie die Nutzungsbedingungen.';
	}

	return !isset( $errors[ 'terms-of-service' ] );
}

function validateUsername( ?string $username, array &$errors ) : bool {
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
	if ( !is_null( $username ) && preg_match( '/\s/', $username ) ) {
		$errors[ 'username' ][] = 'Der Benutzername darf keine Leerzeichen enthalten.';
	}

	return !isset( $errors[ 'username' ] );
}