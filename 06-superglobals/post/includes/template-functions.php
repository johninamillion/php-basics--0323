<?php

function display_errors( array $errors, string $name ) : void {
	if ( empty( $errors ) || isset( $errors[ $name ] ) === FALSE )
		return;

	echo "<ul class=\"errors\">";
	foreach( $errors[ $name ] as $error ) {
		echo "<li>{$error}</li>";
	}
	echo "</ul>";
}