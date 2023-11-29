<?php
session_start();

// Verificar si se ha enviado información del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $producto_id = $_POST['producto_id'];
    $producto_nombre = $_POST['producto_nombre'];
    $producto_precio = $_POST['producto_precio'];

    // Verificar si la sesión del carrito existe; si no, créala
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Verificar si el producto ya está en el carrito
    $producto_existente = false;
    foreach ($_SESSION['carrito'] as &$producto) {
        if ($producto['id'] == $producto_id) {
            // Si el producto ya está en el carrito, puedes ajustar la cantidad o hacer lo que necesites
            $producto['cantidad']++;
            $producto_existente = true;
            break;
        }
    }

    // Si el producto no estaba en el carrito, agrégalo
    if (!$producto_existente) {
        $_SESSION['carrito'][] = array(
            'id' => $producto_id,
            'nombre' => $producto_nombre,
            'precio' => $producto_precio,
            'cantidad' => 1,
        );
    }

    // Devolver una respuesta al cliente (puedes personalizar según tus necesidades)
    echo json_encode(array('mensaje' => 'Producto agregado al carrito'));
} else {
    // Manejar el acceso incorrecto a este script (puede redirigir a la página de inicio, por ejemplo)
    echo json_encode(array('error' => 'Acceso incorrecto al script'));
}
?>
