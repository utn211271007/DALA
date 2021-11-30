<?php
$r1 = $_POST['rb_resp1'];
$r2a = $_POST['rb_resp2A'];
$r2b = $_POST['rb_resp2B'];
$r3 = $_POST['rb_resp3'];
$r4a = $_POST['rb_resp4A'];
$r4b = $_POST['rb_resp4B'];
$r5 = $_POST['rb_resp5'];
$r6a = $_POST['rb_resp6A'];
$r6b = $_POST['rb_resp6B'];
$r7 = $_POST['rb_resp7'];
$r8a = $_POST['rb_resp8A'];
$r8b = $_POST['rb_resp8B'];
$r9 = $_POST['rb_resp9'];
$r10a = $_POST['rb_resp10A'];
$r10b = $_POST['rb_resp10B'];

switch ($r1) {
    case 1:
        $sumTot = 1;
        break;

    case 2:
        $sumTot = 2;
        break;

    case 3:
        $sumTot = 3;
        break;

    case 4:
        $sumTot = 4;
        break;
}
switch ($r2a) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r2b) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r3) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r4a) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r4b) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r5) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r6a) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r6b) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r7) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r8a) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r8b) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r9) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r10a) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
switch ($r10b) {
    case 1:
        $sumTot += 1;
        break;

    case 4:
        $sumTot += 4;
        break;
}
?>
<html style="background-color: #FF7812;">
<head>
    <link rel="stylesheet" href="../Estilos/bulma.css">
    <link rel="stylesheet" href="../Estilos/img.css">
</head>
    <body align="center"><br><br><br><br><br>
        <div class="inicioSes">
        <br>
            <h1 class ="title is-2">Suma total de tus respuestas </h1>
            <h1>
                <?php
echo "$sumTot";
?>
            </h1>
            Continua con los ejercicios
            <br>
			<a class="button is-medium is-link is-rounded" href="../Vista/InicioSesion.php">Continuar</a>
        </div>
    </body>
</html>