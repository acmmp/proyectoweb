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
    <link rel="stylesheet" href="css/testimonios.css">

    
</head>
<body>
    
<?php require("head.php"); ?>

<main>
    <section class="about">
        <div class="about__container">
            <div class="about__texts">
                <h2 class="subtitle">¿Quienes somos?</h2>
                <p class="about__paragraph">Esta empresa italiana fundada en el año 2001 por dos grandes expertos gastronomicos Adrian Campayo y Javier alarcon .Tenemos varios premios en los año 2020 y 2021 como distribuidores gastronomicos. Llevamos más de veinte años acercando la más amplia gama de productos de la mejor gastronomía de Italia a las más típicas trattorias italianas, tiendas y supermercados del panorama nacional. De Italia a tu casa. Tenemos almacenes en España (Madrid) y Italia para facilitar la rapidez de los envios.</p>
            </div>
            <div class="about__picture">
                <img src="./images/transporte.jpg" class="about__img">
            </div>    
        </div>
    </section>

    <div class="slider__titulo">
        <h2>¡ Nuevas Marcas ! !INCORPORADAS RECIENTEMENTE|</h2>
    </div>

    
    <section class="slider"></section>
        <div class="slider__container container">
            <img src="./images/l_arrow.svg" class="slider__flecha" id="before">
            <section class="slider__body slider__body--show" data-id="1">
                 <div class="slider__texts">
                    <h2 class="slider__name" >Mutti</h2>
                    <p class="slider__review">Los tomates pelados, el concentrado simple, el tomate triturado y el concentrado doble son los grandes clásicos Mutti. Estos ingredientes son esenciales para quienes no quieren renunciar al placer de comer tomate fresco y para quienes quieren descubrir lo que entendemos por sabor.</p>
                </div>

                <figure class="slider__picture">
                    <img src="images/mutti.png" class="slider__img">
                </figure>
            </section>
            <section class="slider__body" data-id="2">
                <div class="slider__texts">
                   <h2 class="slider__name" >Levoni</h2>
                   <p class="slider__review">La misión de la cuarta generación de la familia Levoni es una: continuar buscando la excelencia absoluta en la producción de una amplia variedad de embutidos, todos de la más alta calidad, todos portavoces de la gran tradición gastronómica y vinícola italiana.</p>
               </div>

               <figure class="slider__picture">
                   <img src="images/levoni.png" class="slider__img">
               </figure>
           </section>  <section class="slider__body" data-id="3">
            <div class="slider__texts">
               <h2 class="slider__name" >Gentile</h2>
               <p class="slider__review">El Pastificio Gentile, fundado en 1876, es uno de los históricos elaboradores artesanales que han permanecido en la ciudad de Gragnano, famosa en todo el mundo por su pasta. Gentile conserva aún hoy en día, en la era de las nuevas tecnologías, los métodos artesanales, la atención a cada detalle, la selección de las mejores materias primas y el control de todas las fases ligadas a la producción. Productos de altísima calidad respetando siempre los dictámenes que en el pasado han hecho de la pasta de Gragnano la mejor del mundo: el uso de sémolas preciadas y el secado a baja temperatura.</p>
           </div>

           <figure class="slider__picture">
               <img src="images/gentile.png" class="slider__img">
           </figure>
       </section>  
       
       
       <section class="slider__body" data-id="4">
        <div class="slider__texts">
           <h2 class="slider__name" >Mozzarela</h2>
           <p class="slider__review">Somos una empresa que nunca se ha detenido desde 1978, que continúa buscando la calidad del producto y la excelencia en los estándares de producción. Contamos con décadas de experiencia, la mozzarella de leche de vaca sigue siendo el producto estrella, pero en los últimos años algunas producciones, antes de nicho, se han mejorado para satisfacer las necesidades cada vez más específicas de los clientes. </p>
       </div>

       <figure class="slider__picture">
           <img src="images/mozzarela.png" class="slider__img">
       </figure>
   </section>    
            <img src="images/r_arrow.svg" class="slider__flecha" id="next">  
        </div>
    </section>



    <section class="testimonial-section">
    <h2>Testimonios de Clientes Satisfechos</h2>

<br>
<br>


    <div class="testimonial-card">
      <p>"¡Increíble servicio! Siempre encuentro lo que necesito y la atención al cliente es excepcional."</p>
      <p class="testimonial-author"> - Alarcon</p>
    </div>

    <div class="testimonial-card">
      <p>"La calidad de los productos es inigualable. ¡Totalmente recomendado!"</p>
      <p class="testimonial-author"> - Adrian campayo</p>
    </div>
    <div class="testimonial-card">
      <p>"Calidad exepcional, muy buenos productos , totalmente recomendado !!."</p>
      <p class="testimonial-author"> - Ana Rodríguez</p>
    </div>
<h1>...</h1>

  </section>





  


<style>
.atencion {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  align-items: center; /* Centra horizontalmente */
  justify-content: center; /* Centra verticalmente */
  height: 300px; /* Ajusta la altura según sea necesario */
}

.atencion h2 {
  color: #333;
  text-align: center;
  border-bottom: 2px solid #ccc;
  padding-bottom: 10px;
}

.tatenciontext {
  margin-top: 15px;
  text-align: center; /* Centra el texto horizontalmente */
}

.tatenciontext p {
  margin: 10px 0;
  font-size: 16px;
  color: #555;
}


    </style>














   <?php require("footer.php"); ?>

</main>


    <script src="./js/slider.js"></script>
   
</body>
</html>