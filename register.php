<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['email_registrar'];
        $institucion = $_POST['institucion'];
        $password = $_POST['password_registrar'];
        $rol = $_POST['rol'];
        
        $clave = hash('sha512', $password);
        
        //$clave2 = hash('sha512', $clave2);
        
        $error = '';
        
        if (empty($nombre) or empty($apellido) or empty($correo) or empty($institucion) or empty($password) or empty($rol)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=andea_database', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM usuario WHERE correo = :correo LIMIT 1');
            $statement->execute(array(':email_registrar' => $correo));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
            
           // if ($clave != $clave2){
          //      $error .= '<i> Las contraseñas no coinciden</i>';
         //  }
            
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO usuario (id, nombre, apellido, correo, institucion, password, rol ) VALUES (null, :nombre, :apellido, :email_registrar, :institucion, :password_registrar, :rol )');
            $statement->execute(array(
                
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':email_registrar' => $correo,
                ':password_registrar'=> $password,
                ':rol'=> $rol
                
            ));
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }


    require 'vistas/signup-login-vista.php';

?>