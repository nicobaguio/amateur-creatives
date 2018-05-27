<?php get_header(); ?>
<div class="row blog-container">
	<div class="col-lg-2 col-1 clearfix">
	</div>
	<div class="col-lg-8 col-10 justify-content-center" id="page-content">
			<div class="row justify-content-center" id="page-title">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<div class="col" id="page-text">
				<?php the_content(); ?>
			</div>
	</div>
	<div class="col-lg-2 col-1 clearfix">
	</div>
</div>
<?php get_footer(); ?>