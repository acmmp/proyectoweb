<?php
// buscar_productos.php

include('./php/conexion_be.php');

// Verificar si el parámetro 'q' está presente en la URL
if (isset($_GET['q'])) {
    // Obtener el valor del parámetro 'q'
    $busqueda = mysqli_real_escape_string($conexion, $_GET['q']);

    // Realizar la consulta a la base de datos
    $query = "SELECT * FROM productos WHERE nomp LIKE '%$busqueda%'";
    $resultado = $conexion->query($query);

    // Mostrar los resultados
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_array($resultado)) {
            // Aquí puedes mostrar los resultados como lo haces en tu bucle actual
            // Puedes adaptar el código de tu bucle para mostrar los resultados de la búsqueda
            echo '<div class="columnas__container">';
            echo '<figure class="img__prod">';
            echo '<a href="detalles.php?id=' . $fila['codp'] . '">';
            echo '<img src="./images/productos/' . $fila['imagp'] . '" class="img_card">';
            echo '</a>';
            echo '</figure>';
            echo '<div class="info-card">';
            echo '<h4>' . $fila['nomp'] . '</h4>';
            echo '<p class="precio">' . $fila['preciop'] . '€</p>';
            echo '<form action="agregar_al_carrito.php" method="post">';
            echo '<input type="hidden" name="producto_id" value="' . $fila['codp'] . '">';
            echo '<input type="hidden" name="producto_nombre" value="' . $fila['nomp'] . '">';
            echo '<input type="hidden" name="producto_precio" value="' . $fila['preciop'] . '">';
            echo '<button type="submit" class="agregar-carrito-btn">Agregar al carrito</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo 'No se encontraron resultados para la búsqueda: ' . $busqueda;
    }
} else {
    echo 'La búsqueda no es válida';
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
