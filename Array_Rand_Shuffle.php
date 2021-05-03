<?php
include_once 'custom_pre_function.php';


$data = [2,4,6,8,10,48,25];
$data2 = ['a'=>10,'b'=>20.6,'c'=>30.2];

 shuffle($data);

$newArray2 = array_rand($data2,2);



custom_pre($data);
custom_pre($newArray2);

