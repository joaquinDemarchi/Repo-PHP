<?php

//ASIGNACION DE VALORES DE VARIABLES VARIABLES////////////////////////////////////////////////////////////////////

$a = "dos";
$dos = "cuatro";

echo "$a por $a es igual a ${$a}.";

function getTeacher(){
    return 'teacher';
}

$teacher = 'Joaquin';
$Joaquin = 'PHP';
$PHP = 'Symfony';

echo "${getTeacher()} quiere aprender ${$teacher} para poder usar el framework de: {${${${getTeacher()}}}}. <br/>";

