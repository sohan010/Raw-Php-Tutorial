<?php


$fruits = ["Apple","Banana","Guava",1=>"Mango"];

$vaggitable = ['a'=>"Tomato",1=>"Carrot"];


// foreach($fruits as $fr){
//     echo $fr."<br>";
// }


$afterAdd = array_replace($fruits,$vaggitable);

foreach($afterAdd as $key=> $fr){
    echo $key. ' => ' .$fr."<br>";
}

