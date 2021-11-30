<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../DALA/VistaAdmin/login.html");
} else {
    require '../../logica/conexion.php';
    $query = "CALL SeleccionarPreguntas";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));

    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Administrar Usuarios</title>

    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />
    <script>
    var aux = false;
    var claveAux = "";
    </script>
</head>

<body>

    <div class="columns" style="margin-top: 20px;">
        <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                href="../index.php">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="nuevaPregunta.php">Registrar</a></div>
        <!-- <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletAdministrador?action=reportar">Generar reportes</a></div>-->
    </div>
    <h1 class="title is-1" align="center">Lista Preguntas</h1>
    <div class="table">

        <form name="form1" method="post" action="buscarPregunta.php">
            <div align="center">
                <table align="center" width=447 border="0">
                    <tr>
                        <td width="145">
                            <div align="right">Ingrese clave:</div>
                        </td>
                        <td width="144">
                            <div align="center">
                                <input class="input is-rounded is-small" type="text" placeholder="Clave de pregunta"
                                    name="txt_clave" id="textfield" required>
                            </div>
                        </td>
                        <td width="144">
                            <div align="left">
                                <input type="submit" class="button is-success is-rounded" name="button" id="button"
                                    value="Buscar">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>

        <form name="form2" method="post" action="listarPreguntas.php">

            <br>
            <br>
            <div class="table">
                <table border="1" width="100%" class="table">
                    <thead>
                        <tr>
                            <th> Clave</th>
                            <th> Pregunta</th>
                            <th>Respuesta 1</th>
                            <th>Respuesta 2</th>
                            <th>Respuesta 3</th>
                            <th>Respuesta 4</th>
                            <th>Respuesta Correcta</th>
                            <th colspan=2>ACCIONES</th>
                        </tr>
                    </thead>
                    <?php
while ($ver = mysqli_fetch_row($resultado)):
    ?>
                    <thead>
                        <tr>
                            <td>
                                <?php echo $ver[0]; ?>
                            </td>
                            <td>
                                <?php echo $ver[1]; ?>
                            </td>
                            <td>
                                <?php echo $ver[2]; ?>
                            </td>
                            <td>
                                <?php echo $ver[3]; ?>
                            </td>
                            <td>
                                <?php echo $ver[4]; ?>
                            </td>
                            <td>
                                <?php echo $ver[5]; ?>
                            </td>
                            <td>
                                <?php echo $ver[6]; ?>
                            </td>

                            <td><a class="button is-info is-rounded" href="editarPregunta.php?clave=<?php echo $ver[0];
    ?>">Editar</a>
                            </td>
                            <td><a class="button is-danger is-rounded" value="a" onclick="if (confirm('Esta pregunta será eliminada. ¿Desea continuar?')) {
                            window.location.href='eliminarPregunta.php?clave=<?php echo $ver[0]; ?>';
                } else {
                    alert('Usted canceló la acción eliminar');
                }
            ">Eliminar</a>
                            </td>
                        </tr>
                        <?php
endwhile;
    ?>
                    </thead>
                </table>
            </div>
            <div align="center">
                <a href="../cerrarSesion.php" class="button is-danger">Cerrar sesion</a>
            </div>
            <script>
            if (aux == true) {
                confirmar(<?php $claveAux?>);
            } else {

            }
            </script>
</body>

</html>
<?php
}
?>