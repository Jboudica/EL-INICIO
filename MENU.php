<?php
//desarrollar un menu que le permita a un usuario elegir multiples funciones y que tenga 4 opciones

do{
  echo "-------------";
  echo "\n menu :\n opcion 1: burritos  \n opcion 2: pizza \n opcion 3 : pupusas \n opcion 4: comida sorpresa\n opcion 5: salir\n";
  echo "\n-------------\n";
  $opcion = readline("digite la opcion:");

  switch($opcion){
  case 1:
    echo " GRACIAS POR TU COMPRA DE CULITO DE ENZOR \n";
    break;
  case 2:
    echo " feliz compra de una pizza\n";   
     break;
  case 3:
    echo " feliz compra por tus pupusas\n";
    break;
   case 4:
    echo  " gracias por la compra\n";
    break;
    case 5:
        echo "salir del menu\n";
        break;


        default:
          echo "\nopcion invalida no esta dentro del menu\n";

      break;
    }
}while($opcion !=5);








?>