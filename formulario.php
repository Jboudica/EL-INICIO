<?php

/**
 * Clase: Es una plantilla donde describimos nuestro objeto
 * (atributos y metodos) con el fin de reutilizar codigo y crear varios objetos
 */

class Persona{
    
    function registrarPersona(){
        if(isset($_POST['nombre'],$_POST['direccion'],$_POST['dui'],$_POST['oficio'])){
            $tabla = "";
            //capturar la informacion 
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $dui = $_POST['dui'];
            $oficio = $_POST['oficio'];

            $tabla .= "<table>";
                $tabla .= "<thead>";
                    $tabla .= "<th>Nombre</th>";
                    $tabla .= "<th>Direccion</th>";
                    $tabla .= "<th>DUI</th>";
                    $tabla .= "<th>Oficio</th>";
                $tabla .= "</thead>";
                $tabla .= "<tbody>";
                    $tabla .= "<tr>";
                        $tabla .= "<td>$nombre</td>";
                        $tabla .= "<td>$direccion</td>";
                        $tabla .= "<td>$dui</td>";
                        $tabla .= "<td>$oficio</td>";
                    $tabla .= "</tr>";
                $tabla .= "</tbody>";
            $tabla .= "</table>";

            echo $tabla;
        }
        
    }
}

?>