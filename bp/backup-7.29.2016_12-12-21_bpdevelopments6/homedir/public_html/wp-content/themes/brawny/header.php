<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Brawny
 */
global $brawny;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function brawny_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'brawny_render_title' );
endif;
?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brawny' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<?php do_action( 'brawny_header_top' ); ?>
		<div id="header-bottom">
			<div class="container">
				<div class="site-branding eight columns">
					<?php if( isset( $brawny['site-title'] ) && isset( $brawny['custom-logo'] ) && $brawny['site-title'] ) : ?>
						<img src="<?php echo $brawny['custom-logo']['url']; ?>" alt="logo" >
					<?php else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
					<?php if( isset( $brawny['site-description'] ) && $brawny['site-description'] != 0 ) : ?>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>
				</div>

				<div class="eight columns">
					<?php do_action( 'brawny_header'); ?>
				</div>				
			</div>
		</div>
	<div id="nav-wrap">
		<div class="container">
			<nav id="site-navigation" class="main-navigation sixteen columns" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'brawny' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->		
		</div>
	</div>
	</header><!-- #masthead -->
<?php if( is_front_page() && ! is_home() ) : ?>
	<div id="content" class="site-content">
<?php else : ?>
	<div id="content" class="site-content container">
<?php endif; ?>