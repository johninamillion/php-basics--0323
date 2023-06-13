<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bootstrap.php';

global $errors;
$errors = [];

if ( isPost() && hasPostData() ) {
	if ( register( $errors ) ) {
		include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'register/success.php';
		return;
	}
}

include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'register/form.php';