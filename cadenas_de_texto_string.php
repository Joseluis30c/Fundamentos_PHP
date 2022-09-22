//cadenas de caracteres o string
<?php 
$cadena = "aeioui";

//cantidad de bytes de la cadena
echo strlen($cadena); //si hay letras tildadas contara como 2 bytes

//cantidad de caracteres de la cadena

echo mb_strlen($cadena);

//buscar la posicion de un caracter 
echo strpos($cadena, 'i'); //2

//si se repite el caracter buscado usar
echo strrpos($cadena, 'i'); //5

//ver si se encuentra la palabra
$frase = "Hola gente pobre";
echo str_contains($frase, 'gente'); devuelve 0 (false) 1(true)
echo str_contains($frase, 'gente') ? 'Si se encuentra' : 'No se encuentra';

//Si comienza con una palabra 
echo str_starts_with($frase, 'Hola') ? 'Si comienza' : 'No comienza';

//Si termina con una palabra
echo str_ends_with($frase, 'pobre') ? 'Si termina' : 'No termina';

//Comparar cadenas
$cade1 = "Hola";
$cade2 = "hola";
//si son iguales devuelve 0 de lo contrario un numero entero o negativo por ello se le iguala a 0
if(strcmp($cade1,$cade2) == 0){
	echo "Son iguales";
}else{
	echo "Son diferentes";
}

//Compara cadenas no importa si tiene una letra en mayusc o minusc
if(strcasecmp($cade1,$cade2) == 0){
	echo "Son iguales";
}else{
	echo "Son diferentes";
}

//extraer una porcion de una cadena

$extrae = "Hola gente";

echo substr($extrae, 1); //ola gente
echo substr($extrae, 1, 5); //ola g
echo substr($extrae, -2); //te
echo substr($extrae, -5, 3); //gen

//cambiar una palabra de la cadena
echo str_replace("gente","mundo", $extrae); //Hola mundo

//convertir toda la cadena en minnuscula
echo strtolower($extrae); //hola mundo

//convertir toda la cadena en mayuscula
echo strtoupper($extrae); //HOLA MUNDO

//solo la primera letra en mayuscula
echo ucfirst($extrae); //Hola mundo

//inicio de cada palabra en mayuscula
echo ucwords($extrae); //Hola Mundo
 



