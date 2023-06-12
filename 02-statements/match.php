<?php

$name = 'John';

$text = match( $name ) {
	'John' => 'Hello John',
	'Jane' => 'Hello Jane',
	default => 'Hello World'
};

echo $text;
