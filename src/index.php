<?php 
    require('user_admin/config.php');
    include('db.php');
    require('functions.php');

    $posts = get_posts($page_config["post_by_page"],$connection);


    require('views/index.view.php'); 
?>