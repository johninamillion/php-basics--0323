<?php

namespace app\users;

const DATA = [
	'admin', 'editor', 'author', 'contributor', 'subscriber'
];

define( 'users\DATA2', 'testUsers' );

function getData() {
	return DATA;
}

