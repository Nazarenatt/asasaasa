<?php

    $host = "localhost";
    $User = "root";
    $pass = "";
    $db = "nuevo_proyecto_db";
    
    $conexion = new mysqli($host, $User, $pass, $db);
    //$conexion = mysqli_connect($host, $User, $pass, $db);

    if(!$conexion) {
        echo "Conexion fallida";
    }

?>