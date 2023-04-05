<?php 
    function clean_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }   
    function actual_page(){
        return isset($_GET['p']) ? (int)$_GET['p'] : 1 ; 
    }