<?php

// camelCase    matchExpression
// snake_case   match_expression

function test_me() {
	echo "Test me !";
}

function test_me_with_return_type() : void {
	echo "Test me with return type: void!";
}

function test_me_with_return_type_and_return() : string {

	return "Test me with return type: string!";
}

$test_me = test_me_with_return_type_and_return();

test_me();
test_me_with_return_type();
echo $test_me;