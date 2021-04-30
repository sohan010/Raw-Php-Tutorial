<?php
include_once 'custom_pre_function.php';

function compare(){
    
}

$colors = ['a'=>'Green','b'=>'White','c'=>'Blue','m'=>'Black','e'=>'Yellow'];

$animal = ['e'=>'Yellow','b'=>'Sepia','m'=>'Black'];

$newArray = array_intersect_uassoc($colors,$animal,'compare');


custom_pre($newArray);

