<?php

/** @noinspection PhpUnused */

/**
 * Esta función crea categorías para los bloques de Gutenberg y los coloca en primera posición
 */
function pategg_blocks_category($categories): array {

	$custom_block = array(
		[
			'slug'  => 'pategg-generales',
			'title' => __('pategg | Generales', 'pategg'),
		],
		[
			'slug'  => 'pategg-home',
			'title' => __('pategg | Home', 'pategg'),
		],

	);

	$categories_sorted = array();
	foreach ($custom_block as $category) {
		$categories_sorted[] = $category;
	}
	foreach ($categories as $category) {
		$categories_sorted[] = $category;
	}
	return $categories_sorted;
}

add_action('block_categories_all', 'pategg_blocks_category', 10, 2);
//https://stackoverflow.com/questions/65886937/show-preview-image-for-custom-gutenberg-blocks
function pategg_blocks(): void {

	if (function_exists('acf_register_block')) {
		/**
		 * Block Card Doble
		 */
		acf_register_block(
			array(
				'name'            => 'block-card-doble',
				'title'           => __('Block Card Doble', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene dos tarjetas de contenido con imagen, título, descripción y botón de contacto.', 'pategg'),
				'render_template' => 'template-parts/blocks/2-home/block-card-doble.php',
				'category'        => 'pategg-home',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-card-doble.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Text CTA
		 */
		acf_register_block(
			array(
				'name'            => 'block-text-cta',
				'title'           => __('Block Text CTA', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene un texto con un botón de contacto.', 'pategg'),
				'render_template' => 'template-parts/blocks/1-generales/block-text-cta.php',
				'category'        => 'pategg-generales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-text-cta.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Text Image
		 */
		acf_register_block(
			array(
				'name'            => 'block-text-image',
				'title'           => __('Block Text Image', 'pategg'),
				'post_types'      => array('post'),
				'description'     => __('Bloque que contiene texto a la izquierda y una imagen a la derecha.', 'pategg'),
				'render_template' => 'template-parts/blocks/11-articulos/block-text-image.php',
				'category'        => 'pategg-articulos',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-text-image.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Single Image
		 */
		acf_register_block(
			array(
				'name'            => 'block-single-image',
				'title'           => __('Block Single Image', 'pategg'),
				'post_types'      => array('post'),
				'description'     => __('Bloque que contiene una imagen.', 'pategg'),
				'render_template' => 'template-parts/blocks/11-articulos/block-single-image.php',
				'category'        => 'pategg-articulos',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-single-image.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Accordion Faqs
		 */
		acf_register_block(
			array(
				'name'            => 'block-accordion-faqs',
				'title'           => __('Block Accordion Faqs', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene las preguntas frecuentes.', 'pategg'),
				'render_template' => 'template-parts/blocks/1-generales/block-accordion-faqs.php',
				'category'        => 'pategg-generales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-accordion-faqs.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Swiper Ascensores
		 */
		acf_register_block(
			array(
				'name'            => 'block-swiper-ascensores',
				'title'           => __('Block Swiper Ascensores', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene un swiper con los modelos de ascensores y sus características.', 'pategg'),
				'render_template' => 'template-parts/blocks/1-generales/block-swiper-ascensores.php',
				'category'        => 'pategg-generales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-swiper-ascensores.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Artículos Relacionados
		 */
		acf_register_block(
			array(
				'name'            => 'block-articulos-relacionados',
				'title'           => __('Block Artículos Relacionados', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene los artículos relacionados del blog.', 'pategg'),
				'render_template' => 'template-parts/blocks/1-generales/block-articulos-relacionados.php',
				'category'        => 'pategg-generales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-articulos-relacionados.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Artículos Destacados
		 */
		acf_register_block(
			array(
				'name'            => 'block-articulos-destacados',
				'title'           => __('Block Artículos Destacados', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene los artículos destacados del blog.', 'pategg'),
				'render_template' => 'template-parts/blocks/10-blog/block-articulos-destacados.php',
				'category'        => 'pategg-blog',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-articulos-destacados.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
		/**
		 * Block Otros Artículos
		 */
		acf_register_block(
			array(
				'name'            => 'block-otros-articulos',
				'title'           => __('Block Otros Artículos', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene otros artículos del blog.', 'pategg'),
				'render_template' => 'template-parts/blocks/10-blog/block-otros-articulos.php',
				'category'        => 'pategg-blog',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-otros-articulos.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Inspiración
		 */
		acf_register_block(
			array(
				'name'            => 'block-inspiracion',
				'title'           => __('Block Inspiración', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene una galería de imágenes de inspiración.', 'pategg'),
				'render_template' => 'template-parts/blocks/6-profesionales/block-inspiracion.php',
				'category'        => 'pategg-profesionales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-inspiracion.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Configurador
		 */
		acf_register_block(
			array(
				'name'            => 'block-configurador',
				'title'           => __('Block Configurador', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene el configurador para crear el ascensor.', 'pategg'),
				'render_template' => 'template-parts/blocks/5-single-productos/block-configurador.php',
				'category'        => 'pategg-single-productos',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-configurador.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Documentación
		 */
		acf_register_block(
			array(
				'name'            => 'block-documentacion',
				'title'           => __('Block Documentación', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene la documentación técnica de los ascensores.', 'pategg'),
				'render_template' => 'template-parts/blocks/6-profesionales/block-documentacion.php',
				'category'        => 'pategg-profesionales',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-documentacion.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Historia
		 */
		acf_register_block(
			array(
				'name'            => 'block-historia',
				'title'           => __('Block Historia', 'pategg'),
				'post_types' => array('page', 'productos', 'accesibilidad', 'proyectos'),
				'description'     => __('Bloque que contiene un timeline con la historia de pategg.', 'pategg'),
				'render_template' => 'template-parts/blocks/14-quienes-somos/block-historia.php',
				'category'        => 'pategg-quienes-somos',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'        => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-historia.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);

		/**
		 * Block Text H3
		 */
		acf_register_block(
			array(
				'name'            => 'block-text-h3',
				'title'       => __('Block Text H3', 'pategg'),
				'post_types'  => array('post'),
				'description' => __('Bloque que contiene un título h3 y cuerpo de texto.', 'pategg'),
				'render_template' => 'template-parts/blocks/11-articulos/block-text-h3.php',
				'category'        => 'pategg-articulos',
				'mode'            => 'auto',
				'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16"><path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/><path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/> </svg>',
				'keywords'    => array('categorias', 'pategg'), 'render_callback' => 'render_preview',
				'example'         => array(
					'attributes' => array(
						'mode' => 'preview', // Important!
						'data' => array(
							'image' => '<img src="' . get_template_directory_uri() . '/assets/dist/img/blocks/block-text-h3.png' . '" style="display: block; margin: 0 auto;  max-width:100%;">'
						),
					),
				),
			)
		);
	}
}

add_action('acf/init', 'pategg_blocks');


/**
 * Poder ver la preview de los acf
 * @link https://support.advancedcustomfields.com/forums/topic/custom-fields-on-post-preview/
 */
function fix_acf_field_post_id_on_preview($post_id, $original_post_id) {
	// Don't do anything to options
	if (is_string($post_id) && str_contains($post_id, 'option')) {
		return $post_id;
	}
	// Don't do anything to blocks
	if (is_string($original_post_id) && str_contains($original_post_id, 'block')) {
		return $post_id;
	}

	// This should only affect on post meta fields
	if (is_preview()) {
		return get_the_ID();
	}

	return $post_id;
}

add_filter('acf/validate_post_id', __NAMESPACE__ . '\fix_acf_field_post_id_on_preview', 10, 2);


// ********** Ruta del archivo JSON Guardar campos ACF (¡esto funciona bien!)) **********

function my_acf_json_save_point(): string {

	// update path HAVING ISSUES!!!
	// return
	return plugin_dir_path(__FILE__) . 'acf-json';
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

// ********** Ruta del archivo JSON Cargar campos ACF (¿esto no funciona?) **********
/**
 * @param $paths
 */
function my_acf_json_load_point($paths) {
	// Remove original path
	unset($paths[0]); // Append our new path
	$paths[] = plugin_dir_path(__FILE__) . 'acf-json';

	return $paths;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

/**
 * Callback block render,
 * return preview image
 * @link //https://stackoverflow.com/questions/65886937/show-preview-image-for-custom-gutenberg-blocks
 * @link https://www.grbav.com/acf-custom-block-shows-preview-image-in-gutenberg/
 * @param $block
 */
function render_preview($block): void {
	/**
	 * Back-end preview
	 */

	/**
	 * Back-end preview
	 */
	if (!empty($block['data']['image'])) {
		echo $block['data']['image'];
	}
	else {
		if ($block) :
			$template = $block['render_template'];
			$template = str_replace('.php', '', $template);
			get_template_part('/' . $template);
		endif;
	}
}
