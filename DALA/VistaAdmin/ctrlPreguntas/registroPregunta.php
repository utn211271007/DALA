<?php
require '../../logica/conexion.php';

$pregunta = $_POST['txt_preg'];
$clas = $_POST['txt_clas'];
$res1 = $_POST['txt_resp1'];
$res2 = $_POST['txt_resp2'];
$res3 = $_POST['txt_resp3'];
$res4 = $_POST['txt_resp4'];
$respC = $_POST['txt_respC'];

$clave = "";

$querySlc = "SELECT MAX(CLAVE_PREGUNTA) as clave_pregunta FROM `preguntas`";

$registro = mysqli_query($conexion, $querySlc) or die("Error en el select " . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registro)) {
    $clave = $reg['clave_pregunta'] + 1;

}

$query = "INSERT INTO `preguntas`(`clave_pregunta`, `pregunta`, `clasificacion`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta_correcta`) VALUES
('$clave','$pregunta','$clas','$res1','$res2','$res3','$res4','$respC')";

mysqli_query($conexion, $query) or die("Error al insertar" . mysqli_error($conexion));
?>
<html>

<head>
    <link rel="stylesheet" href="../../Estilos/bulma.css">
</head>

<body><br><br><br><br><br>
    <div class="prueba" align="center">
        <h1 class="title is-1" align="center">Pregunta registrada con éxito, regresando...</h1>
        <script type="text/JavaScript">
      setTimeout("location.href = 'https://utnestudiante0037.utn.red/DALA/VistaAdmin/ctrlPreguntas/nuevaPregunta.php';",2000);
        </script>

    </div>
</body>

</html>