<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: login.html");
} else {
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Admin Usuarios</title>
    <link href="../Estilos/bulma.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <section class="hero is-fullheight is-medium is-primary is-bold">
        <br>
        <div align="center">
            <h1 class="title is-1" align="center">Administrar Usuarios</h1>
        </div>
        <div align="center"></div>
        <table width="80%" border="0" align="center" class="table">
            <tr class="is-selected">
                <td width="35%" align="center">
                    <h1 class="title is-2 ">Usuarios</h1>
                </td>
                <td width="33%" align="center">
                    <h1 class="title is-2">Preguntas</h1>
                </td>
                <!--<td width="32%"  align="center" ><h1 class="title is-2">Niveles</h1></td>-->
            </tr>
            <tr>
                <td align="center"><a class="button is-primary is-large is-fullwidth" href="nuevoUsuario.php">Nuevo</a>
                </td>
                <td align="center"><a class="button is-primary is-large is-fullwidth"
                        href="./ctrlPreguntas/nuevaPregunta.php">Nuevo</a></td>
                <!--<td  align="center" ><a class ="button is-primary is-large is-fullwidth" href="servletNiveles?action=nuevo">Nuevo</a></td>-->
            </tr>
            <tr>
                <td align="center"><a class="button is-link is-large is-fullwidth" href="listarUsuarios.php">Mostrar</a>
                </td>
                <td align="center"><a class="button is-link is-large is-fullwidth"
                        href="./ctrlPreguntas/listarPreguntas.php">Mostrar preguntas</a></td>
                <!-- <td  align="center" ><a class = "button is-link is-large is-fullwidth" href="servletNiveles?action=mostrar">Mostrar</a></td>-->
            </tr>
            <!--<tr>
                  <td align="center"><a class ="button is-danger is-large is-fullwidth" href="servletAdministrador?action=reportar">Generar reporte</a></td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><a class ="button is-info is-large is-fullwidth" href="servletAdministrador?action=certificar">Generar certificado</a></td>
                  <td align="center">&nbsp;</td>
                    <td align="center">&nbsp;</td>
                </tr>-->


        </table>
        <div align="center"><a href="../VistaAdmin/cerrarSesion.php" class="button is-danger is-rounded">Cerrar
                sesion</a></div>
        <br><br><br><br><br><br>
    </section>
</body>

</html>
<?php
}
?>