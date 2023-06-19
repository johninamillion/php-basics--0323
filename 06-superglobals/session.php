<?php

session_start();

$_SESSION[ 'test' ] = 1;

function login( string $username ) : void {
	if ( isset( $_SESSION[ 'login' ] ) === FALSE ) {
		$_SESSION[ 'login' ][ 'username' ] = $username;
		$_SESSION[ 'login' ][ 'time' ] = $_SERVER[ 'REQUEST_TIME' ];
	}
}

function logout() : void {
	unset( $_SESSION[ 'login' ] );
//	session_destroy();
}

function watchTimeout() : void {
	if ( isset( $_SESSION[ 'login' ] ) === FALSE )
		return;

	$now = $_SERVER[ 'REQUEST_TIME' ];

	if ( $now - $_SESSION[ 'login' ][ 'time' ] > 10 ) {
		logout();
	}
	else {
		$_SESSION[ 'login' ][ 'time' ] = $now;
	}
}

function isLoggedIn() : bool {

	return isset( $_SESSION[ 'login' ] );
}

//login( 'admin' );
watchTimeout();
var_dump( $_SESSION );