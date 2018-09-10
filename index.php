<!doctype html>
<html>
	<head>
		<title>Ejemplo - Numero01</title>
		<body>
			<h1>Bienveniedo a Mi primera clase de PHP</h1>
			<?php 

				echo "Hola , Soy un Script de PHP"; 

				// esto es un comentario en php de una sola linea

				/*
					eto es un comentario de varias lineas
					linea 1
					linea 2
					linea3
				*/

				print "Hola a Mi primera Clase de PHP";

				print ("<p> Esto es un parrafo mediante php<p>");

				print ("<p> Esto es un segundo parrafo mediante php<p>");

				print ("<ul><li>PHP desde PHP</li>
							<li>Laravel desde PHP</li>
							<li>Cake PHP desde PHP</li>
						</ul>");

				
				//Declarando Variables

				$mi_variable = "Hola Variables";

				echo $mi_variable;

				
				print("<br>");
				
				$dinero = 100;

				echo $dinero;

				$dinero = $dinero + 50;

				print("<br>");
				echo $dinero;

				print("<br>");
				print("<h3>Referencia de IDioma</h3>");

				$mensaje_es="Hola";
				$mensaje_en="Hello";
				$idioma = "es";
				$mensaje = "mensaje_" . $idioma;
				print $$mensaje;

				print("<h3>Referencia de Idioma Ingles</h3>");

				$idioma = "en";
				$mensaje = "mensaje_" . $idioma;
				
				print $$mensaje;
			
				print("<br>");
				print("<h3>Constantes</h3>");

				define ("CONSTANTE","hola constante");
				print CONSTANTE;

				print("<br>");
				define ("PI",3.141516);

				define ("APP_DOMINIO","ejemplo.com");
				
				define ("DB_HOST","192.168.2.14");
				define ("DB_HOSTNAME","CECOMPPHP");
				define ("DB_USU","mestrada");
				define ("DB_PASS","123456789");
				
				print PI;
				print("<br>");
				print APP_DOMINIO;
				print("<br>");
				print DB_HOST;
				print("<br>");
				print DB_HOSTNAME;
				print("<br>");
				print DB_USU;
				print("<br>");
				print DB_PASS;

				print("<br>");
				print("<h3>Estructuras de Control</h3>");

				$sexo = "M";
				$nombre = "Marco Estrada Lopez";


				if ( $sexo =="F" ) {
					$saludo="Bienvenida, ";
				} else {
					$saludo="Bienvenido, ";
				}
				
				$saludo = $saludo . $nombre;

				print ($saludo);

				print("<br>");
				print("<h3>Estructuras de Switch</h3>");

				$extension = "PDF";

				switch ($extension) {
					case 'PDF':
						$tipo ="Documento de Adobe Reader";
						break;
					
					case 'HTML':
						$tipo ="Documento de Lenguaje de Marcado";
						break;

					case 'XLS':
						$tipo ="Documento de Microsoft Excel";
						break;
					default:
						$tipo ="Otro Tipo de Documento";
						break;
				}

				echo "El documento es : " . $tipo;

				print("<br>");
				print("<h3>Estructuras Repetitiva</h3>");

				print ("<ul>\n");
				
				$i = 1;
				
				while ( $i <= 5) {
					
					print ("<li> Lista $i </li>");
					$i++;
				}

				print ("</ul>\n");
				
				print("<br>");

				$i = 1;

				print ("<ul>\n");
				do {

					print ("<li> Lista $i </li>");
					$i++;
				
				} while ( $i <= 5);

				print ("</ul>\n");

				print("<br>");


				print ("<ul>\n");
				
				//$variable = count($lista);

				for ($i=1; $i <= 5 ; $i++) { 
					
					print ("<li> Lista $i </li>");
				
				}

				print ("</ul>\n");

				print ("Ejemplo  2 bucles for: Tabla");

				for ($i=1; $i <= 12  ; $i++) { 
					echo "<h3> Tabla de $i </h3>" ;

					for ($j=1; $j <= 12 ; $j++) { 
						echo "$i x $j = " . ($i*$j) . "<br>";
					}
				}

				print ("<h3> Declarando Funciones </h3>");

				function suma($a,$b)
				{
					return $a + $b;
				}

				$numero_funcion = suma(2,4);

				echo $numero_funcion;

				function incrementador(&$a)
				{
					$a = $a + 1;
				}

				$a = 10;
				print("<br>");
				incrementador($a);

				echo $a;
			
			?>

			<p>Lorem ipsum dolor sit amet, 
				consectetur adipisicing elit. 
				Iste labore voluptate nam. Labore asperiores animi exercitationem deleniti 
				quia consectetur, iusto suscipit fugiat, saepe tempora aut earum dolore repudiandae, 
				nam quo?</p>
			
			
			<ul>
				<li>PHP</li>
				<li>Laravel</li>
				<li>Cake PHP</li>
			</ul>


	</head>
</html>