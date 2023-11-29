<?php
    session_start();
    include './php/conexion_be.php';
    if(isset($_SESSION['carrito'])){
        if(isset($_GET['id'])){
            $arreglo =$_SESSION['carrito'];
            $encontro=false;
            $numero = 0;
            for($i=0;$i<count($arreglo);$i++){
                if($arreglo[$i]['Id'] == $_GET['id']){
                    $encontro=true;
                    $numero=$i;
                }
            }
            if($encontro == true){
                $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                $_SESSION['carrito']=$arreglo;
                header("Location:./carrito.php");
            }else{
                $nombre="";
                $precio="";
                $imagen="";
                $res= $conexion->query('SELECT * FROM productos WHERE codp='.$_GET['id'])or die();
                $fila= mysqli_fetch_row($res);
                $nombre=$fila[1];
                $precio=$fila[4];
                $arregloNuevo = array(
                    'Id'=> $_GET['id'],
                    'Nombre'=> $nombre,
                    'Precio'=> $precio,
                    'Cantidad'=> 1
                );
                array_push($arreglo, $arregloNuevo);
                $_SESSION['carrito']=$arreglo;
                header("Location:./carrito.php");
            }
        }

    }else{
        if(isset($_GET['id'])){
            $nombre="";
            $precio="";
            $res= $conexion->query('SELECT * FROM productos WHERE codp='.$_GET['id'])or die();
            $fila= mysqli_fetch_row($res);
            $nombre=$fila[1];
            $precio=$fila[4];
            $arreglo[] = array(
                'Id'=> $_GET['id'],
                'Nombre'=> $nombre,
                'Precio'=> $precio,
                'Cantidad'=> 1
            );
            $_SESSION['carrito']=$arreglo;
            header("Location:./carrito.php");
        }
    }

?>

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
    
</head>
<body>
    
<header class="banner">
        <nav class="nav container">
            <div class="nav__baner">
                <h2><class class="nav_title">GARDA</class></h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="index_login.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="productos.php" class="nav__links">Productos</a>
                </li>    
                <li class="nav__items">
                    <a href="index.php" class="nav__links">Cerrar Sesión</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="carrito.php" class="nav__links"> <img src="./images/cart.svg" style="width:30px;"></a>
                </li>
                
        </nav>
        <section class="banner__container container">
            <h1 class="banner__title">Cucine d'Italia</h1>
            <p class="banner__paragraph">Expertos en gastronomía italiana. Contamos con más de 20 años de experiencia en la importación y distribución de productos de las marcas italianas de mayor prestigio.</p>
        </section>
       
</header>

<main>
    <form class="column_tabla" method="post">
        <div class="site-blocks-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="product-name">Producto</th>
                        <th class="product-price">Precio</th>
                        <th class="product-quantity">Cantidad</th>
                        <th class="product-total">Total</th>
                        <th class="product-remove">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $total = 0;
                       if (isset($_SESSION['carrito'])) {
                           $arregloCarrito = $_SESSION['carrito'];
                           for ($i = 0; $i < count($arregloCarrito); $i++) {
                               // Check if the keys "Precio" and "Cantidad" exist in the current array element
                               if (isset($arregloCarrito[$i]['Precio'], $arregloCarrito[$i]['Cantidad'])) {
                                   $total = $total + ($arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']);}
                    ?>
                    <tr>
                        </td>
                        <td class="product-name">
    <h2 class="info-card">
        <?php echo isset($arregloCarrito[$i]['Nombre']) ? $arregloCarrito[$i]['Nombre'] : ''; ?>
    </h2>
</td>
<td class="precio__carrito">
    <h2 class="precio__car">
        <?php echo isset($arregloCarrito[$i]['Precio']) ? $arregloCarrito[$i]['Precio'] . '€' : ''; ?>
    </h2>
</td>
<td>
    <div class="botones__cantidad">
        <input type="text" class="cantidad"
               data-precio="<?php echo isset($arregloCarrito[$i]['Precio']) ? $arregloCarrito[$i]['Precio'] : ''; ?>"
               data-id="<?php echo isset($arregloCarrito[$i]['Id']) ? $arregloCarrito[$i]['Id'] : ''; ?>"
               value="<?php echo isset($arregloCarrito[$i]['Cantidad']) ? $arregloCarrito[$i]['Cantidad'] : ''; ?>"
               placeholder="">
    </div>
</td>
<td>
    <h2 class="total__carrito<?php echo isset($arregloCarrito[$i]['Id']) ? $arregloCarrito[$i]['Id'] : ''; ?>">
        <?php echo isset($arregloCarrito[$i]['Precio'], $arregloCarrito[$i]['Cantidad']) ? $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'] . '€' : ''; ?>
    </h2>
</td>
<td>
    <a href="#" class="btnBorrar" data-id="<?php echo isset($arregloCarrito[$i]['Id']) ? $arregloCarrito[$i]['Id'] : ''; ?>">X</a>
</td>
</tr>

                    <?php } } ?>
                </tbody>
            </table>
            <div class="total__container">
                  <div class="totalBox">
                    <h2 class="total__text">Total</h2>
                  </div>
                  <div class="totalnum">
                    <h2 class="total__text"><?php echo $total ?>€</h2>
                  </div>
            </div>

                <div class="total">
                    <div class="comprar">
                        <a class="btn__comprar" href="./gracias.php">Finalizar compra</a>
                    </div>    
                </div>
        </div>
    </form>
    

    <?php require("footer.php"); ?>

</main>
<script src="./js/jQuery-v3.6.0.js"></script>
<script>
    $(document).ready(function(){
        $(".btnBorrar").click(function(){
            event.preventDefault();
            var id= $(this).data('id');
            var boton = $(this);
           
            $.ajax({
                method:'POST',
                url:'./php/eliminarCarrito.php',
                data:{
                    id:id
                }
            }).done(function(respuesta){
                boton.parent('td').parent('tr').remove();
            });
        });
        $(".cantidad").keyup(function(){
            var cantidad = $(this).val();
            var precio = $(this).data('precio');
            var id = $(this).data('id');
            incrementar(cantidad,precio,id);
            
        });
        function incrementar(cantidad, precio, id){
            var mult = parseFloat(cantidad)* parseFloat(precio);
            $('.total__carrito'+id).text(mult+'€');

            $.ajax({
                method:'POST',
                url:'./php/actualizar.php',
                data:{
                    id:id,
        
                }
            }).done(function(respuesta){

            });
        }
    });
</script>

</body>
</html>