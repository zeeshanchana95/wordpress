<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags and other head content -->
    <title>Inance</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="hero_area">
        <!-- Header section starts -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="contact_nav">
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>Call : +01 123455678990</span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Email : demo@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <span>Inance</span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary', // Your theme location
                                'menu_class' => 'navbar-nav custom_nav-menu', // Class for <ul> element
                                'container_class' => 'custom_nav-container', // Class for the container <div> element
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>

        </header>
        <!-- End header section -->
    </div>
