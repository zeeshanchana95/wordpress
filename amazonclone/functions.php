<?php 
function wp_enqueue_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'wp_enqueue_styles');
?>