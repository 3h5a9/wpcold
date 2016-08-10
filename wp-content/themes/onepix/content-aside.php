  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
	<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
		<?php the_content() ?>