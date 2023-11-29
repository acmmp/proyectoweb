<?php
    session_start();
    include('./php/conexion_be.php');
    if(isset($_GET['id'])){
        $resultado = $conexion ->query("SELECT * FROM productos WHERE codp=".$_GET['id'])or die();
        if(mysqli_num_rows($resultado) > 0 ){
            $fila = mysqli_fetch_row($resultado);

        }else{
            header("Location: ./index_login.php");
        }
    }else{
        header("Location: ./index_login.php");
    }


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

<div class="prod__menu">
    <nav class="prod__container">
        <h1 class="prod__titulo">Nuestros Productos</h1>
        <ul class="prod__link">
            <li class="nav__items">
                <a href="mutti.php" class="prod__links">Mutti</a>
            </li>
            <li class="nav__items">
                <a href="levoni.php" class="prod__links">Levoni</a>
            </li>
            <li class="nav__items">
                <a href="gentile.php" class="prod__links">Gentile</a>
            </li>
            <li class="nav__items">
                <a href="mozzarella.php" class="prod__links">Mozzarela</a>
            </li>
            <li class="nav__items">
                <a href="harina.php" class="prod__links">Harina</a>
            </li>
        </ul>

    </nav>

</div>
    <div class="container">
        <div class="columnas__detalles">
            <img src="./images/productos/<?php echo $fila[6];?>" class="img__detalles">
        </div>
        <div class="columnas__detalles">
            <h2 class="nombre__detalles"><?php echo $fila[1];?></h2>
            <p><?php echo $fila[2];?></p>
            <p><strong class="precio__detalles"><?php echo $fila[4];?>€</strong></p>
        </div>
        <div class="botones__cantidad">
            <input type ="number" class="cantidad" name="cantidad" value="1">
            <a href="carrito.php?id=<?php echo $fila[0] ?>" class="agregar__detalles">Añadir al carrito</a>
        </div>
    </div>


<main>

<?php require("footer.php"); ?>
</main>

</body>
</html>