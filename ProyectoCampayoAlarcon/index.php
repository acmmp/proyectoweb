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
                    <a href="registrarse.php" class="nav__links">Registrate</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
        </nav>
        <section class="banner__container container">
            <h1 class="banner__title">Cucine d'Italia</h1>
            <p class="banner__paragraph">Expertos en gastronomía italiana. Contamos con más de 20 años de experiencia en la importación y distribución de productos de las marcas italianas de mayor prestigio.</p>
        </section>
       
</header>

<form action="./php/login_usuario.php" method="POST" class="login__form">
    <h2 class="login__title">Iniciar Sesión</h2>
   
    <div class="container__login">
        <div class="login__group">
            <h3 class="login__label">Usuario:</h3>
            <input type="text" name="usuario" class="login__input" placeholder=" ">
        </div>
        <div class="login__group">
            <h3 class="login__label">Contraseña:</h3>
            <input type="password" name="pass" class="login__input" placeholder=" ">
         </div>
         <button class="login__submit">Entrar</button>
    </div>
</form>
<main>
<?php require("footer.php"); ?>

</main>
</body>
</html>