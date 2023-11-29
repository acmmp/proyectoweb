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
<STYLE>A {text-decoration: none; color:#1b0064} </STYLE>
<body>
<?php require("head.php"); ?>

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

    </nav>

</div>

<div class="lista">
<?php 
    include('./php/conexion_be.php');
    $resultado = $conexion -> query("SELECT * FROM productos WHERE categoriap ='mutti'");
    while($fila = mysqli_fetch_array($resultado)){ 
?>


    <div class="columnas__container">
        <figure class="img__prod">
            <a href="detalles.php?id=<?php echo $fila['codp'];?>">
            <img src="./images/productos/<?php echo $fila['imagp'];?>" class="img_card">
        </figure>    
        <div class="info-card">
            <h4><?php echo $fila['nomp'];?></h4>
            <p class="precio"><?php echo $fila['preciop'];?>€</p>
        </div>
    </div>

<?php } ?>
</div>

<main>

<?php require("footer.php"); ?>

</main>

</body>
</html>