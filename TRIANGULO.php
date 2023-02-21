<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de RIMlementacion PHP</title>
</head>

<body>
    <h1>Realizar un programa que imprima un triangulo a la izquierda con asteriscos.</h1>
    <?php
    $fila = $_GET['fila'];

    for ($i = 1; $i <= $fila; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            print "*";
        }
        print "</br>\n";
    }
    ?>

    <form action="TRIANGULO.php" method="GET">
        <input type="text" name="fila">
        <br>
        <input type="submit" name="Enviar" value="Enviar">
        <input type="reset" name="Borrar" value="Borrar">
    </form>

</body>

</html>