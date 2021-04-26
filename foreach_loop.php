<?php



$names = ["Sohan","Sawon","Mukta","Panna"];
$ages = ["Sohan"=>29,"Sawon"=>21,"Mukta"=>37,"Panna"=>27];


foreach ($names as $key => $value) {
	
	echo $value . "<br>";
}

echo "<br><br><br>";

echo"<ul>";
foreach ($ages as $key => $value) {
	echo "<li> $key => $value </li>";
}

echo"</ul>";