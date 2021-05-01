<?php
include_once 'custom_pre_function.php';

function compare(){
    
}

$colors = ['a'=>'Green','b'=>'White','c'=>'Blue','m'=>'Blue','e'=>'Green'];

//$animal = ['e'=>'Yellow','b'=>'Sepia','m'=>'Black'];

$newArray1 = array_unique($colors);
$newArray = array_values($colors);



custom_pre($newArray1);
custom_pre($newArray);

