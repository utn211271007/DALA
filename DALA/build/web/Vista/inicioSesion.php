<?php
$con=mysqli_connect("localhost", "root", "", "qwerty") or die ("Error al conectar con la base de datos");
	
$nombre = $_POST['txt_usuario'];
$password = $_POST['cp_contraseña'];
$query="SELECT * FROM `usuario` WHERE nombre='".$nombre."'";
$registro=mysqli_query($con,$query) or die ("Error en el select ".mysqli_error($con));

$reg=mysqli_fetch_array($registro);

if($password==$reg['contrasena'] && $nombre== $reg['nombre']){
?>
<html>
<head>
    <title>Prueba</title>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="shortcut icon" type="imagen/x-icon" href="../img/Logo_DALA.png">
</head>
<body>
    <header>
        <div>
            <br><br>
            <h1 class ="title is-1" style="text-align: center;">Ejercicios</h1>
            <br><br>
        </div>
    </header>
    ---> Deceas realizar <a href="prueba.html" class="button is-success is-rounded">Prueba</a><br>
    ---> Iniciemos con los ejercicios: Da clic en la imagen para comenzar a resolverlos.
    <div align="center">
        
        <table border="0">
            <tr>
                <td><a href="prueba1.html"><img src="../img/prueba1.png" alt="prueba1" width="350" height="450"></a></td>
                <td><a href="prueba2.html"><img src="../img/prueba2.png" alt="prueba2" width="350" height="450"></a></td>
            </tr>
            <tr>
                <td><a href="prueba3.html"><img src="../img/prueba3.png" alt="prueba3" width="350" height="450"></a></td>
                <td><a href="prueba4.html"><img src="../img/prueba4.png" alt="prueba4" width="350" height="450"></a> </td>
            </tr>
        </table>
    </div>                 
</body>
</html>
<?php
}
else{
echo "Usuario o contraseña invalidos";
}
mysqli_close($con);
?>