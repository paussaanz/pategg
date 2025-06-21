<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package pategg
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function pategg_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'pategg_infinite_scroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_theme_support('jetpack-responsive-videos');

	// Add theme support for Content Options.
	add_theme_support(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => 'pategg-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}

add_action('after_setup_theme', 'pategg_jetpack_setup');

if (!function_exists('pategg_infinite_scroll_render')) :
	/**
	 * Custom render function for Infinite Scroll.
	 */
	function pategg_infinite_scroll_render() {
		while (have_posts()) {
			the_post();
			if (is_search()) :
				get_template_part('template-parts/content', 'search');
			else :
				get_template_part('template-parts/content', get_post_type());
			endif;
		}
	}
endif;
