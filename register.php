<?php session_start();

    if(isset($_SESSION['email_usuario'])) {
        header('location: index.php');
    }

    
    //captures the data entered in the login view
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email_registrar'];
        $institucion = $_POST['institucion'];
        $password = $_POST['password_registrar'];
        $rol = $_POST['rol'];
        
        $password = hash('sha512', $password);
        
        $error = '';
        
        if (empty($nombre) or empty($apellido) or empty($correo) or empty($institucion) or empty($password) or empty($rol)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{ 
            //verify that if the user is already registered previously
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=andeauni_database', 'andeauni_andeauni', 'Rn?.,mm!1;[i');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM usuario WHERE correo = :email_registrar LIMIT 1');
            $statement->execute(array(':email_registrar' => $correo));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
            
       //   check if the two passwords match   
       //   if ($clave != $clave2){
       //       $error .= '<i> Las contraseñas no coinciden</i>';
       //   }
            
            
        }
        
        if ($error == ''){
            //the data entered by the user is taken and stored in the database
            $statement = $conexion->prepare('INSERT INTO usuario SET
                nombre = :nombre,
                apellido = :apellido,
                correo = :email_registrar,
                institucion = :institucion,
                password = :password_registrar,
                rol = :rol');
            $statement->execute(array(
                
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':email_registrar' => $correo,
                ':institucion'=>$institucion,
                ':password_registrar'=> $password,
                ':rol'=> $rol
                
            ));
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente. Recuerde que solo podra acceder al conenido completo cuando sea aceptado, esto se le notificara via correo registrado.</i>';
        }
    }


    require 'vistas/signup-login-vista.php';

?>