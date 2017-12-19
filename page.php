<?php get_header(); ?>

	<main role="main">
		<section>

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

		</section>
		
		<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
