<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package _gpp

 * @since _gpp 1.0

 */

?>

<?php $theme_options = get_option( '_gpp_options' ); ?>



<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', '_gpp' ), max( $paged, $page ) );



	?></title>

<?php if ( isset( $theme_options[ 'favicon' ] ) && '' != $theme_options[ 'favicon' ] ) : ?>

	<link rel="shortcut icon" href="<?php echo esc_url( $theme_options[ 'favicon' ] ); ?>" />

<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->



<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=341887705902281";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="topdiv">



	

	<header id="masthead" class="site-header" role="banner">

<div class="topFirst">

		<hgroup>

<?php do_action( 'before' ); ?>

			<h1 class="site-title">

				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

					<?php if( isset( $theme_options['logo'] ) && '' != $theme_options[ 'logo' ] ) : ?>

					<img class="sitetitle" src="<?php echo esc_url( $theme_options[ 'logo' ] ); ?>" alt="<?php bloginfo( 'name' ); ?>" />

					<?php else : ?>

						<?php bloginfo( 'name' ); ?>

					<?php endif; ?>

				</a>

			</h1>

			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		</hgroup>

		<div id="todaydate"><span>TODAY : </span><label><?php echo date('l jS F Y'); ?><label></div>

</div><!-- end of topFirst -->

		<nav role="navigation" class="site-navigation main-navigation">

<div class="custom_nav">

			<h1 class="assistive-text"><?php _e( 'Menu', '_gpp' ); ?></h1>

			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_gpp' ); ?>"><?php _e( 'Skip to content', '_gpp' ); ?></a></div>



			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

</div> <!-- end of custom_nav -->

		</nav>

	</header><!-- #masthead .site-header -->

	<div id="hotnews">
	
		<div class="hotnewsWp">
		<div class="topLefts"></div>
			<span id="titlehot">Recent news</span>

			<div id="hot">

				<?php

				global $post;

				$args = array( 'numberposts' => 5, 'category_name' => 'important' );

				$myposts = get_posts( $args );

				foreach( $myposts as $post ) :	setup_postdata($post); ?>

					<span class="justin"><?php the_title(); ?></span>

				<?php endforeach; ?>

			</div>
		</div>
		</div>

</div>

<div id="page" class="hfeed site">

	



	<div id="main">