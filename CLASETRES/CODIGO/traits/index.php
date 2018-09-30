<?php
	
	require_once 'Gato.php';

	$gato = new Gato();

		echo "<div style='text-align:center;'>";
		echo "<h1>Ejemplo de Trait</h1>";
		print("</br>");
		echo $gato->tocar();
		print("</br>");
		echo $gato->tocar_doble();
		echo "</div>";


