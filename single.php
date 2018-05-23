<?php get_header(); ?>
<div class="row blog-container">
<div class="col-lg-1 clearfix">
</div>
<div class="col-lg-10 col-12 justify-content-center" id="blog-content">
		<div class="row d-flex justify-content-center metadata">
			<p><a href="#">Category</a></p>
		</div>
		<div class="row justify-content-center" id="blog-title">
			<h1 class="title mx-5"><?php the_title(); ?></h1>
		</div>
		<div class="col" id="blog-text">
			<?php the_content(); ?>
		</div>
</div>
<div class="col-lg-1 clearfix">
</div>
</div>
<?php get_footer(); ?>
