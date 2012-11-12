<?php

/**
 * Register widgetized area and update sidebar with default widgets
 * @package _gpp
 * @since _gpp 1.0
 */

function _gpp_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Sidebar', '_gpp' ),
		'id' => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	$widgets = array( '1', '2', '3' );
	foreach ( $widgets as $i ) {
		register_sidebar(array(
			'name' => __( 'Footer Widget ', '_gpp' ) . $i,
			'id' => 'footer-widget-' . $i,
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>'
		) );
	} // end foreach
}
add_action( 'widgets_init', '_gpp_widgets_init' );