<?php

function get_users() : array {
	$users = [];
	$usersString = file_get_contents( APP_USERS_TXT );
	$usersArray = explode( "\n", $usersString );

	foreach ( $usersArray as $user ) {
		if ( empty( $user ) )
			continue;

		$userData = explode( ';', $user );

		array_push( $users, [
			'name' => $userData[0],
			'email' => $userData[1],
			'password' => $userData[2]
		] );
	}

	return $users;
}

function emailExists( string $email ) : bool {
	$users = get_users();

	foreach( $users as $user ) {
		if ( $user['email'] === $email )
			return TRUE;
	}

	return FALSE;
}

function usernameExists( string $username ) : bool {
	$users = get_users();

	foreach( $users as $user ) {
		if ( $user['name'] === $username )
			return TRUE;
	}

	return FALSE;
}

function getUserByUsername( string $username ) : ?array {
	$users = get_users();

	foreach( $users as $user ) {
		if ( $user['name'] === $username )
			return $user;
	}

	return null;
}