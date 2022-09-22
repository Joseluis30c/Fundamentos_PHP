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
        $a = 8;
        /*switch ($a) {
            case '1':
                echo "Lunes";
                break;
            case '2':
                echo "Martes";
                break;
            case '3':
                echo "Miercoles";
                break;
            case '4':
                echo "Jueves";
                break;
            case '5':
                echo "Viernes";
            case '6':
                echo "Sabado";
                break;
            case '7':
                echo"Domingo";
                break;
            default:
                echo "No existe ese dia gil :V";
                break;
        }*/

        //SIMPLIFICANDO EL SWITCH CON MATCH

        echo match($a){
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miercoles',
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sabado',
            7 => 'Domingo',
            default => 'No existe gil'
        };

    
    /* Cálculo de la potencia de un número. */
    $base = 2;
    $exp = 5;

    $resultado = 1;

    $i=1;

    while($i <= $exp){
        $resultado = $resultado * $base;
        $i++;
    }
    echo $resultado;
    ?>

</body>
</html>