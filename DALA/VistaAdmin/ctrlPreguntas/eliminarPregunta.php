<?php
session_start();
$usuario = $_SESSION['userAdmin'];

if (!isset($usuario)) {
    header("location: ../../login.html");
} else {
    require '../../logica/conexion.php';
    $usuario = $_GET[clave];
    $query = "CALL EliminarPreguntas($usuario)";
    $resultado = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Transacci√≥n exitosa</title>
    <link href="../../Estilos/bulma.css" rel="stylesheet" type="text/css" />
</head>
<body><br><br><br><br><br>
    <h1 class="title is-1" align="center">Eliminaci®Æn exitosa, redirigiendo...</h1>
<script type="text/JavaScript">
      setTimeout("location.href = 'listarPreguntas.php';",2000);
        </script>
    <br>
</body>
</html>
<?php
}
?>