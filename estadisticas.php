<?php session_start();

    if(isset($_SESSION['email_usuario'])){

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=andeauni_database', 'andeauni_andeauni', 'Rn?.,mm!1;[i');
        } catch(PDOException $prueba_error) {
            echo "Error: " . $prueba_error->getMessage();
        }

        $data = $conexion->query(
            "SELECT
                count(IF (rol='docente', 1, NULL)) `docente`,
                count(IF (rol='estudiante', 1, NULL)) `estudiante`,
                count(IF (rol='otro', 1, NULL)) `otro`
            from usuario")->fetch();

        $data_table = $conexion->query(
            "SELECT
                institucion,
                count(IF (rol='docente', 1, NULL)) `docente`,
                count(IF (rol='estudiante', 1, NULL)) `estudiante`,
                count(IF (rol='otro', 1, NULL)) `otro`,
                count(*) `total`
            from usuario
            GROUP BY institucion")->fetchAll();

        require 'vistas/Estadisticas-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>