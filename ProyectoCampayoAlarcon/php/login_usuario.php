<?php 

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$pass'");
    $validar_admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and pass='$pass' and rol=0");
    if(mysqli_num_rows($validar_admin) > 0){
        header("location:../admin/index_admin.php");
        exit;
    }else{
        if(mysqli_num_rows($validar_login) > 0){
            header("location:../index_login.php");
            exit;
        }else{
            echo '
            <script>
                alert("Usuario no existe, verifique credenciales");
                window.location = "../index.php";
            </script>
        ';
        exit;
        }
    }

?>