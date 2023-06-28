<?php

namespace SaeInstitute\PhpGetText;

use Gettext\Generator\MoGenerator;
use Gettext\Generator\PoGenerator;
use Gettext\Loader\PoLoader;
use Gettext\Scanner\PhpScanner;
use Gettext\Translations;

require_once  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$poLoader = new PoLoader();
$previousTranslations = $poLoader->loadFile( 'locales/en_US/LC_MESSAGES/domain1.po' );

$phpScanner = new PhpScanner(
	Translations::create( 'domain1' )
);

$phpScanner->setDefaultDomain( 'domain1' );

$phpScanner->extractCommentsStartingWith( 'i18n:' );

foreach( glob( __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '**/*.php' ) as $file ) {
	$phpScanner->scanFile( $file );
}

foreach( $phpScanner->getTranslations() as $translation ) {
	$previousTranslations = $previousTranslations->mergeWith( $translation );
}

$poGenerator = new PoGenerator();
$poGenerator->generateFile( $previousTranslations, 'locales/en_US/LC_MESSAGES/domain1.po' );
