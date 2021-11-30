<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../../login.html");
} else {
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Nuevo usuario</title>
    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />
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
                    href="../index.php">Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium  is-info is-rounded is-fullwidth"
                    href="listarPreguntas.php">Listado</a></div>
            <!-- <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="servletAdministrador?action=reportar">Generar reportes</a></div>-->
        </div>
        <h1 class="title is-1" align="center">Registrar Pregunta</h1>
        <br>
        <form action="registroPregunta.php" method="post">
            <table border="0" align="center" width=300>

                <td>

                    Pregunta<br>
                    <input class="input is-rounded is-small" autocomplete="off" type="text" placeholder="Pregunta"
                        name="txt_preg" required /><br>
                    Clasificacion<br>
                    <select class="input is-rounded is-small" name="txt_clas">
                        <option disabled>Selecciona clasificación de pregunta</option>
                        <option value="Prueba">Prueba</option>
                        <option value="Ejercicio">Ejercicio</option>
                    </select>
                    Respuesta 1<br>
                    <input class="input is-rounded is-small" autocomplete="off" type="text"
                        placeholder="Primera respuesta" name="txt_resp1" required /> <br>
                    Respuesta 2<br>
                    <input class="input is-rounded is-small" autocomplete="off" type="text"
                        placeholder="Segunda respuesta" name="txt_resp2" required /> <br>
                    Respuesta 3<br>
                    <input class="input is-rounded is-small" autocomplete="off" type="text"
                        placeholder="Tercera respuesta" name="txt_resp3" required /> <br>
                    Respuesta 4<br>
                    <input class="input is-rounded is-small" autocomplete="off" type="text"
                        placeholder="Cuarta respuesta" name="txt_resp4" required /> <br>
                    Respuesta correcta<br>
                    <select class="input is-rounded is-small" autocomplete="off" name="txt_respC">
                        <option disabled>Selecciona respuesta correcta</option>
                        <option value="1">Respuesta 1</option>
                        <option value="2">Respuesta 2</option>
                        <option value="3">Respuesta 3</option>
                        <option value="4">Respuesta 4</option>
                    </select>
            </table>
            <br>
            <table border="0" align="center">
                <tr>
                    <td><input type="submit" class="button is-success is-rounded" value="Agregar" name="agregar">
                        <a href="../index.php" class="button is-warning is-rounded">Cancelar</a>
                    </td>
                </tr>
            </table>
            <br>
        </form>
        <br>
        <div align="center">
            <a href="../cerrarSesion.php" class="button is-danger is-rounded">Cerrar sesion</a>
        </div>
        <br>
        <br>
    </section>

</body>

</html>
<?php
}
?>