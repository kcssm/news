<?php
/**
 * _gpp functions and definitions
 *
 * @package _gpp
 * @since _gpp 1.0
 */

//define( '_GPP_VERSION', '1' );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since _gpp 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/**
 * Set the theme option variable for use throughout theme.
 *
 * @since _gpp 1.0
 */
if ( ! isset( $theme_options ) )
	$theme_options = get_option( '_gpp_options' );
global $theme_options;

if ( ! function_exists( '_gpp_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since _gpp 1.0
 */
function _gpp_setup() {
	
	require( get_template_directory() . '/lib/custom-header.php' );
	require( get_template_directory() . '/lib/filters.php' );
	require( get_template_directory() . '/lib/scripts.php' );
	require( get_template_directory() . '/lib/template-tags.php' );
	require( get_template_directory() . '/lib/widgets.php' );

	/* Theme Options */
	require( get_template_directory() . '/lib/theme-options/config.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _gpp, use a find and replace
	 * to change '_gpp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_gpp', get_template_directory() . '/languages' );

	/**
	 * Add theme support for various features
	 */
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'image', 'video') );
	add_theme_support( 'custom-background' );
	add_editor_style();

	/**
	* Set image sizes
	*/

	/* Set & create additional image sizes */
	set_post_thumbnail_size( 150, 150, true ); // default square thumbnail
	add_image_size( 'horizontal', 150, 100, true ); // horizontal images
	add_image_size( 'vertical', 150, 100, true ); // vertical images

	/* Update thumbnail and image sizes */
	update_option( 'thumbnail_size_w', 150, true );
	update_option( 'thumbnail_size_h', 150, true );
	update_option( 'medium_size_w', 350, true );
	update_option( 'medium_size_h', 300, true );
	update_option( 'large_size_w', 1000, true );
	update_option( 'large_size_h', '', true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_gpp' ),
	) );
	
	register_nav_menus( array(
		'footer' => __( 'Footer Menu', '_gpp' ),
	) );

}
endif; // _gpp_setup
add_action( 'after_setup_theme', '_gpp_setup' );


// Remove p tags

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


// excerpt limiter

function limit_excerpt_length($string, $word_limit)
{
     $words = explode(' ', $string);
 
     return implode( ' ', array_slice($words, 0, $word_limit) );
 
}