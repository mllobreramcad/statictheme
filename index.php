<?php get_header(); ?>
<div id="content">
		<aside>
			<?php get_sidebar(); ?>
		</aside>
		
		
		
		<section>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<section>
				<h1><a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				
				<?php the_content(); ?>
				
			</section>
			
			<?php endwhile; else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
			
		</section>
		</div><!--End Content-->
		
		
		
		
			<?php get_footer(); ?>
	</body>
</html>