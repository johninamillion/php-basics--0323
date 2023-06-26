<?php

class Singleton {

	private static ?self $instance = null;

	public static function getInstance() : ?self {

		return self::$instance === null ? self::$instance = new self() : self::$instance;
	}

}

// falsche anwendung, singleton darf nicht instanziert werden
$singleton1 = new Singleton();
$singleton2 = new Singleton();

// dieselbe instanz in zwei variablen speichern
$singleton3 = Singleton::getInstance();
$singleton4 = Singleton::getInstance();

var_dump($singleton3, $singleton4);