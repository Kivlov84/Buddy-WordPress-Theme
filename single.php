<?php get_header(); ?>

<main class="site-main col-lg-8 mr-5" id="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail()) :  ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			<?php endif; ?>
			
			<h1>
				<?php the_title(); ?>
			</h1>
			<small>
				<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
				<span class="author"><?php _e( 'Published by', 'buddywpblank' ); ?> <?php the_author_posts_link(); ?></span>
			</small>


			<?php the_content(); ?>

			<?php the_tags( __( 'Tags: ', 'buddywpblank' ), ', ', '<br>'); ?>
			

			<?php edit_post_link();  ?>
			

		</article>

	<?php endwhile; ?>

	<?php else: ?>
		
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'buddywpblank' ); ?></h1>

		</article>

	<?php endif; ?>
</main>
		
		<?php get_sidebar(); ?>


<?php get_footer(); ?>
