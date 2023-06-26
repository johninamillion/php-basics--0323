<?php

function inputValue( string $inputName ) : string {
	$username = filter_input( INPUT_POST, $inputName );

	return $username ? ' value="' . $username . '"' : '';
}

function inputChecked( string $inputName, string $value ) : string {
	$input = filter_input( INPUT_POST, $inputName );

	return $input === $value ? ' checked' : '';
}

function inputSelected( string $inputName, string $value ) : string {
	$input = filter_input( INPUT_POST, $inputName );

	return $input === $value ? ' selected' : '';
}

function renderErrors( string $inputName ) : void {
	global $errors;

	if ( isset( $errors[ $inputName ] ) ) {
		echo "<ul class=\"errors\">";
		foreach ( $errors[ $inputName ] as $error ) {
			echo "<li class=\"error\">$error</li>";
		}
		echo "</ul>";
	}
}