<?php
function my_scripts() {
	wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', $in_footer=true);
;	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery-min-js'), $in_footer=true);
	wp_enqueue_script( 'bootstrap4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('popper-js'), $in_footer=true);
	wp_enqueue_script( 'typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js', $in_footer=true);
	wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2.1.1/dist/flickity.pkgd.min.js', $in_footer=true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', $in_footer=true);
};

add_action( 'wp_head', 'my_scripts');

function my_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style( 'flickity-css', 'https://unpkg.com/flickity@2.1.1/dist/flickity.min.css');
};

add_action( 'wp_head', 'my_styles');

if (function_exists( 'register_sidebar' )) {
function ac_email_widgets() {
	register_sidebar( array(
		'name' => 'Email Form Index',
		'id' => 'email-form',
		'description' => 'this is an email form widget!',
		'before_widget' => '<div class="email-form">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}};

add_action( 'widgets_init', 'ac_email_widgets');
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
?>