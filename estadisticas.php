<?php session_start();

    if(isset($_SESSION['email_usuario'])){
        require 'vistas/Estadisticas-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>