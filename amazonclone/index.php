
<?php get_header(); ?>

<?php 
    // print_r(get_stylesheet_uri());          //http://localhost:10004/wp-content/themes/amazonclone/style.css
    // print_r(get_theme_file_uri());          //http://localhost:10004/wp-content/themes/amazonclone
    // print_r(get_template_directory_uri());  //http://localhost:10004/wp-content/themes/amazonclone
?>

<body>
    <div class="hero-section">
        <div class="hero-msg">
            <p>You are on Amazon.com. You can also shop amazon.pk for millions of products with fast local delivery. <a href="amazon.pk">Click here to go to amazon.pk</a></p>
        </div>
    </div>
    <div class="shop-section">
        <div class="box1 box">
           <div class="box-content">
            <h2>Clothes</h2>
            <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box1_image.jpg"); ?>"></div>
            <p>See more</p>
           </div>
        </div>
        <div class="box2 box">  <div class="box-content">
            <h2>Health & Personal Care</h2>
            <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box2_image.jpg"); ?>"></div>
            <p>See more</p>
           </div></div>
        <div class="box3 box">  <div class="box-content">
            <h2>Furniture</h2>
            <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box3_image.jpg"); ?>"></div>
            <p>See more</p>
           </div></div>
        <div class="box4 box">  <div class="box-content">
            <h2>Phones & Tablets</h2>
            <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box4_image.jpg"); ?>"></div>
            <p>See more</p>
           </div>
        </div>
        <div class="box1 box">
            <div class="box-content">
             <h2>Beauty Picks</h2>
             <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box5_image.jpg"); ?>"></div>
             <p>See more</p>
            </div>
         </div>
         <div class="box2 box">  <div class="box-content">
             <h2>Pet Supplies</h2>
             <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box6_image.jpg"); ?>"></div>
             <p>See more</p>
            </div></div>
         <div class="box3 box">  <div class="box-content">
             <h2>New Arrival in Toys</h2>
             <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box7_image.jpg"); ?>"></div>
             <p>See more</p>
            </div></div>
         <div class="box4 box">  <div class="box-content">
             <h2>Discover Fashion</h2>
             <div class="box-img" style="background-image: url('<?php echo get_theme_file_uri("/images/box8_image.jpg"); ?>"></div>
             <p>See more</p>
            </div>
         </div>
    </div>

    <div class="recent-posts">
        <?php
            while(have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><a href="<?php the_permalink(); ?>">Read More</a></p>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        <?php }
        ?>
    </div>

    <!-- show new created post types -->
    <div class="recent-pages">
        <?php 
            $pages_query = new WP_Query( array(
                'post_type' => 'to-do ',
                'posts_per_page' => -1,
            ));

            while($pages_query->have_posts()) {
                $pages_query->the_post();
                
                echo '<h1>'. get_the_title() . '</h1>';
                echo '<p>' . get_the_content() .'</p>';

            }
        ?>
    </div>
   
    <?php get_footer(); ?>