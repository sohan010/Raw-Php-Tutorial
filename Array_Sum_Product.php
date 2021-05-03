<?php
include_once 'custom_pre_function.php';


$data = [2,4,6,8];
$data2 = ['a'=>10,'b'=>20.6,'c'=>30.2];

$newArray = array_product($data);

//$newArray2 = array_sum($data2);



custom_pre($newArray);
//custom_pre($newArray2);

