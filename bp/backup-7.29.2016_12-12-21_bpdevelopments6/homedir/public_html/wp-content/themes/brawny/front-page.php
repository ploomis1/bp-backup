<?php
/**
 * The Front Page template file.
 *
 * This is the front page template file, use to display static page
 * when set 'Front page displays' to a page in Reading Settings
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brawny
 */
if ( 'posts' == get_option( 'show_on_front' ) ) {
	include get_home_template();
} else {
	get_header();

	if ( isset( $brawny ) ) {
		$slides = isset($brawny['slides']) ? $brawny['slides'] : '';
		$output = '';

		$output .= '<div class="flex-container">';
		$output .= '<div class="flexslider">';
		$output .= '<ul class="slides">';

		foreach ( (array)$slides as $slide ) {
			$output .= '<li>';
			if ( isset( $slide['image'] ) && $slide['image'] != '' ) {
				$slide_image = $slide['image'];
				if ( isset( $slide['description'] ) && $slide['description'] != '' ) {
					$slide_description = $slide['description'];
				} else {
					$slide_description = '';
				}
			} else {
				$slide_image = $brawny_home['slide'];
				$slide_description = $brawny_home['caption'];
			}

			$output .= '<div class="flex-image"><img src="' . esc_url( $slide_image ) . '" alt="" ></div>';
			if( $slide_description != '' ) {
				$output .= '<div class="flex-caption">' . $slide_description . '</div>';
			}
			$output .= '</li>';
		}

		$output .= '</ul>';
		$output .= '</div><!-- .flexslider -->';
		$output .= '</div><!-- .flex-container -->';

		echo $output;

		$output = '';
		$output = '<div class="services">';
		$output .= '<div class="container">';
		$service_icon = $brawny_home['service-icon'];
		$service_title = $brawny_home['service-title'];
		$service_description = $brawny_home['service-description'];
		$dummy_service = '';
		$dummy_service .= '<div class="one-third column" class="service">';
		$dummy_service .= '<div class="service-title"><p><i class="' . esc_attr( $brawny_home['service-icon'] ) . '"></i></p>';
		$dummy_service .= '</div>';
		$dummy_service .= '<div class="service">' . '<h3>' . esc_html( $brawny_home['service-title'] ) . '</h3>' . $brawny_home['service-description'] . '</div>';
		$dummy_service .= '</div><!-- .one-third -->';

		if ( isset( $brawny['service-icon-1'], $brawny['service-title-1'], $brawny['service-description-1'] ) && ( $brawny['service-icon-1'] != '' && $brawny['service-title-1'] != '' && $brawny['service-description-1'] != '' )  ) {
			$output .= '<div class="one-third column" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $brawny['service-icon-1'] ) . '"></i></p>';
			$output .= '</div>';
			$output .= '<div class="service">' . '<h3>' . esc_html( $brawny['service-title-1'] ) . '</h3>'. $brawny['service-description-1'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		if ( isset( $brawny['service-icon-2'], $brawny['service-title-2'], $brawny['service-description-2'] ) && ( $brawny['service-icon-2'] != '' && $brawny['service-title-2'] != '' && $brawny['service-description-2'] != '' )  ) {
			$output .= '<div class="one-third column" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $brawny['service-icon-2'] ) . '"></i></p>';
			$output .= '</div>';
			$output .= '<div class="service">' . '<h3>' . esc_html( $brawny['service-title-2'] ) . '</h3>' . $brawny['service-description-2'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		if ( isset( $brawny['service-icon-3'], $brawny['service-title-3'], $brawny['service-description-3'] ) && ( $brawny['service-icon-3'] != '' && $brawny['service-title-3'] != '' && $brawny['service-description-3'] != '' )  ) {
			$output .= '<div class="one-third column" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $brawny['service-icon-3'] ) . '"></i></p>';
			$output .= '</div>';
			$output .= '<div class="service">' . '<h3>' . esc_html( $brawny['service-title-3'] ) . '</h3>'. $brawny['service-description-3'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}
		$output .= '</div><!-- .container -->';
		$output .= '</div><!-- .services -->';

		echo $output;

?>
		<div class="container">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php brawny_recent_posts(); ?>

	<?php
	}
?>

				</main><!-- #main -->
			</div><!-- #primary -->
<?php
	get_footer();
}
?>
