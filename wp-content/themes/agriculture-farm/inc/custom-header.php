<?php
/**
 * @package Agriculture Farm
 * @subpackage agriculture_farm
 * @since agriculture-farm 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses agriculture_farm_header_style()
*/

function agriculture_farm_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'agriculture_farm_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1360,
		'height'                 => 110,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'agriculture_farm_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'agriculture_farm_custom_header_setup' );

if ( ! function_exists( 'agriculture_farm_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see agriculture_farm_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'agriculture_farm_header_style' );
function agriculture_farm_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$agriculture_farm_custom_css = "
        #header, .page-template-custom-front-page .info-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'agriculture-farm-basic-style', $agriculture_farm_custom_css );
	endif;
}
endif; // agriculture_farm_header_style