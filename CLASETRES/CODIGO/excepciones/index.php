<?php

 class ComidaException extends Exception {

 	protected $message = "La Grasa es NO saludable para la Salud" ;
 }

 class PersonaException extends Exception {
 	protected $message ="La Edad de la persona es no valida";
 }

 function comer($comida)
 {
 	// if ($comida == 'grasa') {

 	// 	throw new Exception('La Grasa es no saludable'); 
 	// } 

 	if ($comida == 'grasa') {
 		throw new ComidaException;
 	} 
 	
 	
 	return "Comiendo : " .$comida;
 }

 function edad($edad)
 {
	if ($edad < 0) {
 		throw new PersonaException;
 	} 
 	
 	return "Mi Edad es : " .$edad;

 }

 echo "<div style='text-align:center;'>";
 echo "<h1>Ejemplo Exception</h1>";
 print("</br>");
 echo comer('manzana');
 print("</br>");
 //echo comer('grasa');
 echo edad(50);
echo edad(-1); 
 echo "</div>";