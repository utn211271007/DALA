<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Transacción exitosa</title>
    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../../login.html");
} else {
    require '../../logica/conexion.php';
    $clave = $_POST['txt_clave'];
    $clasificacion = $_POST['slc_clasificacion'];
    $pregunta = $_POST['txt_pregunta'];
    $res1 = $_POST['txt_r1'];
    $res2 = $_POST['txt_r2'];
    $res3 = $_POST['txt_r3'];
    $res4 = $_POST['txt_r4'];
    $resCor = $_POST['txt_rc'];

    $query = "CALL ActualizarPreguntas('$clave','$pregunta','$clasificacion','$res1','$res2','$res3','$res4','$resCor')";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));

    if ($resultado == true) {
        ?>

<body>
    <h1 class="title is-1" align="center">Modificación exitosa</h1>
    <br>

    <div class="columns">
        <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                href="../index.php">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="nuevaPregunta.php">Registrar</a></div>
        <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth"
                href="listarPreguntas.php">Listado</a></div>
    </div>

    <table border="1" width="100%" class="table is-bordered">
        <tr>
            <th> Clave</th>
            <th> Pregunta</th>
            <th> Clasificación</th>
            <th>Respuesta 1</th>
            <th>Respuesta 2</th>
            <th>Respuesta 3</th>
            <th>Respuesta 4</th>
            <th>Respuesta Correcta</th>

        </tr>
        <?php
$query = "SELECT * FROM preguntas WHERE clave_pregunta='$clave'";
        $resultado2 = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
        while ($ver2 = mysqli_fetch_row($resultado2)):
        ?>
        <tr>
            <td><?php echo $ver2[0]; ?></td>
            <td><?php echo $ver2[1]; ?></td>
            <td><?php echo $ver2[2]; ?></td>
            <td><?php echo $ver2[3]; ?></td>
            <td><?php echo $ver2[4]; ?></td>
            <td><?php echo $ver2[5]; ?></td>
            <td><?php echo $ver2[6]; ?></td>
            <td><?php echo $ver2[7]; ?></td>

        </tr>
        <?php
endwhile;
        ?>
    </table>
    <div align="center">
        <a href="../cerrarSesion.php" class="button is-danger">Cerrar sesión</a>
    </div>

    <?php
} else {
        ?>
    <h1 align="center" class="title">Error al iniciar sesion</h1>
    <div align="center">
        <a href="../index.php" class="button is-rounded is-primary" align="center">Iniciar sesión</a>
    </div>
    <?php
}
}
?>
</body>

</html>