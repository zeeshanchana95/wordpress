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
    <div id="products-container">
        <!-- products will be appended -->
        
    </div>
</div>

<?php get_footer(); ?>