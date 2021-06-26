<?php session_start();

    if(isset($_SESSION['email_usuario'])){
        require 'vistas/panel-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>