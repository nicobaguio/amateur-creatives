<?php get_header(); ?>
<div class="row hero">
	<div class="col-sm-1 col-lg-2"></div>
	<div class="col-sm-3 col-lg-3 hero-image"><img src="<?php bloginfo('template_directory'); ?>/images/homepage_headshot.png" id="headshot"></div>
	<div class="col-sm-5 col-lg-5 hero-intro">
			<div class="index-intro">
				<p>Hi, my name is Pam</p>
				<p>and I'm <span class="typed"></span></p>
			</div>
	</div>
	<div class="col-sm-1 col-lg-2"></div>
</div>
<div class="row latest-blogposts">
	<h1>Latest Blogposts</h1>
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
						<div class="card">
							<a href="<?php echo $url; ?>">
								<img class="card-img" src="<?php echo $thumb; ?>">
								<div class="card-img-overlay">
									<div class="overlay">
										<p><?php echo $excerpt; ?></p>
									</div>
									<p class="card-text"><span><?php the_title(); ?></span></p>
									<img class="category-icon" src="<?php bloginfo('template_directory'); ?>/images/header-logo.png">
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
	<p id="all-posts"><a href="#">Check out out all my blogposts</a></p>
</div>
<?php get_footer(); ?>