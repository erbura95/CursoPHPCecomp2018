<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de Excepcion</title>
</head>
<body>
	<?php
		function comer($comida)
		 {
		 	if ($comida == 'grasa') {

		 		throw new Exception('La Grasa es no saludable'); 
		 	} 
		 	
		 	return "Comiendo : " .$comida;
		 }

		 echo "<div style='text-align:center;'>";
		 echo "<h1>Ejemplo Exception</h1>";
		 print("</br>");
		 echo comer('manzana');
		 print("</br>");
		 echo comer('grasa');
		 echo "</div>";
	?>			
</body>
</html>