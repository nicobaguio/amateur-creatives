<?php 
/*
Template Name: Coming Soon
*/
wp_head();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Something creative this way comes...</title>
</head>
<body">
	<div class="container-fluid" style="background-image: url(<?php echo wp_get_attachment_url( 69 ); ?>)">
		<div class="row" id="welcome-container">
			<div class="col-1 col-md-2"></div>
			<div class="col-10 col-md-8 soon-img">
				<?php echo get_the_post_thumbnail( null, 'post-thumbnail', array('class' => 'img-fluid')); ?>	
				<p id="typed-container"><span id="typed"></span></p>
			</div>
			<div class="col-1 col-md-2"></div>
		</div>
		<div class="row" id="email-form">
			<div class="col-1 col-md-2"></div>
			<div class="col-10 col-md-8">
				<?php echo do_shortcode( '[mc4wp_form id="46"]' ); ?>
			</div>
			<div class="col-1 col-md-2"></div>
		</div>
	</div>
	<script>
		viewport_width = $(window).width();
		var string = null;
		if (viewport_width) {
			string = [
				'is ls',
				'is\n launchg',
				'is\n launching sooo',
				'is\n launching soom',
				'is\n launching soon.',
		]} else {
			string = [
				'is ls',
				'is launchg',
				'is launching sooo',
				'is launching soom',
				'is launching soon.',
			]
		}
		var typed = new Typed('#typed', {
			strings: [
				'is ls',
				'is launchg',
				'is launching sooo',
				'is launching soom',
				'is launching soon.',
			],
			typeSpeed: 50,
			backDelay: 350,
		});
	</script>
</body>
</html>