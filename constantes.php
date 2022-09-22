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
        //SE RECOMIENDA DECLARAR CONSTANTES EN MAYUSCULA
        //DECLARAR CONSTANTES
        define('NOMBRE','Jose Luis Chavesta Rivas');
        echo NOMBRE;
        echo "<br>";

        define('PI', 3.1416);
        echo PI;
        echo "<br>";

        //DECLARAR CONSTANTES EN ARRAYS
        define('COLORES', ['azul','verde','rojo']);
        echo COLORES[1];
        echo "<br>";

        //SABER SI EXISTE UNA CONSTANTE DEFINIDA
        if(defined('NOMBRE2')){
            echo "si esta definido";
        }else{
            echo "No esta definido";
        }
        echo "<br>";

        //CONSTANTES RESERVADAS DE PHP
        echo "mi version es: " . PHP_VERSION;
        echo "<br>";
        echo "Mi sistema operativo: ". PHP_OS;
        echo "<br>";
        echo PHP_SAPI;//api del servidor
        echo "<br>";
        echo __LINE__; //en que linea se esta ejecutando
        echo "<br>";
        echo __FILE__; //direccion del directorio del proyecto

    ?>
</body>
</html>