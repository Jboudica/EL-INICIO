<?php
/*
$roles = array(
         
       "programador Jr" => 600,
       "programador medium" => 600,
       "programador full" => 600,


)
*/
// Calcular el salario liquido de 10 empleados tomando en cuenta que existen 3 roles 
// con las siguientes prestaciones salariales:
// Programador Jr     $600
// Programador Middle $900
// Programador Sr	   $1800


// Debera de mostrar el salario mensual descontando (La Renta , Seguro  y AFP)
// Debera de mostrar el salario anual descontando (La Renta , Seguro  y AFP


$data = [
    [
        'empleado' => 'Jonh',
        'roles' => 'Programador Jr',
    ],
    [
        'empleado' => 'Antonio',
        'roles' => 'Programador Middle',
    ],
    [
        'empleado' => 'José',
        'roles' => 'Programador Sr',
    ],
    [
        'empleado' => 'Diego',
        'roles' => 'Programador Jr',
    ],
    [
        'empleado' => 'Carlos',
        'roles' => 'Programador Middle',
    ],
    [
        'empleado' => 'Duvan',
        'roles' => 'Programador Sr',
    ],[
        'empleado' => 'Jonh',
        'roles' => 'Programador Jr',
    ],
    [
        'empleado' => 'Alessandro',
        'roles' => 'Programador Middle',
    ],
    [
        'empleado' => 'Adonay',
        'roles' => 'Programador Sr',
    ],
    [
        'empleado' => 'Oscar',
        'roles' => 'Programador Sr',
    ],
];

// $tiempo = 1;
// $periodo = 12;
echo "#######################################" . "\n";
echo "# Salario y descuento de prestaciones #" . "\n";
echo "#######################################" . "\n";
echo "1- Salario liquido mensual" . "\n";
echo "2- Salario liquido anual" . "\n\n";
$i = readline("Ingrese un opcion: ");
echo "\n";

if($i == 1){     
    $tiempo =  1;
    $periodo = 'mensual';
}
else if($i == 2){     
    $tiempo =  12;
    $periodo = 'anual';
}
else{
    echo "Ingrese una opcion valida";
    return;
}

foreach ($data as $item) {
    if($item['roles'] == 'Programador Sr'){     
        $salario =  1800 * $tiempo;
    }
    else if($item['roles'] == 'Programador Middle'){     
        $salario =  900 * $tiempo;
    }
    else if($item['roles'] == 'Programador Jr'){     
        $salario =  600 * $tiempo;
    }
    
    $prestacion_afp   =  $salario  * 0.0625;
    $prestacion_isss   = $salario  *  0.03;
    $salario_sin_afp_isss = $salario - ($prestacion_afp + $prestacion_isss);

    if($salario_sin_afp_isss > 2038.10){
        $sobre_exceso = 2038.1;
        $cuota_fija = 288.57;
        $prestacion_renta = (($salario_sin_afp_isss - $sobre_exceso) * 0.3) + $cuota_fija;
    }
    else if($salario_sin_afp_isss > 895.24){     
        $sobre_exceso = 895.24;
        $cuota_fija = 60;
        $prestacion_renta = (($salario_sin_afp_isss - $sobre_exceso) * 0.2) + $cuota_fija;
    }
    else if($salario_sin_afp_isss > 472){     
        $sobre_exceso = 472;
        $cuota_fija = 17.67;
        $prestacion_renta = (($salario_sin_afp_isss - $sobre_exceso) * 0.1) + $cuota_fija;
    }
    else if($salario_sin_afp_isss > 0){     
        $sobre_exceso = 0;
        $cuota_fija = 0;
        $prestacion_renta = (($salario_sin_afp_isss - $sobre_exceso) + $cuota_fija);
    }

    $prestaciones_descuento = $prestacion_afp + $prestacion_isss + $prestacion_renta;
    $salario_liquido = $salario - $prestaciones_descuento;

    echo "########################" . "\n";
    echo "Empleado: " . $item['empleado'] . "\n";
    echo "Roles: " . $item['roles'] . "\n";
    echo "Salario " . $periodo . " sin prestaciones: $" . $salario . "\n";
    echo "AFP: $" . $prestacion_afp . "\n";
    echo "ISSS: $" . $prestacion_isss . "\n";
    echo "Salario(-)AFP-ISS: $" . $salario_sin_afp_isss . "\n";
    echo "Renta: $" . $prestacion_renta . "\n";
    echo "Prestaciones descuento: $" . $prestaciones_descuento . "\n";
    echo "Salario liquido " . $periodo . ": $" . $salario_liquido . "\n";
    echo "########################" . "\n\n";
}



?>
