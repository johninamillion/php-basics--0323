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
        <label>E-Mail</label>
	    <?php displayErrors( $errors, 'email' ); ?>
        <input type="email" name="email" required/>
    </div>
	<div>
		<label>Passwort</label>
		<?php displayErrors( $errors, 'password' ); ?>
		<input type="password" name="password" required/>
	</div>
    <div>
        <label>Passwort wiederholen</label>
	    <?php displayErrors( $errors, 'password_repeat' ); ?>
        <input type="password" name="password_repeat" required/>
    </div>
	<div>
		<input type="submit" value="Registrieren">
        <a href="/login">Zum Login</a>
	</div>
</form>