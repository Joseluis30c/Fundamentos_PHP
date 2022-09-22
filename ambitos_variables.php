//Ambito de las variables

//acceder a una variable global dentro de un ambito local
<?php 
$a = 5;
function test(){
	global $a;
	$a = 10;
}

test();
//dar parametros globales

$b = 5;
$c = 10;

function test1(&$n){
	$n = $n + 10;
}

test1($b);
test1($c);

echo $b . "<br>";
echo $c;
