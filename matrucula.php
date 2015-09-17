<?php 



	$miGrado = $_POST['grado'];
	$arrayprimeroA = array('Danzas', 'Teatro', 'Dibujo');
	$arrayprimeroB = array('Danzas', 'Musica');
	$arrayprimeroC = array('Teatro', 'Dibujo' ,'Musica');
 
	$arrayseguandoA =array('Teatro', 'Dibujo');
	$arraysegundoC = array('Teatro', 'Musica');


	$resultado ;
	$miSelect = "";


	if($miGrado == 'PrimeroA'){
		$arrRecorrer = $arrayprimeroA;

	}else if($miGrado == 'PrimeroB'){ 
		$arrRecorrer = $arrayprimeroB;
 
	}else if($miGrado == 'PrimeroC'){


		$arrRecorrer = $arrayprimeroC;

	}else if ($miGrado == 'SegundoA'){
		$arrRecorrer = $arraysegundoA;
		 	
	}else if ($miGrado == 'Segundoc'){
		 
		$arrRecorrer = $arraysegundoC;	
	}


	$resultado = "<select id='materia' name='materia' >";

	foreach ($arrRecorrer as $nombre) {
		$resultado .= "<option value=".$nombre.">".$nombre."</option>";
	}
	$resultado .= "<select>";
	 
	
	echo $resultado  ;
	
 ?>