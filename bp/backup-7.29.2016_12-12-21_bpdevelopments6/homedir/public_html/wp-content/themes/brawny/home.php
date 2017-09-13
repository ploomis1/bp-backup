<?php
/**
 * The home template file.
 *
 * This is home template file is used to display blog posts
 * when Reading Settings set to 'Your latest posts'.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brawny
 */

get_header(); ?>

	<div id="primary" class="content-area eleven columns">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php brawny_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
