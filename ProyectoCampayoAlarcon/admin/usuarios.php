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
  <h1>Usuarios</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Rol</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <?php 
        include('../php/conexion_be.php');
        $resultado = $conexion -> query("SELECT * FROM usuarios");
        while($fila = mysqli_fetch_array($resultado)){ 
    
    ?>
    <table cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><?php echo $fila['id_cliente'];?></td>
          <td><?php echo $fila['usuario'];?></td>
          <td><?php echo $fila['pass'];?></td>
          <td><?php echo $fila['mail'];?></td>
          <td><?php echo $fila['telf'];?></td>
          <td><?php echo $fila['rol'];?></td>
        </tr>
        
      </tbody>
    </table>
    <?php } ?>
  </div>
</section>





</body>
</html>