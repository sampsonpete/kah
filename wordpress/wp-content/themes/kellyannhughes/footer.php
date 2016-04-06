<?php
/**
 * The template for displaying the footer.
 *
 * Contains <footer> and all content after
 *
 * @package WordPress
 * @subpackage KAH
 */
?>
		
	</div><!-- close #wrapper -->
		
	<!-- Javascript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.6.4.min.js"><\/script>')</script>
	
	<!-- Scripts -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/script.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.cycle.all.js"></script>

	<?php wp_footer(); ?>

</body>
</html>