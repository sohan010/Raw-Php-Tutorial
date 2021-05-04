<?php
include_once 'custom_pre_function.php';


$fruits = ['a'=>'lemon','b'=>'orange','c'=>'banana','m'=>'apple'];
$number = [10,20,30,40,50,60,70,80,90,100];
$animals = ['Cow','Goat','Deer','Cock','Sheep','Beer','Anaconda'];

    echo "<b>Key : </b>". key($animals) . "<br>";
    echo "<b>Current : </b>". current($animals). "<br>";
    echo "<b>Possition is : </b>". pos($animals). "<br>";

    echo "<b>Next is : </b>". next($animals). "<br>";
    echo "<b>Next is : </b>". prev($animals). "<br>";
    echo "<b>Next is : </b>". end($animals). "<br>";

    $newArray = each($animals);



 custom_pre($newArray);
