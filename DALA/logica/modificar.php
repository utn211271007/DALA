<?php
require 'conexion.php';
session_start();

$nombre = $_POST['txt_nombreN'];
$apeP = $_POST['txt_apePat'];
$apeM = $_POST['txt_apeMat'];
$genero = $_POST['rb_sexo'];
$fecha = $_POST['dt_fecNac'];
$correo = $_POST['txt_correo'];
$escolaridad = "Primaria";
$contra = $_POST['pvs_password1'];

$query = "UPDATE usuarios SET nombre='$nombre', apellido_paterno='$apeP',apellido_materno='$apeM', genero='$genero',fecha_nacimiento='$fecha',correo_electronico='$correo',escolaridad='$escolaridad',contrasenia='$contra'
    WHERE correo_electronico = '$correo'";
$consulta = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));

mysqli_close($conexion);

if ($consulta) {
    ?>
     <html>
    <head>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/img.css">
    </head>
    <body ><br><br><br><br><br>
    <div class="prueba" align="center">
        <h2 >Usuario modificado exitosamente</h2>
            <a href="javascript:CerrarVentana()" class="button is-success is-rounded">Regresar</a>
    </div>
    </body>
</html>
<?php
} else {
    ?>
<head>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/img.css">
    </head>
    <body ><br><br><br><br><br>
    <div class="prueba" align="center">
        <h2 >Hubo un error al modificar</h2>
            <a href="javascript:CerrarVentana()" class="button is-success is-rounded">Regresar</a>
    </div>
    </body>
</html>
<?php
}
?>
<script>
    function CerrarVentana(){
window . close();
}
</script>
