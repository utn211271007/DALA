<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <p><b>Usuario: </b><?php echo $_GET['usuario']; ?></p>
    <p><b>Nombre: </b><?php echo $_GET['nombre'].' '.$_GET['apellido']; ?>
    </p>
    <p><b>Genero: </b><?php echo $_GET['genero']; ?></p>
    <p><b>Contraseña: </b><?php echo $_GET['contrase']; ?></p>
    <p><b>Estado: </b><?php echo $_GET['estado']; ?></p>
    <p>
        <b>Naciste el dia </b><?php echo $_GET['dia']; ?>
        <b>del mes </b><?php echo $_GET['mes']; ?>
        <b>del año </b><?php echo $_GET['anio']; ?>
    </p>
    <p><b>Tienes la edad de </b><?php echo $_GET['edad']; ?><b>años</b></p>
</body>
</html>