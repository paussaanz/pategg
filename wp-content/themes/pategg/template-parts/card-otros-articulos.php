<?php
?>
<div class="col-12 col-md-4">
	<div class="card">
		<a href="<?php the_permalink(); ?>">
			<?php if (has_post_thumbnail()) :
				the_post_thumbnail('full', ['class' => 'rounded card-img-top h-100 aspect-otros-articulos', 'alt' => get_the_title()]);
			endif; ?>
		</a>
		<div class="card-body ps-0">
			<?php if (!empty  ($post_categories)) : ?>
				<p class="tag text-primary mb-2 raleway"><?= esc_html($post_categories[0]->name); ?></p>
			<?php endif; ?>

			<p class="legend text-gray mb-2 raleway"><?= __("MES", "pategg") . " " . get_the_modified_date('m') ?></p>

			<a class="text-decoration-none text-secondary" href="<?php the_permalink(); ?>">
				<h3 class="mb-2 fs-6 raleway"><?= get_the_title(); ?></h3>

			</a>
			<p class="tag raleway">
				<?= get_the_excerpt(); ?> </p>
		</div>
	</div>

</div>
