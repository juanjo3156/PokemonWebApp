<?php 
// Este archivo permite conectarse a la base de datos
$server = "localhost";
$database = "pokemon_app";
$user = "root";
$pass = "";

try{
    $conection = new PDO("mysql:host=$server;dbname=$database",$user,$pass);
}catch(Exception $e){
    echo $e ->getMessage();
}