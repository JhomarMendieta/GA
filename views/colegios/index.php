<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="css/buscadorIndex.css">
    <link rel="stylesheet" href="css/escuelaIndex.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "../menu.html";
    ?>
    <div class="contenedor">
        <aside class="buscador__colegios">
            <div class="opcion__busqueda">
                <p class="nombre__busqueda"></p>
            </div>
            <div class="opcion__busqueda">
                <p class="nombre__busqueda"></p>
                <div class="contenedor__estrellas">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </aside>
        <main class="escuelas">
            <a href="#" class="contenedor__escuela">
                <picture class="escuela__img">
                    <img src="" alt="">
                </picture>
                <p class="nombre__escuela"></p>
                <p class="direccion__escuela"></p>
                <div class="puntuacion__escuela"></div>
            </a>
            <a href="#" class="contenedor__escuela">
                <picture class="escuela__img">
                    <img src="" alt="">
                </picture>
                <p class="nombre__escuela"></p>
                <p class="direccion__escuela"></p>
                <div class="puntuacion__escuela"></div>
            </a>
            <a href="#" class="contenedor__escuela">
                <picture class="escuela__img">
                    <img src="" alt="">
                </picture>
                <p class="nombre__escuela"></p>
                <p class="direccion__escuela"></p>
                <div class="puntuacion__escuela"></div>
            </a>
        </main>
    </div>



    <script src="https://kit.fontawesome.com/d5f1649c82.js" crossorigin="anonymous"></script>
</body>
</html>