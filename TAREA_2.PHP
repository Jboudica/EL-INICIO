<?php
//calcular de una lista de paises quien tiene mas medallas
$horas = array(
    array("name" => "Juan", "Horas trabajadas" => 62),
    array("name" => "Enzor", "Horas trabajadas" => 2),
    array("name" => "Telma ", "Horas trabajadas" => 120),
    array("name" => "Bety", "Horas trabajadas" => 145),
    array("name" => "Paola", "Horas trabajadas" => 100),
    array("name" => "Madeline", "Horas trabajadas" => 170),
    array("name" => "Mirella", "Horas trabajadas" => 45),
    array("name" => "Rebeca", "Horas trabajadas" => 180),
    array("name" => "Jaime", "Horas trabajadas" => 140),
);

$max_Horastrabajadas = 0;
$max_trabajador = null;

foreach ($horas as $trabajo) {
    if ($horas["Horas trabajadas"] > $max_Horastrabajadas) {

        $max_Horastrabajadas = $horas["Horas trabajadas"];
        $max_trabajador = $trabajo["name"];
    }

}
//(max_array($countries));

//echo "country_name;" , $max_country["name"],"\n"
//echo "country_name;" , $max_country["name"],"\n"
echo "El empleado con mas horas trabajadas es: $max_Horastrabajadas con $max_trabajador medallas";

/*
1. calculate salary deductions in PHP
2 .Calculate the salary of employees based on their hourly rate in PHP:*/
