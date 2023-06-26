<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

// errors global definieren
$errors = [];

$gender_options = [
	'male' => 'Männlich',
	'female' => 'Weiblich',
	'non-binary' => 'Non-Binär'
];

$country_options = [
	'germany' => 'Deutschland',
	'austria' => 'Österreich',
	'switzerland' => 'Schweiz',
	'france' => 'Frankreich',
	'spain' => 'Spanien',
	'greece' => 'Griechenland'
];

// einbinden von template functions (render_errors), wird für die fehlerfreie anzeige von templates benötigt
require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';


// überprüfen ob das Formular abgeschickt wurde
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
	// einbinden von register functions (register) wird für die registrierung und validierung benötigt
	require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'register.php';

	// formular abschicken und nutzereingaben validieren
	if ( register( $errors ) ) {
		// wenn Nutzereingaben valide sind success template einbinden
	    include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register-success.php';
		// code hier beenden, damit das form template nicht eingebunden wird
		exit();
    }
}

// wenn kein formular abgeschickt wurde, oder die nutzereingaben nicht valide sind, form template einbinden
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'register-form.php';