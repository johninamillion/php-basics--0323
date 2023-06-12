<?php

// &&   Überprüft ob zwei oder mehrere Vergleiche erfüllt sind
// ||   Überprüft ob einer von zwei oder mehreren Vergleich erfüllt ist

$condition_var1 = FALSE;
$condition_var2 = TRUE;

$comparison1 = $condition_var1 === TRUE;  // false
$comparison2 = $condition_var2 === TRUE;  // true

if ( $comparison1 && $comparison2 ) {
	echo "Beide Bedingungen sind erfüllt";
}
elseif ( $comparison1 || $comparison2 ) {
	if ( $comparison1 )
		echo "Bedingung 1 ist erfüllt";
	else
		echo "Bedingung 2 ist erfüllt";
}
else {
	echo "Keine Bedingung ist erfüllt";
}