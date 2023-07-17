<?php
    require('database.php');
    require('migrations/migrations_1.php');

    $datos= mysqli_query($conexion,$table_candies);
?>