<?php
/**
 * Enqueue scripts and styles.
 */

function brawny_fontawesome() {
    wp_deregister_style( 'redux-elusive-icon' );
    wp_deregister_style( 'redux-elusive-icon-ie7' );
	wp_enqueue_style( 'brawny-fontawesome', BRAWNY_PARENT_URL . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'brawny_fontawesome' );
add_action( 'redux/page/brawny/enqueue', 'brawny_fontawesome' );

function brawny_scripts() {
	wp_enqueue_style( 'brawny-oswald', '//fonts.googleapis.com/css?family=Oswald:400,700' );
	wp_enqueue_style( 'brawny-flexslider', BRAWNY_PARENT_URL . '/css/flexslider.css' );
	wp_enqueue_style( 'brawny-style', get_stylesheet_uri() );

	wp_enqueue_script( 'brawny-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'brawny-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'branwy-flexsliderjs', BRAWNY_PARENT_URL . '/js/jquery.flexslider-min.js', array( 'jquery' ), '2.2.2', true );
	wp_enqueue_script( 'jquery-ui-tabs', false, array( 'jquery' ) );
	wp_enqueue_script( 'brawny-custom', BRAWNY_PARENT_URL . '/js/custom.js', array( 'jquery' ), '1.0', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	global $brawny;
	if( isset( $brawny['color'] ) ) {
		switch ($brawny['color']) {
			case '1':
				wp_enqueue_style( 'brawny-blue', BRAWNY_PARENT_URL . '/css/default.css');
				break;			
			case '2':
				wp_enqueue_style( 'brawny-blue', BRAWNY_PARENT_URL . '/css/lightpurple.css');
				break;
			default:
				wp_enqueue_style( 'brawny-style', get_stylesheet_uri() );
				break;
		}		
	} else {
		wp_enqueue_style( 'brawny-style', get_stylesheet_uri() );
	}	
}
add_action( 'wp_enqueue_scripts', 'brawny_scripts' );

function brawny_admin_style() {
	wp_enqueue_style( 'brawny-admin', BRAWNY_PARENT_URL . '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'brawny_admin_style' );