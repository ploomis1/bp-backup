<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function brawny_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'brawny' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
/*
	$header_widget_args = array(
		'name'          => __( 'Header %d', 'brawny' ),
		'id'            => 'header',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
	register_sidebars(3, $header_widget_args);
*/
	$footer_widget_args = array(
		'name'          => __( 'Footer %d', 'brawny' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
	register_sidebars(4, $footer_widget_args);
}
add_action( 'widgets_init', 'brawny_widgets_init' );