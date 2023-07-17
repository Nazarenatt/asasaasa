<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Crear cuenta</title>
</head>
<body>
    <form action="../controllers/registrarse.php" method="POST">
        <h1>CREAR CUENTA</h1>

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
        
        <?php
            if (isset($_GET['success'])) {?>
                <p class="success">
                    <?php 
                        echo $_GET['success']
                    ?></p>
        <?php 
            } ?>
        <hr>

        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" placeholder="Usuario" name="Usuario">

        <i class="fa-solid fa-user"></i>
        <label>Nombre completo</label>
        <input type="text"  placeholder="Nombre completo" name="Nombre_Completo">

        <i class="fa-solid fa-envelope"></i>
        <label>Correo</label>
        <input type="email" placeholder="Email" name="Email">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" placeholder="Clave" name="Clave">

        <i class="fa-solid fa-unlock"></i>
        <label>Repita la clave</label>
        <input type="text" placeholder="Clave" name="RClave">

        <hr>
        <button type="submit">Crear</button>
        <a href="IniciarSesion.php">Iniciar sesion</a>

    </form>
    
</body>
</html>