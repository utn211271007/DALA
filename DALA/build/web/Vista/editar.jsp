<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Actualizar usuario</title>
<link href="css/bulma.css" rel="stylesheet" type="text/css"/>
<style>
html {background-color: #FF7812;}    
</style>
    
</head>
<body>
<h1 class ="title is-1" align ="center">Actualizar usuario</h1>

<div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="servletUsuarios?action=index" >Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="servletUsuarios?action=nuevo">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="servletUsuarios?action=mostrar">Listado</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletUsuarios?action=reportar">Generar reportes</a></div>
        </div>

	<form action="servletUsuarios?action=editar" method="post" >
		<table align="center">
			<input type="hidden" name="txt_clave" value='<c:out value="${usuario.clave_usuario}" ></c:out>' >
			<tr>
				<td width="157"><label>Nombre</label></td>
				<td width="274"><input class="input is-rounded is-small" type="text" name="txt_nom" value='<c:out value="${usuario.nombre}"></c:out>' ></td>
			</tr>
			<tr>
				<td><label>Apellido Paterno</label></td>
				<td><input class="input is-rounded is-small" type="text" name="txt_apeP" value='<c:out value="${usuario.apellido_pat}" ></c:out>' required></td>
			</tr>
			<tr>
				<td><label>Apellido Materno</label></td>
				<td><input class="input is-rounded is-small" type="text" name="txt_apeM" value='<c:out value="${usuario.apellido_mat}" ></c:out>' required></td>
			</tr>
			<tr>
				<td>Genero</a></td>	
                                <td><input type="radio" name="rb_genero"  value="Masculino" required/>
                                <label for="rb_genero">Masculino</label>
                                <br />
                                <input type="radio" name="rb_genero"  value="Femenino" />
                                <label for="rb_genero">Femenino</label>
                                <br /></td>
			</tr>
			
			<tr>
				<td><label>Fecha de nacimiento</label></td>
				<td><input type="date" name="txt_fecha" value='<c:out value="${usuario.fecha_nac }" ></c:out>' required></td>
			</tr>
                        <tr>
				<td><label>Correo electronico</label></td>
				<td><input class="input is-rounded is-small" type="email" name="txt_correo" value='<c:out value="${usuario.correo_electronico }" ></c:out>' required></td>
			</tr>
                        <tr>
				<td><label>Escolaridad </label></td> 
                                
				<td><label for="slc_escolaridad"></label>
                                    <select name="slc_escolaridad" id="slc_escolaridad"  >
                                        <option value="primaria" > Primario</option>
                                      <option value="secundaria" > Secundaria</option>
                                      <option value="bachillerato" >Bachillerato</option>
                                      <option value="licenciatura" >Licenciatura</option>
                                    </select>
                                    
                                Actual : ${usuario.escolaridad }    
                                    
			</tr>
                        
                        
                        
                        <tr>
				<td><label>Contraseña</label></td>
                                <td><input type="password" name="txt_contraseña" value='<c:out value="${usuario.contraseña }" ></c:out>' required><br>
                                </td>
			</tr>
                        <tr>
                            <td><label>Entidad</label></td>
                            <td><select name="slc_estado" class="select is-small is-primary">
                           <c:forEach items="${estados}" var="estado">
                            <option value="${estado.clave_estado}">
                                ${estado.nombre}
                            </option>
                          </c:forEach>
                        </select> </td>
                        </tr>
                        
                        <tr>
                            <td height="67" colspan="2"><div align="center">
                                    <br>
                                    <input  align="center" class="button is-primary is-rounded" type="submit" name="registrar" value="Guardar" />
                            </div></td>
                        </tr>
		</table>
	</form>

</body>
</html>