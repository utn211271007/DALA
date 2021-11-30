<!DOCTYPE html>

<head>
    <title>Prueba</title>

    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/img.css">
    <style type="text/css">
    </style>
</head>

<body><br>
    <div class="columns">
        <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth"
                href="../Index.html">Inicio</a></div>
        <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth"
                href="../Vista/Registro.html">Registrar</a></div>
        <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth"
                href="../Vista/InicioSesion.html">Iniciar sesion</a></div>
    </div><br>
    <?php

function connect()
{
return new mysqli("bonneville.websitewelcome.com", "utn5prgc", "q3#rR3rpx#x8dH2v", "utn5prgc_qwerty");
   // return new mysqli("localhost", "root", "", "qwerty");
}
$con = connect();

/* cambiar el conjunto de caracteres a utf8 */
if (!mysqli_set_charset($con, "utf8")) {
    //printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($con));
    exit();
} else {
    // printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($con));
}

$query = "select * from preguntas";
$res = $con->query($query);
$formulario = "<form class='prueba' id='form' name='form1' method='post' action='Prueba.php'>
    <h1 align='center'>Prueba</h1><br><br>
    <div id='apDiv1'>
      <form action='Prueba.php' method='post'>
      <table width='700' border='0'>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    	<div>";

$contador = 0;
$contadorPre = 1;
while ($row = mysqli_fetch_array($res)) {
    //$table = $table +
    $formulario .= "<label for='radio'>$contadorPre.-$row[pregunta]</label><br>";
    $formulario .= "<p><input class='form-control validate['required]' type='radio'  name='respuesta[$contador]' value='1'required> $row[respuesta1]</p>";
    $formulario .= "<p><input class='form-control validate['required]' type='radio'  name='respuesta[$contador]' value='2'> $row[respuesta2]</p>";
    $formulario .= "<p><input class='form-control validate['required]' type='radio'  name='respuesta[$contador]' value='3'> $row[respuesta3]</p>";
    $formulario .= "<p><input class='form-control validate['required]' type='radio'  name='respuesta[$contador]' value='4'> $row[respuesta4]</p>";
    $contador++; //contador para acceder a las preguntas en la consulta
    $contadorPre++; //contador para acceder asignar numero de pregunta
}
$formulario .= "<input class='button is-success is-rounded' type='submit' name='bt_enviar' id='bt_enviar' value='Enviar' />
      </form>
      </div>
    </div>
    </td>
  </tr>
</table>

</form>";
echo $formulario;
?>
</body>

</html>