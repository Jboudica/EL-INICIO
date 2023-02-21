<?php
    require "formulario.php";

    $persona = new Persona();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de Datos</h1>

    <form action="" method="POST">
        <label for="">Nombre Completo</label>
        <input type="text" name="nombre" placeholder="ingrese su nombre"><br>

        <label for="">Direccion</label>
        <input type="text" name="direccion" placeholder="ingrese su direccion"><br>

        <label for="">DUI</label>
        <input type="text" name="dui" placeholder="ingrese su dui"><br>

        <label for="">¿Que estas haciendo?</label>
        <select name="oficio" id="">
            <option value="estudiando">Estudiando</option>
            <option value="trabajando">Trabajando</option>
            <option value="ninguna">Ninguna de las anteriores</option>
        </select>

        <input type="submit" name="guardar" value="Guardar Datos">
    </form>

    <?php
        $persona->registrarPersona();
    ?>
</body>
</html>