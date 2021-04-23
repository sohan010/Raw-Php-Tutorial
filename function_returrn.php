<?php

function result($math,$eng,$sc){

	$data = $math + $eng + $sc;
	return $data;
}

function percentage($st){
	$per = $st / 3;
	echo $per . " %  <br>";
}

function evenOddCheck($eo){

	if($eo % 100 == 0){

		return "Even Number";
	}

	return "Odd Number";
}



$total = result(10,20,30);

percentage($total);
echo evenOddCheck($total);



