<?php
?>
<div class="col-12">
	<div class="row align-items-center pb-5">
		<div class="col-12 col-md-5">
			<a href="<?php the_permalink(); ?>">
				<img class="aspect-articulos-destacados rounded w-100"
					 src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
					 alt="Image pategg"/>
			</a>
		</div>
		<div class="col-12 col-md-6 offset-md-1">
			<div class="row">
				<div class="col-12">
					<p class="text-primary tag mb-2"><?= get_the_category()[0]->name; ?></p>
				</div>
				<div class="col-12">
					<p class="legend text-gray mb-2 raleway"><?= __("MES", "pategg") . " " . get_the_modified_date('m') ?></p>
				</div>
				<div class="col-12">
					<a class="text-decoration-none text-secondary" href="<?php the_permalink(); ?>">
						<h3 class="h5 raleway mb-2"><?php the_title(); ?></h3>
					</a>
				</div>
				<div class="col-12">
					<p class="legend mb-4"><?= wp_trim_words(get_the_excerpt(), 20); ?></p>
				</div>
				<div class="col-12">
					<a class="btn btn-primary raleway" href="<?php the_permalink(); ?>">
						<?= __('Leer artículo', 'pategg'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
