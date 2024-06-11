<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOSQUE PUYANGO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('menu.php'); ?>

    <div class="content"> 
    <div class="slider">
    <div class="slides">
        <?php
        $images = glob("slider/*.jpg"); // Obtener todas las imágenes solo en formato JPG de la carpeta img
        foreach ($images as $image) {
            echo '<div class="slide"><img src="' . $image . '" alt="Imagen"></div>';
        }
        ?>
    </div>
    </div>

     
    <h3>PETRINO GIGANTE</h3>
        
        <div class="two-columns">
            <div class="column-left">
            <img src="img/petrino.jpg" alt="Imagen Lateral"> 
            </div>
            <div class="column-right">
               
                <br>
                <h3 class="is-family-sans-serif"> El atractivo turístico más visitado del Cantón Las Lajas.</h3>

               <p class="is-family-primary">  <strong>Un popular destino turístico.</strong></p>
<br
<p class="has-text-justified is-family-primary">  Únete a nosotros para explorar este punto de encuentro entre el pasado y el presente, donde las culturas se entrelazan en una experiencia inolvidable. </p>
<p>¡Bienvenidos al Bosque Petrificado de Puyango!</p>
            </div>
            

        </div>
        <br>
       
        <!-- Celular -->
        <?php include('phone.php'); ?>
        
        </div>
        
        
        <?php include('recomendaciones.php'); ?>

    
<!-- script de los slider -->

    <script src="slider.js"></script>
    <script src="phone-slider.js"></script>

</body>
<?php include('piepagina.php'); ?>

</html>
