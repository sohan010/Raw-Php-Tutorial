<?php

// $fruit = ['a'=>"Mango",'b'=>"Apple",'c'=>"Banana"];
// $vaggi = ['b'=> ["colors"=>['black','greeen']],'e'=>"Lemon",45,35];


//Combile Array work as first array as key and second array as Value

$num = ["me","sis1","bro","sis2"];
$name = ["Sohan","Mukta","Sawon","Panna"];

$newArray = array_combine($num,$name);



//$newArray = array_merge($fruit,$vaggi);
//$newArray = array_merge_recursive($fruit,$vaggi);

//$newArray = $fruit + $vaggi;


echo "<pre>";
    print_r($newArray);
echo "</pre>";