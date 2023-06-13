<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

session_start();
var_dump( $_SESSION );

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';
require_once APP_INCLUDES_DIR . DIRECTORY_SEPARATOR . 'shared.php';
require_once APP_INCLUDES_DIR . DIRECTORY_SEPARATOR . 'registration.php';
require_once APP_INCLUDES_DIR . DIRECTORY_SEPARATOR . 'users.php';
require_once APP_INCLUDES_DIR . DIRECTORY_SEPARATOR . 'template-functions.php';
