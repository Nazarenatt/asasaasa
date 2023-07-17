<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles_session.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="../controllers/iniciarSesion.php" method="POST">
        <h1>INICIAR SESION</h1>

        <hr>
        <?php 
            if(isset($_GET['error'])) { 
        ?>
        <p class="error">
            <?php
                echo $_GET['error']
            ?>
        </p>
        <?php 
            } 
        ?>
        <hr>

        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave">

        <hr>
        <button type="submit">Iniciar sesion</button>
        <a href="CrearCuenta.php">Crear cuenta</a>
    </form>
    
</body>
</html>