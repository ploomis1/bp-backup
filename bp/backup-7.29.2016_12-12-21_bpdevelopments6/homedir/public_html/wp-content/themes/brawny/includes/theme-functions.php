<?php
/**
 * Theme Functions
 *
 * Various functions to use through out site such as breadcrumb, pagination, etc
 *
 * @package BRAWNY
 *
 * @since 1.0
 *
 */

	// cleaning up excerpt
	add_filter( 'excerpt_more','brawny_excerpt_more' );

	// This removes the annoying […] to a Read More link
	function brawny_excerpt_more( $excerpt ) {
		global $post;
		// edit here if you like
		$output = sprintf( __( '<p class="readmore"><a href="%1$s" title="Read %2$s">Read more &raquo;</a></p>','brawny' ), esc_attr( get_permalink( $post->ID ) ), esc_attr( get_the_title( $post->ID ) ) );
		return $output;
	}

	function brawny_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length','brawny_excerpt_length',999 );

	function brawny_content_class() {
		global $brawny;
		if( isset( $brawny['main_layout'])) {
			if( 'left' == $brawny['main_layout'] ) {
				$content_class = 'offset-by-one';
			} 			
		} else {
			$content_class = '';
		}
		return $content_class;
	}

	function brawny_sidebar_class() {
		global $brawny;
		if( isset( $brawny['main_layout'] ) ) {
			if( 'left' == $brawny['main_layout'] ) {
				$sidebar_class = 'offset-by-one';
			} 
		} else {
			$sidebar_class = '';
		}
		return $sidebar_class;	
	}

	function brawny_display_footer_credits() {
		$credits = '';
		$credits .= '<a href="' . esc_url( __( 'http://wordpress.org/', 'brawny' ) ) . '">' . sprintf( __( 'Proudly powered by %s', 'brawny' ), 'WordPress' ) . '</a>';
		$credits .= '<span class="sep"> | </span>';
		$credits .= sprintf( __( 'Theme %1$s by %2$s.', 'brawny' ), 'Brawny', '<a href="http://www.webulousthemes.com/" rel="designer">Webulous Themes</a>' );
		echo $credits;
	}

	add_action( 'brawny_footer_credits' , 'brawny_display_footer_credits' );