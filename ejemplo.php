<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul>
        <?php
            $arreglo = ["computadoras","telefonos","laptops","mouse"];
            for($i=0; $i < count($arreglo); $i++){  ?>
                <li><?php echo $arreglo[$i] ?></li>
                
            <?php 
            }
            ?>
    </ul>
</body>
</html>