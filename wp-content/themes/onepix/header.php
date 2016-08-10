<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
		
	<header id="main_header">
		<div id="top_header">
			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
		</div>
		<div class="logo">
			<h1><a href="#"><img src="img/logo.png"></a></h1>
		</div>
	</header>