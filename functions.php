<?php

/**
 * Pull in the styles of your parent theme
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
} );

