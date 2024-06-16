<?php 
    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );
    }

    //1. function creation my_theme_enqueue_styles
    //2. call wp_enqueue_style
    //3. named our stylesheet
    //4. get_stylesheet_uri() which returns the stylesheet address

    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    //5. add_action() hook
    //6. when wp_enqueue_scripts are started
    //7. call our function
?>