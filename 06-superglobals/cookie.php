<?php

session_start();
if ( isset( $_COOKIE[ 'first-cookie' ] ) === FALSE ) {
	setcookie( 'first-cookie', '1', time() + ( 60 * 60 * 24 ), '/' );
}
if ( isset( $_COOKIE[ 'second-cookie' ] ) === FALSE ) {
	setcookie( 'second-cookie', '2', time() + ( 60 * 60 * 24 ), '/cookie.php' );
}

if ( isset( $_COOKIE[ 'third-cookie' ] ) === FALSE ) {
	setcookie( 'third-cookie', '3', time() + ( 60 * 60 * 24 ), '/cookie.php', 'localhost', TRUE, TRUE );
}

var_dump( $_COOKIE );
