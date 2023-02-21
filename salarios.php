<?php
// hay que definir  un array con los datos de los trabajadores. lo pongo por si se me olvida como lo hice ejercicio alex solis
$trabajadores = array(
    array('nombre' => 'Juan', 'salario' => 1000, 'tiempo_servicio' => 3),
    array('nombre' => 'Maria', 'salario' => 1500, 'tiempo_servicio' => 8),
    array('nombre' => 'Pedro', 'salario' => 2000, 'tiempo_servicio' => 12),
    array('nombre' => 'merlin', 'salario' => 1000, 'tiempo_servicio' => 1),
    array('nombre' => 'nesty', 'salario' => 1500, 'tiempo_servicio' => 18),
    array('nombre' => 'alex', 'salario' => 2000, 'tiempo_servicio' => 20),
    array('nombre' => 'juana', 'salario' => 1000, 'tiempo_servicio' => 1),
    array('nombre' => 'Marcos', 'salario' => 1500, 'tiempo_servicio' => 12),
    array('nombre' => 'james', 'salario' => 2000, 'tiempo_servicio' => 21),
);

// Recorremos el array de trabajadores para calcular el aumento y el nuevo salario de cada uno.
foreach ($trabajadores as $trabajador) {
    $aumento = 0;
    if ($trabajador['tiempo_servicio'] >= 1 && $trabajador['tiempo_servicio'] < 5) {
        $aumento = 25;
    } elseif ($trabajador['tiempo_servicio'] >= 5 && $trabajador['tiempo_servicio'] < 10) {
        $aumento = 50;
    } elseif ($trabajador['tiempo_servicio'] >= 10 && $trabajador['tiempo_servicio'] < 20) {
        $aumento = 100;
    } elseif ($trabajador['tiempo_servicio'] >= 20) {
        $aumento = 150;
    }
    $nuevo_salario = $trabajador['salario'] + $aumento;

    // Imprimimos los resultados para cada trabajador.
    echo "Nombre: " . $trabajador['nombre'] . "<br>";
    echo "Salario actual: " . $trabajador['salario'] . "<br>";
    echo "Aumento: " . $aumento . "<br>";
    echo "Nuevo salario: " . $nuevo_salario . "<br><br>";
}
?>