<?php

$arreglo = ["computadoras","telefonos","laptops","mouse"];
$lista = "";
echo "<h1>Lista Desordenada</h1>";

$lista .= "<ul>";
    for($i=0; $i < count($arreglo); $i++){
        $lista .= "<li>".$arreglo[$i]."</li>";
        
    }
$lista .= "</ul>";
echo $lista;

?>