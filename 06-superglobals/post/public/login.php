<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bootstrap.php';

global $errors;
$errors = [];

if ( isPost() && hasPostData() ) {
	$username = filter_input( INPUT_POST, 'username' );
	$password = filter_input( INPUT_POST, 'password' );
	$hashedPassword = hashPassword( $password );

	$user = getUserByUsername( $username );

	if ( $user === null ) {
		exit( 'USERNAME DOESNT EXIST' );
	}

	if ( $user['password'] !== $hashedPassword ) {
		exit( 'WRONG PASSWORD' );
	}
	$_SESSION['user'] = $user['name'];
	$_SESSION['login'] = true;
}

include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'login/form.php';