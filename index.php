<?php get_header(); ?>


<?php get_sidebar(); ?>


	<main class="site-main col-lg-8 ml-5" id="main">

			<h1><?php _e( 'Latest Posts', 'buddywpblank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
	</main>
		
	


<?php get_footer(); ?>

