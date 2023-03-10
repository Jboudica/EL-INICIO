<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)

// sin unset($valor), $valor aún es una referencia al último elemento: $array[3]

foreach ($array as $clave => $valor) {
    // $array[3] se actualizará con cada valor de $array...
    echo "{$clave} => {$valor} ";
    print_r($array);
}
// ...hasta que finalmente el penúltimo valor se copia al último valor

// salida:
// 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
// 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
// 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
// 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
?>

