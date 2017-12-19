<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>


			<header class="header clear" role="banner">
				<div class="wrapper">
					<div class="header-logo">
						<?php
						
						echo '<h1 class="site-title">';
						echo '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a>';
						echo '</h1>';
						echo '<h2 class="site-description">'.get_bloginfo( 'description' ).'</h2>';
						
						?>
					</div>
					
					<nav class="nav" role="navigation">
							<?php buddywpblank_nav(); ?>
					</nav>
				</div>
			</header>
		<div class="wrapper">
