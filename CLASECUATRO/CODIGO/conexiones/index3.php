<?php

$mysqli = new mysqli('127.0.0.1','root','','ejemplo');
// verificar Conexion.,
if ($mysqli->connect_error) {
	echo "Error de conexion : " . $mysqli->connect_error();
}

// Preparar la Consulta
	$sql = "INSERT INTO estados (id,nombre_estado) VALUES (?,?)";

	$sentencia = $mysqli->prepare($sql);
	
	 if (!$sentencia) {
	 	echo "Fallo la preparacion : ({$mysqli->error()}) {$mysqli->error}.\n";
	 }
// Vincular los Parametros.
	 $id=9;
	$nombre_estado = 'INTESIFICADO';

	// i entero// s string // d double // b blob
	if (!$sentencia->bind_param('is',$id,$nombre_estado)) {
		echo "Falló la Vinculacion... : ({$mysqli->error()}) {$mysqli->error}.\n";
	}

	if(!$sentencia->execute())
	{
		echo "Falló la ejecucion : ({$mysqli->error()}) {$mysqli->error}.\n"; 
	} else{
		echo " " . $sentencia->affected_rows . ' Filas Afectadas';
	}