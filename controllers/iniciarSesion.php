<?php
    session_start();
    include('Conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST['Usuario']);
        $Clave = validate($_POST['Clave']);

        if(empty($Usuario)) {
            header("Location: ../views/IniciarSesion.php?error=Usuario es requerido");
            exit();
        }elseif(empty($Clave)){
            header("Location: ../views/IniciarSesion.php?error=Clave es requerida");
            exit();
        }else{
            //$clave = hash('sha512', $clave);

            $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave ='$Clave'";
            $result = mysqli_query($conexion, $Sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave) {
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                    $_SESSION['Id'] = $row['Id'];
                    header("Location: ../views/home.php");
                    exit();
                }else{
                    header("Location: ../views/IniciarSesion.php?error=El usuario o la clave son incorrectas");
                    exit();
                }
            }else{
                header("Location: ../views/IniciarSesion.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        }
    }else{
        header("Location: ../views/IniciarSesion.php");
        exit();
    }
        ?>