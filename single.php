<?php get_header(); ?>
<?php $categories = get_the_category(); ?>
<div class="row blog-container">
	<div class="col-lg-1 clearfix">
	</div>
	<div class="col-lg-10 col-12 justify-content-center" id="blog-content">
			<div class="row d-flex justify-content-center metadata">
				<span><a><?php echo $categories[0]->name ?></a></span>
			</div>
			<div class="row justify-content-center" id="blog-title">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<div class="col" id="blog-text">
				<?php the_content(); ?>
			</div>
	</div>
	<div class="col-lg-1 clearfix">
	</div>
</div>
<?php get_footer(); ?>