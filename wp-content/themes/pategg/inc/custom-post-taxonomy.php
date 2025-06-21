<?php


// Register Custom Post Type
function custom_post_type() {
	// pategg -> ID 1
	/**
	 * Post type Producto
	 */
	$labels  = array(
		'name'                  => _x('Productos', 'pategg'),
		'singular_name'         => _x('Producto', 'pategg'),
		'menu_name'             => __('Productos', 'pategg'),
		'name_admin_bar'        => __('Productos', 'pategg'),
		'archives'              => __('Archivos de productos', 'pategg'),
		'attributes'            => __('Atributos de productos', 'pategg'),
		'parent_item_colon'     => __('Productos padre', 'pategg'),
		'all_items'             => __('Todos los productos', 'pategg'),
		'add_new_item'          => __('Añadir nuevo producto', 'pategg'),
		'add_new'               => __('Añadir nuevo', 'pategg'),
		'new_item'              => __('Nuevo producto', 'pategg'),
		'edit_item'             => __('Editar producto', 'pategg'),
		'update_item'           => __('Actualizar producto', 'pategg'),
		'view_item'             => __('Ver producto', 'pategg'),
		'view_items'            => __('Ver productos', 'pategg'),
		'search_items'          => __('Buscar producto', 'pategg'),
		'not_found'             => __('No se han encontrado productos', 'pategg'),
		'not_found_in_trash'    => __('No se han encontrado productos en la papelera', 'pategg'),
		'featured_image'        => __('Imagen destacada', 'pategg'),
		'set_featured_image'    => __('Establecer imagen destacada', 'pategg'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'pategg'),
		'use_featured_image'    => __('Usar como imagen destacada', 'pategg'),
		'insert_into_item'      => __('Insertar en producto', 'pategg'),
		'uploaded_to_this_item' => __('Subir producto', 'pategg'),
		'items_list'            => __('Lista de productos', 'pategg'),
		'items_list_navigation' => __('Navegar en los productos', 'pategg'),
		'filter_items_list'     => __('Filtrar productos', 'pategg'),
	);
	$rewrite = array(
		'slug' => 'productos', //productos
		'with_front' => false,
		'pages'      => true,
		'feeds'      => true,
	);
	$args    = array(
		'label'               => __('Producto', 'pategg'),
		'description'         => __('Añade y gestiona todos tus productos', 'pategg'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'custom-fields', 'page-attributes', 'revisions', 'thumbnail'),
		'taxonomies'          => array(),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-tablet',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);

	register_post_type('productos', $args);

	/**
	 * Post type Proyecto
	 */
	$labels  = array(
		'name'                  => _x('Proyectos', 'pategg'),
		'singular_name'         => _x('Proyecto', 'pategg'),
		'menu_name'             => __('Proyectos', 'pategg'),
		'name_admin_bar'        => __('Proyectos', 'pategg'),
		'archives'              => __('Archivos de proyectos', 'pategg'),
		'attributes'            => __('Atributos de proyectos', 'pategg'),
		'parent_item_colon'     => __('Proyectos padre', 'pategg'),
		'all_items'             => __('Todos los proyectos', 'pategg'),
		'add_new_item'          => __('Añadir nuevo proyecto', 'pategg'),
		'add_new'               => __('Añadir nuevo', 'pategg'),
		'new_item'              => __('Nuevo proyecto', 'pategg'),
		'edit_item'             => __('Editar proyecto', 'pategg'),
		'update_item'           => __('Actualizar proyecto', 'pategg'),
		'view_item'             => __('Ver proyecto', 'pategg'),
		'view_items'            => __('Ver proyectos', 'pategg'),
		'search_items'          => __('Buscar proyecto', 'pategg'),
		'not_found'             => __('No se han encontrado proyectos', 'pategg'),
		'not_found_in_trash'    => __('No se han encontrado proyectos en la papelera', 'pategg'),
		'featured_image'        => __('Imagen destacada', 'pategg'),
		'set_featured_image'    => __('Establecer imagen destacada', 'pategg'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'pategg'),
		'use_featured_image'    => __('Usar como imagen destacada', 'pategg'),
		'insert_into_item'      => __('Insertar en proyecto', 'pategg'),
		'uploaded_to_this_item' => __('Subir proyecto', 'pategg'),
		'items_list'            => __('Lista de proyectos', 'pategg'),
		'items_list_navigation' => __('Navegar en los proyectos', 'pategg'),
		'filter_items_list'     => __('Filtrar proyectos', 'pategg'),
	);
	$rewrite = array(
		'slug'       => 'proyectos',
		'with_front' => false,
		'pages'      => true,
		'feeds'      => true,
	);
	$args    = array(
		'label'               => __('Proyecto', 'pategg'),
		'description'         => __('Añade y gestiona todos tus proyectos', 'pategg'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'excerpt', 'custom-fields', 'page-attributes', 'revisions', 'thumbnail'),
		'taxonomies'          => array(),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		//'capability_type'     => 'page',
	);

	register_post_type('proyectos', $args);

	/**
	 * Post type Accesibilidad
	 */
	$labels  = array(
		'name'                  => _x('Accesibilidad', 'pategg'),
		'singular_name'         => _x('Accesibilidad', 'pategg'),
		'menu_name'             => __('Accesibilidades', 'pategg'),
		'name_admin_bar'        => __('Accesibilidades', 'pategg'),
		'archives'              => __('Archivos de accesibilidades', 'pategg'),
		'attributes'            => __('Atributos de accesibilidades', 'pategg'),
		'parent_item_colon'     => __('Accesibilidades padre', 'pategg'),
		'all_items'             => __('Todas las accesibilidades', 'pategg'),
		'add_new_item'          => __('Añadir nueva accesibilidad', 'pategg'),
		'add_new'               => __('Añadir nueva', 'pategg'),
		'new_item'              => __('Nueva accesibilidad', 'pategg'),
		'edit_item'             => __('Editar accesibilidad', 'pategg'),
		'update_item'           => __('Actualizar accesibilidad', 'pategg'),
		'view_item'             => __('Ver accesibilidad', 'pategg'),
		'view_items'            => __('Ver accesibilidades', 'pategg'),
		'search_items'          => __('Buscar accesibilidad', 'pategg'),
		'not_found'             => __('No se han encontrado accesibilidades', 'pategg'),
		'not_found_in_trash'    => __('No se han encontrado accesibilidades en la papelera', 'pategg'),
		'featured_image'        => __('Imagen destacada', 'pategg'),
		'set_featured_image'    => __('Establecer imagen destacada', 'pategg'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'pategg'),
		'use_featured_image'    => __('Usar como imagen destacada', 'pategg'),
		'insert_into_item'      => __('Insertar en accesibilidad', 'pategg'),
		'uploaded_to_this_item' => __('Subir accesibilidad', 'pategg'),
		'items_list'            => __('Lista de accesibilidades', 'pategg'),
		'items_list_navigation' => __('Navegar en las accesibilidades', 'pategg'),
		'filter_items_list'     => __('Filtrar accesibilidades', 'pategg'),
	);
	$rewrite = array(
		'slug'       => 'accesibilidad',
		'with_front' => false,
		'pages'      => true,
		'feeds'      => true,
	);
	$args    = array(
		'label'               => __('Accesibilidad', 'pategg'),
		'description'         => __('Añade y gestiona todos tus accesibilidades', 'pategg'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'custom-fields', 'page-attributes', 'revisions', 'thumbnail'),
		'taxonomies'          => array(),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-universal-access',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);

	register_post_type('accesibilidad', $args);

	$labels  = array(
		'name'                  => _x('Documentos', 'pategg'),
		'singular_name'         => _x('Documento', 'pategg'),
		'menu_name'             => __('Documentos', 'pategg'),
		'name_admin_bar'        => __('Documentos', 'pategg'),
		'archives'              => __('Archivos de documentos', 'pategg'),
		'attributes'            => __('Atributos de documentos', 'pategg'),
		'parent_item_colon'     => __('Documentos padre', 'pategg'),
		'all_items'             => __('Todos los documentos', 'pategg'),
		'add_new_item'          => __('Añadir nuevo documento', 'pategg'),
		'add_new'               => __('Añadir nuevo', 'pategg'),
		'new_item'              => __('Nuevo documento', 'pategg'),
		'edit_item'             => __('Editar documento', 'pategg'),
		'update_item'           => __('Actualizar documento', 'pategg'),
		'view_item'             => __('Ver documento', 'pategg'),
		'view_items'            => __('Ver documentos', 'pategg'),
		'search_items'          => __('Buscar documento', 'pategg'),
		'not_found'             => __('No se han encontrado documentos', 'pategg'),
		'not_found_in_trash'    => __('No se han encontrado documentos en la papelera', 'pategg'),
		'featured_image'        => __('Imagen destacada', 'pategg'),
		'set_featured_image'    => __('Establecer imagen destacada', 'pategg'),
		'remove_featured_image' => __('Eliminar imagen destacada', 'pategg'),
		'use_featured_image'    => __('Usar como imagen destacada', 'pategg'),
		'insert_into_item'      => __('Insertar en documento', 'pategg'),
		'uploaded_to_this_item' => __('Subir documento', 'pategg'),
		'items_list'            => __('Lista de documentos', 'pategg'),
		'items_list_navigation' => __('Navegar en los documentos', 'pategg'),
		'filter_items_list'     => __('Filtrar documentos', 'pategg'),
	);
	$rewrite = array(
		'slug'       => 'documentos', //documentos
		'with_front' => false,
		'pages'      => false,
		'feeds'      => false,
	);
	$args    = array(
		'label'               => __('Documento', 'pategg'),
		'description'         => __('Añade y gestiona todos tus documentos', 'pategg'),
		'labels'              => $labels,
		'supports'            => array('title', 'custom-fields', 'page-attributes', 'revisions', 'thumbnail'),
		'taxonomies'          => array(),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-media-document',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);

	register_post_type('documentos', $args);
}

add_action('init', 'custom_post_type');

// Register Custom Taxonomy
function pategg_taxonomy() {

	$labels = array(
		'name'              => _x('Categoría de ascensor', 'pategg'),
		'singular_name'     => _x('Categoría de Ascensor', 'pategg'),
		'search_items'      => __('Buscar categoría de ascensor'),
		'all_items'         => __('Todas las categorías de ascensores'),
		'parent_item'       => __('Categoría de Ascensor padre'),
		'parent_item_colon' => __('Categoría de Ascensor padre:'),
		'edit_item'         => __('Editar categoría de ascensor'),
		'update_item'       => __('Actualizar categoría de ascensor'),
		'add_new_item'      => __('Añadir nueva categoría de ascensor'),
		'new_item_name'     => __('Nombre del nueva categoría de ascensor'),
		'menu_name'         => __('Categoría de Ascensor'),
	);

	$args = array(
		'hierarchical'      => true, // False para no tener padre, ni jerarquía
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categoria-de-ascensor'),
	);

	register_taxonomy('categoria-de-ascensor', array('productos'), $args);


	$labels = array(
		'name'              => _x('Categoría de accesibilidad', 'pategg'),
		'singular_name'     => _x('Categoría de Accesibilidad', 'pategg'),
		'search_items'      => __('Buscar categoría de accesibilidad'),
		'all_items'         => __('Todas las categorías de accesibilidades'),
		'parent_item'       => __('Categoría de Accesibilidad padre'),
		'parent_item_colon' => __('Categoría de Accesibilidad padre:'),
		'edit_item'         => __('Editar categoría de accesibilidad'),
		'update_item'       => __('Actualizar categoría de accesibilidad'),
		'add_new_item'      => __('Añadir nueva categoría de accesibilidad'),
		'new_item_name'     => __('Nombre del nueva categoría de accesibilidad'),
		'menu_name'         => __('Categoría de Accesibilidad'),
	);

	$args = array(
		'hierarchical'      => true, // False para no tener padre, ni jerarquía
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categoria-de-accesibilidad'),
	);

	register_taxonomy('categoria-de-accesibilidad', array('accesibilidad'), $args);

	$labels = array(
		'name'              => _x('Categoría de documentos', 'pategg'),
		'singular_name'     => _x('Categoría de documento', 'pategg'),
		'search_items'      => __('Buscar categoría de documento'),
		'all_items'         => __('Todas las categorías de documento'),
		'parent_item'       => __('Categoría de documento padre'),
		'parent_item_colon' => __('Categoría de Documento padre:'),
		'edit_item'         => __('Editar categoría de documento'),
		'update_item'       => __('Actualizar categoría de documento'),
		'add_new_item'      => __('Añadir nueva categoría de documento'),
		'new_item_name'     => __('Nombre del nueva categoría de documento'),
		'menu_name'         => __('Categoría de Documento'),
	);

	$args = array(
		'hierarchical'      => true, // False para no tener padre, ni jerarquía
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categoria-de-documento'),
	);

	register_taxonomy('categoria-de-documento', array('documentos'), $args);

	$labels = array(
		'name'              => _x('Tipo de documentos', 'pategg'),
		'singular_name'     => _x('Tipo de documento', 'pategg'),
		'search_items'      => __('Buscar tipo de documento'),
		'all_items'         => __('Todos los tipos de documento'),
		'parent_item'       => __('Tipo de documento padre'),
		'parent_item_colon' => __('Tipo de Documento padre:'),
		'edit_item'         => __('Editar tipo de documento'),
		'update_item'       => __('Actualizar tipo de documento'),
		'add_new_item'      => __('Añadir nuevo tipo de documento'),
		'new_item_name'     => __('Nombre del nuevo tipo de documento'),
		'menu_name'         => __('Tipo de Documento'),
	);

	$args = array(
		'hierarchical'      => true, // False para no tener padre, ni jerarquía
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'tipo-de-documento'),
	);

	register_taxonomy('tipo-de-documento', array('documentos'), $args);

	$labels = array(
		'name'              => _x('Tipo de proyectos', 'pategg'),
		'singular_name'     => _x('Tipo de proyecto', 'pategg'),
		'search_items'      => __('Buscar tipo de proyecto'),
		'all_items'         => __('Todos los tipos de proyecto'),
		'parent_item'       => __('Tipo de proyecto padre'),
		'parent_item_colon' => __('Tipo de proyecto padre:'),
		'edit_item'         => __('Editar tipo de proyecto'),
		'update_item'       => __('Actualizar tipo de proyecto'),
		'add_new_item'      => __('Añadir nuevo tipo de proyecto'),
		'new_item_name'     => __('Nombre del nuevo tipo de proyecto'),
		'menu_name'         => __('Tipo de proyecto'),
	);

	$args = array(
		'hierarchical'      => true, // False para no tener padre, ni jerarquía
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'tipo-de-proyecto'),
	);

	register_taxonomy('tipo-de-proyecto', array('proyectos'), $args);
}


add_action('init', 'pategg_taxonomy', 0);