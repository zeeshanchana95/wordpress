<?php 

    get_header(); 
/*
    Template Name: Ecommerce Plugin Functionality
*/
?>

<!-- All categories -->
<div class="single_posts categories">
    <h4>Woocommerce Categories</h4>
    <?php 
        echo do_shortcode('[ecommerce_categories]');
    ?>
</div>

<div class="single_posts all-products">
    <h4>All Products</h4>
    <?php
     $category_id = 21;
     $term = get_term_by('id', $category_id, 'product_cat');
     $category_slug = $term->slug;
     
    //  echo $catergory_slug;
     echo do_shortcode('[products category="'. $category_slug .'"]');
     
     ?>
</div>

<?php get_footer(); ?>