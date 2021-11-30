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
    <title>Nuevo usuario</title>
    <link href="../Estilos/bulma.css" rel="stylesheet" type="text/css" />
    <style>
    html {
        background-color: #C1BBB3;
        font-size: 20px;
    }

    h1 {
        top: -10px;
    }

    body {
        font-size: 80%;
    }
    </style>
</head>

<body>
    <section class="hero is-fullheight is-medium is-primary is-bold" style="margin-top: -70px;">
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                    href="index.php">Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium  is-info is-rounded is-fullwidth"
                    href="listarUsuarios.php">Listado</a></div>
            <!-- <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletAdministrador?action=reportar">Generar reportes</a></div>-->
        </div>
        <h1 class="title is-1" align="center">Registrar Usuario</h1>
        <br>
        <form action="registroUsuario.php" method="post">
            <table border="0" align="center" width=300>
                <td>
                    Nombre: <br>
                    <input class="input is-rounded is-small" type="text" placeholder="Nombre(s)" name="txt_nom"
                        required /><br>
                    Apellido Paterno <br>
                    <input class="input is-rounded is-small" type="text" placeholder="Ingrese apellido" name="txt_apeP"
                        required /><br>

                    Apellido Materno <br>
                    <input class="input is-rounded is-small" type="text" placeholder="Ingrese apellido" name="txt_apeM"
                        required /> <br>

                    Genero: <br>
                    <input type="radio" name="rb_genero" value="Masculino" required />
                    <label for="rb_genero">Masculino</label>
                    <br />
                    <input type="radio" name="rb_genero" value="Femenino" />
                    <label for="rb_genero">Femenino</label>
                    <br />

                    Fecha de nacimiento: <br>
                    <input type="date" name="txt_fecha" min="2000-01-01" max="2015-13-13" required /><br>

                    Correo electronico: <br>
                    <input class="input is-rounded is-small" placeholder="Ingrese su correo" type="email"
                        name="txt_correo" required /><br>

                    Escolaridad: <br>
                    <label for="slc_escolaridad"></label>

                    <div class="field">
                        <div class="control">
                            <div class="select  is-small">
                                <select name="slc_escolaridad" id="slc_escolaridad" required>
                                    <option value="Primaria">Primaria</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    Contraseña: <br>
                    <input type="password" class="input is-rounded is-small" placeholder="Ingrese su contraseña"
                        name="txt_contraseña" required /><br>
                </td>

            </table>
            <br>
            <table border="0" align="center">
                <tr>

                    <td><input type="submit" class="button is-success is-rounded" value="Agregar" name="agregar">
                        <a href="index.php" class="button is-warning is-rounded">Cancelar</a>
                    </td>

                </tr>
            </table>
        </form>
        <br>
        <div align="center">

            <a href="../VistaAdmin/cerrarSesion.php" class="button is-danger is-rounded">Cerrar sesion</a>
        </div>
        <br>
        <br>
    </section>

</body>

</html>
<?php
}
?>