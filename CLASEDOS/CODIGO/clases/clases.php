<?php

//Llamada a la Clase Producto
require_once 'Producto.php';

// instancia de la Clase.
$producto = new Producto();

// Seteando valores de la Clase Producto
$producto->codigo = 'P001';
$producto->descripcion = 'Camiseta Billabong';
$producto->unidadmedida = 'Camisetas';
$producto->talla = 'XS';

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

print("<h1>Otra Instancia</h1>");

$producto2 = new Producto();

// Seteando valores de la Clase Producto
$producto2->codigo = 'P002';
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

