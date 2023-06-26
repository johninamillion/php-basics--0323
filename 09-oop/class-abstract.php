<?php

// abstract definiert das die klasse nicht instanziert werden kann
abstract class Session {

	public static function get( string $key ) : mixed {

		return $_SESSION[$key] ?? null;
	}

	public static function has( string $key ) : bool {

		return isset( $_SESSION[$key] );
	}

	public static function set( string $key, mixed $value ) : void {

		$_SESSION[$key] = $value;
	}

	public static function start() : void {
		session_start();

		if ( !self::has( 'SESSION_START' ) ) {
			self::set( 'SESSION_START', time() );
		}
	}

}

var_dump( $_SESSION );