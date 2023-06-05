<?php

include './error-handling.php';

/*
 * Variablennamen in PHP müssen mit einem Dollarzeichen ($) beginnen, gefolgt von einem Buchstaben oder einem Unterstrich.
 * Sie können Buchstaben, Zahlen und Unterstriche enthalten, jedoch keine Leerzeichen oder Sonderzeichen.
 * Variablen können verschiedene Datentypen enthalten, wie z.B. Strings, Integer, Floats, Booleans, Arrays, Objekte oder NULL-Werte.
 * In PHP sind Variablen dynamisch typisiert, d.h. Sie können den Datentyp einer Variable während der Laufzeit ändern.
 *
 * Es ist wichtig zu beachten, dass die Verwendung globaler Variablen mit Vorsicht erfolgen sollte,
 * da sie das Konzept der Kapselung beeinträchtigen und potenziell zu unerwarteten Nebeneffekten führen können.
 * Der Zugriff auf globale Variablen sollte auf das erforderliche Minimum beschränkt und sorgfältig verwaltet werden, um mögliche Probleme zu vermeiden.
 */
$a = 'A';
$b = $a;
$c = 'B';

// var_dump($a, $b);

/*
 * In PHP können Sie Referenzen verwenden, um auf den gleichen Wert zu verweisen, der in mehreren Variablen gespeichert ist.
 * Mit Referenzen können Sie eine Variable erstellen, die auf den Wert einer anderen Variable verweist.
 * Änderungen an der referenzierten Variable wirken sich auch auf die referenzierende Variable aus.
 *
 * Die Verwendung von Referenzvariablen ermöglicht es, den Wert einer Variable innerhalb einer Funktion zu ändern und die Änderungen auf die ursprüngliche Variable anzuwenden.
 * Dies kann in einigen Situationen nützlich sein, sollte jedoch mit Vorsicht verwendet werden, um mögliche Seiteneffekte zu vermeiden.
 */
$x = 'X';
$y = &$x;
$x = 'Y';

// var_dump($x, $y);

/**
 * Ändert den Wert der globalen Variable $a auf 'B'.
 * Diese Funktion greift auf die globale Variable $a zu und ändert ihren Wert auf 'B'.
 * Der ursprüngliche Wert von $a wird dabei überschrieben und durch 'B' ersetzt.
 * Die Änderung betrifft die globale Variable $a und macht sie gleich 'B'.
 *
 * Globale Variablen:
 *
 * Eine globale Variable wird außerhalb von Funktionen oder Klassen deklariert und kann in allen Teilen des Codes verwendet werden, einschließlich Funktionen, Klassen oder Dateien.
 * Um eine globale Variable zu erstellen, verwenden Sie das Schlüsselwort global gefolgt vom Variablennamen innerhalb einer Funktion oder einem anderen Gültigkeitsbereich,
 * um auf die globale Variable zuzugreifen oder sie zu ändern.
 */
function aToB() {
	global $a;
	$a = 'B';
}

//aToB();
//echo $a;

/**
 * Erstellt eine lokale Variable $a und setzt ihren Wert auf den Wert von $x.
 * Gibt den aktualisierten Wert von $a zurück.
 * Diese Funktion erstellt eine lokale Variable $a und setzt ihren Wert auf den Wert von $x.
 * Die Änderung des Werts betrifft nur die lokale Variable $a innerhalb der Funktion.
 * Die ursprüngliche Variable $a außerhalb der Funktion bleibt unverändert.
 * Die Funktion gibt den aktualisierten Wert von $a zurück, der dann außerhalb der Funktion zugewiesen oder verwendet werden kann.
 *
 * @param string $a Der ursprüngliche Wert der Variable $a.
 * @param string $x Der Wert, auf den $a gesetzt werden soll.
 * @return string Der aktualisierte Wert der Variable $a.
 */
function aToX( string $a, string $x ) {
	$a = $x;

	return $a;
}

//$a = aToX( $a, 'X' );
//echo $a;

/**
 * Aktualisiert den Wert der übergebenen Referenzvariable $a auf den Wert von $y.
 * Diese Funktion nimmt eine Referenzvariable $a und einen Wert $y entgegen.
 * Sie ändert den Wert der Referenzvariable $a auf den Wert von $y.
 * Da es sich um eine Referenzvariable handelt, wird die ursprüngliche Variable, auf die $a verweist, außerhalb der Funktion ebenfalls aktualisiert.
 * Der Rückgabewert ist der aktualisierte Wert von $a.
 *
 * @param string &$a Die Referenzvariable, deren Wert aktualisiert werden soll.
 * @param string  $y Der Wert, auf den $a gesetzt werden soll.
 * @return string Der aktualisierte Wert von $a.
 */
function aToY( string &$a, string $y ) {
	$a = $y;
}

//aToY( $a, 'Y' );
//echo $a;