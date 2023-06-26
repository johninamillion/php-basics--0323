<?php

class Autobahn {

	const TEMPOLIMIT = 130;

	public function __construct(
		private int $max_speed
	) {}

	public function getMaxSpeed() : int {

		return $this->max_speed < self::TEMPOLIMIT ? $this->max_speed : self::TEMPOLIMIT;
	}

}


$a1 = new Autobahn(100);
$a7 = new Autobahn(180);

var_dump( $a1->getMaxSpeed(), $a7->getMaxSpeed() );