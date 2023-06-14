<?php

namespace App;

require_once __DIR__ . '/../bootstrap.php';

switch( $_GET[ 'page' ] ?? null ) {
	case 'login':
		$errors = [];

		if ( isPost() || hasPostData() ) {
			require_once APP_FUNCTIONS_DIR . DIRECTORY_SEPARATOR . 'login.php';
			require_once APP_FUNCTIONS_DIR . DIRECTORY_SEPARATOR . 'users.php';
		}

		getHeader( 'Login' );
		include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'login' . DIRECTORY_SEPARATOR . 'form.php';
		getFooter();
		break;

	case 'register':
		$errors = [];

		if ( isPost() || hasPostData() ) {
			require_once APP_FUNCTIONS_DIR . DIRECTORY_SEPARATOR . 'registration.php';
			require_once APP_FUNCTIONS_DIR . DIRECTORY_SEPARATOR . 'users.php';

			if ( register( $errors ) ) {
				header( 'Location: /?page=login&redirectFrom=register' );
				exit;
			}
		}

		getHeader( 'Registration' );
		include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'register' . DIRECTORY_SEPARATOR . 'form.php';
		getFooter();
		break;

	case null:
	case 'welcome':
		getHeader( 'Index' );
		include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'index' . DIRECTORY_SEPARATOR . 'welcome.php';
		getFooter();
		break;

	default:
		http_response_code( 404 );
		echo "404";
		break;
}
