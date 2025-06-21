<?php
/**
 * The template for displaying all single posts proyectos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pategg
 */
$hero                             = get_field('hero_general_selector');
$post_type_proyectos_fecha        = get_field('post_type_proyectos_fecha');
$post_type_proyectos_localizacion = get_field('post_type_proyectos_localizacion');
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

			?>
			<section class="section-intro-proyecto">
				<div class="container-fluid pt-5">
					<div class="row">
						<div class="col-12 col-md-8 offset-md-2">
							<div class="row">
								<div class="col-12">
									<h2 class="h3"><?= get_the_title(); ?></h2>
									<p class="legend text-capitalize"><?php echo esc_html(get_field('post_type_proyectos_fecha')); ?>
										/ <?= $post_type_proyectos_localizacion ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
			// Contenido de la página
			the_content();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
