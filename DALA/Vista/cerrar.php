<?php
session_start();
error_reporting(0);

session_destroy();
echo "Sesion Cerrada";
header("Location: ../Vista/InicioSesion.html");
