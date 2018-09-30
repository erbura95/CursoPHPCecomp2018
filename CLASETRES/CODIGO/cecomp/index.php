<?php
	require_once 'Estudiante.php';


    use cecomp\Estudiante as e; 

	//$estudiante = new cecomp\Estudiante('Diana Carolina');

	$estudiante = new e('Diana Carolina');
	echo $estudiante->saludar();