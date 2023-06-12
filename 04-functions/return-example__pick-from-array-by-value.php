<?php

function grab_fruits_by_color( array $fruits_in_basket, string $color ) : array {
	$filtered_fruits = [];

	foreach ( $fruits_in_basket as $fruit => $fruit_color ) {
		if ( $fruit_color === $color ) {
			array_push( $filtered_fruits, $fruit );
		}
	}

	return $filtered_fruits;
}

$fruits = [
	'apple' =>          'red',
	'strawberry' =>     'red',
	'cherrey' =>		'red',
	'banana' =>         'yellow',
	'pineapple' =>      'yellow',
	'orange' =>         'orange',
	'watermelon' =>     'green',
	'grape' =>          'purple',
	'blueberry' =>      'blue'
];

$red_fruits = grab_fruits_by_color( $fruits, 'red' );
$yellow_fruits = grab_fruits_by_color( $fruits, 'yellow' );

$red_fruits_count = count( $red_fruits );
$yellow_fruits_count = count( $yellow_fruits );

if ( $red_fruits_count && $yellow_fruits_count ) {
	echo "Es gibt genauso viele rote wie gelbe Früchte im Korb.";
}
elseif ( $red_fruits_count > $yellow_fruits_count ) {
	echo "Es gibt mehr rote als gelbe Früchte im Korb.";
}
else {
	echo "Es gibt mehr gelbe als rote Früchte im Korb.";
}