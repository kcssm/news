<?php

/**
 * Enqueue scripts and styles
 * @since 1.0
 */

function  _gpp_scripts() {

    global $post, $theme_options;

    wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( '_gpp_scripts', get_template_directory_uri() .'/js/scripts.js', array( 'jquery' ), '1.0' );
	wp_enqueue_script( 'cycle', get_template_directory_uri() .'/js/jquery.cycle.all.js', array( 'jquery' ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }

}
add_action( 'wp_enqueue_scripts', '_gpp_scripts' );