<?php
/**
 * Template Name: News
 *The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sample
 */

get_header(); ?>
<?php get_sidebar('news'); ?>



	<div id="newsContent">
		
			<?php rewind_posts(); ?>

				<?php

					$args = array( 'post_type' => 'News', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
			
				
					
				
					echo '<div class="listitem">';
					the_content();
					echo '</div>';

					endwhile;

				?>


	
	</div><!-- #primary -->


<?php get_footer(); ?>