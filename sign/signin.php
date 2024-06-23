<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="alert.css">
    <title>Document</title>
</head>
<body>
    <div class="sombra"></div>
    <div class="contenedor">
        <div class="contenedor_formulario">
            <picture class="imagen_form">
                <img src="../img/form.png" alt="">
            </picture>
            <form action="signin.php" method="post" class="formulario">
                <p class="titulo">Iniciar sesión</p>
                <div class="input mail">
                    <input type="email" name="mail" placeholder="Ingrese su correo">
                </div>
                <div class="input contra">
                    <input type="password" name="contra" placeholder="Ingrese su contraseña">
                </div>
                <?php
                    include("../assets/php/request.php");
                ?>
                <p class="cuenta">¿Aún no tenes cuenta? <a href="signup.html">Registrate</a></p>
                <input type="submit" value="Iniciar sesión" name="signin">
            </form>
        </div>
    </div>
    
</body>
</html>