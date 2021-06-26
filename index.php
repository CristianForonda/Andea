<?php session_start();

    if(isset($_SESSION['email_usuario'])) {
        header('location: principal.php');
    }else{
        header('location: vistas/index-vista.php');
    }


?>