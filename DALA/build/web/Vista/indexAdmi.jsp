<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Usuarios</title>
<link href="css/bulma.css" rel="stylesheet" type="text/css"/>

</head>
<body>

    <h1 class ="title is-1" align ="center">Administrar Usuarios</h1>
        <table border="0" width="50%" align="center" class="table is-bordered">
		<tr>
                    <td  align="center" ><a class ="button is-primary is-large" href="servletUsuarios?action=nuevo">Nuevo</a>   </td>			
		</tr>
                <tr>
                    <td  align="center" ><a class = "button is-link is-large" href="servletUsuarios?action=mostrar">Mostrar</a></td>
                </tr>
                <tr>
                    <td align="center"><a class ="button is-danger is-large" href="servletUsuarios?action=reportar">Generar reporte</a></td>
                </tr>
		
	</table>
</body>
</html>