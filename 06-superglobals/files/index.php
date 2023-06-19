<?php
var_dump( $_POST );
?>
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

        .image-upload {
            position: relative;
            width: 240px;
            height: 240px;
        }

        .image-upload input {
            opacity: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
        }

        #preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        form div {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
<main>
    <form method="post" enctype="multipart/form-data">
        <h1>File Upload</h1>
        <div>
            <label>Avatar</label>
            <div class="image-upload">
                <img id="preview" src="/assets/images/avatar.jpg"/>
                <input id="image" type="file" accept="image/gif,image/jpeg" required>
                <input id="input" name="avatar" type="hidden">
            </div>
            <p id="progress"> Datei Auswählen </p>
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
    document.getElementById('image').addEventListener('change', function (event) {
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);

        var formData = new FormData();
        var request = new XMLHttpRequest();

        request.open( 'POST', '/async.php');

        request.onprogress = function ( event ) {
            console.log( event.loaded, event.total );
            var progress = document.getElementById('progress');
            progress.innerText = 'Upload Progress: ' + Math.round( event.loaded / event.total * 100 ) + '%';
        };

        request.onreadystatechange = function () {
            setTimeout( function() {
                if ( request.readyState === 4 && request.status === 200 ) {
                    var response = JSON.parse( request.responseText );
                    document.getElementById( 'input' ).value = response.path
                    preview.src = response.path;
                    console.log( response );
                };
            }, 1000 )
        };

        formData.append('avatar', event.target.files[0]);
        request.send( formData );
    });
</script>
</body>
</html>

