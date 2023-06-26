<?php

class Autobahn {

	public static int $tempoLimit = 130;

	public function __construct(
		private int $maxSpeed
	) {}

	public function getMaxSpeed() : int {

		return $this->maxSpeed < self::$tempoLimit ? $this->maxSpeed : self::$tempoLimit;
	}

}


$a1 = new Autobahn(100);
$a7 = new Autobahn(180);

var_dump( $a1->getMaxSpeed(), $a7->getMaxSpeed() );
Autobahn::$tempoLimit = 50;
var_dump( $a1->getMaxSpeed(), $a7->getMaxSpeed() );