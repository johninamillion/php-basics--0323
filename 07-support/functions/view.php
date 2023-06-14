<?php

namespace App;

function getHeader( string $title ) : void {
	include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'header.php';
}

function getFooter() : void {
	include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'footer.php';
}

function displayErrors( array $errors, string $name ) : void {
	if ( empty( $errors ) || isset( $errors[ $name ] ) === FALSE )
		return;

	echo "<ul class=\"errors\">";
	foreach( $errors[ $name ] as $error ) {
		echo "<li>{$error}</li>";
	}
	echo "</ul>";
}