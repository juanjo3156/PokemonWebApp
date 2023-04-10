<?php 
    require('user_admin/config.php');
    
    require('functions.php');

    $error = '';

    if($_SERVER['REQUEST_METHOD']=="POST"){

        
        $username = filter_var(strtolower(clean_data($_POST['username'])),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];


        


        if(empty($username) or empty($password) or empty($password2) or empty($email)){
            $error.= '<li>Please complete all fields</li>';
        }else{

            include('db.php');
            $statement = $connection->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
            $statement->bindParam(":username",$username);
            $statement->execute();
            $result = $statement->fetch();
    
            if($result != false){
                $error.='<li>Username already exist</li>';
            }

            $password = hash('sha512',$password);
            $password2 = hash('sha512',$password2);
            
            if($password != $password2){
                $error.='<li>Passwords do not match</li>';
            }
        }

        if($error == ''){
            $statement = $connection->prepare("INSERT INTO users (id,username,password,email) VALUES (null,:username,:password,:email)");

            $statement->bindParam(':username',$username);
            $statement->bindParam(':password',$password);
            $statement->bindParam(':email',$email);
            
            $statement->execute();

            header('Location:'.RUTA_pag.'login.php');
        }

    }
    require('views/sign_up.view.php');
    
?>