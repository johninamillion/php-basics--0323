<?php

$fruits = [
	'apple' => 'red',
	'pineapple' => 'yellow',
	'orange' => 'orange',
	'banana' => 'yellow',
];

foreach ( $fruits as $fruit => $color ) {
//	echo $fruit . ' ist ' . $color . '<br>' . PHP_EOL;
	echo "{$fruit} ist {$color}<br>\n";
}
