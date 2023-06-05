<?php

include './error-handling.php';

$username = 'admian';
$errors = [];

function validate( string $username, array &$errors = [] ) : bool {
	if ( empty( $username ) ) {
		$errors[] = 'Username is required';
	}
	if ( strlen( $username ) < 6 ) {
		$errors[] = 'Username must be at least 6 characters';
	}
	if ( strlen( $username ) > 12 ) {
		$errors[] = 'Username must be less than 12 characters';
	}

	return count( $errors ) === 0;
}

$isValid = validate( $username, $errors );

var_dump( $isValid );

if ($isValid ) {
	echo "<p>Username is valid</p>";
}
else {
	foreach ( $errors as $error ) {
		echo "<p>{$error}</p>";
	}
}
