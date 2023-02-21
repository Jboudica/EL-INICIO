<?php
/**
 * Insertion Sort: La ordenación por inserción se basa en la idea de consumir un elemento de la matriz 
 * no ordenada e insertarlo en la posición correcta en la matriz ordenada. Esto hará que la longitud 
 * de la matriz ordenada aumente en uno y que la longitud de la matriz sin ordenar 
 * disminuya en uno después de cada iteración.
 */

function insertionSort($array){
    for($i=0; $i < count($array); $i++){
        $valor = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $valor < $array[$j]){
            $array[$j + 1] = $array[$j];
            $array[$j] = $valor;
            $j = $j - 1;
            print_r($array);
        }
    }
    
}

insertionSort([10,23,50,4,9,40,1]);


?>