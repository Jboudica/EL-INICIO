<?php

function BubbleSortLetras($array){
    
    //Contador que itera cuantas veces sea necesario el arreglo para ordenarlo
    for($k=0; $k < count($array); $k++){
        //Ciclo que me va ayudar a iterar y condicionar los elementos del arreglo y para hacer el intercambio de posiciones
        for($l= 0; $l < count($array) - 1; $l++){
            //strlen => Para sacar el tamaño de la cadena

            if(strlen($array[$l]) > strlen($array[$l  + 1])){
                /**
                 * 9 > 3
                 * 
                 * 
                 * $array[0] = l
                 * $array[1] = l + 1
                 */

                /**
                 * temporal = array[1] //uva
                 */
                $temporal = $array[$l + 1];

                /**
                 * $array[1] = $array[0] //melocoton
                 */
                $array[$l + 1] = $array[$l];
                /**
                 * $array[0] = uva
                 */
                $array[$l] = $temporal;
            }   
        }
    }

    print_r($array);
}



$array = ["melocoton", "uva","manzanas","fresas","sandia","papaya"];
//$array = ["uva","melocoton","manzanas"..]
/**
 * $array[0] = melocoton strlen("melocoton") //9 caracteres
 * $array[1] = uva strlen("uva") //3 caracteres
 */

BubbleSortLetras($array);


?>