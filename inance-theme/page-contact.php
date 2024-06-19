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


<!-- Contact section -->
<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="#">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone Number" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex">
                        <button>SEND</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap" style="width:100%;height:100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact section -->

<!-- Info section -->
<section class="info_section">
    <div class="container">
        <h4>Get In Touch</h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="info_items">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <p>+02 1234567890</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <p>demo@gmail.com</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-box">
        <h4>Follow Us</h4>
        <div class="box">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<!-- End info section -->

<?php wp_footer(); ?>
</body>
</html>
