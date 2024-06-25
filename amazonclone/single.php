<?php 
    get_header();
?>

<div class="single_posts">
<?php 
    while(have_posts()) {
        the_post(); ?>

        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?></p>
        
    <?php }
?>
</div>

<?php get_footer(); ?>