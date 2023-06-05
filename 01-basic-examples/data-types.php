<?php

/*
 * Strings
 *
 * Ein String ist eine Zeichenkette, die eine Sequenz von Zeichen darstellt, wie z. B. Buchstaben, Zahlen oder Sonderzeichen.
 * Strings werden in PHP mit Anführungszeichen (' oder ") umschlossen.
 */

//Beispiel in JavaScript
//let name = 'John';
//let welcome1 = 'Hello ' + name + 's Hund';
//let welcome2 = `Hello ${name}s Hund`;
$name = 'John';

//Fehlerhaft: Kein Zugriff auf die Variable in einfach Anführungszeichen
//$welcome1 = 'Hallo $name';
$welcome1 = 'Hallo ' . $name . 's Hund';
//echo $welcome1;

//Fehlhaft: Variable nicht eingeschränkt und verfälscht
//$welcome2 = "Hallo $names Hund";
$welcome2 = "Hallo {$name}s Hund";
//echo $welcome2;

/**
 * Integer
 *
 * Ein Integer ist ein ganzzahliger numerischer Datentyp, der positive und negative ganze Zahlen repräsentiert.
 * Integer-Werte haben keine Dezimalstellen oder Nachkommastellen.
 */
$x = 2;  // 2
$y = 10; // 2

$a = $x + $y; //12
$b = $y - $x; //8
$c = $x * $y; //20
$d = $y / $x; //5
$e = $y % $x; //0

/**
 * Floats
 *
 * Ein Float ist ein Dezimalzahl-Datentyp, der Fließkommazahlen darstellt.
 * Float-Werte können positive und negative Zahlen mit Dezimalstellen enthalten.
 */
$v = 1.2345;
$w = 5.4321;

$f = $v + $w; //6.6666
$g = $w - $v; //4.1976
$h = $v * $w; //6.72839545
$i = $w / $v; //4.3956043956044

/**
 * Array
 *
 * Ein Array ist eine geordnete Sammlung von Werten, die über einen Index zugänglich sind.
 * Ein Array kann Werte unterschiedlicher Datentypen enthalten, einschließlich Strings, Integers, Floats oder sogar andere Arrays.
 */
//$fruits = array( 'apple', 'banane', 'cherry' );
$fruits = [ 'apple', 'banane', 'cherry' ];

// einen Wert hinzufügen
$fruits[] = 'orange';
// einen Wert an das Ende vom Array anfügen (erlaubt mehrere Werte)
array_push( $fruits, 'kiwi', 'ananas' );
// einen Wert an den Anfang vom Array anfügen
array_unshift( $fruits, 'mango' );

// überprüfen ob ein Wert im Array existiert
$apple_exists = in_array( 'apple', $fruits );

// print_r gibt den Array mit seinen Indexes und Values aus
//print_r( $fruits );

// var_dump gibt den Array mit seinen Indexes und Values aus und gibt zusätzlich den Datentyp aus
//var_dump( $fruits );

//Ausgabe über for schleife
//for ( $i = 0; $i < count( $fruits ); $i++ ) {
//	echo $fruits[ $i ] . ' hat den index ' . $i . '<br>';
//}

//foreach( $fruits as $fruit ) {
//	echo $fruit . '<br>';
//}

//foreach( $fruits as $index => $fruit ) {
//	echo $fruit . ' hat den index ' . $index . '<br>';
//}

/**
 * Assoziativen Array
 */
$colors = [ 'apple' => 'red', 'banane' => 'yellow', 'cherry' => 'red' ];

$colors[ 'mango' ] = 'orange';
//foreach ( $colors as $color ) {
//	echo $color . '<br>';
//}

//foreach ( $colors as $fruit => $color ) {
//
//	echo $color . ' hat den key ' . $fruit . '<br>';
//}

// überprüfen ob ein Key im Array existiert
$cherry_exists = array_key_exists( 'cherry', $colors );

/**
 * Boolean
 *
 * Ein Boolean ist ein Datentyp, der nur zwei Werte annehmen kann: true oder false.
 * Booleans werden häufig verwendet, um Bedingungen in Kontrollstrukturen wie if-Anweisungen zu testen.
 */
$true = TRUE;
$false = FALSE;
