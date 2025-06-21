<?php

/**
 * Enqueue scripts and styles.
 */
function pategg_scripts() {
	wp_enqueue_style('pategg-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('pategg-style', 'rtl', 'replace');

	//wp_enqueue_script('pategg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'pategg_scripts');


//! scripts y styles
function pategg_scripts_styles() {

	// Estilos
	wp_enqueue_style('all', get_template_directory_uri() . '/assets/dist/css/all.css', array(), '1.0.3');
	// hoja de estilos principal
	wp_enqueue_style('style', get_stylesheet_uri(), array('all'), '1.0.0');

	wp_enqueue_script('all', get_template_directory_uri() . '/assets/dist/js/all.js', array(), '1.0.3', true);

	wp_enqueue_script(
		'places',
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVFp7rOsdigQAvYQTmaINR74hW06j3C0g&libraries=places&loading=async',
		array(),
		'1.0.1',
		true
	);
}

add_action('wp_enqueue_scripts', 'pategg_scripts_styles');


//! scripts y styles
function pategg_scripts_styles_editor() {

	// Estilos

	wp_enqueue_style('admin', get_template_directory_uri() . '/assets/dist/css/admin.css', array(), '1.0.0');

	wp_enqueue_style('style', get_stylesheet_uri(), array('admin'), '1.0.0');
}


add_action('enqueue_block_editor_assets', 'pategg_scripts_styles_editor');
