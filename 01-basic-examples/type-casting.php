<?php

/*
 * Type Casting
 *
 * Type Casting, auch bekannt als Typumwandlung oder Typkonvertierung, bezieht sich auf das Ändern des Datentyps einer Variable in PHP. Es ermöglicht Ihnen, den Wert einer Variable von einem Datentyp in einen anderen umzuwandeln.
 *
 * In PHP stehen verschiedene Möglichkeiten für Type Casting zur Verfügung:
 *
 * Implizite Typumwandlung:
 * In bestimmten Situationen führt PHP automatisch eine implizite Typumwandlung durch, um den Datentyp zu ändern. Zum Beispiel, wenn Sie eine Ganzzahl (Integer) mit einer Fließkommazahl (Float) addieren, wird die Ganzzahl implizit in eine Fließkommazahl umgewandelt, um das Ergebnis korrekt zu berechnen.
 *
 * Explizite Typumwandlung:
 * Mit expliziter Typumwandlung können Sie den Datentyp einer Variablen manuell ändern. PHP bietet verschiedene Methoden für explizite Typumwandlungen:
 *
 * Casting-Operatoren:
 *  - (int) oder (integer): Wandelt den Wert in einen Ganzzahl (Integer) um.
 *  - (float) oder (double) oder (real): Wandelt den Wert in eine Fließkommazahl (Float) um.
 *  - (string): Wandelt den Wert in eine Zeichenkette (String) um.
 *  - (bool) oder (boolean): Wandelt den Wert in einen booleschen Wert (Boolean) um.
 *  - (array): Wandelt den Wert in ein Array um.
 *  - (object): Wandelt den Wert in ein Objekt um.
 * Type Casting-Funktionen:
 *  - intval(): Wandelt den Wert in eine Ganzzahl (Integer) um.
 *  - floatval() oder doubleval(): Wandelt den Wert in eine Fließkommazahl (Float) um.
 *  - strval(): Wandelt den Wert in eine Zeichenkette (String) um.
 *  - boolval(): Wandelt den Wert in einen booleschen Wert (Boolean) um.
 *  - settype(): Ändert den Datentyp einer Variable.
 */

$array_to_string = (string) [ 1, 2, 3 ];
$int_to_string = (string) 123;
$float_to_string = (string) 123.456;
$bool_to_string = (string) TRUE;

//var_dump( $array_to_string, $int_to_string, $float_to_string, $bool_to_string );

$string_to_int = (int) "123";
$float_to_int = (int) 123.456;
$bool_to_int = (int) TRUE;
$array_to_int = (int) [];

//var_dump( $string_to_int, $float_to_int, $bool_to_int, $array_to_int );

$string_to_bool_false = (bool) "";
$string_to_bool_true = (bool) "1";
$int_to_bool_true = (bool) 1;
$int_to_bool_false = (bool) 0;
$array_to_bool_true = (bool) [ 1, 2, 3 ];
$array_to_bool_false = (bool) [];

//var_dump( $array_to_bool_true, $array_to_bool_false );

$string_to_array = (array) "123";
$int_to_array = (array) 123;
$float_to_array = (array) 123.456;
$bool_to_array = (array) TRUE;

//var_dump( $string_to_array, $int_to_array, $float_to_array, $bool_to_array );
