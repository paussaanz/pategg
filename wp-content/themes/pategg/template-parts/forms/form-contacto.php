<form id="formContacto" class="bg-warm-gray p-4 rounded legend" data-formulario="contact">
	<div class="row mb-3 pt-2">
		<div class="col">
			<label class="d-none" for="nombre_c"><?= __('Nombre', 'pategg') ?></label>
			<input type="text"
				   id="nombre_c"
				   class="form-control"
				   name="First_Name"
				   data-required="required"
				   data-option="check"
				   data-name="First_Name"
				   placeholder="<?= __('Nombre', 'pategg') ?>">
		</div>
		<div class="col">
			<label class="d-none" for="apellidos_c"><?= __('Apellidos', 'pategg') ?></label>
			<input type="text"
				   id="apellidos_c"
				   class="form-control"
				   name="Last_Name"
				   data-required="required"
				   data-option="check"
				   data-name="Last_Name"
				   placeholder="<?= __('Apellidos', 'pategg') ?>">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<label class="d-none" for="ciudad_c"><?= __('Ciudad', 'pategg') ?></label>
			<select id="ciudad_c"
					type="select"
					class="form-select"
					data-required="required"
					data-option="check"
					data-name="Ciudad" name="Ciudad">
				<option selected><?= __('Ciudad', 'pategg') ?></option>
				<option value="1"><?= __('Ciudad 1', 'pategg') ?></option>
				<option value="2"><?= __('Ciudad 2', 'pategg') ?></option>
			</select>
		</div>
		<div class="col">
			<label class="d-none" for="codigoPostal_c"><?= __('Código Postal', 'pategg') ?></label>
			<input type="text"
				   id="codigoPostal_c"
				   name="Código postal"
				   class="form-control"
				   data-required="required"
				   data-option="cp"
				   data-name="Código postal"
				   placeholder="<?= __('Código Postal', 'pategg') ?>">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<label class="d-none" for="telefono_c"><?= __('Teléfono', 'pategg') ?></label>
			<input type="tel" id="telefono_c" name="Phone" class="form-control"
				   data-required="required"
				   data-option="telefono"
				   data-name="Phone"
				   placeholder="<?= __('Teléfono', 'pategg') ?>">
		</div>
	</div>
	<div class="row mb-4">
		<div class="col">
			<label class="d-none" for="email_c"><?= __('Email', 'pategg') ?></label>
			<input type="email" id="email_c" name="Email" class="form-control"
				   data-required="required"
				   data-option="email"
				   data-name="Email"
				   placeholder="<?= __('Email', 'pategg') ?>">
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<label class="d-block mb-2"><?= __('Tipo de cliente', 'pategg') ?></label>
			<div class="row">
				<div class="col-6">
					<div class="w-100 form-check">
						<input class="form-check-input"
							   type="radio"
							   name="PC_Tipo"
							   id="particular_c"
							   data-required="required"
							   data-option="check"
							   data-name="particular"
							   value="particular">
						<label class="form-check-label" for="particular_c">
							<?= __('Particular', 'pategg') ?>
						</label>
					</div>
				</div>
				<div class="col-6">
					<div class="w-100 form-check">
						<input class="form-check-input"
							   type="radio"
							   name="PC_Tipo"
							   id="empresa_c"
							   data-required="required"
							   data-option="check"
							   data-name="empresa"
							   value="empresa">
						<label class="form-check-label" for="empresa_c">
							<?= __('Empresa', 'pategg') ?>
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<label class="d-none" for="productoInteres_c"><?= __('Producto de interés', 'pategg') ?></label>
			<select id="productoInteres_c"
					type="select"
					name="PC_ Tipo Ascensor Aprox"
					data-required="required"
					data-option="check"
					data-name="PC_ Tipo Ascensor Aprox"
					class="form-select">
				<option selected><?= __('Categorías TBD: ascensor...', 'pategg') ?></option>
				<?php
				$terms = get_terms('categoria-de-ascensor');
				foreach ($terms as $term) {
					echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
				}
				?>
			</select>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<label class="d-none" for="mensaje_c"><?= __('¿En qué podemos ayudarte?', 'pategg') ?></label>
			<textarea id="mensaje_c"
					  type="textarea"
					  name="Descripción"
					  class="form-control"
					  data-required="required"
					  data-option="textarea"
					  data-name="Descripción"
					  placeholder="<?= __('¿En qué podemos ayudarte?', 'pategg') ?>"></textarea>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col">
			<div class="form-check mb-2">
				<input class="form-check-input"
					   type="checkbox"
					   id="comunicaciones_c"
					   data-option="check"
					   data-name="No participación del correo electrónico"
					   name="No participación del correo electrónico">
				<label class="form-check-label" for="comunicaciones_c">
					<?= __('Acepto recibir comunicaciones comerciales', 'pategg') ?>
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input"
					   type="checkbox"
					   id="privacidad_c"
					   data-required="required"
					   data-option="check"
					   data-name="Acepto términos y condiciones"
					   name="Acepto términos y condiciones">
				<label class="form-check-label" for="privacidad_c">
					<?= __('Acepto la', 'pategg') ?>
					<a target="_blank" href="<?= get_privacy_policy_url() ?>"
					   class="link-dark"><?= __('política de privacidad', 'pategg') ?></a>
				</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<button type="submit" class="btn btn-primary w-100"><?= __('Enviar', 'pategg') ?></button>
		</div>
	</div>
</form>
