<?php

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
