<?php

/**
 * Registriert einen Benutzer
 * @param array $errors
 * @return bool
 */
function register( array &$errors ) : bool {
	$registration = FALSE;

	if ( isValidPostData( $_POST, [ 'username', 'email', 'password', 'password_repeat' ] ) === FALSE ) {
		$errors['form'][] = 'Ungültige Daten';
		return $registration;
	}

	$username = filter_input( INPUT_POST, 'username', );
	$email = filter_input( INPUT_POST, 'email' );
	$password = filter_input( INPUT_POST, 'password' );
	$password_repeat = filter_input( INPUT_POST, 'password_repeat' );

	$validate_username = validateUsername( $username, $errors );
	$validate_email = validateEmail( $email, $errors );
	$validate_password = validatePassword( $password, $password_repeat, $errors );

	if ( $validate_username && $validate_email && $validate_password ) {
//		$md5_password = md5( $password );
//		$sha1_password = sha1( $password );
//		$sha256_password = hash( 'sha256', $password );
//		$bcrypt_password = password_hash( $password, PASSWORD_BCRYPT );
		$hashed_password = hashPassword( $password );

		$user_string = "$username;$email;$hashed_password\n";
		$registration = file_put_contents( APP_USERS_TXT, $user_string, FILE_APPEND );
	}

	return $registration !== FALSE;
}

function validateEmail( string $email, array &$errors = [] ) : bool {
	if ( emailExists( $email ) ) {
		$errors[ 'email' ][] = 'Die E-Mail Adresse ist bereits vergeben';
	}
	if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === FALSE ) {
		$errors[ 'email' ][] = 'Die E-Mail Adresse ist ungültig';
	}

	return empty( $errors[ 'email' ] );
}

function validatePassword( string $password, string $password_repeat, array &$errors = [] ) : bool {
	$len = strlen( $password );

//	// Passwort muss mindestens 8 Zeichen lang sein
//	if ( $len < 8 ) {
//		$errors[ 'password' ][] = 'Das Passwort muss mindestens 8 Zeichen lang sein';
//	}
//	// Passwort darf maximal 24 Zeichen lang sein
//	else if ( $len > 24 ) {
//		$errors[ 'password' ][] = 'Das Passwort darf maximal 24 Zeichen lang sein';
//	}
//	// Passwort darf keine Leerzeichen enthalten
//	if ( preg_match( '/\s/', $password ) == TRUE ) {
//		$errors[ 'password' ][] = 'Das Passwort darf keine Leerzeichen enthalten';
//	}
//	// Passwort muss mindestens einen Kleinbuchstaben enthalten
//	if ( preg_match( '/[a-z]/', $password ) == FALSE ) {
//		$errors[ 'password' ][] = 'Das Passwort muss mindestens einen Kleinbuchstaben enthalten';
//	}
//	// Passwort muss mindestens einen Großbuchstaben enthalten
//	if ( preg_match( '/[A-Z]/', $password ) == FALSE ) {
//		$errors[ 'password' ][] = 'Das Passwort muss mindestens einen Großbuchstaben enthalten';
//	}
//	// Passwort muss mindestens eine Zahl enthalten
//	if ( preg_match( '/\d/', $password ) == FALSE )  {
//		$errors[ 'password' ][] = 'Das Passwort muss mindestens eine Zahl enthalten';
//	}
//	// Passwort muss mindestens ein Sonderzeichen enthalten
//	if ( preg_match( '/\W/', $password ) == FALSE ) {
//		$errors[ 'password' ][] = 'Das Passwort muss mindestens ein Sonderzeichen enthalten';
//	}
//	// Passwörter müssen übereinstimmen
//	if ( $password !== $password_repeat ) {
//		$errors[ 'password_repeat' ][] = 'Die Passwörter stimmen nicht überein';
//	}

	return empty( $errors[ 'password' ] ) && empty( $errors[ 'password_repeat' ] );
}

function validateUsername( string $username, array &$errors = [] ) : bool {
	$len = strlen( $username );

	if ( usernameExists( $username ) ) {
		$errors[ 'username' ][] = 'Der Benutzername ist bereits vergeben';
	}
	if ( $len < 4 ) {
		$errors[ 'username' ][] = 'Der Benutzername muss mindestens 4 Zeichen lang sein';
	}
	else if ( $len > 12 ) {
		$errors[ 'username' ][] = 'Der Benutzername darf maximal 12 Zeichen lang sein';
	}
	if ( preg_match( '/\W/', $username ) == TRUE ) {
		$errors[ 'username' ][] = 'Der Benutzername darf nur Buchstaben, Zahlen und Unterstriche enthalten';
	}

	return empty( $errors[ 'username' ] );
}