<?php get_header(); ?>


<body>
  <?php 
    if(have_posts()):
        while(have_posts()): the_post();
            //code to display posts goes here
            the_title();
        endwhile;
    endif;
    //Reset post data to avoid conflicts
    wp_reset_postdata();
  ?>
</body>

<?php get_footer(); ?>