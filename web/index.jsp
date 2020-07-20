<%-- 
    Document   : index
    Created on : 03/07/2020, 8:30:23
    Author     : bryan
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EPEDISSUR</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link href="Css/Estilo_app.css" rel="stylesheet" type="text/css"/>
        <link href="Css/Estilo_indice1.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
       
        <header>
            <div class="contenedor">
                <a class="logo">EPEDISSUR</a>           
            </div> 
        </header>
       
        <div class="login_App">
            <img class="Avatar"src="Imagenes/Login.1.png" alt="logo de mi app">   
            <h1>INICIAR SESIÓN</h1>
            <form action="Ingreso_al_sistema.jsp">
              <label for="username">Usuario</label>
              <input type="text" name="txtuser" placeholder="Digite su usuario"> 
              <label for="contraseña">Contraseña</label>
              <input type="password" name="txtcontraseña" placeholder="Digite su contraseña"> 
              
              <input type="submit" value="Ingresar">
              
              <a href="#">No estás registrado en el sistema?</a><br>
              <a href="Registro.jsp">Registrate</a>
            </form>
        </div>
        
    </body>
</html>
