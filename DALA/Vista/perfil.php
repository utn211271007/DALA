<html>
    <head>
        <link rel="stylesheet" href="../Estilos/img.css">
        <link rel="stylesheet" href="../Estilos/bulma.css">
    </head>
    <body><br>
        <div class="columns">
            <div class="column" align="center"><a class="button is-medium is-link is-rounded is-fullwidth" href="../Index.html">Inicio</a></div>
            <div class="column" align="center"><a class="button is-medium is-info is-rounded is-fullwidth" href="../Vista/Registro.html">Registrar</a></div>
            <div class="column" align="center"><a class="button is-medium is-primary is-rounded is-fullwidth" href="../Vista/modificarPerfil.php">Modificar</a></div>
            <div class="column" align="center"><a class="button is-medium is-success is-rounded is-fullwidth" href="../Vista/">Eliminar</a></div>
        </div>
        <div align="center" class="reg">
            <h4>
                <?php

require '../logica/consulta.php';

if ($reg = mysqli_fetch_array($consulta)) {
    echo "Clave: " . $reg['clave_usuario'] . "<br />";
    echo "Nombre: " . $reg['nombre'];
    echo $reg['apellido_paterno'];
    echo $reg['apellido_materno'] . "<br />";
    echo "Escolaridad " . $reg['escolaridad'] . "<br />";
    echo "Genero " . $reg['genero'] . "<br />";
}

?>

            </h4>
        </div>
    </body>
</html>