<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['email_usuario'];
        $clave = $_POST['password_usuario'];
        $clave = hash('sha512', $clave);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=andea_database', 'root', '');
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
            $_SESSION['email_usuario'] = $usuario;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'vistas/signup-login-vista.php';


?>