<?php 

function wp_add_resources() {
    // Enqueue default stylesheet
    wp_enqueue_style('theme-css', get_stylesheet_uri());

    // Enqueue other styles
    wp_enqueue_style('default-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    // Map and SCSS styles (these might not be necessary to enqueue)
    wp_enqueue_style('map-styles', get_template_directory_uri() . '/assets/css/style.css.map');
    wp_enqueue_style('scss-styles', get_template_directory_uri() . '/assets/css/style.scss');

    // Enqueue fonts
    wp_enqueue_style('font-awesome-ttf', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont.ttf');
    wp_enqueue_style('font-awesome-woff', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont.woff');
    wp_enqueue_style('font-awesome-woff2', get_template_directory_uri() . '/assets/fonts/fontawesome-webfont.woff2');

    // Enqueue scripts
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery-js'), null, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery-js'), null, true);
    // wp_enqueue_script('test-js', get_template_directory_uri() . '/assets/js/test.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'wp_add_resources');

    // Register Navigation Menus
function custom_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');


?>


