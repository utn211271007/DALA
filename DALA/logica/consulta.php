<?php
session_start();
require 'conexion.php';
$correo = $_SESSION['username'];

$query = "SELECT * FROM usuarios WHERE correo_electronico = '$correo'";
$consulta = mysqli_query($conexion, $query) or die("Error" . mysqli_error($conexion));