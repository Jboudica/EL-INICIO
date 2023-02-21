<?php

/**
 * for, while, do while, foreach
 */

echo "Ingrese un numero entero";
fscanf(STDIN, "%s", $entero);

for($i=1; $i <= $entero; $i++){ //$i = $i + 1
    echo $i . " ";
}
echo "\n";
//iterando una cadena
$string = "Buenas noches chicos OIM";
//metodo para saber el tamaño de una cadena => strlen()

for($j=0; $j < strlen($string); $j++){
    echo $string[$j] . "\n";

    /**
     * $string[0] => B
     * $string[1] => u
     * ..
     * $string[23] => M
     */
}

$array = [2,6,5,7,8]; //posicion 0 ...
$multiplicar = 1;
//metodo para saber el tamaño de un array => count()
for($k=0; $k < count($array); $k++){
    //$multiplicar = $multiplicar * $array[$k];
    $multiplicar *= $array[$k];
    /**
     *  1 * 2 = 2
     *  2 * 6 = 12
     *  12 * 5 = 60
     *  60 * 7 = 420
     *  420 * 8 = 3360
     */
}

echo "\nResultado total de la multiplicacion es: " . $multiplicar;



/** while */

$entero2 = 18;
$contador = 1;
echo "\n";
//condicion
while($entero2 >= $contador){
    /**
     * 18 - 1 = 17
     * 17 - 1 = 16
     * ...
     * 1
     */
    echo $entero2 . "-";
    $entero2--;
}


?>