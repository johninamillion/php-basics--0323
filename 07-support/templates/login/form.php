<?php

namespace App;

?>
<form method="post">
	<div>
		<label>Username</label>
		<?php displayErrors( $errors, 'username' ); ?>
		<input type="text" name="username" required/>
	</div>
	<div>
		<label>Passwort</label>
		<?php displayErrors( $errors, 'password' ); ?>
		<input type="password" name="password" required/>
	</div>
	<div>
		<a href="/register">Zur Registrierung</a>
		<input type="submit" value="Login">
	</div>
</form>