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
			<?php get_header(); ?>
		</header>
		<section>
			<img id="falcon" src="<?php bloginfo( 'stylesheet_directory' );?>/images/falcon.jpg" />
			
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
			<?php get_footer(); ?>
		</footer>
	</body>
</html>