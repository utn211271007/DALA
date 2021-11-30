<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registrar Usuario</title>
<link href="css/bulma.css" rel="stylesheet" type="text/css"/>
<style>
html {background-color: #FF7812;}    
</style>
    
</head>
<body>
	<h1 class ="title is-1" align ="center">Registrar Usuario</h1>
        
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="servletUsuarios?action=index" >Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="servletUsuarios?action=nuevo">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="servletUsuarios?action=mostrar">Listado</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletUsuarios?action=reportar">Generar reportes</a></div>
        </div>
        
        <br>
        
	<form action="servletUsuarios?action=register" method="post">
		<table border="0" align="center" width=300>
                    
                    
		
		<td>
                    
                    
                Nombre:	<br>	
                <input class="input is-rounded is-small" type="text" placeholder="Nombre(s)" name="txt_nom" required/><br>
                Apellido Paterno <br>		
                <input class="input is-rounded is-small" type="text" placeholder="Ingrese apellido" name="txt_apeP" required/><br>
		
                Apellido Materno <br>		
                <input class="input is-rounded is-small" type="text" placeholder="Ingrese apellido"name="txt_apeM" required/> <br>	
		
                Genero: <br>
			<input type="radio" name="rb_genero"  value="Masculino" required/>
                        <label for="rb_genero">Masculino</label>
                        <br />
                        <input type="radio" name="rb_genero"  value="Femenino" />
                        <label for="rb_genero">Femenino</label>
                        <br /> 
		
                        Fecha de nacimiento: <br>
                        <input type="date" name="txt_fecha"  required/><br>
                        
                        Entidad: <br>
                        
                        <div class="field">
                        <div class="control">
                          <div class="select is-small">
                            <select name="slc_estado" class="select is-primary">
                           <c:forEach items="${estados}" var="estado">
                            <option value="${estado.clave_estado}">
                                ${estado.nombre}
                            </option>
                          </c:forEach>
                        </select> 
                          </div>
                        </div>
                      </div>
                        
                        Correo electronico: <br>		
                        <input class ="input is-rounded is-small" placeholder="Ingrese su correo" type="email" name="txt_correo" required/><br>
		
                    Escolaridad: <br>
			<label for="slc_escolaridad"></label>
                       
                        <div class="field">
                        <div class="control">
                          <div class="select  is-small">
                            <select name="slc_escolaridad" id="slc_escolaridad"  required>
                          <option value="primaria">Primaria</option>
                          <option value="secundaria">Secundaria</option>
                          <option value="bachillerato">Bachillerato</option>
                          <option value="licenciatura">Licenciatura</option>
                        </select>
                          </div>
                        </div>
                      </div>
                        
                    Contraseña: <br>		
                <input type="password" class="input is-rounded is-small" placeholder="Ingrese su contraseña" name="txt_contraseña" required/><br>
                </td>
		
                    	
		
			
		
	</table>
	<br>
	<table border="0" align="center">
		<tr>
		<td><input type="submit" class="button is-success is-rounded" value="Agregar" name="agregar"></td>	
		</tr>
        </table>
	</form>

</body>
</html>