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
    <link rel="stylesheet" href="css/contacto.css">
    


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <style>
        .contenedor {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .mapa img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>


</head>


  <!-- Estilos del boton de busqueda de productos -->





<body>
<?php require("head.php"); ?>







<div class="contenedor">
        
        <form action="#" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            <button type="submit">Enviar</button>
        </form>

        <h2>Información de Contacto</h2>
        <br>
        <p><strong>Dirección:</strong> Calle jaex, 29006, Malaga, España</p>
        <br>
        <p><strong>Teléfono:</strong> +123 456 789</p>
        <br>
        <p><strong>Correo Electrónico:</strong> adrianjavier@gmail.com</p>
        <br>
        <br>
        <h2>Horario de Atención</h2>
       
       
        <p>Lunes a Viernes: 9:00 AM - 6:00 PM<br>
           Sábado y Domingo: Cerrado</p>



           <br>
        <h2>Ubicación en el Mapa</h2>
        <br>
        <br>
        <div class="mapa">
            <img src="images/Captura.JPG" alt="Ubicación en el Mapa">
        </div>
    </div>










<br>
<br>
<br>
<br>

    <!-- Puedes agregar aquí más contenido de tu página -->
    <?php require("footer.php"); ?>

</body>



</html>