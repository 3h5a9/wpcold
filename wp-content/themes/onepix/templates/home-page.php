<section id="left_content">
<?php if ( have_posts() ) :
    			while ( have_posts() ) : the_post(); ?>
    				<article class="article">
    					
							<?php get_template_part('content', get_post_format() ); ?>
						
						</article>
					<?php endwhile;
					endif; 
				?>
</section>

<?php get_sidebar(); ?>