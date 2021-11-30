<?php
    $usuario =$_FILES['txt_usuario'];
    $contra = $_FILES['pw_contrase'];

    if(($usuario=="QWERTY"||$usuario=="qwerty")&&($contra=="qwerty")){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Usuarios</title>
<link href="../css/bulma.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <h1 class ="title is-1" align ="center">Administrar Usuarios</h1>
        <table border="0" width="50%" align="center" class="table is-bordered">
		<tr>
                    <td  align="center" ><a class ="button is-primary is-large" href="../WEB-INF/web.xml"action="nuevo">Nuevo</a>   </td>			
		</tr>
                <tr>
                    <td  align="center" ><a class = "button is-link is-large" href="servletUsuarios" action="mostrar">Mostrar</a></td>
                </tr>
                <tr>
                    <td align="center"><a class ="button is-danger is-large" href="servletUsuarios" action="reportar">Generar reporte</a></td>
                </tr>
		
	</table>
</body>
</html>
<?php
    }else{
?>
<html style="background-color: #FF7812;">
    <head>
        <link href="../css/bulma.css" rel="stylesheet" type="text/css"/>
    </head>
    <body align="center"><br>
    <h1 class ="title is-1" align ="center">El Administrados no se a encontrado</h1>  
    <a href="inicioAdmi.html" class="button is-success is-rounded"> Intentar nuevamente </a>
    <a href="../Index.html" class="button is-success is-rounded"> INICIO </a>
    </body>
</html>
<?php
    }
?>
