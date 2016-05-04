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
 * @package WordPress
 * @subpackage KAH
 */

get_header(); ?>

	<div class="homepage_slideshow cycle-slideshow">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	
			echo $post->post_content;
		
		endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
			
	</div>

<?php get_footer(); ?>