<?php

// Llamda a Clase Producto2
require_once 'Producto2.php';

// Instancia de la Clase Producto2
$producto = new Producto2();

// Setear los valores
$producto->codigo = 'CM-0001';
$producto->descripcion ='Camiseta de Superman';
$producto->unidadmedida = 'Camisetas';
$producto->talla = 'L';

// Llamada al Metodo Imprimir;
$producto->imprimir();