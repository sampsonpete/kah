<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage KAH
 */
?>

<div class="project_wrapper">
	<div class="project_images cycle-slideshow">
		<?php echo $post->post_content; ?> 
	</div>
	<?php $caption = get_post_meta( $post->ID, 'caption', true );
	if ( $caption ) { ?>
		<p class="project_caption"><?php echo $caption; ?></p>
	<?php } ?>
	<div class="project_nav"></div>		
</div>