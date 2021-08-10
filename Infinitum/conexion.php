<?php
    $con = new mysqli("localhost", "root", "", "EvilTwin");

    if(!$con) {
        die("ERROR: No se pudo establecer una conexión con la base de datos: " + $con->connect_error);
    }

    echo "Conectado exitosamente!";

    mysqli_close($con);
?>