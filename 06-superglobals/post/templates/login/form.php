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
        <label>Login:</label>
        <?php display_errors( $errors, 'form' ); ?>
        <div>
            <label>Benutzername</label>
            <?php display_errors( $errors, 'username' ); ?>
            <input type="text" name="username" placeholder="Benutzername" required/>
        </div>
        <div>
            <label>Passwort</label>
	        <?php display_errors( $errors, 'password' ); ?>
            <input type="password" name="password" placeholder="Passwort" required/>
        </div>
        <input type="submit" value="Login"/>
        <a href="register.php">Zur Registrierung</a>
    </form>
</body>
</html>
