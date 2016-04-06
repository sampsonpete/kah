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

		<section>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="project_wrapper">
				<div class="project_images">
					<?php the_content(); ?>	
				</div>
				<?php $caption = get_post_meta( $post->ID, 'caption', true );
				if ( $caption ) { ?>
					<div class="project_caption"><?php echo $caption; ?></div>	
				<?php } ?>
				<div class="project_nav"></div>		
			</div>
			
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			
		</section>

<?php get_footer(); ?>