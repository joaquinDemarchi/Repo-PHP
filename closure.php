<?php

echo "<h1>Closure</h1>";
echo "---------------";
echo "<br>";
//Función Anonima 

/*
$greet = function ($name){ //Variable que requiere lógica
	return "<h1>Hola, $name</h1>"; 
};

echo greet('Joaquin');
*/

function greet(Closure $lang, $name){ //aunque funciona sin el clousure es muy buen apractica agregarlo para incar de que estamos hablando
	return $lang($name);
} // en este caso $lang seria una variable que requiere logica 

$es = function ($name){
	return "Hola, $name";
};

$in = function ($name){
	return "Hello, $name";
}; // MUY IMPORTANTE como estamos hablando de una variable devemos finalizar la sentencia con ";"

$ale = function ($name){
	return "Hallo, $name";
};

$fr = function ($name){
	return "Salut, $name";
};

$ita = function ($name){
	return "Ciao, $name";
};

echo greet($es, 'Joaquin');
echo "<br>";
echo greet($in, 'Joaquin');
echo "<br>";
echo greet($ale, 'Joaquin');
echo "<br>";
echo greet($fr, 'Joaquin');
echo "<br>";
echo greet($ita, 'Joaquin');


echo "<br>";//MALA PRACTICA EN HTML
echo "---------------";//MALA PRACTICA EN HTML
echo "<br>";//MALA PRACTICA EN HTML


// Esta es otra forma. Es lo mismo nada mas que no se gurada a las funcones dentro de una variable.

function operadores(Closure $tipo, $valor, $valor2){
    return $tipo($valor,$valor2);
}

$multiplica = function ($valor, $valor2){ 
    $resultado = $valor * $valor2;
    return "La multiplicación de $valor por $valor2 es $resultado";
};

$resta = function ($valor, $valor2){ 
    $resultado = $valor - $valor2;
    return "La resta de $valor por $valor2 es $resultado";
};

$division = function ($valor, $valor2){ 
    $resultado = $valor / $valor2;
    return "La división de $valor por $valor2 es $resultado"; 
};

echo operadores($multiplica,15,10)."<br/>";

echo operadores($resta,15,10)."<br/>";

echo operadores($division,15,15)."<br/>";