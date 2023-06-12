<?php

function addUsersToGroup( array &$group, string ...$users ) : void {
	foreach ( $users as $user ) {
		$group[$user] = [
			'id'      => count( $group ) + 1,
			'usename' => $user
		];
	}
}

$group = [];

addUsersToGroup( $group, 'joe', 'jane', 'john' );

echo "<pre>";
var_dump( $group );
echo "</pre>";
