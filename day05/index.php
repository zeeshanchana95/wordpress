
<?php get_header(); ?>

<body>

<?php
  
// checks if there are any posts that match the query
if (have_posts()) :
  
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : 
    
    the_post();
  
    // the code between the while loop will be repeated for each post
    ?>
    <div class="main-post">
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="post-title"><?php the_title(); ?></a></h2>
  
    <p class="post-date">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
  
    <?php the_content(); ?>
  
    <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p>
    </div>
    <?php
  
    // Stop the loop when all posts are displayed
 endwhile;
  
// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>

</body>


<?php get_footer(); ?>