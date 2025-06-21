<?php
$steps = [
	'Definir el perfil',
	'Contacto',
	'Necesidades',
	'Tipo de vivienda',
	'Tipo de proyecto',
	'Número de paradas',
	'Tiempo',
	'Documentación',
	'Añadido'
];
// Definimos la configuración del formulario en un array
$formSteps = [
	[
		'id'     => 'primerPasoParticulares',
		'title'  => __('¿Cuál es tu perfil?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'tipoPerfil',
				'options' => [
					'particular'  => __('Particular', 'pategg'),
					'profesional' => __('Profesional', 'pategg')
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'segundoPasoParticulares',
		'title'  => __('Déjanos tus datos de contacto', 'pategg'),
		'fields' => [
			['type' => 'text', 'name' => 'nombre', 'placeholder' => __('Nombre', 'pategg')],
			['type' => 'text', 'name' => 'apellidos', 'placeholder' => __('Apellidos', 'pategg')],
			['type' => 'email', 'name' => 'email', 'placeholder' => __('Email', 'pategg')],
			['type' => 'text', 'name' => 'ciudad', 'placeholder' => __('Ciudad', 'pategg')],
			['type' => 'text', 'name' => 'codigoPostal', 'placeholder' => __('Código postal', 'pategg')],
			['type' => 'tel', 'name' => 'telefono', 'placeholder' => __('Teléfono', 'pategg')]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'tercerPasoParticulares',
		'title'  => __('¿Qué necesitas?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'necesidades',
				'options' => [
					'accesibilidad' => __('Mejorar la accesibilidad de mi vivienda', 'pategg'),
					'revalorizar'   => __('Revalorizar mi propiedad', 'pategg'),
					'comodidad'     => __('Mayor comodidad para mi familia', 'pategg'),
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'cuartoPasoParticulares',
		'title'  => __('¿Qué tipo de vivienda es?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'tipoVivienda',
				'options' => [
					'viviendaUnifamiliar' => __('Vivienda unifamiliar', 'pategg'),
					'pisoDuplex'          => __('Piso dúplex', 'pategg'),
					'localComercial'      => __('Local comercial', 'pategg'),
					'comunidadVecinos'    => __('Comunidad de vecinos', 'pategg'),
					'garaje'              => __('Garaje', 'pategg')
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'quintoPasoParticulares',
		'title'  => __('¿Qué tipo de proyecto es?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'tipoProyecto',
				'options' => [
					'instalacionAscensor' => __('Instalación ascensor', 'pategg'),
					'obraCivil'           => __('Obra civil', 'pategg'),
					'proyectoTecnico'     => __('Proyecto técnico', 'pategg')
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'sextoPasoParticulares',
		'title'  => __('¿Cuántas paradas necesitas?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'paradas',
				'options' => [
					'2'      => __('2', 'pategg'),
					'3'      => __('3', 'pategg'),
					'4'      => __('4', 'pategg'),
					'masDe5' => __('Más de 5', 'pategg')
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'septimoPasoParticulares',
		'title'  => __('¿Cuándo quieres empezar?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'fechaComienzo',
				'options' => [
					'loAntesPosible'   => __('Lo antes posible', 'pategg'),
					'menosDeSeisMeses' => __('En menos de 6 meses', 'pategg'),
					'masAdelante'      => __('Más adelante', 'pategg')
				]
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'octavoPasoParticulares',
		'title'  => __('¿Tienes planos o imágenes de tu vivienda?', 'pategg'),
		'fields' => [
			[
				'type'    => 'radio',
				'name' => 'documentos',
				'options' => [
					'adjuntarDocumentos' => __('Adjuntar documentos', 'pategg'),
					'no'                 => __('No', 'pategg')
				]
			],
			[
				'type'        => 'file',
				'name'        => 'documentos_PP',
				'placeholder' => __('Adjuntar documentos', 'pategg'),
				'class'       => 'form-control form-control-file',
				'multiple'    => true
			]
		],
		'button' => __('Siguiente', 'pategg')
	],
	[
		'id'     => 'novenoPasoParticulares',
		'title'  => __('¿Te gustaría contarnos algo más?', 'pategg'),
		'fields' => [
			[
				'type'        => 'textarea',
				'name' => 'descripcion',
				'placeholder' => __('Cuéntanos', 'pategg')
			],
			[
				'type'  => 'checkbox',
				'name' => 'comunicacionesComerciales',
				'label' => __('Acepto recibir comunicaciones comerciales', 'pategg')
			],
			[
				'type' => 'checkbox-privacy',
				'name' => 'politicaPrivacidad',
			]
		],
		'button' => __('Enviar', 'pategg')
	],
];


?>
<div class="formularioPresupuestos d-none h-100" id="formularioPresupuestosParticulares">
    <div class="container-fluid p-0 h-100">
        <div class="row g-0 header-form-presupuesto">
			<div class="col-5 d-none d-md-block">
				<div class="row justify-content-center mb-3">
					<div class="col-12 d-flex align-items-center icons-black">
						<button type="button"
								class="btn btn-link ps-4 text-dark prev-step prevButtonPresupuestoParticulares icon-left text-decoration-none opacity-0">
							<?= __('Atras', 'pategg') ?>
						</button>
					</div>
					<div class="col-10">
						<img alt=""
							 class="img-fluid w-100 opacity-25"
							 src="<?= get_field('opciones_sitio_logo_principal', 'option') ?? 'https://pre.pategg.com/wp-content/uploads/2024/04/logo-grande-negro.svg' ?>">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-7 bg-warm-gray d-flex justify-content-end p-3">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
		</div>
		<div class="modal-body p-0">
			<section class="container-fluid p-0">
				<div class="row g-0">
					<div class="col-5 d-none d-md-block">
                        <div class="listadoPasos ps-5 h-header-form" id="listadoPasosParticulares">
                            <ul class="list-group list-group-flush pt-4">
								<?php foreach ($steps as $key => $step) :
									$paso = $key + 1;
									?>
									<li class="list-group-item border-0 legend paso <?= $paso === 1 ? 'pasoActivo' : ''; ?> py-0"
										id="paso<?= $paso ?>ParticularesLista">
										<h6 class="fs-6 fw-normal raleway mb-1 pasoTitulo"><?= $step ?></h6>
										<p class="estadoProceso mb-3">
											<span class="enMarcha fw-bold <?= $paso === 1 ? '' : 'opacity-0' ?>"><?= __('En marcha', 'pategg') ?></span>
											<span class="completado fw-bold d-none"><?= __('Completado', 'pategg') ?></span>
										</p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="col-12 d-flex d-md-none icons-black bg-warm-gray">
						<button type="button"
								class="btn btn-link ps-4 text-dark prev-step prevButtonPresupuestoParticulares icon-left text-decoration-none opacity-0">
							<?= __('Atras', 'pategg') ?>
						</button>
					</div>
					<div class="col-12 col-md-7">
						<form id="formPresupuestosParticulares" class="bg-warm-gray p-4 legend m-0 h-100">
							<?php foreach ($formSteps as $key => $step) :
								$paso = $key + 1;
								?>
								<div id="<?= $step['id'] ?>" class="h-100 step-content-PP <?= $paso === 1 ? '' : 'd-none' ?>">
									<div class="row h-100 align-content-between">
										<div class="col-12 mb-3">
											<label class="d-block mb-4"><?= $step['title'] ?></label>
											<?php foreach ($step['fields'] as $field) : ?>
												<?php if ($field['type'] === 'radio') : ?>
													<?php foreach ($field['options'] as $value => $label) : ?>
														<div class="form-check mb-3">
															<input class="form-check-input"
																   type="radio"
																   name="<?= $field['name'] ?>"
																   id="<?= $field['name'] . '_PP' . '_' . $value ?>"
																   value="<?= $value ?>">
															<label class="form-check-label"
																   for="<?= $field['name'] . '_PP' . '_' . $value ?>"><?= $label ?></label>
														</div>
													<?php endforeach; ?>
												<?php elseif ($field['type'] === 'text' || $field['type'] === 'email' || $field['type'] === 'tel') : ?>
													<input class="form-control mb-3"
														   type="<?= $field['type'] ?>"
														   name="<?= $field['name'] ?>"
														   placeholder="<?= $field['placeholder'] ?>">
												<?php elseif ($field['type'] === 'textarea') : ?>
													<textarea class="form-control mb-3"
															  name="<?= $field['name'] ?>"
															  placeholder="<?= $field['placeholder'] ?>"></textarea>
												<?php elseif ($field['type'] === 'file') : ?>
													<input class="<?= $field['class'] ?>"
														   type="file"
														   name="<?= $field['name'] ?>" <?= isset($field['multiple']) && $field['multiple'] ? 'multiple' : '' ?>>
												<?php elseif ($field['type'] === 'checkbox') : ?>
													<div class="form-check mb-3">
														<input class="form-check-input"
															   type="checkbox"
															   name="<?= $field['name'] ?>"
															   id="<?= $field['name'] . '_PP' ?>">
														<label class="form-check-label" for="<?= $field['name'] . '_PP' ?>"><?= $field['label'] ?></label>
													</div>
												<?php elseif ($field['type'] === 'checkbox-privacy') : ?>
													<div class="form-check mb-3">
														<input class="form-check-input"
															   type="checkbox"
															   name="<?= $field['name'] ?>"
															   id="<?= $field['name'] . '_PP' ?>">
														<label class="form-check-label" for="<?= $field['name'] . '_PP' ?>">
															<?= __('Acepto la', 'pategg') ?>
															<a target="_blank" href="<?= get_privacy_policy_url() ?>"
															   class="link-dark"><?= __('política de privacidad', 'pategg') ?></a>
														</label>
													</div>
												<?php endif; ?>
											<?php endforeach; ?>
										</div>
										<div class="col-12">
											<button type="button"
													class="btn btn-primary w-100 nextButtonPresupuestoParticulares"
													data-current-step="<?= $step['id'] ?>"><?= $step['button'] ?></button>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>