<?php
/**
 * Hero de las paginas de pategg con vídeo
 */
$hero_general_titulo = get_field('hero_general_titulo') ?: 'pategg';
$hero_general_titulo_segunda_linea = get_field( 'hero_general_titulo_segunda_linea' );
$hero_general_subtitulo = get_field('hero_general_subtitulo');
$hero_general_cta    = get_field('hero_general_cta');
$cta_text            = $hero_general_cta ? $hero_general_cta['title'] : 'Contact';
$cta_link            = $hero_general_cta ? $hero_general_cta['url'] : '#';
$cta_target          = $hero_general_cta ? $hero_general_cta['target'] : '_blank';

$hero_general_video_video = get_field( 'block_banner_video_video' );

$hero_general_video_over       = get_field('hero_general_video_over');
$hero_general_video_porcentaje = get_field('hero_general_video_porcentaje');

?>
<!-- Hero Cabecera -->
<section class="section">
	<div class="video-background-wrapper h-view position-relative <?= $hero_general_video_over ?>">
		<video autoplay=""
			   class="video-background object-fit-cover h-100 w-100" loop="" muted=""
               src="
			   <?= $hero_general_video_video ? $hero_general_video_video['url'] : ''; ?>">Tu navegador no soporta la
            etiqueta de video.
		</video>
		<div class="video-content position-absolute top-0 row m-0 h-100 w-100 justify-content-center align-content-center overwhite"
			 style="
					 --bg-porcentaje: <?= $hero_general_video_porcentaje / 100 ?>;
					 ">
			<div class="col-11 col-md-8 md-5 p-0 text-center">
                <h1 class="h2 mb-4 text-white">
					<?php if ( $hero_general_subtitulo ) : ?>
                        <span class="mt-3 fs-6 d-block raleway fw-light"><?= $hero_general_subtitulo ?></span>
					<?php endif; ?>
                    <span class="d-block">
                        <?= $hero_general_titulo ?>
                        </span>
					<?php if ( $hero_general_titulo_segunda_linea ) : ?>
                        <span class="d-block"><?= $hero_general_titulo_segunda_linea ?></span>
					<?php endif; ?>
                </h1>
				<a class="btn btn-primary px-5" href="<?= $cta_link ?>" target="<?= $cta_target ?>">
					<?= $cta_text ?>
				</a>
			</div>
		</div>
	</div>
</section>
