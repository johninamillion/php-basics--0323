<?php

//var_dump( $_SERVER );

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server</title>
</head>
<body>
	<main>
		<dl>
			<dt>HTTP Host</dt>
			<dd><?= $_SERVER[ 'HTTP_HOST' ] ?></dd>
			<dt>HTTP Accept</dt>
			<dd><?= $_SERVER[ 'HTTP_ACCEPT' ] ?></dd>
			<dt>Server Name</dt>
			<dd><?= $_SERVER[ 'SERVER_NAME' ] ?></dd>
			<dt>Server Admin</dt>
			<dd><?= $_SERVER[ 'SERVER_ADMIN' ] ?></dd>
			<dt>Request Method</dt>
			<dd><?= $_SERVER[ 'REQUEST_METHOD' ] ?></dd>
			<dt>Request URI</dt>
			<dd><?= $_SERVER[ 'REQUEST_URI' ] ?></dd>
            <dt>Request Time</dt>
            <dd><?= $_SERVER[ 'REQUEST_TIME' ] ?></dd>
		</dl>
	</main>
</body>
</html>
