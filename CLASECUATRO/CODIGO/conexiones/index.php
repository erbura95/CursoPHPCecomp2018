<?php

// 1. Conectarnos a la base de datos
$mysqli = mysqli_connect('127.0.0.1','root','','ejemplo');

// validamos
if (mysqli_connect_error($mysqli)) {
	echo "Error al conectarse a la BD : " . mysqli_connect_error();
} else
{
	echo "Nos Conectamos a la Base de Datos";
	print("</br>");
}

// ejecutamos consulta
$query = mysqli_query($mysqli,'SELECT id, nombre_estado FROM estados');

/*
while ( $fila = mysqli_fetch_assoc($query)) {
	
	echo "nombre_estado :  " . $fila['nombre_estado'];
	print("</br>");
}*/
echo "<select>";
while($fila = mysqli_fetch_assoc($query))
{
	echo "<option value= '" . $fila['id'] ."'> " . 
	                          $fila['nombre_estado'] . "</option>";

}
echo "</select>";

// Liberamos Memoria
mysqli_free_result($query);
// Cerramos Conexion
mysqli_close($mysqli);
?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit reiciendis ut animi repellendus nostrum voluptates dolor alias explicabo aspernatur itaque, pariatur non dolore repellat provident aperiam ab minima nesciunt ipsum.</p>
<select >
	<option value="1">APROBADO</option>
	<option value="2">ANULADO</option>
</select>
