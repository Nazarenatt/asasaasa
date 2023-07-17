<?php

    session_start();
    include_once('Conexion.php');
    
    if (isset($_POST['Usuario']) && isset($_POST['Nombre_Completo']) && isset($_POST['Email']) && isset($_POST['Clave']) && isset($_POST['RClave'])) {
        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usuario = validar($_POST['Usuario']);
        $nombreCompleto = validar($_POST['Nombre_Completo']);
        $email = validar($_POST['Email']);
        $clave = validar($_POST['Clave']);
        $Rclave = validar($_POST['RClave']);

        $datosUsuario = 'Usuario=' . $usuario . 'Nombre_Completo=' . $nombreCompleto;

        if (empty($usuario)) {
            header("Location: ../views/CrearCuenta.php?error=El usuario es requerido&$datosUsuario");
            exit();
        }elseif(empty($nombreCompleto)){
            header("Location: ../views/CrearCuenta.php?error=El nombre completo es requerido&$datosUsuario");
            exit();
        }elseif(empty($email)){
            header("Location: ../views/CrearCuenta.php?error=El email es requerido&$datosUsuario");
            exit();
        }elseif(empty($clave)){
            header("Location: ../views/CrearCuenta.php?error=La clave es requerida&$datosUsuario");
            exit();
        }elseif(empty($Rclave)){
            header("Location: ../views/CrearCuenta.php?error=Repetir la clave es requerida&$datosUsuario");
            exit();
        }elseif($clave !== $Rclave){
            header("Location: ../views/CrearCuenta.php?error=La clave no coincide&$datosUsuario");
            exit();
        }else{
            //$clave = hash('sha512', $clave);

            $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
            $query = $conexion->query($sql);

            if(mysqli_num_rows($query) > 0){
                header("Location: ../views/CrearCuenta.php?error=El usuario ya existe!");
                exit();
            }else {
                $sql2 ="INSERT INTO usuarios(Nombre_Completo, Usuario, Email, Clave) VALUES('$nombreCompleto','$usuario', '$email','$clave')";
                $query2 = $conexion->query($sql2);

                if ($query2) {
                    header("Location: ../views/CrearCuenta.php?success=Usuario creado con exito");
                    exit();
                }else {
                    header("Location: ../views/CrearCuenta.php?success=Ocurrio un error");
                    exit();
                }
            }
        }

    }else {
        header('Location: ../views/CrearCuenta.php');
        exit();
    }



?>