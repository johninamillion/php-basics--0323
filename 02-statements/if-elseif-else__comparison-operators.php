<?php

$a = 2;
$b = "2";
$c = 2;

// >    Größer als
// <    Kleiner als
// >=   Größer oder gleich
// <=   Kleiner oder gleich
// <=>  Spaceship-Operator
// ==   Gleicher Wert
// ===  Gleicher Wert und gleicher Typ
// !=   Ungleicher Wert
// !==  Ungleicher Wert oder ungleicher Typ

$test = 1;

if ( $test ) {
	echo "IF";
}
elseif ( $a !== $c ) {
	echo "ELSEIF";
}
else {
	echo "ELSE";
}