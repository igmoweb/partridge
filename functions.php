<?php

class Partridge_Theme {

	public function enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri(), array(), '20170218d' );
		wp_enqueue_style( 'partridge-fonts', 'https://fonts.googleapis.com/css?family=Cinzel|Droid+Sans:400,700' );
	}

	public function setup() {
		add_image_size( 'partridge-portfolio', 440, 260, true );
	}

}

$partridge = new Partridge_Theme();
add_action( 'wp_enqueue_scripts', array( $partridge, 'enqueue_styles' ) );
add_action( 'after_setup_theme', array( $partridge, 'setup' ) );

add_filter( 'jetpack_portfolio_thumbnail_size', function() {
	return 'partridge-portfolio';
});