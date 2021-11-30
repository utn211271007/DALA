<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: login.html");
} else {
    $clave = $_GET['clave'];
    require '../logica/conexion.php';
    $query = "SELECT * FROM usuarios WHERE clave_usuario='$_GET[clave]'";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Actualizar usuario</title>
    <link href="../Estilos/bulma.css" rel="stylesheet" type="text/css" />

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
                href="index.php">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="nuevoUsuario.php">Registrar</a></div>
        <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth"
                href="listarUsuarios.php">Listado</a></div>
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
                <td width="157"><label>Nombre</label></td>
                <td width="274"><input class="input is-rounded is-small" type="text" name="txt_nom"
                        value='<?php echo $ver["nombre"] ?>'></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><label>Apellido Paterno</label></td>
                <td><input class="input is-rounded is-small" type="text" name="txt_apeP"
                        value='<?php echo $ver["apellido_paterno"] ?>' required></td>
            </tr>
            <tr>
                <td><label>Apellido Materno</label></td>
                <td><input class="input is-rounded is-small" type="text" name="txt_apeM"
                        value='<?php echo $ver["apellido_materno"] ?>' required></td>

            </tr>
            <tr>

                <td>Genero</a></td>

                <?php
$genero = $ver["genero"];
        if ($genero == 'Masculino') {
            ?>
                <td><input type="radio" name="rb_genero" checked value="Masculino" required />
                    <label for="rb_genero">Masculino</label>
                    <br />
                    <input type="radio" name="rb_genero" value="Femenino" />
                    <label for="rb_genero">Femenino</label>
                    <?php
} else {
            ?>
                <td><input type="radio" name="rb_genero" value="Masculino" required />
                    <label for="rb_genero">Masculino</label>
                    <br />
                    <input type="radio" name="rb_genero" checked value="Femenino" />
                    <label for="rb_genero">Femenino</label>
                    <?php
}
        ?>
            </tr>

            <tr>
                <td><label>Fecha de nacimiento</label></td>
                <td><input type="date" name="txt_fecha" value='<?php echo $ver["fecha_nacimiento"] ?>' required
                        class="input is-rounded is-small">
                </td>
            </tr>
            <tr>
                <td><label>Correo electronico</label></td>
                <td><input class="input is-rounded is-small" type="email" name="txt_correo"
                        value='<?php echo $ver["correo_electronico"] ?>' required></td>
            </tr>
            <tr>
                <td><label>Escolaridad </label></td>

                <td><label for="slc_escolaridad"></label>
                    <select name="slc_escolaridad" id="slc_escolaridad" class="input is-rounded is-small">
                        <option value="Primaria"> Primaria</option>
                        <!--<option value="secundaria" > Secundaria</option>
                                        <option value="bachillerato" >Bachillerato</option>
                                        <option value="licenciatura" >Licenciatura</option>-->
                    </select>

                    Actual : <?php echo $ver["escolaridad"] ?>

            </tr>



            <tr>
                <td><label>Contraseña</label></td>
                <td><input type="password" name="txt_contraseña" value='<?php echo $ver["contrasenia"] ?>' required
                        class="input is-rounded is-small"><br></td>
            </tr>


            <tr>
                <td height="67" colspan="2">
                    <div align="center">
                        <br>
                        <input align="center" class="button is-success is-rounded" type="submit" name="registrar"
                            value="Guardar" />
                        <a href="listarUsuarios.php" class="button is-warning is-rounded">Cancelar</a>
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
        <a href="cerrarSesion.php" class="button is-danger is-rounded">Cerrar sesion</a>
    </div>
</body>

</html>
<?php }
?>