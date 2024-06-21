<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="rmbt-page-wrap">
		<div class="header-wrap wrap">
			<div class="header">
				<div class="header-logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/logo-header.jpg" alt="#" class="header-logo-img">
				</div>
				<div class="header-links">
					<ul class="header-links-list">
						<li class="header-links-list-position">Home</li>
						<li class="header-links-list-position">Rentals</li>
						<li class="header-links-list-position">Categories</li>
						<li class="header-links-list-position">About Us</li>
						<li class="header-links-list-position">Contact</li>
						<li class="header-links-list-position">Blog</li>
					</ul>
					<div class="header-links-buttons">
						<button class="header-links-buttons-b button button-sign-in">
							<svg  class="header-links-buttons-b-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#user-header"></use>
							</svg>
							<p class="header-links-buttons-b-text">Sign in</p>
						</button>
						<button class="header-links-buttons-b button">
							<svg  class="header-links-buttons-b-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#plus-header"></use>

							</svg>
							<p class="header-links-buttons-b-text">Post Listing</p>
						</button>
					</div>
					</div>
			</div>
		</div>

		<?php
		// для стандартного WP виджета поиск файл searchform.php должен находится в корне темы
		// для работоспособности поиска в целом searchform.php может быть где угодно
		// get_template_part('searchform');
		?>
