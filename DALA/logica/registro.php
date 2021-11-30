<?php
require 'conexion.php';

$nombre = $_POST['txt_nombre'];
$apePat = $_POST['txt_apePat'];
$apeMat = $_POST['txt_apeMat'];
$contrasenia = $_POST['pvs_password1'];
$fechaNac = $_POST['dt_fecNac'];
$sexo = $_POST['rb_sexo'];
$correo = $_POST['txt_correo'];
$escolaridad = "Primaria";

$consultaCorreo = "SELECT COUNT(*) as contar FROM usuarios WHERE correo_electronico = '$correo'";
$resultado = mysqli_query($conexion, $consultaCorreo);

$array = mysqli_fetch_array($resultado);

if ($array['contar'] > 0) {

    echo '<script>alert("Este correo ' . $correo . ' ya está siendo usado, intenta con otro.");

    window.location.href="../Vista/Registro.html"</script>';

} else {
    $querySlc = "SELECT MAX(CLAVE_USUARIO) as clave_usuario FROM usuarios";

    $registro = mysqli_query($conexion, $querySlc) or die("Error en el select " . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registro)) {
        $clave = $reg['clave_usuario'] + 1;

    }

    $query = "INSERT INTO `usuarios`(`clave_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `genero`, `fecha_nacimiento`, `correo_electronico`, `escolaridad`, `contrasenia`) VALUES
('$clave','$nombre','$apePat','$apeMat','$sexo','$fechaNac','$correo','$escolaridad','$contrasenia')";

    mysqli_query($conexion, $query) or die("Error al insertar" . mysqli_error($conexion));
    ?>
<html>
    <head>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/img.css">
    </head>
    <body ><br><br><br><br><br>
    <div class="prueba" align="center">
        <h2 >Usuario registrado con exito</h2>
            <h3>-----> Ahora iniciemos sesion</h3> <br><br>
            <a href="../Vista/InicioSesion.html" class="button is-success is-rounded">Iniciar sesion</a>
    </div>
    </body>

</html>
<?php
}
?>




