<?php


for ($i=1; $i <=10 ; $i++) { 
	if($i == 7){
		goto designation;
	}
	echo "Testing <br>";
}




designation:
	echo "I am a laravel developer";
	echo "<br>Love Programming";