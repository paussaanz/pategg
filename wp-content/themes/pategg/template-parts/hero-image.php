<?php
/**
 * Hero de las pagians de pategg con imagen
 */
$hero_general_titulo               = get_field('hero_general_titulo') ?: 'pategg';
$hero_general_titulo_segunda_linea = get_field('hero_general_titulo_segunda_linea');
$hero_general_subtitulo            = get_field('hero_general_subtitulo');
$hero_general_cta                  = get_field('hero_general_cta');
$cta_text                          = $hero_general_cta ? $hero_general_cta['title'] : 'Contact';
$cta_link                          = $hero_general_cta ? $hero_general_cta['url'] : '#';
$cta_target                        = $hero_general_cta ? $hero_general_cta['target'] : '_blank';

$hero_general_imagen_escritorio = get_field('hero_general_imagen_escritorio') ?: '';
$hero_general_imagen_mobile     = get_field('hero_general_imagen_mobile') ?: '';
$hero_general_imagen_over       = get_field('hero_general_imagen_over');
$hero_general_imagen_porcentaje = get_field('hero_general_imagen_porcentaje');

$breadcrumbs = '<a href="' . home_url() . '" class="text-white text-decoration-none">Home</a>';
if (is_singular()) {
	$post_type     = get_post_type();
	$post_type_obj = get_post_type_object($post_type);


	if ($post_type === 'proyectos') {
		$breadcrumbs .= ' <span class="text-white"> / </span> <a href=" https://pre.pategg.com/proyectos/ " class="text-white text-decoration-none">' . $post_type_obj->labels->name . '</a>';
	}
	elseif ($post_type === 'productos') {
		$breadcrumbs .= ' <span class="text-white"> / </span><span class="text-white">' . $post_type_obj->labels->name . '</span>';
	}


	$ancestors = get_post_ancestors(get_the_ID());
	if ($ancestors) {
		$ancestors = array_reverse($ancestors);
		foreach ($ancestors as $ancestor) {
			$breadcrumbs .= ' <span class="text-white"> / </span>  <a href="' . get_permalink($ancestor) . '" class="text-white text-decoration-none">' . get_the_title($ancestor) . '</a>';
		}
	}
	$breadcrumbs .= ' <span class="text-white"> / </span> <span class="text-white">' . get_the_title() . '</span>';
}
?>
<!-- Hero Cabecera -->
<section class="section py-hero">
	<div class="bg-image bg-md-image position-relative <?= $hero_general_imagen_over ?>"
		 style="
				 --bg-image: url('<?= $hero_general_imagen_escritorio ? $hero_general_imagen_escritorio['url'] : ''; ?> ');
				 --bg-md-image: url('<?= $hero_general_imagen_mobile ? $hero_general_imagen_mobile['url'] : ''; ?>');
				 --bg-porcentaje: <?= $hero_general_imagen_porcentaje / 100 ?>;
				 "
	>
		<?php if (!is_front_page()): ?>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-8 position-relative">
						<nav class="text-decoration-none cor-primary  position-absolute px-md-3 legend"
							 style="top: 120px; left: 0;">
							<?= $breadcrumbs ?>
						</nav>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="container-fluid ">
            <div class="row h-100-view justify-content-center align-content-center">
				<div class="col-11 col-md-8 md-5 text-center">
					<h1 class="h2 mb-4 text-white">
						<?php if ($hero_general_subtitulo) : ?>
							<span class="mt-3 fs-6 d-block raleway fw-light"><?= $hero_general_subtitulo ?></span>
						<?php endif; ?>
						<span class="d-block">
                        <?= $hero_general_titulo ?>
                        </span>
						<?php if ($hero_general_titulo_segunda_linea) : ?>
							<span class="d-block"><?= $hero_general_titulo_segunda_linea ?></span>
						<?php endif; ?>
					</h1>
					<?php if ($hero_general_cta) : ?>
						<a class="btn btn-primary px-5" href="<?= $cta_link ?>" target="<?= $cta_target ?>">
							<?= $cta_text ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
