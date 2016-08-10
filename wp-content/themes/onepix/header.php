<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		
	<header id="main_header">
		<div id="top_header">
			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
		</div>
		<div class="logo">
			<h1><?php the_custom_logo(); ?></h1>
		</div>
	</header>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />