<?php
/**
 * Setup all the premium settings.
 * 
 * @package ultra
 * @since ultra 1.0
 * @license GPL 2.0
 */
function ultra_premium_theme_settings(){

	// Header
	siteorigin_settings_add_field('header', 'image_retina', 'media');

	// Comments
	siteorigin_settings_add_field('comments', 'ajax_comments', 'checkbox');

	// Social
	siteorigin_settings_add_field('social', 'share_post', 'checkbox');
	siteorigin_settings_add_field('social', 'twitter', 'text', null, array(
		'validator' => 'twitter',
	));

	// Footer
	siteorigin_settings_add_field('footer', 'attribution', 'checkbox');		

}
add_action('admin_init', 'ultra_premium_theme_settings', 15);

