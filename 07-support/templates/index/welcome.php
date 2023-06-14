<?php
    namespace App;
?>

<h1>Welcome</h1>

<ul>
<?php foreach( getPosts() as $post ): ?>
    <li>
        <h2><?= $post[ 'title' ] ?></h2>
        <p><?= $post[ 'text' ] ?></p>
    </li>
<?php endforeach; ?>
</ul>
