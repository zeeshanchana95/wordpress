<?php get_header(); ?>

<?php 
    $query = new WP_Query( array(
        'category_name' => 'Books'
    ) );

    if ( have_posts() ) : 
        while ( have_posts() ) :
            the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <h1><?php the_title(); ?></h1>
            </a>
            <p><?php the_content(); ?></p><br />
        <?php endwhile;
    endif;

    //Reset post data to avoid conflicts
    wp_reset_postdata();
?>

<?php get_footer(); ?>