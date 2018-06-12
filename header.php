<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<title>
			Amateur Creatives
		</title>
		<?php wp_head(); ?>
		<style type="text/css">
			#loader-container {
				position: fixed;
				top: 0;
				left: 0;
				width: 100vw;
				height: 100vh;
				z-index: 999999;
				background-color: white;
				-webkit-transition: height 1s ease-in-out;
				-moz-transition: height 1s ease-in-out;
				-ms-transition: height 1s ease-in-out;
				-o-transition: height 1s ease-in-out;
				transition: height 1s ease-in-out;
				overflow: hidden;
			}

			#loader-container.loading {
				height: 0;
			}

			#loader {
				position: relative;
				width: 300px;
				height: auto;
				top: calc(50vh - 150px);
				left: calc(50vw - 150px);
			}

			body {
				overflow: hidden;
			}

			.container-fluid.loading {
				visibility: hidden;
			}

			hr {
				background-image: url("<?php echo get_template_directory_uri() ?>/assets/divider.png");
			}
		</style>
	</head>
	<body id="blogpost">
		<div id="loader-container">
			<img src="<?php echo get_template_directory_uri() ?>/assets/egg-preloader.gif" id="loader">
		</div>
		<div class="container-fluid loading">
			<div id="page-overlay">
			</div>
			<header class="row header-container">
				<div class="row-fluid banner" style="background-image: url('<?php echo get_header_image(); ?>')"></div>
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' ) ?>
				<?php $logo = wp_get_attachment_image_src( $custom_logo_id, 'full'); ?>
				<a id="home-link" href="<?php echo esc_url( home_url( '/' ) ) ?>">
					<img id="header-logo" src="<?php echo $logo[0] ?>">
				</a>
			</header>
			<div id="sticky-button">
				<button id="primary-menu-button" href="#primary-menu" role="button">
					Explore
				</button>
			</div>

			<div id="primary-menu">
				<!-- <div id="pm-search"><?php get_search_form(); ?></div> -->
				<?php wp_nav_menu( array(
					'menu' => 'main-menu',
					'container_id' => 'main-menu',
				) ); ?>
				<div id="latest-blogpost">
					<h3>Latest Blogpost</h3>
						<?php
						// THEE QUERY!!!
							$the_query = new WP_Query( array(
								'posts_per_page' => 1,
							));
						?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<?php $thumb = get_the_post_thumbnail_url(); ?>
								<?php $url = get_post_permalink(); ?>
								<?php $excerpt = get_the_excerpt(); ?>
								<?php $category_id = get_the_category()[0]->term_id; ?>
								<?php $image_id = get_term_meta($category_id, 'image', true ) ?>
								<?php $image_data = wp_get_attachment_image_src( $image_id, 'full' ); ?>
									<div class="card mx-auto">
										<a href="<?php echo $url; ?>">
											<img class="card-img" src="<?php echo $thumb; ?>">
											<div class="card-img-overlay">
												<div class="overlay">
													<!-- <p><?php echo $excerpt; ?></p> -->
												</div>
												<p class="card-text">
													<span class="title"><?php the_title(); ?></span>
													<span class="read-this">Read this</span>
												</p>
												<img class="category-icon" src="<?php echo $image_data[0] ?>">
											</div>
										</a>
									</div>
							<?php endwhile ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php __('No News!'); ?></p>
						<?php endif; ?>	
				</div>
			</div>
