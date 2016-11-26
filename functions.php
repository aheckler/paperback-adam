<?php

// Load parent and child theme styles
function akh_paperback_adam_theme_styles() {
	wp_enqueue_style( 'paperback-style', get_template_directory_uri(). '/style.css' );
	wp_enqueue_style( 'paperback-adam-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'akh_paperback_adam_theme_styles' );

/* Add custom PHP below here! */
