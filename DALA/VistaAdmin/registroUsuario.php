<?php
require '../logica/conexion.php';

$nombre = $_POST['txt_nom'];
$apePat = $_POST['txt_apeP'];
$apeMat = $_POST['txt_apeM'];
$contrasenia = $_POST['txt_contraseña'];
$fechaNac = $_POST['txt_fecha'];
$genero = $_POST['rb_genero'];
$correo = $_POST['txt_correo'];
$escolaridad = "Primaria";
$clave = "";
$consultaCorreo = "SELECT COUNT(*) as contar FROM `usuarios` WHERE correo_electronico = '$correo'";
$resultado = mysqli_query($conexion, $consultaCorreo);

$array = mysqli_fetch_array($resultado);

if ($array['contar'] > 0) {

    echo '<script>alert("Este correo (' . $correo . ') ya está siendo usado, intenta con otro.");

    window.location.href="nuevoUsuario.php"</script>';

} else {
    $querySlc = "SELECT MAX(CLAVE_USUARIO) as clave_usuario FROM `usuarios`";

    $registro = mysqli_query($conexion, $querySlc) or die("Error en el select " . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registro)) {
        $clave = $reg['clave_usuario'] + 1;

    }

    $query = "INSERT INTO `usuarios`(`clave_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `genero`, `fecha_nacimiento`, `correo_electronico`, `escolaridad`, `contrasenia`) VALUES
('$clave','$nombre','$apePat','$apeMat','$genero','$fechaNac','$correo','$escolaridad','$contrasenia')";

    mysqli_query($conexion, $query) or die("Error al insertar" . mysqli_error($conexion));
    ?>
<html>

<head>
    <link rel="stylesheet" href="../Estilos/bulma.css">
</head>

<body><br><br><br><br><br>
    <div class="prueba" align="center">
        <h2>Usuario registrado con éxito, regresando...</h2>
         <script type="text/JavaScript">
      setTimeout("location.href = 'https://utnestudiante0037.utn.red/DALA/VistaAdmin/nuevoUsuario.php';",2000);
        </script>
    </div>
</body>

</html>
<?php
}
?>