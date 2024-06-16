<?php get_header(); ?>

<?php 
    if(have_posts()):
        while(have_posts()): the_post();
        ?>
        
        <h1><?php the_content();?></h1><br>
        <p><?php the_author();?></p><br>
        <p><?php the_date();?></p><br>

        <?php 
        //your code to display posts goes here
        endwhile;
    endif;
  ?>
<?php get_footer(); ?>