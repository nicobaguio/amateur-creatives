<?php get_header(); ?>
<div class="row blog-container">
<div class="col-lg-2 clearfix">
</div>
<div class="col-lg-8 col-12 justify-content-center blog-content">
		<div class="row blog-title justify-content-center">
			<h1 class="title mx-5"><?php the_title(); ?></h1>
		</div>
		<div class="row d-flex justify-content-center metadata">
			<p><a href="#">Category</a></p>
		</div>
		<div class="col blog-text">
			<?php the_content(); ?>
		</div>
</div>
<div class="col-lg-2 clearfix">
</div>
</div>
<?php get_footer(); ?>
