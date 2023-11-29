<?php
include('../php/conexion_be.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];
    // Recoge otros campos del formulario aquí

    // Actualiza el producto en la base de datos
    $query = "UPDATE productos SET nomp='$nombre', preciop='$precio', categoriap='$categoria' WHERE codp=$id";
    $resultado = $conexion->query($query);

    if ($resultado) {
        // Producto actualizado correctamente, redirige a la página de productos
        header("Location: productos_admin.php");
        exit();
    } else {
        // Maneja el caso en el que la actualización falla
        echo "Error al actualizar el producto. Por favor, inténtalo de nuevo.";
    }
} else {
    // Si alguien intenta acceder a esta página directamente sin enviar datos del formulario, redirige a la página de productos
    header("Location: productos_admin.php");
    exit();
}
?>
