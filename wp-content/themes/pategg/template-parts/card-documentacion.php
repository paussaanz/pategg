<?php
$tipologia = get_the_terms(get_the_ID(), 'tipo-de-documento');
$tipologia_docu = $tipologia[0]->name;
$documento = get_field('post_type_documentos', get_the_id()) ? get_field('post_type_documentos', get_the_id())['url'] : '';
$pdfLogo   = get_template_directory_uri() . '/assets/dist/img/logos/block-banner-contacto.png'
?>

<div class="col-md-3 col-6 mb-3">
	<div class="card bg-gray p-2 h-100">
		<img class="aspect-card-documentacion rounded w-100"
			 src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
			 alt="Image pategg"/>
		<div class="card-body p-0 pt-2 pb-3">
			<h3 class="legend raleway fw-light"
				data-documento="<?= $documento ?>"><?= get_the_title() ?></h3>
			<div class="d-flex justify-content-between icons-black">
				<p class="tag"><?= $tipologia_docu ?></p>
				<div>
					<button type="button" class="btn btn-link icon-download p-0" data-bs-toggle="modal"
							data-bs-target="#descargaFormModal" data-documento="<?= $documento ?>">
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
