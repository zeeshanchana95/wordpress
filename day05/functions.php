<?php 
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    // used to register menu to show in wordpress admin dashboard
    function register_my_menu() {
        register_nav_menu('primary', __('Primary Menu', 'my_theme'));
      }
      add_action('after_setup_theme', 'register_my_menu');
?>