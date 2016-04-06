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
	<meta name="viewport" content="width=972" />
	<title><?php bloginfo( 'name' ); ?> — <?php bloginfo( 'description' ); ?></title>

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
<body>
	
	<div id="wrapper">
		
		<header class="engravers_gothic clearfix">
		
			<h1><?php bloginfo( 'name' ); ?></h1>
			<nav>
				<ul>
					<li><a href="#" id="about_toggle">About</a></li>
					<li><a href="#" id="clients_toggle">Clients</a></li>
					<li><a href="#" id="contact_toggle">Contact</a></li>
				</ul>
			</nav>
			<div id="info_wrapper">
				<p id="about">
					Kelly-Ann Hughes is a British stylist based in London. Having previously worked on the<br />
					Kate Moss for Topshop range where she first worked with Katy England and began her<br />
					styling career, she went on to assist Elliott Smedley creative consultant at Burberry<br />
					and has since been first assistant to Clare Richardson and most recently has been<br />
					working closely with Mel Ottenberg, stylist to Rihanna.
				</p>
				<p id="clients">
					FWSS<br />
					LF Markey<br />
					Carousel<br />
					Napapijri<br />
					Frances O'Leary<br />
					Aquascutum Golf<br />
					Aquascutum x Bentley<br />
					Tom Morris Golf
				</p>
				<address id="contact">
					<a href="mailto:kellyannhughes@gmail.com">kellyannhughes@gmail.com</a>
				</address>
			</div>
					
		</header>