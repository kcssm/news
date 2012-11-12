<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _gpp
 * @since _gpp 1.0
 */

get_header(); ?>
		
		<div id="primary" class="site-content">
			<div id="content" role="main">
            	<div class="rightPanel">
		
					<div class="recentWp">
			<div id="featurednews">
				<h1 class="news_headline">NEWS HEADLINES</h1>
				<?php
				global $post;
				$args = array( 'numberposts' => 3, 'category_name' => 'important' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<div class="important">
						<h2><?php the_title(); ?></h2>
						

						<?php //echo get_the_date()." | "; ?>
							<?php //echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
							<?php //echo limit_excerpt_length(get_the_excerpt(),25) . " [...]"; ?>
						
					
					</div>
				<?php endforeach; ?>
			</div>
			<div id="featuredimages">			
				<?php
				global $post;
				$args = array( 'numberposts' => 5, 'category_name' => 'photo' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<div class="photos">
					<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
					<div class="feat_img_content"><?php the_title(); ?>
					<?php echo limit_excerpt_length(get_the_excerpt(),25); ?></div>
					</div>
				<?php endforeach; ?>			
			</div>

			</div> <!-- end of recentWp -->
					<div id="national">
				<h3>NATIONAL</h3>
				<?php
				global $post;
				$args = array( 'numberposts' => 3, 'category_name' => 'important' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
					<div class="nationalnews">
						<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
						<div><h2><?php the_title(); ?></h2>						
							<?php //echo get_the_date()." | "; ?>							
							<?php echo limit_excerpt_length(get_the_excerpt(),40) . " [...]"; ?>
						</div>
					
					</div>
				<?php endforeach; ?>
			</div>
					<div id="othernews" class=" othernewsTop">
<div class="othernewsWp">
				<div id="othernews1" class="othernews">
					<h3>Sports</h3>
					<?php
					global $post;
					$args = array( 'numberposts' => 3, 'category_name' => 'important' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="sports">
							<?php //echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
							<div><h2><?php the_title(); ?></h2>						
								<?php //echo get_the_date()." | "; ?>							
								<?php //echo limit_excerpt_length(get_the_excerpt(),10) . " [...]"; ?>
							</div>
						
						</div>
					<?php endforeach; ?>
				</div>
				<div id="othernews2" class="othernews">
					<h3>Finance</h3>
					<?php
					global $post;
					$args = array( 'numberposts' => 3, 'category_name' => 'important' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="finance">
							<?php //echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
							<div><h2><?php the_title(); ?></h2>						
								<?php //echo get_the_date()." | "; ?>							
								<?php //echo limit_excerpt_length(get_the_excerpt(),10) . " [...]"; ?>
							</div>
						
						</div>
					<?php endforeach; ?>
					</div>
</div> <!-- end of othernewsWp --->			
<div class="othernewsWp">
				<div id="othernews3" class="othernews">
					<h3>Health</h3>
					<?php
					global $post;
					$args = array( 'numberposts' => 3, 'category_name' => 'important' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="health">
							<?php //echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
							<div><h2><?php the_title(); ?></h2>							
								<?php //echo get_the_date()." | "; ?>							
								<?php //echo limit_excerpt_length(get_the_excerpt(),10) . " [...]"; ?>
							</div>
						
						</div>
					<?php endforeach; ?>
				</div>
				<div id="othernews4" class="othernews">
					<h3>Entertainment</h3>
					<?php
					global $post;
					$args = array( 'numberposts' => 3, 'category_name' => 'important' );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>
						<div class="entertainment">
							<?php //echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
							<div><h2><?php the_title(); ?></h2>							
								<?php //echo get_the_date()." | "; ?>							
								<?php //echo limit_excerpt_length(get_the_excerpt(),10) . " [...]"; ?>
							</div>
						</div>
						
					<?php endforeach; ?>
				</div>
</div><!-- end of othernewsWp --><div class="clearAll"></div>
			</div>
            </div> <!-- end of rightPanel -->
<?php get_sidebar(); ?>
			</div><!-- #content -->
		

</div><!-- #primary .site-content -->
<?php get_footer(); ?>