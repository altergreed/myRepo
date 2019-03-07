<?php
function child_twentyseventeen_scripts() {
    wp_enqueue_script( 'jquery');
	wp_enqueue_style( 'twentyseventeen-child-main-style', get_theme_file_uri(). '/assets/css/main.min.css' );
    wp_enqueue_style( 'twentyseventeen-child-owl-carousel', get_theme_file_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'twentyseventeen-child-owl-theme', get_theme_file_uri() . '/assets/css/owl.theme.default.min.css' );
    wp_enqueue_script( 'twentyseventeen-child-owl-script', get_theme_file_uri() . '/assets/js/owl.carousel.min.js' );
    wp_enqueue_script( 'twentyseventeen-child-sticky-kit', get_theme_file_uri() . '/assets/js/jquery.sticky-kit.min.js' );
    wp_enqueue_script( 'twentyseventeen-child-main-script', get_theme_file_uri() . '/assets/js/main.min.js' );
}
add_action( 'wp_enqueue_scripts', 'child_twentyseventeen_scripts' );

add_filter('widget_text', 'do_shortcode');

require_once (dirname(__FILE__) . '/sample/barebones-config.php');

?>
