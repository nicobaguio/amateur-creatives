<?php
function my_scripts() {
	wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', $in_footer=true);
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery-min-js'), $in_footer=true);
	wp_enqueue_script( 'bootstrap4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('popper-js'), $in_footer=true);
	wp_enqueue_script( 'typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js', $in_footer=true);
	wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2.1.1/dist/flickity.pkgd.min.js', $in_footer=true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', $in_footer=true);
};

add_action( 'wp_footer', 'my_scripts');

function my_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style( 'flickity-css', 'https://unpkg.com/flickity@2.1.1/dist/flickity.min.css');
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css');
};

add_action( 'wp_footer', 'my_styles');

if (function_exists( 'register_sidebar' )) {
function ac_home_widgets() {
	register_sidebar( array(
		'name' => 'Homepage Left Wide',
		'id' => 'homepage-left-wide',
		'description' => 'Left side (Wide) of the Homepage',
		'before_widget' => '<div class="homepage-left-wide">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => 'Homepage Right',
		'id' => 'homepage-right',
		'description' => 'Right side of the Homepage',
		'before_widget' => '<div class="homepage-right">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => 'Pre Footer',
		'id' => 'pre-footer',
		'description' => 'Pre Footer widget',
		'before_widget' => '<div class="row pre-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}};

if ( function_exists( 'register_nav_menus' ) ) {
	function ac_nav_menus() {
		register_nav_menus(
			array(
				'main-menu' => 'Main Menu',
				'secondary-menu' => 'Secondary Menu'
		)
	);
}};

function coming_soon() {
	if ( is_page( 'coming-soon' ) ) {
		wp_enqueue_script( 'jquery-min-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', $in_footer=true);
		wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery-min-js'), $in_footer=true);
		wp_enqueue_script( 'bootstrap4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('popper-js'), $in_footer=true);
		wp_enqueue_script( 'typed-js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js', $in_footer=true);
		wp_enqueue_style( 'coming-soon.css', get_stylesheet_directory_uri() . '/coming-soon.css');
		wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	};

	if ( !is_admin()) {
		remove_action( 'wp_head', '_admin_bar_bump_cb' );
	};
};

add_action( 'wp_enqueue_scripts', 'coming_soon' );

function filter_ptags_on_images($content) {
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
};

add_filter('the_content', 'filter_ptags_on_images');

function ac_custom_styling( $atts, $content = null ) {
	if ( isset ( $atts['style'] ) ) {
		return "<div class='{$atts['style']}'><span>$content</span></div>";
		// return "<hr class='border {$atts['style']}'/>";
	}
};

add_shortcode('ac_tag', ac_custom_styling);

add_action( 'init', 'ac_nav_menus' );
add_action( 'widgets_init', 'ac_home_widgets');
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
?>