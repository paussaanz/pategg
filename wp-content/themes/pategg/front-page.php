<?php
/**
 * Front Page
 */


// Si esta página usa la plantilla personalizada 'template-landing.php', inclúyela directamente
if (get_page_template_slug() === 'template-landing.php') {
	include locate_template('template-landing.php');
    return;
}

$hero = get_field('hero_general_selector');
get_header(); ?>

	<main id="primary" class="site-main">
		<?php
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
		?>
	</main>
<?php
get_sidebar();
get_footer();
