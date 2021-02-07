<?php

$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo){
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave){
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";

array_walk($frutas, 'test_print');
array_walk($frutas, 'test_alter', 'frutop'); // esta funcion altera la anterior en este caso "test_print"

echo "... y después:\n";

array_walk($frutas, 'test_print');




//otro ejemplo

$empleados = ['operario'=>'kevin',
			  'team leader'=>'karla',
			  'supervisor'=>'Juan',
			  'gerente'=>'veronica'];


function mostrar($empleados){

	echo ucfirst($empleados)."<br>";
}

array_walk($empleados, "mostrar"); //recorre el array_walk


//evalua si existe un key dentro del array

if(array_key_exists('gerente', $empleados)){
	echo "El key ". strtoupper('gerente')."si existe";
}

//evalua si existe un value dentro del array

if(in_array('Juan',$empleados)){	
	echo "El empleado Juan si existe";
}

//imprime todos los keys
print_r(array_keys($empleados));

//imprime todos los values del in_array

print_r(array_values($empleados));

?>