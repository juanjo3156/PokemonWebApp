<?php 
    session_start();
    require('user_admin/config.php');
    include('db.php');
    require('functions.php');

    $error = '';
   
    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $username = clean_data(filter_var(strtolower($_POST['username']),FILTER_SANITIZE_STRING));
        $password = $_POST['password'];
        $password = hash('sha512',$password);
        $statement = $connection->prepare('SELECT * FROM users WHERE username = :username AND password = :password ');
        $statement->execute(array(":username"=>$username,":password"=>$password));
        $result = $statement->fetch();

        if($result != false){
            $_SESSION['user'] = $username;
            $_SESSION['user_id']=$result['id'];
            header('Location:'.RUTA_pag.'index.php');
        }else{
            $error.= '<li>Incorrect username or password</li>';
        }
        
    }

    require('views/login.view.php');
?>