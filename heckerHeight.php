<?php

function heckerHeight($arreglo1){

    //$arreglo2 = array_push($arreglo1);
    $arreglo2 = $arreglo1; //[1,1,4,2,1,3]

    sort($arreglo2); //[1,1,1,2,3,4]

    //print_r($arreglo2); //[1,1,1,2,3,4]
    //print_r($arreglo1); //[1,1,4,2,1,3]

    $counter = 0;
    //Ordenando el arreglo del parametro
    for($i=0; $i < count($arreglo1); $i++){
        if($arreglo2[$i] !== $arreglo1[$i]){
            $counter++;
        }
    }
    echo $counter;
}

heckerHeight([5,1,2,3,4]);

?>