<?php

class Auto {

	public string $marke = 'BMW';

	public function start() : void {
		echo "{$this->marke} gestartet";
	}

}

// instanzieren der Klasse auto, objekt in der variablen bmw speichern
$bmw = new Auto();
// instanzieren der Klasse auto, objekt in der variablen mercedes speichern
$mercedes = new Auto();
// schreiben der marke in die variable marke des objekts bmw
$mercedes->marke = 'Mercedes';


var_dump( $mercedes );
//$mercedes->start();