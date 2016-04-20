<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @package WordPress
 * @subpackage KAH
 */
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title><?php bloginfo( 'name' ); ?> — <?php bloginfo( 'description' ); ?></title> -->

	<link rel="alternate" type="application/rss+xml" title="Kelly-Ann Hughes — Stylist — Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/normalize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css" type="text/css" media="screen" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" />
	
	<!-- HTML5 shim for IE to recognise and style the HTML5 elements - http://code.google.com/p/html5shim/ -->
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php wp_head(); ?>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37821439-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
</head>
<body <?php body_class(); ?>>
	
	<div id="wrapper">
		
		<header class="engravers_gothic clearfix">
		
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2>Is a <?php bloginfo( 'description' ); ?></h2>
			
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
					 ) );
				?>
			</nav>
			<?php endif; ?>
					
		</header>
		