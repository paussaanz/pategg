<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pategg
 */
$hero = get_field('hero_general_selector');
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while (have_posts()) :
			the_post();

			if ($hero == "video") {
				get_template_part('template-parts/hero-video');
			}
			elseif ($hero == "image") {
				get_template_part('template-parts/hero-image');
			}
			else {
				echo '<div class="py-5"></div>';
			}
			// Contenido de la página
			the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
