<?php

echo "<h1>Funciones PHP para arrays</h1>";
echo "---------------";

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


$courses = ['php', 'javascript', 'laravel'];
$course = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];

echo "ARRAY'S ORIGINAL";

echo("<pre>");
var_dump($courses);
var_dump($course);


echo "SORT";

//ordenar 
sort($courses);
#Ordenar de forma Recursiva
//rsort($courses);
echo("<pre>");
var_dump($courses);


echo "KSORT";

#Ordenar por Key
ksort($course);
//krsort($course); //Ordenar de forma Recursiva
echo "<br>";
var_dump($course);


echo "ARRAY_SLICE";

echo "<br>";
#array_slide array rebanada
//en este caso eliminamos el Key 1
array_slice($courses, 1);
var_dump(array_slice($course, 1));
//Resultado
/*
array(2) {
	[0]=>
	string(10) "javascript"
	[1]=>
	string(7) "laravel"
  }
*/

echo "ARRAY_CHUNK";

echo "<br>";
#array_chunk array pedazo
$courses_chunk = ['php', 'javascript', 'laravel'];
//en este caso crea un 2 arrays y uno de ellos contiene dos elementos de los 3 que cotiene el array principal
array_chunk($courses_chunk, 2);
var_dump(array_chunk($courses_chunk, 2));


echo "ARRAY_SHIFT";

echo "<br>";
#array_shift() 
$courses_shift = ['php', 'javascript', 'laravel'];
//Quita un elemento del principio del array
array_shift($courses_shift);
var_dump(array_shift($courses_shift));


echo "ARRAY_POP";

echo "<br>";
#array_pop()
$courses_pop = ['php', 'javascript', 'laravel'];
//Extrae el último elemento del final del array
array_pop($courses_pop);
var_dump($courses_pop);


echo "ARRAY_UNSHIFT";

echo "<br>";
#array_unshift()
$courses_unshift = ['php', 'javascript', 'laravel'];
//Añadir al inicio de un array uno a más elementos
array_unshift($courses_unshift, 'laravel2', 'javascript2');
var_dump($courses_unshift);


echo "ARRAY_PUSH";

echo "<br>";
#array_push()
$courses_push = ['php', 'javascript', 'laravel'];
//Inserta uno o más elementos al final de un array
array_push($courses_push, 'laravel1', 'javascript1');
var_dump($courses_push);


echo "ARRAY_FLIP";

echo "<br>";
#array_flip()
$courses_flip = [
	'backend' => 'php', 
	'forntend' => 'javascript'
];
//Intercambia todas las claves de un array con sus valores asociados
$intercambio = array_flip($courses_flip);
var_dump($intercambio);



echo "ARRAY_FLIP";

echo "<br>";
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
//Evalua depende al orden que coloquemos
var_dump(array_diff($arrayB, $arrayA));

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índice

/////////////////////////////ARRAY UNIENDOSE////////////////////////////////////////

echo "<h1>Unión</h1>";
echo "---------------";
echo "<br>";

$frontent = [
	'frontend' => 'javascript'
];

$backend = [
	'backend' => 'php', 
	'framework' => 'laravel'
];

echo "<pre>";
var_dump($frontent + $backend);

#array_merge()
//Combina dos o más arrays
$frontent1 = ['javascript'];
$backend1 = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontent1, $backend1));

echo "<br>";
//Ejemplo con los mismo key
#array_merge_recursive
//Une dos o más arrays recursivamente
$frontent3 = [
	'a' => 'javascript'
];

$backend3 = [
	'a' => 'php', 
	'b' => 'laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontent3, $backend3));
//Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
//resultado
/* 
array(2) {
  ["a"]=>
  array(2) {
    [0]=>
    string(10) "javascript"
    [1]=>
    string(3) "php"
  }
  ["b"]=>
  string(7) "laravel"
}
*/

echo "<br>";
//Ejemplo con los mismo key
#array_combine
//Crea un nuevo array, usando una matriz para las claves y otra para sus valores
$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));