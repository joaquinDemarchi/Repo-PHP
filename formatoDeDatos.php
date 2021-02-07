<?php

//FORMATO DE DATOS///////////////////////////////////////////////////////////////////////////////////

#Alterar


$text = "<h1>PHP es UN LENGUAJE</h1>";
echo $text;
//Hacer un texto en minuscula
echo "<pre>";
echo strtolower($text);
//Hacer un texto en Mayuscula
echo "<pre>";
echo strtoupper($text);
//Convierte el primer elemento en minuscula
echo "<pre>";
echo lcfirst($text);
//Convierte el primer elemento en Mayuscula
echo "<pre>";
echo ucfirst($text);

echo "<br><br>";


#Reemplazar

//reemplazamos cada espacio vacio por un guión(-)
$slug = str_replace(' ', '-', $text);
echo $slug;
echo strtolower($slug);

echo "<br><br>";


#Modificación

//Si tenemos una factura se imprima de la siguiente forma.
$code = 39;
//Vamos a tener 8 espacio con 8 carácteres
echo "<br>";
echo str_pad($code, 8, '#');
echo "<br>";
//Ambos lados, izquierda y derecha
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_LEFT);
echo "<br>";
echo str_pad($code, 8, '#', STR_PAD_RIGHT);


#PARA ELIMINAR CUALQUIER ETIQUETA HTML

echo "<br><br>";
//En nuestra base de datos no se deben de guardar etiquetas.
//Con strip_tags eliminamos cualquier etiqueta html que contega el dato
echo strip_tags($text);

#CUANDO QUEREMOS BUSCAR LETRA O SIMBOLO EN EL STRING

// Suponemos que venimos de un formulario donde el usuario ya completó su dirección en la variable $email
//La función preg-match busca un carácter o cadena de caracteres en otra cadena. 
//Por ejemplo, para validar que en un campo donde el usuario debía escribir una dirección de email, haya una arroba.
//ARGUMENTOS OBLIGATORIOS: carácter o cadena que deseamos buscar (@), objeto donde se quiere buscar ese carácte

if (preg_match ("/@/", $email)){
print ("Email correcto");
} else {
print ("A su email le falta la arroba!");
}

//Suponemos que el usuario escribió un Comentario en la página anterior, y
//se almacenó en la variable $comentario 
//Si en cambio, queremos buscar en vez de un símbolo una letra o cadena de texto, podemos
// agregar un parámetro extra para que realice la misma tarea, pero ignorando la diferencia entre
// mayúsculas y minúsculas (por ejemplo, para que considere que “a” y “A” son iguales): i

$insulto = "tonto";
if (preg_match ("/$insulto/i", $comentario)){
print ("No se permite esa palabra. Escriba su comentario con mayor cortesía");
} else {
print ("Gracias por su comentario");
}

#nl2br

//La función nl2br convierte los “Enters”( \n) que un usuario realiza en un campo multilínea (textarea), por
// ejemplo en tags <br> de HTML con el objetivo de respetar los “puntos aparte” tal cual los ingreso el usuario.
//ARGUMENTOS OBLIGATORIOS: cadena a convertir ($comentario).

$formateado = nl2br($comentario);
print ($formateado);

echo "<br><br>";

#PARA CONTAR LA CANTIDAD DE CARACTERES DE UN TEXTO

$cuantas_letras = strlen($texto);

#PARA BUSCAR ALGO EN LA CADENA DE TEXTO

//La función strpos nos indica la posición de un determinado carácter o cadena dentro de otra cadena.
//ARGUMENTOS OBLIGATORIOS: la cadena donde buscar, y el carácter o caracteres de los que se quiere saber la posición.
//ARGUMENTOS OPCIONALES: a partir de cuál carácter de la cadena empezar la búsqueda; de todos modos, el resultado lo dará contando desde la primera posición (cero) de la cadena.

$cadena = "América Latina unida";
$abuscar = "unida";
$posicion = strpos($cadena,$abuscar);
print($posicion);
// Imprimirá 15 -comienza desde cero-.

#STRSTR

//Devuelve como resultado toda la cadena de texto hasta su final a partir del carácter especificado.
//ARGUMENTOS OBLIGATORIOS: cadena original ($email), carácter a partir del cual se quiere inicializar la cadena (@).

$email = "hernan@saberweb.com.ar";
$caracter = "@";
$dominio = strstr($email,$caracter);
print($dominio);
// Imprimirá "@saberweb.com.ar"


#ELEMENTOS MONOBYTES Y MULTIBYTES.
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno);//monobye
echo "<br>";
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos);//multibyte
