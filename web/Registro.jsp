<%-- 
    Document   : Registro
    Created on : 16/07/2020, 10:19:52
    Author     : bryan
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Formulario_Usuarios</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link href="Css/Estilo-registro.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="paquetes">
            <form action="index.jsp" class="formulario-user">
                
                <h2 class="regis-user">REGISTRARSE</h2>
               
                <div class="registro-form"></div>
                     
                     
                     <label for="nombres" class="campos">Nombre</label>
                     <input type="text" class="botones" placeholder="Digite su nombre">
                
                     <label for="apellidos" class="campos">Apellido</label>
                     <input type="text"class="botones" placeholder="Digite su apellido">
 
                     <label for="cedulas" class="campos" >Cédula</label>
                     <input type="text" class="botones" placeholder="Digite su cedula">

                     <label for="paises" class="campos" >País</label>
                     <input type="text" class="botones" placeholder="Digite su pais">

                     <label for="ciudades" class="campos" >Ciudad</label>
                     <input type="text" class="botones" placeholder="Digite su ciudad">

                     <label for="discapacidades" class="campos">Tipo de discapacidad</label>
                     <input type="text" class="botones" placeholder="Digite su discapacidad">

                     <label for="instituciones" class="campos">Centro Educativo</label>
                     <input type="text" class="botones" placeholder="Digite su institucion">

                     <label for="correos" class="campos">Email</label>
                     <input type="text" class="botones" placeholder="Digite su correo">

                     <label for="contactos" class="campos">Número de celular</label>
                     <input type="text" class="botones" placeholder="Digite su numero de contacto">

                     <label for="usuarios" class="campos" >Nombre de Usuario</label>
                     <input type="text" class="botones" placeholder="Digite su usuario">

                     <label for="contraseñas" class="campos">Contraseña</label>
                     <input type="password" class="botones" placeholder="Digite su contraseña">
                
                     <input type="submit" class="clase-boton" value="Guardar Registro" >
                     
                     <a href="index.jsp">Iniciar sesión</a>
                
                 
            </form>
             
        </div>
             
                
                 

            
            
            
           
        
            
            
       
        
        
        
        
     
        
        
        
        
        
        
        
        
    </body>
</html>
