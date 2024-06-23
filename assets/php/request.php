<?php
    // Incluye la conexión a la base de datos
    include("conn.php");

    // Si se da click al boton de iniciar sesión se realizar el siguiente codigo
    if (!empty($_POST['signin'])) {
        if (!empty($_POST['mail']) and !empty($_POST['contra'])){
            // Obtiene los datos enviados del formulario de inicio de sesión
            $mail = $_POST['mail'];
            $contra = $_POST['contra'];

            // Realiza una consulta para verificar que el usurio exista en la base de datos
            $query_buscar_usuario = "SELECT id, username, email FROM usuarios WHERE email = '$mail' AND password = '$contra'";
            $result_query_bu = $conn->query($query_buscar_usuario);
            if($usuario = $result_query_bu->fetch_array()){

                // Si el usuario existe nos redirige a la página principal
                header('location: ../views/colegios');
            } else {

                // Si no, nos manda una alerta
                echo "<p class='usuario_no_contrado'>El correo o la contraseña son incorrectos</p>";
            }
        } else{
            echo "<p class='campos_vacios'>Los campos estan vacios</p>";
        }
    }
    // elseif (!empty($_POST[''])) {

    // }
?>