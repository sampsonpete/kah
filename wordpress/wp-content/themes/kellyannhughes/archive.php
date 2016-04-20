<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
