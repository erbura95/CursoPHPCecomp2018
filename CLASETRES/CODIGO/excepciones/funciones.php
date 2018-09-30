<?php 
	
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