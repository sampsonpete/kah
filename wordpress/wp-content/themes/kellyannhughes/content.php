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
		<?php $credits = get_post_meta( $post->ID, 'credits', true );
		if ( $credits ) { ?>
			<div class="project_credits">
				<p><?php echo $credits; ?></p>
			</div>
		<?php } ?>
	</div>
	<div class="project_nav"></div>
	<?php $caption = get_post_meta( $post->ID, 'caption', true );
	if ( $caption ) { ?>
		<p class="project_caption"><?php echo $caption; ?></p>
	<?php } ?>
</div>