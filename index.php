<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('lio.demarchi@gmail.com')); //true
var_dump(App\Validate::email('lio.demarchigmail.com')); //false

var_dump(App\Validate::url('https://facebook.com')); //true
var_dump(App\Validate::url('https://facebook')); //true
var_dump(App\Validate::url('facebook.com')); //false

var_dump(App\Validate::password('uj060fuk')); //true
var_dump(App\Validate::password('uj060fuk090')); //false
var_dump(App\Validate::password('uj060fu***s')); //false