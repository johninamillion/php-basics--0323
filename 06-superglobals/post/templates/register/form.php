<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
    <style>
        label {
            display: block;
        }
        .errors {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Registrierung:</label>
        <?php display_errors( $errors, 'form' ); ?>
        <div>
            <label>Benutzername</label>
            <?php display_errors( $errors, 'username' ); ?>
            <input type="text" name="username" placeholder="Benutzername" required/>
        </div>
        <diV>
            <label>E-Mail Adresse</label>
	        <?php display_errors( $errors, 'email' ); ?>
            <input type="email"  name="email" placeholder="E-Mail Adresse" required/>
        </diV>
        <div>
            <label>Passwort</label>
	        <?php display_errors( $errors, 'password' ); ?>
            <input type="password" name="password" placeholder="Passwort" required/>
        </div>
        <div>
            <label>Passwort Wiederholen</label>
		    <?php display_errors( $errors, 'password_repeat' ); ?>
            <input type="password" name="password_repeat" placeholder="Passwort" required/>
        </div>
        <input type="submit" value="Registrieren"/>
        <a href="login.php">Zum Login</a>
    </form>
</body>
</html>
