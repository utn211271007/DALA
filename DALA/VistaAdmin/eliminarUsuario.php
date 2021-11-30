<?php
session_start();
$usuario = $_SESSION["userAdmin"];

if (!isset($usuario)) {
    
echo '<script type="text/javascript">
window.location.href="https://utnestudiante0037.utn.red/DALA/VistaAdmin/login.html";</script>';
} else {
require 'conexion.php';
 $clave = $_GET[clave];
  $query = "CALL EliminarUsuario($clave)";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Transacción exitosa</title>
    <link href="../Estilos/bulma.css" rel="stylesheet" type="text/css" />
</head>

<body><br><br><br><br><br>
    <h1 class="title is-1" align="center">Eliminación exitosa, redirigiendo...</h1>
    <script type="text/JavaScript">
        setTimeout("location.href = 'https://utnestudiante0037.utn.red/DALA/VistaAdmin/listarUsuarios.php';",2000);
    </script>
    <br>
</body>

</html>
<?
}
?>