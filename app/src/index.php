<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./assets/styles/main-style.min.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>

<body>
	<?php get_header() ?>
	<div class="block-1-wr wrap">
		<div class="block-1">
			<p class="block-1-title">Discover Your <span class="block-1-title-marked">Perfect Rental</span></p>
			<p class="block-1-subtitle">Rent Cars, Houses, and Items in Just a Few Clicks</p>
			<div class="block-1-buttons">
				<button class="block-1-buttons-b button marked-button">Places</button>
				<button class="block-1-buttons-b button">Rides</button>
				<button class="block-1-buttons-b button">Things</button>
			</div>
			<div class="block-1-form">
				<form action="#" class="block-1-form-content">
					<div class="block-1-form-content-input">
						<svg  class="block-1-form-content-input-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search-grey"></use>
						</svg>
						<input type="text" class="block-1-form-content-input-in" placeholder="Search for cars, houses, and more..">
					</div>
					<div class="block-1-form-content-line"></div>
					<div class="block-1-form-content-select">
						<svg  class="block-1-form-content-select-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#map-pin"></use>
						</svg>
						<select class="block-1-form-content-in-select-sel" onclick = "this.children[0].remove()">
							<option disabled selected>Select Location</option>
						</select>
					</div>
					<div class="block-1-form-content-b-div">
						<button class="block-1-form-content-b button">
							<svg  class="block-1-form-content-b-icon">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search-white"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>




<!-- !!!!!!!!!!!    YOU CAN CHOOSE ONE OF THIS VARIANTS !!!!!!!!!!!!!!-->


<!-- <main>
	<div class="wrapper-section">
		<div class="rmbt-full-width rmbt-blog-full-width">
			<section class="rmbt-container rmbt-blog">
				<div class="rmbt-blog__row">

					<header class="page-header ">
						<h1 class="page-title">
							<?php // if ( is_search() ) {
							// 	printf( esc_html__( 'Результати пошуку для: %s', 'rmbt_impex' ), '<span>' . get_search_query() . '</span>' );
							// } else if ( is_home() || is_page( [ 'blog', 'Blog' ] ) ) {
							// 	echo "Новини нашої компанії";
							// } ?>
						</h1>
					</header>
					<div class="rmbt-blog__col">
						<?php
						// if ( have_posts() ) {
						// 	while ( have_posts() ) :
						// 		the_post();
						
						// 		get_template_part( 'template-parts/components/card_news_strings', null, [		// here your card template
						// 			'title' => get_the_title(),
						// 			'text' => get_the_excerpt(),
						// 			'tag-img' => get_the_post_thumbnail(),
						// 			'link_read_more_href' => get_the_permalink(),
						// 		] );
						
						// 	endwhile;
						// } else {
						// 	//   get_template_part('partials/notfound');
						// }
						?>
					</div>
				</div>
			</section>
		</div>
	</div>
</main> -->


<?php // get_template_part( 'template-parts/components/pagination' ); ?>



<?php // get_footer();
