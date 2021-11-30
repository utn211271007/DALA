<%-- 
    Document   : accionExitosa
    Created on : 6/07/2019, 12:55:32 PM
    Author     : Rafa
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Transacción exitosa</title>
        <link href="css/bulma.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1 class ="title is-1" align ="center">Registro o modificación exitosa</h1>
        <br>
        
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="servletUsuarios?action=index" >Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="servletUsuarios?action=nuevo">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="servletUsuarios?action=mostrar">Listado</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletUsuarios?action=reportar">Generar reportes</a></div>
        </div>
        
        <table border="1" width="100%" class="table is-bordered">
		<tr>
		 <th> Clave</th>
		 <th> Nombre</th>
		 <th> Apellido Paterno</th>
		 <th>Apellido Materno</th>
                 <th>Genero</th>
		 <th>Fecha de nacimiento</th>
                 <th>Correo electronico</th>
                 <th>Escolaridad</th>
                 <th>Contraseña</th>
		 
		</tr>
		
			<tr>
				<td>${usuario.getClave_usuario()}</td>
				<td>${usuario.nombre}</td>
				<td>${usuario.apellido_pat}</td>
				<td>${usuario.apellido_mat}</td>
				<td>${usuario.genero}</td>
				<td>${usuario.fecha_nac}</td>
                                <td>${usuario.correo_electronico}</td>
                                <td>${usuario.escolaridad}</td>
                                <td>${usuario.contraseña}</td>
				
								
			</tr>
		
	</table>
                        
			
		
    </body>
</html>
