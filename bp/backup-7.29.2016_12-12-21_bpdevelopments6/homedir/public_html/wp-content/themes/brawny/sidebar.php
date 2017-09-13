<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package brawny
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area five columns <?php echo brawny_sidebar_class(); ?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
