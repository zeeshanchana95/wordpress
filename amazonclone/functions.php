<?php 
    function amazon_theme_styles() {
        wp_enqueue_style('style-css', get_theme_file_uri('/css/style.css'));
    }
    add_action('wp_enqueue_scripts', 'amazon_theme_styles');


    function amazon_theme_features(){
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'amazon_theme_features');


    function book_setup_post_type() {
        $args = array(
            'public' => true,
            'labels' => array(
                'name' => 'To-do',
                'add_bew'=> 'New Todo',
                'add_new_item' => 'Add New List',
                'all_items' => 'All Lists',
                'new_item' => 'New List',
                'edit_item' => 'Edit List',
            ),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-book',
        );
        register_post_type('to-do', $args);
    }
    add_action('init', 'book_setup_post_type');

?>