<?php

/**
 * BubbleSort: Algoritmo de ordenamiento, este algoritmo revisa cada elemento del arreglo, una posicion con otra
 * y va evaluando que posicion es menor o mayor a la siguiente posicion
 */

 //0,1,2,3,4,5,6
//$arreglo = [8,9,7,45,6100,25,1];

/**
 * $arreglo = [8,7,9,45,6100,25,1]
 * $arreglo = [8,7,9,45,6100,25,1]
 * $arreglo = [8,7,9,45,6100,25,1]
 * $arreglo = [8,7,9,45,25,6100,1]
 * $arreglo = [8,7,9,45,25,1,6100]
 * 
 * $arreglo = [7,8,9,45,25,1,6100]
 * ...
 * 
 */


function BubbleSort($arreglo){
    
    for($i=0; $i < count($arreglo); $i++){
        for($j = 0; $j < count($arreglo) -1; $j++){
            //Evaluamos si la posicion 0 es mayor a la siguiente posicion
            //$arreglo[8] > $arreglo[9] //false

            //$arreglo[9] > $arreglo[7] //true
            if($arreglo[$j] > $arreglo[$j + 1]){
                //$temporal = $arreglo[7]
                $temporal = $arreglo[$j + 1]; 
                //$arreglo[posicion 2] = $arreglo[9]
                $arreglo[$j + 1] = $arreglo[$j];
                //$arreglo[posicion 1] = 7

                //$arreglo = [8,9,7,45,6100,25,1];
                //$arreglo = [8,7,9,45,6100,25,1]
                //$arreglo = [8,7,9,45,6100,25,1]
                //$arreglo = [8,7,9,45,6100,25,1]
                //$arreglo = [8,7,9,45,25,6100,1]

                //$arreglo = [8,7,9,45,25,1,6100]
                
                $arreglo[$j] = $temporal; 
            }
        }
    }

    print_r($arreglo);
}

$array = [8,9,7,45,6100,25,1];
BubbleSort($array);

?>