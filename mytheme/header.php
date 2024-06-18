<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 10 WordPress Features</title>
</head>
<?php 
    // to show menu on our wordpress theme [used in heade.php to show menu in header section]
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'main-menu',
        'menu_class' => 'nav-menu',
    ));
    
    wp_head();
?>