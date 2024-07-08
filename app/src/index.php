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





	<div class="block-2-wr wrap">
		<div class="block-2">
			<p class="block-2-title title">Browse From Top Categories</p>
			<div class="block-2-decor  decor-lines">
				<div class="block-2-decor-line decor-line-long  decor-line"></div>
				<div class="block-2-decor-line decor-line-short  decor-line"></div>
			</div>
			<div class="block-2-list">
				<div class="block-2-list-prop">
					<div class="block-2-list-prop-bc prop-bc-red">
						<svg  class="block-2-list-prop-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#thumbs-up"></use>
						</svg>
					</div>
					<p class="block-2-list-prop-title">Holiday Rentals</p>
				</div>
				<div class="block-2-list-prop">
					<div class="block-2-list-prop-bc prop-bc-green">
						<svg  class="block-2-list-prop-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#home"></use>
						</svg>
					</div>
					<p class="block-2-list-prop-title">Residential Spaces</p>
				</div>
				<div class="block-2-list-prop">
					<div class="block-2-list-prop-bc prop-bc-purple">
						<svg  class="block-2-list-prop-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#compass"></use>
						</svg>
					</div>
					<p class="block-2-list-prop-title">Event Spaces</p>
				</div>
				<div class="block-2-list-prop">
					<div class="block-2-list-prop-bc prop-bc-blue">
						<svg  class="block-2-list-prop-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#dollar-sign"></use>
						</svg>
					</div>
					<p class="block-2-list-prop-title">Commercial Properties</p>
				</div>
				<div class="block-2-list-prop">
					<div class="block-2-list-prop-bc prop-bc-yellow">
						<svg  class="block-2-list-prop-icon">
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#dots-horizontal"></use>
						</svg>
					</div>
					<p class="block-2-list-prop-title">More</p>
				</div>
			</div>
		</div>
	</div>




	<div class="block-3-wr wrap">
		<div class="block-3">
			<p class="block-3-title title">Featured Listings</p>
			<div class="block-3-decor  decor-lines">
				<div class="block-3-decor-line decor-line-long  decor-line"></div>
				<div class="block-3-decor-line decor-line-short  decor-line"></div>
			</div>
			<div class="block-3-list">
				<div class="block-3-list-prop button block-3-list prop-marked">All Items (5125)</div>
				<div class="block-3-list-prop button">Residential Spaces (64)</div>
				<div class="block-3-list-prop button">Sports Venues</div>
				<div class="block-3-list-prop button">Meeting Spaces</div>
				<div class="block-3-list-prop button">Vans & Buses</div>
				<div class="block-3-list-prop button">Cars & SUVs </div>
				<div class="block-3-list-prop button">Lorries & Industrial Vehicles</div>
				<div class="block-3-list-prop button block-3-list-prop-swipe">
					<svg  class="block-3-list-prop-swipe-icon">
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron-right"></use>
					</svg>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="block-3-content">
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="block-3-content-card">
					<div class="block-3-content-card-image">
						<div class="block-3-content-card-image-rent button">For Rent</div>
					</div>
					<div class="block-3-content-card-info">
						<div class="block-3-content-card-prise"><span class="block-3-content-card-prise-marked">85,000 LKR</span>/Month</div>
						<p class="block-3-content-card-title">Luxury villa in Rego Park</p>
						<div class="block-3-content-card-contain">
							<p class="block-3-content-card-contain-text">3 Bedrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2 Bathrooms</p>
							<div class="block-3-content-card-contain-line"></div>
							<p class="block-3-content-card-contain-text">2500 Square FT</p>
						</div>
						<div class="block-3-content-info">
							<div class="block-3-content-info-avatar">
								<img src="" alt="">
							</div>
							<div class="block-3-content-info-text">
								<p class="block-3-content-info-text-name">Anne Liza</p>
								<p class="block-3-content-info-text-job">Property Seller</p>
							</div>
							<div class="block-3-content-like">
								<svg  class="block-3-content-like-icon">
									<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#heart"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
				

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
