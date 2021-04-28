<?php

$fruits = ['Mango','Mango','Apple','Banana','Guava','Painapple'];

$len =  sizeof($fruits);

for ($i=0; $i <$len ; $i++) { 
	echo $fruits[$i]. "<br>";
}

echo "<br><br>";


$animales = [

		'tiger'=>['lands','Bangladesh'],
		'rabbit'=>['lands','India'],
		'cow'=>['lands','Australia'],
];


 
	// foreach ($animales as $key => $value) {
	// 	echo $key. "=>";
	// 	foreach ($value as $key2 => $data) {
	// 		echo $data . ", ";
	// 	}

	// 	echo "<br>";
	// }


//echo count($animales['cow'],1);
echo "<pre>";
	print_r(array_count_values($fruits));
echo "</pre>";