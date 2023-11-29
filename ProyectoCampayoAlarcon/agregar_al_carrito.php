<?php
// agregar_al_carrito.php

session_start();

// Verificar si se ha enviado información del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si la sesión del carrito existe; si no, créala
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Obtener la información del producto desde el formulario
    $producto_id = $_POST['producto_id'];
    $producto_nombre = $_POST['producto_nombre'];
    $producto_precio = $_POST['producto_precio'];

    // Agregar el producto al carrito
    $_SESSION['carrito'][] = array(
        'id' => $producto_id,
        'nombre' => $producto_nombre,
        'precio' => $producto_precio,
        'cantidad' => 1, // Puedes ajustar la cantidad según tus necesidades
    );

    // Redirigir a la página de resultados de búsqueda o a donde sea apropiado
    header('Location: buscar_productos.php?q=' . urlencode($_GET['q']));
    exit();
} else {
    // Manejar el acceso incorrecto a este script (puede redirigir a la página de inicio, por ejemplo)
    header('Location: index.php'); // Ajusta según tu estructura de archivos
    exit();
}
?>
