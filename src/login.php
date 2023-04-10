<?php 
    session_start();
    require('user_admin/config.php');
    include('db.php');
    require('functions.php');
   
    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $username = clean_data(filter_var(strtolower($_POST['username']),FILTER_SANITIZE_STRING));
        $password = $_POST['password'];

        $statement = $connection->prepare('SELECT * FROM users WHERE username = :username AND password = :password ');
        $statement->execute(array(":username"=>$username,":password"=>$password));
        $result = $statement->fetch();

        if($result != false){
            $_SESSION['user'] = $username;
            header('Location:'.RUTA_pag.'index.php');
        }
        
    }

    require('views/login.view.php');
?>