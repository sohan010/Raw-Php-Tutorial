<?php


// function testing(&$string){
// 	$string .= "Added Something Extra";
// }


// $str = "This is a string ";
// testing($str);
// echo $str;


function first($num){
	return $num +=5;
}

function second(&$num){
	return $num +=5;
}

$number = 10;

echo second($number);