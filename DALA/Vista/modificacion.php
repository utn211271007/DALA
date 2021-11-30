<?php
session_start();
$correo = $_SESSION['user'];
$con = mysqli_connect("bonneville.websitewelcome.com", "utn5prgc", "q3#rR3rpx#x8dH2v", "utn5prgc_qwerty") or die("Error en la conexion");

$nombre = $_POST['txt_nombreN'];
$apeP = $_POST['txt_apePat'];
$apeM = $_POST['txt_apeMat'];
$genero = $_POST['rb_sexo'];
$fecha = $_POST['dt_fecNac'];
$cor = $_POST['txt_correo'];
$escolaridad = "Primaria";
$contra = $_POST['pvs_password1'];

$query = "UPDATE USUARIOS SET nombre='$nombre', apellido_paterno='$apeP',apellido_materno='$apeM', genero='$genero',fecha_nacimiento='$fecha',correo_electronico='$cor',escolaridad='$escolaridad',contrasenia='$contra'
    WHERE correo_electronico = '$correo'";

$resgistro = mysqli_query($con, $query) or die("Error" . mysqli_error($con));

if ($registro) {
    $reg = mysqli_fetch_array($resgistro);
    echo "Modificacion exitosa <br/><br/>";
    echo "Clave: " . $reg['clave_usuario'] . "<br />";
    echo "Nombre: " . $reg['nombre'] . " ";
    echo $reg['apellido_paterno'] . " ";
    echo $reg['apellido_materno'] . "<br />";
    echo "Escolaridad " . $reg['escolaridad'] . "<br />";
    echo "Genero " . $reg['genero'] . "<br />";
}
mysqli_close($con);
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

<script>
    function CerrarVentana(){
        window.close();
    }
</script>
