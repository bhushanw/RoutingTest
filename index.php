<?php
    include 'route.php';
    include 'src/about.php';
    include 'src/home.php';
    include 'src/contact.php';
    
    $route = new Route();
    
    $route->add('/','Home');
    $route->add('/about','About');
    $route->add('/contact','Contact');
    
    $route->submit();
    
?>