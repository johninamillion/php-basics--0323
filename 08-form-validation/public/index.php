<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';

$errors = [];

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
	require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'register.php';

	if ( register( $errors ) ) {
	    include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register-success.php';
		exit();
    }
}

include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register-form.php';