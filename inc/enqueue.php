<?php

function my_theme_enqueue_styles() {

    $parent_style = 'divi-style'; // This is 'divi-style' for the Divi theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        '1.0.0'
    );

	/* Custom CSS */
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all' );

    /* Custom JS */
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/mel.min.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );