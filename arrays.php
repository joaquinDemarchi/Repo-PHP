<?php

echo "<h1>Array Simple</h1>";
echo "---------------";
echo "<br>";

#Array
//Es aquel elemento que no identificamos de manera directa.

#Array Simple
//Es aquel que no le hemos definido un Key o clave

$course = [
	'javascrip', 
	'laravel', 
	'php', 
	'vue'
];
echo '<pre>';
var_dump($course);

/*
array(4) {
  [0]=>
  string(9) "javascrip"
  [1]=>
  string(7) "laravel"
  [2]=>
  string(3) "php"
  [3]=>
  string(3) "vue"
}
*/

//Array complejos o asociativos

//Array con Key o clave definida 

echo "dkofkgkdokdfo";

$courses = [
	'javascrip', 
	'laravel', 
	10 =>'php', 
	'vue'
];							

echo '<pre>'; // le da un esapciado al codigo es para mejorar la visibilidad 
var_dump($courses); 

/*array(4) {
	[0]=>
	string(9) "javascrip"
	[1]=>
	string(7) "laravel"
	[10]=>                al agregar la llave el array cuambia de posicion los elementos y sigue contando desde dicha posicion
	string(3) "php"
	[11]=>
	string(3) "vue"
  }
*/



$courses = [
	'frontend' => 'javascript', 
	'framework' => 'laravel', 
	'backend' => 'php'
];

echo '<pre>';
var_dump($courses);

echo "<br>";

foreach ($courses as $key => $value){
	echo "$key: $value <br>";
}

echo "<br>";

echo "Foreach";

$contador = 1;
foreach ($courses as $course){
	echo "$contador.- $course <br>";
	$contador++; 
}

echo "<br>";
function upper($course){
	echo strtoupper("$course <br>");
}

array_walk($courses, 'upper');

echo "<br>";

function upper1($course, $key){
	echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'upper1');

/*	
	
	array_key_exists('frontend', $courses):Existe un Key: "esta 'frontend' en $courses?
	
	in_array('javascript', $courses):Existe un valor: "esta 'javascript' en $courses?

	array_keys($courses): Muestra todos los Key

	array_values($courses): Muestra todos los valores

	sort(): Ordena un array.
	
	ksort(): Ordena un array por clave.
	
	krsort(): Ordena un array por clave en orden inverso.

	rsort(): Ordena un array en orden inverso.
	
	array_slice(): Extrae una parte de un array.
	
	array_chunk(): Divide un array en fragmentos.
	
	array_shift(): Quita un elemento del principio del array.
	
	array_pop(): Extrae el último elemento del final del array.
	
	array_unshift(): Añadir al inicio de un array uno a más elementos.
	
	array_push(): Inserta uno o más elementos al final de un array.
	
	array_flip(): Intercambia todas las claves de un array con sus valores asociados.

	*/