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
<div class="products-main">
    <div class="single_posts all-products">
        <button id="back-button">Go Back</button>
        <h4>All Products</h4>
        <div id="products-container">
            <!-- products will be appended -->
            
        </div>
    </div>
</div>

<?php get_footer(); ?>