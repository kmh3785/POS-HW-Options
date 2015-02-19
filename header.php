<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en-US" > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US" > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US" "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US" > <!--<![endif]-->
<head>
<!-- <base href="http://base-url-goes-here.com/" /> -->

	<meta charset="UTF-8">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<link rel='canonical' href='' />
	<link rel='shortlink' href='' />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="mainNav">
	<nav>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	</nav>
</header>



<section id="mainContent">