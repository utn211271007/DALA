<?php

session_start();

error_reporting(0);

session_destroy();
echo "Sesion Cerrada";
echo'<script type="text/javascript">
window.location.href="https://utnestudiante0037.utn.red/DALA/VistaAdmin/login.html";</script>';
exit();