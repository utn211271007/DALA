<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../../login.html");
} else {
    require '../../logica/conexion.php';
    $clavePre = $_POST['txt_clave'];
    $query = "SELECT * FROM preguntas WHERE clave_pregunta='$clavePre'";
    $resultado = mysqli_query($conexion, $query) or die("Error :( " . mysqli_error($conexion));
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Administrar Usuarios</title>

    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <h1 class="title is-1" align="center">Lista Preguntas</h1>
    <div class="columns">
        <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                href="../index.php">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="nuevaPregunta.php">Registrar</a></div>
        <!-- <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletAdministrador?action=reportar">Generar reportes</a></div>-->
    </div>

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
                                <input class="input is-rounded is-small" type="text" placeholder="Clave de usuario"
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
            <table align="center" width=100 border="0">
                <tr>
                    <p align="center">
                        <td><input type="submit" class="button is-success is-rounded" name="button" id="button"
                                value="Mostrar todos"></td>
                </tr>
            </table>
            <br>
            <br>
            <div class="table">
                <table border="1" width="100%" class="table">
                    <thead>
                        <tr>
                            <th> Clave</th>
                            <th> Pregunta</th>
                            <th> Clasificación</th>
                            <th>Respuesta 1</th>
                            <th>Respuesta 2</th>
                            <th>Respuesta 3</th>
                            <th>Respuesta 4</th>
                            <th>Respuesta correcta</th>
                            <th colspan=2>ACCIONES</th>
                        </tr>
                    </thead>
                    <?php
if ($resultado->num_rows > 0) {
        // output data of each row
        while ($ver = $resultado->fetch_assoc()):
        ?>
                    <thead>
                        <tr>
                            <td>
                                <?php echo $ver["clave_pregunta"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["pregunta"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["clasificacion"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["respuesta1"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["respuesta2"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["respuesta3"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["respuesta4"]; ?>
                            </td>
                            <td>
                                <?php echo $ver["respuesta_correcta"]; ?>
                            </td>
                            <td><a class="button is-info is-rounded"
                                    href="editarPregunta.php?clave=<?php echo $ver['clave_pregunta']; ?>">Editar</a>
                            </td>
                            <td><a class="button is-danger is-rounded"
                                    href="eliminarPregunta.php?clave=<?php echo $ver['clave_pregunta']; ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php
endwhile;
    } else {
        $mensaje = "Esa clave no está en uso";
        echo "<script>";
        echo "alert('$mensaje');";
        echo "window.location = 'listarPreguntas.php';";
        echo "</script>";
    }
    ?>
                    </thead>
                </table>
            </div>
            <div align="center">
                <a href="../cerrarSesion.php" class="button is-danger">Cerrar sesion</a>
            </div>
</body>

</html>
<?php
}
?>