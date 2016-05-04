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
	<footer>
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
		<nav>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'secondary',
				 ) );
			?>
		</nav>
		<?php endif; ?>
	</footer>
		
	</div><!-- close #wrapper -->
		
	<!-- Javascript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-2.2.3.min.js"><\/script>')</script>
	
	<!-- Scripts -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/script.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.cycle2.min.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.imagefit.js"></script>

	<?php wp_footer(); ?>

</body>
</html>