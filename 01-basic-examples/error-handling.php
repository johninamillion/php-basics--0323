<?php

/*
 * Die Funktion error_reporting ermöglicht das Festlegen des Fehlerberichtslevels, d.h. welchen Arten von Fehlern PHP Bericht erstatten soll.
 * Das Funktionsargument besteht aus einer Konstante oder einer Kombination von Konstanten, die die gewünschten Fehlerkategorien darstellen.
 * Mit error_reporting kann festgelegt werden, ob PHP alle Fehler, nur bestimmte Arten von Fehlern oder gar keine Fehler anzeigen soll.
 * Der Fehlerberichtslevel wird normalerweise in der PHP-Konfigurationsdatei (php.ini) festgelegt, kann aber auch zur Laufzeit mit ini_set geändert werden.
 */
error_reporting( E_ALL );

/*
 * Die Funktion ini_set ermöglicht das Ändern von Konfigurationsoptionen zur Laufzeit.
 * Sie wird verwendet, um den Wert einer PHP-Konfigurationsoption anzupassen.
 * Der Funktion werden zwei Argumente übergeben: der Name der Option und der neue Wert.
 * ini_set wird häufig verwendet, um die Konfigurationsoptionen für die Fehlerberichterstattung (error_reporting) oder Anzeige von Fehlern (display_errors) zu ändern.
 */
ini_set( 'display_errors', '1' );

// error: call to undefined function
// test();

// warning: array to string conversion
// (string) [1,2,3];

// notice: Ignoring session_start() because a session is already
//session_start();
//session_start();
