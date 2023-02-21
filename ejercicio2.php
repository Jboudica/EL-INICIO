<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        /** 
         * include
         * require
         */
        //include "funciones.php";
        //require "funciones.php";
     ?>
    <!-- 
        GET, POST, PUT, DELETE
    -->
    <form action="" method="POST">
        <label for="">Ingrese un numero</label>
        <input type="text" name="numero1"><br>

        <label for="">Ingrese el segundo numero</label>
        <input type="text" name="numero2"><br>

        <input type="submit" name="guardar" value="Sumar">
    </form>
    <?php
        //isset() => metodo que valida si una variable esta vacia o nula
        if(isset($_POST['numero1'], $_POST['numero2'])){
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $suma = $numero1 + $numero2;
            echo "La suma es " . $suma;
        }

    ?>
</body>
</html>