<?php get_header();?>
<?php 
    if(have_posts()):
        while(have_posts()): the_post();
        ?>
        
        <a href="<?php the_permalink(); ?>"></a>
        <h1><?php the_content();?></h1><br>

        <?php 
        //your code to display posts goes here
        endwhile;
    endif;
  ?>

<?php get_footer();?>