<?php 
function amazon_theme_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'amazon_theme_styles');

function amazon_theme_features(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'amazon_theme_features');

?>