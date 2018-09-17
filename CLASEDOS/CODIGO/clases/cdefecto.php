<?php

class Producto {

	//propiedades de la clase
	var $codigo;
	var $descripcion;
	var $unidadmedida;
	var $talla = 'XXS';
}
// instancia de clase.
$producto = new Producto();

// setear los valores
$producto->codigo = 'P-001';
$producto->descripcion = 'Polo Oakley';
$producto->unidadmedida = 'Camisetas';

// Imprimir

// Imprimir los Valores
print("<h1>Primera Instancia</h1>");
echo "Codigo : " . $producto->codigo;
print("<br>");
echo "Descripcion : " . $producto->descripcion;
print("<br>");
echo "Unidad de Medida : " . $producto->unidadmedida;
print("<br>");
echo "Talla : " . $producto->talla;
print("<br>");


print("<h2>Otra Instancia</h2>");

$producto2 = new Producto();

// Seteando valores de la Clase Producto
$producto2->codigo = 'P-0021';
$producto2->descripcion = 'Camiseta QuikSilver';
$producto2->unidadmedida = 'Camisetas';
$producto2->talla = 'M';

// Imprimir los Valores
print("<h3>Segunda Instancia</h3>");
echo "Codigo : " . $producto2->codigo;
print("<br>");
echo "Descripcion : " . $producto2->descripcion;
print("<br>");
echo "Unidad de Medida : " . $producto2->unidadmedida;
print("<br>");
echo "Talla : " . $producto2->talla;
print("<br>");