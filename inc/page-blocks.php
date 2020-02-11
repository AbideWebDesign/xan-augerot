<?php 
	

add_action('acf/init', 'electxan_acf_init');

function electxan_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a hero banner block
		acf_register_block(array(
			'name'				=> 'hero-banner',
			'title'				=> __('Hero Banner'),
			'description'		=> __('Hero banner to display on top of each page'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-center',
		));
		
		// register lead text block
		acf_register_block(array(
			'name'				=> 'lead',
			'title'				=> __('Lead Text'),
			'description'		=> __('Lead text block'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-left',
		));
		
		// register endorsements carousel
		acf_register_block(array(
			'name'				=> 'endorsements',
			'title'				=> __('Endorsements'),
			'description'		=> __('Endorsements carousel block'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-quote',
		));
		
		// register list banner carousel
		acf_register_block(array(
			'name'				=> 'list-banner',
			'title'				=> __('List Banner'),
			'description'		=> __('List banner block'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'editor-ul',
		));
		
		// register text block
		acf_register_block(array(
			'name'				=> 'text',
			'title'				=> __('Text Block'),
			'description'		=> __('Text block'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-left',
		));
		
		// register full screen image
		acf_register_block(array(
			'name'				=> 'full-image',
			'title'				=> __('Full Image Block'),
			'description'		=> __('Full screen image block'),
			'render_callback'	=> 'electxan_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-image',
		));
	}
}

function electxan_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/blocks" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
		
		include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
	
	}
}