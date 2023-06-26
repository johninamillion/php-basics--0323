<?php

namespace SaeInstitute\WebPHP;

function autoload( string $class ) : void {
	// replace namespace in class with source directory
	$source_dir = str_replace( __NAMESPACE__, WEBPHP_SOURCE_DIR, $class );
	// replace namespace separator with directory separator in class
	$create_path = str_replace( '\\', DIRECTORY_SEPARATOR, $source_dir );
	// create file path
	$file_path = $create_path . '.php';


	if ( file_exists( $file_path ) )
		require_once $file_path;
}

spl_autoload_register( __NAMESPACE__ .'\autoload' );