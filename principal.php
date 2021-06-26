<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'vistas/Andea-completo-vista.php.php';
    }else{
        header ('location: login.php');
    }
        
?>