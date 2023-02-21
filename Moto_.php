<?php
/*
$colores = array("blanco", "rosa", "verde", "naranja");
foreach($colores as $color)(
       echo "\n", $color;

)

$frutas = array("banana","pineapple","pear","orange");
foreach($frutas as $fruta)(
      echo "\n",$fruta;


)
*/
//ejemplo array 
/*$alumno = array("nombre"=>"Enzor Francia","edad"=>20,"bootcamp"=>"OIM");
       foreach($alumno as $clave =>$valor)(
        echo $clave,":",$valor ,"\n";

     )
*/
    //ejemplo recorrer un objeto
    $moto = new stdclass();
    $moto -> cilindro="2";
    $moto -> motor="250";
    $moto -> frenos="ABS";
    $moto->tipo = "doble proposito";
       
    foreach($moto as $clave =>$valor){
       echo $clave,":",$valor,"\n";
    }

?>