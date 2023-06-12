<?php

$name = 'John';

// == Switch vergleicht Werte aber keine Type '1' == 1
switch( $name ) {
	case 'John':
		echo 'Hello John';
		break;
	case 'Jane':
		echo 'Hello Jane';
		break;
	default:
		echo 'Hello World';
		break;
}
