<?php
$conexion=mysqli_connect("localhost", "root", "","qwerty") or die ("Error al conetar con la base datos");

$nombre=$_POST['txt_nombre'];
$apePat=$_POST['txt_apePat'];
$apeMat=$_POST['txt_apeMat'];
$password=$_POST['pvs_password1'];
$passsword2=$_POST['pvs_password2'];
$estado=$_POST['slc_estado'];
$fechaNac=$_POST['dt_fecNac'];
$sexo=$_POST['rb_sexo'];
$correo=$_POST['txt_correo'];
$escolaridad=$_POST['slc_escolaridad'];



$querySlc="SELECT MAX(CLAVE_USUARIO) as clave_usuario FROM USUARIO";

$registro=mysqli_query($conexion,$querySlc) or die ("Error en el select ".mysqli_error($conexion));
	


if($reg=mysqli_fetch_array($registro)){
	$clave = $reg['clave_usuario']+1;
	
}

$query="INSERT INTO `usuario`(`clave_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `genero`, `fecha_nacimiento`, `correo_electronico`, `escolaridad`, `contrasena`) VALUES  
('$clave','$nombre','$apePat','$apeMat','$sexo','$fechaNac','$correo','$escolaridad','$password')";


mysqli_query($conexion,$query) or die("Error al insertar".mysqli_error($conexion));
?>

<html>
    <head><link rel="stylesheet" href="../Estilos/bulma.css"></head>
    <body align="center"><br><br>
    <h2 >Usurario Registrado con exito</h2>
        -----> Ahora iniciemos sesion <br><br>
        <a href="inicioSesion.html" class="button is-success is-rounded">Iniciar sesion</a>
    </body>
</html>