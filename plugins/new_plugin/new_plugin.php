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
                'taxonomy' => 'product_cat',
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true,
            )
        );

        if(!empty($product_categories)) {
            $output = '<div class="woocommerce_categories">';

            foreach($product_categories as $category) {
                $thumbnail_id = get_term_meta($category -> term_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id); //thumbnail url
                $category_name = $category->name; //category name
                $category_url = get_term_link($category);

                $output .= '<div class= "single_category">';
                    $output .= '<h5>' . $category_name . '</h5>';
                    $output .= 'img src="'. $image_url .'" alt="'. $category_name.'"/>';
                    $output .= '<a href="'.$category_url.'">  Read More </a>';
                $output .= '</div>';
            }
            $output .= '</div>';
            return $output;
        }   
    }

    add_shortcode('ecommmerce_categories', 'display_woocommerce_categories');











?>