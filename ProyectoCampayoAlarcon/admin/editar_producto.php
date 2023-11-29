<?php
include('../php/conexion_be.php');


if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE codp = $id";
    $resultado = $conexion->query($query);
    $producto = mysqli_fetch_assoc($resultado);
} else {
    // Manejar el caso en el que no se proporciona un ID válido.
    // Puedes redirigir al usuario a una página de error o volver a la página de productos.
    header("Location: productos_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ... (códigos  y enlaces a CSS) ... -->
    <title>Editar Producto</title>
</head>
<body>
    <h1 style="text-align: center;">Editar Producto</h1>
    <form action="actualizar_producto.php" method="post" style="max-width: 400px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <input type="hidden" name="id" value="<?php echo $producto['codp']; ?>">
        
        <label for="nombre" style="font-weight: bold;">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nomp']; ?>" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"><br>

        <label for="categoria" style="font-weight: bold;">Categoría:</label>
        <input type="text" id="categoria" name="categoria" value="<?php echo $producto['categoriap']; ?>" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"><br>

        <label for="precio" style="font-weight: bold;">Precio:</label>
        <input type="text" id="precio" name="precio" value="<?php echo $producto['preciop']; ?>" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"><br>

       

        <br>

        <input type="submit" value="Guardar Cambios" style="background-color: #4caf50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#4caf50'">
    </form>
</body>
</html>






</html>
