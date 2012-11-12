<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _gpp
 * @since _gpp 1.0
 */
?>

	</div><!-- #main -->

</div><!-- #page .hfeed .site -->

	<footer id="colophon" class="site-footer" role="contentinfo" style="background:#990000">
<div class="footerWp">
	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        <?php /* if ( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) ) : ?>
            <div id="footer-widgets" <?php _gpp_footer_widget_class(); ?>>
                <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                    <aside id="widget-1" class="widget-1">
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    </aside>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                    <aside id="widget-2" class="widget-2">
                        <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                    </aside>
                <?php endif; ?>
                <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                    <aside id="widget-3" class="widget-3">
                        <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                    </aside>
                <?php endif; ?>
            </div><!-- end #footer-widgets -->
        <?php endif; // end check if any footer widgets are active */ ?>

		<div class="site-info">
			<?php do_action( '_gpp_credits' ); ?>
			<?php echo "Copyright &copy; 2012. All rights reserved."; ?>
		</div><!-- .site-info -->
</div><!-- end of footerWp -->
	</footer><!-- .site-footer .site-footer -->


<?php wp_footer(); ?>

</body>
</html>