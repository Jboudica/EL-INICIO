<?php
//calcular de una lista de paises quien tiene mas medallas 
$countries = array(
    array("name" => "El salvador", "medals" => 62),
    array("name" => "Guatemala", "medals" => 2),
    array("name" => "China ", "medals" => 120),
    array("name" => "Alemania", "medals" => 35),
    array("name" => "USA", "medals" => 10),
    array("name" => "Alemania", "medals" => 70),
    array("name" => "Panama", "medals" => 8),
    array("name" => "Polonia", "medals" => 9),
    array("name" => "Colombia", "medals" => 45),
);

$max_medals = 0;
$max_country = null;

foreach ($countries as $country) {
    if ($country["medals"] > $max_medals) {

        $max_medals = $country["medals"];
        $max_country = $country["name"];
    }

}
//(max_array($countries));

//echo "country_name;" , $max_country["name"],"\n"
//echo "country_name;" , $max_country["name"],"\n"
cl


?>