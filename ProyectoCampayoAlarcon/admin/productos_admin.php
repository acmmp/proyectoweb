<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garda</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="../css/estilos_admin.css">
</head>
<body>
<?php require("cerrarsesion.php"); ?>

<section>
  <h1>Productos en STOCK</h1>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th> <!-- Nuevo encabezado para la columna de eliminación -->
            </tr>
        </thead>
        <tbody>
            <?php 
                include('../php/conexion_be.php');
                $resultado = $conexion->query("SELECT * FROM productos");
                while($fila = mysqli_fetch_array($resultado)){ 
            ?>
            <tr>
                <td><?php echo $fila['codp'];?></td>
                <td><?php echo $fila['nomp'];?></td>
                <td><?php echo $fila['desp'];?></td>
                <td><?php echo $fila['preciop'];?> €</td>
                <td><?php echo $fila['categoriap'];?></td>
                <td><img src="../images/productos/<?php echo $fila['imagp'];?>" width="50px" height="50px"></td>
                <td>
                    <a href="editar_producto.php?id=<?php echo $fila['codp']; ?>">
                        <img src="/ProyectoCampayoAlarcon/ProyectoCampayoAlarcon/images/editar.png" alt="Editar" width="24" height="24">
                    </a>
                </td>
                <td>
                    <a href="borrar_producto.php?id=<?php echo $fila['codp']; ?>" onclick="return confirm('¿Estás seguro de que deseas borrar este producto?');">
                        <img src="/ProyectoCampayoAlarcon/ProyectoCampayoAlarcon/images/borrar.png" alt="Borrar" width="24" height="24">
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</section>

</body>
</html>
