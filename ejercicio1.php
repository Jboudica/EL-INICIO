<?php

//Estructura For (contador, condicion, incremento/decremento)

/**
 * readline(), fscanf
 */

$numero = readline("Ingrese un numero ");
//echo $numero;

echo "\nIngrese el segundo numero ";
fscanf(STDIN, "%s", $numero2);
//echo $numero2;

$suma = $numero + $numero2;
echo $suma;


?>