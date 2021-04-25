<?php


$role = 20;
$name = "This is : ";

function test(){
	global $role,$name;
	echo $role .'<br>';

	echo $name .' Sohan<br>';

}


test();
echo $role;
