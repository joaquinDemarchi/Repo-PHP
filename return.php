<?php

echo "<h1>Return</h1>";
echo "---------------";
//Forma parte de cualquier función
//Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente

function greet(){
	return "<h1>Hola</h1>"; 
}

echo greet();


//Para retornar mas de un valor o elemento utilizamos un array
function greet1(){
	return ['PDF', 'Laravel']; 
}

echo greet1()[0]; //PDF
echo "\n";
echo greet1()[1]; //lavarel
echo "\t";



var_dump(greet1());//array(2) { [0]=> string(3) "PDF" [1]=> string(7) "Laravel"}


exit(); //detiene la ejecución del sistema
return; //retorna