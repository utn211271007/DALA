<?php
session_start();
$nombreAdmin = $_POST['txt_admin'];
$contraAdmin = $_POST['txt_contra'];

if ($nombreAdmin == "solsoftw" && $contraAdmin == "solsoftw") {
    $_SESSION['userAdmin'] = $nombreAdmin;
    header("Location: ../VistaAdmin/index.php");
} else {
    echo "<script type='text/javascript'>alert('Usuario o contraseña incorrecto. Vuelva a intentarlo.');</script>";
    ob_start();
    session_destroy();
    
     echo'<script type="text/javascript">
window.location.href="https://utnestudiante0037.utn.red/DALA/VistaAdmin/login.html";</script>';
    exit();
    ob_end_flush();
    
    
    
}