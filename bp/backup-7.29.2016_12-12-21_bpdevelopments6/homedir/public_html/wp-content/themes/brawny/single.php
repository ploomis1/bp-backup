<?php
/**
 * The template for displaying all single posts.
 *
 * @package brawny
 */
global $brawny;
get_header(); ?>

	<div class="breadcrumb sixteen columns">
		<?php if ( $brawny['breadcrumb'] && function_exists( 'brawny_breadcrumbs' ) ) : ?>
			<div id="breadcrumb" role="navigation">
				<?php brawny_breadcrumbs(); ?>
			</div>
		<?php endif; ?>
	</div>

	<div id="primary" class="content-area eleven columns <?php echo brawny_content_class(); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php brawny_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>