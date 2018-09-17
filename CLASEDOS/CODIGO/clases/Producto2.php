<?php
class Producto2{

		//propiedades de la clase
	var $codigo;
	var $descripcion;
	var $unidadmedida;
	var $talla;

	function __construct()
	{
		echo "He sido instanciado";
		print ("<br>");

	}
	// Metodo de Imprimir
	function imprimir()
	{
		print("<h3>Impresion de Clase</h3>");
		echo "Codigo : " . $this->codigo;
		print("<br>");
		echo "Descripcion : " . $this->descripcion;
		print("<br>");
		echo "Unidad de Medida : " . $this->unidadmedida;
		print("<br>");
		echo "Talla : " . $this->talla;
		print("<br>");

	}
}