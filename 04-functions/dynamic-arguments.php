<?php

$fruits = [ 'apple', 'banane', 'cherry' ];

//function addFruit( string $fruit ) : void {
//	global $fruits;
//	array_push( $fruits, $fruit );
//}
//
//addFruit( 'orange' );
//addFruit( 'strawberry' );

//function addFruit( array $fruits, string $fruit ) : array {
//	array_push( $fruits, $fruit );
//	return $fruits;
//}
//
//$fruits = addFruit( $fruits, 'orange' );
//$fruits = addFruit( $fruits, 'strawberry' );

//function addFruit( array &$fruits, string $fruit ) : void {
//	array_push( $fruits, $fruit );
//}
//
//addFruit( $fruits,  'orange' );
//addFruit( $fruits,  'strawberrey' );

//function addFruits( array $new_fruits ) : void {
//	global $fruits;
//	$fruits = array_unique( array_merge( $fruits, $new_fruits ) );
//
//}
//addFruits( ['apple', 'orange', 'strawberry', 'pineapple', 1, ,2, 3] );

function addFruits( string ...$new_fruits ) {
	global $fruits;
	$fruits = array_unique( array_merge( $fruits, $new_fruits ) );
}

addFruits( 'apple', 'orange', 'strawberry', 'pineapple', 1, 2, 3 );

var_dump( $fruits );
