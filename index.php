<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: Andea-completo-vista.php');
    }else{
        header('location: vistas/index-vista.php');
    }


?>