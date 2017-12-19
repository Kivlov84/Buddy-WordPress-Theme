<?php get_header(); ?>

	<main role="main">
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail()) :  ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			<?php endif; ?>

			<small>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'buddywpblank' ); ?> <?php the_author_posts_link(); ?></span>
			</small>
			
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			
			<?php the_content(); ?>

			<?php the_tags( __( 'Tags: ', 'buddywpblank' ), ', ', '<br>'); ?>

			<p><?php _e( 'Categorised in: ', 'buddywpblank' ); the_category(', '); ?></p>

			<p><?php _e( 'This post was written by ', 'buddywpblank' ); the_author(); ?></p>

			<?php edit_post_link();  ?>

			<?php comments_template(); ?>

		</article>

	<?php endwhile; ?>

	<?php else: ?>
		
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'buddywpblank' ); ?></h1>

		</article>

	<?php endif; ?>

	</section>
		
		<?php get_sidebar(); ?>
	</main>


<?php get_footer(); ?>
