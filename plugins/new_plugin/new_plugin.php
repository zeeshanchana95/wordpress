<?php
    /*
        Plugin Name: New Plugin
        Description: This plugin will work with WooCommerce
        Author: Zeeshan
        Author URI: https://www.github.com/zeeshanchana95
        Version: 1.0
    */

    function new_plugin_files() {
        wp_enqueue_style('new-plugin-css', plugin_dir_url(__FILE__) . 'css/style.css');
        wp_enqueue_script('new-plugin-js', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'));
        wp_enqueue_script('jquery');

        wp_localize_script('new-plugin-js', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'), 
            'nonce' => wp_create_nonce('load_products_nonce'), 
        ));
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

        if (!empty($product_categories)) {
            $output = '<div class="woocommerce_categories">';

            foreach ($product_categories as $category) {
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id); //thumbnail url
                $category_name = $category->name; //category name
                $category_url = get_term_link($category);

                $output .= '<div class="single_category">';
                    $output .= '<h5>' . $category_name . '</h5>';
                    $output .= '<img src="'. $image_url .'" alt="'. $category_name .'"/>';
                    $output .= '<a href="#" data-category-id="'. $category->term_id .'">Read More</a>'; // Changed to data attribute
                $output .= '</div>';
            }
            $output .= '</div>';
            return $output;
        }   
    }

    add_shortcode('ecommerce_categories', 'display_woocommerce_categories');

    function load_products_by_category() {
        check_ajax_referer('load_products_nonce', 'nonce');
        $category_id = intval($_POST['category_id']); // Ensured category_id is an integer
        
        $term = get_term_by("id", $category_id, 'product_cat');
        $category_slug = $term->slug;
        $product_html = do_shortcode('[products category="'.$category_slug.'"]');

        wp_send_json_success($product_html);
    }

    add_action('wp_ajax_load_products_by_category', 'load_products_by_category'); //for logged in user
    add_action('wp_ajax_nopriv_load_products_by_category', 'load_products_by_category'); //for user which has no privileges of login
?>
