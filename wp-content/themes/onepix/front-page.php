<?php

/*
  Template Name: Front Page
*/ 

get_header(); ?>
	<div id="container">
		<section id="home_page_content">
			
				<?php if ( have_posts() ) :
    			while ( have_posts() ) : the_post(); ?>
    					
							<?php get_template_part('templates/home-page', get_post_format() ); ?>
						
					<?php endwhile;
					endif; 
				?>
			
		</section>
	</div>
	
<?php get_footer(); ?>