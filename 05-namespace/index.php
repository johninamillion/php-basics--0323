<?php

namespace app;

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

include_once __DIR__ . DIRECTORY_SEPARATOR . 'events' . DIRECTORY_SEPARATOR . 'function.php';
include_once __DIR__ . DIRECTORY_SEPARATOR . 'users' . DIRECTORY_SEPARATOR . 'function.php';

var_dump( events\getData(), users\getData() );
