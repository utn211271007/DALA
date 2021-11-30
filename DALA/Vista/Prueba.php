<!DOCTYPE html style="background-color: #FF7812;">

<head>
    <title>Prueba</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="shortcut icon" type="imagen/x-icon" href="../img/Logo_DALA.png">
    <link rel="stylesheet" href="../Estilos/img.css">
</head>

<body><br><br><br><br><br>
    <div class="inicioSes" align="center">

        <?php
require '../logica/conexion.php';
//$con = mysqli_connect("bonneville.websitewelcome.com", "utn5prgc", "q3#rR3rpx#x8dH2v", "utn5prgc_qwerty") or die("Error al conectar con la BD");
$query = "select respuesta_correcta from preguntas";

$registros = mysqli_query($conexion, $query);

$cont = 0;
$resp_array = array();
foreach (array_keys($_POST['respuesta']) as $key) {
    $respuestas = $_POST['respuesta'][$key];

    $resp_array[$cont] = $respuestas;
    $cont++;
}

$puntaje = 0;

while ($reg = mysqli_fetch_array($registros)) {
    $regBD[] = $reg['respuesta_correcta'];
}

for ($j = 0; $j < count($resp_array); $j++) {
    if ($regBD[$j] == $resp_array[$j]) {
        $puntaje++;
    }
}

//Generacion de ID
/*
$querySlc="SELECT MAX(folio) as folio FROM pruebas_o_ejercicios";

$registro=mysqli_query($con,$querySlc) or die ("Error en el select ".mysqli_error($con));

if($reg=mysqli_fetch_array($registro)){
$clave = $reg['folio']+1;

}*/
$total = count($resp_array);
$cantidad = $puntaje;
function obtenerPorcentaje($cantidad, $total)
{
    $porcentaje = ((float) $cantidad * 100) / $total; // Regla de tres
    $porcentaje = round($porcentaje, 0); // Quitar los decimales
    return $porcentaje;
}

//Crear folio aleatorio

function generateRandomString($length = 10)
{
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
$folio = generateRandomString($length = 10);
$queryFolio = "Select folio from pruebas_o_ejercicios where folio='$folio'";
$regFolio = mysqli_query($conexion, $queryFolio);
recursiva($regFolio, $folio);

function recursiva($consultaFolio, $folio)
{
    if (mysqli_num_rows($consultaFolio) == 0) {
        //    La búsqueda no arrojó usuarios con ese ID, por lo tanto el folio no existe
    } else {
        $folio = generateRandomString($length = 10);
        recursiva($consultaFolio, $folio);
    }
    return $folio;
}

//Insercion de fecha, hora y calificacion
$time = time();
$date = date("Y-m-d ");
$calificacion = obtenerPorcentaje($cantidad, $total);
$query2 = "INSERT INTO `pruebas_o_ejercicios`(`folio`, `fecha`, `hora`, `puntuaje_prueba`, `calificacion`) values ('$folio', '$date', '$time', '$puntaje', '$calificacion')";

mysqli_query($conexion, $query2);
?>
        <div align="center">
            <h3> Tu puntaje total es de: <br><?php echo "$puntaje / $total" ?></h3>
        </div>
        <form action="../Vista/Registro.html" method="post">

        </form>
        <a class="button is-medium is-link is-rounded" href="../Index.html">Inicio</a><br><br>
        <a class="button is-medium is-link is-rounded" href="../Vista/Registro.html">Registrarte</a><br><br>
    </div>
</body>

</html>