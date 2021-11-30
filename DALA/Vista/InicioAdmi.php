<?php
$usuario = $_POST['txt_usuario'];
$contra = $_POST['pw_contrase'];

if (($usuario == "SOLSOFTW" || $usuario == "solsoftw") && ($contra == "solsoft")) {
    echo "Continuemos con lo de deseas modificar";
} else {
    echo "Sus datos son incorrectos";
}
