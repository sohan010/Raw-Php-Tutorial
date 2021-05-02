<?php
include_once 'custom_pre_function.php';


$colors = ['a'=>'GREEN','b'=>'white','c'=>'blue','m'=>'black','e'=>'yellow'];

$newArray = array_flip($colors);
$arrayAfterChangingCase = array_change_key_case($newArray, CASE_LOWER);

custom_pre($arrayAfterChangingCase);
