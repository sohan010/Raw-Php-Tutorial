<?php
include_once 'custom_pre_function.php';


$fruits = ['a'=>'lemon','b'=>'orange','c'=>'banana','m'=>'apple'];
$number = [10,20,30,40,50,60,70,80,90,100];
$animals = ['Cow','Goat','Deer','Cock','Sheep','Beer','Anaconda'];



 //sort($animals);
 //rsort($animals);

 
 //sort($fruits);
 krsort($fruits);



custom_pre($fruits);
