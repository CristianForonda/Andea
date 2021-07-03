<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=andeauni_database', 'andeauni_andeauni', 'Rn?.,mm!1;[i');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>