<?php get_header(); ?>

<div class="single_page">
    <?php 

        while(have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        <?php  }
    ?>
</div>

<?php get_footer(); ?>