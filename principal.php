<?php session_start();

    if(isset($_SESSION['email_usuario'])){
        require 'vistas/Andea-completo-vista.php';
    }else{
        header ('location: login.php');
    }
    
    // check if there is already a session started
?>