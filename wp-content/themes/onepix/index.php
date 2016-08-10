<?php get_header(); ?>
	<div id="container">
		<section id="main_content">
			
				<?php if ( have_posts() ) :
    			while ( have_posts() ) : the_post(); ?>
    				<article class="article">
    					
							<?php get_template_part('content', get_post_format() ); ?>
						
						</article>
					<?php endwhile;
					endif; 
				?>
			
		</section>
	</div>
<?php get_footer(); ?>