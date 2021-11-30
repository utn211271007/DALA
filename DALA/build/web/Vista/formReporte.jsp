<%-- 
    Document   : formReporte
    Created on : 8/07/2019, 02:17:11 PM
    Author     : Lap
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title >Generador de reportes</title>
        <link href="css/bulma.css" rel="stylesheet" type="text/css"/>
        <link href="css/bulma.min.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body>
        
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="servletUsuarios?action=index" >Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="servletUsuarios?action=nuevo">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="servletUsuarios?action=mostrar">Listado</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletUsuarios?action=reportar">Generar reportes</a></div>
        </div>
        
        <br>
        
        <div align="center">
            <form id="form1" name="form1" method="post" action="servletUsuarios?action=generarReporte">
                <p><h1 class ="title">Parametro 1:</h1> 
              <table width="200" border="0">
                  <tr>
                    <td><input class="input is-rounded" type="text" name="txt_par2" placeholder="Inserte clave de usuario" id="txt_par1" required/></td>
                  </tr>
                </table>
            <p>
                <br><input class ="button is-success is-rounded" type="submit" name="button" id="button" value="Generar" />
            </p>
          </form>
           
        </div>
        
        <div align="center">
            <form id="form2" name="form2" method="post" action="servletUsuarios?action=generarReporte">
                <p>
              <label for="txt_par1"></label>
          <input type="hidden" name="txt_par1" value ="0" id="txt_par2"/>
            </p>
            <p>
                <br><input class ="button is-success is-rounded" type="submit" name="button" id="button1" value="Generar todos" />
            </p>
          </form>
            <div align="center"><br><a href="servletUsuarios?action=index" class="button is-link is-rounded" >Ir al menú</a></div>
           
        </div>
    </body>
</html>
