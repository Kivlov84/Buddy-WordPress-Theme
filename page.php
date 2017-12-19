<?php get_header(); ?>

	<main class="site-main col-lg-8 mr-5" id="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>

		<?php endwhile; ?>

		<?php else: ?>
			
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'buddywpblank' ); ?></h2>

			</article>

		<?php endif; ?>
	</main>

		
		<?php get_sidebar(); ?>


<?php get_footer(); ?>
