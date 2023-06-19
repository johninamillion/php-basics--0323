<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Files</title>

    <style>
        html, body {
            display: inline;
        }
        main {
            display: flex;
            width: 100vw;
            height: 100vh;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 64px;
        }
        aside,
        form {
            max-width: 640px;
            padding: 16px;
            border-radius: 4px;
            background: #eee;
        }
        form label {
            display: block;
            line-height: 32px;
        }
        form input[type="text"],
        form input[type="password"] {
            display: block;
            height: 32px;
            padding: 0 16px;
            width: 100%;
        }

        form div {
            margin-bottom: 1rem;
        }

        #preview {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<main>
    <aside>
        <pre>
            <?= var_dump( $_POST ) ?>
        </pre>
        <pre>
            <?= var_dump( $_FILES ) ?>
        </pre>
    </aside>
    <?php if ( $upload === TRUE ): ?>
        <div>
            <img src="/uploads<?= date( '/Y/m/' ) . time() . '-' . $_FILES[ 'avatar' ][ 'name' ] ?>" alt="Avatar">
        </div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <h1><?= $_SERVER[ 'REQUEST_METHOD' ] ?> - File Upload</h1>
        <div>
            <label>Avatar</label>
            <img id="preview"/>
            <input id="image" type="file" name="avatar" accept="image/gif,image/jpeg" required>
        </div>
        <div>
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</main>
<script>
    document.getElementById( 'image' ).addEventListener( 'change', function( event ) {
        document.getElementById( 'preview' ).src = URL.createObjectURL( event.target.files[ 0 ] );
    } );
</script>
</body>
</html>

