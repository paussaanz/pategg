<?php

if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' => 'Opciones del Sitio',
			'menu_title' => 'Opciones del sitio',
			'position'   => 2,
		)
	);
}

add_action('customize_register', 'ocultar_bloques_tema');

function ocultar_bloques_tema($wp_customize) {
	$wp_customize->remove_section('front_page');
	$wp_customize->remove_section('custom_css');
}

/**
 * Funciones en el menú de personalización de WordPress
 *
 * @package pategg
 */
function pategg_customizer_settings($wp_customize) {}

add_action('customize_register', 'pategg_customizer_settings');

function pategg_sanitize_select($input) {
	$valid = array(
		'left'  => 'left',
		'right' => 'right',
		'none'  => 'none',
	);
	return (array_key_exists($input, $valid)) ? $input : 'right';
}

// Función de saneamiento personalizada para checkboxes mú


function mi_panel_personalizacion($wp_customize) {}

add_action('customize_register', 'mi_panel_personalizacion');


//add_action('customize_register', 'mi_panel_personalizacion');


/**
 * Añade opciones de personalización para el sitio en el Personalizador de Temas.
 *
 * $logo_white_url = get_theme_mod('pategg_site_logo'); // Obtener la URL del logo
 * $logo_white_url = get_theme_mod('pategg_site_logo_white'); // Obtener la URL del logo para fondo blanco
 * $logo_mobile_url = get_theme_mod('pategg_site_logo_best');  // Obtener la URL del logo para versión móvil
 *
 * @param WP_Customize_Manager $wp_customize Objeto de la clase WP_Customize_Manager.
 */
function pategg_site_identity($wp_customize) {}

add_action('customize_register', 'pategg_site_identity');