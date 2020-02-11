<?php
/**
 * electxan modify editor
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue supplemental block editor styles.
 */
function electxan_block_editor_styles() {

	$css_dependencies = array();

	// Enqueue the editor styles.
	wp_enqueue_style( 'electxan-block-editor-styles', get_theme_file_uri( '/css/custom-editor-style.min.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );
	wp_style_add_data( 'electxan-block-editor-styles', 'rtl', 'replace' );
	wp_enqueue_style( 'electxan-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap', array(), $css_version );

}

add_action( 'enqueue_block_editor_assets', 'electxan_block_editor_styles', 1, 1 );

/**
 * ACF Color Palette
 *
 * Add default color palatte to ACF color picker for branding
 * Match these colors to colors set up in /sass/theme/theme_variables.scss
 *
*/
function electxan_acf_extension_enqueue() {
	
	$handle = 'acf-js';
	$src = get_template_directory_uri() . '/js/acf.js';
	
	$deps = array('acf-input');
	
	wp_enqueue_script( $handle, $src, $deps, false, true );

}

add_action( 'acf/input/admin_enqueue_scripts', 'electxan_acf_extension_enqueue' );

/** 
 * Function to return color class based on ACF color selection
*/
function get_color_class( $color_picker_value ) {
	
	$wd_block_colors = [
		// Change these to match theme color classes 
		'primary'	=> '#0f71b6',
		'secondary'	=> '#72c6a6',
		'accent' 	=> '#fbd402',
		'black'		=> '#1d1d2c',
		'white'     => '#ffffff',
		'light'		=> '#f8f8f8',
	];
	
	// Loop over colors array and set proper class if background color selection matches value
	foreach ( $wd_block_colors as $key => $value ) {
		
		if ( $color_picker_value == $value ) {
		
				return $key;
		
		}
	}
	
	return 'primary';
}

/** 
 * Function to return color class based on ACF color selection
*/
function get_color_text_class( $bg_color_class ) {
	
	$dark_colors = array('primary', 'secondary', 'black');
	
	if ( in_array( $bg_color_class, $dark_colors ) ) {
		
		return true;
		
	} else {
		
		return false;
		
	}
	
}
/** 
 * Generate button code
 * 
 * @param array $group_content.
 *
 * @return string $button_html
*/
function get_button( $group_content ) {

	$button = array (
		'link' 			=> $group_content['button']['button_link'],
		'class_size' 	=> $group_content['button']['button_size'],
		'class_color' 	=> get_color_class( $group_content['button']['button_color'] ),
		'label' 		=> $group_content['button']['button_label'],	
	);
	
	$button_html = '<a class="' . $button['class_size'] . ' btn-' . $button['class_color'] . '" href="' . $button['link']['url'] . '" target="' . $button['link']['target'] . '">' . $button['label'] . '</a>';

	return $button_html;
	
}