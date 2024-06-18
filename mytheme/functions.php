<?php 

    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'header-styles', get_template_directory_uri() . '/styles/header-styles.css' );
        
        wp_enqueue_script('header-js', get_template_directory_uri() . '/js/header.js');
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    // used to register menu to show in wordpress admin dashboard
    function register_my_menu() {
        register_nav_menu('primary', __('Primary Menu', 'my_theme'));
      }
      add_action('after_setup_theme', 'register_my_menu');


      function add_favicon() {
        $favicon_url = get_stylesheet_directory_uri() . '/favicon.ico';
        echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
    }
    add_action('wp_head', 'add_favicon'); // Adds favicon to the front-end
    add_action('login_head', "add_favicon");
    add_action('admin_head', "add_favicon");
?>