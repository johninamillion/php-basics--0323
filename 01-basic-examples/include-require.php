<?php

/*
 * Die require-Anweisung bindet die angegebene Datei in das Skript ein und wertet sie zur Laufzeit aus.
 * Wenn die Datei nicht gefunden wird oder einen Fehler aufweist, wird ein schwerwiegender Fehler generiert, und die Skriptausführung wird abgebrochen.
 * require wird normalerweise verwendet, um essentielle Dateien einzubinden, die für das korrekte Funktionieren des Skripts unerlässlich sind.
 * Wenn die erforderliche Datei nicht gefunden oder nicht geladen werden kann, deutet dies auf einen kritischen Fehler hin, der behoben werden muss.
 *
 * __DIR__ ist eine magische Konstante in PHP, die den absoluten Pfad des Verzeichnisses des aktuellen Skriptes zurückgibt.
 * DIRECTORY_SEPARATOR ist eine vordefinierte Konstante in PHP, die das Verzeichnistrennzeichen für das aktuelle Betriebssystem repräsentiert.
 */
//require 'error-handling.php';
//require './error-handling.php';
//require __DIR__ . '/error-handling.php';
//require __DIR__ . DIRECTORY_SEPARATOR . 'error-handling.php';

/*
 * Die require_once-Anweisung funktioniert ähnlich wie require, stellt jedoch sicher, dass die angegebene Datei nur einmal eingebunden wird,
 * selbst wenn die Anweisung an mehreren Stellen im Skript aufgerufen wird.
 * Wenn die Datei bereits zuvor eingebunden wurde, wird sie nicht erneut geladen.
 * Durch die Verwendung von require_once können Probleme mit doppelten Deklarationen oder Funktionen vermieden werden,
 * die auftreten können, wenn eine Datei mehrmals eingebunden wird.
 */
//require_once __DIR__ . DIRECTORY_SEPARATOR . '/error-handling.php';

/*
 * Die include-Anweisung bindet die angegebene Datei in das Skript ein und wertet sie zur Laufzeit aus.
 * Falls die Datei nicht gefunden wird oder einen Fehler aufweist, wird eine Warnung ausgegeben, aber die Ausführung des Skripts wird fortgesetzt.
 * include wird normalerweise verwendet, um optionale Dateien einzubinden oder Code, der auch ohne die inkludierte Datei weiterlaufen kann.
 */
//include __DIR__ . DIRECTORY_SEPARATOR . '/error-handling.php';

/*
 * Die include_once-Anweisung funktioniert ähnlich wie include, stellt jedoch sicher,
 * dass die angegebene Datei nur einmal eingebunden wird, selbst wenn die Anweisung an mehreren Stellen im Skript aufgerufen wird.
 * Wenn die Datei bereits zuvor eingebunden wurde, wird sie nicht erneut geladen.
 * Dadurch können Probleme mit doppelten Deklarationen oder Funktionen vermieden werden.
 */
//include_once __DIR__ . DIRECTORY_SEPARATOR . '/error-handling.php';