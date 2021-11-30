<?php
$r1=$_POST['rb_resp1'];
$r2=$_POST['rb_resp2'];
$r3=$_POST['rb_resp3'];
$r4=$_POST['rb_resp4'];
$r5=$_POST['rb_resp5'];
$r6=$_POST['rb_resp6'];
$r7=$_POST['rb_resp7'];
$r8=$_POST['rb_resp8'];
$r9=$_POST['rb_resp9'];
$r10=$_POST['rb_resp10'];

switch($r1){
    case 1:
    $sumTot=1;
    break;

    case 2:
    $sumTot=2;
    break;

    case 3:
    $sumTot=3;
    break;

    case 4:
    $sumTot=4;
    break;
}
switch($r2){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r3){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r4){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r5){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r6){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r7){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r8){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r9){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}
switch($r10){
    case 1:
    $sumTot+=1;
    break;

    case 2:
    $sumTot+=2;
    break;

    case 3:
    $sumTot+=3;
    break;

    case 4:
    $sumTot+=4;
    break;
}

echo"Aciertos total: $sumTot";
?>
<html>
    <body>
        <h1 class ="title is-2">Suma total de tus respuestas </h1>
        <?php
            echo "$sumTot";
        ?>
        Continua con los ejerciciso 
    </body>
</html>