<?php
class Auto{
	// propiedades
	var $color;
	var $modelo;

	// metodos;
	// constructor

	function __construct($p_color,$p_modelo){
		$this->color = $p_color;
		$this->modelo = $p_modelo;
	}

	function imprimir()
	{
		print("<h3>Impresion de Auto</h3>");
		echo "Color : " . $this->color;
		print("<br>");
		echo "Modelo : " . $this->modelo;
		print("<br>");

	}

}

$auto = new Auto('Rojo','Audi');
$auto->imprimir();
print("<br>");
$auto1 = new Auto('Azul','Toyota');
$auto1->imprimir();
print("<br>");