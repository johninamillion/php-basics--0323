<?php

namespace SaeInstitute\PhpGetText;

error_reporting( E_ALL );
ini_set( 'display_errors' , '1' );

require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if ( isset( $_GET[ 'lang' ] ) ) {
	switch( $_GET[ 'lang' ] ) {
		case 'de':
			putenv('LC_MESSAGES=de_DE.utf8');
			setlocale(LC_MESSAGES, 'de_DE.utf8');
			break;
		default:
			putenv('LC_MESSAGES=en_US.utf8');
			setlocale(LC_MESSAGES, 'en_US.utf8');
			break;
	}

	// Specify location of translation tables
	bindtextdomain("domain1", __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . "locales");
	// Choose domain
	textdomain("domain1");
}

$helloWorld1 = gettext( 'Hello World!' );
echo _( 'Hello World!' );
echo _( 'How are you?' );
echo _( 'I am fine!' ); // i18n: I am very fine!
echo _( 'And you?' ); // i18n: I am very fine!
echo _( 'Braindamage' ); // i18n: I am very fine!
