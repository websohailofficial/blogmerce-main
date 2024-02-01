<?php

/**
 * Enqueue scripts and styles.
 */
function blogmerce_scripts() {
    

    // Bootstrap Style
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array() );
    
    // Main Stylesheet
	wp_enqueue_style( 'blogmerce-style', get_stylesheet_uri(), array(), _S_VERSION );
    
    // RTL stylesheet
	wp_style_add_data( 'blogmerce-style', 'rtl', 'replace' );

    // Navigation Js
	wp_enqueue_script( 'blogmerce-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    
    // Bootstrap Js
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true );

    

    // Comments Js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogmerce_scripts' );