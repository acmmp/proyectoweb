<?php
    session_start();
    include('./php/conexion_be.php');
    if(!isset($_SESSION['carrito'])){header("Location: ./index_login.php");}
    $arreglo = $_SESSION['carrito'];
    $total=0;
    for($i=0; $i<count($arreglo);$i++){
        $total =  $total+($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
    } 
    $fecha = date('Y-m-d h:m:s');   
    $conexion -> query("INSERT INTO pedidos(id_usuario,total,fecha) values(1,'$total','$fecha')")or die(); 
    $id_pedido = $conexion ->insert_id;
    
    for($i=0; $i<count($arreglo);$i++){
        $conexion -> query("INSERT INTO listapedidos(id_pedido,id_producto,cantidad,precio,subtotal) 
        values($id_pedido,".$arreglo[$i]['Id'].",".$arreglo[$i]['Cantidad'].",".$arreglo[$i]['Precio'].",".$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].")")or die();
    }
    unset($_SESSION['carrito']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">
    
</head>
<body>
    
<header class="banner">
        <nav class="nav container">
            <div class="nav__baner">
                <h2><class class="nav_title">GARDA</class></h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index_login.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="productos.php" class="nav__links">Productos</a>
                </li>    
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Cerrar Sesion</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="carrito.php" class="nav__links"> <img src="./images/cart.svg" style="width:30px;"></a>
                </li>
        </nav>
        <section class="banner__container container">
            <h1 class="banner__title">Cucine d'Italia</h1>
            <p class="banner__paragraph">Expertos en gastronomía italiana. Contamos con más de 20 años de experiencia en la importación y distribución de productos de las marcas italianas de mayor prestigio.</p>
        </section>
       
</header>

<div class="gracias__container">
        <h1 class="gracias__gracias">Muchas gracias por su compra</h1>
        <a class="btn__gracias" href="./productos.php">Volver a la tienda</a>


    </div>


<main>

<?php require("footer.php"); ?>

</main>

</body>
</html>