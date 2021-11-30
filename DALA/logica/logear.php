<?php

require 'conexion.php';
session_start();
$correo = $_POST['txt_correo'];
$contra = $_POST['pw_contras'];

$query = "SELECT COUNT(*) as contar FROM usuarios WHERE correo_electronico = '$correo' AND  contrasenia = '$contra'";
$consulta = mysqli_query($conexion, $query)or die("Error en el select " . mysqli_error($conexion));

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    $_SESSION['username'] = $correo;
    header("location: ../Vista/InicioSesion.php");

} else {
    ?>
<html>
    <head>
        <title>Prueba</title>
        <link rel='stylesheet' href='../Estilos/bulma.css'>
        <link rel='stylesheet' href='../Estilos/img.css'>
    </head>
    <body><br><br><br><br><br><br>
        <div class='inicioSes'>
            <h3>Usuario o contraseña  inválidos</h3><br>
            <a class='button is-success is-rounded' href='../Vista/InicioSesion.html' > Intentar nuevamente </a>
        </div>
    </body>
</html>
<?php
mysqli_close($conexion);
}
?>