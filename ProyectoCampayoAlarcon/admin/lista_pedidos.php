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
  <h1>Productos</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>ID Pedido</th>
          <th>Id Producto</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Subtotal</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <?php 
        include('../php/conexion_be.php');
        $resultado = $conexion -> query("SELECT * FROM listapedidos");
        while($fila = mysqli_fetch_array($resultado)){ 
    ?>
    <table cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><?php echo $fila['id_pedido'];?></td>
          <td><?php echo $fila['id_producto'];?></td>
          <td><?php echo $fila['cantidad'];?> €</td>
          <td><?php echo $fila['precio'];?> €</td>
          <td><?php echo $fila['subtotal'];?> €</td>
        </tr>
        
      </tbody>
    </table>
    <?php } ?>
  </div>
</section>





</body>
</html>