<?php
    global $display_posts;

//if ( isset( $_GET[ 'search' ] ) ) {
//	echo $_GET[ 'search' ];
//}
//else {
//	echo 'Keine Suche';
//}
//
//if ( isset( $_GET[ 'search' ] ) ):
//	echo $_GET[ 'search' ];
//else:
//	echo 'Keine Suche';
//endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
    <form method="get">
        <label>Suche:</label>
        <input type="text" name="search" placeholder="Suchwort"/>
        <input type="submit" value="Suchen"/>
    </form>
    <header>
	    <?php if ( isset( $_GET['search'] ) ): ?>
            <p>Suche nach: <?php echo $_GET['search']; ?></p>
	    <?php else: ?>
            <p>Keine Suche</p>
	    <?php endif; ?>
    </header>
    <section>
        <?php foreach( $display_posts as $post ): ?>
            <article>
                <h1><?php echo $post[ 'title' ] ?></h1>
                <p><?= $post[ 'text' ] ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</body>
</html>
