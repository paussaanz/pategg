<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pategg
 */

$args_footer = [
	'theme_location'  => 'menu-footer',
	'container'       => 'ul',
	'menu_class'      => 'list-unstyled',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'list_item_class' => '',
	'link_class'      => 'enlace-footer d-block',
	'fallback_cb'     => false,
];
?>

<aside>
    <div class="modal modalGaleria fade" id="imageModal" tabindex="-1" aria-labelledby="imagenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 d-flex justify-content-center align-items-center">
                    <div class="swiper swiper-modal">
                        <div class="swiper-wrapper" id="swiperModalWrapper">
                            <!-- Slides will be appended here by JavaScript -->
                        </div>
                        <div class="swiper-button-next d-none d-md-flex"></div>
                        <div class="swiper-button-prev d-none d-md-flex"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="imageModalInspiracion" tabindex="-1" aria-labelledby="imagenModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <img src="" id="modalImageInspiracion" class="img-fluid" alt="Imagen ampliada">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="presupuestoFormModal" tabindex="-1" aria-labelledby="presupuestoFormModal"
         aria-hidden="true">
		<div class="modal-dialog modal-lg border-0">
            <div class="modal-content h-95-view rounded overflow-clip">
				<?php
				get_template_part('template-parts/forms/form-presupuesto-empresas');
				get_template_part('template-parts/forms/form-presupuesto-particulares');
				?>
			</div>
		</div>
	</div>
	<div class="modal fade" id="llamadaFormModal" tabindex="-1" aria-labelledby="llamadaFormModal" aria-hidden="true">
		<div class="modal-dialog border-0 modal-dialog-centered">
			<div class="modal-content container-fluid bg-transparent border-0">
				<?php
				get_template_part('template-parts/forms/form-llamada');
				?>
			</div>
		</div>
	</div>
	<div class="modal fade" id="descargaFormModal" tabindex="-1" aria-labelledby="descargaFormModal" aria-hidden="true">
		<div class="modal-dialog border-0 modal-dialog-centered">
			<div class="modal-content container-fluid bg-transparent border-0">
				<?php
				get_template_part('template-parts/forms/form-descarga');
				?>
			</div>
		</div>
	</div>
	<div class="modal fade" id="endFormModal" tabindex="-1" aria-labelledby="endFormModal" aria-hidden="true">
		<div class="modal-dialog modal-sm border-0 modal-dialog-centered">
			<div class="modal-content container-fluid bg-primary border-0 rounded">
				<div class="row w-100 position-absolute">
					<div class="col-12 d-flex justify-content-end p-3">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="z-index: 1000"></button>
					</div>
				</div>
				<div class="modal-body py-5 px-4">
					<div class="py-5">
                        <div id="processForm" class="row justify-content-center py-5 ">
                            <div class="col-auto">
                                <div id="processFormLoading" class="spinner-border text-white my-5" role="status">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <div id="successForm" class="d-none row py-5">
							<div class="col-10">
								<h4 class="raleway mb-4">
									<?= __('¡Gracias por contactar con nosotros!', 'pategg') ?>
								</h4>
								<p class="fs-4">
									<?= __('En breve atenderemos tu solicitud.', 'pategg') ?>
								</p>
							</div>
						</div>
						<div id="errorForm" class="d-none row py-5">
							<div class="col-10">
								<h4 class="raleway mb-4">
									<?= __('¡Ups! Algo ha ido mal', 'pategg') ?>
								</h4>
								<p class="fs-4 pb-3">
									<?= __('Por favor, inténtalo de nuevo.', 'pategg') ?>
								</p>
							</div>
							<div class="col-12">
								<!-- Boton volver al formulario -->
                                <button type="button" class="btn btn-light mt-4" data-bs-dismiss="modal"
                                        aria-label="Close">
									<?= __('Volver al formulario', 'pategg') ?>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<!-- Footer -->
<footer id="site-footer">
	<section class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2">
				<div class="row pb-5">
					<div class="col-4 col-md-1 pb-4 pb-md-0">
						<img alt="pategg Logo" class="img-fluid w-100"
							 src="<?= get_field('opciones_sitio_logo_principal', 'option') ?>">
					</div>
					<div class="col-12 d-md-none"></div>
					<div class="col-6 col-md-3 offset-md-1 order-md-last">
						<h6 class="fw-bold mb-4 raleway"><?= __('Sobre nosotros', 'pategg') ?></h6>
						<?php wp_nav_menu($args_footer); ?>
						<ul class="list-unstyled mt-4">
							<li>
								<a class="enlace-footer d-block"
								   href="mailto:<?= get_field('opciones_sitio_email', 'option') ?>"><?= get_field('opciones_sitio_email', 'option') ?></a>
							</li>
							<li>
								<a class="enlace-footer d-block"
								   href="tel:+34<?= get_field('opciones_sitio_numero_telefono', 'option') ?>"><?= get_field('opciones_sitio_numero_telefono', 'option') ?></a>
							</li>
						</ul>
					</div>
					<div class="col-6 offset-md-1">
						<div class="row">
							<?php
							foreach (get_field('opciones_sitio_repetidor_direcciones', 'option') as $delegacion) {
								$tituloDireccion = $delegacion['opciones_sitio_repetidor_direcciones_titulo'];
								$mapaDireccion   = $delegacion['opciones_sitio_repetidor_direcciones_mapa'];
								?>
								<div class="col-12 col-md-6">
									<p class="mb-4"><?= $tituloDireccion ?></p>
									<p><?= $mapaDireccion['address'] ?></p>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="row pt-3 pt-md-4">
					<div class="col-12 opacity-50 overflow-clip">
						<img alt="" class="img-fluid w-100 opacity-25" style="margin-bottom: -5%;"
							 src="<?= get_field('opciones_sitio_logo_principal', 'option') ?>">
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>
<aside class="container pt-5 d-none">
	<div class="row justify-content-center">
		<div class="col-auto">
			<button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#presupuestoFormModal">
				[DEBUG] Modal Presupuesto
			</button>
		</div>
		<div class="col-auto">
			<button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#llamadaFormModal">
				[DEBUG] Modal Llamada
			</button>
		</div>
		<div class="col-auto">
			<button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#descargaFormModal">
				[DEBUG] Modal Descarga
			</button>
		</div>
		<div class="col-auto">
			<button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#endFormModal">
				[DEBUG] Modal End
			</button>
		</div>
	</div>
</aside>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
