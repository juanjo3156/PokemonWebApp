<?php 
    require('user_admin/config.php');
    session_start();
    session_destroy();
    header('Location:'.RUTA_pag.'index.php');
?>