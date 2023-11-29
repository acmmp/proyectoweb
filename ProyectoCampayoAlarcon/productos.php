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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>


  <!-- Estilos del boton de busqueda de productos -->
<style>


A {text-decoration: none; color:#1b0064} 


.stylish-search-form {
    text-align: center;
    margin: 20px;
}

.stylish-search-form label {
    display: block;
    font-size: 18px;
    margin-bottom: 10px;
}

.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

#search {
    padding: 10px;
    font-size: 16px;
    border: 2px solid #3498db;
    border-radius: 5px 0 0 5px;
    margin-right: -1px;
}

button {
    padding: 10px 15px;
    font-size: 16px;
    border: 2px solid #3498db;
    border-radius: 0 5px 5px 0;
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}
</style>




<body>
    <?php require("head.php"); ?>


  <!-- Agregar el formulario de búsqueda -->
<div class="search-form">
    <form action="buscar_productos.php" method="GET">
        <label for="search">Buscar productos:</label>
        <input type="text" id="search" name="q" placeholder="Ingrese el nombre del producto">
        <button type="submit">Buscar</button>
    </form>
</div>



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

    <div class="lista">
        <?php 
            include('./php/conexion_be.php');

            
            $resultado = $conexion->query("SELECT * FROM productos");
            while($fila = mysqli_fetch_array($resultado)){ 
        ?>
            <!-- Dentro del bucle while -->
            <div class="columnas__container">
                <figure class="img__prod">
                    <a href="detalles.php?id=<?php echo $fila['codp'];?>">
                        <img src="./images/productos/<?php echo $fila['imagp'];?>" class="img_card">
                    </a>
                </figure>
                <div class="info-card">
                    <h4><?php echo $fila['nomp'];?></h4>
                    <p class="precio"><?php echo $fila['preciop'];?>€</p>

                    <!-- Agregar formulario de agregar al carrito -->
                    
<form class="add-to-cart-form" action="agregar_al_carrito.php" method="post">
    <input type="hidden" name="producto_id" value="<?php echo $fila['codp']; ?>">
    <input type="hidden" name="producto_nombre" value="<?php echo $fila['nomp']; ?>">
    <input type="hidden" name="producto_precio" value="<?php echo $fila['preciop']; ?>">
    <button type="button" class="agregar-carrito-btn">Agregar al carrito</button>
</form>

                </div>
            </div>
        <?php } ?>

    </div>

    <main>
        <?php require("footer.php"); ?>
    </main>

    <script>
    $(document).ready(function () {
        $(".agregar-carrito-btn").click(function () {
            // Obtener datos del formulario
            var formData = $(this).closest("form").serialize();

            // Realizar la solicitud AJAX
            $.ajax({
                type: "POST",
                url: "agregarcarritofuera.php",
                data: formData,
                success: function (response) {
                    // Manejar la respuesta del servidor (puedes mostrar un mensaje, actualizar el carrito en la interfaz, etc.)
                    alert("Producto agregado al carrito");
                },
                error: function () {
                    // Manejar errores si los hay
                    alert("Error al agregar el producto al carrito");
                }
            });
        });
    });
</script>

</body>


</html>
