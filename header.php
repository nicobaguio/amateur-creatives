<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
			Amateur Creatives
		</title>
		<?php wp_head(); ?>
	</head>
	<body id="blogpost">
		<div class="container-fluid">
			<header class="row header-container">
				<div class="row-fluid banner" style="background-image: url('<?php echo get_header_image(); ?>')"></div>
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' ) ?>
				<?php $logo = wp_get_attachment_image_src( $custom_logo_id, 'full'); ?>
				<img  class="header-logo" src="<?php echo $logo[0] ?>">
			</header>
