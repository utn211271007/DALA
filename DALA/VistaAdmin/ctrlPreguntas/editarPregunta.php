<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../login.html");
} else {
    $clave = $_GET['clave'];
    require '../../logica/conexion.php';
    $query = "SELECT * FROM preguntas WHERE clave_pregunta='$_GET[clave]'";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Actualizar usuario</title>
    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    html {
        background-color: #C1BBB3;
        font-size: 20px;
    }

    body {
        font-size: 100%;
    }
    </style>
</head>

<body>
    <br>
    <div class="columns">
        <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                href="../index.php">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="nuevaPregunta.php">Registrar</a></div>
        <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth"
                href="listarPreguntas.php">Listado</a></div>
        <!--<div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletAdministrador?action=reportar">Generar reportes</a></div>-->
    </div>
    <h1 class="title is-1" align="center">Actualizar usuario</h1>
    <?php
if ($resultado->num_rows > 0) {
        // output data of each row
        while ($ver = $resultado->fetch_assoc()):
        ?>
    <form action="accionExitosa.php" method="post">
        <table align="center">
            <input type="hidden" name="txt_clave" value='<?php echo $_GET["clave"]; ?>'>
            <tr>
                <td width="157"><label>Pregunta</label></td>
                <td width="274"><input class="input is-rounded is-small" type="text" name="txt_pregunta"
                        value='<?php echo $ver["pregunta"] ?>'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><label>Clasificación</label></td>
                <td><label for="slc_clasificacion"></label>
                    <select name="slc_clasificacion" id="slc_clasificacion" class="input is-rounded is-small">
                        <option value="Prueba"><?php echo $ver["clasificacion"] ?></option>
                    </select>
            </tr>
            <tr>
                <td><label>Respuesta 1</label></td>
                <td><input class="input is-rounded is-small" type="text" name="txt_r1"
                        value='<?php echo $ver["respuesta1"] ?>' required></td>
            </tr>
            <tr>
                <td><label>Respuesta 2</label></td>
                <td><input class="input is-rounded is-small" type="text" name="txt_r2"
                        value='<?php echo $ver["respuesta2"] ?>' required></td>

            </tr>
            <tr>
                <td><label>Respuesta 3</label></td>
                <td><input class="input is-rounded is-small" type="text" name="txt_r3"
                        value='<?php echo $ver["respuesta3"] ?>' required></td>

            </tr>
            <tr>
                <td><label>Respuesta 4</label></td>
                <td><input class=" input is-rounded is-small" type="text" name="txt_r4"
                        value='<?php echo $ver["respuesta4"] ?>' required></td>

            </tr>
            <tr>
                <td><label>Respuesta correcta</label></td>
                <td>
                    <select class="input is-rounded is-small" autocomplete="off" name="txt_rc">
                        <option disabled>Selecciona respuesta correcta</option>
                        <option value="1">Respuesta 1</option>
                        <option value="2">Respuesta 2</option>
                        <option value="3">Respuesta 3</option>
                        <option value="4">Respuesta 4</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td height="67" colspan="2">
                    <div align="center">
                        <br>
                        <input align="center" class="button is-success is-rounded" type="submit" name="registrar"
                            value="Guardar" />
                        <a href="listarPreguntas.php" class="button is-warning is-rounded">Cancelar</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <?php
endwhile;
    }
    ?>
    <br>
    <div align="center">
        <a href="../cerrarSesion.php" class="button is-danger is-rounded">Cerrar sesion</a>
    </div>
</body>

</html>
<?php }
?>