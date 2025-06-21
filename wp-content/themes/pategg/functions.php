<?php
/**
 * pategg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pategg
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Configura los valores predeterminados del tema y registra la compatibilidad con varias funciones de WordPress.
 * Tenga en cuenta que esta función está enlazada con el gancho after_setup_theme, que
 * se ejecuta antes del gancho de inicio. El gancho de inicio es demasiado tarde para algunas funciones, como
 * para la indicación de soporte para miniaturas de publicaciones.
 */
function pategg_setup()
{
	/**
	 * Hacer que el tema esté disponible para la traducción.
	 * Las traducciones se pueden archivar en el directorio /languages/.
	 * Si está creando un tema basado en pategg, use buscar y reemplazar
	 * para cambiar 'pategg' al nombre de su tema en todos los archivos de plantilla.
	 */
	load_theme_textdomain( 'pategg', get_template_directory() . '/languages' );

	// Agregue enlaces predeterminados de fuentes RSS de publicaciones y comentarios a la cabecera.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Deje que WordPress administre el título del documento.
	 * Al agregar compatibilidad con temas, declaramos que este tema no utiliza un
	 * etiqueta <título> codificada de forma rígida en el encabezado del documento, y espera que WordPress
	 * proporcionarlo para nosotros.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Habilite el soporte para Publicar miniaturas en publicaciones y páginas.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Menús que se van a usar en este theme
	 */
	register_nav_menus(
		array(
			'menu-principal' => esc_html__( 'Principal', 'pategg' ),
			'menu-footer'    => esc_html__( 'Footer', 'pategg' ),
		)
	);

	/**
	 * Cambie el marcado principal predeterminado para el formulario de búsqueda, el formulario de comentarios y los comentarios
	 * para generar HTML5 válido.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Agregue compatibilidad con temas para la actualización selectiva de widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action( 'after_setup_theme', 'pategg_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pategg_content_width()
{
	$GLOBALS['content_width'] = apply_filters( 'pategg_content_width', 640 );
}

// add_action('after_setup_theme', 'pategg_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pategg_widgets_init()
{
	register_sidebar(
		array(
			'name'        => esc_html__( 'Sidebar', 'pategg' ),
			'id'            => 'sidebar-1',
			'description' => esc_html__( 'Add widgets here.', 'pategg' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

// add_action( 'widgets_init', 'pategg_widgets_init' );

/**
 * Encolar scripts y estilos.
 */
require get_template_directory() . '/inc/template-enqueued.php';

/**
 * Implementa la función de encabezado personalizado.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Etiquetas de plantilla personalizadas para este tema.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Funciones para los ACF
 */
require get_template_directory() . '/inc/acf-config.php';

/**
 * Funciones para la personalización
 */
require get_template_directory() . '/inc/custom-config.php';

/**
 * Funciones para la personalización
 */
require get_template_directory() . '/inc/custom-post-taxonomy.php';

/**
 * Funciones para los formularios AJAX
 */
require get_template_directory() . '/inc/ajax/ajax-config.php';

/**
 * Class para crear un menu personalizado y llamarlo con un walkers en wp_nav_menu
 */
require get_template_directory() . '/inc/navs/custom-nav-walker.php';

/**
 * Funciones personalizadas para los wp_nav_menu
 */
require get_template_directory() . '/inc/navs/custom-nav-menu.php';


/**
 * Funciones para recoger, enviar o insertar datos GTM datalayer
 */
require get_template_directory() . '/inc/gtm-functions.php';

/**
 * Filtros y botón de ver más en ajax
 */
require get_template_directory() . '/inc/ajax/ajax-blog.php';
require get_template_directory() . '/inc/ajax/ajax-documentation.php';
require get_template_directory() . '/inc/ajax/ajax-ascensores.php';
require get_template_directory() . '/inc/ajax/ajax-process.php';
require get_template_directory() . '/inc/ajax/ajax-security.php';


// Enqueue javascript file
add_action( 'wp_enqueue_scripts', 'pategg_insert_custom_js' );
function pategg_insert_custom_js()
{
//    wp_register_script('pategg_script', get_stylesheet_directory_uri(). '/js/script.js', array('jquery'), '1.0.0', true );
	wp_localize_script( 'all', 'pategg_form',
		[
			'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
			'frmNonce' => wp_create_nonce( 'secret-key-form' ) // Crea un nonce (Token) seguro
		] );
//    wp_enqueue_script('pategg_script');
}

function dump( $data )
{
	echo '<pre class="text-white bg-black w-max fs-7 py-5">';
	var_dump( $data );
	echo '</pre>';
}