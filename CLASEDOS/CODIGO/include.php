<?php

// Llamada Correcta
include 'funciones.php';

// Si no tengo el archivo arroja un mensaje de warning
//include 'funcionesx.php';

// si uso include y llamo mas de una vez
// al mismo archivo error fatal.
include 'funciones.php';

echo suma(2,15);
var_dump(suma(2,15));

