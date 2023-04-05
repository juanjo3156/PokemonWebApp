<?php 
    require('user_admin/config.php');
    include('db.php');
    require('functions.php');


    actual_page();

    $posts = get_posts(5,$connection);

    
    require('views/index.view.php'); 
?>