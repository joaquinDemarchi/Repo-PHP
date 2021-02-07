<?php
/*

/: contenedores 
^: inicio
$: final
-: rango
[]: patron
{}: condiciones

*/

$password = '12345';
$password1 = '123456a';
$password2 = '123456';

//Iniciamos con un contenedo // luego iniciamos con  ^ y que solo permita un patrón del 0 al 9 [0-9] 
//la condicion en llaves y que tenga como minimo 6 elementos y máximo 9 caracteres {6,9}

echo preg_match('/^[0-9]{6,9}$/', $password); //Esta expresion regular exige caracteres desde el 0 al 9 y que tenga una longuitud de 6 a 9 caracteres
//Resultado 0
echo "<br>";
var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
//Resultado int(0)
echo "<br>";
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
//Resultado bool(true)


/*Como dato extra, los signos de "^ " y “$” NO SIEMPRE VAN...
esos ambos signos son opcionales, básicamente el signo “^” te dice que la cadena debe iniciar con tal patrón
y después de ese patrón puede tener cualquier cosa extra, el signo “$” te dice que la cadena puede tener 
cualquier cosa extra, pero debe finalizar con el patrón escrito, cuando pones “^” y “$” estás diciendo que
la cadena debe contener exactamente el patrón pasado, sirve cuando quieres evaluar cadenas exactas. 
Lo que si es cierto es que las expresiones regulares deben ir siempre entre diagonales “/” */