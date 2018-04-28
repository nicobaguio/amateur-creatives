<?php
function my_scripts() {
	wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', $in_footer=true);
;	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery-min-js'), $in_footer=true);
	wp_enqueue_script( 'bootstrap4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('popper-js'), $in_footer=true);
	wp_enqueue_script( 'typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js', $in_footer=true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', $in_footer=true);
};

add_action( 'wp_head', 'my_scripts');

function my_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
};

add_action( 'wp_head', 'my_styles');

add_theme_support( 'post-thumbnails' );
?>