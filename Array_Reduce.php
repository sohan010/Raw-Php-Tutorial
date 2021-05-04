<?php
include_once 'custom_pre_function.php';


$colors = ['a'=>'GREEN','b'=>'white','c'=>'blue','m'=>'black','e'=>'yellow'];
$number = [10,20,30,40,50,60,70,80,90,100];
$animals = ['Cow','Goat','Deer','Cock','Sheep'];

function myFunction($n,$m){
   //return $n. "-". $m;
   return $n = $n+ $m;
}


$newArray = array_reduce($number,'myFunction');


custom_pre($newArray);
