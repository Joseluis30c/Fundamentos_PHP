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

        //FOR
        $filas = 10;
        
        for ($i=1; $i <=$filas; $i++) { 
            for ($j=1; $j <= $i ; $j++) { 
                echo "*";
            }
            echo "<br>";
        }


        //RECORRER UN ARRAY CON FOREACH

        $colores = ['azul','verde','rojo','negro'];

        //MOstrar solo los valores
        foreach ($colores as $color) {
            echo $color ."<br>";
        }

        //mostrar el indice y su valor
        foreach ($colores as $indice => $color) {
            echo "posicion ". $indice . "valor ". $color . "<br>";
        }
    ?>
</body>
</html>