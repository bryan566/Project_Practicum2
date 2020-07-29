<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Epedissur</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/Estilos-login.css">



</head>
<body>

    <header>
        <div class="contenedor">
            <h1>EPEDISSUR</h1>
            <img class="logoportada" src="img/logoapp.jpg">
        </div>
    </header>


    <div class="login_App">

      <img class="avatar" src="img/Login.1.png">

        <h1>INICIO DE SESIÓN</h1>

        <form action="index2.php" method="POST">

        <label for="username">Usuario</label>

        <input type="text" id="usuario" name="txtuser" placeholder="Digite su usuario"><br>

        <label for="contraseña">Contraseña</label>

        <input type="password" id="password" name="txtcon" placeholder="Digite su contraseña"><br>

        <input id="accederSistema" type="submit" value="Ingresar"><br>

        <a href="#">No estas registrado en el sistema?</a><br>

        <a href="Registro.php">Registrate</a>



        </form>

    </div>

</body>
</html>























