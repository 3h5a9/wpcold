<?php get_header(); ?>
	<div id="container">
		<section id="main_content">
			
				<?php if ( have_posts() ) :
    			while ( have_posts() ) : the_post(); ?>
    			
						<?php get_template_part('content'); ?>
					
					<?php endwhile;
					endif; 
				?>
			
		</section>
	</div>
<?php get_footer(); ?>