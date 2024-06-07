<?php 
    function my_theme_enqueue_styles() {
        wp_enqueue_style('my_theme_style', get_stylesheet_url())
    }

    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles')
?>  


