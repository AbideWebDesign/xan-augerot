<?php
/**
 * electxan enqueue scripts
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'electxan_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function electxan_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'electxan-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		
		wp_enqueue_style( 'electxan-fonts', 'https://use.typekit.net/bgm1zdn.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'electxan-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		
		wp_enqueue_script( 'electxan-share', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e792cdae0c073c3', array(), true );
	}
} // endif function_exists( 'electxan_scripts' ).

add_action( 'wp_enqueue_scripts', 'electxan_scripts' );
