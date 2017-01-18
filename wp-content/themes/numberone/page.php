<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
<hr class="half" />  <h2 class="center standart-h2title"><span class="large-text"><span class="main-color"><?php the_title(); ?></span></span></h2>  <hr class="half" />

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>


<?php get_footer(); ?>
