<?php get_header(); ?>


<body>
  <?php 
     $query = new WP_Query(array(
        'category_name' => 'Books',
     ));

    if($query->have_posts()): $query -> the_post();
        while($query->have_posts()): 
            //code to display posts goes here
           
            $query -> the_title();
        endwhile;
    endif;
    //Reset post data to avoid conflicts
    wp_reset_postdata();
  ?>
</body>

<?php get_footer(); ?>