<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<nav>
				<ul>
					<?php wp_nav_menu( array( 'menu' => 'Main Nav' ) ); ?>
				</ul>
			</nav>
			<img id="falcon" src="<?php bloginfo( 'stylesheet_directory' );?>/images/falcon.jpg" />
    </header>