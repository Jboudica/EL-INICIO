<?php
/* 
enunciado del programa 
calculadora de propinas :crea un programa en PHP que permita el usuario  ingresar el total de una cuenta 
de restaurante  y la calidad del servicio (excelente , bueno , regular  y malo )
y cal cule automaticamente el monto de la propina */

// definamos la variable recomendada 
$propina_recomendada = 0;
// funcion que calcula la propina en base a cuenta a pagar y eleccion de usuario 


 function calculadoraDepropinas($numero, $cuenta){

        switch($numero){
            case  '1':
                $propina_recomendada = $cuenta * 0.2;
                break;
            case  '2':
                $propina_recomendada = $cuenta * 0.1;
                break;
            case  '3':
                $propina_recomendada = $cuenta * 0.05;
                break;
                case  '4':
                $propina_recomendada = $cuenta * 0;
                break;
                
        }

         echo "El monto de la propina recomendada es $" .$propina_recomendada. " ¿Deseas dar propina?";


    
 }


 // parte del codigo en el cual vamos a pedir los datos

     echo "¿Monto a pagar ? :$";
     $cuenta = readline();


     echo "¿Que le parecio el servicio? En base a ello te recomiendo voluntariamente una propina,
     aunque puedas no hacerlo si evaluas mal el servicio o simplemente no deseas hacerlo."."\n"."\n"."1.EXCELENTE"."\n"."\n".
     "2.BUENO"."\n"."\n"."3.REGULAR"."\n"."\n"."4.MALO"."\n"."\n";
     
     $numero = readline();

     calculadoraDepropinas($numero, $cuenta);

?>



