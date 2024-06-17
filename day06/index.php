
<?php get_header(); ?>

<body>
    <?php 
        $query = new WP_Query( array(
            'category_name' => 'Books'
        ) );

        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post(); 
                the_title('<h2>', '</h2>'); // Correct function to display the post title
                
                the_content(); // Display the post content
                
                the_category(); // Display the category
            endwhile;
            wp_reset_postdata(); // Reset post data after the custom query
        else :
            echo 'No posts found in the Books category.';
        endif;
    ?>
</body>


<?php get_footer(); ?>