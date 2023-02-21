<?php

  //echo "ingrese un numero entero";
//fscanf (STDIN,%,$entero);

/*for($i=1; $i <= $entero; $i++){
    echo $i ," ";

}

//iterando una cadena 
$string ="buenas noches ";
 //metodo para sdaber el tamaño de una cadena =>strlen()
for($j=0; $j < strlen($string); $j++){
        echo $string[$j],"\n";

        /**
         * $string[0] => B
         * $string[1] => u
         */

//}

$array = [2,6,5,7,8];
// metodo para saber el tamaño de un array => count()
$multiplicar = 1;
for($k=0; $k < count($array); $k++){
           //$multiplicar=$multiplicar*$array[$k]:
          $multiplicar *= $array[$k];
}
   echo "\n resultado :" , $multiplicar;


   /** while */
$entero2 = 18;
$contador = 1;
 while($entero2 >= $contador){

    $entero2--;
    echo $entero2, "-";
    $entero2--;


 }
?>
