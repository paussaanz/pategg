<?php
?>
	<div class="swiper-slide pb-5 pb-md-0">
		<a href="<?= get_the_permalink(); ?>" target="">
			<img class="card-img-top aspect-ascensores-swiper bg-image rounded overwhite"
				 src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
				 alt="Image pategg"/>
		</a>
		<div class="card-body text-center pb-0">
			<p class="pt-2 pt-md-0"><?= get_the_title(); ?></p>
			<p class="legend"><?= get_field('post_type_productos_dimensiones', get_the_ID()); ?></p>
			<p class="legend"><?= get_field('post_type_productos_personas', get_the_ID()); ?></p>
			<p class="legend"><?= get_field('post_type_productos_plantas', get_the_ID()); ?></p>
			<p class="legend"><?= get_field('post_type_productos_peso', get_the_ID()); ?></p>
			<a class="btn btn-primary" href="<?= get_the_permalink(); ?>"
			   target=""><?= __('Ver modelo', 'pategg') ?></a>
		</div>
	</div>
<?php