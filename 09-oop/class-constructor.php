<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

class Auto {

	private string $brand;

	public function __construct( string $brand ) {
		$this->brand = $brand;
	}

//	public function getBrand() : string {
//
//		return $this->brand;
//	}

//	public function setBrand( string $brand ) : void {
//		$this->brand = $brand;
//	}

	public function start() : void {
		echo "{$this->brand} gestartet";
	}

}

$bmw = new Auto( 'BMW' );
$mercedes = new Auto( 'Mercedes' );

$bmw->start();