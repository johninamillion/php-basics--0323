<?php

/**
 * Gibt es POST-Daten?
 * @return bool
 */
function hasPostData() : bool {
	//	return empty( $_POST ) === FALSE;
	return !empty( $_POST );
}

/**
 * @param string $password
 * @return string
 */
function hashPassword( string $password ) : string {

	return hash( 'sha512', $password );
}

/**
 * Ist der Request ein POST-Request?
 * @return bool
 */
function isPost() : bool {
	return $_SERVER[ 'REQUEST_METHOD' ] === 'POST';
}

/**
 * Sind die POST-Daten valide? Sind alle Keys vorhanden?
 * @param array $data
 * @return bool
 */
function isValidPostData( array $data, array $keys ) : bool {
	$valid = TRUE;

	foreach ( $keys as $key ) {
		if ( array_key_exists( $key, $data ) === FALSE ) {
			$valid = FALSE;
			break;
		}
	}

	return $valid;
}