<?php

//primer comentario
/* segundo comentario */
# tercer comentario

//Inicializando una variables

$saludo = "<h1>Bienvenidos Bootcamp OIM a la clase de PHP</h1>";
echo $saludo; //imprime cadenas

$numero = 3; //entero 
$numero2 = "3"; //cadena, string

$suma = $numero + $numero2;
echo $suma;

/** === verifica si el tipo de dato y valor son iguales */
if($numero === $numero2){
    echo "Son iguales";
}else{
    echo "No son iguales";
}

$decimal = 2.5; //float, double
$booleano = true; //FALSE
$dato = null; //dato nulos
$mensaje; //indefinida

//posiciones = primera posicion es 0
//true => 1, false => 0/vacio
$array = ["manzana",2,5.6,true];
$array2 = array("cebolla","zanahoria",2);
echo "<br>"; 
print_r($array); //imprime arreglos
echo "<br>"; //salto de linea
var_dump($array2); //muestra tipo de dato y valor

//Tipo de dato Objetos, aqui en php lo trabajamos con clases
class Persona{
    //definir caracteristicas del objeto persona
}

//Asignando un objeto fuera de clase
$persona = new stdClass();
$persona->nombre = "Kenia";
$persona->apellido = "Paiz";
print_r($persona);






?>

