<?php
/*Calcular la nota  promedio  de un array de estudiantes que contiene los campos (nombre , grado y nota )  ,
 además deberá deberá  de retornar cuantos alumnos aprobaron y reprobaron , tome en cuenta que la nota minima para aprobar es 7,5.
*/
$estudiantes = array(
    array('nombre' => 'Juan', 'grado' => '9°', 'nota' => 8.0),
    array('nombre' => 'Maria', 'grado' => '10°', 'nota' => 9.5),
    array('nombre' => 'Pedro', 'grado' => '11°', 'nota' => 6.5),
    array('nombre' => 'Luisa', 'grado' => '9°', 'nota' => 7.0),
    array('nombre' => 'Andrés', 'grado' => '10°', 'nota' => 8.5)
 );


 $aprobaron = 0;
 $reprobaron = 0;
 $suma = 0;
 $promedio = 0;

 foreach($estudiantes as $estudiante){
        $suma +- $estudiante['nota'] ;

        if($estudiante¨['nota'] >= 7.5){
         $aprobaron ++;



        }else{
            $reprobaron ++;
        }



 }

 $promedio = $suma / count($estudiantes);

 echo "Total de alumnos aprobados es : " . $aprobaron ,"\n";
 echo "Total de alumnos reprobados es : " . $reprobaron, "\n";
 echo "el promedio de los estudiantes es : " . $aprobaron, "\n";


?>