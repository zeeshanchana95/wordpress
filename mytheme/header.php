
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Theme</title>
</head>
<?php 
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' =>'main-menu',
        'menu_class' =>'nav-menu',
    ));
    
    wp_head();
?>