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
		</header>
		<section>
			<img id="falcon" src="wp-content/themes/statictheme/images/falcon.jpg" />
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<section>
				<h1><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
				<?php the_content(); ?>
				
			</section>
			
			<?php endwhile; else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
			
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Static</p>
			<p>12 Grimmauld Place, London</p>
			<p>England, The World, The Universe</p>
			<p>Phone: +44 20 1066 1701</p>
			<br />
			<p><a href="wp-admin">GO TO DASHBOARD</a></p>
		</footer>
	</body>
</html>