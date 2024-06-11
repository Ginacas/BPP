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
        <h1>Noticias</h1>
    <!--    <p>Últimas noticias e imagenes del bosque .</p>  -->
        

    <table class="image-table">
            <tr>
                <td>
                    <img src="img/img1.jpg" alt="Imagen 1" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img1.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img2.jpg" alt="Imagen 2" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img2.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img3.jpg" alt="Imagen 3" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img3.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img4.jpg" alt="Imagen 4" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img4.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="img/img5.jpg" alt="Imagen 5" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img5.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img6.jpg" alt="Imagen 6" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img6.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img7.jpg" alt="Imagen 7" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img7.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
                <td>
                    <img src="img/img8.jpg" alt="Imagen 8" class="thumbnail">
                    <br>
                    <button onclick="viewImage('img/img8.jpg')" class="button is-link is-light">Ver imagen</button>
                </td>
            </tr>
        </table>

        <!-- funcion para ver las imagenes -->

        <div id="imageModal" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <p class="image is-4by3">
                    <img id="modalImage" src="" alt="Imagen grande">
                </p>
            </div>
            <button class="modal-close is-large" aria-label="close" onclick="closeModal()"></button>
        </div>
    </div>

    <!--  JavaScript  -->
    <script src="Noticias.js"></script>

    
  
    
</body>
<?php include('piepagina.php'); ?>
</html>
