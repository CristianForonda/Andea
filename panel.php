<?php session_start();



    if(isset($_SESSION['email_usuario'])) {
        
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=andeauni_database', 'andeauni_andeauni', 'Rn?.,mm!1;[i');
        } catch(PDOException $prueba_error) {
            echo "Error: " . $prueba_error->getMessage();
        }

        if (isset($_POST['aprobar']) && is_numeric($_POST['user_id'])) {
            $query = $conexion->prepare(
                "UPDATE usuario SET
                    is_active = !is_active
                WHERE
                    id = :id
            ")->execute([ ":id" => $_POST['user_id'] ]);

            die($query);
        }
        
        $users = $conexion->query('SELECT * FROM usuario')->fetchAll();

        require 'vistas/panel-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>