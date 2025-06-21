<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pategg
 */

$menu_principal = [
	'theme_location' => 'menu-principal',
	'container'      => 'ul',
	'menu_class'     => 'navbar-nav mx-auto py-2 py-md-0',
	'walker'         => new PrimaryMenu_Walker_Nav_Menu(),
	'fallback_cb'    => false,
];
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<?php get_template_part('template-parts/gtm/gtm', 'head') ?>
	<!-- Cookiebot -->
	<script id="Cookiebot"
		src="https://consent.cookiebot.com/uc.js"
		data-cbid="38c723d1-4681-485a-95cb-3c93bb20e480"
		data-blockingmode="auto"
		type="text/javascript"></script>
	<?php get_template_part('template-parts/gtm/gtm', 'script') ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('template-parts/gtm/gtm', 'body') ?>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<?php if (!is_page_template('template-landing.php')) : ?>
			<!-- Nav Cabecera -->
			<header class="position-fixed w-100 z-3">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
							<nav class="navbar navbar-expand-md mt-4" id="menuCabecera">
								<div class="container-fluid bg-light rounded-5 py-1 py-md-0">
									<a class="navbar-brand ms-3 py-1" href="<?= get_home_url() ?>">
										<img alt="pategg Logo" class="" src="<?= get_field('opciones_sitio_logo_principal', 'option') ?>">
									</a>
									<button aria-controls="navbarNav"
										aria-expanded="false"
										aria-label="Toggle navigation"
										class="navbar-toggler"
										data-bs-target="#navbarNav"
										data-bs-toggle="collapse"
										type="button">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse py-1 px-3 px-md-0" id="navbarNav">
										<?php wp_nav_menu($menu_principal); ?>
										<a class="btn btn-primary fs-4 legend-md fw-normal" href="https://pre.pategg.com/contacto/">Contacto</a>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</header>
		<?php endif; ?>