<?php 
    require('user_admin/config.php');
    include('db.php');

    $statement = $conection->prepare("SELECT * FROM pokemon_list");
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    require('views/index.view.php'); 
?>