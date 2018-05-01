<?php get_header(); ?>
<div class="row" id="hero">
	<div class="col-sm-1 col-lg-2"></div>
	<div class="col-sm-3 col-lg-3 hero-image"><img src="<?php bloginfo('template_directory'); ?>/images/homepage_headshot.png" id="headshot"></div>
	<div class="col-sm-5 col-lg-5 hero-intro">
			<div class="index-intro">
				<p>Hi, my name is Pam</p>
				<p>and I'm <span class="typed styled-name"></span></p>
			</div>
	</div>
	<div class="col-sm-1 col-lg-2"></div>
</div>
<div class="row" id="latest-blogposts">
	<h2 class="index-heading">Latest Blogposts</h2>
	<div class="col-sm-1 col-lg-2"></div>
	<div class="col-sm-10 col-lg-8">
		<div class="card-deck">
			<?php
			// THEE QUERY!!!
				$the_query = new WP_Query( array(
					'posts_per_page' => 3,
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
						<div class="card">
							<a href="<?php echo $url; ?>">
								<img class="card-img" src="<?php echo $thumb; ?>">
								<div class="card-img-overlay">
									<div class="overlay">
										<p><?php echo $excerpt; ?></p>
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
	<div class="col-sm-1 col-lg-2"></div>
	<p class="styled-link"><a href="#">Check out out all my blogposts</a></p>
</div>
<div class="row" id="email-form-container">
	<h2>Join the Amateur Creatives Club!</h2>
	<div class="col-sm-1 col-lg-2"></div>
	<div class="col-sm-6 col-lg-5">
		<?php dynamic_sidebar( 'homepage-left-wide' ); ?>
	</div>
	<div class="col-sm-5 col-lg-3">
		<?php dynamic_sidebar( 'homepage-right' ); ?>
	</div>
	<div class="col-lg-2"></div>
</div>
<?php get_footer(); ?>