<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bdd = "rutaeducativa";

    $conn = new mysqli($host, $user, $pass, $bdd);

    if(!$conn){
        echo "No hay nada";
    }
?>