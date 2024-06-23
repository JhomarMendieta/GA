<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Contacto</title>
</head>
<body>
    <?php
        include("../menu.html");
    ?>
    <div class="sombra"></div>
    <section class="contenedor">
        <div class="texto-contacto">
            <h1>CONTACTANOS</h1>
        </div>
        <div class="contenedor_formulario">
            <div class="formulario">
                <div class="titulo">Mándanos un mensaje</div>
                <form action="procesar_contacto.php" method="post">
                    <div class="input">
                        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="input">
                        <textarea name="mensaje" placeholder="Déjenos su mensaje" required></textarea>
                    </div>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </section>
    <?php
    include "../footer.html";
    ?>
</body>
</html>
