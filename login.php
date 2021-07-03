<?php session_start();

    if(isset($_SESSION['email_usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['email_usuario'];
        $clave = $_POST['password_usuario'];
        $clave = hash('sha512', $clave);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=andeauni_database', 'andeauni_andeauni', 'Rn?.,mm!1;[i');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM usuario WHERE correo = :email_usuario AND password = :password_usuario'
        );
        
        $statement->execute(array(
            ':email_usuario' => $usuario,
            ':password_usuario' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            if (!$resultado['is_active']){
                $error .= '<i>Usted aun no ha sido aprobado.</i>';
            } else {
                $_SESSION['email_usuario'] = $usuario;
    
                if($usuario=="admin@gmail.com"){
                    header('location: panel.php');
                }else{
                    header('location: principal.php');
                }
            }
        }else{
            $error .= '<i>Este usuario o contraseña incorrectos.</i>';
        }
    }
    
require 'vistas/signup-login-vista.php';


?>