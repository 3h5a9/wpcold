<article class="article">
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
	<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
		<?php the_excerpt() ?>
	<!-- Meta Info About Article -->
	<div class="meta_info">
		<ul>
			<li>
				<span>Author:</span>
				<a href="#"><?php the_author(); ?></a>
			</li>
			<li>
			  <span>Published On:</span>
				<span><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></span>
			</li>
			<li>
				<span>Category:</span>
				<span><?php the_category(); ?></span>
			</li>
		</ul>
	</div>
</article>