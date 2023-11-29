<?php
include('../php/conexion_be.php');

if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Eliminar el producto de la base de datos
    $eliminar_producto = $conexion->prepare("DELETE FROM productos WHERE codp = ?");
    $eliminar_producto->bind_param("i", $id_producto);

    if ($eliminar_producto->execute()) {
        // Producto eliminado con éxito, redirigir a la página principal de productos o a donde desees
        header("Location: editar_producto.php");
        exit();
    } else {
        // Hubo un error al eliminar el producto
        echo "Error al intentar borrar el producto.";
    }

    $eliminar_producto->close();
} else {
    // Si no se proporciona un ID, redirigir a la página principal de productos o a donde desees
    header("Location: tu_pagina_de_productos.php");
    exit();
}

$conexion->close();
?>
