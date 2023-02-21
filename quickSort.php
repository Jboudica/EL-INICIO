<?php

/**
 * bublesort, insertion sort, merge, quicksort
 * 
 * QUICKSORT => Algortimo de ordenamiento, donde los elementos se condicionan en base a un pivote
 * 
 * pivote = [0]
 */

/**
  * arreglo_izquierdo = [7,5]
    * arreglo_derecho = [9,10]
  */
function quickSort($arreglo){
    /**
     * $array_izquierdo = [7,5];
     * 
     * $array_derecho = [9,10];
     * 
     * $arreglo = [1]
     */
    if(count($arreglo) <= 1){
        return $arreglo;
    }else{
        $pivote = $arreglo[0];//5(tamaño de la cadena de la posicion 0) //8,  7, 9
        $array_derecha = array();
        $array_izquierdo = array();

        for($i = 1; $i < count($arreglo); $i++){
            if($arreglo[$i] < $pivote){
                /**
                 * $arreglo_izquierdo = [7, 5]
                 * 
                 * $arreglo_izquierdo = [5]
                 */
                $array_izquierdo[] = $arreglo[$i];
            }else{
                /**
                 * $array_derecha = [9, 10]
                 * $array_derecha = [9, 10]
                 */
                $array_derecha[] = $arreglo[$i];
            }
        }
        //quickSort()
        //print_r($pivote);
        return array_merge(quickSort($array_izquierdo), array($pivote), quickSort($array_derecha));
    }
    

    
    /**
     * $pivote = [8];
     * $arreglo_izquierdo = [7,5] = [5,7]
     * $arreglo_derecho = [9,10] = [9,10]
     * 
     * $arreglo_izquierdo, $pivote, $arreglo_derecho
     * 7,5,8,9,10
     */
}

$arreglo = [8,7,5,9,10];

$frutas = ["peras","fresas","melocotones","melones","sandias"];
print_r(quickSort($arreglo));
$arreglo2 = [100,150,7,300,5];
$arreglo3 = [-5,7,8,4];


?>