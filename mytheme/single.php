<?php get_header();?>

<?php 
    if(have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1><br />
            </a>
            <p><?php the_content(); ?></p><br />
            <p><?php the_author(); ?></p><br />
        <?php
        endwhile;
    endif;
?>  