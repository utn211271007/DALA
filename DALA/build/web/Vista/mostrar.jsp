<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
  <%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Administrar Usuarios</title>

<link href="css/bulma.css" rel="stylesheet" type="text/css"/>

</head>
<body>
	<h1 class ="title is-1" align ="center">Lista  Usuarios</h1>
        
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="servletUsuarios?action=index" >Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="servletUsuarios?action=nuevo">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="servletUsuarios?action=mostrar">Listado</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletUsuarios?action=reportar">Generar reportes</a></div>
        </div>
        
<div class ="table">
    
	<form name="form1" method="post" action="servletUsuarios?action=buscar">
	  <div align="center">
	    <table align ="center" width=447 border="0">
	      <tr>
	        <td width="145"><div align="right">Ingrese clave:</div></td>
	        <td width="144"><div align="center">
	          <input class="input is-rounded is-small" type="text" placeholder="Clave de usuario" name="txt_clave" id="textfield">
            </div></td>
	        <td width="144"><div align="left">
	          <input type="submit" class="button is-success is-rounded" name="button" id="button" value="Buscar">
            </div></td>
          </tr>
        </table>
      </div>
    </form>
    <form name="form2" method="post" action="servletUsuarios?action=mostrar">
        <table align ="center" width=100 border="0">
	    <tr>
                <p align="center">
        <td><input  type="submit" class="button is-success is-rounded" name="button" id="button" value="Mostrar todos"></td>
        </tr>
      </table>
        <br>
        <br>
        <div class = "table">
	<table border="1" width="100%" class ="table">
            <thead>
                <tr >
		 <th> Clave</th>
		 <th> Nombre</th>
		 <th> Apellido Paterno</th>
		 <th>Apellido Materno</th>
                 <th>Genero</th>
		 <th>Fecha de nacimiento</th>
                 <th>Correo electronico</th>
                 <th>Escolaridad</th>
                 <th>Contraseña</th>
		 <th colspan=2>ACCIONES</th>
		</tr>
            </thead>
		<c:forEach var="usuario" items="${lista}">
                    <thead>
			<tr>
				<td><c:out value="${usuario.getClave_usuario()}"/></td>
				<td><c:out value="${usuario.nombre}"/></td>
				<td><c:out value="${usuario.apellido_pat}"/></td>
				<td><c:out value="${usuario.apellido_mat}"/></td>
				<td><c:out value="${usuario.genero}"/></td>
				<td><c:out value="${usuario.fecha_nac}"/></td>
                                <td><c:out value="${usuario.correo_electronico}"/></td>
                                <td><c:out value="${usuario.escolaridad}"/></td>
                                <td><c:out value="${usuario.contraseña}"/></td>
				<td><a class ="button is-info is-rounded" href="servletUsuarios?action=showedit&id=<c:out value="${usuario.clave_usuario}" />">Editar</a></td>
				<td><a class ="button is-danger is-rounded" href="servletUsuarios?action=eliminar&id=<c:out value="${usuario.clave_usuario}"/>">Eliminar</a> </td>				
			</tr>
		</c:forEach>
                    </thead>        
	</table>
        </div>
        
        
	
</body>
</html>