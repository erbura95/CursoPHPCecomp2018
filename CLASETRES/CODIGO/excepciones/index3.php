<?php
	
	require_once 'ComidaException.php';
	require_once 'PersonaException.php';	

	require_once 'funciones.php';

	try {
		
		 echo "<div style='text-align:center;'>";
		 echo "<h1>Ejemplo Exception</h1>";
		 print("</br>");
		 echo comer('manzana');
		 print("</br>");
		 //echo comer('grasa');
		 echo edad(50);
		 echo edad(-1); 
		 echo "</div>";

	} catch (ComidaException $e) {
		echo $e->getMessage() . " Linea : " .$e->getLine();
	} catch (PersonaException $e) {
		echo $e->getMessage() . " Linea : " .$e->getLine();
	} finally {
		echo "Termino de Try Catch";
	}