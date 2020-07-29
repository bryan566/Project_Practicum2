



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

   <link rel="stylesheet" href="css/Estilos-Registro.css">




</head>
<body>


    <div class="paquetes">

       <form action="guardar.php" method="POST" class="formulario-user">

          <h2 class="regis-user">FORMULARIO DE REGISTRO</h2>

          <div class="registro-form"></div>

          <label class="campos">Nombres</label>
          <input type="text" id="nombres" name="nombres" class="botones" placeholder="Digite su nombre" required=""><br>

          <label class="campos">Apellidos</label>
          <input type="text" id="apellidos" name="apellidos" class="botones" placeholder="Digite su apellido" required="" ><br>

          <label class="campos">Cedula</label>
          <input type="text" id="cedula" name="cedula" class="botones" placeholder="Digite su numero de cédula" required=""><br>

          <label class="campos">Pais</label>
          <input type="text" id="pais"  name="pais" class="botones" placeholder="Digite su pais" required=""><br>

          <label class="campos">Ciudad</label>
          <input type="text" id="ciudad" name="ciudad" class="botones" placeholder="Digite su ciudad" required="" ><br>

          <label class="campos">Discapacidad</label>
          <input type="text" id="discapacidad" name="discapacidad" class="botones" placeholder="Digite su discapacidad" required="" ><br>

          <label class="campos">Institucion</label>
          <input type="text" id="institucion" name="institucion" class="botones" placeholder="Digite su institución" required=""><br>

          <label class="campos">Email</label>
          <input type="text" id="email" name="email" class="botones" placeholder="Digite su correo electrónico" required="" ><br>

          <label class="campos">Celular</label>
          <input type="text" id="celular" name="celular" class="botones" placeholder="Digite su numero de celular" required="" ><br>

          <label class="campos">Usuario</label>
          <input type="text" id="usuario" name="usuario" class="botones" placeholder="Digite su usuario" required="" ><br>

          <label class="campos">Password</label>
          <input type="password" id="password" name="password" class="botones" placeholder="Digite su contraseña o password" required=""><br>

          <input type="submit" id="enviarRegistro" class="clase-boton" value="Registrar"><br>

          <a href="index.php">Ingresar</a>






       </form>

    </div>







</body>
</html>


































