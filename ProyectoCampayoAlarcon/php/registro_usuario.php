<?php

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $mail = $_POST['mail'];
    $telf = $_POST['telf'];

    // Comprobar credenciales
    $query = "INSERT INTO usuarios(usuario, pass, mail, telf) VALUES('$usuario','$pass','$mail','$telf')";

    $verificar_nombre = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_nombre) > 0){
        echo '
            <script>
                alert("Nombre de Usuario ya utilizado, intenta usar otro");
                window.location="../registrarse.php";
            </script>
        ';
        exit();
    }

    $verificar_mail = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$mail'");

    if(mysqli_num_rows($verificar_mail) > 0){
        echo '
            <script>
                alert("Correo electronico ya utilizado, intenta usar otro");
                window.location="../registrarse.php";
            </script>
        ';
        exit();
    }

    // Registrar datos
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado");
                window.location = "../index.php";
            </script>
        '; 
    }else{
        echo '
            <script>
                alert("Error en el registro");
                window.location = "../registrarse.php";
            </script>
        '; 
    }

    mysqly_close($conexion);

?>