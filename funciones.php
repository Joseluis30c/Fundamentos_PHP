<?php 
//FUNCIONES DEL SISTEMA
echo "marca de tiempo: ".time() ."<br>";
echo "raiz cuadrada de 9: ".sqrt(9) ."<br>";
echo "numero aleatorio entre 90 y 100: ".rand(98,100) ."<br>";
echo "numero pi: ".pi();


//EJERCICIOS
//Hallar el factorial de 9 
//9! = 1 * 2* 3* 4* 5* 6* 7 *8 *9

function factorial(){
	$resultado = 1;
	for($i=1; $i <= 9; $i++){
		$resultado = $resultado * $i;
	}
	echo "el factorial de 9 es: " .$resultado;
}

factorial();

//Ahora para calcular el factorial de un numero
function factorial1($n){
	$resultado = 1;
	for($i=1; $i <= $n; $i++){
		$resultado = $resultado * $i;
	}
	echo "el factorial de $n es: $resultado";
}

factorial1(6);

//Ahora una funcion que retorne un valor para poder usarlo en otras actividades
function factorial2($n){
	$resultado = 1;
	for($i=1; $i <= $n; $i++){
		$resultado = $resultado * $i;
	}
	return $resultado;
}
//lo que retorna lo guardamos en una variable
$result = factorial2(6);
echo "el factorial es: $result";


//CUANDO NO SABEMOS CUANTOS PARAMETROS REQUIERE LA FUNCION
function concatenar(...$palabras){
	$resultado = "";
	//recorremos el array
	foreach($palabras as $palabra){
		$resultado = $resultado . $palabra . " ";
		//otra manera mas corta $resultado .= $palabra . " ";
	}
	
	echo $resultado;
}

concatenar('hola','pvto','vas','a','pasar','el ciclo');

//Validar funciones - siendo estrictos

/* Decirle al compilador que la función devolverá un número entero o un flotante. */
declare(strict_types=1);

function sumarEnteros(int $n1, int $n2): int | float //: int | float - se espera que la funcion devuelva un entero o flotante de lo contrario da error
{
	return ($n1+$n2)/2;
}

$resultado1 = sumarEnteros(2,5);

echo $resultado1;
?>