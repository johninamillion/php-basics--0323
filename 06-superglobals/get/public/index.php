<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function get_posts() : array {
	return [
		[
			"title" => "Der verlorene Schlüssel",
			"text" => "Nach stundenlanger Suche fand sie den verlorenen Schlüssel in ihrer Handtasche, wo sie ihn zuerst nicht vermutet hatte. Ein Gefühl der Erleichterung durchströmte sie, als sie endlich die Haustür öffnete und ins Warme trat."
		],
		[
			"title" => "Der rettende Regenschirm",
			"text" => "Der Regen prasselte unaufhörlich auf sie herab, als sie ihren Regenschirm öffnete. Mit jedem Schritt fühlte sie sich sicherer, während die Welt um sie herum im nassen Chaos versank."
		],
		[
			"title" => "Das unerwartete Geschenk",
			"text" => "Als sie das Geschenk auspackte, fand sie darin genau das Buch, von dem sie immer geträumt hatte. Die Widmung auf der ersten Seite brachte Tränen der Freude in ihre Augen."
		],
		[
			"title" => "Die verschwundenen Schlüssel",
			"text" => "Panisch suchte er in seinen Taschen nach den Schlüsseln, doch sie waren spurlos verschwunden. Erst als er das Fahrradschloss genauer betrachtete, bemerkte er, dass die Schlüssel darin steckten."
		],
		[
			"title" => "Das geheimnisvolle Foto",
			"text" => "In einer alten Schachtel fand sie ein vergilbtes Foto, auf dem ihre Großeltern als junge Liebende zu sehen waren. Die Geschichte, die sich dahinter verbarg, entfaltete sich vor ihrem inneren Auge."
		]
	];
}

function get_filtered_posts( string $keyword ) : array {
	$filtered_posts = [];
	$posts = get_posts();

	foreach ( $posts as $post ) {
		if (
				strpos( strtolower( $post[ 'title' ] ), strtolower( $keyword ) ) !== FALSE
			||  strpos( strtolower( $post[ 'text' ] ), strtolower( $keyword ) ) !== FALSE
		) {
			array_push( $filtered_posts, $post );
		}
	}

	return $filtered_posts;
}

function bootstrap() {
	//if ( isset( $_GET[ 'search' ] ) ) {
	//	$display_posts = get_filtered_posts( $_GET[ 'search' ] );
	//}
	//else {
	//	$display_posts = get_posts();
	//}
	global $display_posts;
	$display_posts = isset( $_GET[ 'search' ] ) ? get_filtered_posts( $_GET[ 'search' ] ) : get_posts();

	include_once APP_TEMPLATES_DIR . DIRECTORY_SEPARATOR . 'index-template.php';
}

bootstrap();