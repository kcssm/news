<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _gpp
 * @since _gpp 1.0
 */
?>
<div class="sidePanel">

	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<?php do_action( '_gpp_before_sidebar' ); ?>
		<section id="secondary" class="widget-area" role="complementary">
			<aside id="sidebar" class="widget">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</aside>
		</section><!-- #secondary .widget-area -->
		<?php do_action( '_gpp_after_sidebar' ); ?>
	<?php endif; ?>
</div>