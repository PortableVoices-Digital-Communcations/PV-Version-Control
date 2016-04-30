<?php
/**
 * @package ultra
 * @since ultra 1.0
 * @license GPL 2.0
 */

define('SITEORIGIN_IS_PREMIUM', true);

// Include all the premium extras
include get_template_directory() . '/premium/extras/ajax-comments/ajax-comments.php';
include get_template_directory() . '/premium/extras/customizer/customizer.php';
include get_template_directory() . '/premium/extras/share/share.php';

// Theme specific files
include get_template_directory() . '/premium/inc/settings.php';
include get_template_directory() . '/premium/inc/customizer.php';

function ultra_premium_setup(){
	if ( siteorigin_setting( 'comments_ajax_comments' ) ) siteorigin_ajax_comments_activate();
	if ( siteorigin_setting( 'social_share_post' ) ) siteorigin_share_activate();	
}
add_action( 'after_setup_theme', 'ultra_premium_setup', 15 );

if ( ! function_exists( 'ultra_premium_logo_retina' ) ) :
/**
 * Set the Retina logo.
 */
function ultra_premium_logo_retina( $attr ) {
	$logo = siteorigin_setting( 'header_image_retina' );
	if ( $logo ) {
		$image = wp_get_attachment_image_src( $logo, 'full' );

		// Ignore empty images
		if ( empty( $image ) ) return $attr;
		list ( $src, $height, $width ) = $image;

		$attr['data-retina-image'] = $src;
	}

	return $attr;
}
add_filter( 'ultra_logo_image_attributes', 'ultra_premium_logo_retina' );
endif;

if ( ! function_exists( 'ultra_premium_show_social_share' ) ) :
/**
 * Show the social share icons.
 */
function ultra_premium_show_social_share() {
	if ( siteorigin_setting( 'social_share_post' ) && is_single() ) {
		siteorigin_share_render( array(
			'twitter' => siteorigin_setting( 'social_twitter' ),
		) );
	}
}
add_action( 'ultra_entry_main_bottom', 'ultra_premium_show_social_share' );
endif;