<?php

namespace App;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

if ( APP_DEBUG ) {
	// Error Reporting anschalten (nicht LIVE!)
	error_reporting( E_ALL );
	ini_set( 'display_errors', 1 );
}

require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'data.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'shared.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'view.php';