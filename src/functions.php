<?php 
    function clean_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }   
    function actual_page(){
        return isset($_GET['p']) ? (int)$_GET['p'] : 1 ; 
    }
    function get_posts($post_by_page,$connection){
        $start = (actual_page()>1)? actual_page()*$post_by_page - $post_by_page: 0;
        $statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM pokemon_list LIMIT $start,$post_by_page");
        $statement->execute();
        return $statement->fetchAll();
    }
    function page_number($post_by_page,$connection){
        $total_posts = $connection->prepare('SELECT FOUND_ROWS() as total');
        $total_posts->execute();
        $total_posts = $total_posts->fetch()['total'];

        $page_number = ceil($total_posts/$post_by_page);
        return $page_number;
    }