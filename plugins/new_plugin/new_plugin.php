<?php
    /*
        Plugin Name: New Plugin
        Description: This plugin will work with woocommerce
        Author: Zeeshan
        Author URI: https://www.github.com/zeeshanchana95
        Version: 1.0
    */


    // function to add css and js files
    function new_plugin_files() {
        wp_enqueue_style('new-plugin-css', plugin_dir_url(__FILE__) . '/css/style.css');
        wp_enqueue_script('new-plugin-js', plugin_dir_url(__FILE__) . '/js/script.js');
    }
    add_action('wp_enqueue_scripts', 'new_plugin_files');



    function display_woocommerce_categories() {
        $product_categories = get_terms(
            array(
                'taxanomy' => 'product_cat',

            )
        );
    }












?>