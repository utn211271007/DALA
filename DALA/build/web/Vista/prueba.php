<?php

	$r1 = $_POST['rb_resp1'];
	$r2 = $_POST['txt_resp2'];
	$r3 = $_POST['rb_resp3'];
	$r4 = $_POST['rb_resp4'];
	$r5 = $_POST['txt_resp5'];
	$r6 = $_POST['txt_resp6'];
	$r7 = $_POST['rb_resp7'];
	$r8 = $_POST['txt_resp8'];
	$r9b = $_POST['txt_resp9B'];
	$r9p = $_POST['txt_resp9P'];
	$r10 = $_POST['txt_resp10'];
	$r11 = $_POST['rb_resp11'];
	$r12 = $_POST['txt_resp12'];
	$r13 = $_POST['txt_resp13'];
	$r14 = $_POST['rb_resp14'];
	$r15 = $_POST['txt_resp15'];
	$r16 = $_POST['rb_resp16'];
	$r17 = $_POST['txt_resp17'];
	$r18 = $_POST['rb_resp18'];
	$r19 = $_POST['txt_resp19'];
	$r20 = $_POST['txt_resp20'];

	switch ($r1){
		case 4:
			$sumTot=4;
		break;

		case 3:
			$sumTot=3;
		break;

		case 2:
			$sumTot=2;
		break;

		case 1:
			$sumTot=1;
		break;
	}

	if($r2="ESRALES"||$r2="esrales"||$r2="Esrales"){
    	$sumTot+=4;
	}else{
		$sumTot+=1;	
	}

	switch ($r3){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}

	switch ($r4){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}
	
	if($r5=="k"||$r5=="K"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r6=="TELEVISION"||$r6=="television"||$r6=="Television"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}
	
	switch ($r7){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
		$sumTot+=1;
		break;
	}	


	if($r8=="todos-somos-capaces-de-cumplir-los-sueños"||$r8=="TODOS-SOMOS-CAPACES-DE-CUMPLIR-LOS-SUEÑOS"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r9b==4){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r9p==5){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r10=="AGIL"||$r10=="agil"||$r10=="Agil"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	switch ($r11){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}

	if($r12=="RALULEC"||$r12=="ralulec"||$r12=="Ralulec"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r13=="DIVERTIDO"||$r13=="divertido"||$r13=="Divertido"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	switch ($r14){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}
	
	if($r15=="RATNEMILA"||$r15=="ratnemila"||$r15=="Ratnemila"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	switch ($r16){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}
	
	if($r17=="AUTOMOVIL"||$r17=="automovil"||$r17=="Automovil"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	switch ($r18){
		case 4:
			$sumTot+=4;
		break;

		case 3:
			$sumTot+=3;
		break;

		case 2:
			$sumTot+=2;
		break;

		case 1:
			$sumTot+=1;
		break;
	}
	
	if($r19=="ORAPIVIVOVO"||$r19=="orapivivovo"||$r19=="Orapivivovo"){
		$sumTot+=4;
	}else{
		$sumTot+=1;
	}

	if($r20=="ELECTRODOMESTICO"||$r20=="electrodomestico"||$r20=="Electrodomestico"){
		$sumTot+=4;
	}else{
		$sumTot+=4;
	}

	echo "Aciertos total :   $sumTot" ;
?>
<html>
	<body>
		<div align="center">
			<h2>Tus total de aciertos son de:</h2>
			<?php 
			echo $sumTot; 
			?>
		</div>
	</body>
</html>