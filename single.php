<?php get_header(); ?>
<?php $categories = get_the_category(); ?>
<?php $thumb = get_field('horizontal_featured_img') ?>
<?php $author = get_the_author(); ?>
<div class="row blog-container">
	<div class="col-lg-1 clearfix">
	</div>
	<div class="col-lg-10 col-12 justify-content-center" id="blog-content">
			<div class="row d-flex justify-content-center metadata">
				<span><a><?php echo $categories[0]->name ?></a></span>
			</div>
			<div class="row justify-content-center" id="blog-title">
				<h1 class="title"><?php the_title(); ?></h1>
				<p id="author">by <span><?php echo $author ?></span></p>
			</div>
			<div class="col" id="blog-text">
				<img class="aligncenter" src="<?php echo $thumb['url']; ?>">
				<?php the_content(); ?>
			</div>
	</div>
	<div class="col-lg-1 clearfix">
	</div>
</div>
<?php get_footer(); ?>