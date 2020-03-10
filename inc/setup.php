<?php
/**
 * Theme basic setup
 *
 * @package electxan
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'electxan_setup' );

if ( ! function_exists( 'electxan_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function electxan_setup() {


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'electxan' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
		
	}
}

add_image_size('Square Medium', 400, 400, true);
add_image_size('Side Cover', 1200, 1000, true);
add_image_size('Hero Banner', 2400, 1600, true);
add_image_size('Lead Block', 1170, 846, true);
add_image_size('Full Screen', 1500, 900, array( 'left', 'top' ));

add_filter( 'excerpt_more', 'electxan_custom_excerpt_more' );

if ( ! function_exists( 'electxan_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function electxan_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'electxan_all_excerpts_get_more_link' );

if ( ! function_exists( 'electxan_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function electxan_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...]<p><a class="btn btn-secondary electxan-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More...',
			'electxan' ) . '</a></p>';
		}
		return $post_excerpt;
	}
}

add_action( 'wp_before_admin_bar_render', 'electxan_before_admin_bar_render' ); 

function electxan_before_admin_bar_render() {
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('customize');
}

if ( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

function add_favicon() {
	
	$favicon_path = get_template_directory_uri() . '/favicon.png';
	
	echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
	
}

add_action( 'wp_head', 'add_favicon' );
add_action( 'admin_head', 'add_favicon' );